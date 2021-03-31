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

#### Usage

This Config class is used to prepare the mandatory configuration information to instanciate and use the FortiOSAPI... classes. In the constructor you must pass :

1. The switch's hostname (FQDN) or IP address
2. A valid user's username
3. The valid user's password

Optional parameters :

* Timeout : 5000ms. Use `setTimeout()` to change.
* SSL verify peer option : TRUE. Use `setSSLVerifyPeer()` to change.
* SSL verify host option : 2. Use `setSSLVerifyHost()` to change.
* API version : 2. Use `setAPIVersion()` to change.

#### Examples

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
// Here I use the class FortiOSAPICmdb for the example but it the same for FortiOSAPILog and FortiOSAPIMonitor classes.
try {
	$firewall = new \Fortinet\FortiOSAPICmdb($configFirewall);
} catch (Exception $e) {
	echo('Handle error : '.$e->getMessage());
}
```

### FortiOSAPICmdb, FortiOSAPILog and FortiOSAPIMonitor classes

#### Usage

These classes uses Exception to handle errors, for nominal execution you should instanciate and request methods inside try/catch statements.

#### Examples

```php
// Get one particular static route
try {
	$res = $firewall->getRouterStatic(1);
	echo('Gateway is : '.$res->results[0]->gateway);
} catch (Exception $e) {
	echo('Handle error : '.$e->getMessage());
}

// Set a static route
// Define the route
$staticRoute = new stdClass;
$staticRoute->status = 'enable';
$staticRoute->dst = '1.1.1.1 255.255.255.255';
$staticRoute->src = '198.168.1.0 255.255.255.0';
$staticRoute->gateway = '198.168.1.254';
$staticRoute->device = 'lan';
$staticRoute->distance = 20;

// Send the request to the firewall
try {
   $res = $firewall->addRouterStatic($staticRoute);

   if ($res->status == 'success') {
      echo('Route added');
   } else {
      echo('Route adding failed');
   }
} catch (Exception $e) {
   echo('Handle error : '.$e->getMessage());
}
```
