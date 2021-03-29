# Fortinet Fortigate configuration API (FortiOS)

**Warning : this is a work in progress, it should not be used in production environment.**

PHP library used for interacting with Fortigate firewall (FortiOS) configuration API. This library can retrieve, create, update and delete configuration on the firewall.

**Warning** : This library is incomplete and mainly oriented towards IP, firewall rules, traffic shapping and web filtering. Contributions are welcome !

You can find all supported methods on [Fortinet's developer website](https://fndn.fortinet.net/), you will need an account to browse information.

## Table of contents

<!--ts-->
   * [Getting started](#getting-started)
   * [Documentation](#documentation)
      * [Config class](#config-class)
      * [FortiOSAPI class](#fortiosapi-class)
         * [Usage](#usage)
         * [Available methods](#available-methods)
<!--te-->

## Getting started

1. Get [Composer](http://getcomposer.org/).
2. Install the library using composer `composer require benclerc/fortinet-fortiosapi`.
3. Add the following to your application's main PHP file `require 'vendor/autoload.php';`.
4. Instanciate the Config class with the firewall's hostname, username and password `$configFirewall = new \Fortinet\Config('123.123.123.123', 'admin', 'password');`.
5. Use the Config object previously created to instanciate the FortiOSAPI object `$firewall = new \Fortinet\FortiOSAPI($configFirewall);`.
6. Start using the library `$staticRoutes = $firewall->getAllRouterStatic();`.

## Documentation

You can find a full documentation [here](https://benclerc.github.io/Fortinet-FortiOSAPI/).

### Config class

This Config class is used to prepare the mandatory configuration information to instanciate and use the SwitchAPI class. In the constructor you must pass :

1. The switch's hostname (FQDN) or IP address
2. A valid user's username
3. The valid user's password

Optional parameters :

* Timeout : 5000ms. Use `setTimeout()` to change.
* SSL verify peer option : TRUE. Use `setSSLVerifyPeer()` to change.
* SSL verify host option : 2. Use `setSSLVerifyHost()` to change.
* API version : 'v7'. Use `setAPIVersion()` to change (only >= v7 are supported).

Example :

```php
// Basic configuration
$configFirewall = new \Fortinet\Config('123.123.123.123', 'admin', 'password');

// Configuration for very slow firewalls/long requests
$configFirewall = new \Fortinet\Config('123.123.123.123', 'admin', 'password');
$configFirewall->setTimeout(20000);

// Unsecure configuration
$configFirewall = new \Fortinet\Config('123.123.123.123', 'admin', 'password');
$configFirewall->setSSLVerifyPeer(FALSE)->setSSLVerifyHost(FALSE);

// Special API version
$configFirewall = new \Fortinet\Config('123.123.123.123', 'admin', 'password');
$configFirewall->setAPIVersion(1);

// The class logins to the firewall when being instanciated hence the try/catch statement. 
try {
	$firewall = new \Fortinet\FortiOSAPI($configFirewall);
} catch (Exception $e) {
	echo('Handle error : '.$e->getMessage());
}
```

### SwitchAPI class

#### Usage

This class uses Exception to handle errors, for nominal execution you should instanciate and request methods inside try/catch statements.

Examples :

```php
// Get one particular static route
try {
	$res = $firewall->getRouterStatic(1);
	echo('Gateway is : '.$res->results[0]->gateway);
} catch (Exception $e) {
	echo('Handle error : '.$e->getMessage());
}
```

#### Available methods

* [startTransaction()](https://benclerc.github.io/Fortinet-FortiOSAPI/classes/Fortinet-FortiOSAPI.html#method_startTransaction) : Start a transaction (Warning : Fortinet says all tables are not supported but do not indicate which one exactly).
* [commitTransaction()](https://benclerc.github.io/Fortinet-FortiOSAPI/classes/Fortinet-FortiOSAPI.html#method_commitTransaction) : Commit a transaction (apply operations).
* [abortTransaction()](https://benclerc.github.io/Fortinet-FortiOSAPI/classes/Fortinet-FortiOSAPI.html#method_abortTransaction) : Abort a transaction (rollback operations).
