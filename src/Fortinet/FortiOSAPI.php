<?php

/**
* 	PHP library used for interacting with Fortigate firewall (FortiOS) configuration API.
*	@author Benjamin Clerc <contact@benjamin-clerc.com>
*	@copyright Copyright (c) 2021, Benjamin Clerc.
*	@license MIT
*	@link https://github.com/benclerc/Fortinet-FortiOSAPI
*/

namespace Fortinet;

use Exception;
use stdClass;

/**
* 	FortiOS configuration API
*	@property Config $config Config object with all needed information.
*	@property string $session_key Authentication token kept in cache.
*	@property int|null $transaction Ongoning transaction ID.
*	WARNING : When going through the method prepareRequestData(), all upper case letter in function parameter name will be replaced by '-' and brought down to lower case. If you modify or add new endpoints replace all '-' in parameter name by the next letter in uppercase.
*	@link https://fndn.fortinet.net/ Fortinet developer ressource center.
*/
class FortiOSAPI {
	private Config $config;
	private string $session_key = '';
	private $transaction;


	//////////
	// MISC //
	//////////

	/**
	 * Constructor takes care of checking and registering switch's data and login to the API
	 * @param Config $config Object containing all necessary configuration.
	 */
	public function __construct(Config $config) {
		// Save configuration information
		$this->config = $config;
		// Login
		$this->login();
	}


	/**
	 * Destructor takes care of logout.
	 */
	public function __destruct() {
		$this->logout();
	}


