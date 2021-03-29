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
*	@property array $cache Variable use to cache information.
*	@link https://fndn.fortinet.net/ Fortinet developer ressource center.
*/
class FortiOSAPI {
	private Config $config;
	private $session_key = '';
	private $cache = [];


	/**
	 * Constructor takes care of checking and registering switch's data and login to the API
	 * @param Config $config Object containing all necessary configuration.
	 */
	public function __construct(Config $config) {
		$this->config = $config;
		// Login
		$this->login();
	}


	/**
	 * Method to request the firewall's API
	 * @param string $method HTTP method (e.g. 'GET', 'POST', 'PUT', 'DELETE' ...).
	 * @param string $endpoint API endpoint without the 2 first element ('rest' and API version '/api/vX'), e.g. /cmdb/router/static.
	 * @param stdClass $data Data to be passed in the request body as a JSON object.
	 * @return stdClass Return firewall's response as a stdClass.
	 */
	private function curlRequest(string $method, string $endpoint, stdClass $data = NULL, int $timeout = NULL) : stdClass {
		// Init CURL
		$ch = curl_init();

		// Set CURL options (URL, method used, return response in variable, data if exists and timeout)
		$url = 'https://'.$this->config->getHostname().'/api/v'.$this->config->getAPIVersion().$endpoint;
		// if GET request then put data in the URL, else in Postfield
		if ($method == 'GET' && !empty($data)) {
			$url .= '?'.http_build_query($data);
		}
		var_dump($url);
		if ($method != 'GET' && !empty($data)) {
			curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
		}
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $this->config->getSSLVerifyPeer());
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, $this->config->getSSLVerifyHost());
		$curlTimeout = (empty($timeout)) ? $this->config->getTimeout() : $timeout;
		curl_setopt($ch, CURLOPT_TIMEOUT_MS, $curlTimeout);

		// Set headers for authentication
		$headers = array();
		$headers[] = 'Content-Type: text/plain';
		// If session key exists, add it in the headers
		if (!empty($this->session_key)) {
			$headers[] = 'Authorization: Bearer '.$this->session_key;
		}
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		// Execute CURL
		$result = curl_exec($ch);
		if (curl_errno($ch)) {
		    throw new Exception('curlRequest() : Curl error : '.curl_error($ch));
		}
		// Close CURL
		curl_close ($ch);

		// Decode response
		// if (!empty($result)) {
			$resultJSON = json_decode($result);
			if (json_last_error() === JSON_ERROR_NONE) {
				// if (!empty($resultJSON->message)) {
				// 	throw new Exception('curlRequest() called by '.debug_backtrace()[1]['function'].'() : API returned error : '.$resultJSON->message);
				// } else {
					// Return decoded JSON response
					return $resultJSON;
				// }
			} else {
				throw new Exception('curlRequest() called by '.debug_backtrace()[1]['function'].'() : Curl response is not JSON as expected.');
			}
		// } else {
		// 	return TRUE;
		// }
	}


	/**
	 * Function used to create the data object for the query.
	 * @param  array|null $data Keys are variable name and values are their values.
	 * @return stdClass Data as an object.
	 */
	private function createQuerydata(array $data = NULL) : stdClass {
		$returnData = new stdClass();
		
		if (!empty($data)) {
			foreach ($data as $key => $value) {
				if (!empty($value)) {
					$returnData->{strtolower(preg_replace('/([A-Z])/', '-$1', $key))} = $value;
				}
			}
		}

		return $returnData;
	}


	/**
	 * Login in the firewall.
	 * @return bool Return TRUE if successful or throw Exception if fails.
	 */
	private function login() : bool {
		// Create and fill data object
		$data = $this->createQuerydata(['username'=>$this->config->getUsername(), 'secretkey'=>$this->config->getPassword(), 'ack_pre_disclaimer'=>TRUE, 'ack_post_disclaimer'=>TRUE, 'request_key'=>TRUE]);

		// Login
		$res = $this->curlRequest('POST', '/authentication', $data);

		// Check if login is sucessful
		if ($res->status_code == 5 && !empty($res->session_key)) {
			$this->session_key = $res->session_key;
			return TRUE;
		} else {
			throw new Exception('login() : Login failed (code : '.$res->status_code.') : '.$res->error.'.');
		}
	}


	/**
	 * Get all static routes.
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
	 * @return bool Return TRUE if successful or throw Exception if fails.
	 */
	public function getRouterStatic(bool $datasource = NULL, int $start = NULL, int $count = NULL, bool $with_meta = NULL, bool $with_contents_hash = NULL, bool $skip = NULL, string $format = NULL, string $filter = NULL, string $key = NULL, string $pattern = NULL, string $scope = NULL, bool $excludeDefaultValues = NULL, string $action = NULL, string $vdom = NULL) : stdClass {

		// Get all static routes
		return $this->curlRequest('GET', '/cmdb/router/static', $this->createQuerydata(get_defined_vars()));
	}


	/**
	 * Logout
	 * @return Return TRUE if successful, FALSE if it failed.
	 */
	private function logout() : bool {
		// Logout
		$res = $this->curlRequest('DELETE', '/authentication');
		
		// Check if logout was successful
		if ($res->status_id !== 0) {
			return FALSE;
		} else {
			return TRUE;
		}
	}


	/**
	 * Destructor takes care of logout
	 */
	public function __destruct() {
		$this->logout();
	}
}
