<?php

/**
 * PHP library used for interacting with Fortigate firewall (FortiOS) API.
 * @author Benjamin Clerc <contact@benjamin-clerc.com>
 * @copyright Copyright (c) 2021, Benjamin Clerc.
 * @license MIT
 * @link https://github.com/benclerc/Fortinet-FortiOSAPI
 */

namespace Fortinet;

use Exception;

/**
 * FortiOSAPI configuration.
 * @property string $hostname Firewall's FQDN.
 * @property string $username Firewall user's valid username.
 * @property string $password Firewall user's valid password.
 * @property int $timeout Wanted HTTP requests timeout, default to 5 seconds.
 * @property bool $SSLVerifyPeer HTTP client ssl verify peer option.
 * @property int $SSLVerifyHost HTTP client ssl verify host option.
 * @property int $apiVersion API version to use, default to 2.
 * @link https://fndn.fortinet.net/ Fortinet developer ressource center.
 */
class Config
{
	private string $hostname;
	private string $username;
	private string $password;
	private int $timeout = 5000;
	private bool $SSLVerifyPeer = true;
	private int $SSLVerifyHost = 2;
	private int $apiVersion = 2;


	/**
	 * Constructor takes care of checking and registering information.
	 * @param string $hostname Firewall's FQDN or IP address.
	 * @param string $username A valid firewall user.
	 * @param string $password The valid user's password.
	 * @return Config Config object to be passed on a new instance of diffezrent FortiOS APIs classes.
	 */
	public function __construct(string $hostname, string $username, string $password)
	{
		// Check and register firewall's hostname
		if (filter_var($hostname, FILTER_VALIDATE_DOMAIN)) {
			$this->hostname = $hostname;
		} else {
			throw new Exception('__construct() : Invalid hostname provided.');
		}
		// Register username and password
		$this->username = $username;
		$this->password = $password;
	}


	/**
	 * Getter for firewall's FQDN.
	 * @return string Firewall's FQDN.
	 */
	public function getHostname() : string
	{
		return $this->hostname;
	}


	/**
	 * Getter for API autorized user.
	 * @return string API autorized user.
	 */
	public function getUsername() : string
	{
		return $this->username;
	}


	/**
	 * Getter for API autorized user's password.
	 * @return string API autorized user's password.
	 */
	public function getPassword() : string
	{
		return $this->password;
	}


	/**
	 * Getter for curl's option to verify SSL peer.
	 * @return bool Curl's option to verify SSL peer.
	 */
	public function getSSLVerifyPeer() : bool
	{
		return $this->SSLVerifyPeer;
	}


	/**
	 * Getter for curl's option to verify SSL peer.
	 * @return int Curl's option to verify SSL host.
	 */
	public function getSSLVerifyHost() : int
	{
		return $this->SSLVerifyHost;
	}


	/**
	 * Getter for curl's timeout in ms.
	 * @return int Curl's timeout in ms.
	 */
	public function getTimeout() : int
	{
		return $this->timeout;
	}


	/**
	 * Getter for API version to use.
	 * @return int API version to use.
	 */
	public function getAPIVersion() : int
	{
		return $this->apiVersion;
	}


	/**
	 * Setter for curl's option to verify SSL peer.
	 * @param int $verifySSLPeer Curl's option to verify SSL peer.
	 * @return Config Config object to be passed on a new instance of SwitchOSAPI object.
	 */
	public function setSSLVerifyPeer(int $verifySSLPeer) : Config
	{
		$this->SSLVerifyPeer = $verifySSLPeer; return $this;
	}


	/**
	 * Setter for curl's option to verify SSL peer.
	 * @param bool $verifySSLHost Curl's option to verify SSL host.
	 * @return Config Config object to be passed on a new instance of SwitchOSAPI object.
	 */
	public function setSSLVerifyHost(bool $verifySSLHost) : Config
	{
		$this->SSLVerifyHost = ($verifySSLHost) ? 2 : 0; return $this;
	}


	/**
	 * Setter for curl's timeout in ms.
	 * @param int $timeout Curl's timeout in ms.
	 * @return Config Config object to be passed on a new instance of SwitchOSAPI object.
	 */
	public function setTimeout(int $timeout) : Config
	{
		$this->timeout = $timeout; return $this;
	}


	/**
	 * Setter for API version to use.
	 * @param int $version API version to use e.g. '2'.
	 * @return Config Config object to be passed on a new instance of SwitchOSAPI object.
	 */
	public function setAPIVersion(int $version) : Config
	{
		$this->apiVersion = $version; return $this;
	}
}
