# Fortinet Fortigate configuration API (FortiOS)

_This library is automatically generated, if you want support for a newer version, please open an issue._

PHP library used for interacting with Fortigate firewall (FortiOS) APIs (CMDB (Configuration), Log and Monitor). This library can retrieve, create, update and delete configuration on the firewall.

You can find all supported methods on [Fortinet's developer website](https://fndn.fortinet.net/index.php?/fortiapi/1-fortios/), you will need an account to browse information.

## Table of contents

<!--ts-->
   * [Getting started](#getting-started)
   * [Documentation](#documentation)
	  * [Config class](#config-class)
		 * [Usage](#usage)
		 * [Examples](#examples)
	  * [Configuration, Log and Monitor classes](#configuration-log-and-monitor-classes)
		 * [Usage](#usage)
		 * [Examples](#examples-1)
<!--te-->

## Getting started

1. Get [Composer](http://getcomposer.org/).
2. Install the library using composer `composer require benclerc/fortinet-fortiosapi`.
3. Add the following to your application's main PHP file `require 'vendor/autoload.php';`.
4. Instanciate the Config class with the firewall's hostname, username and password `$configConnection = new \Fortinet\FortiOSAPI\Config('123.123.123.123', 'admin', 'password');`.
5. Use the Config object previously created to instanciate the FortiOSAPI object `$firewallConf = new \Fortinet\FortiOSAPI\Configuration($configConnection);`.
6. Start using the library `$staticRoutes = $firewallConf->getAllRouterStatic();`.

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
$configConnection = new \Fortinet\FortiOSAPI\Config('123.123.123.123', 'admin', 'password');

// Configuration for very slow firewalls/long requests
$configConnection = new \Fortinet\FortiOSAPI\Config('123.123.123.123', 'admin', 'password');
$configConnection->setTimeout(20000);

// Unsecure configuration
$configConnection = new \Fortinet\FortiOSAPI\Config('123.123.123.123', 'admin', 'password');
$configConnection->setSSLVerifyPeer(FALSE)->setSSLVerifyHost(FALSE);

// Special API version
$configConnection = new \Fortinet\FortiOSAPI\Config('123.123.123.123', 'admin', 'password');
$configConnection->setAPIVersion(1);

// The class logins to the firewall when being instanciated hence the try/catch statement.
// Here I use the class Configuration for the example but it the same for Log and Monitor classes.
try {
	$firewallConf = new \Fortinet\FortiOSAPI\Configuration($configConnection);
} catch (Exception $e) {
	echo('Handle error : '.$e->getMessage());
}
```

### Configuration, Log and Monitor classes

#### Usage

These classes uses Exception to handle errors, for nominal execution you should instanciate and request methods inside try/catch statements.

#### Examples

```php
// Get one particular static route
try {
	$res = $firewallConf->getRouterStatic(1);
	echo('Gateway is : '.$res->results[0]->gateway);
} catch (Exception $e) {
	echo('Handle error : '.$e->getMessage());
}

// Get routes using filters
try {
	// Will return fields dst and status of default gateways
	$res = $firewallConf->getAllRouterStatic(NULL, NULL, NULL, NULL, NULL, NULL, ['dst', 'status'], ['dst==0.0.0.0 0.0.0.0']);
	// For obvious reasons, it would be a charm to use the new PHP 8.0 syntax to call the method :
	// $firewallConf->getAllRouterStatic(format: ['dst', 'status'], filter: ['dst==0.0.0.0 0.0.0.0'])
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
	$res = $firewallConf->addRouterStatic($staticRoute);

	if ($res->status == 'success') {
		echo('Route added');
	} else {
		echo('Route adding failed');
	}
} catch (Exception $e) {
	echo('Handle error : '.$e->getMessage());
}
```
