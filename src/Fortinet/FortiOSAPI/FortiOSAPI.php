<?php

/**
 * PHP library used for interacting with Fortigate firewall (FortiOS) API.
 * @author Benjamin Clerc <contact@benjamin-clerc.com>
 * @copyright Copyright (c) 2021, Benjamin Clerc.
 * @license MIT
 * @link https://github.com/benclerc/Fortinet-FortiOSAPI
 */

namespace Fortinet\FortiOSAPI;

use Exception;
use stdClass;

/**
 * FortiOS API
 * @property Config $config Config object with all needed information.
 * @property string $session_key Authentication token kept in cache.
 * @property int|null $transaction Ongoning transaction ID.
 * WARNING : When going through the method prepareRequestData(), all upper case letter in function parameter name will be replaced by '-' and ;brought down to lower case. If you modify or add new endpoints replace all '-' in parameter name by the next letter in uppercase.
 * @link https://fndn.fortinet.net/ Fortinet developer ressource center.
 */
class FortiOSAPI
{
	private Config $config;
	private string $session_key = '';
	private $transaction;


	/**
	 * Constructor takes care of checking and registering switch's data and login to the API
	 * @param Config $config Object containing all necessary configuration.
	 */
	public function __construct(Config $config)
	{
		// Save configuration information
		$this->config = $config;
		// Login
		$this->login();
	}


	/**
	 * Destructor takes care of logout.
	 */
	public function __destruct()
	{
		// Check if there is an ongoing transaction, if so, abort it
		if (!empty($this->transaction)) {
			$this->abortTransaction();
		}
		// Logout
		$this->logout();
	}


	/**
	 * Method to request the firewall's API.
	 * @param  string $method HTTP method (e.g. 'GET', 'POST', 'PUT', 'DELETE' ...).
	 * @param  string $endpoint API endpoint without the 2 first element ('rest' and API version '/api/vX'), e.g. /cmdb/router/static.
	 * @param  int|string $pathData Data to be passed in the request path (only one).
	 * @param  stdClass|array $queryData Data to be passed in the request query as GET arguments.
	 * @param  stdClass|array $bodyData Data to be passed in the request body as a JSON object.
	 * @return stdClass Return firewall's response as a stdClass.
	 */
	protected function curlRequest(
		string $method,
		string $endpoint,
		$pathData = null,
		$queryData = null,
		$bodyData = null,
		int $timeout = null
	) : stdClass {
		// Init CURL
		$ch = curl_init();

		// Forge URL
		$url = 'https://'.$this->config->getHostname().'/api/v'.$this->config->getAPIVersion().$endpoint;
		// If set, add the value which must appear in the path
		if (!empty($pathData)) {
			$url .= '/'.$pathData;
		}
		// If set, add query values in the URL
		if (!empty($queryData)) {
			$url .= '?'.$this->httpBuildCustomQuery($queryData);
		}
		// If set, add body values in the body as a JSON string
		if (!empty($bodyData)) {
			curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($bodyData));
		}

