# Fortinet Fortigate configuration API (FortiOS)

PHP library used for interacting with Fortigate firewall (FortiOS) configuration API. This library can retrieve, create, update and delete configuration on the firewall.

**Warning** : This library is incomplete and mainly oriented towards IP, firewall rules, traffic shapping and web filtering. Contributions are welcome !

You can find all supported methods on [Fortinet's developer website](https://fndn.fortinet.net/), you will need an account to browse information.

## Table of contents

<!--ts-->
   * [Getting started](#getting-started)
   * [Documentation](#documentation)
      * [Config class](#config-class)
      * [SwitchAPI class](#switchapi-class)
         * [Usage](#usage)
         * [Available methods](#available-methods)
<!--te-->

## Getting started

1. Get [Composer](http://getcomposer.org/).
2. Install the library using composer `composer require benclerc/aruba-switchapi`.
3. Add the following to your application's main PHP file `require 'vendor/autoload.php';`.
4. Instanciate the Config class with the switch's hostname, username and password `$configSwitch = new \Aruba\Config('123.123.123.123', 'admin', 'password');`.
5. Use the Config object previously created to instanciate the SwitchAPI object `$switch = new \Aruba\SwitchAPI($configSwitch);`.
6. Start using the library `$runningConf = $switch->getRunningConfig();`.

## Documentation

You can find a full documentation [here](https://benclerc.github.io/Aruba-SwitchAPI/).

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
$configSwitch = new \Aruba\Config('123.123.123.123', 'admin', 'password');

// Configuration for very slow switchs/long requests
$configSwitch = new \Aruba\Config('123.123.123.123', 'admin', 'password');
$configSwitch->setTimeout(20000);

// Unsecure configuration
$configSwitch = new \Aruba\Config('123.123.123.123', 'admin', 'password');
$configSwitch->setSSLVerifyPeer(FALSE)->setSSLVerifyHost(FALSE);

// Special API version
$configSwitch = new \Aruba\Config('123.123.123.123', 'admin', 'password');
$configSwitch->setAPIVersion('v8');

// The class logins to the switch when being instanciated hence the try/catch statement. 
try {
	$switch = new \Aruba\SwitchAPI($configSwitch);
} catch (Exception $e) {
	echo('Handle error : '.$e->getMessage());
}
```

### SwitchAPI class

#### Usage

This class uses Exception to handle errors, for nominal execution you should instanciate and request methods inside try/catch statements.

Examples :

```php
// Blink for 1 min LED locator
try {
	$res = $switch->blinkLedLocator(2, 1);
	if ($res) {
		echo('Blink succeeded');
	} else {
		echo('Blink failed');
	}
} catch (Exception $e) {
	echo('Handle error : '.$e->getMessage());
}

// Create a VLAN
try {
	$res = $switch->createVlan(666, 'HELL');
	if ($res) {
		echo('The VLAN has been created.');
	} else {
		echo('Error : the VLAN was not created.');
	}
} catch (Exception $e) {
	echo('Handle error : '.$e->getMessage());
}

// Get status of all ports
try {
	$res = $switch->getPortsStatus();
	if ($res != FALSE) {
		foreach ($res as $key => $value) {
			$status = ($value->is_port_enabled) ? 'up' : 'down';
			echo('Port '.$value->id.' is '.$status.'<br>');
		}
	} else {
		echo('Error : status could not be retrieved.');
	}
} catch (Exception $e) {
	echo('Handle error : '.$e->getMessage());
}

// Set untagged VLAN 666 on port 42
try {
	$res = $switch->setUVlanPort(666, '42');
	if ($res) {
		echo('The VLAN 666 has been affected to the port 42.');
	} else {
		echo('Error : the VLAN was not affected.');
	}
} catch (Exception $e) {
	echo('Handle error : '.$e->getMessage());
}
```

#### Available methods

* [blinkLedLocator()](https://benclerc.github.io/Aruba-SwitchAPI/classes/Aruba-SwitchAPI.html#method_blinkLedLocator) : Turn on or off the locator LED. If no duration is set, default to 30 minutes.
* [cli()](https://benclerc.github.io/Aruba-SwitchAPI/classes/Aruba-SwitchAPI.html#method_cli) : Execute a CLI command.
* [createVlan()](https://benclerc.github.io/Aruba-SwitchAPI/classes/Aruba-SwitchAPI.html#method_createVlan) : Create a VLAN on the switch.
* [deleteVlan()](https://benclerc.github.io/Aruba-SwitchAPI/classes/Aruba-SwitchAPI.html#method_deleteVlan) : Delete a VLAN on the switch.
* [disablePoePort()](https://benclerc.github.io/Aruba-SwitchAPI/classes/Aruba-SwitchAPI.html#method_disablePoePort) : Disable POE on a port.
* [disablePort()](https://benclerc.github.io/Aruba-SwitchAPI/classes/Aruba-SwitchAPI.html#method_disablePort) : Disable a port.
* [enablePoePort()](https://benclerc.github.io/Aruba-SwitchAPI/classes/Aruba-SwitchAPI.html#method_enablePoePort) : Enable POE on a port.
* [enablePort()](https://benclerc.github.io/Aruba-SwitchAPI/classes/Aruba-SwitchAPI.html#method_enablePort) : Enable a port.
* [getMacAddressInfo()](https://benclerc.github.io/Aruba-SwitchAPI/classes/Aruba-SwitchAPI.html#method_getMacAddressInfo) : Get infos about a MAC address.
* [getMacTable()](https://benclerc.github.io/Aruba-SwitchAPI/classes/Aruba-SwitchAPI.html#method_getMacTable) : Get MAC table of the switch.
* [getMacTablePort()](https://benclerc.github.io/Aruba-SwitchAPI/classes/Aruba-SwitchAPI.html#method_getMacTablePort) : Get MAC table of a port.
* [getPortsPOEStatus()](https://benclerc.github.io/Aruba-SwitchAPI/classes/Aruba-SwitchAPI.html#method_getPortsPOEStatus) : Get all ports POE status.
* [getPortsStatus()](https://benclerc.github.io/Aruba-SwitchAPI/classes/Aruba-SwitchAPI.html#method_getPortsStatus) : Get all ports status.
* [getRunningConfig()](https://benclerc.github.io/Aruba-SwitchAPI/classes/Aruba-SwitchAPI.html#method_getRunningConfig) : Get runnning configuration.
* [getTVlanPort()](https://benclerc.github.io/Aruba-SwitchAPI/classes/Aruba-SwitchAPI.html#method_getTVlanPort) : Get the tagged vlan for one port.
* [getUVlanPort()](https://benclerc.github.io/Aruba-SwitchAPI/classes/Aruba-SwitchAPI.html#method_getUVlanPort) : Get the untagged vlan for one port.
* [getVlanPorts()](https://benclerc.github.io/Aruba-SwitchAPI/classes/Aruba-SwitchAPI.html#method_getVlanPorts) : Get list of ports for one vlan.
* [getVlans()](https://benclerc.github.io/Aruba-SwitchAPI/classes/Aruba-SwitchAPI.html#method_getVlans) : Get all VLANs on the switch.
* [getVlansPort()](https://benclerc.github.io/Aruba-SwitchAPI/classes/Aruba-SwitchAPI.html#method_getVlansPort) : Get list of vlans affected to one port.
* [getVlansPorts()](https://benclerc.github.io/Aruba-SwitchAPI/classes/Aruba-SwitchAPI.html#method_getVlansPorts) : Get list of vlans/ports association.
* [isPortEnabled()](https://benclerc.github.io/Aruba-SwitchAPI/classes/Aruba-SwitchAPI.html#method_isPortEnabled) : Check if a port is enabled.
* [isPortUp()](https://benclerc.github.io/Aruba-SwitchAPI/classes/Aruba-SwitchAPI.html#method_isPortUp) : Check if a port is up.
* [portPoeStatus()](https://benclerc.github.io/Aruba-SwitchAPI/classes/Aruba-SwitchAPI.html#method_portPoeStatus) : Check if a port is POE enabled.
* [restartPoePort()](https://benclerc.github.io/Aruba-SwitchAPI/classes/Aruba-SwitchAPI.html#method_restartPoePort) : Restart POE on a port.
* [restartPort()](https://benclerc.github.io/Aruba-SwitchAPI/classes/Aruba-SwitchAPI.html#method_restartPort) : Disable a port 5sec and re-enable it.
* [setTVlanPort()](https://benclerc.github.io/Aruba-SwitchAPI/classes/Aruba-SwitchAPI.html#method_setTVlanPort) : Set tagged VLAN(s) on port.
* [setUVlanPort()](https://benclerc.github.io/Aruba-SwitchAPI/classes/Aruba-SwitchAPI.html#method_setUVlanPort) : Set untagged VLAN on port.
* [updateVlan()](https://benclerc.github.io/Aruba-SwitchAPI/classes/Aruba-SwitchAPI.html#method_updateVlan) : Update a VLAN on the switch.