	/**
	 * Method to request the firewall's API
	 * @param  string $method HTTP method (e.g. 'GET', 'POST', 'PUT', 'DELETE' ...).
	 * @param  string $endpoint API endpoint without the 2 first element ('rest' and API version '/api/vX'), e.g. /cmdb/router/static.
	 * @param  int|string $pathData Data to be passed in the request path (only one).
	 * @param  stdClass|array $queryData Data to be passed in the request query as GET arguments.
	 * @param  stdClass|array $bodyData Data to be passed in the request body as a JSON object.
	 * @return stdClass Return firewall's response as a stdClass.
	 */
	private function curlRequest(string $method, string $endpoint, $pathData = NULL, $queryData = NULL, $bodyData = NULL, int $timeout = NULL) : stdClass {
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
			$url .= '?'.http_build_query($queryData);
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
			var_dump($result);
			throw new Exception('curlRequest() called by '.debug_backtrace()[1]['function'].'() : Curl response is not JSON as expected.');
		}
	}


	/**
	 * Function used to create the data object for the request. Warning : this method will always discard a variable named "body" or "seqnum".
	 * @param  array|null $data Keys are variable name and values are their values.
	 * @return stdClass Data as an object.
	 */
	private function prepareRequestData(array $data = NULL) : stdClass {
		$returnData = new stdClass();
		if (!empty($data)) {
			foreach ($data as $key => $value) {
				if (!empty($value) && $key !== 'body' && $key !== 'seqnum') {
					$returnData->{strtolower(preg_replace('/([A-Z])/', '-$1', $key))} = $value;
				}
			}
		}
		return $returnData;
	}


	////////////////////
	// AUTHENTICATION //
	////////////////////

	/**
	 * Login in the firewall.
	 * @return bool Return TRUE if successful or throw Exception if fails.
	 */
	private function login() : bool {
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
	 * Logout
	 * @return Return TRUE if successful, FALSE if it failed.
	 */
	private function logout() : bool {
		$res = $this->curlRequest('DELETE', '/authentication');
		
		// Check if logout was successful
		if ($res->status_id !== 0) {
			return FALSE;
		} else {
			return TRUE;
		}
	}


	//////////////////
	// TRANSACTIONS //
	//////////////////

	/**
	 * List all transactions.
	 * @return bool Return the firewall's response as an object.
	 *
	 * As of version 6.4.5, this method sometimes returns unparsable JSON.
	 * 
	 */
	public function listTransactions(string $vdom = NULL) : stdClass {
		// Retrieve ongoing transactions
		return $this->curlRequest('GET', '/cmdb', NULL, ['action'=>'transaction-list', 'vdom'=>$vdom]);
	}


	/**
	 * Start a transaction (Warning : Fortinet says all tables are not supported but do not indicate which one exactly).
	 * @param  int $timeout Transaction's timeout.
	 * @param  string|null $vdom Specify the Virtual Domain from which results are returned or changes are applied to. If this parameter is not provided, the management VDOM will be used. If the admin does not have access to the VDOM, a permission error will be returned.
	 * @return bool Return TRUE on success and FALSE on failure.
	 */
	public function startTransaction(int $timeout = NULL, string $vdom = NULL) : bool {
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
	public function commitTransaction(string $vdom = NULL) : bool {
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
	public function abortTransaction(string $vdom = NULL) : bool {
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


	////////////////////
	// STATIC ROUTING //
	////////////////////

	/**
	 * Select a specific entry from a CLI table. Access Group: netgrp
	 * @param  int $seqnum Sequence number of the route to be deleted.
	 * @param  bool|null $datasource Enable to include datasource information for each linked object.
	 * @param  bool|null $with_meta Enable to include meta information about each object (type id, references, etc).
	 * @param  bool|null $skip Enable to call CLI skip operator to hide skipped properties.
	 * @param  string|null $format List of property names to include in results, separated by | (i.e. policyid|srcintf).
	 * @param  string|null $action default: Return the CLI default values for entire CLI tree.
	 * meta: Return meta data for a specific object, table, or the entire CLI tree.
	 * schema: Return schema for entire CLI tree.
	 * Available values : default, schema.
	 * @param  string|null $vdom Specify the Virtual Domain(s) from which results are returned or changes are applied to. If this parameter is not provided, the management VDOM will be used. If the admin does not have access to the VDOM, a permission error will be returned.
	 * The URL parameter is one of:
	 * vdom=root (Single VDOM)
	 * vdom=vdom1,vdom2 (Multiple VDOMs)
	 * vdom=* (All VDOMs)
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getRouterStatic(int $seqnum, bool $datasource = NULL, bool $with_meta = NULL, bool $skip = NULL, string $format = NULL, string $action = NULL, string $vdom = NULL) : stdClass {
		return $this->curlRequest('GET', '/cmdb/router/static', $seqnum, $this->prepareRequestData(get_defined_vars()));
	}


	/**
	 * Update this specific resource. Access Group: netgrp
	 * @param  stdClass $body All parameters describing the route details as a JSON document.
	 * @param  string|null $vdom Specify the Virtual Domain(s) from which results are returned or changes are applied to. If this parameter is not provided, the management VDOM will be used. If the admin does not have access to the VDOM, a permission error will be returned.
	 * The URL parameter is one of:
	 * vdom=root (Single VDOM)
	 * vdom=vdom1,vdom2 (Multiple VDOMs)
	 * vdom=* (All VDOMs)
	 * @param  string|null $action If supported, an action can be specified.
	 * move: Move this specific resource.
	 * When action=move is set, one of the extra parameters (before, after) must be provided.
	 * Note: If this parameter is provided when not supported, the action will be ignored and an “invalid request” error will be returned.
	 * Available values : move
	 * @param  string $before If action=move, use before to specify the ID of the resource that this resource will be moved before.
	 * For example, to move object 1 to before object 2, use:
	 * action=move&before=2
	 * Note: This parameter can only be used when the action parameter is set to move.
	 * @param  string $after If action=move, use after to specify the ID of the resource that this resource will be moved after.
	 * For example, to move object 1 to after object 3, use:
	 * action=move&after=3
	 * Note: This parameter can only be used when the action parameter is set to move.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function updateRouterStatic(int $seqnum, stdClass $body, string $vdom = NULL, string $action = NULL, string $before = NULL, string $after = NULL) : stdClass {
		return $this->curlRequest('PUT', '/cmdb/router/static', $seqnum, $this->prepareRequestData(get_defined_vars()), $body);
	}


	/**
	 * Delete this specific resource. Access Group: netgrp
	 * @param  int $seqnum Sequence number of the route to be deleted.
	 * @param  string|null $vdom Specify the Virtual Domain(s) from which results are returned or changes are applied to. If this parameter is not provided, the management VDOM will be used. If the admin does not have access to the VDOM, a permission error will be returned.
	 * The URL parameter is one of:
	 * vdom=root (Single VDOM)
	 * vdom=vdom1,vdom2 (Multiple VDOMs)
	 * vdom=* (All VDOMs)
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function deleteRouterStatic(int $seqnum, string $vdom = NULL) : stdClass {
		return $this->curlRequest('DELETE', '/cmdb/router/static/', $seqnum, $this->prepareRequestData(['vdom'=>$vdom]));
	}


	/**
	 * Select all entries in a CLI table. Access Group: netgrp
	 * @param  bool|null $datasource Enable to include datasource information for each linked object.
	 * @param  int|null $start Starting entry index.
	 * @param  int|null $count Maximum number of entries to return.
	 * @param  bool|null $with_meta Enable to include meta information about each object (type id, references, etc).
	 * @param  bool|null $with_contents_hash Enable to include a checksum of each object's contents.
	 * @param  bool|null $skip Enable to call CLI skip operator to hide skipped properties.
	 * @param  string|null $format List of property names to include in results, separated by | (i.e. policyid|srcintf).
	 * @param  string|null $filter Filtering multiple key/value pairs
	 * Operator | Description
	 * == | Case insensitive match with pattern.
	 * != | Does not match with pattern (case insensitive).
	 * =@ | Pattern found in object value (case insensitive).
	 * !@ | ﻿Pattern not﻿ found in object value (case insensitive).
	 * <= | Value must be less than or equal to ﻿pattern﻿.
	 * < | Value must be less than pattern﻿.
	 * .>= | Value must be greater than or equal to ﻿pattern﻿.
	 * .> | Value must be greater than ﻿pattern﻿.
	 * Logical OR | Separate filters using commas ','
	 * Logical AND | Filter strings can be combined to create logical AND queries by including multiple filters in the request.
	 * Combining AND and OR | You can combine AND and OR filters together to create more complex filters.
	 * @param  string|null $key If present, objects will be filtered on property with this name.
	 * @param  string|null $pattern If present, objects will be filtered on property with this value.
	 * @param  string|null $scope Scope [global|vdom|both*]
	 * @param  bool|null $excludeDefaultValues Exclude properties/objects with default value.
	 * @param  string|null $action default: Return the CLI default values for entire CLI tree.
	 * meta: Return meta data for a specific object, table, or the entire CLI tree.
	 * schema: Return schema for entire CLI tree.
	 * Available values : default, schema.
	 * @param  string|null $vdom Specify the Virtual Domain(s) from which results are returned or changes are applied to. If this parameter is not provided, the management VDOM will be used. If the admin does not have access to the VDOM, a permission error will be returned.
	 * The URL parameter is one of:
	 * vdom=root (Single VDOM)
	 * vdom=vdom1,vdom2 (Multiple VDOMs)
	 * vdom=* (All VDOMs)
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllRouterStatic(bool $datasource = NULL, int $start = NULL, int $count = NULL, bool $with_meta = NULL, bool $with_contents_hash = NULL, bool $skip = NULL, string $format = NULL, string $filter = NULL, string $key = NULL, string $pattern = NULL, string $scope = NULL, bool $excludeDefaultValues = NULL, string $action = NULL, string $vdom = NULL) : stdClass {
		return $this->curlRequest('GET', '/cmdb/router/static', NULL, $this->prepareRequestData(get_defined_vars()));
	}


	/**
	 * Create object(s) in this table. Access Group: netgrp
	 * @param  stdClass $body All parameters describing the route details as a JSON document.
	 * @param  string|null $vdom Specify the Virtual Domain(s) from which results are returned or changes are applied to. If this parameter is not provided, the management VDOM will be used. If the admin does not have access to the VDOM, a permission error will be returned.
	 * The URL parameter is one of:
	 * vdom=root (Single VDOM)
	 * vdom=vdom1,vdom2 (Multiple VDOMs)
	 * vdom=* (All VDOMs)
	 * @param  string|null $action If supported, an action can be specified.
	 * clone: Clone this specific resource.
	 * When action=clone is set, the extra parameters nkey must be provided.
	 * Note: If this parameter is provided when not supported, the action will be ignored and an “invalid request” error will be returned.
	 * Available values : clone
	 * @param  string|null $nkey If action=clone, use nkey to specify the ID for the new resource to be created.
	 * For example, to clone address1 to address1_clone, use:
	 * action=clone&nkey=address1_clone
	 * Note: This parameter can only be used when the action parameter is set to clone
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addRouterStatic(stdClass $body, string $vdom = NULL, string $action = NULL, string $nkey = NULL) : stdClass {
		return $this->curlRequest('POST', '/cmdb/router/static', NULL, $this->prepareRequestData(get_defined_vars()), $body);
	}

}