		// Set CURL options (URL, method used, return response in variable, data if exists and timeout)
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $this->config->getSSLVerifyPeer());
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, $this->config->getSSLVerifyHost());
		$curlTimeout = (empty($timeout)) ? $this->config->getTimeout() : $timeout;
		curl_setopt($ch, CURLOPT_TIMEOUT_MS, $curlTimeout);

		// Create the array of headers and fill it
		$headers = array();
		// Misc
		$headers[] = 'Content-Type: application/json';
		$headers[] = 'accept: application/json';
		// If session key exists, add it in the headers for authentication
		if (!empty($this->session_key)) {
			$headers[] = 'Authorization: Bearer '.$this->session_key;
		}
		// If transaction ID exists, add it to the headers
		if (!empty($this->transaction)) {
			$headers[] = 'X-TRANSACTION-ID: '.$this->transaction;
		}
		// Set headers in curl request
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		// Execute CURL
		$result = curl_exec($ch);
		if (curl_errno($ch)) {
		    throw new Exception('curlRequest() : Curl error : '.curl_error($ch));
		}
		// Close CURL
		curl_close ($ch);

		// Decode response
		$resultJSON = json_decode($result);
		if (json_last_error() === JSON_ERROR_NONE) {
			if (isset($resultJSON->http_status) && $resultJSON->http_status != 200) {
				$message = 'curlRequest() called by '.debug_backtrace()[1]['function'].'() : Error : HTTP '.$resultJSON->http_status.', code '.$resultJSON->error;
				$message .= (!empty($resultJSON->cli_error)) ? ', details : '.$resultJSON->cli_error.'.' : '.';
				throw new Exception($message);
			}
			return $resultJSON;
		} else {
			throw new Exception('curlRequest() called by '.debug_backtrace()[1]['function'].'() : Curl response is not JSON as expected.');
		}
	}


	/**
	 * Function used to build a query with params but following fortigate satndards.
	 * @param  array $data Array of data.
	 * @return string Return the data encoded in a string to be passed as an URL.
	 */
	private function httpBuildCustomQuery(array $data) : string
	{
		$query = '';
		$first = TRUE;
		foreach ($data as $key => $value) {
			// Handle empty values
			if (empty($value)) {
				continue;
			}

			// Handle & between values
			if ($first) {
				$first = FALSE;
			} else {
				$query .= '&';
			}

			// Handle different types of arguments
			switch ($key) {
				// If param is "filter", then we combine values by repeating the key multiple times
				case 'filter':
					foreach ($value as $key2 => $value2) {
						if ($key2 > 0) { $query .= '&'; }
						$query .= urlencode($key).'='.urlencode($value2);
					}
					break;

				// If param is "format", then we combine values with a pipe "|"
				case 'format':
					$query .= urlencode($key).'=';
					foreach ($value as $key2 => $value2) {
						if ($key2 > 0) { $query .= '|'; }
						$query .= urlencode($value2);
					}
					break;

				// Else with classicly insert values in query
				default:
					if ($first) { $first = FALSE; }
					$query .= urlencode($key).'='.urlencode($value);
					break;
			}
		}

		return $query;
	}


	/**
	 * Login in the firewall.
	 * @return bool Return TRUE if successful or throw Exception if fails.
	 */
	private function login() : bool
	{
		// Create and fill the body object
		$body = new stdClass;
		$body->username = $this->config->getUsername();
		$body->secretkey = $this->config->getPassword();
		$body->ack_pre_disclaimer = TRUE;
		$body->ack_post_disclaimer = TRUE;
		$body->request_key = TRUE;

		// Login
		$res = $this->curlRequest('POST', '/authentication', NULL, NULL, $body);

		// Check if login is sucessful
		if ($res->status_code == 5 && !empty($res->session_key)) {
			$this->session_key = $res->session_key;
			return TRUE;
		} else {
			throw new Exception('login() : Login failed (code : '.$res->status_code.') : '.$res->error.'.');
		}
	}


	/**
	 * Logout from the firewall.
	 * @return Return TRUE if successful, FALSE if it failed.
	 */
	private function logout() : bool
	{
		$res = $this->curlRequest('DELETE', '/authentication');

		// Check if logout was successful
		if ($res->status_id !== 0) {
			return FALSE;
		} else {
			return TRUE;
		}
	}


	/**
	 * List all transactions.
	 * @return bool Return the firewall's response as an object.
	 * As of version 6.4.5, this method sometimes returns unparsable JSON.
	 */
	public function listTransactions(string $vdom = null) : stdClass
	{
		// Retrieve ongoing transactions
		return $this->curlRequest('GET', '/cmdb', NULL, ['action'=>'transaction-list', 'vdom'=>$vdom]);
	}


	/**
	 * Start a transaction (Warning : Fortinet says all tables are not supported but do not indicate which one exactly).
	 * @param  int $timeout Transaction's timeout.
	 * @param  string|null $vdom Specify the Virtual Domain from which results are returned or changes are applied to. If this parameter is not provided, the management VDOM will be used. If the admin does not have access to the VDOM, a permission error will be returned.
	 * @return bool Return TRUE on success and FALSE on failure.
	 */
	public function startTransaction(int $timeout = null, string $vdom = null) : bool
	{
		$res = $this->curlRequest('POST', '/cmdb', NULL, ['action'=>'transaction-start', 'vdom'=>$vdom], ['timeout'=>$timeout]);

		// Check result
		if (!empty($res->status) && $res->status == 'success' && !empty($res->results->{'transaction-id'})) {
			$this->transaction = $res->results->{'transaction-id'};
			return TRUE;
		} else {
			return FALSE;
		}
	}


	/**
	 * Commit a transaction (apply operations).
	 * @param  string|null $vdom Specify the Virtual Domain from which results are returned or changes are applied to. If this parameter is not provided, the management VDOM will be used. If the admin does not have access to the VDOM, a permission error will be returned.
	 * @return bool Return TRUE on success and FALSE on failure.
	 */
	public function commitTransaction(string $vdom = null) : bool
	{
		$res = $this->curlRequest('POST', '/cmdb', NULL, ['action'=>'transaction-commit', 'vdom'=>$vdom], ['transaction-id'=>$this->transaction]);

		// Reset transaction number no matter the result
		$this->transaction = NULL;

		// Check result
		if (!empty($res->status) && $res->status == 'success') {
			return TRUE;
		} else {
			return FALSE;
		}
	}


	/**
	 * Abort a transaction (rollback operations).
	 * @param  string|null $vdom Specify the Virtual Domain from which results are returned or changes are applied to. If this parameter is not provided, the management VDOM will be used. If the admin does not have access to the VDOM, a permission error will be returned.
	 * @return bool Return TRUE on success and FALSE on failure.
	 */
	public function abortTransaction(string $vdom = null) : bool
	{
		$res = $this->curlRequest('POST', '/cmdb', NULL, ['action'=>'transaction-abort', 'vdom'=>$vdom], ['transaction-id'=>$this->transaction]);

		// Reset transaction number no matter the result
		$this->transaction = NULL;

		// Check result
		if (!empty($res->status) && $res->status == 'success') {
			return TRUE;
		} else {
			return FALSE;
		}
	}
}
