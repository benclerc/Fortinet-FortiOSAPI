# OpenAPIClient-php

REST API for configuring FortiOS objects and settings

For more information, please visit [http://modskristensen.net](http://modskristensen.net).

## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/benclerc/Fortigate-FortiOS-CMDB.git"
    }
  ],
  "require": {
    "benclerc/Fortigate-FortiOS-CMDB": "*@dev"
  }
}
```

Then run `composer install`

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__.'/vendor/autoload.php');



// Configure API key authorization: APIKeyQueryParam
$config = Fortigate\FortiOS\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Fortigate\FortiOS\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');


$apiInstance = new Fortigate\FortiOS\CMDB\AlertemailSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$datasource = True; // bool | Enable to include datasource information for each linked object.
$start = 56; // int | Starting entry index.
$count = 56; // int | Maximum number of entries to return.
$with_meta = True; // bool | Enable to include meta information about each object (type id, references, etc).
$with_contents_hash = True; // bool | Enable to include a checksum of each object's contents.
$skip = True; // bool | Enable to call CLI skip operator to hide skipped properties.
$format = array('format_example'); // string[] | List of property names to include in results, separated by | (i.e. policyid|srcintf).
$filter = array('filter_example'); // string[] | Filtering multiple key/value pairs Operator     |   Description ==     |   Case insensitive match with pattern. !=     |    Does not match with pattern (case insensitive). =@     |    Pattern found in object value (case insensitive). !@     |    ﻿Pattern not﻿ found in object value (case insensitive). <=     |    Value must be less than or equal to ﻿pattern﻿. <     |    Value must be less than pattern﻿. .>=    |    Value must be greater than or equal to ﻿pattern﻿. .>     |    Value must be greater than ﻿pattern﻿. Logical OR    |    Separate filters using commas ',' Logical AND    |    Filter strings can be combined to create logical AND queries by including multiple filters in the request. Combining AND and OR    |    You can combine AND and OR filters together to create more complex filters.
$key = 'key_example'; // string | If present, objects will be filtered on property with this name.
$pattern = 'pattern_example'; // string | If present, objects will be filtered on property with this value.
$scope = 'scope_example'; // string | Scope [global|vdom|both*]
$exclude_default_values = True; // bool | Exclude properties/objects with default value
$action = 'action_example'; // string | default: Return the CLI default values for entire CLI tree. meta: Return meta data for a specific object, table, or the entire CLI tree. schema: Return schema for entire CLI tree.
$vdom = array('vdom_example'); // string[] | Specify the Virtual Domain(s) from which results are returned or changes are applied to. If this parameter is not provided, the management VDOM will be used. If the admin does not have access to the VDOM, a permission error will be returned. The URL parameter is one of: vdom=root (Single VDOM) vdom=vdom1,vdom2 (Multiple VDOMs) vdom=* (All VDOMs)

try {
    $result = $apiInstance->alertemailSettingGet($datasource, $start, $count, $with_meta, $with_contents_hash, $skip, $format, $filter, $key, $pattern, $scope, $exclude_default_values, $action, $vdom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertemailSettingApi->alertemailSettingGet: ', $e->getMessage(), PHP_EOL;
}

```
Fortigate-FortiOS-CMDB-AlertemailSettingApi
## API Endpoints

All URIs are relative to *https://172.16.177.65/api/v2/cmdb*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AlertemailSettingApi* | [**alertemailSettingGet**](docs/classes/Fortigate-FortiOS-CMDB-AlertemailSettingApi) | **GET** /alertemail/setting | Select all entries in a CLI table.  Access Group: loggrp
*AlertemailSettingApi* | [**alertemailSettingPut**](docs/classes/Fortigate-FortiOS-CMDB-AlertemailSettingApi) | **PUT** /alertemail/setting | Update this specific resource.  Access Group: loggrp
*AntivirusHeuristicApi* | [**antivirusHeuristicGet**](docs/classes/Fortigate-FortiOS-CMDB-AntivirusHeuristicApi) | **GET** /antivirus/heuristic | Select all entries in a CLI table.  Access Group: utmgrp
*AntivirusHeuristicApi* | [**antivirusHeuristicPut**](docs/classes/Fortigate-FortiOS-CMDB-AntivirusHeuristicApi) | **PUT** /antivirus/heuristic | Update this specific resource.  Access Group: utmgrp
*AntivirusProfileApi* | [**antivirusProfileGet**](docs/classes/Fortigate-FortiOS-CMDB-AntivirusProfileApi) | **GET** /antivirus/profile | Select all entries in a CLI table.  Access Group: utmgrp
*AntivirusProfileApi* | [**antivirusProfileNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-AntivirusProfileApi) | **DELETE** /antivirus/profile/{name} | Delete this specific resource.  Access Group: utmgrp
*AntivirusProfileApi* | [**antivirusProfileNameGet**](docs/classes/Fortigate-FortiOS-CMDB-AntivirusProfileApi) | **GET** /antivirus/profile/{name} | Select a specific entry from a CLI table.  Access Group: utmgrp
*AntivirusProfileApi* | [**antivirusProfileNamePut**](docs/classes/Fortigate-FortiOS-CMDB-AntivirusProfileApi) | **PUT** /antivirus/profile/{name} | Update this specific resource.  Access Group: utmgrp
*AntivirusProfileApi* | [**antivirusProfilePost**](docs/classes/Fortigate-FortiOS-CMDB-AntivirusProfileApi) | **POST** /antivirus/profile | Create object(s) in this table.  Access Group: utmgrp
*AntivirusQuarantineApi* | [**antivirusQuarantineGet**](docs/classes/Fortigate-FortiOS-CMDB-AntivirusQuarantineApi) | **GET** /antivirus/quarantine | Select all entries in a CLI table.  Access Group: utmgrp
*AntivirusQuarantineApi* | [**antivirusQuarantinePut**](docs/classes/Fortigate-FortiOS-CMDB-AntivirusQuarantineApi) | **PUT** /antivirus/quarantine | Update this specific resource.  Access Group: utmgrp
*AntivirusSettingsApi* | [**antivirusSettingsGet**](docs/classes/Fortigate-FortiOS-CMDB-AntivirusSettingsApi) | **GET** /antivirus/settings | Select all entries in a CLI table.  Access Group: utmgrp
*AntivirusSettingsApi* | [**antivirusSettingsPut**](docs/classes/Fortigate-FortiOS-CMDB-AntivirusSettingsApi) | **PUT** /antivirus/settings | Update this specific resource.  Access Group: utmgrp
*ApplicationCustomApi* | [**applicationCustomGet**](docs/classes/Fortigate-FortiOS-CMDB-ApplicationCustomApi) | **GET** /application/custom | Select all entries in a CLI table.  Access Group: utmgrp
*ApplicationCustomApi* | [**applicationCustomPost**](docs/classes/Fortigate-FortiOS-CMDB-ApplicationCustomApi) | **POST** /application/custom | Create object(s) in this table.  Access Group: utmgrp
*ApplicationCustomApi* | [**applicationCustomTagDelete**](docs/classes/Fortigate-FortiOS-CMDB-ApplicationCustomApi) | **DELETE** /application/custom/{tag} | Delete this specific resource.  Access Group: utmgrp
*ApplicationCustomApi* | [**applicationCustomTagGet**](docs/classes/Fortigate-FortiOS-CMDB-ApplicationCustomApi) | **GET** /application/custom/{tag} | Select a specific entry from a CLI table.  Access Group: utmgrp
*ApplicationCustomApi* | [**applicationCustomTagPut**](docs/classes/Fortigate-FortiOS-CMDB-ApplicationCustomApi) | **PUT** /application/custom/{tag} | Update this specific resource.  Access Group: utmgrp
*ApplicationGroupApi* | [**applicationGroupGet**](docs/classes/Fortigate-FortiOS-CMDB-ApplicationGroupApi) | **GET** /application/group | Select all entries in a CLI table.  Access Group: utmgrp
*ApplicationGroupApi* | [**applicationGroupNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-ApplicationGroupApi) | **DELETE** /application/group/{name} | Delete this specific resource.  Access Group: utmgrp
*ApplicationGroupApi* | [**applicationGroupNameGet**](docs/classes/Fortigate-FortiOS-CMDB-ApplicationGroupApi) | **GET** /application/group/{name} | Select a specific entry from a CLI table.  Access Group: utmgrp
*ApplicationGroupApi* | [**applicationGroupNamePut**](docs/classes/Fortigate-FortiOS-CMDB-ApplicationGroupApi) | **PUT** /application/group/{name} | Update this specific resource.  Access Group: utmgrp
*ApplicationGroupApi* | [**applicationGroupPost**](docs/classes/Fortigate-FortiOS-CMDB-ApplicationGroupApi) | **POST** /application/group | Create object(s) in this table.  Access Group: utmgrp
*ApplicationListApi* | [**applicationListGet**](docs/classes/Fortigate-FortiOS-CMDB-ApplicationListApi) | **GET** /application/list | Select all entries in a CLI table.  Access Group: utmgrp
*ApplicationListApi* | [**applicationListNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-ApplicationListApi) | **DELETE** /application/list/{name} | Delete this specific resource.  Access Group: utmgrp
*ApplicationListApi* | [**applicationListNameGet**](docs/classes/Fortigate-FortiOS-CMDB-ApplicationListApi) | **GET** /application/list/{name} | Select a specific entry from a CLI table.  Access Group: utmgrp
*ApplicationListApi* | [**applicationListNamePut**](docs/classes/Fortigate-FortiOS-CMDB-ApplicationListApi) | **PUT** /application/list/{name} | Update this specific resource.  Access Group: utmgrp
*ApplicationListApi* | [**applicationListPost**](docs/classes/Fortigate-FortiOS-CMDB-ApplicationListApi) | **POST** /application/list | Create object(s) in this table.  Access Group: utmgrp
*ApplicationNameApi* | [**applicationNameGet**](docs/classes/Fortigate-FortiOS-CMDB-ApplicationNameApi) | **GET** /application/name | Select all entries in a CLI table.  Access Group: utmgrp
*ApplicationNameApi* | [**applicationNameNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-ApplicationNameApi) | **DELETE** /application/name/{name} | Delete this specific resource.  Access Group: utmgrp
*ApplicationNameApi* | [**applicationNameNameGet**](docs/classes/Fortigate-FortiOS-CMDB-ApplicationNameApi) | **GET** /application/name/{name} | Select a specific entry from a CLI table.  Access Group: utmgrp
*ApplicationNameApi* | [**applicationNameNamePut**](docs/classes/Fortigate-FortiOS-CMDB-ApplicationNameApi) | **PUT** /application/name/{name} | Update this specific resource.  Access Group: utmgrp
*ApplicationNameApi* | [**applicationNamePost**](docs/classes/Fortigate-FortiOS-CMDB-ApplicationNameApi) | **POST** /application/name | Create object(s) in this table.  Access Group: utmgrp
*ApplicationRuleSettingsApi* | [**applicationRuleSettingsGet**](docs/classes/Fortigate-FortiOS-CMDB-ApplicationRuleSettingsApi) | **GET** /application/rule-settings | Select all entries in a CLI table.  Access Group: utmgrp
*ApplicationRuleSettingsApi* | [**applicationRuleSettingsIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-ApplicationRuleSettingsApi) | **DELETE** /application/rule-settings/{id} | Delete this specific resource.  Access Group: utmgrp
*ApplicationRuleSettingsApi* | [**applicationRuleSettingsIdGet**](docs/classes/Fortigate-FortiOS-CMDB-ApplicationRuleSettingsApi) | **GET** /application/rule-settings/{id} | Select a specific entry from a CLI table.  Access Group: utmgrp
*ApplicationRuleSettingsApi* | [**applicationRuleSettingsIdPut**](docs/classes/Fortigate-FortiOS-CMDB-ApplicationRuleSettingsApi) | **PUT** /application/rule-settings/{id} | Update this specific resource.  Access Group: utmgrp
*ApplicationRuleSettingsApi* | [**applicationRuleSettingsPost**](docs/classes/Fortigate-FortiOS-CMDB-ApplicationRuleSettingsApi) | **POST** /application/rule-settings | Create object(s) in this table.  Access Group: utmgrp
*AuthenticationRuleApi* | [**authenticationRuleGet**](docs/classes/Fortigate-FortiOS-CMDB-AuthenticationRuleApi) | **GET** /authentication/rule | Select all entries in a CLI table.  Access Group: authgrp
*AuthenticationRuleApi* | [**authenticationRuleNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-AuthenticationRuleApi) | **DELETE** /authentication/rule/{name} | Delete this specific resource.  Access Group: authgrp
*AuthenticationRuleApi* | [**authenticationRuleNameGet**](docs/classes/Fortigate-FortiOS-CMDB-AuthenticationRuleApi) | **GET** /authentication/rule/{name} | Select a specific entry from a CLI table.  Access Group: authgrp
*AuthenticationRuleApi* | [**authenticationRuleNamePut**](docs/classes/Fortigate-FortiOS-CMDB-AuthenticationRuleApi) | **PUT** /authentication/rule/{name} | Update this specific resource.  Access Group: authgrp
*AuthenticationRuleApi* | [**authenticationRulePost**](docs/classes/Fortigate-FortiOS-CMDB-AuthenticationRuleApi) | **POST** /authentication/rule | Create object(s) in this table.  Access Group: authgrp
*AuthenticationSchemeApi* | [**authenticationSchemeGet**](docs/classes/Fortigate-FortiOS-CMDB-AuthenticationSchemeApi) | **GET** /authentication/scheme | Select all entries in a CLI table.  Access Group: authgrp
*AuthenticationSchemeApi* | [**authenticationSchemeNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-AuthenticationSchemeApi) | **DELETE** /authentication/scheme/{name} | Delete this specific resource.  Access Group: authgrp
*AuthenticationSchemeApi* | [**authenticationSchemeNameGet**](docs/classes/Fortigate-FortiOS-CMDB-AuthenticationSchemeApi) | **GET** /authentication/scheme/{name} | Select a specific entry from a CLI table.  Access Group: authgrp
*AuthenticationSchemeApi* | [**authenticationSchemeNamePut**](docs/classes/Fortigate-FortiOS-CMDB-AuthenticationSchemeApi) | **PUT** /authentication/scheme/{name} | Update this specific resource.  Access Group: authgrp
*AuthenticationSchemeApi* | [**authenticationSchemePost**](docs/classes/Fortigate-FortiOS-CMDB-AuthenticationSchemeApi) | **POST** /authentication/scheme | Create object(s) in this table.  Access Group: authgrp
*AuthenticationSettingApi* | [**authenticationSettingGet**](docs/classes/Fortigate-FortiOS-CMDB-AuthenticationSettingApi) | **GET** /authentication/setting | Select all entries in a CLI table.  Access Group: authgrp
*AuthenticationSettingApi* | [**authenticationSettingPut**](docs/classes/Fortigate-FortiOS-CMDB-AuthenticationSettingApi) | **PUT** /authentication/setting | Update this specific resource.  Access Group: authgrp
*CertificateCaApi* | [**certificateCaGet**](docs/classes/Fortigate-FortiOS-CMDB-CertificateCaApi) | **GET** /certificate/ca | Select all entries in a CLI table.  Access Group: vpngrp
*CertificateCaApi* | [**certificateCaNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-CertificateCaApi) | **DELETE** /certificate/ca/{name} | Delete this specific resource.  Access Group: vpngrp
*CertificateCaApi* | [**certificateCaNameGet**](docs/classes/Fortigate-FortiOS-CMDB-CertificateCaApi) | **GET** /certificate/ca/{name} | Select a specific entry from a CLI table.  Access Group: vpngrp
*CertificateCaApi* | [**certificateCaNamePut**](docs/classes/Fortigate-FortiOS-CMDB-CertificateCaApi) | **PUT** /certificate/ca/{name} | Update this specific resource.  Access Group: vpngrp
*CertificateCaApi* | [**certificateCaPost**](docs/classes/Fortigate-FortiOS-CMDB-CertificateCaApi) | **POST** /certificate/ca | Create object(s) in this table.  Access Group: vpngrp
*CertificateCrlApi* | [**certificateCrlGet**](docs/classes/Fortigate-FortiOS-CMDB-CertificateCrlApi) | **GET** /certificate/crl | Select all entries in a CLI table.  Access Group: vpngrp
*CertificateCrlApi* | [**certificateCrlNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-CertificateCrlApi) | **DELETE** /certificate/crl/{name} | Delete this specific resource.  Access Group: vpngrp
*CertificateCrlApi* | [**certificateCrlNameGet**](docs/classes/Fortigate-FortiOS-CMDB-CertificateCrlApi) | **GET** /certificate/crl/{name} | Select a specific entry from a CLI table.  Access Group: vpngrp
*CertificateCrlApi* | [**certificateCrlNamePut**](docs/classes/Fortigate-FortiOS-CMDB-CertificateCrlApi) | **PUT** /certificate/crl/{name} | Update this specific resource.  Access Group: vpngrp
*CertificateCrlApi* | [**certificateCrlPost**](docs/classes/Fortigate-FortiOS-CMDB-CertificateCrlApi) | **POST** /certificate/crl | Create object(s) in this table.  Access Group: vpngrp
*CertificateLocalApi* | [**certificateLocalGet**](docs/classes/Fortigate-FortiOS-CMDB-CertificateLocalApi) | **GET** /certificate/local | Select all entries in a CLI table.  Access Group: vpngrp
*CertificateLocalApi* | [**certificateLocalNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-CertificateLocalApi) | **DELETE** /certificate/local/{name} | Delete this specific resource.  Access Group: vpngrp
*CertificateLocalApi* | [**certificateLocalNameGet**](docs/classes/Fortigate-FortiOS-CMDB-CertificateLocalApi) | **GET** /certificate/local/{name} | Select a specific entry from a CLI table.  Access Group: vpngrp
*CertificateLocalApi* | [**certificateLocalNamePut**](docs/classes/Fortigate-FortiOS-CMDB-CertificateLocalApi) | **PUT** /certificate/local/{name} | Update this specific resource.  Access Group: vpngrp
*CertificateLocalApi* | [**certificateLocalPost**](docs/classes/Fortigate-FortiOS-CMDB-CertificateLocalApi) | **POST** /certificate/local | Create object(s) in this table.  Access Group: vpngrp
*CertificateRemoteApi* | [**certificateRemoteGet**](docs/classes/Fortigate-FortiOS-CMDB-CertificateRemoteApi) | **GET** /certificate/remote | Select all entries in a CLI table.  Access Group: vpngrp
*CertificateRemoteApi* | [**certificateRemoteNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-CertificateRemoteApi) | **DELETE** /certificate/remote/{name} | Delete this specific resource.  Access Group: vpngrp
*CertificateRemoteApi* | [**certificateRemoteNameGet**](docs/classes/Fortigate-FortiOS-CMDB-CertificateRemoteApi) | **GET** /certificate/remote/{name} | Select a specific entry from a CLI table.  Access Group: vpngrp
*CertificateRemoteApi* | [**certificateRemoteNamePut**](docs/classes/Fortigate-FortiOS-CMDB-CertificateRemoteApi) | **PUT** /certificate/remote/{name} | Update this specific resource.  Access Group: vpngrp
*CertificateRemoteApi* | [**certificateRemotePost**](docs/classes/Fortigate-FortiOS-CMDB-CertificateRemoteApi) | **POST** /certificate/remote | Create object(s) in this table.  Access Group: vpngrp
*CredentialStoreDomainControllerApi* | [**credentialStoreDomainControllerGet**](docs/classes/Fortigate-FortiOS-CMDB-CredentialStoreDomainControllerApi) | **GET** /credential-store/domain-controller | Select all entries in a CLI table.  Access Group: netgrp
*CredentialStoreDomainControllerApi* | [**credentialStoreDomainControllerPost**](docs/classes/Fortigate-FortiOS-CMDB-CredentialStoreDomainControllerApi) | **POST** /credential-store/domain-controller | Create object(s) in this table.  Access Group: netgrp
*CredentialStoreDomainControllerApi* | [**credentialStoreDomainControllerServerNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-CredentialStoreDomainControllerApi) | **DELETE** /credential-store/domain-controller/{server-name} | Delete this specific resource.  Access Group: netgrp
*CredentialStoreDomainControllerApi* | [**credentialStoreDomainControllerServerNameGet**](docs/classes/Fortigate-FortiOS-CMDB-CredentialStoreDomainControllerApi) | **GET** /credential-store/domain-controller/{server-name} | Select a specific entry from a CLI table.  Access Group: netgrp
*CredentialStoreDomainControllerApi* | [**credentialStoreDomainControllerServerNamePut**](docs/classes/Fortigate-FortiOS-CMDB-CredentialStoreDomainControllerApi) | **PUT** /credential-store/domain-controller/{server-name} | Update this specific resource.  Access Group: netgrp
*DlpFilepatternApi* | [**dlpFilepatternGet**](docs/classes/Fortigate-FortiOS-CMDB-DlpFilepatternApi) | **GET** /dlp/filepattern | Select all entries in a CLI table.  Access Group: utmgrp
*DlpFilepatternApi* | [**dlpFilepatternIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-DlpFilepatternApi) | **DELETE** /dlp/filepattern/{id} | Delete this specific resource.  Access Group: utmgrp
*DlpFilepatternApi* | [**dlpFilepatternIdGet**](docs/classes/Fortigate-FortiOS-CMDB-DlpFilepatternApi) | **GET** /dlp/filepattern/{id} | Select a specific entry from a CLI table.  Access Group: utmgrp
*DlpFilepatternApi* | [**dlpFilepatternIdPut**](docs/classes/Fortigate-FortiOS-CMDB-DlpFilepatternApi) | **PUT** /dlp/filepattern/{id} | Update this specific resource.  Access Group: utmgrp
*DlpFilepatternApi* | [**dlpFilepatternPost**](docs/classes/Fortigate-FortiOS-CMDB-DlpFilepatternApi) | **POST** /dlp/filepattern | Create object(s) in this table.  Access Group: utmgrp
*DlpFpDocSourceApi* | [**dlpFpDocSourceGet**](docs/classes/Fortigate-FortiOS-CMDB-DlpFpDocSourceApi) | **GET** /dlp/fp-doc-source | Select all entries in a CLI table.  Access Group: utmgrp
*DlpFpDocSourceApi* | [**dlpFpDocSourceNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-DlpFpDocSourceApi) | **DELETE** /dlp/fp-doc-source/{name} | Delete this specific resource.  Access Group: utmgrp
*DlpFpDocSourceApi* | [**dlpFpDocSourceNameGet**](docs/classes/Fortigate-FortiOS-CMDB-DlpFpDocSourceApi) | **GET** /dlp/fp-doc-source/{name} | Select a specific entry from a CLI table.  Access Group: utmgrp
*DlpFpDocSourceApi* | [**dlpFpDocSourceNamePut**](docs/classes/Fortigate-FortiOS-CMDB-DlpFpDocSourceApi) | **PUT** /dlp/fp-doc-source/{name} | Update this specific resource.  Access Group: utmgrp
*DlpFpDocSourceApi* | [**dlpFpDocSourcePost**](docs/classes/Fortigate-FortiOS-CMDB-DlpFpDocSourceApi) | **POST** /dlp/fp-doc-source | Create object(s) in this table.  Access Group: utmgrp
*DlpSensitivityApi* | [**dlpSensitivityGet**](docs/classes/Fortigate-FortiOS-CMDB-DlpSensitivityApi) | **GET** /dlp/sensitivity | Select all entries in a CLI table.  Access Group: utmgrp
*DlpSensitivityApi* | [**dlpSensitivityNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-DlpSensitivityApi) | **DELETE** /dlp/sensitivity/{name} | Delete this specific resource.  Access Group: utmgrp
*DlpSensitivityApi* | [**dlpSensitivityNameGet**](docs/classes/Fortigate-FortiOS-CMDB-DlpSensitivityApi) | **GET** /dlp/sensitivity/{name} | Select a specific entry from a CLI table.  Access Group: utmgrp
*DlpSensitivityApi* | [**dlpSensitivityNamePut**](docs/classes/Fortigate-FortiOS-CMDB-DlpSensitivityApi) | **PUT** /dlp/sensitivity/{name} | Update this specific resource.  Access Group: utmgrp
*DlpSensitivityApi* | [**dlpSensitivityPost**](docs/classes/Fortigate-FortiOS-CMDB-DlpSensitivityApi) | **POST** /dlp/sensitivity | Create object(s) in this table.  Access Group: utmgrp
*DlpSensorApi* | [**dlpSensorGet**](docs/classes/Fortigate-FortiOS-CMDB-DlpSensorApi) | **GET** /dlp/sensor | Select all entries in a CLI table.  Access Group: utmgrp
*DlpSensorApi* | [**dlpSensorNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-DlpSensorApi) | **DELETE** /dlp/sensor/{name} | Delete this specific resource.  Access Group: utmgrp
*DlpSensorApi* | [**dlpSensorNameGet**](docs/classes/Fortigate-FortiOS-CMDB-DlpSensorApi) | **GET** /dlp/sensor/{name} | Select a specific entry from a CLI table.  Access Group: utmgrp
*DlpSensorApi* | [**dlpSensorNamePut**](docs/classes/Fortigate-FortiOS-CMDB-DlpSensorApi) | **PUT** /dlp/sensor/{name} | Update this specific resource.  Access Group: utmgrp
*DlpSensorApi* | [**dlpSensorPost**](docs/classes/Fortigate-FortiOS-CMDB-DlpSensorApi) | **POST** /dlp/sensor | Create object(s) in this table.  Access Group: utmgrp
*DlpSettingsApi* | [**dlpSettingsGet**](docs/classes/Fortigate-FortiOS-CMDB-DlpSettingsApi) | **GET** /dlp/settings | Select all entries in a CLI table.  Access Group: utmgrp
*DlpSettingsApi* | [**dlpSettingsPut**](docs/classes/Fortigate-FortiOS-CMDB-DlpSettingsApi) | **PUT** /dlp/settings | Update this specific resource.  Access Group: utmgrp
*DnsfilterDomainFilterApi* | [**dnsfilterDomainFilterGet**](docs/classes/Fortigate-FortiOS-CMDB-DnsfilterDomainFilterApi) | **GET** /dnsfilter/domain-filter | Select all entries in a CLI table.  Access Group: utmgrp
*DnsfilterDomainFilterApi* | [**dnsfilterDomainFilterIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-DnsfilterDomainFilterApi) | **DELETE** /dnsfilter/domain-filter/{id} | Delete this specific resource.  Access Group: utmgrp
*DnsfilterDomainFilterApi* | [**dnsfilterDomainFilterIdGet**](docs/classes/Fortigate-FortiOS-CMDB-DnsfilterDomainFilterApi) | **GET** /dnsfilter/domain-filter/{id} | Select a specific entry from a CLI table.  Access Group: utmgrp
*DnsfilterDomainFilterApi* | [**dnsfilterDomainFilterIdPut**](docs/classes/Fortigate-FortiOS-CMDB-DnsfilterDomainFilterApi) | **PUT** /dnsfilter/domain-filter/{id} | Update this specific resource.  Access Group: utmgrp
*DnsfilterDomainFilterApi* | [**dnsfilterDomainFilterPost**](docs/classes/Fortigate-FortiOS-CMDB-DnsfilterDomainFilterApi) | **POST** /dnsfilter/domain-filter | Create object(s) in this table.  Access Group: utmgrp
*DnsfilterProfileApi* | [**dnsfilterProfileGet**](docs/classes/Fortigate-FortiOS-CMDB-DnsfilterProfileApi) | **GET** /dnsfilter/profile | Select all entries in a CLI table.  Access Group: utmgrp
*DnsfilterProfileApi* | [**dnsfilterProfileNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-DnsfilterProfileApi) | **DELETE** /dnsfilter/profile/{name} | Delete this specific resource.  Access Group: utmgrp
*DnsfilterProfileApi* | [**dnsfilterProfileNameGet**](docs/classes/Fortigate-FortiOS-CMDB-DnsfilterProfileApi) | **GET** /dnsfilter/profile/{name} | Select a specific entry from a CLI table.  Access Group: utmgrp
*DnsfilterProfileApi* | [**dnsfilterProfileNamePut**](docs/classes/Fortigate-FortiOS-CMDB-DnsfilterProfileApi) | **PUT** /dnsfilter/profile/{name} | Update this specific resource.  Access Group: utmgrp
*DnsfilterProfileApi* | [**dnsfilterProfilePost**](docs/classes/Fortigate-FortiOS-CMDB-DnsfilterProfileApi) | **POST** /dnsfilter/profile | Create object(s) in this table.  Access Group: utmgrp
*EmailfilterBwlApi* | [**emailfilterBwlGet**](docs/classes/Fortigate-FortiOS-CMDB-EmailfilterBwlApi) | **GET** /emailfilter/bwl | Select all entries in a CLI table.  Access Group: utmgrp
*EmailfilterBwlApi* | [**emailfilterBwlIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-EmailfilterBwlApi) | **DELETE** /emailfilter/bwl/{id} | Delete this specific resource.  Access Group: utmgrp
*EmailfilterBwlApi* | [**emailfilterBwlIdGet**](docs/classes/Fortigate-FortiOS-CMDB-EmailfilterBwlApi) | **GET** /emailfilter/bwl/{id} | Select a specific entry from a CLI table.  Access Group: utmgrp
*EmailfilterBwlApi* | [**emailfilterBwlIdPut**](docs/classes/Fortigate-FortiOS-CMDB-EmailfilterBwlApi) | **PUT** /emailfilter/bwl/{id} | Update this specific resource.  Access Group: utmgrp
*EmailfilterBwlApi* | [**emailfilterBwlPost**](docs/classes/Fortigate-FortiOS-CMDB-EmailfilterBwlApi) | **POST** /emailfilter/bwl | Create object(s) in this table.  Access Group: utmgrp
*EmailfilterBwordApi* | [**emailfilterBwordGet**](docs/classes/Fortigate-FortiOS-CMDB-EmailfilterBwordApi) | **GET** /emailfilter/bword | Select all entries in a CLI table.  Access Group: utmgrp
*EmailfilterBwordApi* | [**emailfilterBwordIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-EmailfilterBwordApi) | **DELETE** /emailfilter/bword/{id} | Delete this specific resource.  Access Group: utmgrp
*EmailfilterBwordApi* | [**emailfilterBwordIdGet**](docs/classes/Fortigate-FortiOS-CMDB-EmailfilterBwordApi) | **GET** /emailfilter/bword/{id} | Select a specific entry from a CLI table.  Access Group: utmgrp
*EmailfilterBwordApi* | [**emailfilterBwordIdPut**](docs/classes/Fortigate-FortiOS-CMDB-EmailfilterBwordApi) | **PUT** /emailfilter/bword/{id} | Update this specific resource.  Access Group: utmgrp
*EmailfilterBwordApi* | [**emailfilterBwordPost**](docs/classes/Fortigate-FortiOS-CMDB-EmailfilterBwordApi) | **POST** /emailfilter/bword | Create object(s) in this table.  Access Group: utmgrp
*EmailfilterDnsblApi* | [**emailfilterDnsblGet**](docs/classes/Fortigate-FortiOS-CMDB-EmailfilterDnsblApi) | **GET** /emailfilter/dnsbl | Select all entries in a CLI table.  Access Group: utmgrp
*EmailfilterDnsblApi* | [**emailfilterDnsblIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-EmailfilterDnsblApi) | **DELETE** /emailfilter/dnsbl/{id} | Delete this specific resource.  Access Group: utmgrp
*EmailfilterDnsblApi* | [**emailfilterDnsblIdGet**](docs/classes/Fortigate-FortiOS-CMDB-EmailfilterDnsblApi) | **GET** /emailfilter/dnsbl/{id} | Select a specific entry from a CLI table.  Access Group: utmgrp
*EmailfilterDnsblApi* | [**emailfilterDnsblIdPut**](docs/classes/Fortigate-FortiOS-CMDB-EmailfilterDnsblApi) | **PUT** /emailfilter/dnsbl/{id} | Update this specific resource.  Access Group: utmgrp
*EmailfilterDnsblApi* | [**emailfilterDnsblPost**](docs/classes/Fortigate-FortiOS-CMDB-EmailfilterDnsblApi) | **POST** /emailfilter/dnsbl | Create object(s) in this table.  Access Group: utmgrp
*EmailfilterFortishieldApi* | [**emailfilterFortishieldGet**](docs/classes/Fortigate-FortiOS-CMDB-EmailfilterFortishieldApi) | **GET** /emailfilter/fortishield | Select all entries in a CLI table.  Access Group: utmgrp
*EmailfilterFortishieldApi* | [**emailfilterFortishieldPut**](docs/classes/Fortigate-FortiOS-CMDB-EmailfilterFortishieldApi) | **PUT** /emailfilter/fortishield | Update this specific resource.  Access Group: utmgrp
*EmailfilterIptrustApi* | [**emailfilterIptrustGet**](docs/classes/Fortigate-FortiOS-CMDB-EmailfilterIptrustApi) | **GET** /emailfilter/iptrust | Select all entries in a CLI table.  Access Group: utmgrp
*EmailfilterIptrustApi* | [**emailfilterIptrustIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-EmailfilterIptrustApi) | **DELETE** /emailfilter/iptrust/{id} | Delete this specific resource.  Access Group: utmgrp
*EmailfilterIptrustApi* | [**emailfilterIptrustIdGet**](docs/classes/Fortigate-FortiOS-CMDB-EmailfilterIptrustApi) | **GET** /emailfilter/iptrust/{id} | Select a specific entry from a CLI table.  Access Group: utmgrp
*EmailfilterIptrustApi* | [**emailfilterIptrustIdPut**](docs/classes/Fortigate-FortiOS-CMDB-EmailfilterIptrustApi) | **PUT** /emailfilter/iptrust/{id} | Update this specific resource.  Access Group: utmgrp
*EmailfilterIptrustApi* | [**emailfilterIptrustPost**](docs/classes/Fortigate-FortiOS-CMDB-EmailfilterIptrustApi) | **POST** /emailfilter/iptrust | Create object(s) in this table.  Access Group: utmgrp
*EmailfilterMheaderApi* | [**emailfilterMheaderGet**](docs/classes/Fortigate-FortiOS-CMDB-EmailfilterMheaderApi) | **GET** /emailfilter/mheader | Select all entries in a CLI table.  Access Group: utmgrp
*EmailfilterMheaderApi* | [**emailfilterMheaderIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-EmailfilterMheaderApi) | **DELETE** /emailfilter/mheader/{id} | Delete this specific resource.  Access Group: utmgrp
*EmailfilterMheaderApi* | [**emailfilterMheaderIdGet**](docs/classes/Fortigate-FortiOS-CMDB-EmailfilterMheaderApi) | **GET** /emailfilter/mheader/{id} | Select a specific entry from a CLI table.  Access Group: utmgrp
*EmailfilterMheaderApi* | [**emailfilterMheaderIdPut**](docs/classes/Fortigate-FortiOS-CMDB-EmailfilterMheaderApi) | **PUT** /emailfilter/mheader/{id} | Update this specific resource.  Access Group: utmgrp
*EmailfilterMheaderApi* | [**emailfilterMheaderPost**](docs/classes/Fortigate-FortiOS-CMDB-EmailfilterMheaderApi) | **POST** /emailfilter/mheader | Create object(s) in this table.  Access Group: utmgrp
*EmailfilterOptionsApi* | [**emailfilterOptionsGet**](docs/classes/Fortigate-FortiOS-CMDB-EmailfilterOptionsApi) | **GET** /emailfilter/options | Select all entries in a CLI table.  Access Group: utmgrp
*EmailfilterOptionsApi* | [**emailfilterOptionsPut**](docs/classes/Fortigate-FortiOS-CMDB-EmailfilterOptionsApi) | **PUT** /emailfilter/options | Update this specific resource.  Access Group: utmgrp
*EmailfilterProfileApi* | [**emailfilterProfileGet**](docs/classes/Fortigate-FortiOS-CMDB-EmailfilterProfileApi) | **GET** /emailfilter/profile | Select all entries in a CLI table.  Access Group: utmgrp
*EmailfilterProfileApi* | [**emailfilterProfileNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-EmailfilterProfileApi) | **DELETE** /emailfilter/profile/{name} | Delete this specific resource.  Access Group: utmgrp
*EmailfilterProfileApi* | [**emailfilterProfileNameGet**](docs/classes/Fortigate-FortiOS-CMDB-EmailfilterProfileApi) | **GET** /emailfilter/profile/{name} | Select a specific entry from a CLI table.  Access Group: utmgrp
*EmailfilterProfileApi* | [**emailfilterProfileNamePut**](docs/classes/Fortigate-FortiOS-CMDB-EmailfilterProfileApi) | **PUT** /emailfilter/profile/{name} | Update this specific resource.  Access Group: utmgrp
*EmailfilterProfileApi* | [**emailfilterProfilePost**](docs/classes/Fortigate-FortiOS-CMDB-EmailfilterProfileApi) | **POST** /emailfilter/profile | Create object(s) in this table.  Access Group: utmgrp
*EndpointControlFctemsApi* | [**endpointControlFctemsGet**](docs/classes/Fortigate-FortiOS-CMDB-EndpointControlFctemsApi) | **GET** /endpoint-control/fctems | Select all entries in a CLI table.  Access Group: utmgrp
*EndpointControlFctemsApi* | [**endpointControlFctemsNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-EndpointControlFctemsApi) | **DELETE** /endpoint-control/fctems/{name} | Delete this specific resource.  Access Group: utmgrp
*EndpointControlFctemsApi* | [**endpointControlFctemsNameGet**](docs/classes/Fortigate-FortiOS-CMDB-EndpointControlFctemsApi) | **GET** /endpoint-control/fctems/{name} | Select a specific entry from a CLI table.  Access Group: utmgrp
*EndpointControlFctemsApi* | [**endpointControlFctemsNamePut**](docs/classes/Fortigate-FortiOS-CMDB-EndpointControlFctemsApi) | **PUT** /endpoint-control/fctems/{name} | Update this specific resource.  Access Group: utmgrp
*EndpointControlFctemsApi* | [**endpointControlFctemsPost**](docs/classes/Fortigate-FortiOS-CMDB-EndpointControlFctemsApi) | **POST** /endpoint-control/fctems | Create object(s) in this table.  Access Group: utmgrp
*ExtenderControllerDataplanApi* | [**extenderControllerDataplanGet**](docs/classes/Fortigate-FortiOS-CMDB-ExtenderControllerDataplanApi) | **GET** /extender-controller/dataplan | Select all entries in a CLI table.  Access Group: sysgrp
*ExtenderControllerDataplanApi* | [**extenderControllerDataplanNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-ExtenderControllerDataplanApi) | **DELETE** /extender-controller/dataplan/{name} | Delete this specific resource.  Access Group: sysgrp
*ExtenderControllerDataplanApi* | [**extenderControllerDataplanNameGet**](docs/classes/Fortigate-FortiOS-CMDB-ExtenderControllerDataplanApi) | **GET** /extender-controller/dataplan/{name} | Select a specific entry from a CLI table.  Access Group: sysgrp
*ExtenderControllerDataplanApi* | [**extenderControllerDataplanNamePut**](docs/classes/Fortigate-FortiOS-CMDB-ExtenderControllerDataplanApi) | **PUT** /extender-controller/dataplan/{name} | Update this specific resource.  Access Group: sysgrp
*ExtenderControllerDataplanApi* | [**extenderControllerDataplanPost**](docs/classes/Fortigate-FortiOS-CMDB-ExtenderControllerDataplanApi) | **POST** /extender-controller/dataplan | Create object(s) in this table.  Access Group: sysgrp
*ExtenderControllerExtenderApi* | [**extenderControllerExtenderGet**](docs/classes/Fortigate-FortiOS-CMDB-ExtenderControllerExtenderApi) | **GET** /extender-controller/extender | Select all entries in a CLI table.  Access Group: sysgrp
*ExtenderControllerExtenderApi* | [**extenderControllerExtenderNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-ExtenderControllerExtenderApi) | **DELETE** /extender-controller/extender/{name} | Delete this specific resource.  Access Group: sysgrp
*ExtenderControllerExtenderApi* | [**extenderControllerExtenderNameGet**](docs/classes/Fortigate-FortiOS-CMDB-ExtenderControllerExtenderApi) | **GET** /extender-controller/extender/{name} | Select a specific entry from a CLI table.  Access Group: sysgrp
*ExtenderControllerExtenderApi* | [**extenderControllerExtenderNamePut**](docs/classes/Fortigate-FortiOS-CMDB-ExtenderControllerExtenderApi) | **PUT** /extender-controller/extender/{name} | Update this specific resource.  Access Group: sysgrp
*ExtenderControllerExtenderApi* | [**extenderControllerExtenderPost**](docs/classes/Fortigate-FortiOS-CMDB-ExtenderControllerExtenderApi) | **POST** /extender-controller/extender | Create object(s) in this table.  Access Group: sysgrp
*FileFilterProfileApi* | [**fileFilterProfileGet**](docs/classes/Fortigate-FortiOS-CMDB-FileFilterProfileApi) | **GET** /file-filter/profile | Select all entries in a CLI table.  Access Group: utmgrp
*FileFilterProfileApi* | [**fileFilterProfileNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-FileFilterProfileApi) | **DELETE** /file-filter/profile/{name} | Delete this specific resource.  Access Group: utmgrp
*FileFilterProfileApi* | [**fileFilterProfileNameGet**](docs/classes/Fortigate-FortiOS-CMDB-FileFilterProfileApi) | **GET** /file-filter/profile/{name} | Select a specific entry from a CLI table.  Access Group: utmgrp
*FileFilterProfileApi* | [**fileFilterProfileNamePut**](docs/classes/Fortigate-FortiOS-CMDB-FileFilterProfileApi) | **PUT** /file-filter/profile/{name} | Update this specific resource.  Access Group: utmgrp
*FileFilterProfileApi* | [**fileFilterProfilePost**](docs/classes/Fortigate-FortiOS-CMDB-FileFilterProfileApi) | **POST** /file-filter/profile | Create object(s) in this table.  Access Group: utmgrp
*FtpProxyExplicitApi* | [**ftpProxyExplicitGet**](docs/classes/Fortigate-FortiOS-CMDB-FtpProxyExplicitApi) | **GET** /ftp-proxy/explicit | Select all entries in a CLI table.  Access Group: netgrp
*FtpProxyExplicitApi* | [**ftpProxyExplicitPut**](docs/classes/Fortigate-FortiOS-CMDB-FtpProxyExplicitApi) | **PUT** /ftp-proxy/explicit | Update this specific resource.  Access Group: netgrp
*IcapProfileApi* | [**icapProfileGet**](docs/classes/Fortigate-FortiOS-CMDB-IcapProfileApi) | **GET** /icap/profile | Select all entries in a CLI table.  Access Group: utmgrp
*IcapProfileApi* | [**icapProfileNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-IcapProfileApi) | **DELETE** /icap/profile/{name} | Delete this specific resource.  Access Group: utmgrp
*IcapProfileApi* | [**icapProfileNameGet**](docs/classes/Fortigate-FortiOS-CMDB-IcapProfileApi) | **GET** /icap/profile/{name} | Select a specific entry from a CLI table.  Access Group: utmgrp
*IcapProfileApi* | [**icapProfileNamePut**](docs/classes/Fortigate-FortiOS-CMDB-IcapProfileApi) | **PUT** /icap/profile/{name} | Update this specific resource.  Access Group: utmgrp
*IcapProfileApi* | [**icapProfilePost**](docs/classes/Fortigate-FortiOS-CMDB-IcapProfileApi) | **POST** /icap/profile | Create object(s) in this table.  Access Group: utmgrp
*IcapServerApi* | [**icapServerGet**](docs/classes/Fortigate-FortiOS-CMDB-IcapServerApi) | **GET** /icap/server | Select all entries in a CLI table.  Access Group: utmgrp
*IcapServerApi* | [**icapServerNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-IcapServerApi) | **DELETE** /icap/server/{name} | Delete this specific resource.  Access Group: utmgrp
*IcapServerApi* | [**icapServerNameGet**](docs/classes/Fortigate-FortiOS-CMDB-IcapServerApi) | **GET** /icap/server/{name} | Select a specific entry from a CLI table.  Access Group: utmgrp
*IcapServerApi* | [**icapServerNamePut**](docs/classes/Fortigate-FortiOS-CMDB-IcapServerApi) | **PUT** /icap/server/{name} | Update this specific resource.  Access Group: utmgrp
*IcapServerApi* | [**icapServerPost**](docs/classes/Fortigate-FortiOS-CMDB-IcapServerApi) | **POST** /icap/server | Create object(s) in this table.  Access Group: utmgrp
*IpsCustomApi* | [**ipsCustomGet**](docs/classes/Fortigate-FortiOS-CMDB-IpsCustomApi) | **GET** /ips/custom | Select all entries in a CLI table.  Access Group: utmgrp
*IpsCustomApi* | [**ipsCustomPost**](docs/classes/Fortigate-FortiOS-CMDB-IpsCustomApi) | **POST** /ips/custom | Create object(s) in this table.  Access Group: utmgrp
*IpsCustomApi* | [**ipsCustomTagDelete**](docs/classes/Fortigate-FortiOS-CMDB-IpsCustomApi) | **DELETE** /ips/custom/{tag} | Delete this specific resource.  Access Group: utmgrp
*IpsCustomApi* | [**ipsCustomTagGet**](docs/classes/Fortigate-FortiOS-CMDB-IpsCustomApi) | **GET** /ips/custom/{tag} | Select a specific entry from a CLI table.  Access Group: utmgrp
*IpsCustomApi* | [**ipsCustomTagPut**](docs/classes/Fortigate-FortiOS-CMDB-IpsCustomApi) | **PUT** /ips/custom/{tag} | Update this specific resource.  Access Group: utmgrp
*IpsDecoderApi* | [**ipsDecoderGet**](docs/classes/Fortigate-FortiOS-CMDB-IpsDecoderApi) | **GET** /ips/decoder | Select all entries in a CLI table.  Access Group: utmgrp
*IpsDecoderApi* | [**ipsDecoderNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-IpsDecoderApi) | **DELETE** /ips/decoder/{name} | Delete this specific resource.  Access Group: utmgrp
*IpsDecoderApi* | [**ipsDecoderNameGet**](docs/classes/Fortigate-FortiOS-CMDB-IpsDecoderApi) | **GET** /ips/decoder/{name} | Select a specific entry from a CLI table.  Access Group: utmgrp
*IpsDecoderApi* | [**ipsDecoderNamePut**](docs/classes/Fortigate-FortiOS-CMDB-IpsDecoderApi) | **PUT** /ips/decoder/{name} | Update this specific resource.  Access Group: utmgrp
*IpsDecoderApi* | [**ipsDecoderPost**](docs/classes/Fortigate-FortiOS-CMDB-IpsDecoderApi) | **POST** /ips/decoder | Create object(s) in this table.  Access Group: utmgrp
*IpsGlobalApi* | [**ipsGlobalGet**](docs/classes/Fortigate-FortiOS-CMDB-IpsGlobalApi) | **GET** /ips/global | Select all entries in a CLI table.  Access Group: utmgrp
*IpsGlobalApi* | [**ipsGlobalPut**](docs/classes/Fortigate-FortiOS-CMDB-IpsGlobalApi) | **PUT** /ips/global | Update this specific resource.  Access Group: utmgrp
*IpsRuleApi* | [**ipsRuleGet**](docs/classes/Fortigate-FortiOS-CMDB-IpsRuleApi) | **GET** /ips/rule | Select all entries in a CLI table.  Access Group: utmgrp
*IpsRuleApi* | [**ipsRuleNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-IpsRuleApi) | **DELETE** /ips/rule/{name} | Delete this specific resource.  Access Group: utmgrp
*IpsRuleApi* | [**ipsRuleNameGet**](docs/classes/Fortigate-FortiOS-CMDB-IpsRuleApi) | **GET** /ips/rule/{name} | Select a specific entry from a CLI table.  Access Group: utmgrp
*IpsRuleApi* | [**ipsRuleNamePut**](docs/classes/Fortigate-FortiOS-CMDB-IpsRuleApi) | **PUT** /ips/rule/{name} | Update this specific resource.  Access Group: utmgrp
*IpsRuleApi* | [**ipsRulePost**](docs/classes/Fortigate-FortiOS-CMDB-IpsRuleApi) | **POST** /ips/rule | Create object(s) in this table.  Access Group: utmgrp
*IpsRuleSettingsApi* | [**ipsRuleSettingsGet**](docs/classes/Fortigate-FortiOS-CMDB-IpsRuleSettingsApi) | **GET** /ips/rule-settings | Select all entries in a CLI table.  Access Group: utmgrp
*IpsRuleSettingsApi* | [**ipsRuleSettingsIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-IpsRuleSettingsApi) | **DELETE** /ips/rule-settings/{id} | Delete this specific resource.  Access Group: utmgrp
*IpsRuleSettingsApi* | [**ipsRuleSettingsIdGet**](docs/classes/Fortigate-FortiOS-CMDB-IpsRuleSettingsApi) | **GET** /ips/rule-settings/{id} | Select a specific entry from a CLI table.  Access Group: utmgrp
*IpsRuleSettingsApi* | [**ipsRuleSettingsIdPut**](docs/classes/Fortigate-FortiOS-CMDB-IpsRuleSettingsApi) | **PUT** /ips/rule-settings/{id} | Update this specific resource.  Access Group: utmgrp
*IpsRuleSettingsApi* | [**ipsRuleSettingsPost**](docs/classes/Fortigate-FortiOS-CMDB-IpsRuleSettingsApi) | **POST** /ips/rule-settings | Create object(s) in this table.  Access Group: utmgrp
*IpsSensorApi* | [**ipsSensorGet**](docs/classes/Fortigate-FortiOS-CMDB-IpsSensorApi) | **GET** /ips/sensor | Select all entries in a CLI table.  Access Group: utmgrp
*IpsSensorApi* | [**ipsSensorNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-IpsSensorApi) | **DELETE** /ips/sensor/{name} | Delete this specific resource.  Access Group: utmgrp
*IpsSensorApi* | [**ipsSensorNameGet**](docs/classes/Fortigate-FortiOS-CMDB-IpsSensorApi) | **GET** /ips/sensor/{name} | Select a specific entry from a CLI table.  Access Group: utmgrp
*IpsSensorApi* | [**ipsSensorNamePut**](docs/classes/Fortigate-FortiOS-CMDB-IpsSensorApi) | **PUT** /ips/sensor/{name} | Update this specific resource.  Access Group: utmgrp
*IpsSensorApi* | [**ipsSensorPost**](docs/classes/Fortigate-FortiOS-CMDB-IpsSensorApi) | **POST** /ips/sensor | Create object(s) in this table.  Access Group: utmgrp
*IpsSettingsApi* | [**ipsSettingsGet**](docs/classes/Fortigate-FortiOS-CMDB-IpsSettingsApi) | **GET** /ips/settings | Select all entries in a CLI table.  Access Group: utmgrp
*IpsSettingsApi* | [**ipsSettingsPut**](docs/classes/Fortigate-FortiOS-CMDB-IpsSettingsApi) | **PUT** /ips/settings | Update this specific resource.  Access Group: utmgrp
*IpsViewMapApi* | [**ipsViewMapGet**](docs/classes/Fortigate-FortiOS-CMDB-IpsViewMapApi) | **GET** /ips/view-map | Select all entries in a CLI table.  Access Group: utmgrp
*IpsViewMapApi* | [**ipsViewMapIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-IpsViewMapApi) | **DELETE** /ips/view-map/{id} | Delete this specific resource.  Access Group: utmgrp
*IpsViewMapApi* | [**ipsViewMapIdGet**](docs/classes/Fortigate-FortiOS-CMDB-IpsViewMapApi) | **GET** /ips/view-map/{id} | Select a specific entry from a CLI table.  Access Group: utmgrp
*IpsViewMapApi* | [**ipsViewMapIdPut**](docs/classes/Fortigate-FortiOS-CMDB-IpsViewMapApi) | **PUT** /ips/view-map/{id} | Update this specific resource.  Access Group: utmgrp
*IpsViewMapApi* | [**ipsViewMapPost**](docs/classes/Fortigate-FortiOS-CMDB-IpsViewMapApi) | **POST** /ips/view-map | Create object(s) in this table.  Access Group: utmgrp
*LogCustomFieldApi* | [**logCustomFieldGet**](docs/classes/Fortigate-FortiOS-CMDB-LogCustomFieldApi) | **GET** /log/custom-field | Select all entries in a CLI table.  Access Group: loggrp
*LogCustomFieldApi* | [**logCustomFieldIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-LogCustomFieldApi) | **DELETE** /log/custom-field/{id} | Delete this specific resource.  Access Group: loggrp
*LogCustomFieldApi* | [**logCustomFieldIdGet**](docs/classes/Fortigate-FortiOS-CMDB-LogCustomFieldApi) | **GET** /log/custom-field/{id} | Select a specific entry from a CLI table.  Access Group: loggrp
*LogCustomFieldApi* | [**logCustomFieldIdPut**](docs/classes/Fortigate-FortiOS-CMDB-LogCustomFieldApi) | **PUT** /log/custom-field/{id} | Update this specific resource.  Access Group: loggrp
*LogCustomFieldApi* | [**logCustomFieldPost**](docs/classes/Fortigate-FortiOS-CMDB-LogCustomFieldApi) | **POST** /log/custom-field | Create object(s) in this table.  Access Group: loggrp
*LogDiskFilterApi* | [**logDiskFilterGet**](docs/classes/Fortigate-FortiOS-CMDB-LogDiskFilterApi) | **GET** /log.disk/filter | Select all entries in a CLI table.  Access Group: loggrp
*LogDiskFilterApi* | [**logDiskFilterPut**](docs/classes/Fortigate-FortiOS-CMDB-LogDiskFilterApi) | **PUT** /log.disk/filter | Update this specific resource.  Access Group: loggrp
*LogDiskSettingApi* | [**logDiskSettingGet**](docs/classes/Fortigate-FortiOS-CMDB-LogDiskSettingApi) | **GET** /log.disk/setting | Select all entries in a CLI table.  Access Group: loggrp
*LogDiskSettingApi* | [**logDiskSettingPut**](docs/classes/Fortigate-FortiOS-CMDB-LogDiskSettingApi) | **PUT** /log.disk/setting | Update this specific resource.  Access Group: loggrp
*LogEventfilterApi* | [**logEventfilterGet**](docs/classes/Fortigate-FortiOS-CMDB-LogEventfilterApi) | **GET** /log/eventfilter | Select all entries in a CLI table.  Access Group: loggrp
*LogEventfilterApi* | [**logEventfilterPut**](docs/classes/Fortigate-FortiOS-CMDB-LogEventfilterApi) | **PUT** /log/eventfilter | Update this specific resource.  Access Group: loggrp
*LogFortianalyzer2FilterApi* | [**logFortianalyzer2FilterGet**](docs/classes/Fortigate-FortiOS-CMDB-LogFortianalyzer2FilterApi) | **GET** /log.fortianalyzer2/filter | Select all entries in a CLI table.  Access Group: loggrp
*LogFortianalyzer2FilterApi* | [**logFortianalyzer2FilterPut**](docs/classes/Fortigate-FortiOS-CMDB-LogFortianalyzer2FilterApi) | **PUT** /log.fortianalyzer2/filter | Update this specific resource.  Access Group: loggrp
*LogFortianalyzer2OverrideFilterApi* | [**logFortianalyzer2OverrideFilterGet**](docs/classes/Fortigate-FortiOS-CMDB-LogFortianalyzer2OverrideFilterApi) | **GET** /log.fortianalyzer2/override-filter | Select all entries in a CLI table.  Access Group: loggrp
*LogFortianalyzer2OverrideFilterApi* | [**logFortianalyzer2OverrideFilterPut**](docs/classes/Fortigate-FortiOS-CMDB-LogFortianalyzer2OverrideFilterApi) | **PUT** /log.fortianalyzer2/override-filter | Update this specific resource.  Access Group: loggrp
*LogFortianalyzer2OverrideSettingApi* | [**logFortianalyzer2OverrideSettingGet**](docs/classes/Fortigate-FortiOS-CMDB-LogFortianalyzer2OverrideSettingApi) | **GET** /log.fortianalyzer2/override-setting | Select all entries in a CLI table.  Access Group: secfabgrp
*LogFortianalyzer2OverrideSettingApi* | [**logFortianalyzer2OverrideSettingPut**](docs/classes/Fortigate-FortiOS-CMDB-LogFortianalyzer2OverrideSettingApi) | **PUT** /log.fortianalyzer2/override-setting | Update this specific resource.  Access Group: secfabgrp
*LogFortianalyzer2SettingApi* | [**logFortianalyzer2SettingGet**](docs/classes/Fortigate-FortiOS-CMDB-LogFortianalyzer2SettingApi) | **GET** /log.fortianalyzer2/setting | Select all entries in a CLI table.  Access Group: secfabgrp
*LogFortianalyzer2SettingApi* | [**logFortianalyzer2SettingPut**](docs/classes/Fortigate-FortiOS-CMDB-LogFortianalyzer2SettingApi) | **PUT** /log.fortianalyzer2/setting | Update this specific resource.  Access Group: secfabgrp
*LogFortianalyzer3FilterApi* | [**logFortianalyzer3FilterGet**](docs/classes/Fortigate-FortiOS-CMDB-LogFortianalyzer3FilterApi) | **GET** /log.fortianalyzer3/filter | Select all entries in a CLI table.  Access Group: loggrp
*LogFortianalyzer3FilterApi* | [**logFortianalyzer3FilterPut**](docs/classes/Fortigate-FortiOS-CMDB-LogFortianalyzer3FilterApi) | **PUT** /log.fortianalyzer3/filter | Update this specific resource.  Access Group: loggrp
*LogFortianalyzer3OverrideFilterApi* | [**logFortianalyzer3OverrideFilterGet**](docs/classes/Fortigate-FortiOS-CMDB-LogFortianalyzer3OverrideFilterApi) | **GET** /log.fortianalyzer3/override-filter | Select all entries in a CLI table.  Access Group: loggrp
*LogFortianalyzer3OverrideFilterApi* | [**logFortianalyzer3OverrideFilterPut**](docs/classes/Fortigate-FortiOS-CMDB-LogFortianalyzer3OverrideFilterApi) | **PUT** /log.fortianalyzer3/override-filter | Update this specific resource.  Access Group: loggrp
*LogFortianalyzer3OverrideSettingApi* | [**logFortianalyzer3OverrideSettingGet**](docs/classes/Fortigate-FortiOS-CMDB-LogFortianalyzer3OverrideSettingApi) | **GET** /log.fortianalyzer3/override-setting | Select all entries in a CLI table.  Access Group: secfabgrp
*LogFortianalyzer3OverrideSettingApi* | [**logFortianalyzer3OverrideSettingPut**](docs/classes/Fortigate-FortiOS-CMDB-LogFortianalyzer3OverrideSettingApi) | **PUT** /log.fortianalyzer3/override-setting | Update this specific resource.  Access Group: secfabgrp
*LogFortianalyzer3SettingApi* | [**logFortianalyzer3SettingGet**](docs/classes/Fortigate-FortiOS-CMDB-LogFortianalyzer3SettingApi) | **GET** /log.fortianalyzer3/setting | Select all entries in a CLI table.  Access Group: secfabgrp
*LogFortianalyzer3SettingApi* | [**logFortianalyzer3SettingPut**](docs/classes/Fortigate-FortiOS-CMDB-LogFortianalyzer3SettingApi) | **PUT** /log.fortianalyzer3/setting | Update this specific resource.  Access Group: secfabgrp
*LogFortianalyzerCloudFilterApi* | [**logFortianalyzerCloudFilterGet**](docs/classes/Fortigate-FortiOS-CMDB-LogFortianalyzerCloudFilterApi) | **GET** /log.fortianalyzer-cloud/filter | Select all entries in a CLI table.  Access Group: loggrp
*LogFortianalyzerCloudFilterApi* | [**logFortianalyzerCloudFilterPut**](docs/classes/Fortigate-FortiOS-CMDB-LogFortianalyzerCloudFilterApi) | **PUT** /log.fortianalyzer-cloud/filter | Update this specific resource.  Access Group: loggrp
*LogFortianalyzerCloudOverrideFilterApi* | [**logFortianalyzerCloudOverrideFilterGet**](docs/classes/Fortigate-FortiOS-CMDB-LogFortianalyzerCloudOverrideFilterApi) | **GET** /log.fortianalyzer-cloud/override-filter | Select all entries in a CLI table.  Access Group: loggrp
*LogFortianalyzerCloudOverrideFilterApi* | [**logFortianalyzerCloudOverrideFilterPut**](docs/classes/Fortigate-FortiOS-CMDB-LogFortianalyzerCloudOverrideFilterApi) | **PUT** /log.fortianalyzer-cloud/override-filter | Update this specific resource.  Access Group: loggrp
*LogFortianalyzerCloudOverrideSettingApi* | [**logFortianalyzerCloudOverrideSettingGet**](docs/classes/Fortigate-FortiOS-CMDB-LogFortianalyzerCloudOverrideSettingApi) | **GET** /log.fortianalyzer-cloud/override-setting | Select all entries in a CLI table.  Access Group: secfabgrp
*LogFortianalyzerCloudOverrideSettingApi* | [**logFortianalyzerCloudOverrideSettingPut**](docs/classes/Fortigate-FortiOS-CMDB-LogFortianalyzerCloudOverrideSettingApi) | **PUT** /log.fortianalyzer-cloud/override-setting | Update this specific resource.  Access Group: secfabgrp
*LogFortianalyzerCloudSettingApi* | [**logFortianalyzerCloudSettingGet**](docs/classes/Fortigate-FortiOS-CMDB-LogFortianalyzerCloudSettingApi) | **GET** /log.fortianalyzer-cloud/setting | Select all entries in a CLI table.  Access Group: secfabgrp
*LogFortianalyzerCloudSettingApi* | [**logFortianalyzerCloudSettingPut**](docs/classes/Fortigate-FortiOS-CMDB-LogFortianalyzerCloudSettingApi) | **PUT** /log.fortianalyzer-cloud/setting | Update this specific resource.  Access Group: secfabgrp
*LogFortianalyzerFilterApi* | [**logFortianalyzerFilterGet**](docs/classes/Fortigate-FortiOS-CMDB-LogFortianalyzerFilterApi) | **GET** /log.fortianalyzer/filter | Select all entries in a CLI table.  Access Group: loggrp
*LogFortianalyzerFilterApi* | [**logFortianalyzerFilterPut**](docs/classes/Fortigate-FortiOS-CMDB-LogFortianalyzerFilterApi) | **PUT** /log.fortianalyzer/filter | Update this specific resource.  Access Group: loggrp
*LogFortianalyzerOverrideFilterApi* | [**logFortianalyzerOverrideFilterGet**](docs/classes/Fortigate-FortiOS-CMDB-LogFortianalyzerOverrideFilterApi) | **GET** /log.fortianalyzer/override-filter | Select all entries in a CLI table.  Access Group: loggrp
*LogFortianalyzerOverrideFilterApi* | [**logFortianalyzerOverrideFilterPut**](docs/classes/Fortigate-FortiOS-CMDB-LogFortianalyzerOverrideFilterApi) | **PUT** /log.fortianalyzer/override-filter | Update this specific resource.  Access Group: loggrp
*LogFortianalyzerOverrideSettingApi* | [**logFortianalyzerOverrideSettingGet**](docs/classes/Fortigate-FortiOS-CMDB-LogFortianalyzerOverrideSettingApi) | **GET** /log.fortianalyzer/override-setting | Select all entries in a CLI table.  Access Group: secfabgrp
*LogFortianalyzerOverrideSettingApi* | [**logFortianalyzerOverrideSettingPut**](docs/classes/Fortigate-FortiOS-CMDB-LogFortianalyzerOverrideSettingApi) | **PUT** /log.fortianalyzer/override-setting | Update this specific resource.  Access Group: secfabgrp
*LogFortianalyzerSettingApi* | [**logFortianalyzerSettingGet**](docs/classes/Fortigate-FortiOS-CMDB-LogFortianalyzerSettingApi) | **GET** /log.fortianalyzer/setting | Select all entries in a CLI table.  Access Group: secfabgrp
*LogFortianalyzerSettingApi* | [**logFortianalyzerSettingPut**](docs/classes/Fortigate-FortiOS-CMDB-LogFortianalyzerSettingApi) | **PUT** /log.fortianalyzer/setting | Update this specific resource.  Access Group: secfabgrp
*LogFortiguardFilterApi* | [**logFortiguardFilterGet**](docs/classes/Fortigate-FortiOS-CMDB-LogFortiguardFilterApi) | **GET** /log.fortiguard/filter | Select all entries in a CLI table.  Access Group: loggrp
*LogFortiguardFilterApi* | [**logFortiguardFilterPut**](docs/classes/Fortigate-FortiOS-CMDB-LogFortiguardFilterApi) | **PUT** /log.fortiguard/filter | Update this specific resource.  Access Group: loggrp
*LogFortiguardOverrideFilterApi* | [**logFortiguardOverrideFilterGet**](docs/classes/Fortigate-FortiOS-CMDB-LogFortiguardOverrideFilterApi) | **GET** /log.fortiguard/override-filter | Select all entries in a CLI table.  Access Group: loggrp
*LogFortiguardOverrideFilterApi* | [**logFortiguardOverrideFilterPut**](docs/classes/Fortigate-FortiOS-CMDB-LogFortiguardOverrideFilterApi) | **PUT** /log.fortiguard/override-filter | Update this specific resource.  Access Group: loggrp
*LogFortiguardOverrideSettingApi* | [**logFortiguardOverrideSettingGet**](docs/classes/Fortigate-FortiOS-CMDB-LogFortiguardOverrideSettingApi) | **GET** /log.fortiguard/override-setting | Select all entries in a CLI table.  Access Group: loggrp
*LogFortiguardOverrideSettingApi* | [**logFortiguardOverrideSettingPut**](docs/classes/Fortigate-FortiOS-CMDB-LogFortiguardOverrideSettingApi) | **PUT** /log.fortiguard/override-setting | Update this specific resource.  Access Group: loggrp
*LogFortiguardSettingApi* | [**logFortiguardSettingGet**](docs/classes/Fortigate-FortiOS-CMDB-LogFortiguardSettingApi) | **GET** /log.fortiguard/setting | Select all entries in a CLI table.  Access Group: loggrp
*LogFortiguardSettingApi* | [**logFortiguardSettingPut**](docs/classes/Fortigate-FortiOS-CMDB-LogFortiguardSettingApi) | **PUT** /log.fortiguard/setting | Update this specific resource.  Access Group: loggrp
*LogGuiDisplayApi* | [**logGuiDisplayGet**](docs/classes/Fortigate-FortiOS-CMDB-LogGuiDisplayApi) | **GET** /log/gui-display | Select all entries in a CLI table.  Access Group: loggrp
*LogGuiDisplayApi* | [**logGuiDisplayPut**](docs/classes/Fortigate-FortiOS-CMDB-LogGuiDisplayApi) | **PUT** /log/gui-display | Update this specific resource.  Access Group: loggrp
*LogMemoryFilterApi* | [**logMemoryFilterGet**](docs/classes/Fortigate-FortiOS-CMDB-LogMemoryFilterApi) | **GET** /log.memory/filter | Select all entries in a CLI table.  Access Group: loggrp
*LogMemoryFilterApi* | [**logMemoryFilterPut**](docs/classes/Fortigate-FortiOS-CMDB-LogMemoryFilterApi) | **PUT** /log.memory/filter | Update this specific resource.  Access Group: loggrp
*LogMemoryGlobalSettingApi* | [**logMemoryGlobalSettingGet**](docs/classes/Fortigate-FortiOS-CMDB-LogMemoryGlobalSettingApi) | **GET** /log.memory/global-setting | Select all entries in a CLI table.  Access Group: loggrp
*LogMemoryGlobalSettingApi* | [**logMemoryGlobalSettingPut**](docs/classes/Fortigate-FortiOS-CMDB-LogMemoryGlobalSettingApi) | **PUT** /log.memory/global-setting | Update this specific resource.  Access Group: loggrp
*LogMemorySettingApi* | [**logMemorySettingGet**](docs/classes/Fortigate-FortiOS-CMDB-LogMemorySettingApi) | **GET** /log.memory/setting | Select all entries in a CLI table.  Access Group: loggrp
*LogMemorySettingApi* | [**logMemorySettingPut**](docs/classes/Fortigate-FortiOS-CMDB-LogMemorySettingApi) | **PUT** /log.memory/setting | Update this specific resource.  Access Group: loggrp
*LogNullDeviceFilterApi* | [**logNullDeviceFilterGet**](docs/classes/Fortigate-FortiOS-CMDB-LogNullDeviceFilterApi) | **GET** /log.null-device/filter | Select all entries in a CLI table.  Access Group: loggrp
*LogNullDeviceFilterApi* | [**logNullDeviceFilterPut**](docs/classes/Fortigate-FortiOS-CMDB-LogNullDeviceFilterApi) | **PUT** /log.null-device/filter | Update this specific resource.  Access Group: loggrp
*LogNullDeviceSettingApi* | [**logNullDeviceSettingGet**](docs/classes/Fortigate-FortiOS-CMDB-LogNullDeviceSettingApi) | **GET** /log.null-device/setting | Select all entries in a CLI table.  Access Group: loggrp
*LogNullDeviceSettingApi* | [**logNullDeviceSettingPut**](docs/classes/Fortigate-FortiOS-CMDB-LogNullDeviceSettingApi) | **PUT** /log.null-device/setting | Update this specific resource.  Access Group: loggrp
*LogSettingApi* | [**logSettingGet**](docs/classes/Fortigate-FortiOS-CMDB-LogSettingApi) | **GET** /log/setting | Select all entries in a CLI table.  Access Group: loggrp
*LogSettingApi* | [**logSettingPut**](docs/classes/Fortigate-FortiOS-CMDB-LogSettingApi) | **PUT** /log/setting | Update this specific resource.  Access Group: loggrp
*LogSyslogd2FilterApi* | [**logSyslogd2FilterGet**](docs/classes/Fortigate-FortiOS-CMDB-LogSyslogd2FilterApi) | **GET** /log.syslogd2/filter | Select all entries in a CLI table.  Access Group: loggrp
*LogSyslogd2FilterApi* | [**logSyslogd2FilterPut**](docs/classes/Fortigate-FortiOS-CMDB-LogSyslogd2FilterApi) | **PUT** /log.syslogd2/filter | Update this specific resource.  Access Group: loggrp
*LogSyslogd2OverrideFilterApi* | [**logSyslogd2OverrideFilterGet**](docs/classes/Fortigate-FortiOS-CMDB-LogSyslogd2OverrideFilterApi) | **GET** /log.syslogd2/override-filter | Select all entries in a CLI table.  Access Group: loggrp
*LogSyslogd2OverrideFilterApi* | [**logSyslogd2OverrideFilterPut**](docs/classes/Fortigate-FortiOS-CMDB-LogSyslogd2OverrideFilterApi) | **PUT** /log.syslogd2/override-filter | Update this specific resource.  Access Group: loggrp
*LogSyslogd2OverrideSettingApi* | [**logSyslogd2OverrideSettingGet**](docs/classes/Fortigate-FortiOS-CMDB-LogSyslogd2OverrideSettingApi) | **GET** /log.syslogd2/override-setting | Select all entries in a CLI table.  Access Group: loggrp
*LogSyslogd2OverrideSettingApi* | [**logSyslogd2OverrideSettingPut**](docs/classes/Fortigate-FortiOS-CMDB-LogSyslogd2OverrideSettingApi) | **PUT** /log.syslogd2/override-setting | Update this specific resource.  Access Group: loggrp
*LogSyslogd2SettingApi* | [**logSyslogd2SettingGet**](docs/classes/Fortigate-FortiOS-CMDB-LogSyslogd2SettingApi) | **GET** /log.syslogd2/setting | Select all entries in a CLI table.  Access Group: loggrp
*LogSyslogd2SettingApi* | [**logSyslogd2SettingPut**](docs/classes/Fortigate-FortiOS-CMDB-LogSyslogd2SettingApi) | **PUT** /log.syslogd2/setting | Update this specific resource.  Access Group: loggrp
*LogSyslogd3FilterApi* | [**logSyslogd3FilterGet**](docs/classes/Fortigate-FortiOS-CMDB-LogSyslogd3FilterApi) | **GET** /log.syslogd3/filter | Select all entries in a CLI table.  Access Group: loggrp
*LogSyslogd3FilterApi* | [**logSyslogd3FilterPut**](docs/classes/Fortigate-FortiOS-CMDB-LogSyslogd3FilterApi) | **PUT** /log.syslogd3/filter | Update this specific resource.  Access Group: loggrp
*LogSyslogd3OverrideFilterApi* | [**logSyslogd3OverrideFilterGet**](docs/classes/Fortigate-FortiOS-CMDB-LogSyslogd3OverrideFilterApi) | **GET** /log.syslogd3/override-filter | Select all entries in a CLI table.  Access Group: loggrp
*LogSyslogd3OverrideFilterApi* | [**logSyslogd3OverrideFilterPut**](docs/classes/Fortigate-FortiOS-CMDB-LogSyslogd3OverrideFilterApi) | **PUT** /log.syslogd3/override-filter | Update this specific resource.  Access Group: loggrp
*LogSyslogd3OverrideSettingApi* | [**logSyslogd3OverrideSettingGet**](docs/classes/Fortigate-FortiOS-CMDB-LogSyslogd3OverrideSettingApi) | **GET** /log.syslogd3/override-setting | Select all entries in a CLI table.  Access Group: loggrp
*LogSyslogd3OverrideSettingApi* | [**logSyslogd3OverrideSettingPut**](docs/classes/Fortigate-FortiOS-CMDB-LogSyslogd3OverrideSettingApi) | **PUT** /log.syslogd3/override-setting | Update this specific resource.  Access Group: loggrp
*LogSyslogd3SettingApi* | [**logSyslogd3SettingGet**](docs/classes/Fortigate-FortiOS-CMDB-LogSyslogd3SettingApi) | **GET** /log.syslogd3/setting | Select all entries in a CLI table.  Access Group: loggrp
*LogSyslogd3SettingApi* | [**logSyslogd3SettingPut**](docs/classes/Fortigate-FortiOS-CMDB-LogSyslogd3SettingApi) | **PUT** /log.syslogd3/setting | Update this specific resource.  Access Group: loggrp
*LogSyslogd4FilterApi* | [**logSyslogd4FilterGet**](docs/classes/Fortigate-FortiOS-CMDB-LogSyslogd4FilterApi) | **GET** /log.syslogd4/filter | Select all entries in a CLI table.  Access Group: loggrp
*LogSyslogd4FilterApi* | [**logSyslogd4FilterPut**](docs/classes/Fortigate-FortiOS-CMDB-LogSyslogd4FilterApi) | **PUT** /log.syslogd4/filter | Update this specific resource.  Access Group: loggrp
*LogSyslogd4OverrideFilterApi* | [**logSyslogd4OverrideFilterGet**](docs/classes/Fortigate-FortiOS-CMDB-LogSyslogd4OverrideFilterApi) | **GET** /log.syslogd4/override-filter | Select all entries in a CLI table.  Access Group: loggrp
*LogSyslogd4OverrideFilterApi* | [**logSyslogd4OverrideFilterPut**](docs/classes/Fortigate-FortiOS-CMDB-LogSyslogd4OverrideFilterApi) | **PUT** /log.syslogd4/override-filter | Update this specific resource.  Access Group: loggrp
*LogSyslogd4OverrideSettingApi* | [**logSyslogd4OverrideSettingGet**](docs/classes/Fortigate-FortiOS-CMDB-LogSyslogd4OverrideSettingApi) | **GET** /log.syslogd4/override-setting | Select all entries in a CLI table.  Access Group: loggrp
*LogSyslogd4OverrideSettingApi* | [**logSyslogd4OverrideSettingPut**](docs/classes/Fortigate-FortiOS-CMDB-LogSyslogd4OverrideSettingApi) | **PUT** /log.syslogd4/override-setting | Update this specific resource.  Access Group: loggrp
*LogSyslogd4SettingApi* | [**logSyslogd4SettingGet**](docs/classes/Fortigate-FortiOS-CMDB-LogSyslogd4SettingApi) | **GET** /log.syslogd4/setting | Select all entries in a CLI table.  Access Group: loggrp
*LogSyslogd4SettingApi* | [**logSyslogd4SettingPut**](docs/classes/Fortigate-FortiOS-CMDB-LogSyslogd4SettingApi) | **PUT** /log.syslogd4/setting | Update this specific resource.  Access Group: loggrp
*LogSyslogdFilterApi* | [**logSyslogdFilterGet**](docs/classes/Fortigate-FortiOS-CMDB-LogSyslogdFilterApi) | **GET** /log.syslogd/filter | Select all entries in a CLI table.  Access Group: loggrp
*LogSyslogdFilterApi* | [**logSyslogdFilterPut**](docs/classes/Fortigate-FortiOS-CMDB-LogSyslogdFilterApi) | **PUT** /log.syslogd/filter | Update this specific resource.  Access Group: loggrp
*LogSyslogdOverrideFilterApi* | [**logSyslogdOverrideFilterGet**](docs/classes/Fortigate-FortiOS-CMDB-LogSyslogdOverrideFilterApi) | **GET** /log.syslogd/override-filter | Select all entries in a CLI table.  Access Group: loggrp
*LogSyslogdOverrideFilterApi* | [**logSyslogdOverrideFilterPut**](docs/classes/Fortigate-FortiOS-CMDB-LogSyslogdOverrideFilterApi) | **PUT** /log.syslogd/override-filter | Update this specific resource.  Access Group: loggrp
*LogSyslogdOverrideSettingApi* | [**logSyslogdOverrideSettingGet**](docs/classes/Fortigate-FortiOS-CMDB-LogSyslogdOverrideSettingApi) | **GET** /log.syslogd/override-setting | Select all entries in a CLI table.  Access Group: loggrp
*LogSyslogdOverrideSettingApi* | [**logSyslogdOverrideSettingPut**](docs/classes/Fortigate-FortiOS-CMDB-LogSyslogdOverrideSettingApi) | **PUT** /log.syslogd/override-setting | Update this specific resource.  Access Group: loggrp
*LogSyslogdSettingApi* | [**logSyslogdSettingGet**](docs/classes/Fortigate-FortiOS-CMDB-LogSyslogdSettingApi) | **GET** /log.syslogd/setting | Select all entries in a CLI table.  Access Group: loggrp
*LogSyslogdSettingApi* | [**logSyslogdSettingPut**](docs/classes/Fortigate-FortiOS-CMDB-LogSyslogdSettingApi) | **PUT** /log.syslogd/setting | Update this specific resource.  Access Group: loggrp
*LogThreatWeightApi* | [**logThreatWeightGet**](docs/classes/Fortigate-FortiOS-CMDB-LogThreatWeightApi) | **GET** /log/threat-weight | Select all entries in a CLI table.  Access Group: loggrp
*LogThreatWeightApi* | [**logThreatWeightPut**](docs/classes/Fortigate-FortiOS-CMDB-LogThreatWeightApi) | **PUT** /log/threat-weight | Update this specific resource.  Access Group: loggrp
*LogWebtrendsFilterApi* | [**logWebtrendsFilterGet**](docs/classes/Fortigate-FortiOS-CMDB-LogWebtrendsFilterApi) | **GET** /log.webtrends/filter | Select all entries in a CLI table.  Access Group: loggrp
*LogWebtrendsFilterApi* | [**logWebtrendsFilterPut**](docs/classes/Fortigate-FortiOS-CMDB-LogWebtrendsFilterApi) | **PUT** /log.webtrends/filter | Update this specific resource.  Access Group: loggrp
*LogWebtrendsSettingApi* | [**logWebtrendsSettingGet**](docs/classes/Fortigate-FortiOS-CMDB-LogWebtrendsSettingApi) | **GET** /log.webtrends/setting | Select all entries in a CLI table.  Access Group: loggrp
*LogWebtrendsSettingApi* | [**logWebtrendsSettingPut**](docs/classes/Fortigate-FortiOS-CMDB-LogWebtrendsSettingApi) | **PUT** /log.webtrends/setting | Update this specific resource.  Access Group: loggrp
*ReportChartApi* | [**reportChartGet**](docs/classes/Fortigate-FortiOS-CMDB-ReportChartApi) | **GET** /report/chart | Select all entries in a CLI table.  Access Group: loggrp
*ReportChartApi* | [**reportChartNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-ReportChartApi) | **DELETE** /report/chart/{name} | Delete this specific resource.  Access Group: loggrp
*ReportChartApi* | [**reportChartNameGet**](docs/classes/Fortigate-FortiOS-CMDB-ReportChartApi) | **GET** /report/chart/{name} | Select a specific entry from a CLI table.  Access Group: loggrp
*ReportChartApi* | [**reportChartNamePut**](docs/classes/Fortigate-FortiOS-CMDB-ReportChartApi) | **PUT** /report/chart/{name} | Update this specific resource.  Access Group: loggrp
*ReportChartApi* | [**reportChartPost**](docs/classes/Fortigate-FortiOS-CMDB-ReportChartApi) | **POST** /report/chart | Create object(s) in this table.  Access Group: loggrp
*ReportDatasetApi* | [**reportDatasetGet**](docs/classes/Fortigate-FortiOS-CMDB-ReportDatasetApi) | **GET** /report/dataset | Select all entries in a CLI table.  Access Group: loggrp
*ReportDatasetApi* | [**reportDatasetNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-ReportDatasetApi) | **DELETE** /report/dataset/{name} | Delete this specific resource.  Access Group: loggrp
*ReportDatasetApi* | [**reportDatasetNameGet**](docs/classes/Fortigate-FortiOS-CMDB-ReportDatasetApi) | **GET** /report/dataset/{name} | Select a specific entry from a CLI table.  Access Group: loggrp
*ReportDatasetApi* | [**reportDatasetNamePut**](docs/classes/Fortigate-FortiOS-CMDB-ReportDatasetApi) | **PUT** /report/dataset/{name} | Update this specific resource.  Access Group: loggrp
*ReportDatasetApi* | [**reportDatasetPost**](docs/classes/Fortigate-FortiOS-CMDB-ReportDatasetApi) | **POST** /report/dataset | Create object(s) in this table.  Access Group: loggrp
*ReportLayoutApi* | [**reportLayoutGet**](docs/classes/Fortigate-FortiOS-CMDB-ReportLayoutApi) | **GET** /report/layout | Select all entries in a CLI table.  Access Group: loggrp
*ReportLayoutApi* | [**reportLayoutNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-ReportLayoutApi) | **DELETE** /report/layout/{name} | Delete this specific resource.  Access Group: loggrp
*ReportLayoutApi* | [**reportLayoutNameGet**](docs/classes/Fortigate-FortiOS-CMDB-ReportLayoutApi) | **GET** /report/layout/{name} | Select a specific entry from a CLI table.  Access Group: loggrp
*ReportLayoutApi* | [**reportLayoutNamePut**](docs/classes/Fortigate-FortiOS-CMDB-ReportLayoutApi) | **PUT** /report/layout/{name} | Update this specific resource.  Access Group: loggrp
*ReportLayoutApi* | [**reportLayoutPost**](docs/classes/Fortigate-FortiOS-CMDB-ReportLayoutApi) | **POST** /report/layout | Create object(s) in this table.  Access Group: loggrp
*ReportSettingApi* | [**reportSettingGet**](docs/classes/Fortigate-FortiOS-CMDB-ReportSettingApi) | **GET** /report/setting | Select all entries in a CLI table.  Access Group: loggrp
*ReportSettingApi* | [**reportSettingPut**](docs/classes/Fortigate-FortiOS-CMDB-ReportSettingApi) | **PUT** /report/setting | Update this specific resource.  Access Group: loggrp
*ReportStyleApi* | [**reportStyleGet**](docs/classes/Fortigate-FortiOS-CMDB-ReportStyleApi) | **GET** /report/style | Select all entries in a CLI table.  Access Group: loggrp
*ReportStyleApi* | [**reportStyleNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-ReportStyleApi) | **DELETE** /report/style/{name} | Delete this specific resource.  Access Group: loggrp
*ReportStyleApi* | [**reportStyleNameGet**](docs/classes/Fortigate-FortiOS-CMDB-ReportStyleApi) | **GET** /report/style/{name} | Select a specific entry from a CLI table.  Access Group: loggrp
*ReportStyleApi* | [**reportStyleNamePut**](docs/classes/Fortigate-FortiOS-CMDB-ReportStyleApi) | **PUT** /report/style/{name} | Update this specific resource.  Access Group: loggrp
*ReportStyleApi* | [**reportStylePost**](docs/classes/Fortigate-FortiOS-CMDB-ReportStyleApi) | **POST** /report/style | Create object(s) in this table.  Access Group: loggrp
*ReportThemeApi* | [**reportThemeGet**](docs/classes/Fortigate-FortiOS-CMDB-ReportThemeApi) | **GET** /report/theme | Select all entries in a CLI table.  Access Group: loggrp
*ReportThemeApi* | [**reportThemeNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-ReportThemeApi) | **DELETE** /report/theme/{name} | Delete this specific resource.  Access Group: loggrp
*ReportThemeApi* | [**reportThemeNameGet**](docs/classes/Fortigate-FortiOS-CMDB-ReportThemeApi) | **GET** /report/theme/{name} | Select a specific entry from a CLI table.  Access Group: loggrp
*ReportThemeApi* | [**reportThemeNamePut**](docs/classes/Fortigate-FortiOS-CMDB-ReportThemeApi) | **PUT** /report/theme/{name} | Update this specific resource.  Access Group: loggrp
*ReportThemeApi* | [**reportThemePost**](docs/classes/Fortigate-FortiOS-CMDB-ReportThemeApi) | **POST** /report/theme | Create object(s) in this table.  Access Group: loggrp
*RouterAccessListApi* | [**routerAccessListGet**](docs/classes/Fortigate-FortiOS-CMDB-RouterAccessListApi) | **GET** /router/access-list | Select all entries in a CLI table.  Access Group: netgrp
*RouterAccessListApi* | [**routerAccessListNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-RouterAccessListApi) | **DELETE** /router/access-list/{name} | Delete this specific resource.  Access Group: netgrp
*RouterAccessListApi* | [**routerAccessListNameGet**](docs/classes/Fortigate-FortiOS-CMDB-RouterAccessListApi) | **GET** /router/access-list/{name} | Select a specific entry from a CLI table.  Access Group: netgrp
*RouterAccessListApi* | [**routerAccessListNamePut**](docs/classes/Fortigate-FortiOS-CMDB-RouterAccessListApi) | **PUT** /router/access-list/{name} | Update this specific resource.  Access Group: netgrp
*RouterAccessListApi* | [**routerAccessListPost**](docs/classes/Fortigate-FortiOS-CMDB-RouterAccessListApi) | **POST** /router/access-list | Create object(s) in this table.  Access Group: netgrp
*RouterAccessList6Api* | [**routerAccessList6Get**](docs/classes/Fortigate-FortiOS-CMDB-RouterAccessList6Api) | **GET** /router/access-list6 | Select all entries in a CLI table.  Access Group: netgrp
*RouterAccessList6Api* | [**routerAccessList6NameDelete**](docs/classes/Fortigate-FortiOS-CMDB-RouterAccessList6Api) | **DELETE** /router/access-list6/{name} | Delete this specific resource.  Access Group: netgrp
*RouterAccessList6Api* | [**routerAccessList6NameGet**](docs/classes/Fortigate-FortiOS-CMDB-RouterAccessList6Api) | **GET** /router/access-list6/{name} | Select a specific entry from a CLI table.  Access Group: netgrp
*RouterAccessList6Api* | [**routerAccessList6NamePut**](docs/classes/Fortigate-FortiOS-CMDB-RouterAccessList6Api) | **PUT** /router/access-list6/{name} | Update this specific resource.  Access Group: netgrp
*RouterAccessList6Api* | [**routerAccessList6Post**](docs/classes/Fortigate-FortiOS-CMDB-RouterAccessList6Api) | **POST** /router/access-list6 | Create object(s) in this table.  Access Group: netgrp
*RouterAspathListApi* | [**routerAspathListGet**](docs/classes/Fortigate-FortiOS-CMDB-RouterAspathListApi) | **GET** /router/aspath-list | Select all entries in a CLI table.  Access Group: netgrp
*RouterAspathListApi* | [**routerAspathListNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-RouterAspathListApi) | **DELETE** /router/aspath-list/{name} | Delete this specific resource.  Access Group: netgrp
*RouterAspathListApi* | [**routerAspathListNameGet**](docs/classes/Fortigate-FortiOS-CMDB-RouterAspathListApi) | **GET** /router/aspath-list/{name} | Select a specific entry from a CLI table.  Access Group: netgrp
*RouterAspathListApi* | [**routerAspathListNamePut**](docs/classes/Fortigate-FortiOS-CMDB-RouterAspathListApi) | **PUT** /router/aspath-list/{name} | Update this specific resource.  Access Group: netgrp
*RouterAspathListApi* | [**routerAspathListPost**](docs/classes/Fortigate-FortiOS-CMDB-RouterAspathListApi) | **POST** /router/aspath-list | Create object(s) in this table.  Access Group: netgrp
*RouterAuthPathApi* | [**routerAuthPathGet**](docs/classes/Fortigate-FortiOS-CMDB-RouterAuthPathApi) | **GET** /router/auth-path | Select all entries in a CLI table.  Access Group: netgrp
*RouterAuthPathApi* | [**routerAuthPathNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-RouterAuthPathApi) | **DELETE** /router/auth-path/{name} | Delete this specific resource.  Access Group: netgrp
*RouterAuthPathApi* | [**routerAuthPathNameGet**](docs/classes/Fortigate-FortiOS-CMDB-RouterAuthPathApi) | **GET** /router/auth-path/{name} | Select a specific entry from a CLI table.  Access Group: netgrp
*RouterAuthPathApi* | [**routerAuthPathNamePut**](docs/classes/Fortigate-FortiOS-CMDB-RouterAuthPathApi) | **PUT** /router/auth-path/{name} | Update this specific resource.  Access Group: netgrp
*RouterAuthPathApi* | [**routerAuthPathPost**](docs/classes/Fortigate-FortiOS-CMDB-RouterAuthPathApi) | **POST** /router/auth-path | Create object(s) in this table.  Access Group: netgrp
*RouterBfdApi* | [**routerBfdGet**](docs/classes/Fortigate-FortiOS-CMDB-RouterBfdApi) | **GET** /router/bfd | Select all entries in a CLI table.  Access Group: netgrp
*RouterBfdApi* | [**routerBfdPut**](docs/classes/Fortigate-FortiOS-CMDB-RouterBfdApi) | **PUT** /router/bfd | Update this specific resource.  Access Group: netgrp
*RouterBfd6Api* | [**routerBfd6Get**](docs/classes/Fortigate-FortiOS-CMDB-RouterBfd6Api) | **GET** /router/bfd6 | Select all entries in a CLI table.  Access Group: netgrp
*RouterBfd6Api* | [**routerBfd6Put**](docs/classes/Fortigate-FortiOS-CMDB-RouterBfd6Api) | **PUT** /router/bfd6 | Update this specific resource.  Access Group: netgrp
*RouterBgpApi* | [**routerBgpGet**](docs/classes/Fortigate-FortiOS-CMDB-RouterBgpApi) | **GET** /router/bgp | Select all entries in a CLI table.  Access Group: netgrp
*RouterBgpApi* | [**routerBgpPut**](docs/classes/Fortigate-FortiOS-CMDB-RouterBgpApi) | **PUT** /router/bgp | Update this specific resource.  Access Group: netgrp
*RouterCommunityListApi* | [**routerCommunityListGet**](docs/classes/Fortigate-FortiOS-CMDB-RouterCommunityListApi) | **GET** /router/community-list | Select all entries in a CLI table.  Access Group: netgrp
*RouterCommunityListApi* | [**routerCommunityListNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-RouterCommunityListApi) | **DELETE** /router/community-list/{name} | Delete this specific resource.  Access Group: netgrp
*RouterCommunityListApi* | [**routerCommunityListNameGet**](docs/classes/Fortigate-FortiOS-CMDB-RouterCommunityListApi) | **GET** /router/community-list/{name} | Select a specific entry from a CLI table.  Access Group: netgrp
*RouterCommunityListApi* | [**routerCommunityListNamePut**](docs/classes/Fortigate-FortiOS-CMDB-RouterCommunityListApi) | **PUT** /router/community-list/{name} | Update this specific resource.  Access Group: netgrp
*RouterCommunityListApi* | [**routerCommunityListPost**](docs/classes/Fortigate-FortiOS-CMDB-RouterCommunityListApi) | **POST** /router/community-list | Create object(s) in this table.  Access Group: netgrp
*RouterIsisApi* | [**routerIsisGet**](docs/classes/Fortigate-FortiOS-CMDB-RouterIsisApi) | **GET** /router/isis | Select all entries in a CLI table.  Access Group: netgrp
*RouterIsisApi* | [**routerIsisPut**](docs/classes/Fortigate-FortiOS-CMDB-RouterIsisApi) | **PUT** /router/isis | Update this specific resource.  Access Group: netgrp
*RouterKeyChainApi* | [**routerKeyChainGet**](docs/classes/Fortigate-FortiOS-CMDB-RouterKeyChainApi) | **GET** /router/key-chain | Select all entries in a CLI table.  Access Group: netgrp
*RouterKeyChainApi* | [**routerKeyChainNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-RouterKeyChainApi) | **DELETE** /router/key-chain/{name} | Delete this specific resource.  Access Group: netgrp
*RouterKeyChainApi* | [**routerKeyChainNameGet**](docs/classes/Fortigate-FortiOS-CMDB-RouterKeyChainApi) | **GET** /router/key-chain/{name} | Select a specific entry from a CLI table.  Access Group: netgrp
*RouterKeyChainApi* | [**routerKeyChainNamePut**](docs/classes/Fortigate-FortiOS-CMDB-RouterKeyChainApi) | **PUT** /router/key-chain/{name} | Update this specific resource.  Access Group: netgrp
*RouterKeyChainApi* | [**routerKeyChainPost**](docs/classes/Fortigate-FortiOS-CMDB-RouterKeyChainApi) | **POST** /router/key-chain | Create object(s) in this table.  Access Group: netgrp
*RouterMulticastApi* | [**routerMulticastGet**](docs/classes/Fortigate-FortiOS-CMDB-RouterMulticastApi) | **GET** /router/multicast | Select all entries in a CLI table.  Access Group: netgrp
*RouterMulticastApi* | [**routerMulticastPut**](docs/classes/Fortigate-FortiOS-CMDB-RouterMulticastApi) | **PUT** /router/multicast | Update this specific resource.  Access Group: netgrp
*RouterMulticast6Api* | [**routerMulticast6Get**](docs/classes/Fortigate-FortiOS-CMDB-RouterMulticast6Api) | **GET** /router/multicast6 | Select all entries in a CLI table.  Access Group: netgrp
*RouterMulticast6Api* | [**routerMulticast6Put**](docs/classes/Fortigate-FortiOS-CMDB-RouterMulticast6Api) | **PUT** /router/multicast6 | Update this specific resource.  Access Group: netgrp
*RouterMulticastFlowApi* | [**routerMulticastFlowGet**](docs/classes/Fortigate-FortiOS-CMDB-RouterMulticastFlowApi) | **GET** /router/multicast-flow | Select all entries in a CLI table.  Access Group: netgrp
*RouterMulticastFlowApi* | [**routerMulticastFlowNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-RouterMulticastFlowApi) | **DELETE** /router/multicast-flow/{name} | Delete this specific resource.  Access Group: netgrp
*RouterMulticastFlowApi* | [**routerMulticastFlowNameGet**](docs/classes/Fortigate-FortiOS-CMDB-RouterMulticastFlowApi) | **GET** /router/multicast-flow/{name} | Select a specific entry from a CLI table.  Access Group: netgrp
*RouterMulticastFlowApi* | [**routerMulticastFlowNamePut**](docs/classes/Fortigate-FortiOS-CMDB-RouterMulticastFlowApi) | **PUT** /router/multicast-flow/{name} | Update this specific resource.  Access Group: netgrp
*RouterMulticastFlowApi* | [**routerMulticastFlowPost**](docs/classes/Fortigate-FortiOS-CMDB-RouterMulticastFlowApi) | **POST** /router/multicast-flow | Create object(s) in this table.  Access Group: netgrp
*RouterOspfApi* | [**routerOspfGet**](docs/classes/Fortigate-FortiOS-CMDB-RouterOspfApi) | **GET** /router/ospf | Select all entries in a CLI table.  Access Group: netgrp
*RouterOspfApi* | [**routerOspfPut**](docs/classes/Fortigate-FortiOS-CMDB-RouterOspfApi) | **PUT** /router/ospf | Update this specific resource.  Access Group: netgrp
*RouterOspf6Api* | [**routerOspf6Get**](docs/classes/Fortigate-FortiOS-CMDB-RouterOspf6Api) | **GET** /router/ospf6 | Select all entries in a CLI table.  Access Group: netgrp
*RouterOspf6Api* | [**routerOspf6Put**](docs/classes/Fortigate-FortiOS-CMDB-RouterOspf6Api) | **PUT** /router/ospf6 | Update this specific resource.  Access Group: netgrp
*RouterPolicyApi* | [**routerPolicyGet**](docs/classes/Fortigate-FortiOS-CMDB-RouterPolicyApi) | **GET** /router/policy | Select all entries in a CLI table.  Access Group: netgrp
*RouterPolicyApi* | [**routerPolicyPost**](docs/classes/Fortigate-FortiOS-CMDB-RouterPolicyApi) | **POST** /router/policy | Create object(s) in this table.  Access Group: netgrp
*RouterPolicyApi* | [**routerPolicySeqNumDelete**](docs/classes/Fortigate-FortiOS-CMDB-RouterPolicyApi) | **DELETE** /router/policy/{seq-num} | Delete this specific resource.  Access Group: netgrp
*RouterPolicyApi* | [**routerPolicySeqNumGet**](docs/classes/Fortigate-FortiOS-CMDB-RouterPolicyApi) | **GET** /router/policy/{seq-num} | Select a specific entry from a CLI table.  Access Group: netgrp
*RouterPolicyApi* | [**routerPolicySeqNumPut**](docs/classes/Fortigate-FortiOS-CMDB-RouterPolicyApi) | **PUT** /router/policy/{seq-num} | Update this specific resource.  Access Group: netgrp
*RouterPolicy6Api* | [**routerPolicy6Get**](docs/classes/Fortigate-FortiOS-CMDB-RouterPolicy6Api) | **GET** /router/policy6 | Select all entries in a CLI table.  Access Group: netgrp
*RouterPolicy6Api* | [**routerPolicy6Post**](docs/classes/Fortigate-FortiOS-CMDB-RouterPolicy6Api) | **POST** /router/policy6 | Create object(s) in this table.  Access Group: netgrp
*RouterPolicy6Api* | [**routerPolicy6SeqNumDelete**](docs/classes/Fortigate-FortiOS-CMDB-RouterPolicy6Api) | **DELETE** /router/policy6/{seq-num} | Delete this specific resource.  Access Group: netgrp
*RouterPolicy6Api* | [**routerPolicy6SeqNumGet**](docs/classes/Fortigate-FortiOS-CMDB-RouterPolicy6Api) | **GET** /router/policy6/{seq-num} | Select a specific entry from a CLI table.  Access Group: netgrp
*RouterPolicy6Api* | [**routerPolicy6SeqNumPut**](docs/classes/Fortigate-FortiOS-CMDB-RouterPolicy6Api) | **PUT** /router/policy6/{seq-num} | Update this specific resource.  Access Group: netgrp
*RouterPrefixListApi* | [**routerPrefixListGet**](docs/classes/Fortigate-FortiOS-CMDB-RouterPrefixListApi) | **GET** /router/prefix-list | Select all entries in a CLI table.  Access Group: netgrp
*RouterPrefixListApi* | [**routerPrefixListNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-RouterPrefixListApi) | **DELETE** /router/prefix-list/{name} | Delete this specific resource.  Access Group: netgrp
*RouterPrefixListApi* | [**routerPrefixListNameGet**](docs/classes/Fortigate-FortiOS-CMDB-RouterPrefixListApi) | **GET** /router/prefix-list/{name} | Select a specific entry from a CLI table.  Access Group: netgrp
*RouterPrefixListApi* | [**routerPrefixListNamePut**](docs/classes/Fortigate-FortiOS-CMDB-RouterPrefixListApi) | **PUT** /router/prefix-list/{name} | Update this specific resource.  Access Group: netgrp
*RouterPrefixListApi* | [**routerPrefixListPost**](docs/classes/Fortigate-FortiOS-CMDB-RouterPrefixListApi) | **POST** /router/prefix-list | Create object(s) in this table.  Access Group: netgrp
*RouterPrefixList6Api* | [**routerPrefixList6Get**](docs/classes/Fortigate-FortiOS-CMDB-RouterPrefixList6Api) | **GET** /router/prefix-list6 | Select all entries in a CLI table.  Access Group: netgrp
*RouterPrefixList6Api* | [**routerPrefixList6NameDelete**](docs/classes/Fortigate-FortiOS-CMDB-RouterPrefixList6Api) | **DELETE** /router/prefix-list6/{name} | Delete this specific resource.  Access Group: netgrp
*RouterPrefixList6Api* | [**routerPrefixList6NameGet**](docs/classes/Fortigate-FortiOS-CMDB-RouterPrefixList6Api) | **GET** /router/prefix-list6/{name} | Select a specific entry from a CLI table.  Access Group: netgrp
*RouterPrefixList6Api* | [**routerPrefixList6NamePut**](docs/classes/Fortigate-FortiOS-CMDB-RouterPrefixList6Api) | **PUT** /router/prefix-list6/{name} | Update this specific resource.  Access Group: netgrp
*RouterPrefixList6Api* | [**routerPrefixList6Post**](docs/classes/Fortigate-FortiOS-CMDB-RouterPrefixList6Api) | **POST** /router/prefix-list6 | Create object(s) in this table.  Access Group: netgrp
*RouterRipApi* | [**routerRipGet**](docs/classes/Fortigate-FortiOS-CMDB-RouterRipApi) | **GET** /router/rip | Select all entries in a CLI table.  Access Group: netgrp
*RouterRipApi* | [**routerRipPut**](docs/classes/Fortigate-FortiOS-CMDB-RouterRipApi) | **PUT** /router/rip | Update this specific resource.  Access Group: netgrp
*RouterRipngApi* | [**routerRipngGet**](docs/classes/Fortigate-FortiOS-CMDB-RouterRipngApi) | **GET** /router/ripng | Select all entries in a CLI table.  Access Group: netgrp
*RouterRipngApi* | [**routerRipngPut**](docs/classes/Fortigate-FortiOS-CMDB-RouterRipngApi) | **PUT** /router/ripng | Update this specific resource.  Access Group: netgrp
*RouterRouteMapApi* | [**routerRouteMapGet**](docs/classes/Fortigate-FortiOS-CMDB-RouterRouteMapApi) | **GET** /router/route-map | Select all entries in a CLI table.  Access Group: netgrp
*RouterRouteMapApi* | [**routerRouteMapNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-RouterRouteMapApi) | **DELETE** /router/route-map/{name} | Delete this specific resource.  Access Group: netgrp
*RouterRouteMapApi* | [**routerRouteMapNameGet**](docs/classes/Fortigate-FortiOS-CMDB-RouterRouteMapApi) | **GET** /router/route-map/{name} | Select a specific entry from a CLI table.  Access Group: netgrp
*RouterRouteMapApi* | [**routerRouteMapNamePut**](docs/classes/Fortigate-FortiOS-CMDB-RouterRouteMapApi) | **PUT** /router/route-map/{name} | Update this specific resource.  Access Group: netgrp
*RouterRouteMapApi* | [**routerRouteMapPost**](docs/classes/Fortigate-FortiOS-CMDB-RouterRouteMapApi) | **POST** /router/route-map | Create object(s) in this table.  Access Group: netgrp
*RouterSettingApi* | [**routerSettingGet**](docs/classes/Fortigate-FortiOS-CMDB-RouterSettingApi) | **GET** /router/setting | Select all entries in a CLI table.  Access Group: netgrp
*RouterSettingApi* | [**routerSettingPut**](docs/classes/Fortigate-FortiOS-CMDB-RouterSettingApi) | **PUT** /router/setting | Update this specific resource.  Access Group: netgrp
*RouterStaticApi* | [**routerStaticGet**](docs/classes/Fortigate-FortiOS-CMDB-RouterStaticApi) | **GET** /router/static | Select all entries in a CLI table.  Access Group: netgrp
*RouterStaticApi* | [**routerStaticPost**](docs/classes/Fortigate-FortiOS-CMDB-RouterStaticApi) | **POST** /router/static | Create object(s) in this table.  Access Group: netgrp
*RouterStaticApi* | [**routerStaticSeqNumDelete**](docs/classes/Fortigate-FortiOS-CMDB-RouterStaticApi) | **DELETE** /router/static/{seq-num} | Delete this specific resource.  Access Group: netgrp
*RouterStaticApi* | [**routerStaticSeqNumGet**](docs/classes/Fortigate-FortiOS-CMDB-RouterStaticApi) | **GET** /router/static/{seq-num} | Select a specific entry from a CLI table.  Access Group: netgrp
*RouterStaticApi* | [**routerStaticSeqNumPut**](docs/classes/Fortigate-FortiOS-CMDB-RouterStaticApi) | **PUT** /router/static/{seq-num} | Update this specific resource.  Access Group: netgrp
*RouterStatic6Api* | [**routerStatic6Get**](docs/classes/Fortigate-FortiOS-CMDB-RouterStatic6Api) | **GET** /router/static6 | Select all entries in a CLI table.  Access Group: netgrp
*RouterStatic6Api* | [**routerStatic6Post**](docs/classes/Fortigate-FortiOS-CMDB-RouterStatic6Api) | **POST** /router/static6 | Create object(s) in this table.  Access Group: netgrp
*RouterStatic6Api* | [**routerStatic6SeqNumDelete**](docs/classes/Fortigate-FortiOS-CMDB-RouterStatic6Api) | **DELETE** /router/static6/{seq-num} | Delete this specific resource.  Access Group: netgrp
*RouterStatic6Api* | [**routerStatic6SeqNumGet**](docs/classes/Fortigate-FortiOS-CMDB-RouterStatic6Api) | **GET** /router/static6/{seq-num} | Select a specific entry from a CLI table.  Access Group: netgrp
*RouterStatic6Api* | [**routerStatic6SeqNumPut**](docs/classes/Fortigate-FortiOS-CMDB-RouterStatic6Api) | **PUT** /router/static6/{seq-num} | Update this specific resource.  Access Group: netgrp
*SshFilterProfileApi* | [**sshFilterProfileGet**](docs/classes/Fortigate-FortiOS-CMDB-SshFilterProfileApi) | **GET** /ssh-filter/profile | Select all entries in a CLI table.  Access Group: utmgrp
*SshFilterProfileApi* | [**sshFilterProfileNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SshFilterProfileApi) | **DELETE** /ssh-filter/profile/{name} | Delete this specific resource.  Access Group: utmgrp
*SshFilterProfileApi* | [**sshFilterProfileNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SshFilterProfileApi) | **GET** /ssh-filter/profile/{name} | Select a specific entry from a CLI table.  Access Group: utmgrp
*SshFilterProfileApi* | [**sshFilterProfileNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SshFilterProfileApi) | **PUT** /ssh-filter/profile/{name} | Update this specific resource.  Access Group: utmgrp
*SshFilterProfileApi* | [**sshFilterProfilePost**](docs/classes/Fortigate-FortiOS-CMDB-SshFilterProfileApi) | **POST** /ssh-filter/profile | Create object(s) in this table.  Access Group: utmgrp
*SwitchControllerAutoConfigDefaultApi* | [**switchControllerAutoConfigDefaultGet**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerAutoConfigDefaultApi) | **GET** /switch-controller.auto-config/default | Select all entries in a CLI table.  Access Group: wifi
*SwitchControllerAutoConfigDefaultApi* | [**switchControllerAutoConfigDefaultPut**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerAutoConfigDefaultApi) | **PUT** /switch-controller.auto-config/default | Update this specific resource.  Access Group: wifi
*SwitchControllerGlobalApi* | [**switchControllerGlobalGet**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerGlobalApi) | **GET** /switch-controller/global | Select all entries in a CLI table.  Access Group: wifi
*SwitchControllerGlobalApi* | [**switchControllerGlobalPut**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerGlobalApi) | **PUT** /switch-controller/global | Update this specific resource.  Access Group: wifi
*SwitchControllerInitialConfigTemplateApi* | [**switchControllerInitialConfigTemplateGet**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerInitialConfigTemplateApi) | **GET** /switch-controller.initial-config/template | Select all entries in a CLI table.  Access Group: wifi
*SwitchControllerInitialConfigTemplateApi* | [**switchControllerInitialConfigTemplateNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerInitialConfigTemplateApi) | **DELETE** /switch-controller.initial-config/template/{name} | Delete this specific resource.  Access Group: wifi
*SwitchControllerInitialConfigTemplateApi* | [**switchControllerInitialConfigTemplateNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerInitialConfigTemplateApi) | **GET** /switch-controller.initial-config/template/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*SwitchControllerInitialConfigTemplateApi* | [**switchControllerInitialConfigTemplateNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerInitialConfigTemplateApi) | **PUT** /switch-controller.initial-config/template/{name} | Update this specific resource.  Access Group: wifi
*SwitchControllerInitialConfigTemplateApi* | [**switchControllerInitialConfigTemplatePost**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerInitialConfigTemplateApi) | **POST** /switch-controller.initial-config/template | Create object(s) in this table.  Access Group: wifi
*SwitchControllerInitialConfigVlansApi* | [**switchControllerInitialConfigVlansGet**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerInitialConfigVlansApi) | **GET** /switch-controller.initial-config/vlans | Select all entries in a CLI table.  Access Group: wifi
*SwitchControllerInitialConfigVlansApi* | [**switchControllerInitialConfigVlansPut**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerInitialConfigVlansApi) | **PUT** /switch-controller.initial-config/vlans | Update this specific resource.  Access Group: wifi
*SwitchControllerLldpProfileApi* | [**switchControllerLldpProfileGet**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerLldpProfileApi) | **GET** /switch-controller/lldp-profile | Select all entries in a CLI table.  Access Group: wifi
*SwitchControllerLldpProfileApi* | [**switchControllerLldpProfileNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerLldpProfileApi) | **DELETE** /switch-controller/lldp-profile/{name} | Delete this specific resource.  Access Group: wifi
*SwitchControllerLldpProfileApi* | [**switchControllerLldpProfileNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerLldpProfileApi) | **GET** /switch-controller/lldp-profile/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*SwitchControllerLldpProfileApi* | [**switchControllerLldpProfileNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerLldpProfileApi) | **PUT** /switch-controller/lldp-profile/{name} | Update this specific resource.  Access Group: wifi
*SwitchControllerLldpProfileApi* | [**switchControllerLldpProfilePost**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerLldpProfileApi) | **POST** /switch-controller/lldp-profile | Create object(s) in this table.  Access Group: wifi
*SwitchControllerLldpSettingsApi* | [**switchControllerLldpSettingsGet**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerLldpSettingsApi) | **GET** /switch-controller/lldp-settings | Select all entries in a CLI table.  Access Group: wifi
*SwitchControllerLldpSettingsApi* | [**switchControllerLldpSettingsPut**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerLldpSettingsApi) | **PUT** /switch-controller/lldp-settings | Update this specific resource.  Access Group: wifi
*SwitchControllerLocationApi* | [**switchControllerLocationGet**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerLocationApi) | **GET** /switch-controller/location | Select all entries in a CLI table.  Access Group: wifi
*SwitchControllerLocationApi* | [**switchControllerLocationNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerLocationApi) | **DELETE** /switch-controller/location/{name} | Delete this specific resource.  Access Group: wifi
*SwitchControllerLocationApi* | [**switchControllerLocationNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerLocationApi) | **GET** /switch-controller/location/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*SwitchControllerLocationApi* | [**switchControllerLocationNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerLocationApi) | **PUT** /switch-controller/location/{name} | Update this specific resource.  Access Group: wifi
*SwitchControllerLocationApi* | [**switchControllerLocationPost**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerLocationApi) | **POST** /switch-controller/location | Create object(s) in this table.  Access Group: wifi
*SwitchControllerMacPolicyApi* | [**switchControllerMacPolicyGet**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerMacPolicyApi) | **GET** /switch-controller/mac-policy | Select all entries in a CLI table.  Access Group: wifi
*SwitchControllerMacPolicyApi* | [**switchControllerMacPolicyNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerMacPolicyApi) | **DELETE** /switch-controller/mac-policy/{name} | Delete this specific resource.  Access Group: wifi
*SwitchControllerMacPolicyApi* | [**switchControllerMacPolicyNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerMacPolicyApi) | **GET** /switch-controller/mac-policy/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*SwitchControllerMacPolicyApi* | [**switchControllerMacPolicyNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerMacPolicyApi) | **PUT** /switch-controller/mac-policy/{name} | Update this specific resource.  Access Group: wifi
*SwitchControllerMacPolicyApi* | [**switchControllerMacPolicyPost**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerMacPolicyApi) | **POST** /switch-controller/mac-policy | Create object(s) in this table.  Access Group: wifi
*SwitchControllerManagedSwitchApi* | [**switchControllerManagedSwitchGet**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerManagedSwitchApi) | **GET** /switch-controller/managed-switch | Select all entries in a CLI table.  Access Group: wifi
*SwitchControllerManagedSwitchApi* | [**switchControllerManagedSwitchPost**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerManagedSwitchApi) | **POST** /switch-controller/managed-switch | Create object(s) in this table.  Access Group: wifi
*SwitchControllerManagedSwitchApi* | [**switchControllerManagedSwitchSwitchIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerManagedSwitchApi) | **DELETE** /switch-controller/managed-switch/{switch-id} | Delete this specific resource.  Access Group: wifi
*SwitchControllerManagedSwitchApi* | [**switchControllerManagedSwitchSwitchIdGet**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerManagedSwitchApi) | **GET** /switch-controller/managed-switch/{switch-id} | Select a specific entry from a CLI table.  Access Group: wifi
*SwitchControllerManagedSwitchApi* | [**switchControllerManagedSwitchSwitchIdPut**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerManagedSwitchApi) | **PUT** /switch-controller/managed-switch/{switch-id} | Update this specific resource.  Access Group: wifi
*SwitchControllerNacDeviceApi* | [**switchControllerNacDeviceGet**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerNacDeviceApi) | **GET** /switch-controller/nac-device | Select all entries in a CLI table.  Access Group: wifi
*SwitchControllerNacDeviceApi* | [**switchControllerNacDeviceIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerNacDeviceApi) | **DELETE** /switch-controller/nac-device/{id} | Delete this specific resource.  Access Group: wifi
*SwitchControllerNacDeviceApi* | [**switchControllerNacDeviceIdGet**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerNacDeviceApi) | **GET** /switch-controller/nac-device/{id} | Select a specific entry from a CLI table.  Access Group: wifi
*SwitchControllerNacDeviceApi* | [**switchControllerNacDeviceIdPut**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerNacDeviceApi) | **PUT** /switch-controller/nac-device/{id} | Update this specific resource.  Access Group: wifi
*SwitchControllerNacDeviceApi* | [**switchControllerNacDevicePost**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerNacDeviceApi) | **POST** /switch-controller/nac-device | Create object(s) in this table.  Access Group: wifi
*SwitchControllerNacSettingsApi* | [**switchControllerNacSettingsGet**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerNacSettingsApi) | **GET** /switch-controller/nac-settings | Select all entries in a CLI table.  Access Group: wifi
*SwitchControllerNacSettingsApi* | [**switchControllerNacSettingsNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerNacSettingsApi) | **DELETE** /switch-controller/nac-settings/{name} | Delete this specific resource.  Access Group: wifi
*SwitchControllerNacSettingsApi* | [**switchControllerNacSettingsNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerNacSettingsApi) | **GET** /switch-controller/nac-settings/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*SwitchControllerNacSettingsApi* | [**switchControllerNacSettingsNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerNacSettingsApi) | **PUT** /switch-controller/nac-settings/{name} | Update this specific resource.  Access Group: wifi
*SwitchControllerNacSettingsApi* | [**switchControllerNacSettingsPost**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerNacSettingsApi) | **POST** /switch-controller/nac-settings | Create object(s) in this table.  Access Group: wifi
*SwitchControllerPortPolicyApi* | [**switchControllerPortPolicyGet**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerPortPolicyApi) | **GET** /switch-controller/port-policy | Select all entries in a CLI table.  Access Group: wifi
*SwitchControllerPortPolicyApi* | [**switchControllerPortPolicyNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerPortPolicyApi) | **DELETE** /switch-controller/port-policy/{name} | Delete this specific resource.  Access Group: wifi
*SwitchControllerPortPolicyApi* | [**switchControllerPortPolicyNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerPortPolicyApi) | **GET** /switch-controller/port-policy/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*SwitchControllerPortPolicyApi* | [**switchControllerPortPolicyNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerPortPolicyApi) | **PUT** /switch-controller/port-policy/{name} | Update this specific resource.  Access Group: wifi
*SwitchControllerPortPolicyApi* | [**switchControllerPortPolicyPost**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerPortPolicyApi) | **POST** /switch-controller/port-policy | Create object(s) in this table.  Access Group: wifi
*SwitchControllerSecurityPolicy8021XApi* | [**switchControllerSecurityPolicy8021XGet**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerSecurityPolicy8021XApi) | **GET** /switch-controller.security-policy/802-1X | Select all entries in a CLI table.  Access Group: wifi
*SwitchControllerSecurityPolicy8021XApi* | [**switchControllerSecurityPolicy8021XNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerSecurityPolicy8021XApi) | **DELETE** /switch-controller.security-policy/802-1X/{name} | Delete this specific resource.  Access Group: wifi
*SwitchControllerSecurityPolicy8021XApi* | [**switchControllerSecurityPolicy8021XNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerSecurityPolicy8021XApi) | **GET** /switch-controller.security-policy/802-1X/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*SwitchControllerSecurityPolicy8021XApi* | [**switchControllerSecurityPolicy8021XNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerSecurityPolicy8021XApi) | **PUT** /switch-controller.security-policy/802-1X/{name} | Update this specific resource.  Access Group: wifi
*SwitchControllerSecurityPolicy8021XApi* | [**switchControllerSecurityPolicy8021XPost**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerSecurityPolicy8021XApi) | **POST** /switch-controller.security-policy/802-1X | Create object(s) in this table.  Access Group: wifi
*SwitchControllerSnmpCommunityApi* | [**switchControllerSnmpCommunityGet**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerSnmpCommunityApi) | **GET** /switch-controller/snmp-community | Select all entries in a CLI table.  Access Group: wifi
*SwitchControllerSnmpCommunityApi* | [**switchControllerSnmpCommunityIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerSnmpCommunityApi) | **DELETE** /switch-controller/snmp-community/{id} | Delete this specific resource.  Access Group: wifi
*SwitchControllerSnmpCommunityApi* | [**switchControllerSnmpCommunityIdGet**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerSnmpCommunityApi) | **GET** /switch-controller/snmp-community/{id} | Select a specific entry from a CLI table.  Access Group: wifi
*SwitchControllerSnmpCommunityApi* | [**switchControllerSnmpCommunityIdPut**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerSnmpCommunityApi) | **PUT** /switch-controller/snmp-community/{id} | Update this specific resource.  Access Group: wifi
*SwitchControllerSnmpCommunityApi* | [**switchControllerSnmpCommunityPost**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerSnmpCommunityApi) | **POST** /switch-controller/snmp-community | Create object(s) in this table.  Access Group: wifi
*SwitchControllerStpInstanceApi* | [**switchControllerStpInstanceGet**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerStpInstanceApi) | **GET** /switch-controller/stp-instance | Select all entries in a CLI table.  Access Group: wifi
*SwitchControllerStpInstanceApi* | [**switchControllerStpInstanceIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerStpInstanceApi) | **DELETE** /switch-controller/stp-instance/{id} | Delete this specific resource.  Access Group: wifi
*SwitchControllerStpInstanceApi* | [**switchControllerStpInstanceIdGet**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerStpInstanceApi) | **GET** /switch-controller/stp-instance/{id} | Select a specific entry from a CLI table.  Access Group: wifi
*SwitchControllerStpInstanceApi* | [**switchControllerStpInstanceIdPut**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerStpInstanceApi) | **PUT** /switch-controller/stp-instance/{id} | Update this specific resource.  Access Group: wifi
*SwitchControllerStpInstanceApi* | [**switchControllerStpInstancePost**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerStpInstanceApi) | **POST** /switch-controller/stp-instance | Create object(s) in this table.  Access Group: wifi
*SwitchControllerStpSettingsApi* | [**switchControllerStpSettingsGet**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerStpSettingsApi) | **GET** /switch-controller/stp-settings | Select all entries in a CLI table.  Access Group: wifi
*SwitchControllerStpSettingsApi* | [**switchControllerStpSettingsPut**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerStpSettingsApi) | **PUT** /switch-controller/stp-settings | Update this specific resource.  Access Group: wifi
*SwitchControllerSwitchGroupApi* | [**switchControllerSwitchGroupGet**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerSwitchGroupApi) | **GET** /switch-controller/switch-group | Select all entries in a CLI table.  Access Group: wifi
*SwitchControllerSwitchGroupApi* | [**switchControllerSwitchGroupNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerSwitchGroupApi) | **DELETE** /switch-controller/switch-group/{name} | Delete this specific resource.  Access Group: wifi
*SwitchControllerSwitchGroupApi* | [**switchControllerSwitchGroupNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerSwitchGroupApi) | **GET** /switch-controller/switch-group/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*SwitchControllerSwitchGroupApi* | [**switchControllerSwitchGroupNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerSwitchGroupApi) | **PUT** /switch-controller/switch-group/{name} | Update this specific resource.  Access Group: wifi
*SwitchControllerSwitchGroupApi* | [**switchControllerSwitchGroupPost**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerSwitchGroupApi) | **POST** /switch-controller/switch-group | Create object(s) in this table.  Access Group: wifi
*SwitchControllerSystemApi* | [**switchControllerSystemGet**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerSystemApi) | **GET** /switch-controller/system | Select all entries in a CLI table.  Access Group: wifi
*SwitchControllerSystemApi* | [**switchControllerSystemPut**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerSystemApi) | **PUT** /switch-controller/system | Update this specific resource.  Access Group: wifi
*SwitchControllerVlanPolicyApi* | [**switchControllerVlanPolicyGet**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerVlanPolicyApi) | **GET** /switch-controller/vlan-policy | Select all entries in a CLI table.  Access Group: wifi
*SwitchControllerVlanPolicyApi* | [**switchControllerVlanPolicyNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerVlanPolicyApi) | **DELETE** /switch-controller/vlan-policy/{name} | Delete this specific resource.  Access Group: wifi
*SwitchControllerVlanPolicyApi* | [**switchControllerVlanPolicyNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerVlanPolicyApi) | **GET** /switch-controller/vlan-policy/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*SwitchControllerVlanPolicyApi* | [**switchControllerVlanPolicyNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerVlanPolicyApi) | **PUT** /switch-controller/vlan-policy/{name} | Update this specific resource.  Access Group: wifi
*SwitchControllerVlanPolicyApi* | [**switchControllerVlanPolicyPost**](docs/classes/Fortigate-FortiOS-CMDB-SwitchControllerVlanPolicyApi) | **POST** /switch-controller/vlan-policy | Create object(s) in this table.  Access Group: wifi
*System3gModemCustomApi* | [**system3gModemCustomGet**](docs/classes/Fortigate-FortiOS-CMDB-System3gModemCustomApi) | **GET** /system.3g-modem/custom | Select all entries in a CLI table.  Access Group: sysgrp
*System3gModemCustomApi* | [**system3gModemCustomIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-System3gModemCustomApi) | **DELETE** /system.3g-modem/custom/{id} | Delete this specific resource.  Access Group: sysgrp
*System3gModemCustomApi* | [**system3gModemCustomIdGet**](docs/classes/Fortigate-FortiOS-CMDB-System3gModemCustomApi) | **GET** /system.3g-modem/custom/{id} | Select a specific entry from a CLI table.  Access Group: sysgrp
*System3gModemCustomApi* | [**system3gModemCustomIdPut**](docs/classes/Fortigate-FortiOS-CMDB-System3gModemCustomApi) | **PUT** /system.3g-modem/custom/{id} | Update this specific resource.  Access Group: sysgrp
*System3gModemCustomApi* | [**system3gModemCustomPost**](docs/classes/Fortigate-FortiOS-CMDB-System3gModemCustomApi) | **POST** /system.3g-modem/custom | Create object(s) in this table.  Access Group: sysgrp
*SystemAccprofileApi* | [**systemAccprofileGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemAccprofileApi) | **GET** /system/accprofile | Select all entries in a CLI table.  Access Group: sysgrp
*SystemAccprofileApi* | [**systemAccprofileNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemAccprofileApi) | **DELETE** /system/accprofile/{name} | Delete this specific resource.  Access Group: sysgrp
*SystemAccprofileApi* | [**systemAccprofileNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemAccprofileApi) | **GET** /system/accprofile/{name} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemAccprofileApi* | [**systemAccprofileNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemAccprofileApi) | **PUT** /system/accprofile/{name} | Update this specific resource.  Access Group: sysgrp
*SystemAccprofileApi* | [**systemAccprofilePost**](docs/classes/Fortigate-FortiOS-CMDB-SystemAccprofileApi) | **POST** /system/accprofile | Create object(s) in this table.  Access Group: sysgrp
*SystemAdminApi* | [**systemAdminGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemAdminApi) | **GET** /system/admin | Select all entries in a CLI table.  Access Group: sysgrp
*SystemAdminApi* | [**systemAdminNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemAdminApi) | **DELETE** /system/admin/{name} | Delete this specific resource.  Access Group: sysgrp
*SystemAdminApi* | [**systemAdminNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemAdminApi) | **GET** /system/admin/{name} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemAdminApi* | [**systemAdminNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemAdminApi) | **PUT** /system/admin/{name} | Update this specific resource.  Access Group: sysgrp
*SystemAdminApi* | [**systemAdminPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemAdminApi) | **POST** /system/admin | Create object(s) in this table.  Access Group: sysgrp
*SystemAlarmApi* | [**systemAlarmGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemAlarmApi) | **GET** /system/alarm | Select all entries in a CLI table.  Access Group: sysgrp
*SystemAlarmApi* | [**systemAlarmPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemAlarmApi) | **PUT** /system/alarm | Update this specific resource.  Access Group: sysgrp
*SystemApiUserApi* | [**systemApiUserGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemApiUserApi) | **GET** /system/api-user | Select all entries in a CLI table.  Access Group: sysgrp
*SystemApiUserApi* | [**systemApiUserNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemApiUserApi) | **DELETE** /system/api-user/{name} | Delete this specific resource.  Access Group: sysgrp
*SystemApiUserApi* | [**systemApiUserNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemApiUserApi) | **GET** /system/api-user/{name} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemApiUserApi* | [**systemApiUserNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemApiUserApi) | **PUT** /system/api-user/{name} | Update this specific resource.  Access Group: sysgrp
*SystemApiUserApi* | [**systemApiUserPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemApiUserApi) | **POST** /system/api-user | Create object(s) in this table.  Access Group: sysgrp
*SystemArpTableApi* | [**systemArpTableGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemArpTableApi) | **GET** /system/arp-table | Select all entries in a CLI table.  Access Group: netgrp
*SystemArpTableApi* | [**systemArpTableIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemArpTableApi) | **DELETE** /system/arp-table/{id} | Delete this specific resource.  Access Group: netgrp
*SystemArpTableApi* | [**systemArpTableIdGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemArpTableApi) | **GET** /system/arp-table/{id} | Select a specific entry from a CLI table.  Access Group: netgrp
*SystemArpTableApi* | [**systemArpTableIdPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemArpTableApi) | **PUT** /system/arp-table/{id} | Update this specific resource.  Access Group: netgrp
*SystemArpTableApi* | [**systemArpTablePost**](docs/classes/Fortigate-FortiOS-CMDB-SystemArpTableApi) | **POST** /system/arp-table | Create object(s) in this table.  Access Group: netgrp
*SystemAutoInstallApi* | [**systemAutoInstallGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemAutoInstallApi) | **GET** /system/auto-install | Select all entries in a CLI table.  Access Group: sysgrp
*SystemAutoInstallApi* | [**systemAutoInstallPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemAutoInstallApi) | **PUT** /system/auto-install | Update this specific resource.  Access Group: sysgrp
*SystemAutoScriptApi* | [**systemAutoScriptGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemAutoScriptApi) | **GET** /system/auto-script | Select all entries in a CLI table.  Access Group: sysgrp
*SystemAutoScriptApi* | [**systemAutoScriptNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemAutoScriptApi) | **DELETE** /system/auto-script/{name} | Delete this specific resource.  Access Group: sysgrp
*SystemAutoScriptApi* | [**systemAutoScriptNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemAutoScriptApi) | **GET** /system/auto-script/{name} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemAutoScriptApi* | [**systemAutoScriptNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemAutoScriptApi) | **PUT** /system/auto-script/{name} | Update this specific resource.  Access Group: sysgrp
*SystemAutoScriptApi* | [**systemAutoScriptPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemAutoScriptApi) | **POST** /system/auto-script | Create object(s) in this table.  Access Group: sysgrp
*SystemAutomationActionApi* | [**systemAutomationActionGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemAutomationActionApi) | **GET** /system/automation-action | Select all entries in a CLI table.  Access Group: sysgrp
*SystemAutomationActionApi* | [**systemAutomationActionNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemAutomationActionApi) | **DELETE** /system/automation-action/{name} | Delete this specific resource.  Access Group: sysgrp
*SystemAutomationActionApi* | [**systemAutomationActionNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemAutomationActionApi) | **GET** /system/automation-action/{name} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemAutomationActionApi* | [**systemAutomationActionNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemAutomationActionApi) | **PUT** /system/automation-action/{name} | Update this specific resource.  Access Group: sysgrp
*SystemAutomationActionApi* | [**systemAutomationActionPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemAutomationActionApi) | **POST** /system/automation-action | Create object(s) in this table.  Access Group: sysgrp
*SystemAutomationDestinationApi* | [**systemAutomationDestinationGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemAutomationDestinationApi) | **GET** /system/automation-destination | Select all entries in a CLI table.  Access Group: sysgrp
*SystemAutomationDestinationApi* | [**systemAutomationDestinationNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemAutomationDestinationApi) | **DELETE** /system/automation-destination/{name} | Delete this specific resource.  Access Group: sysgrp
*SystemAutomationDestinationApi* | [**systemAutomationDestinationNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemAutomationDestinationApi) | **GET** /system/automation-destination/{name} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemAutomationDestinationApi* | [**systemAutomationDestinationNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemAutomationDestinationApi) | **PUT** /system/automation-destination/{name} | Update this specific resource.  Access Group: sysgrp
*SystemAutomationDestinationApi* | [**systemAutomationDestinationPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemAutomationDestinationApi) | **POST** /system/automation-destination | Create object(s) in this table.  Access Group: sysgrp
*SystemAutomationStitchApi* | [**systemAutomationStitchGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemAutomationStitchApi) | **GET** /system/automation-stitch | Select all entries in a CLI table.  Access Group: sysgrp
*SystemAutomationStitchApi* | [**systemAutomationStitchNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemAutomationStitchApi) | **DELETE** /system/automation-stitch/{name} | Delete this specific resource.  Access Group: sysgrp
*SystemAutomationStitchApi* | [**systemAutomationStitchNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemAutomationStitchApi) | **GET** /system/automation-stitch/{name} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemAutomationStitchApi* | [**systemAutomationStitchNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemAutomationStitchApi) | **PUT** /system/automation-stitch/{name} | Update this specific resource.  Access Group: sysgrp
*SystemAutomationStitchApi* | [**systemAutomationStitchPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemAutomationStitchApi) | **POST** /system/automation-stitch | Create object(s) in this table.  Access Group: sysgrp
*SystemAutomationTriggerApi* | [**systemAutomationTriggerGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemAutomationTriggerApi) | **GET** /system/automation-trigger | Select all entries in a CLI table.  Access Group: sysgrp
*SystemAutomationTriggerApi* | [**systemAutomationTriggerNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemAutomationTriggerApi) | **DELETE** /system/automation-trigger/{name} | Delete this specific resource.  Access Group: sysgrp
*SystemAutomationTriggerApi* | [**systemAutomationTriggerNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemAutomationTriggerApi) | **GET** /system/automation-trigger/{name} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemAutomationTriggerApi* | [**systemAutomationTriggerNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemAutomationTriggerApi) | **PUT** /system/automation-trigger/{name} | Update this specific resource.  Access Group: sysgrp
*SystemAutomationTriggerApi* | [**systemAutomationTriggerPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemAutomationTriggerApi) | **POST** /system/automation-trigger | Create object(s) in this table.  Access Group: sysgrp
*SystemAutoupdatePushUpdateApi* | [**systemAutoupdatePushUpdateGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemAutoupdatePushUpdateApi) | **GET** /system.autoupdate/push-update | Select all entries in a CLI table.  Access Group: sysgrp
*SystemAutoupdatePushUpdateApi* | [**systemAutoupdatePushUpdatePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemAutoupdatePushUpdateApi) | **PUT** /system.autoupdate/push-update | Update this specific resource.  Access Group: sysgrp
*SystemAutoupdateScheduleApi* | [**systemAutoupdateScheduleGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemAutoupdateScheduleApi) | **GET** /system.autoupdate/schedule | Select all entries in a CLI table.  Access Group: sysgrp
*SystemAutoupdateScheduleApi* | [**systemAutoupdateSchedulePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemAutoupdateScheduleApi) | **PUT** /system.autoupdate/schedule | Update this specific resource.  Access Group: sysgrp
*SystemAutoupdateTunnelingApi* | [**systemAutoupdateTunnelingGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemAutoupdateTunnelingApi) | **GET** /system.autoupdate/tunneling | Select all entries in a CLI table.  Access Group: sysgrp
*SystemAutoupdateTunnelingApi* | [**systemAutoupdateTunnelingPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemAutoupdateTunnelingApi) | **PUT** /system.autoupdate/tunneling | Update this specific resource.  Access Group: sysgrp
*SystemCentralManagementApi* | [**systemCentralManagementGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemCentralManagementApi) | **GET** /system/central-management | Select all entries in a CLI table.  Access Group: sysgrp
*SystemCentralManagementApi* | [**systemCentralManagementPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemCentralManagementApi) | **PUT** /system/central-management | Update this specific resource.  Access Group: sysgrp
*SystemClusterSyncApi* | [**systemClusterSyncGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemClusterSyncApi) | **GET** /system/cluster-sync | Select all entries in a CLI table.  Access Group: sysgrp
*SystemClusterSyncApi* | [**systemClusterSyncPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemClusterSyncApi) | **POST** /system/cluster-sync | Create object(s) in this table.  Access Group: sysgrp
*SystemClusterSyncApi* | [**systemClusterSyncSyncIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemClusterSyncApi) | **DELETE** /system/cluster-sync/{sync-id} | Delete this specific resource.  Access Group: sysgrp
*SystemClusterSyncApi* | [**systemClusterSyncSyncIdGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemClusterSyncApi) | **GET** /system/cluster-sync/{sync-id} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemClusterSyncApi* | [**systemClusterSyncSyncIdPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemClusterSyncApi) | **PUT** /system/cluster-sync/{sync-id} | Update this specific resource.  Access Group: sysgrp
*SystemConsoleApi* | [**systemConsoleGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemConsoleApi) | **GET** /system/console | Select all entries in a CLI table.  Access Group: sysgrp
*SystemConsoleApi* | [**systemConsolePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemConsoleApi) | **PUT** /system/console | Update this specific resource.  Access Group: sysgrp
*SystemCsfApi* | [**systemCsfGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemCsfApi) | **GET** /system/csf | Select all entries in a CLI table.  Access Group: secfabgrp
*SystemCsfApi* | [**systemCsfPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemCsfApi) | **PUT** /system/csf | Update this specific resource.  Access Group: secfabgrp
*SystemCustomLanguageApi* | [**systemCustomLanguageGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemCustomLanguageApi) | **GET** /system/custom-language | Select all entries in a CLI table.  Access Group: sysgrp
*SystemCustomLanguageApi* | [**systemCustomLanguageNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemCustomLanguageApi) | **DELETE** /system/custom-language/{name} | Delete this specific resource.  Access Group: sysgrp
*SystemCustomLanguageApi* | [**systemCustomLanguageNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemCustomLanguageApi) | **GET** /system/custom-language/{name} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemCustomLanguageApi* | [**systemCustomLanguageNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemCustomLanguageApi) | **PUT** /system/custom-language/{name} | Update this specific resource.  Access Group: sysgrp
*SystemCustomLanguageApi* | [**systemCustomLanguagePost**](docs/classes/Fortigate-FortiOS-CMDB-SystemCustomLanguageApi) | **POST** /system/custom-language | Create object(s) in this table.  Access Group: sysgrp
*SystemDdnsApi* | [**systemDdnsDdnsidDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemDdnsApi) | **DELETE** /system/ddns/{ddnsid} | Delete this specific resource.  Access Group: sysgrp
*SystemDdnsApi* | [**systemDdnsDdnsidGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemDdnsApi) | **GET** /system/ddns/{ddnsid} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemDdnsApi* | [**systemDdnsDdnsidPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemDdnsApi) | **PUT** /system/ddns/{ddnsid} | Update this specific resource.  Access Group: sysgrp
*SystemDdnsApi* | [**systemDdnsGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemDdnsApi) | **GET** /system/ddns | Select all entries in a CLI table.  Access Group: sysgrp
*SystemDdnsApi* | [**systemDdnsPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemDdnsApi) | **POST** /system/ddns | Create object(s) in this table.  Access Group: sysgrp
*SystemDedicatedMgmtApi* | [**systemDedicatedMgmtGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemDedicatedMgmtApi) | **GET** /system/dedicated-mgmt | Select all entries in a CLI table.  Access Group: sysgrp
*SystemDedicatedMgmtApi* | [**systemDedicatedMgmtPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemDedicatedMgmtApi) | **PUT** /system/dedicated-mgmt | Update this specific resource.  Access Group: sysgrp
*SystemDhcp6ServerApi* | [**systemDhcp6ServerGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemDhcp6ServerApi) | **GET** /system.dhcp6/server | Select all entries in a CLI table.  Access Group: netgrp
*SystemDhcp6ServerApi* | [**systemDhcp6ServerIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemDhcp6ServerApi) | **DELETE** /system.dhcp6/server/{id} | Delete this specific resource.  Access Group: netgrp
*SystemDhcp6ServerApi* | [**systemDhcp6ServerIdGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemDhcp6ServerApi) | **GET** /system.dhcp6/server/{id} | Select a specific entry from a CLI table.  Access Group: netgrp
*SystemDhcp6ServerApi* | [**systemDhcp6ServerIdPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemDhcp6ServerApi) | **PUT** /system.dhcp6/server/{id} | Update this specific resource.  Access Group: netgrp
*SystemDhcp6ServerApi* | [**systemDhcp6ServerPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemDhcp6ServerApi) | **POST** /system.dhcp6/server | Create object(s) in this table.  Access Group: netgrp
*SystemDhcpServerApi* | [**systemDhcpServerGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemDhcpServerApi) | **GET** /system.dhcp/server | Select all entries in a CLI table.  Access Group: netgrp
*SystemDhcpServerApi* | [**systemDhcpServerIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemDhcpServerApi) | **DELETE** /system.dhcp/server/{id} | Delete this specific resource.  Access Group: netgrp
*SystemDhcpServerApi* | [**systemDhcpServerIdGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemDhcpServerApi) | **GET** /system.dhcp/server/{id} | Select a specific entry from a CLI table.  Access Group: netgrp
*SystemDhcpServerApi* | [**systemDhcpServerIdPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemDhcpServerApi) | **PUT** /system.dhcp/server/{id} | Update this specific resource.  Access Group: netgrp
*SystemDhcpServerApi* | [**systemDhcpServerPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemDhcpServerApi) | **POST** /system.dhcp/server | Create object(s) in this table.  Access Group: netgrp
*SystemDnsApi* | [**systemDnsGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemDnsApi) | **GET** /system/dns | Select all entries in a CLI table.  Access Group: sysgrp
*SystemDnsApi* | [**systemDnsPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemDnsApi) | **PUT** /system/dns | Update this specific resource.  Access Group: sysgrp
*SystemDnsDatabaseApi* | [**systemDnsDatabaseGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemDnsDatabaseApi) | **GET** /system/dns-database | Select all entries in a CLI table.  Access Group: sysgrp
*SystemDnsDatabaseApi* | [**systemDnsDatabaseNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemDnsDatabaseApi) | **DELETE** /system/dns-database/{name} | Delete this specific resource.  Access Group: sysgrp
*SystemDnsDatabaseApi* | [**systemDnsDatabaseNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemDnsDatabaseApi) | **GET** /system/dns-database/{name} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemDnsDatabaseApi* | [**systemDnsDatabaseNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemDnsDatabaseApi) | **PUT** /system/dns-database/{name} | Update this specific resource.  Access Group: sysgrp
*SystemDnsDatabaseApi* | [**systemDnsDatabasePost**](docs/classes/Fortigate-FortiOS-CMDB-SystemDnsDatabaseApi) | **POST** /system/dns-database | Create object(s) in this table.  Access Group: sysgrp
*SystemDnsServerApi* | [**systemDnsServerGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemDnsServerApi) | **GET** /system/dns-server | Select all entries in a CLI table.  Access Group: sysgrp
*SystemDnsServerApi* | [**systemDnsServerNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemDnsServerApi) | **DELETE** /system/dns-server/{name} | Delete this specific resource.  Access Group: sysgrp
*SystemDnsServerApi* | [**systemDnsServerNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemDnsServerApi) | **GET** /system/dns-server/{name} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemDnsServerApi* | [**systemDnsServerNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemDnsServerApi) | **PUT** /system/dns-server/{name} | Update this specific resource.  Access Group: sysgrp
*SystemDnsServerApi* | [**systemDnsServerPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemDnsServerApi) | **POST** /system/dns-server | Create object(s) in this table.  Access Group: sysgrp
*SystemDscpBasedPriorityApi* | [**systemDscpBasedPriorityGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemDscpBasedPriorityApi) | **GET** /system/dscp-based-priority | Select all entries in a CLI table.  Access Group: sysgrp
*SystemDscpBasedPriorityApi* | [**systemDscpBasedPriorityIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemDscpBasedPriorityApi) | **DELETE** /system/dscp-based-priority/{id} | Delete this specific resource.  Access Group: sysgrp
*SystemDscpBasedPriorityApi* | [**systemDscpBasedPriorityIdGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemDscpBasedPriorityApi) | **GET** /system/dscp-based-priority/{id} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemDscpBasedPriorityApi* | [**systemDscpBasedPriorityIdPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemDscpBasedPriorityApi) | **PUT** /system/dscp-based-priority/{id} | Update this specific resource.  Access Group: sysgrp
*SystemDscpBasedPriorityApi* | [**systemDscpBasedPriorityPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemDscpBasedPriorityApi) | **POST** /system/dscp-based-priority | Create object(s) in this table.  Access Group: sysgrp
*SystemEmailServerApi* | [**systemEmailServerGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemEmailServerApi) | **GET** /system/email-server | Select all entries in a CLI table.  Access Group: loggrp
*SystemEmailServerApi* | [**systemEmailServerPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemEmailServerApi) | **PUT** /system/email-server | Update this specific resource.  Access Group: loggrp
*SystemExternalResourceApi* | [**systemExternalResourceGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemExternalResourceApi) | **GET** /system/external-resource | Select all entries in a CLI table.  Access Group: sysgrp
*SystemExternalResourceApi* | [**systemExternalResourceNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemExternalResourceApi) | **DELETE** /system/external-resource/{name} | Delete this specific resource.  Access Group: sysgrp
*SystemExternalResourceApi* | [**systemExternalResourceNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemExternalResourceApi) | **GET** /system/external-resource/{name} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemExternalResourceApi* | [**systemExternalResourceNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemExternalResourceApi) | **PUT** /system/external-resource/{name} | Update this specific resource.  Access Group: sysgrp
*SystemExternalResourceApi* | [**systemExternalResourcePost**](docs/classes/Fortigate-FortiOS-CMDB-SystemExternalResourceApi) | **POST** /system/external-resource | Create object(s) in this table.  Access Group: sysgrp
*SystemFipsCcApi* | [**systemFipsCcGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemFipsCcApi) | **GET** /system/fips-cc | Select all entries in a CLI table.  Access Group: sysgrp
*SystemFipsCcApi* | [**systemFipsCcPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemFipsCcApi) | **PUT** /system/fips-cc | Update this specific resource.  Access Group: sysgrp
*SystemFortiguardApi* | [**systemFortiguardGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemFortiguardApi) | **GET** /system/fortiguard | Select all entries in a CLI table.  Access Group: sysgrp
*SystemFortiguardApi* | [**systemFortiguardPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemFortiguardApi) | **PUT** /system/fortiguard | Update this specific resource.  Access Group: sysgrp
*SystemFortimanagerApi* | [**systemFortimanagerGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemFortimanagerApi) | **GET** /system/fortimanager | Select all entries in a CLI table.  Access Group: sysgrp
*SystemFortimanagerApi* | [**systemFortimanagerPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemFortimanagerApi) | **PUT** /system/fortimanager | Update this specific resource.  Access Group: sysgrp
*SystemFortisandboxApi* | [**systemFortisandboxGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemFortisandboxApi) | **GET** /system/fortisandbox | Select all entries in a CLI table.  Access Group: secfabgrp
*SystemFortisandboxApi* | [**systemFortisandboxPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemFortisandboxApi) | **PUT** /system/fortisandbox | Update this specific resource.  Access Group: secfabgrp
*SystemFssoPollingApi* | [**systemFssoPollingGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemFssoPollingApi) | **GET** /system/fsso-polling | Select all entries in a CLI table.  Access Group: sysgrp
*SystemFssoPollingApi* | [**systemFssoPollingPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemFssoPollingApi) | **PUT** /system/fsso-polling | Update this specific resource.  Access Group: sysgrp
*SystemFtmPushApi* | [**systemFtmPushGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemFtmPushApi) | **GET** /system/ftm-push | Select all entries in a CLI table.  Access Group: sysgrp
*SystemFtmPushApi* | [**systemFtmPushPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemFtmPushApi) | **PUT** /system/ftm-push | Update this specific resource.  Access Group: sysgrp
*SystemGeneveApi* | [**systemGeneveGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemGeneveApi) | **GET** /system/geneve | Select all entries in a CLI table.  Access Group: netgrp
*SystemGeneveApi* | [**systemGeneveNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemGeneveApi) | **DELETE** /system/geneve/{name} | Delete this specific resource.  Access Group: netgrp
*SystemGeneveApi* | [**systemGeneveNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemGeneveApi) | **GET** /system/geneve/{name} | Select a specific entry from a CLI table.  Access Group: netgrp
*SystemGeneveApi* | [**systemGeneveNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemGeneveApi) | **PUT** /system/geneve/{name} | Update this specific resource.  Access Group: netgrp
*SystemGeneveApi* | [**systemGenevePost**](docs/classes/Fortigate-FortiOS-CMDB-SystemGeneveApi) | **POST** /system/geneve | Create object(s) in this table.  Access Group: netgrp
*SystemGeoipCountryApi* | [**systemGeoipCountryGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemGeoipCountryApi) | **GET** /system/geoip-country | Select all entries in a CLI table.  Access Group: sysgrp
*SystemGeoipCountryApi* | [**systemGeoipCountryIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemGeoipCountryApi) | **DELETE** /system/geoip-country/{id} | Delete this specific resource.  Access Group: sysgrp
*SystemGeoipCountryApi* | [**systemGeoipCountryIdGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemGeoipCountryApi) | **GET** /system/geoip-country/{id} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemGeoipCountryApi* | [**systemGeoipCountryIdPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemGeoipCountryApi) | **PUT** /system/geoip-country/{id} | Update this specific resource.  Access Group: sysgrp
*SystemGeoipCountryApi* | [**systemGeoipCountryPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemGeoipCountryApi) | **POST** /system/geoip-country | Create object(s) in this table.  Access Group: sysgrp
*SystemGeoipOverrideApi* | [**systemGeoipOverrideGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemGeoipOverrideApi) | **GET** /system/geoip-override | Select all entries in a CLI table.  Access Group: sysgrp
*SystemGeoipOverrideApi* | [**systemGeoipOverrideNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemGeoipOverrideApi) | **DELETE** /system/geoip-override/{name} | Delete this specific resource.  Access Group: sysgrp
*SystemGeoipOverrideApi* | [**systemGeoipOverrideNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemGeoipOverrideApi) | **GET** /system/geoip-override/{name} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemGeoipOverrideApi* | [**systemGeoipOverrideNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemGeoipOverrideApi) | **PUT** /system/geoip-override/{name} | Update this specific resource.  Access Group: sysgrp
*SystemGeoipOverrideApi* | [**systemGeoipOverridePost**](docs/classes/Fortigate-FortiOS-CMDB-SystemGeoipOverrideApi) | **POST** /system/geoip-override | Create object(s) in this table.  Access Group: sysgrp
*SystemGlobalApi* | [**systemGlobalGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemGlobalApi) | **GET** /system/global | Select all entries in a CLI table.  Access Group: sysgrp
*SystemGlobalApi* | [**systemGlobalPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemGlobalApi) | **PUT** /system/global | Update this specific resource.  Access Group: sysgrp
*SystemGreTunnelApi* | [**systemGreTunnelGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemGreTunnelApi) | **GET** /system/gre-tunnel | Select all entries in a CLI table.  Access Group: netgrp
*SystemGreTunnelApi* | [**systemGreTunnelNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemGreTunnelApi) | **DELETE** /system/gre-tunnel/{name} | Delete this specific resource.  Access Group: netgrp
*SystemGreTunnelApi* | [**systemGreTunnelNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemGreTunnelApi) | **GET** /system/gre-tunnel/{name} | Select a specific entry from a CLI table.  Access Group: netgrp
*SystemGreTunnelApi* | [**systemGreTunnelNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemGreTunnelApi) | **PUT** /system/gre-tunnel/{name} | Update this specific resource.  Access Group: netgrp
*SystemGreTunnelApi* | [**systemGreTunnelPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemGreTunnelApi) | **POST** /system/gre-tunnel | Create object(s) in this table.  Access Group: netgrp
*SystemHaApi* | [**systemHaGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemHaApi) | **GET** /system/ha | Select all entries in a CLI table.  Access Group: sysgrp
*SystemHaApi* | [**systemHaPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemHaApi) | **PUT** /system/ha | Update this specific resource.  Access Group: sysgrp
*SystemHaMonitorApi* | [**systemHaMonitorGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemHaMonitorApi) | **GET** /system/ha-monitor | Select all entries in a CLI table.  Access Group: sysgrp
*SystemHaMonitorApi* | [**systemHaMonitorPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemHaMonitorApi) | **PUT** /system/ha-monitor | Update this specific resource.  Access Group: sysgrp
*SystemInterfaceApi* | [**systemInterfaceGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemInterfaceApi) | **GET** /system/interface | Select all entries in a CLI table.  Access Group: netgrp
*SystemInterfaceApi* | [**systemInterfaceNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemInterfaceApi) | **DELETE** /system/interface/{name} | Delete this specific resource.  Access Group: netgrp
*SystemInterfaceApi* | [**systemInterfaceNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemInterfaceApi) | **GET** /system/interface/{name} | Select a specific entry from a CLI table.  Access Group: netgrp
*SystemInterfaceApi* | [**systemInterfaceNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemInterfaceApi) | **PUT** /system/interface/{name} | Update this specific resource.  Access Group: netgrp
*SystemInterfaceApi* | [**systemInterfacePost**](docs/classes/Fortigate-FortiOS-CMDB-SystemInterfaceApi) | **POST** /system/interface | Create object(s) in this table.  Access Group: netgrp
*SystemIpipTunnelApi* | [**systemIpipTunnelGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemIpipTunnelApi) | **GET** /system/ipip-tunnel | Select all entries in a CLI table.  Access Group: netgrp
*SystemIpipTunnelApi* | [**systemIpipTunnelNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemIpipTunnelApi) | **DELETE** /system/ipip-tunnel/{name} | Delete this specific resource.  Access Group: netgrp
*SystemIpipTunnelApi* | [**systemIpipTunnelNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemIpipTunnelApi) | **GET** /system/ipip-tunnel/{name} | Select a specific entry from a CLI table.  Access Group: netgrp
*SystemIpipTunnelApi* | [**systemIpipTunnelNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemIpipTunnelApi) | **PUT** /system/ipip-tunnel/{name} | Update this specific resource.  Access Group: netgrp
*SystemIpipTunnelApi* | [**systemIpipTunnelPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemIpipTunnelApi) | **POST** /system/ipip-tunnel | Create object(s) in this table.  Access Group: netgrp
*SystemIpsApi* | [**systemIpsGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemIpsApi) | **GET** /system/ips | Select all entries in a CLI table.  Access Group: sysgrp
*SystemIpsApi* | [**systemIpsPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemIpsApi) | **PUT** /system/ips | Update this specific resource.  Access Group: sysgrp
*SystemIpsUrlfilterDnsApi* | [**systemIpsUrlfilterDnsAddressDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemIpsUrlfilterDnsApi) | **DELETE** /system/ips-urlfilter-dns/{address} | Delete this specific resource.  Access Group: sysgrp
*SystemIpsUrlfilterDnsApi* | [**systemIpsUrlfilterDnsAddressGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemIpsUrlfilterDnsApi) | **GET** /system/ips-urlfilter-dns/{address} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemIpsUrlfilterDnsApi* | [**systemIpsUrlfilterDnsAddressPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemIpsUrlfilterDnsApi) | **PUT** /system/ips-urlfilter-dns/{address} | Update this specific resource.  Access Group: sysgrp
*SystemIpsUrlfilterDnsApi* | [**systemIpsUrlfilterDnsGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemIpsUrlfilterDnsApi) | **GET** /system/ips-urlfilter-dns | Select all entries in a CLI table.  Access Group: sysgrp
*SystemIpsUrlfilterDnsApi* | [**systemIpsUrlfilterDnsPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemIpsUrlfilterDnsApi) | **POST** /system/ips-urlfilter-dns | Create object(s) in this table.  Access Group: sysgrp
*SystemIpsUrlfilterDns6Api* | [**systemIpsUrlfilterDns6Address6Delete**](docs/classes/Fortigate-FortiOS-CMDB-SystemIpsUrlfilterDns6Api) | **DELETE** /system/ips-urlfilter-dns6/{address6} | Delete this specific resource.  Access Group: sysgrp
*SystemIpsUrlfilterDns6Api* | [**systemIpsUrlfilterDns6Address6Get**](docs/classes/Fortigate-FortiOS-CMDB-SystemIpsUrlfilterDns6Api) | **GET** /system/ips-urlfilter-dns6/{address6} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemIpsUrlfilterDns6Api* | [**systemIpsUrlfilterDns6Address6Put**](docs/classes/Fortigate-FortiOS-CMDB-SystemIpsUrlfilterDns6Api) | **PUT** /system/ips-urlfilter-dns6/{address6} | Update this specific resource.  Access Group: sysgrp
*SystemIpsUrlfilterDns6Api* | [**systemIpsUrlfilterDns6Get**](docs/classes/Fortigate-FortiOS-CMDB-SystemIpsUrlfilterDns6Api) | **GET** /system/ips-urlfilter-dns6 | Select all entries in a CLI table.  Access Group: sysgrp
*SystemIpsUrlfilterDns6Api* | [**systemIpsUrlfilterDns6Post**](docs/classes/Fortigate-FortiOS-CMDB-SystemIpsUrlfilterDns6Api) | **POST** /system/ips-urlfilter-dns6 | Create object(s) in this table.  Access Group: sysgrp
*SystemIpsecAggregateApi* | [**systemIpsecAggregateGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemIpsecAggregateApi) | **GET** /system/ipsec-aggregate | Select all entries in a CLI table.  Access Group: netgrp
*SystemIpsecAggregateApi* | [**systemIpsecAggregateNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemIpsecAggregateApi) | **DELETE** /system/ipsec-aggregate/{name} | Delete this specific resource.  Access Group: netgrp
*SystemIpsecAggregateApi* | [**systemIpsecAggregateNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemIpsecAggregateApi) | **GET** /system/ipsec-aggregate/{name} | Select a specific entry from a CLI table.  Access Group: netgrp
*SystemIpsecAggregateApi* | [**systemIpsecAggregateNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemIpsecAggregateApi) | **PUT** /system/ipsec-aggregate/{name} | Update this specific resource.  Access Group: netgrp
*SystemIpsecAggregateApi* | [**systemIpsecAggregatePost**](docs/classes/Fortigate-FortiOS-CMDB-SystemIpsecAggregateApi) | **POST** /system/ipsec-aggregate | Create object(s) in this table.  Access Group: netgrp
*SystemIpv6NeighborCacheApi* | [**systemIpv6NeighborCacheGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemIpv6NeighborCacheApi) | **GET** /system/ipv6-neighbor-cache | Select all entries in a CLI table.  Access Group: netgrp
*SystemIpv6NeighborCacheApi* | [**systemIpv6NeighborCacheIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemIpv6NeighborCacheApi) | **DELETE** /system/ipv6-neighbor-cache/{id} | Delete this specific resource.  Access Group: netgrp
*SystemIpv6NeighborCacheApi* | [**systemIpv6NeighborCacheIdGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemIpv6NeighborCacheApi) | **GET** /system/ipv6-neighbor-cache/{id} | Select a specific entry from a CLI table.  Access Group: netgrp
*SystemIpv6NeighborCacheApi* | [**systemIpv6NeighborCacheIdPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemIpv6NeighborCacheApi) | **PUT** /system/ipv6-neighbor-cache/{id} | Update this specific resource.  Access Group: netgrp
*SystemIpv6NeighborCacheApi* | [**systemIpv6NeighborCachePost**](docs/classes/Fortigate-FortiOS-CMDB-SystemIpv6NeighborCacheApi) | **POST** /system/ipv6-neighbor-cache | Create object(s) in this table.  Access Group: netgrp
*SystemIpv6TunnelApi* | [**systemIpv6TunnelGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemIpv6TunnelApi) | **GET** /system/ipv6-tunnel | Select all entries in a CLI table.  Access Group: sysgrp
*SystemIpv6TunnelApi* | [**systemIpv6TunnelNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemIpv6TunnelApi) | **DELETE** /system/ipv6-tunnel/{name} | Delete this specific resource.  Access Group: sysgrp
*SystemIpv6TunnelApi* | [**systemIpv6TunnelNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemIpv6TunnelApi) | **GET** /system/ipv6-tunnel/{name} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemIpv6TunnelApi* | [**systemIpv6TunnelNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemIpv6TunnelApi) | **PUT** /system/ipv6-tunnel/{name} | Update this specific resource.  Access Group: sysgrp
*SystemIpv6TunnelApi* | [**systemIpv6TunnelPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemIpv6TunnelApi) | **POST** /system/ipv6-tunnel | Create object(s) in this table.  Access Group: sysgrp
*SystemLinkMonitorApi* | [**systemLinkMonitorGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemLinkMonitorApi) | **GET** /system/link-monitor | Select all entries in a CLI table.  Access Group: netgrp
*SystemLinkMonitorApi* | [**systemLinkMonitorNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemLinkMonitorApi) | **DELETE** /system/link-monitor/{name} | Delete this specific resource.  Access Group: netgrp
*SystemLinkMonitorApi* | [**systemLinkMonitorNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemLinkMonitorApi) | **GET** /system/link-monitor/{name} | Select a specific entry from a CLI table.  Access Group: netgrp
*SystemLinkMonitorApi* | [**systemLinkMonitorNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemLinkMonitorApi) | **PUT** /system/link-monitor/{name} | Update this specific resource.  Access Group: netgrp
*SystemLinkMonitorApi* | [**systemLinkMonitorPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemLinkMonitorApi) | **POST** /system/link-monitor | Create object(s) in this table.  Access Group: netgrp
*SystemLldpNetworkPolicyApi* | [**systemLldpNetworkPolicyGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemLldpNetworkPolicyApi) | **GET** /system.lldp/network-policy | Select all entries in a CLI table.  Access Group: sysgrp
*SystemLldpNetworkPolicyApi* | [**systemLldpNetworkPolicyNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemLldpNetworkPolicyApi) | **DELETE** /system.lldp/network-policy/{name} | Delete this specific resource.  Access Group: sysgrp
*SystemLldpNetworkPolicyApi* | [**systemLldpNetworkPolicyNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemLldpNetworkPolicyApi) | **GET** /system.lldp/network-policy/{name} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemLldpNetworkPolicyApi* | [**systemLldpNetworkPolicyNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemLldpNetworkPolicyApi) | **PUT** /system.lldp/network-policy/{name} | Update this specific resource.  Access Group: sysgrp
*SystemLldpNetworkPolicyApi* | [**systemLldpNetworkPolicyPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemLldpNetworkPolicyApi) | **POST** /system.lldp/network-policy | Create object(s) in this table.  Access Group: sysgrp
*SystemLteModemApi* | [**systemLteModemGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemLteModemApi) | **GET** /system/lte-modem | Select all entries in a CLI table.  Access Group: sysgrp
*SystemLteModemApi* | [**systemLteModemPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemLteModemApi) | **PUT** /system/lte-modem | Update this specific resource.  Access Group: sysgrp
*SystemMacAddressTableApi* | [**systemMacAddressTableGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemMacAddressTableApi) | **GET** /system/mac-address-table | Select all entries in a CLI table.  Access Group: sysgrp
*SystemMacAddressTableApi* | [**systemMacAddressTableMacDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemMacAddressTableApi) | **DELETE** /system/mac-address-table/{mac} | Delete this specific resource.  Access Group: sysgrp
*SystemMacAddressTableApi* | [**systemMacAddressTableMacGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemMacAddressTableApi) | **GET** /system/mac-address-table/{mac} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemMacAddressTableApi* | [**systemMacAddressTableMacPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemMacAddressTableApi) | **PUT** /system/mac-address-table/{mac} | Update this specific resource.  Access Group: sysgrp
*SystemMacAddressTableApi* | [**systemMacAddressTablePost**](docs/classes/Fortigate-FortiOS-CMDB-SystemMacAddressTableApi) | **POST** /system/mac-address-table | Create object(s) in this table.  Access Group: sysgrp
*SystemMobileTunnelApi* | [**systemMobileTunnelGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemMobileTunnelApi) | **GET** /system/mobile-tunnel | Select all entries in a CLI table.  Access Group: netgrp
*SystemMobileTunnelApi* | [**systemMobileTunnelNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemMobileTunnelApi) | **DELETE** /system/mobile-tunnel/{name} | Delete this specific resource.  Access Group: netgrp
*SystemMobileTunnelApi* | [**systemMobileTunnelNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemMobileTunnelApi) | **GET** /system/mobile-tunnel/{name} | Select a specific entry from a CLI table.  Access Group: netgrp
*SystemMobileTunnelApi* | [**systemMobileTunnelNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemMobileTunnelApi) | **PUT** /system/mobile-tunnel/{name} | Update this specific resource.  Access Group: netgrp
*SystemMobileTunnelApi* | [**systemMobileTunnelPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemMobileTunnelApi) | **POST** /system/mobile-tunnel | Create object(s) in this table.  Access Group: netgrp
*SystemModemApi* | [**systemModemGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemModemApi) | **GET** /system/modem | Select all entries in a CLI table.  Access Group: sysgrp
*SystemModemApi* | [**systemModemPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemModemApi) | **PUT** /system/modem | Update this specific resource.  Access Group: sysgrp
*SystemNat64Api* | [**systemNat64Get**](docs/classes/Fortigate-FortiOS-CMDB-SystemNat64Api) | **GET** /system/nat64 | Select all entries in a CLI table.  Access Group: sysgrp
*SystemNat64Api* | [**systemNat64Put**](docs/classes/Fortigate-FortiOS-CMDB-SystemNat64Api) | **PUT** /system/nat64 | Update this specific resource.  Access Group: sysgrp
*SystemNdProxyApi* | [**systemNdProxyGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemNdProxyApi) | **GET** /system/nd-proxy | Select all entries in a CLI table.  Access Group: netgrp
*SystemNdProxyApi* | [**systemNdProxyPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemNdProxyApi) | **PUT** /system/nd-proxy | Update this specific resource.  Access Group: netgrp
*SystemNetflowApi* | [**systemNetflowGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemNetflowApi) | **GET** /system/netflow | Select all entries in a CLI table.  Access Group: sysgrp
*SystemNetflowApi* | [**systemNetflowPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemNetflowApi) | **PUT** /system/netflow | Update this specific resource.  Access Group: sysgrp
*SystemNetworkVisibilityApi* | [**systemNetworkVisibilityGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemNetworkVisibilityApi) | **GET** /system/network-visibility | Select all entries in a CLI table.  Access Group: loggrp
*SystemNetworkVisibilityApi* | [**systemNetworkVisibilityPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemNetworkVisibilityApi) | **PUT** /system/network-visibility | Update this specific resource.  Access Group: loggrp
*SystemNpuApi* | [**systemNpuGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemNpuApi) | **GET** /system/npu | Select all entries in a CLI table.  Access Group: sysgrp
*SystemNpuApi* | [**systemNpuPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemNpuApi) | **PUT** /system/npu | Update this specific resource.  Access Group: sysgrp
*SystemNtpApi* | [**systemNtpGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemNtpApi) | **GET** /system/ntp | Select all entries in a CLI table.  Access Group: sysgrp
*SystemNtpApi* | [**systemNtpPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemNtpApi) | **PUT** /system/ntp | Update this specific resource.  Access Group: sysgrp
*SystemObjectTaggingApi* | [**systemObjectTaggingCategoryDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemObjectTaggingApi) | **DELETE** /system/object-tagging/{category} | Delete this specific resource.  Access Group: sysgrp
*SystemObjectTaggingApi* | [**systemObjectTaggingCategoryGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemObjectTaggingApi) | **GET** /system/object-tagging/{category} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemObjectTaggingApi* | [**systemObjectTaggingCategoryPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemObjectTaggingApi) | **PUT** /system/object-tagging/{category} | Update this specific resource.  Access Group: sysgrp
*SystemObjectTaggingApi* | [**systemObjectTaggingGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemObjectTaggingApi) | **GET** /system/object-tagging | Select all entries in a CLI table.  Access Group: sysgrp
*SystemObjectTaggingApi* | [**systemObjectTaggingPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemObjectTaggingApi) | **POST** /system/object-tagging | Create object(s) in this table.  Access Group: sysgrp
*SystemPasswordPolicyApi* | [**systemPasswordPolicyGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemPasswordPolicyApi) | **GET** /system/password-policy | Select all entries in a CLI table.  Access Group: sysgrp
*SystemPasswordPolicyApi* | [**systemPasswordPolicyPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemPasswordPolicyApi) | **PUT** /system/password-policy | Update this specific resource.  Access Group: sysgrp
*SystemPasswordPolicyGuestAdminApi* | [**systemPasswordPolicyGuestAdminGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemPasswordPolicyGuestAdminApi) | **GET** /system/password-policy-guest-admin | Select all entries in a CLI table.  Access Group: sysgrp
*SystemPasswordPolicyGuestAdminApi* | [**systemPasswordPolicyGuestAdminPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemPasswordPolicyGuestAdminApi) | **PUT** /system/password-policy-guest-admin | Update this specific resource.  Access Group: sysgrp
*SystemPhysicalSwitchApi* | [**systemPhysicalSwitchGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemPhysicalSwitchApi) | **GET** /system/physical-switch | Select all entries in a CLI table.  Access Group: sysgrp
*SystemPhysicalSwitchApi* | [**systemPhysicalSwitchNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemPhysicalSwitchApi) | **DELETE** /system/physical-switch/{name} | Delete this specific resource.  Access Group: sysgrp
*SystemPhysicalSwitchApi* | [**systemPhysicalSwitchNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemPhysicalSwitchApi) | **GET** /system/physical-switch/{name} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemPhysicalSwitchApi* | [**systemPhysicalSwitchNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemPhysicalSwitchApi) | **PUT** /system/physical-switch/{name} | Update this specific resource.  Access Group: sysgrp
*SystemPhysicalSwitchApi* | [**systemPhysicalSwitchPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemPhysicalSwitchApi) | **POST** /system/physical-switch | Create object(s) in this table.  Access Group: sysgrp
*SystemPppoeInterfaceApi* | [**systemPppoeInterfaceGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemPppoeInterfaceApi) | **GET** /system/pppoe-interface | Select all entries in a CLI table.  Access Group: netgrp
*SystemPppoeInterfaceApi* | [**systemPppoeInterfaceNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemPppoeInterfaceApi) | **DELETE** /system/pppoe-interface/{name} | Delete this specific resource.  Access Group: netgrp
*SystemPppoeInterfaceApi* | [**systemPppoeInterfaceNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemPppoeInterfaceApi) | **GET** /system/pppoe-interface/{name} | Select a specific entry from a CLI table.  Access Group: netgrp
*SystemPppoeInterfaceApi* | [**systemPppoeInterfaceNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemPppoeInterfaceApi) | **PUT** /system/pppoe-interface/{name} | Update this specific resource.  Access Group: netgrp
*SystemPppoeInterfaceApi* | [**systemPppoeInterfacePost**](docs/classes/Fortigate-FortiOS-CMDB-SystemPppoeInterfaceApi) | **POST** /system/pppoe-interface | Create object(s) in this table.  Access Group: netgrp
*SystemProbeResponseApi* | [**systemProbeResponseGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemProbeResponseApi) | **GET** /system/probe-response | Select all entries in a CLI table.  Access Group: sysgrp
*SystemProbeResponseApi* | [**systemProbeResponsePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemProbeResponseApi) | **PUT** /system/probe-response | Update this specific resource.  Access Group: sysgrp
*SystemProxyArpApi* | [**systemProxyArpGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemProxyArpApi) | **GET** /system/proxy-arp | Select all entries in a CLI table.  Access Group: netgrp
*SystemProxyArpApi* | [**systemProxyArpIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemProxyArpApi) | **DELETE** /system/proxy-arp/{id} | Delete this specific resource.  Access Group: netgrp
*SystemProxyArpApi* | [**systemProxyArpIdGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemProxyArpApi) | **GET** /system/proxy-arp/{id} | Select a specific entry from a CLI table.  Access Group: netgrp
*SystemProxyArpApi* | [**systemProxyArpIdPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemProxyArpApi) | **PUT** /system/proxy-arp/{id} | Update this specific resource.  Access Group: netgrp
*SystemProxyArpApi* | [**systemProxyArpPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemProxyArpApi) | **POST** /system/proxy-arp | Create object(s) in this table.  Access Group: netgrp
*SystemPtpApi* | [**systemPtpGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemPtpApi) | **GET** /system/ptp | Select all entries in a CLI table.  Access Group: sysgrp
*SystemPtpApi* | [**systemPtpPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemPtpApi) | **PUT** /system/ptp | Update this specific resource.  Access Group: sysgrp
*SystemReplacemsgAdminApi* | [**systemReplacemsgAdminGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgAdminApi) | **GET** /system.replacemsg/admin | Select all entries in a CLI table.  Access Group: sysgrp
*SystemReplacemsgAdminApi* | [**systemReplacemsgAdminMsgTypeDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgAdminApi) | **DELETE** /system.replacemsg/admin/{msg-type} | Delete this specific resource.  Access Group: sysgrp
*SystemReplacemsgAdminApi* | [**systemReplacemsgAdminMsgTypeGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgAdminApi) | **GET** /system.replacemsg/admin/{msg-type} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemReplacemsgAdminApi* | [**systemReplacemsgAdminMsgTypePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgAdminApi) | **PUT** /system.replacemsg/admin/{msg-type} | Update this specific resource.  Access Group: sysgrp
*SystemReplacemsgAdminApi* | [**systemReplacemsgAdminPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgAdminApi) | **POST** /system.replacemsg/admin | Create object(s) in this table.  Access Group: sysgrp
*SystemReplacemsgAlertmailApi* | [**systemReplacemsgAlertmailGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgAlertmailApi) | **GET** /system.replacemsg/alertmail | Select all entries in a CLI table.  Access Group: sysgrp
*SystemReplacemsgAlertmailApi* | [**systemReplacemsgAlertmailMsgTypeDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgAlertmailApi) | **DELETE** /system.replacemsg/alertmail/{msg-type} | Delete this specific resource.  Access Group: sysgrp
*SystemReplacemsgAlertmailApi* | [**systemReplacemsgAlertmailMsgTypeGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgAlertmailApi) | **GET** /system.replacemsg/alertmail/{msg-type} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemReplacemsgAlertmailApi* | [**systemReplacemsgAlertmailMsgTypePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgAlertmailApi) | **PUT** /system.replacemsg/alertmail/{msg-type} | Update this specific resource.  Access Group: sysgrp
*SystemReplacemsgAlertmailApi* | [**systemReplacemsgAlertmailPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgAlertmailApi) | **POST** /system.replacemsg/alertmail | Create object(s) in this table.  Access Group: sysgrp
*SystemReplacemsgAuthApi* | [**systemReplacemsgAuthGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgAuthApi) | **GET** /system.replacemsg/auth | Select all entries in a CLI table.  Access Group: sysgrp
*SystemReplacemsgAuthApi* | [**systemReplacemsgAuthMsgTypeDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgAuthApi) | **DELETE** /system.replacemsg/auth/{msg-type} | Delete this specific resource.  Access Group: sysgrp
*SystemReplacemsgAuthApi* | [**systemReplacemsgAuthMsgTypeGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgAuthApi) | **GET** /system.replacemsg/auth/{msg-type} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemReplacemsgAuthApi* | [**systemReplacemsgAuthMsgTypePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgAuthApi) | **PUT** /system.replacemsg/auth/{msg-type} | Update this specific resource.  Access Group: sysgrp
*SystemReplacemsgAuthApi* | [**systemReplacemsgAuthPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgAuthApi) | **POST** /system.replacemsg/auth | Create object(s) in this table.  Access Group: sysgrp
*SystemReplacemsgFortiguardWfApi* | [**systemReplacemsgFortiguardWfGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgFortiguardWfApi) | **GET** /system.replacemsg/fortiguard-wf | Select all entries in a CLI table.  Access Group: sysgrp
*SystemReplacemsgFortiguardWfApi* | [**systemReplacemsgFortiguardWfMsgTypeDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgFortiguardWfApi) | **DELETE** /system.replacemsg/fortiguard-wf/{msg-type} | Delete this specific resource.  Access Group: sysgrp
*SystemReplacemsgFortiguardWfApi* | [**systemReplacemsgFortiguardWfMsgTypeGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgFortiguardWfApi) | **GET** /system.replacemsg/fortiguard-wf/{msg-type} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemReplacemsgFortiguardWfApi* | [**systemReplacemsgFortiguardWfMsgTypePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgFortiguardWfApi) | **PUT** /system.replacemsg/fortiguard-wf/{msg-type} | Update this specific resource.  Access Group: sysgrp
*SystemReplacemsgFortiguardWfApi* | [**systemReplacemsgFortiguardWfPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgFortiguardWfApi) | **POST** /system.replacemsg/fortiguard-wf | Create object(s) in this table.  Access Group: sysgrp
*SystemReplacemsgFtpApi* | [**systemReplacemsgFtpGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgFtpApi) | **GET** /system.replacemsg/ftp | Select all entries in a CLI table.  Access Group: sysgrp
*SystemReplacemsgFtpApi* | [**systemReplacemsgFtpMsgTypeDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgFtpApi) | **DELETE** /system.replacemsg/ftp/{msg-type} | Delete this specific resource.  Access Group: sysgrp
*SystemReplacemsgFtpApi* | [**systemReplacemsgFtpMsgTypeGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgFtpApi) | **GET** /system.replacemsg/ftp/{msg-type} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemReplacemsgFtpApi* | [**systemReplacemsgFtpMsgTypePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgFtpApi) | **PUT** /system.replacemsg/ftp/{msg-type} | Update this specific resource.  Access Group: sysgrp
*SystemReplacemsgFtpApi* | [**systemReplacemsgFtpPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgFtpApi) | **POST** /system.replacemsg/ftp | Create object(s) in this table.  Access Group: sysgrp
*SystemReplacemsgGroupApi* | [**systemReplacemsgGroupGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgGroupApi) | **GET** /system/replacemsg-group | Select all entries in a CLI table.  Access Group: sysgrp
*SystemReplacemsgGroupApi* | [**systemReplacemsgGroupNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgGroupApi) | **DELETE** /system/replacemsg-group/{name} | Delete this specific resource.  Access Group: sysgrp
*SystemReplacemsgGroupApi* | [**systemReplacemsgGroupNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgGroupApi) | **GET** /system/replacemsg-group/{name} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemReplacemsgGroupApi* | [**systemReplacemsgGroupNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgGroupApi) | **PUT** /system/replacemsg-group/{name} | Update this specific resource.  Access Group: sysgrp
*SystemReplacemsgGroupApi* | [**systemReplacemsgGroupPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgGroupApi) | **POST** /system/replacemsg-group | Create object(s) in this table.  Access Group: sysgrp
*SystemReplacemsgHttpApi* | [**systemReplacemsgHttpGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgHttpApi) | **GET** /system.replacemsg/http | Select all entries in a CLI table.  Access Group: sysgrp
*SystemReplacemsgHttpApi* | [**systemReplacemsgHttpMsgTypeDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgHttpApi) | **DELETE** /system.replacemsg/http/{msg-type} | Delete this specific resource.  Access Group: sysgrp
*SystemReplacemsgHttpApi* | [**systemReplacemsgHttpMsgTypeGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgHttpApi) | **GET** /system.replacemsg/http/{msg-type} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemReplacemsgHttpApi* | [**systemReplacemsgHttpMsgTypePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgHttpApi) | **PUT** /system.replacemsg/http/{msg-type} | Update this specific resource.  Access Group: sysgrp
*SystemReplacemsgHttpApi* | [**systemReplacemsgHttpPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgHttpApi) | **POST** /system.replacemsg/http | Create object(s) in this table.  Access Group: sysgrp
*SystemReplacemsgIcapApi* | [**systemReplacemsgIcapGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgIcapApi) | **GET** /system.replacemsg/icap | Select all entries in a CLI table.  Access Group: sysgrp
*SystemReplacemsgIcapApi* | [**systemReplacemsgIcapMsgTypeDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgIcapApi) | **DELETE** /system.replacemsg/icap/{msg-type} | Delete this specific resource.  Access Group: sysgrp
*SystemReplacemsgIcapApi* | [**systemReplacemsgIcapMsgTypeGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgIcapApi) | **GET** /system.replacemsg/icap/{msg-type} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemReplacemsgIcapApi* | [**systemReplacemsgIcapMsgTypePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgIcapApi) | **PUT** /system.replacemsg/icap/{msg-type} | Update this specific resource.  Access Group: sysgrp
*SystemReplacemsgIcapApi* | [**systemReplacemsgIcapPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgIcapApi) | **POST** /system.replacemsg/icap | Create object(s) in this table.  Access Group: sysgrp
*SystemReplacemsgImageApi* | [**systemReplacemsgImageGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgImageApi) | **GET** /system/replacemsg-image | Select all entries in a CLI table.  Access Group: sysgrp
*SystemReplacemsgImageApi* | [**systemReplacemsgImageNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgImageApi) | **DELETE** /system/replacemsg-image/{name} | Delete this specific resource.  Access Group: sysgrp
*SystemReplacemsgImageApi* | [**systemReplacemsgImageNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgImageApi) | **GET** /system/replacemsg-image/{name} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemReplacemsgImageApi* | [**systemReplacemsgImageNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgImageApi) | **PUT** /system/replacemsg-image/{name} | Update this specific resource.  Access Group: sysgrp
*SystemReplacemsgImageApi* | [**systemReplacemsgImagePost**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgImageApi) | **POST** /system/replacemsg-image | Create object(s) in this table.  Access Group: sysgrp
*SystemReplacemsgMailApi* | [**systemReplacemsgMailGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgMailApi) | **GET** /system.replacemsg/mail | Select all entries in a CLI table.  Access Group: sysgrp
*SystemReplacemsgMailApi* | [**systemReplacemsgMailMsgTypeDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgMailApi) | **DELETE** /system.replacemsg/mail/{msg-type} | Delete this specific resource.  Access Group: sysgrp
*SystemReplacemsgMailApi* | [**systemReplacemsgMailMsgTypeGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgMailApi) | **GET** /system.replacemsg/mail/{msg-type} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemReplacemsgMailApi* | [**systemReplacemsgMailMsgTypePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgMailApi) | **PUT** /system.replacemsg/mail/{msg-type} | Update this specific resource.  Access Group: sysgrp
*SystemReplacemsgMailApi* | [**systemReplacemsgMailPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgMailApi) | **POST** /system.replacemsg/mail | Create object(s) in this table.  Access Group: sysgrp
*SystemReplacemsgNacQuarApi* | [**systemReplacemsgNacQuarGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgNacQuarApi) | **GET** /system.replacemsg/nac-quar | Select all entries in a CLI table.  Access Group: sysgrp
*SystemReplacemsgNacQuarApi* | [**systemReplacemsgNacQuarMsgTypeDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgNacQuarApi) | **DELETE** /system.replacemsg/nac-quar/{msg-type} | Delete this specific resource.  Access Group: sysgrp
*SystemReplacemsgNacQuarApi* | [**systemReplacemsgNacQuarMsgTypeGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgNacQuarApi) | **GET** /system.replacemsg/nac-quar/{msg-type} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemReplacemsgNacQuarApi* | [**systemReplacemsgNacQuarMsgTypePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgNacQuarApi) | **PUT** /system.replacemsg/nac-quar/{msg-type} | Update this specific resource.  Access Group: sysgrp
*SystemReplacemsgNacQuarApi* | [**systemReplacemsgNacQuarPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgNacQuarApi) | **POST** /system.replacemsg/nac-quar | Create object(s) in this table.  Access Group: sysgrp
*SystemReplacemsgSpamApi* | [**systemReplacemsgSpamGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgSpamApi) | **GET** /system.replacemsg/spam | Select all entries in a CLI table.  Access Group: sysgrp
*SystemReplacemsgSpamApi* | [**systemReplacemsgSpamMsgTypeDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgSpamApi) | **DELETE** /system.replacemsg/spam/{msg-type} | Delete this specific resource.  Access Group: sysgrp
*SystemReplacemsgSpamApi* | [**systemReplacemsgSpamMsgTypeGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgSpamApi) | **GET** /system.replacemsg/spam/{msg-type} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemReplacemsgSpamApi* | [**systemReplacemsgSpamMsgTypePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgSpamApi) | **PUT** /system.replacemsg/spam/{msg-type} | Update this specific resource.  Access Group: sysgrp
*SystemReplacemsgSpamApi* | [**systemReplacemsgSpamPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgSpamApi) | **POST** /system.replacemsg/spam | Create object(s) in this table.  Access Group: sysgrp
*SystemReplacemsgSslvpnApi* | [**systemReplacemsgSslvpnGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgSslvpnApi) | **GET** /system.replacemsg/sslvpn | Select all entries in a CLI table.  Access Group: sysgrp
*SystemReplacemsgSslvpnApi* | [**systemReplacemsgSslvpnMsgTypeDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgSslvpnApi) | **DELETE** /system.replacemsg/sslvpn/{msg-type} | Delete this specific resource.  Access Group: sysgrp
*SystemReplacemsgSslvpnApi* | [**systemReplacemsgSslvpnMsgTypeGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgSslvpnApi) | **GET** /system.replacemsg/sslvpn/{msg-type} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemReplacemsgSslvpnApi* | [**systemReplacemsgSslvpnMsgTypePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgSslvpnApi) | **PUT** /system.replacemsg/sslvpn/{msg-type} | Update this specific resource.  Access Group: sysgrp
*SystemReplacemsgSslvpnApi* | [**systemReplacemsgSslvpnPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgSslvpnApi) | **POST** /system.replacemsg/sslvpn | Create object(s) in this table.  Access Group: sysgrp
*SystemReplacemsgTrafficQuotaApi* | [**systemReplacemsgTrafficQuotaGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgTrafficQuotaApi) | **GET** /system.replacemsg/traffic-quota | Select all entries in a CLI table.  Access Group: sysgrp
*SystemReplacemsgTrafficQuotaApi* | [**systemReplacemsgTrafficQuotaMsgTypeDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgTrafficQuotaApi) | **DELETE** /system.replacemsg/traffic-quota/{msg-type} | Delete this specific resource.  Access Group: sysgrp
*SystemReplacemsgTrafficQuotaApi* | [**systemReplacemsgTrafficQuotaMsgTypeGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgTrafficQuotaApi) | **GET** /system.replacemsg/traffic-quota/{msg-type} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemReplacemsgTrafficQuotaApi* | [**systemReplacemsgTrafficQuotaMsgTypePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgTrafficQuotaApi) | **PUT** /system.replacemsg/traffic-quota/{msg-type} | Update this specific resource.  Access Group: sysgrp
*SystemReplacemsgTrafficQuotaApi* | [**systemReplacemsgTrafficQuotaPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgTrafficQuotaApi) | **POST** /system.replacemsg/traffic-quota | Create object(s) in this table.  Access Group: sysgrp
*SystemReplacemsgUtmApi* | [**systemReplacemsgUtmGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgUtmApi) | **GET** /system.replacemsg/utm | Select all entries in a CLI table.  Access Group: sysgrp
*SystemReplacemsgUtmApi* | [**systemReplacemsgUtmMsgTypeDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgUtmApi) | **DELETE** /system.replacemsg/utm/{msg-type} | Delete this specific resource.  Access Group: sysgrp
*SystemReplacemsgUtmApi* | [**systemReplacemsgUtmMsgTypeGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgUtmApi) | **GET** /system.replacemsg/utm/{msg-type} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemReplacemsgUtmApi* | [**systemReplacemsgUtmMsgTypePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgUtmApi) | **PUT** /system.replacemsg/utm/{msg-type} | Update this specific resource.  Access Group: sysgrp
*SystemReplacemsgUtmApi* | [**systemReplacemsgUtmPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgUtmApi) | **POST** /system.replacemsg/utm | Create object(s) in this table.  Access Group: sysgrp
*SystemReplacemsgWebproxyApi* | [**systemReplacemsgWebproxyGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgWebproxyApi) | **GET** /system.replacemsg/webproxy | Select all entries in a CLI table.  Access Group: sysgrp
*SystemReplacemsgWebproxyApi* | [**systemReplacemsgWebproxyMsgTypeDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgWebproxyApi) | **DELETE** /system.replacemsg/webproxy/{msg-type} | Delete this specific resource.  Access Group: sysgrp
*SystemReplacemsgWebproxyApi* | [**systemReplacemsgWebproxyMsgTypeGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgWebproxyApi) | **GET** /system.replacemsg/webproxy/{msg-type} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemReplacemsgWebproxyApi* | [**systemReplacemsgWebproxyMsgTypePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgWebproxyApi) | **PUT** /system.replacemsg/webproxy/{msg-type} | Update this specific resource.  Access Group: sysgrp
*SystemReplacemsgWebproxyApi* | [**systemReplacemsgWebproxyPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemReplacemsgWebproxyApi) | **POST** /system.replacemsg/webproxy | Create object(s) in this table.  Access Group: sysgrp
*SystemResourceLimitsApi* | [**systemResourceLimitsGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemResourceLimitsApi) | **GET** /system/resource-limits | Select all entries in a CLI table.  Access Group: sysgrp
*SystemResourceLimitsApi* | [**systemResourceLimitsPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemResourceLimitsApi) | **PUT** /system/resource-limits | Update this specific resource.  Access Group: sysgrp
*SystemSamlApi* | [**systemSamlGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemSamlApi) | **GET** /system/saml | Select all entries in a CLI table.  Access Group: sysgrp
*SystemSamlApi* | [**systemSamlPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemSamlApi) | **PUT** /system/saml | Update this specific resource.  Access Group: sysgrp
*SystemSdnConnectorApi* | [**systemSdnConnectorGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemSdnConnectorApi) | **GET** /system/sdn-connector | Select all entries in a CLI table.  Access Group: sysgrp
*SystemSdnConnectorApi* | [**systemSdnConnectorNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemSdnConnectorApi) | **DELETE** /system/sdn-connector/{name} | Delete this specific resource.  Access Group: sysgrp
*SystemSdnConnectorApi* | [**systemSdnConnectorNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemSdnConnectorApi) | **GET** /system/sdn-connector/{name} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemSdnConnectorApi* | [**systemSdnConnectorNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemSdnConnectorApi) | **PUT** /system/sdn-connector/{name} | Update this specific resource.  Access Group: sysgrp
*SystemSdnConnectorApi* | [**systemSdnConnectorPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemSdnConnectorApi) | **POST** /system/sdn-connector | Create object(s) in this table.  Access Group: sysgrp
*SystemSdwanApi* | [**systemSdwanGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemSdwanApi) | **GET** /system/sdwan | Select all entries in a CLI table.  Access Group: netgrp
*SystemSdwanApi* | [**systemSdwanPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemSdwanApi) | **PUT** /system/sdwan | Update this specific resource.  Access Group: netgrp
*SystemSessionHelperApi* | [**systemSessionHelperGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemSessionHelperApi) | **GET** /system/session-helper | Select all entries in a CLI table.  Access Group: sysgrp
*SystemSessionHelperApi* | [**systemSessionHelperIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemSessionHelperApi) | **DELETE** /system/session-helper/{id} | Delete this specific resource.  Access Group: sysgrp
*SystemSessionHelperApi* | [**systemSessionHelperIdGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemSessionHelperApi) | **GET** /system/session-helper/{id} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemSessionHelperApi* | [**systemSessionHelperIdPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemSessionHelperApi) | **PUT** /system/session-helper/{id} | Update this specific resource.  Access Group: sysgrp
*SystemSessionHelperApi* | [**systemSessionHelperPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemSessionHelperApi) | **POST** /system/session-helper | Create object(s) in this table.  Access Group: sysgrp
*SystemSessionTtlApi* | [**systemSessionTtlGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemSessionTtlApi) | **GET** /system/session-ttl | Select all entries in a CLI table.  Access Group: sysgrp
*SystemSessionTtlApi* | [**systemSessionTtlPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemSessionTtlApi) | **PUT** /system/session-ttl | Update this specific resource.  Access Group: sysgrp
*SystemSettingsApi* | [**systemSettingsGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemSettingsApi) | **GET** /system/settings | Select all entries in a CLI table.  Access Group: sysgrp
*SystemSettingsApi* | [**systemSettingsPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemSettingsApi) | **PUT** /system/settings | Update this specific resource.  Access Group: sysgrp
*SystemSflowApi* | [**systemSflowGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemSflowApi) | **GET** /system/sflow | Select all entries in a CLI table.  Access Group: sysgrp
*SystemSflowApi* | [**systemSflowPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemSflowApi) | **PUT** /system/sflow | Update this specific resource.  Access Group: sysgrp
*SystemSitTunnelApi* | [**systemSitTunnelGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemSitTunnelApi) | **GET** /system/sit-tunnel | Select all entries in a CLI table.  Access Group: sysgrp
*SystemSitTunnelApi* | [**systemSitTunnelNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemSitTunnelApi) | **DELETE** /system/sit-tunnel/{name} | Delete this specific resource.  Access Group: sysgrp
*SystemSitTunnelApi* | [**systemSitTunnelNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemSitTunnelApi) | **GET** /system/sit-tunnel/{name} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemSitTunnelApi* | [**systemSitTunnelNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemSitTunnelApi) | **PUT** /system/sit-tunnel/{name} | Update this specific resource.  Access Group: sysgrp
*SystemSitTunnelApi* | [**systemSitTunnelPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemSitTunnelApi) | **POST** /system/sit-tunnel | Create object(s) in this table.  Access Group: sysgrp
*SystemSmsServerApi* | [**systemSmsServerGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemSmsServerApi) | **GET** /system/sms-server | Select all entries in a CLI table.  Access Group: authgrp
*SystemSmsServerApi* | [**systemSmsServerNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemSmsServerApi) | **DELETE** /system/sms-server/{name} | Delete this specific resource.  Access Group: authgrp
*SystemSmsServerApi* | [**systemSmsServerNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemSmsServerApi) | **GET** /system/sms-server/{name} | Select a specific entry from a CLI table.  Access Group: authgrp
*SystemSmsServerApi* | [**systemSmsServerNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemSmsServerApi) | **PUT** /system/sms-server/{name} | Update this specific resource.  Access Group: authgrp
*SystemSmsServerApi* | [**systemSmsServerPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemSmsServerApi) | **POST** /system/sms-server | Create object(s) in this table.  Access Group: authgrp
*SystemSnmpCommunityApi* | [**systemSnmpCommunityGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemSnmpCommunityApi) | **GET** /system.snmp/community | Select all entries in a CLI table.  Access Group: sysgrp
*SystemSnmpCommunityApi* | [**systemSnmpCommunityIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemSnmpCommunityApi) | **DELETE** /system.snmp/community/{id} | Delete this specific resource.  Access Group: sysgrp
*SystemSnmpCommunityApi* | [**systemSnmpCommunityIdGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemSnmpCommunityApi) | **GET** /system.snmp/community/{id} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemSnmpCommunityApi* | [**systemSnmpCommunityIdPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemSnmpCommunityApi) | **PUT** /system.snmp/community/{id} | Update this specific resource.  Access Group: sysgrp
*SystemSnmpCommunityApi* | [**systemSnmpCommunityPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemSnmpCommunityApi) | **POST** /system.snmp/community | Create object(s) in this table.  Access Group: sysgrp
*SystemSnmpSysinfoApi* | [**systemSnmpSysinfoGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemSnmpSysinfoApi) | **GET** /system.snmp/sysinfo | Select all entries in a CLI table.  Access Group: sysgrp
*SystemSnmpSysinfoApi* | [**systemSnmpSysinfoPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemSnmpSysinfoApi) | **PUT** /system.snmp/sysinfo | Update this specific resource.  Access Group: sysgrp
*SystemSnmpUserApi* | [**systemSnmpUserGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemSnmpUserApi) | **GET** /system.snmp/user | Select all entries in a CLI table.  Access Group: sysgrp
*SystemSnmpUserApi* | [**systemSnmpUserNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemSnmpUserApi) | **DELETE** /system.snmp/user/{name} | Delete this specific resource.  Access Group: sysgrp
*SystemSnmpUserApi* | [**systemSnmpUserNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemSnmpUserApi) | **GET** /system.snmp/user/{name} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemSnmpUserApi* | [**systemSnmpUserNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemSnmpUserApi) | **PUT** /system.snmp/user/{name} | Update this specific resource.  Access Group: sysgrp
*SystemSnmpUserApi* | [**systemSnmpUserPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemSnmpUserApi) | **POST** /system.snmp/user | Create object(s) in this table.  Access Group: sysgrp
*SystemSpeedTestServerApi* | [**systemSpeedTestServerGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemSpeedTestServerApi) | **GET** /system/speed-test-server | Select all entries in a CLI table.  Access Group: sysgrp
*SystemSpeedTestServerApi* | [**systemSpeedTestServerNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemSpeedTestServerApi) | **DELETE** /system/speed-test-server/{name} | Delete this specific resource.  Access Group: sysgrp
*SystemSpeedTestServerApi* | [**systemSpeedTestServerNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemSpeedTestServerApi) | **GET** /system/speed-test-server/{name} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemSpeedTestServerApi* | [**systemSpeedTestServerNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemSpeedTestServerApi) | **PUT** /system/speed-test-server/{name} | Update this specific resource.  Access Group: sysgrp
*SystemSpeedTestServerApi* | [**systemSpeedTestServerPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemSpeedTestServerApi) | **POST** /system/speed-test-server | Create object(s) in this table.  Access Group: sysgrp
*SystemSsoAdminApi* | [**systemSsoAdminGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemSsoAdminApi) | **GET** /system/sso-admin | Select all entries in a CLI table.  Access Group: sysgrp
*SystemSsoAdminApi* | [**systemSsoAdminNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemSsoAdminApi) | **DELETE** /system/sso-admin/{name} | Delete this specific resource.  Access Group: sysgrp
*SystemSsoAdminApi* | [**systemSsoAdminNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemSsoAdminApi) | **GET** /system/sso-admin/{name} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemSsoAdminApi* | [**systemSsoAdminNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemSsoAdminApi) | **PUT** /system/sso-admin/{name} | Update this specific resource.  Access Group: sysgrp
*SystemSsoAdminApi* | [**systemSsoAdminPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemSsoAdminApi) | **POST** /system/sso-admin | Create object(s) in this table.  Access Group: sysgrp
*SystemStandaloneClusterApi* | [**systemStandaloneClusterGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemStandaloneClusterApi) | **GET** /system/standalone-cluster | Select all entries in a CLI table.  Access Group: sysgrp
*SystemStandaloneClusterApi* | [**systemStandaloneClusterPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemStandaloneClusterApi) | **PUT** /system/standalone-cluster | Update this specific resource.  Access Group: sysgrp
*SystemStorageApi* | [**systemStorageGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemStorageApi) | **GET** /system/storage | Select all entries in a CLI table.  Access Group: sysgrp
*SystemStorageApi* | [**systemStorageNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemStorageApi) | **DELETE** /system/storage/{name} | Delete this specific resource.  Access Group: sysgrp
*SystemStorageApi* | [**systemStorageNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemStorageApi) | **GET** /system/storage/{name} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemStorageApi* | [**systemStorageNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemStorageApi) | **PUT** /system/storage/{name} | Update this specific resource.  Access Group: sysgrp
*SystemStorageApi* | [**systemStoragePost**](docs/classes/Fortigate-FortiOS-CMDB-SystemStorageApi) | **POST** /system/storage | Create object(s) in this table.  Access Group: sysgrp
*SystemStpApi* | [**systemStpGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemStpApi) | **GET** /system/stp | Select all entries in a CLI table.  Access Group: sysgrp
*SystemStpApi* | [**systemStpPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemStpApi) | **PUT** /system/stp | Update this specific resource.  Access Group: sysgrp
*SystemSwitchInterfaceApi* | [**systemSwitchInterfaceGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemSwitchInterfaceApi) | **GET** /system/switch-interface | Select all entries in a CLI table.  Access Group: sysgrp
*SystemSwitchInterfaceApi* | [**systemSwitchInterfaceNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemSwitchInterfaceApi) | **DELETE** /system/switch-interface/{name} | Delete this specific resource.  Access Group: sysgrp
*SystemSwitchInterfaceApi* | [**systemSwitchInterfaceNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemSwitchInterfaceApi) | **GET** /system/switch-interface/{name} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemSwitchInterfaceApi* | [**systemSwitchInterfaceNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemSwitchInterfaceApi) | **PUT** /system/switch-interface/{name} | Update this specific resource.  Access Group: sysgrp
*SystemSwitchInterfaceApi* | [**systemSwitchInterfacePost**](docs/classes/Fortigate-FortiOS-CMDB-SystemSwitchInterfaceApi) | **POST** /system/switch-interface | Create object(s) in this table.  Access Group: sysgrp
*SystemTosBasedPriorityApi* | [**systemTosBasedPriorityGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemTosBasedPriorityApi) | **GET** /system/tos-based-priority | Select all entries in a CLI table.  Access Group: sysgrp
*SystemTosBasedPriorityApi* | [**systemTosBasedPriorityIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemTosBasedPriorityApi) | **DELETE** /system/tos-based-priority/{id} | Delete this specific resource.  Access Group: sysgrp
*SystemTosBasedPriorityApi* | [**systemTosBasedPriorityIdGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemTosBasedPriorityApi) | **GET** /system/tos-based-priority/{id} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemTosBasedPriorityApi* | [**systemTosBasedPriorityIdPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemTosBasedPriorityApi) | **PUT** /system/tos-based-priority/{id} | Update this specific resource.  Access Group: sysgrp
*SystemTosBasedPriorityApi* | [**systemTosBasedPriorityPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemTosBasedPriorityApi) | **POST** /system/tos-based-priority | Create object(s) in this table.  Access Group: sysgrp
*SystemVdomApi* | [**systemVdomGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemVdomApi) | **GET** /system/vdom | Select all entries in a CLI table.  Access Group: sysgrp
*SystemVdomApi* | [**systemVdomNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemVdomApi) | **DELETE** /system/vdom/{name} | Delete this specific resource.  Access Group: sysgrp
*SystemVdomApi* | [**systemVdomNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemVdomApi) | **GET** /system/vdom/{name} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemVdomApi* | [**systemVdomNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemVdomApi) | **PUT** /system/vdom/{name} | Update this specific resource.  Access Group: sysgrp
*SystemVdomApi* | [**systemVdomPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemVdomApi) | **POST** /system/vdom | Create object(s) in this table.  Access Group: sysgrp
*SystemVdomDnsApi* | [**systemVdomDnsGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemVdomDnsApi) | **GET** /system/vdom-dns | Select all entries in a CLI table.  Access Group: sysgrp
*SystemVdomDnsApi* | [**systemVdomDnsPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemVdomDnsApi) | **PUT** /system/vdom-dns | Update this specific resource.  Access Group: sysgrp
*SystemVdomExceptionApi* | [**systemVdomExceptionGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemVdomExceptionApi) | **GET** /system/vdom-exception | Select all entries in a CLI table.  Access Group: sysgrp
*SystemVdomExceptionApi* | [**systemVdomExceptionIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemVdomExceptionApi) | **DELETE** /system/vdom-exception/{id} | Delete this specific resource.  Access Group: sysgrp
*SystemVdomExceptionApi* | [**systemVdomExceptionIdGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemVdomExceptionApi) | **GET** /system/vdom-exception/{id} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemVdomExceptionApi* | [**systemVdomExceptionIdPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemVdomExceptionApi) | **PUT** /system/vdom-exception/{id} | Update this specific resource.  Access Group: sysgrp
*SystemVdomExceptionApi* | [**systemVdomExceptionPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemVdomExceptionApi) | **POST** /system/vdom-exception | Create object(s) in this table.  Access Group: sysgrp
*SystemVdomLinkApi* | [**systemVdomLinkGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemVdomLinkApi) | **GET** /system/vdom-link | Select all entries in a CLI table.  Access Group: netgrp
*SystemVdomLinkApi* | [**systemVdomLinkNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemVdomLinkApi) | **DELETE** /system/vdom-link/{name} | Delete this specific resource.  Access Group: netgrp
*SystemVdomLinkApi* | [**systemVdomLinkNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemVdomLinkApi) | **GET** /system/vdom-link/{name} | Select a specific entry from a CLI table.  Access Group: netgrp
*SystemVdomLinkApi* | [**systemVdomLinkNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemVdomLinkApi) | **PUT** /system/vdom-link/{name} | Update this specific resource.  Access Group: netgrp
*SystemVdomLinkApi* | [**systemVdomLinkPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemVdomLinkApi) | **POST** /system/vdom-link | Create object(s) in this table.  Access Group: netgrp
*SystemVdomNetflowApi* | [**systemVdomNetflowGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemVdomNetflowApi) | **GET** /system/vdom-netflow | Select all entries in a CLI table.  Access Group: sysgrp
*SystemVdomNetflowApi* | [**systemVdomNetflowPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemVdomNetflowApi) | **PUT** /system/vdom-netflow | Update this specific resource.  Access Group: sysgrp
*SystemVdomPropertyApi* | [**systemVdomPropertyGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemVdomPropertyApi) | **GET** /system/vdom-property | Select all entries in a CLI table.  Access Group: sysgrp
*SystemVdomPropertyApi* | [**systemVdomPropertyNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemVdomPropertyApi) | **DELETE** /system/vdom-property/{name} | Delete this specific resource.  Access Group: sysgrp
*SystemVdomPropertyApi* | [**systemVdomPropertyNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemVdomPropertyApi) | **GET** /system/vdom-property/{name} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemVdomPropertyApi* | [**systemVdomPropertyNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemVdomPropertyApi) | **PUT** /system/vdom-property/{name} | Update this specific resource.  Access Group: sysgrp
*SystemVdomPropertyApi* | [**systemVdomPropertyPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemVdomPropertyApi) | **POST** /system/vdom-property | Create object(s) in this table.  Access Group: sysgrp
*SystemVdomRadiusServerApi* | [**systemVdomRadiusServerGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemVdomRadiusServerApi) | **GET** /system/vdom-radius-server | Select all entries in a CLI table.  Access Group: authgrp
*SystemVdomRadiusServerApi* | [**systemVdomRadiusServerNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemVdomRadiusServerApi) | **DELETE** /system/vdom-radius-server/{name} | Delete this specific resource.  Access Group: authgrp
*SystemVdomRadiusServerApi* | [**systemVdomRadiusServerNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemVdomRadiusServerApi) | **GET** /system/vdom-radius-server/{name} | Select a specific entry from a CLI table.  Access Group: authgrp
*SystemVdomRadiusServerApi* | [**systemVdomRadiusServerNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemVdomRadiusServerApi) | **PUT** /system/vdom-radius-server/{name} | Update this specific resource.  Access Group: authgrp
*SystemVdomRadiusServerApi* | [**systemVdomRadiusServerPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemVdomRadiusServerApi) | **POST** /system/vdom-radius-server | Create object(s) in this table.  Access Group: authgrp
*SystemVdomSflowApi* | [**systemVdomSflowGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemVdomSflowApi) | **GET** /system/vdom-sflow | Select all entries in a CLI table.  Access Group: sysgrp
*SystemVdomSflowApi* | [**systemVdomSflowPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemVdomSflowApi) | **PUT** /system/vdom-sflow | Update this specific resource.  Access Group: sysgrp
*SystemVirtualSwitchApi* | [**systemVirtualSwitchGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemVirtualSwitchApi) | **GET** /system/virtual-switch | Select all entries in a CLI table.  Access Group: sysgrp
*SystemVirtualSwitchApi* | [**systemVirtualSwitchNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemVirtualSwitchApi) | **DELETE** /system/virtual-switch/{name} | Delete this specific resource.  Access Group: sysgrp
*SystemVirtualSwitchApi* | [**systemVirtualSwitchNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemVirtualSwitchApi) | **GET** /system/virtual-switch/{name} | Select a specific entry from a CLI table.  Access Group: sysgrp
*SystemVirtualSwitchApi* | [**systemVirtualSwitchNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemVirtualSwitchApi) | **PUT** /system/virtual-switch/{name} | Update this specific resource.  Access Group: sysgrp
*SystemVirtualSwitchApi* | [**systemVirtualSwitchPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemVirtualSwitchApi) | **POST** /system/virtual-switch | Create object(s) in this table.  Access Group: sysgrp
*SystemVirtualWirePairApi* | [**systemVirtualWirePairGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemVirtualWirePairApi) | **GET** /system/virtual-wire-pair | Select all entries in a CLI table.  Access Group: netgrp
*SystemVirtualWirePairApi* | [**systemVirtualWirePairNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemVirtualWirePairApi) | **DELETE** /system/virtual-wire-pair/{name} | Delete this specific resource.  Access Group: netgrp
*SystemVirtualWirePairApi* | [**systemVirtualWirePairNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemVirtualWirePairApi) | **GET** /system/virtual-wire-pair/{name} | Select a specific entry from a CLI table.  Access Group: netgrp
*SystemVirtualWirePairApi* | [**systemVirtualWirePairNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemVirtualWirePairApi) | **PUT** /system/virtual-wire-pair/{name} | Update this specific resource.  Access Group: netgrp
*SystemVirtualWirePairApi* | [**systemVirtualWirePairPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemVirtualWirePairApi) | **POST** /system/virtual-wire-pair | Create object(s) in this table.  Access Group: netgrp
*SystemVneTunnelApi* | [**systemVneTunnelGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemVneTunnelApi) | **GET** /system/vne-tunnel | Select all entries in a CLI table.  Access Group: netgrp
*SystemVneTunnelApi* | [**systemVneTunnelPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemVneTunnelApi) | **PUT** /system/vne-tunnel | Update this specific resource.  Access Group: netgrp
*SystemVxlanApi* | [**systemVxlanGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemVxlanApi) | **GET** /system/vxlan | Select all entries in a CLI table.  Access Group: netgrp
*SystemVxlanApi* | [**systemVxlanNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemVxlanApi) | **DELETE** /system/vxlan/{name} | Delete this specific resource.  Access Group: netgrp
*SystemVxlanApi* | [**systemVxlanNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemVxlanApi) | **GET** /system/vxlan/{name} | Select a specific entry from a CLI table.  Access Group: netgrp
*SystemVxlanApi* | [**systemVxlanNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemVxlanApi) | **PUT** /system/vxlan/{name} | Update this specific resource.  Access Group: netgrp
*SystemVxlanApi* | [**systemVxlanPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemVxlanApi) | **POST** /system/vxlan | Create object(s) in this table.  Access Group: netgrp
*SystemWccpApi* | [**systemWccpGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemWccpApi) | **GET** /system/wccp | Select all entries in a CLI table.  Access Group: secfabgrp
*SystemWccpApi* | [**systemWccpPost**](docs/classes/Fortigate-FortiOS-CMDB-SystemWccpApi) | **POST** /system/wccp | Create object(s) in this table.  Access Group: secfabgrp
*SystemWccpApi* | [**systemWccpServiceIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemWccpApi) | **DELETE** /system/wccp/{service-id} | Delete this specific resource.  Access Group: secfabgrp
*SystemWccpApi* | [**systemWccpServiceIdGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemWccpApi) | **GET** /system/wccp/{service-id} | Select a specific entry from a CLI table.  Access Group: secfabgrp
*SystemWccpApi* | [**systemWccpServiceIdPut**](docs/classes/Fortigate-FortiOS-CMDB-SystemWccpApi) | **PUT** /system/wccp/{service-id} | Update this specific resource.  Access Group: secfabgrp
*SystemZoneApi* | [**systemZoneGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemZoneApi) | **GET** /system/zone | Select all entries in a CLI table.  Access Group: netgrp
*SystemZoneApi* | [**systemZoneNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-SystemZoneApi) | **DELETE** /system/zone/{name} | Delete this specific resource.  Access Group: netgrp
*SystemZoneApi* | [**systemZoneNameGet**](docs/classes/Fortigate-FortiOS-CMDB-SystemZoneApi) | **GET** /system/zone/{name} | Select a specific entry from a CLI table.  Access Group: netgrp
*SystemZoneApi* | [**systemZoneNamePut**](docs/classes/Fortigate-FortiOS-CMDB-SystemZoneApi) | **PUT** /system/zone/{name} | Update this specific resource.  Access Group: netgrp
*SystemZoneApi* | [**systemZonePost**](docs/classes/Fortigate-FortiOS-CMDB-SystemZoneApi) | **POST** /system/zone | Create object(s) in this table.  Access Group: netgrp
*UserAdgrpApi* | [**userAdgrpGet**](docs/classes/Fortigate-FortiOS-CMDB-UserAdgrpApi) | **GET** /user/adgrp | Select all entries in a CLI table.  Access Group: authgrp
*UserAdgrpApi* | [**userAdgrpNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-UserAdgrpApi) | **DELETE** /user/adgrp/{name} | Delete this specific resource.  Access Group: authgrp
*UserAdgrpApi* | [**userAdgrpNameGet**](docs/classes/Fortigate-FortiOS-CMDB-UserAdgrpApi) | **GET** /user/adgrp/{name} | Select a specific entry from a CLI table.  Access Group: authgrp
*UserAdgrpApi* | [**userAdgrpNamePut**](docs/classes/Fortigate-FortiOS-CMDB-UserAdgrpApi) | **PUT** /user/adgrp/{name} | Update this specific resource.  Access Group: authgrp
*UserAdgrpApi* | [**userAdgrpPost**](docs/classes/Fortigate-FortiOS-CMDB-UserAdgrpApi) | **POST** /user/adgrp | Create object(s) in this table.  Access Group: authgrp
*UserDomainControllerApi* | [**userDomainControllerGet**](docs/classes/Fortigate-FortiOS-CMDB-UserDomainControllerApi) | **GET** /user/domain-controller | Select all entries in a CLI table.  Access Group: authgrp
*UserDomainControllerApi* | [**userDomainControllerNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-UserDomainControllerApi) | **DELETE** /user/domain-controller/{name} | Delete this specific resource.  Access Group: authgrp
*UserDomainControllerApi* | [**userDomainControllerNameGet**](docs/classes/Fortigate-FortiOS-CMDB-UserDomainControllerApi) | **GET** /user/domain-controller/{name} | Select a specific entry from a CLI table.  Access Group: authgrp
*UserDomainControllerApi* | [**userDomainControllerNamePut**](docs/classes/Fortigate-FortiOS-CMDB-UserDomainControllerApi) | **PUT** /user/domain-controller/{name} | Update this specific resource.  Access Group: authgrp
*UserDomainControllerApi* | [**userDomainControllerPost**](docs/classes/Fortigate-FortiOS-CMDB-UserDomainControllerApi) | **POST** /user/domain-controller | Create object(s) in this table.  Access Group: authgrp
*UserExchangeApi* | [**userExchangeGet**](docs/classes/Fortigate-FortiOS-CMDB-UserExchangeApi) | **GET** /user/exchange | Select all entries in a CLI table.  Access Group: authgrp
*UserExchangeApi* | [**userExchangeNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-UserExchangeApi) | **DELETE** /user/exchange/{name} | Delete this specific resource.  Access Group: authgrp
*UserExchangeApi* | [**userExchangeNameGet**](docs/classes/Fortigate-FortiOS-CMDB-UserExchangeApi) | **GET** /user/exchange/{name} | Select a specific entry from a CLI table.  Access Group: authgrp
*UserExchangeApi* | [**userExchangeNamePut**](docs/classes/Fortigate-FortiOS-CMDB-UserExchangeApi) | **PUT** /user/exchange/{name} | Update this specific resource.  Access Group: authgrp
*UserExchangeApi* | [**userExchangePost**](docs/classes/Fortigate-FortiOS-CMDB-UserExchangeApi) | **POST** /user/exchange | Create object(s) in this table.  Access Group: authgrp
*UserFortitokenApi* | [**userFortitokenGet**](docs/classes/Fortigate-FortiOS-CMDB-UserFortitokenApi) | **GET** /user/fortitoken | Select all entries in a CLI table.  Access Group: authgrp
*UserFortitokenApi* | [**userFortitokenPost**](docs/classes/Fortigate-FortiOS-CMDB-UserFortitokenApi) | **POST** /user/fortitoken | Create object(s) in this table.  Access Group: authgrp
*UserFortitokenApi* | [**userFortitokenSerialNumberDelete**](docs/classes/Fortigate-FortiOS-CMDB-UserFortitokenApi) | **DELETE** /user/fortitoken/{serial-number} | Delete this specific resource.  Access Group: authgrp
*UserFortitokenApi* | [**userFortitokenSerialNumberGet**](docs/classes/Fortigate-FortiOS-CMDB-UserFortitokenApi) | **GET** /user/fortitoken/{serial-number} | Select a specific entry from a CLI table.  Access Group: authgrp
*UserFortitokenApi* | [**userFortitokenSerialNumberPut**](docs/classes/Fortigate-FortiOS-CMDB-UserFortitokenApi) | **PUT** /user/fortitoken/{serial-number} | Update this specific resource.  Access Group: authgrp
*UserFssoApi* | [**userFssoGet**](docs/classes/Fortigate-FortiOS-CMDB-UserFssoApi) | **GET** /user/fsso | Select all entries in a CLI table.  Access Group: authgrp
*UserFssoApi* | [**userFssoNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-UserFssoApi) | **DELETE** /user/fsso/{name} | Delete this specific resource.  Access Group: authgrp
*UserFssoApi* | [**userFssoNameGet**](docs/classes/Fortigate-FortiOS-CMDB-UserFssoApi) | **GET** /user/fsso/{name} | Select a specific entry from a CLI table.  Access Group: authgrp
*UserFssoApi* | [**userFssoNamePut**](docs/classes/Fortigate-FortiOS-CMDB-UserFssoApi) | **PUT** /user/fsso/{name} | Update this specific resource.  Access Group: authgrp
*UserFssoApi* | [**userFssoPost**](docs/classes/Fortigate-FortiOS-CMDB-UserFssoApi) | **POST** /user/fsso | Create object(s) in this table.  Access Group: authgrp
*UserFssoPollingApi* | [**userFssoPollingGet**](docs/classes/Fortigate-FortiOS-CMDB-UserFssoPollingApi) | **GET** /user/fsso-polling | Select all entries in a CLI table.  Access Group: authgrp
*UserFssoPollingApi* | [**userFssoPollingIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-UserFssoPollingApi) | **DELETE** /user/fsso-polling/{id} | Delete this specific resource.  Access Group: authgrp
*UserFssoPollingApi* | [**userFssoPollingIdGet**](docs/classes/Fortigate-FortiOS-CMDB-UserFssoPollingApi) | **GET** /user/fsso-polling/{id} | Select a specific entry from a CLI table.  Access Group: authgrp
*UserFssoPollingApi* | [**userFssoPollingIdPut**](docs/classes/Fortigate-FortiOS-CMDB-UserFssoPollingApi) | **PUT** /user/fsso-polling/{id} | Update this specific resource.  Access Group: authgrp
*UserFssoPollingApi* | [**userFssoPollingPost**](docs/classes/Fortigate-FortiOS-CMDB-UserFssoPollingApi) | **POST** /user/fsso-polling | Create object(s) in this table.  Access Group: authgrp
*UserGroupApi* | [**userGroupGet**](docs/classes/Fortigate-FortiOS-CMDB-UserGroupApi) | **GET** /user/group | Select all entries in a CLI table.  Access Group: authgrp
*UserGroupApi* | [**userGroupNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-UserGroupApi) | **DELETE** /user/group/{name} | Delete this specific resource.  Access Group: authgrp
*UserGroupApi* | [**userGroupNameGet**](docs/classes/Fortigate-FortiOS-CMDB-UserGroupApi) | **GET** /user/group/{name} | Select a specific entry from a CLI table.  Access Group: authgrp
*UserGroupApi* | [**userGroupNamePut**](docs/classes/Fortigate-FortiOS-CMDB-UserGroupApi) | **PUT** /user/group/{name} | Update this specific resource.  Access Group: authgrp
*UserGroupApi* | [**userGroupPost**](docs/classes/Fortigate-FortiOS-CMDB-UserGroupApi) | **POST** /user/group | Create object(s) in this table.  Access Group: authgrp
*UserKrbKeytabApi* | [**userKrbKeytabGet**](docs/classes/Fortigate-FortiOS-CMDB-UserKrbKeytabApi) | **GET** /user/krb-keytab | Select all entries in a CLI table.  Access Group: authgrp
*UserKrbKeytabApi* | [**userKrbKeytabNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-UserKrbKeytabApi) | **DELETE** /user/krb-keytab/{name} | Delete this specific resource.  Access Group: authgrp
*UserKrbKeytabApi* | [**userKrbKeytabNameGet**](docs/classes/Fortigate-FortiOS-CMDB-UserKrbKeytabApi) | **GET** /user/krb-keytab/{name} | Select a specific entry from a CLI table.  Access Group: authgrp
*UserKrbKeytabApi* | [**userKrbKeytabNamePut**](docs/classes/Fortigate-FortiOS-CMDB-UserKrbKeytabApi) | **PUT** /user/krb-keytab/{name} | Update this specific resource.  Access Group: authgrp
*UserKrbKeytabApi* | [**userKrbKeytabPost**](docs/classes/Fortigate-FortiOS-CMDB-UserKrbKeytabApi) | **POST** /user/krb-keytab | Create object(s) in this table.  Access Group: authgrp
*UserLdapApi* | [**userLdapGet**](docs/classes/Fortigate-FortiOS-CMDB-UserLdapApi) | **GET** /user/ldap | Select all entries in a CLI table.  Access Group: authgrp
*UserLdapApi* | [**userLdapNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-UserLdapApi) | **DELETE** /user/ldap/{name} | Delete this specific resource.  Access Group: authgrp
*UserLdapApi* | [**userLdapNameGet**](docs/classes/Fortigate-FortiOS-CMDB-UserLdapApi) | **GET** /user/ldap/{name} | Select a specific entry from a CLI table.  Access Group: authgrp
*UserLdapApi* | [**userLdapNamePut**](docs/classes/Fortigate-FortiOS-CMDB-UserLdapApi) | **PUT** /user/ldap/{name} | Update this specific resource.  Access Group: authgrp
*UserLdapApi* | [**userLdapPost**](docs/classes/Fortigate-FortiOS-CMDB-UserLdapApi) | **POST** /user/ldap | Create object(s) in this table.  Access Group: authgrp
*UserLocalApi* | [**userLocalGet**](docs/classes/Fortigate-FortiOS-CMDB-UserLocalApi) | **GET** /user/local | Select all entries in a CLI table.  Access Group: authgrp
*UserLocalApi* | [**userLocalNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-UserLocalApi) | **DELETE** /user/local/{name} | Delete this specific resource.  Access Group: authgrp
*UserLocalApi* | [**userLocalNameGet**](docs/classes/Fortigate-FortiOS-CMDB-UserLocalApi) | **GET** /user/local/{name} | Select a specific entry from a CLI table.  Access Group: authgrp
*UserLocalApi* | [**userLocalNamePut**](docs/classes/Fortigate-FortiOS-CMDB-UserLocalApi) | **PUT** /user/local/{name} | Update this specific resource.  Access Group: authgrp
*UserLocalApi* | [**userLocalPost**](docs/classes/Fortigate-FortiOS-CMDB-UserLocalApi) | **POST** /user/local | Create object(s) in this table.  Access Group: authgrp
*UserNacPolicyApi* | [**userNacPolicyGet**](docs/classes/Fortigate-FortiOS-CMDB-UserNacPolicyApi) | **GET** /user/nac-policy | Select all entries in a CLI table.  Access Group: wifi
*UserNacPolicyApi* | [**userNacPolicyNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-UserNacPolicyApi) | **DELETE** /user/nac-policy/{name} | Delete this specific resource.  Access Group: wifi
*UserNacPolicyApi* | [**userNacPolicyNameGet**](docs/classes/Fortigate-FortiOS-CMDB-UserNacPolicyApi) | **GET** /user/nac-policy/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*UserNacPolicyApi* | [**userNacPolicyNamePut**](docs/classes/Fortigate-FortiOS-CMDB-UserNacPolicyApi) | **PUT** /user/nac-policy/{name} | Update this specific resource.  Access Group: wifi
*UserNacPolicyApi* | [**userNacPolicyPost**](docs/classes/Fortigate-FortiOS-CMDB-UserNacPolicyApi) | **POST** /user/nac-policy | Create object(s) in this table.  Access Group: wifi
*UserPasswordPolicyApi* | [**userPasswordPolicyGet**](docs/classes/Fortigate-FortiOS-CMDB-UserPasswordPolicyApi) | **GET** /user/password-policy | Select all entries in a CLI table.  Access Group: authgrp
*UserPasswordPolicyApi* | [**userPasswordPolicyNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-UserPasswordPolicyApi) | **DELETE** /user/password-policy/{name} | Delete this specific resource.  Access Group: authgrp
*UserPasswordPolicyApi* | [**userPasswordPolicyNameGet**](docs/classes/Fortigate-FortiOS-CMDB-UserPasswordPolicyApi) | **GET** /user/password-policy/{name} | Select a specific entry from a CLI table.  Access Group: authgrp
*UserPasswordPolicyApi* | [**userPasswordPolicyNamePut**](docs/classes/Fortigate-FortiOS-CMDB-UserPasswordPolicyApi) | **PUT** /user/password-policy/{name} | Update this specific resource.  Access Group: authgrp
*UserPasswordPolicyApi* | [**userPasswordPolicyPost**](docs/classes/Fortigate-FortiOS-CMDB-UserPasswordPolicyApi) | **POST** /user/password-policy | Create object(s) in this table.  Access Group: authgrp
*UserPeerApi* | [**userPeerGet**](docs/classes/Fortigate-FortiOS-CMDB-UserPeerApi) | **GET** /user/peer | Select all entries in a CLI table.  Access Group: authgrp
*UserPeerApi* | [**userPeerNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-UserPeerApi) | **DELETE** /user/peer/{name} | Delete this specific resource.  Access Group: authgrp
*UserPeerApi* | [**userPeerNameGet**](docs/classes/Fortigate-FortiOS-CMDB-UserPeerApi) | **GET** /user/peer/{name} | Select a specific entry from a CLI table.  Access Group: authgrp
*UserPeerApi* | [**userPeerNamePut**](docs/classes/Fortigate-FortiOS-CMDB-UserPeerApi) | **PUT** /user/peer/{name} | Update this specific resource.  Access Group: authgrp
*UserPeerApi* | [**userPeerPost**](docs/classes/Fortigate-FortiOS-CMDB-UserPeerApi) | **POST** /user/peer | Create object(s) in this table.  Access Group: authgrp
*UserPeergrpApi* | [**userPeergrpGet**](docs/classes/Fortigate-FortiOS-CMDB-UserPeergrpApi) | **GET** /user/peergrp | Select all entries in a CLI table.  Access Group: authgrp
*UserPeergrpApi* | [**userPeergrpNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-UserPeergrpApi) | **DELETE** /user/peergrp/{name} | Delete this specific resource.  Access Group: authgrp
*UserPeergrpApi* | [**userPeergrpNameGet**](docs/classes/Fortigate-FortiOS-CMDB-UserPeergrpApi) | **GET** /user/peergrp/{name} | Select a specific entry from a CLI table.  Access Group: authgrp
*UserPeergrpApi* | [**userPeergrpNamePut**](docs/classes/Fortigate-FortiOS-CMDB-UserPeergrpApi) | **PUT** /user/peergrp/{name} | Update this specific resource.  Access Group: authgrp
*UserPeergrpApi* | [**userPeergrpPost**](docs/classes/Fortigate-FortiOS-CMDB-UserPeergrpApi) | **POST** /user/peergrp | Create object(s) in this table.  Access Group: authgrp
*UserPop3Api* | [**userPop3Get**](docs/classes/Fortigate-FortiOS-CMDB-UserPop3Api) | **GET** /user/pop3 | Select all entries in a CLI table.  Access Group: authgrp
*UserPop3Api* | [**userPop3NameDelete**](docs/classes/Fortigate-FortiOS-CMDB-UserPop3Api) | **DELETE** /user/pop3/{name} | Delete this specific resource.  Access Group: authgrp
*UserPop3Api* | [**userPop3NameGet**](docs/classes/Fortigate-FortiOS-CMDB-UserPop3Api) | **GET** /user/pop3/{name} | Select a specific entry from a CLI table.  Access Group: authgrp
*UserPop3Api* | [**userPop3NamePut**](docs/classes/Fortigate-FortiOS-CMDB-UserPop3Api) | **PUT** /user/pop3/{name} | Update this specific resource.  Access Group: authgrp
*UserPop3Api* | [**userPop3Post**](docs/classes/Fortigate-FortiOS-CMDB-UserPop3Api) | **POST** /user/pop3 | Create object(s) in this table.  Access Group: authgrp
*UserQuarantineApi* | [**userQuarantineGet**](docs/classes/Fortigate-FortiOS-CMDB-UserQuarantineApi) | **GET** /user/quarantine | Select all entries in a CLI table.  Access Group: wifi
*UserQuarantineApi* | [**userQuarantinePut**](docs/classes/Fortigate-FortiOS-CMDB-UserQuarantineApi) | **PUT** /user/quarantine | Update this specific resource.  Access Group: wifi
*UserRadiusApi* | [**userRadiusGet**](docs/classes/Fortigate-FortiOS-CMDB-UserRadiusApi) | **GET** /user/radius | Select all entries in a CLI table.  Access Group: authgrp
*UserRadiusApi* | [**userRadiusNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-UserRadiusApi) | **DELETE** /user/radius/{name} | Delete this specific resource.  Access Group: authgrp
*UserRadiusApi* | [**userRadiusNameGet**](docs/classes/Fortigate-FortiOS-CMDB-UserRadiusApi) | **GET** /user/radius/{name} | Select a specific entry from a CLI table.  Access Group: authgrp
*UserRadiusApi* | [**userRadiusNamePut**](docs/classes/Fortigate-FortiOS-CMDB-UserRadiusApi) | **PUT** /user/radius/{name} | Update this specific resource.  Access Group: authgrp
*UserRadiusApi* | [**userRadiusPost**](docs/classes/Fortigate-FortiOS-CMDB-UserRadiusApi) | **POST** /user/radius | Create object(s) in this table.  Access Group: authgrp
*UserSamlApi* | [**userSamlGet**](docs/classes/Fortigate-FortiOS-CMDB-UserSamlApi) | **GET** /user/saml | Select all entries in a CLI table.  Access Group: authgrp
*UserSamlApi* | [**userSamlNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-UserSamlApi) | **DELETE** /user/saml/{name} | Delete this specific resource.  Access Group: authgrp
*UserSamlApi* | [**userSamlNameGet**](docs/classes/Fortigate-FortiOS-CMDB-UserSamlApi) | **GET** /user/saml/{name} | Select a specific entry from a CLI table.  Access Group: authgrp
*UserSamlApi* | [**userSamlNamePut**](docs/classes/Fortigate-FortiOS-CMDB-UserSamlApi) | **PUT** /user/saml/{name} | Update this specific resource.  Access Group: authgrp
*UserSamlApi* | [**userSamlPost**](docs/classes/Fortigate-FortiOS-CMDB-UserSamlApi) | **POST** /user/saml | Create object(s) in this table.  Access Group: authgrp
*UserSecurityExemptListApi* | [**userSecurityExemptListGet**](docs/classes/Fortigate-FortiOS-CMDB-UserSecurityExemptListApi) | **GET** /user/security-exempt-list | Select all entries in a CLI table.  Access Group: authgrp
*UserSecurityExemptListApi* | [**userSecurityExemptListNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-UserSecurityExemptListApi) | **DELETE** /user/security-exempt-list/{name} | Delete this specific resource.  Access Group: authgrp
*UserSecurityExemptListApi* | [**userSecurityExemptListNameGet**](docs/classes/Fortigate-FortiOS-CMDB-UserSecurityExemptListApi) | **GET** /user/security-exempt-list/{name} | Select a specific entry from a CLI table.  Access Group: authgrp
*UserSecurityExemptListApi* | [**userSecurityExemptListNamePut**](docs/classes/Fortigate-FortiOS-CMDB-UserSecurityExemptListApi) | **PUT** /user/security-exempt-list/{name} | Update this specific resource.  Access Group: authgrp
*UserSecurityExemptListApi* | [**userSecurityExemptListPost**](docs/classes/Fortigate-FortiOS-CMDB-UserSecurityExemptListApi) | **POST** /user/security-exempt-list | Create object(s) in this table.  Access Group: authgrp
*UserSettingApi* | [**userSettingGet**](docs/classes/Fortigate-FortiOS-CMDB-UserSettingApi) | **GET** /user/setting | Select all entries in a CLI table.  Access Group: authgrp
*UserSettingApi* | [**userSettingPut**](docs/classes/Fortigate-FortiOS-CMDB-UserSettingApi) | **PUT** /user/setting | Update this specific resource.  Access Group: authgrp
*UserTacacsApi* | [**userTacacsGet**](docs/classes/Fortigate-FortiOS-CMDB-UserTacacsApi) | **GET** /user/tacacs+ | Select all entries in a CLI table.  Access Group: authgrp
*UserTacacsApi* | [**userTacacsNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-UserTacacsApi) | **DELETE** /user/tacacs+/{name} | Delete this specific resource.  Access Group: authgrp
*UserTacacsApi* | [**userTacacsNameGet**](docs/classes/Fortigate-FortiOS-CMDB-UserTacacsApi) | **GET** /user/tacacs+/{name} | Select a specific entry from a CLI table.  Access Group: authgrp
*UserTacacsApi* | [**userTacacsNamePut**](docs/classes/Fortigate-FortiOS-CMDB-UserTacacsApi) | **PUT** /user/tacacs+/{name} | Update this specific resource.  Access Group: authgrp
*UserTacacsApi* | [**userTacacsPost**](docs/classes/Fortigate-FortiOS-CMDB-UserTacacsApi) | **POST** /user/tacacs+ | Create object(s) in this table.  Access Group: authgrp
*VoipProfileApi* | [**voipProfileGet**](docs/classes/Fortigate-FortiOS-CMDB-VoipProfileApi) | **GET** /voip/profile | Select all entries in a CLI table.  Access Group: utmgrp
*VoipProfileApi* | [**voipProfileNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-VoipProfileApi) | **DELETE** /voip/profile/{name} | Delete this specific resource.  Access Group: utmgrp
*VoipProfileApi* | [**voipProfileNameGet**](docs/classes/Fortigate-FortiOS-CMDB-VoipProfileApi) | **GET** /voip/profile/{name} | Select a specific entry from a CLI table.  Access Group: utmgrp
*VoipProfileApi* | [**voipProfileNamePut**](docs/classes/Fortigate-FortiOS-CMDB-VoipProfileApi) | **PUT** /voip/profile/{name} | Update this specific resource.  Access Group: utmgrp
*VoipProfileApi* | [**voipProfilePost**](docs/classes/Fortigate-FortiOS-CMDB-VoipProfileApi) | **POST** /voip/profile | Create object(s) in this table.  Access Group: utmgrp
*VpnCertificateCaApi* | [**vpnCertificateCaGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnCertificateCaApi) | **GET** /vpn.certificate/ca | Select all entries in a CLI table.  Access Group: vpngrp
*VpnCertificateCaApi* | [**vpnCertificateCaNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-VpnCertificateCaApi) | **DELETE** /vpn.certificate/ca/{name} | Delete this specific resource.  Access Group: vpngrp
*VpnCertificateCaApi* | [**vpnCertificateCaNameGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnCertificateCaApi) | **GET** /vpn.certificate/ca/{name} | Select a specific entry from a CLI table.  Access Group: vpngrp
*VpnCertificateCaApi* | [**vpnCertificateCaNamePut**](docs/classes/Fortigate-FortiOS-CMDB-VpnCertificateCaApi) | **PUT** /vpn.certificate/ca/{name} | Update this specific resource.  Access Group: vpngrp
*VpnCertificateCaApi* | [**vpnCertificateCaPost**](docs/classes/Fortigate-FortiOS-CMDB-VpnCertificateCaApi) | **POST** /vpn.certificate/ca | Create object(s) in this table.  Access Group: vpngrp
*VpnCertificateCrlApi* | [**vpnCertificateCrlGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnCertificateCrlApi) | **GET** /vpn.certificate/crl | Select all entries in a CLI table.  Access Group: vpngrp
*VpnCertificateCrlApi* | [**vpnCertificateCrlNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-VpnCertificateCrlApi) | **DELETE** /vpn.certificate/crl/{name} | Delete this specific resource.  Access Group: vpngrp
*VpnCertificateCrlApi* | [**vpnCertificateCrlNameGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnCertificateCrlApi) | **GET** /vpn.certificate/crl/{name} | Select a specific entry from a CLI table.  Access Group: vpngrp
*VpnCertificateCrlApi* | [**vpnCertificateCrlNamePut**](docs/classes/Fortigate-FortiOS-CMDB-VpnCertificateCrlApi) | **PUT** /vpn.certificate/crl/{name} | Update this specific resource.  Access Group: vpngrp
*VpnCertificateCrlApi* | [**vpnCertificateCrlPost**](docs/classes/Fortigate-FortiOS-CMDB-VpnCertificateCrlApi) | **POST** /vpn.certificate/crl | Create object(s) in this table.  Access Group: vpngrp
*VpnCertificateLocalApi* | [**vpnCertificateLocalGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnCertificateLocalApi) | **GET** /vpn.certificate/local | Select all entries in a CLI table.  Access Group: vpngrp
*VpnCertificateLocalApi* | [**vpnCertificateLocalNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-VpnCertificateLocalApi) | **DELETE** /vpn.certificate/local/{name} | Delete this specific resource.  Access Group: vpngrp
*VpnCertificateLocalApi* | [**vpnCertificateLocalNameGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnCertificateLocalApi) | **GET** /vpn.certificate/local/{name} | Select a specific entry from a CLI table.  Access Group: vpngrp
*VpnCertificateLocalApi* | [**vpnCertificateLocalNamePut**](docs/classes/Fortigate-FortiOS-CMDB-VpnCertificateLocalApi) | **PUT** /vpn.certificate/local/{name} | Update this specific resource.  Access Group: vpngrp
*VpnCertificateLocalApi* | [**vpnCertificateLocalPost**](docs/classes/Fortigate-FortiOS-CMDB-VpnCertificateLocalApi) | **POST** /vpn.certificate/local | Create object(s) in this table.  Access Group: vpngrp
*VpnCertificateOcspServerApi* | [**vpnCertificateOcspServerGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnCertificateOcspServerApi) | **GET** /vpn.certificate/ocsp-server | Select all entries in a CLI table.  Access Group: vpngrp
*VpnCertificateOcspServerApi* | [**vpnCertificateOcspServerNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-VpnCertificateOcspServerApi) | **DELETE** /vpn.certificate/ocsp-server/{name} | Delete this specific resource.  Access Group: vpngrp
*VpnCertificateOcspServerApi* | [**vpnCertificateOcspServerNameGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnCertificateOcspServerApi) | **GET** /vpn.certificate/ocsp-server/{name} | Select a specific entry from a CLI table.  Access Group: vpngrp
*VpnCertificateOcspServerApi* | [**vpnCertificateOcspServerNamePut**](docs/classes/Fortigate-FortiOS-CMDB-VpnCertificateOcspServerApi) | **PUT** /vpn.certificate/ocsp-server/{name} | Update this specific resource.  Access Group: vpngrp
*VpnCertificateOcspServerApi* | [**vpnCertificateOcspServerPost**](docs/classes/Fortigate-FortiOS-CMDB-VpnCertificateOcspServerApi) | **POST** /vpn.certificate/ocsp-server | Create object(s) in this table.  Access Group: vpngrp
*VpnCertificateRemoteApi* | [**vpnCertificateRemoteGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnCertificateRemoteApi) | **GET** /vpn.certificate/remote | Select all entries in a CLI table.  Access Group: vpngrp
*VpnCertificateRemoteApi* | [**vpnCertificateRemoteNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-VpnCertificateRemoteApi) | **DELETE** /vpn.certificate/remote/{name} | Delete this specific resource.  Access Group: vpngrp
*VpnCertificateRemoteApi* | [**vpnCertificateRemoteNameGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnCertificateRemoteApi) | **GET** /vpn.certificate/remote/{name} | Select a specific entry from a CLI table.  Access Group: vpngrp
*VpnCertificateRemoteApi* | [**vpnCertificateRemoteNamePut**](docs/classes/Fortigate-FortiOS-CMDB-VpnCertificateRemoteApi) | **PUT** /vpn.certificate/remote/{name} | Update this specific resource.  Access Group: vpngrp
*VpnCertificateRemoteApi* | [**vpnCertificateRemotePost**](docs/classes/Fortigate-FortiOS-CMDB-VpnCertificateRemoteApi) | **POST** /vpn.certificate/remote | Create object(s) in this table.  Access Group: vpngrp
*VpnCertificateSettingApi* | [**vpnCertificateSettingGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnCertificateSettingApi) | **GET** /vpn.certificate/setting | Select all entries in a CLI table.  Access Group: vpngrp
*VpnCertificateSettingApi* | [**vpnCertificateSettingPut**](docs/classes/Fortigate-FortiOS-CMDB-VpnCertificateSettingApi) | **PUT** /vpn.certificate/setting | Update this specific resource.  Access Group: vpngrp
*VpnIpsecConcentratorApi* | [**vpnIpsecConcentratorGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecConcentratorApi) | **GET** /vpn.ipsec/concentrator | Select all entries in a CLI table.  Access Group: vpngrp
*VpnIpsecConcentratorApi* | [**vpnIpsecConcentratorNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecConcentratorApi) | **DELETE** /vpn.ipsec/concentrator/{name} | Delete this specific resource.  Access Group: vpngrp
*VpnIpsecConcentratorApi* | [**vpnIpsecConcentratorNameGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecConcentratorApi) | **GET** /vpn.ipsec/concentrator/{name} | Select a specific entry from a CLI table.  Access Group: vpngrp
*VpnIpsecConcentratorApi* | [**vpnIpsecConcentratorNamePut**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecConcentratorApi) | **PUT** /vpn.ipsec/concentrator/{name} | Update this specific resource.  Access Group: vpngrp
*VpnIpsecConcentratorApi* | [**vpnIpsecConcentratorPost**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecConcentratorApi) | **POST** /vpn.ipsec/concentrator | Create object(s) in this table.  Access Group: vpngrp
*VpnIpsecForticlientApi* | [**vpnIpsecForticlientGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecForticlientApi) | **GET** /vpn.ipsec/forticlient | Select all entries in a CLI table.  Access Group: vpngrp
*VpnIpsecForticlientApi* | [**vpnIpsecForticlientPost**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecForticlientApi) | **POST** /vpn.ipsec/forticlient | Create object(s) in this table.  Access Group: vpngrp
*VpnIpsecForticlientApi* | [**vpnIpsecForticlientRealmDelete**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecForticlientApi) | **DELETE** /vpn.ipsec/forticlient/{realm} | Delete this specific resource.  Access Group: vpngrp
*VpnIpsecForticlientApi* | [**vpnIpsecForticlientRealmGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecForticlientApi) | **GET** /vpn.ipsec/forticlient/{realm} | Select a specific entry from a CLI table.  Access Group: vpngrp
*VpnIpsecForticlientApi* | [**vpnIpsecForticlientRealmPut**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecForticlientApi) | **PUT** /vpn.ipsec/forticlient/{realm} | Update this specific resource.  Access Group: vpngrp
*VpnIpsecManualkeyApi* | [**vpnIpsecManualkeyGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecManualkeyApi) | **GET** /vpn.ipsec/manualkey | Select all entries in a CLI table.  Access Group: vpngrp
*VpnIpsecManualkeyApi* | [**vpnIpsecManualkeyNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecManualkeyApi) | **DELETE** /vpn.ipsec/manualkey/{name} | Delete this specific resource.  Access Group: vpngrp
*VpnIpsecManualkeyApi* | [**vpnIpsecManualkeyNameGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecManualkeyApi) | **GET** /vpn.ipsec/manualkey/{name} | Select a specific entry from a CLI table.  Access Group: vpngrp
*VpnIpsecManualkeyApi* | [**vpnIpsecManualkeyNamePut**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecManualkeyApi) | **PUT** /vpn.ipsec/manualkey/{name} | Update this specific resource.  Access Group: vpngrp
*VpnIpsecManualkeyApi* | [**vpnIpsecManualkeyPost**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecManualkeyApi) | **POST** /vpn.ipsec/manualkey | Create object(s) in this table.  Access Group: vpngrp
*VpnIpsecManualkeyInterfaceApi* | [**vpnIpsecManualkeyInterfaceGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecManualkeyInterfaceApi) | **GET** /vpn.ipsec/manualkey-interface | Select all entries in a CLI table.  Access Group: vpngrp
*VpnIpsecManualkeyInterfaceApi* | [**vpnIpsecManualkeyInterfaceNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecManualkeyInterfaceApi) | **DELETE** /vpn.ipsec/manualkey-interface/{name} | Delete this specific resource.  Access Group: vpngrp
*VpnIpsecManualkeyInterfaceApi* | [**vpnIpsecManualkeyInterfaceNameGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecManualkeyInterfaceApi) | **GET** /vpn.ipsec/manualkey-interface/{name} | Select a specific entry from a CLI table.  Access Group: vpngrp
*VpnIpsecManualkeyInterfaceApi* | [**vpnIpsecManualkeyInterfaceNamePut**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecManualkeyInterfaceApi) | **PUT** /vpn.ipsec/manualkey-interface/{name} | Update this specific resource.  Access Group: vpngrp
*VpnIpsecManualkeyInterfaceApi* | [**vpnIpsecManualkeyInterfacePost**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecManualkeyInterfaceApi) | **POST** /vpn.ipsec/manualkey-interface | Create object(s) in this table.  Access Group: vpngrp
*VpnIpsecPhase1Api* | [**vpnIpsecPhase1Get**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecPhase1Api) | **GET** /vpn.ipsec/phase1 | Select all entries in a CLI table.  Access Group: vpngrp
*VpnIpsecPhase1Api* | [**vpnIpsecPhase1NameDelete**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecPhase1Api) | **DELETE** /vpn.ipsec/phase1/{name} | Delete this specific resource.  Access Group: vpngrp
*VpnIpsecPhase1Api* | [**vpnIpsecPhase1NameGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecPhase1Api) | **GET** /vpn.ipsec/phase1/{name} | Select a specific entry from a CLI table.  Access Group: vpngrp
*VpnIpsecPhase1Api* | [**vpnIpsecPhase1NamePut**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecPhase1Api) | **PUT** /vpn.ipsec/phase1/{name} | Update this specific resource.  Access Group: vpngrp
*VpnIpsecPhase1Api* | [**vpnIpsecPhase1Post**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecPhase1Api) | **POST** /vpn.ipsec/phase1 | Create object(s) in this table.  Access Group: vpngrp
*VpnIpsecPhase1InterfaceApi* | [**vpnIpsecPhase1InterfaceGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecPhase1InterfaceApi) | **GET** /vpn.ipsec/phase1-interface | Select all entries in a CLI table.  Access Group: vpngrp
*VpnIpsecPhase1InterfaceApi* | [**vpnIpsecPhase1InterfaceNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecPhase1InterfaceApi) | **DELETE** /vpn.ipsec/phase1-interface/{name} | Delete this specific resource.  Access Group: vpngrp
*VpnIpsecPhase1InterfaceApi* | [**vpnIpsecPhase1InterfaceNameGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecPhase1InterfaceApi) | **GET** /vpn.ipsec/phase1-interface/{name} | Select a specific entry from a CLI table.  Access Group: vpngrp
*VpnIpsecPhase1InterfaceApi* | [**vpnIpsecPhase1InterfaceNamePut**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecPhase1InterfaceApi) | **PUT** /vpn.ipsec/phase1-interface/{name} | Update this specific resource.  Access Group: vpngrp
*VpnIpsecPhase1InterfaceApi* | [**vpnIpsecPhase1InterfacePost**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecPhase1InterfaceApi) | **POST** /vpn.ipsec/phase1-interface | Create object(s) in this table.  Access Group: vpngrp
*VpnIpsecPhase2Api* | [**vpnIpsecPhase2Get**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecPhase2Api) | **GET** /vpn.ipsec/phase2 | Select all entries in a CLI table.  Access Group: vpngrp
*VpnIpsecPhase2Api* | [**vpnIpsecPhase2NameDelete**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecPhase2Api) | **DELETE** /vpn.ipsec/phase2/{name} | Delete this specific resource.  Access Group: vpngrp
*VpnIpsecPhase2Api* | [**vpnIpsecPhase2NameGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecPhase2Api) | **GET** /vpn.ipsec/phase2/{name} | Select a specific entry from a CLI table.  Access Group: vpngrp
*VpnIpsecPhase2Api* | [**vpnIpsecPhase2NamePut**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecPhase2Api) | **PUT** /vpn.ipsec/phase2/{name} | Update this specific resource.  Access Group: vpngrp
*VpnIpsecPhase2Api* | [**vpnIpsecPhase2Post**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecPhase2Api) | **POST** /vpn.ipsec/phase2 | Create object(s) in this table.  Access Group: vpngrp
*VpnIpsecPhase2InterfaceApi* | [**vpnIpsecPhase2InterfaceGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecPhase2InterfaceApi) | **GET** /vpn.ipsec/phase2-interface | Select all entries in a CLI table.  Access Group: vpngrp
*VpnIpsecPhase2InterfaceApi* | [**vpnIpsecPhase2InterfaceNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecPhase2InterfaceApi) | **DELETE** /vpn.ipsec/phase2-interface/{name} | Delete this specific resource.  Access Group: vpngrp
*VpnIpsecPhase2InterfaceApi* | [**vpnIpsecPhase2InterfaceNameGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecPhase2InterfaceApi) | **GET** /vpn.ipsec/phase2-interface/{name} | Select a specific entry from a CLI table.  Access Group: vpngrp
*VpnIpsecPhase2InterfaceApi* | [**vpnIpsecPhase2InterfaceNamePut**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecPhase2InterfaceApi) | **PUT** /vpn.ipsec/phase2-interface/{name} | Update this specific resource.  Access Group: vpngrp
*VpnIpsecPhase2InterfaceApi* | [**vpnIpsecPhase2InterfacePost**](docs/classes/Fortigate-FortiOS-CMDB-VpnIpsecPhase2InterfaceApi) | **POST** /vpn.ipsec/phase2-interface | Create object(s) in this table.  Access Group: vpngrp
*VpnL2tpApi* | [**vpnL2tpGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnL2tpApi) | **GET** /vpn/l2tp | Select all entries in a CLI table.  Access Group: vpngrp
*VpnL2tpApi* | [**vpnL2tpPut**](docs/classes/Fortigate-FortiOS-CMDB-VpnL2tpApi) | **PUT** /vpn/l2tp | Update this specific resource.  Access Group: vpngrp
*VpnOcvpnApi* | [**vpnOcvpnGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnOcvpnApi) | **GET** /vpn/ocvpn | Select all entries in a CLI table.  Access Group: vpngrp
*VpnOcvpnApi* | [**vpnOcvpnPut**](docs/classes/Fortigate-FortiOS-CMDB-VpnOcvpnApi) | **PUT** /vpn/ocvpn | Update this specific resource.  Access Group: vpngrp
*VpnPptpApi* | [**vpnPptpGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnPptpApi) | **GET** /vpn/pptp | Select all entries in a CLI table.  Access Group: vpngrp
*VpnPptpApi* | [**vpnPptpPut**](docs/classes/Fortigate-FortiOS-CMDB-VpnPptpApi) | **PUT** /vpn/pptp | Update this specific resource.  Access Group: vpngrp
*VpnSslSettingsApi* | [**vpnSslSettingsGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnSslSettingsApi) | **GET** /vpn.ssl/settings | Select all entries in a CLI table.  Access Group: vpngrp
*VpnSslSettingsApi* | [**vpnSslSettingsPut**](docs/classes/Fortigate-FortiOS-CMDB-VpnSslSettingsApi) | **PUT** /vpn.ssl/settings | Update this specific resource.  Access Group: vpngrp
*VpnSslWebHostCheckSoftwareApi* | [**vpnSslWebHostCheckSoftwareGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnSslWebHostCheckSoftwareApi) | **GET** /vpn.ssl.web/host-check-software | Select all entries in a CLI table.  Access Group: vpngrp
*VpnSslWebHostCheckSoftwareApi* | [**vpnSslWebHostCheckSoftwareNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-VpnSslWebHostCheckSoftwareApi) | **DELETE** /vpn.ssl.web/host-check-software/{name} | Delete this specific resource.  Access Group: vpngrp
*VpnSslWebHostCheckSoftwareApi* | [**vpnSslWebHostCheckSoftwareNameGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnSslWebHostCheckSoftwareApi) | **GET** /vpn.ssl.web/host-check-software/{name} | Select a specific entry from a CLI table.  Access Group: vpngrp
*VpnSslWebHostCheckSoftwareApi* | [**vpnSslWebHostCheckSoftwareNamePut**](docs/classes/Fortigate-FortiOS-CMDB-VpnSslWebHostCheckSoftwareApi) | **PUT** /vpn.ssl.web/host-check-software/{name} | Update this specific resource.  Access Group: vpngrp
*VpnSslWebHostCheckSoftwareApi* | [**vpnSslWebHostCheckSoftwarePost**](docs/classes/Fortigate-FortiOS-CMDB-VpnSslWebHostCheckSoftwareApi) | **POST** /vpn.ssl.web/host-check-software | Create object(s) in this table.  Access Group: vpngrp
*VpnSslWebPortalApi* | [**vpnSslWebPortalGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnSslWebPortalApi) | **GET** /vpn.ssl.web/portal | Select all entries in a CLI table.  Access Group: vpngrp
*VpnSslWebPortalApi* | [**vpnSslWebPortalNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-VpnSslWebPortalApi) | **DELETE** /vpn.ssl.web/portal/{name} | Delete this specific resource.  Access Group: vpngrp
*VpnSslWebPortalApi* | [**vpnSslWebPortalNameGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnSslWebPortalApi) | **GET** /vpn.ssl.web/portal/{name} | Select a specific entry from a CLI table.  Access Group: vpngrp
*VpnSslWebPortalApi* | [**vpnSslWebPortalNamePut**](docs/classes/Fortigate-FortiOS-CMDB-VpnSslWebPortalApi) | **PUT** /vpn.ssl.web/portal/{name} | Update this specific resource.  Access Group: vpngrp
*VpnSslWebPortalApi* | [**vpnSslWebPortalPost**](docs/classes/Fortigate-FortiOS-CMDB-VpnSslWebPortalApi) | **POST** /vpn.ssl.web/portal | Create object(s) in this table.  Access Group: vpngrp
*VpnSslWebRealmApi* | [**vpnSslWebRealmGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnSslWebRealmApi) | **GET** /vpn.ssl.web/realm | Select all entries in a CLI table.  Access Group: vpngrp
*VpnSslWebRealmApi* | [**vpnSslWebRealmPost**](docs/classes/Fortigate-FortiOS-CMDB-VpnSslWebRealmApi) | **POST** /vpn.ssl.web/realm | Create object(s) in this table.  Access Group: vpngrp
*VpnSslWebRealmApi* | [**vpnSslWebRealmUrlPathDelete**](docs/classes/Fortigate-FortiOS-CMDB-VpnSslWebRealmApi) | **DELETE** /vpn.ssl.web/realm/{url-path} | Delete this specific resource.  Access Group: vpngrp
*VpnSslWebRealmApi* | [**vpnSslWebRealmUrlPathGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnSslWebRealmApi) | **GET** /vpn.ssl.web/realm/{url-path} | Select a specific entry from a CLI table.  Access Group: vpngrp
*VpnSslWebRealmApi* | [**vpnSslWebRealmUrlPathPut**](docs/classes/Fortigate-FortiOS-CMDB-VpnSslWebRealmApi) | **PUT** /vpn.ssl.web/realm/{url-path} | Update this specific resource.  Access Group: vpngrp
*VpnSslWebUserBookmarkApi* | [**vpnSslWebUserBookmarkGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnSslWebUserBookmarkApi) | **GET** /vpn.ssl.web/user-bookmark | Select all entries in a CLI table.  Access Group: vpngrp
*VpnSslWebUserBookmarkApi* | [**vpnSslWebUserBookmarkNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-VpnSslWebUserBookmarkApi) | **DELETE** /vpn.ssl.web/user-bookmark/{name} | Delete this specific resource.  Access Group: vpngrp
*VpnSslWebUserBookmarkApi* | [**vpnSslWebUserBookmarkNameGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnSslWebUserBookmarkApi) | **GET** /vpn.ssl.web/user-bookmark/{name} | Select a specific entry from a CLI table.  Access Group: vpngrp
*VpnSslWebUserBookmarkApi* | [**vpnSslWebUserBookmarkNamePut**](docs/classes/Fortigate-FortiOS-CMDB-VpnSslWebUserBookmarkApi) | **PUT** /vpn.ssl.web/user-bookmark/{name} | Update this specific resource.  Access Group: vpngrp
*VpnSslWebUserBookmarkApi* | [**vpnSslWebUserBookmarkPost**](docs/classes/Fortigate-FortiOS-CMDB-VpnSslWebUserBookmarkApi) | **POST** /vpn.ssl.web/user-bookmark | Create object(s) in this table.  Access Group: vpngrp
*VpnSslWebUserGroupBookmarkApi* | [**vpnSslWebUserGroupBookmarkGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnSslWebUserGroupBookmarkApi) | **GET** /vpn.ssl.web/user-group-bookmark | Select all entries in a CLI table.  Access Group: vpngrp
*VpnSslWebUserGroupBookmarkApi* | [**vpnSslWebUserGroupBookmarkNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-VpnSslWebUserGroupBookmarkApi) | **DELETE** /vpn.ssl.web/user-group-bookmark/{name} | Delete this specific resource.  Access Group: vpngrp
*VpnSslWebUserGroupBookmarkApi* | [**vpnSslWebUserGroupBookmarkNameGet**](docs/classes/Fortigate-FortiOS-CMDB-VpnSslWebUserGroupBookmarkApi) | **GET** /vpn.ssl.web/user-group-bookmark/{name} | Select a specific entry from a CLI table.  Access Group: vpngrp
*VpnSslWebUserGroupBookmarkApi* | [**vpnSslWebUserGroupBookmarkNamePut**](docs/classes/Fortigate-FortiOS-CMDB-VpnSslWebUserGroupBookmarkApi) | **PUT** /vpn.ssl.web/user-group-bookmark/{name} | Update this specific resource.  Access Group: vpngrp
*VpnSslWebUserGroupBookmarkApi* | [**vpnSslWebUserGroupBookmarkPost**](docs/classes/Fortigate-FortiOS-CMDB-VpnSslWebUserGroupBookmarkApi) | **POST** /vpn.ssl.web/user-group-bookmark | Create object(s) in this table.  Access Group: vpngrp
*WafMainClassApi* | [**wafMainClassGet**](docs/classes/Fortigate-FortiOS-CMDB-WafMainClassApi) | **GET** /waf/main-class | Select all entries in a CLI table.  Access Group: utmgrp
*WafMainClassApi* | [**wafMainClassIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-WafMainClassApi) | **DELETE** /waf/main-class/{id} | Delete this specific resource.  Access Group: utmgrp
*WafMainClassApi* | [**wafMainClassIdGet**](docs/classes/Fortigate-FortiOS-CMDB-WafMainClassApi) | **GET** /waf/main-class/{id} | Select a specific entry from a CLI table.  Access Group: utmgrp
*WafMainClassApi* | [**wafMainClassIdPut**](docs/classes/Fortigate-FortiOS-CMDB-WafMainClassApi) | **PUT** /waf/main-class/{id} | Update this specific resource.  Access Group: utmgrp
*WafMainClassApi* | [**wafMainClassPost**](docs/classes/Fortigate-FortiOS-CMDB-WafMainClassApi) | **POST** /waf/main-class | Create object(s) in this table.  Access Group: utmgrp
*WafProfileApi* | [**wafProfileGet**](docs/classes/Fortigate-FortiOS-CMDB-WafProfileApi) | **GET** /waf/profile | Select all entries in a CLI table.  Access Group: utmgrp
*WafProfileApi* | [**wafProfileNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WafProfileApi) | **DELETE** /waf/profile/{name} | Delete this specific resource.  Access Group: utmgrp
*WafProfileApi* | [**wafProfileNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WafProfileApi) | **GET** /waf/profile/{name} | Select a specific entry from a CLI table.  Access Group: utmgrp
*WafProfileApi* | [**wafProfileNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WafProfileApi) | **PUT** /waf/profile/{name} | Update this specific resource.  Access Group: utmgrp
*WafProfileApi* | [**wafProfilePost**](docs/classes/Fortigate-FortiOS-CMDB-WafProfileApi) | **POST** /waf/profile | Create object(s) in this table.  Access Group: utmgrp
*WafSignatureApi* | [**wafSignatureGet**](docs/classes/Fortigate-FortiOS-CMDB-WafSignatureApi) | **GET** /waf/signature | Select all entries in a CLI table.  Access Group: utmgrp
*WafSignatureApi* | [**wafSignatureIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-WafSignatureApi) | **DELETE** /waf/signature/{id} | Delete this specific resource.  Access Group: utmgrp
*WafSignatureApi* | [**wafSignatureIdGet**](docs/classes/Fortigate-FortiOS-CMDB-WafSignatureApi) | **GET** /waf/signature/{id} | Select a specific entry from a CLI table.  Access Group: utmgrp
*WafSignatureApi* | [**wafSignatureIdPut**](docs/classes/Fortigate-FortiOS-CMDB-WafSignatureApi) | **PUT** /waf/signature/{id} | Update this specific resource.  Access Group: utmgrp
*WafSignatureApi* | [**wafSignaturePost**](docs/classes/Fortigate-FortiOS-CMDB-WafSignatureApi) | **POST** /waf/signature | Create object(s) in this table.  Access Group: utmgrp
*WanoptAuthGroupApi* | [**wanoptAuthGroupGet**](docs/classes/Fortigate-FortiOS-CMDB-WanoptAuthGroupApi) | **GET** /wanopt/auth-group | Select all entries in a CLI table.  Access Group: wanoptgrp
*WanoptAuthGroupApi* | [**wanoptAuthGroupNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WanoptAuthGroupApi) | **DELETE** /wanopt/auth-group/{name} | Delete this specific resource.  Access Group: wanoptgrp
*WanoptAuthGroupApi* | [**wanoptAuthGroupNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WanoptAuthGroupApi) | **GET** /wanopt/auth-group/{name} | Select a specific entry from a CLI table.  Access Group: wanoptgrp
*WanoptAuthGroupApi* | [**wanoptAuthGroupNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WanoptAuthGroupApi) | **PUT** /wanopt/auth-group/{name} | Update this specific resource.  Access Group: wanoptgrp
*WanoptAuthGroupApi* | [**wanoptAuthGroupPost**](docs/classes/Fortigate-FortiOS-CMDB-WanoptAuthGroupApi) | **POST** /wanopt/auth-group | Create object(s) in this table.  Access Group: wanoptgrp
*WanoptCacheServiceApi* | [**wanoptCacheServiceGet**](docs/classes/Fortigate-FortiOS-CMDB-WanoptCacheServiceApi) | **GET** /wanopt/cache-service | Select all entries in a CLI table.  Access Group: wanoptgrp
*WanoptCacheServiceApi* | [**wanoptCacheServicePut**](docs/classes/Fortigate-FortiOS-CMDB-WanoptCacheServiceApi) | **PUT** /wanopt/cache-service | Update this specific resource.  Access Group: wanoptgrp
*WanoptContentDeliveryNetworkRuleApi* | [**wanoptContentDeliveryNetworkRuleGet**](docs/classes/Fortigate-FortiOS-CMDB-WanoptContentDeliveryNetworkRuleApi) | **GET** /wanopt/content-delivery-network-rule | Select all entries in a CLI table.  Access Group: wanoptgrp
*WanoptContentDeliveryNetworkRuleApi* | [**wanoptContentDeliveryNetworkRuleNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WanoptContentDeliveryNetworkRuleApi) | **DELETE** /wanopt/content-delivery-network-rule/{name} | Delete this specific resource.  Access Group: wanoptgrp
*WanoptContentDeliveryNetworkRuleApi* | [**wanoptContentDeliveryNetworkRuleNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WanoptContentDeliveryNetworkRuleApi) | **GET** /wanopt/content-delivery-network-rule/{name} | Select a specific entry from a CLI table.  Access Group: wanoptgrp
*WanoptContentDeliveryNetworkRuleApi* | [**wanoptContentDeliveryNetworkRuleNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WanoptContentDeliveryNetworkRuleApi) | **PUT** /wanopt/content-delivery-network-rule/{name} | Update this specific resource.  Access Group: wanoptgrp
*WanoptContentDeliveryNetworkRuleApi* | [**wanoptContentDeliveryNetworkRulePost**](docs/classes/Fortigate-FortiOS-CMDB-WanoptContentDeliveryNetworkRuleApi) | **POST** /wanopt/content-delivery-network-rule | Create object(s) in this table.  Access Group: wanoptgrp
*WanoptPeerApi* | [**wanoptPeerGet**](docs/classes/Fortigate-FortiOS-CMDB-WanoptPeerApi) | **GET** /wanopt/peer | Select all entries in a CLI table.  Access Group: wanoptgrp
*WanoptPeerApi* | [**wanoptPeerPeerHostIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-WanoptPeerApi) | **DELETE** /wanopt/peer/{peer-host-id} | Delete this specific resource.  Access Group: wanoptgrp
*WanoptPeerApi* | [**wanoptPeerPeerHostIdGet**](docs/classes/Fortigate-FortiOS-CMDB-WanoptPeerApi) | **GET** /wanopt/peer/{peer-host-id} | Select a specific entry from a CLI table.  Access Group: wanoptgrp
*WanoptPeerApi* | [**wanoptPeerPeerHostIdPut**](docs/classes/Fortigate-FortiOS-CMDB-WanoptPeerApi) | **PUT** /wanopt/peer/{peer-host-id} | Update this specific resource.  Access Group: wanoptgrp
*WanoptPeerApi* | [**wanoptPeerPost**](docs/classes/Fortigate-FortiOS-CMDB-WanoptPeerApi) | **POST** /wanopt/peer | Create object(s) in this table.  Access Group: wanoptgrp
*WanoptProfileApi* | [**wanoptProfileGet**](docs/classes/Fortigate-FortiOS-CMDB-WanoptProfileApi) | **GET** /wanopt/profile | Select all entries in a CLI table.  Access Group: wanoptgrp
*WanoptProfileApi* | [**wanoptProfileNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WanoptProfileApi) | **DELETE** /wanopt/profile/{name} | Delete this specific resource.  Access Group: wanoptgrp
*WanoptProfileApi* | [**wanoptProfileNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WanoptProfileApi) | **GET** /wanopt/profile/{name} | Select a specific entry from a CLI table.  Access Group: wanoptgrp
*WanoptProfileApi* | [**wanoptProfileNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WanoptProfileApi) | **PUT** /wanopt/profile/{name} | Update this specific resource.  Access Group: wanoptgrp
*WanoptProfileApi* | [**wanoptProfilePost**](docs/classes/Fortigate-FortiOS-CMDB-WanoptProfileApi) | **POST** /wanopt/profile | Create object(s) in this table.  Access Group: wanoptgrp
*WanoptRemoteStorageApi* | [**wanoptRemoteStorageGet**](docs/classes/Fortigate-FortiOS-CMDB-WanoptRemoteStorageApi) | **GET** /wanopt/remote-storage | Select all entries in a CLI table.  Access Group: wanoptgrp
*WanoptRemoteStorageApi* | [**wanoptRemoteStoragePut**](docs/classes/Fortigate-FortiOS-CMDB-WanoptRemoteStorageApi) | **PUT** /wanopt/remote-storage | Update this specific resource.  Access Group: wanoptgrp
*WanoptSettingsApi* | [**wanoptSettingsGet**](docs/classes/Fortigate-FortiOS-CMDB-WanoptSettingsApi) | **GET** /wanopt/settings | Select all entries in a CLI table.  Access Group: wanoptgrp
*WanoptSettingsApi* | [**wanoptSettingsPut**](docs/classes/Fortigate-FortiOS-CMDB-WanoptSettingsApi) | **PUT** /wanopt/settings | Update this specific resource.  Access Group: wanoptgrp
*WanoptWebcacheApi* | [**wanoptWebcacheGet**](docs/classes/Fortigate-FortiOS-CMDB-WanoptWebcacheApi) | **GET** /wanopt/webcache | Select all entries in a CLI table.  Access Group: wanoptgrp
*WanoptWebcacheApi* | [**wanoptWebcachePut**](docs/classes/Fortigate-FortiOS-CMDB-WanoptWebcacheApi) | **PUT** /wanopt/webcache | Update this specific resource.  Access Group: wanoptgrp
*WebProxyDebugUrlApi* | [**webProxyDebugUrlGet**](docs/classes/Fortigate-FortiOS-CMDB-WebProxyDebugUrlApi) | **GET** /web-proxy/debug-url | Select all entries in a CLI table.  Access Group: netgrp
*WebProxyDebugUrlApi* | [**webProxyDebugUrlNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WebProxyDebugUrlApi) | **DELETE** /web-proxy/debug-url/{name} | Delete this specific resource.  Access Group: netgrp
*WebProxyDebugUrlApi* | [**webProxyDebugUrlNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WebProxyDebugUrlApi) | **GET** /web-proxy/debug-url/{name} | Select a specific entry from a CLI table.  Access Group: netgrp
*WebProxyDebugUrlApi* | [**webProxyDebugUrlNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WebProxyDebugUrlApi) | **PUT** /web-proxy/debug-url/{name} | Update this specific resource.  Access Group: netgrp
*WebProxyDebugUrlApi* | [**webProxyDebugUrlPost**](docs/classes/Fortigate-FortiOS-CMDB-WebProxyDebugUrlApi) | **POST** /web-proxy/debug-url | Create object(s) in this table.  Access Group: netgrp
*WebProxyExplicitApi* | [**webProxyExplicitGet**](docs/classes/Fortigate-FortiOS-CMDB-WebProxyExplicitApi) | **GET** /web-proxy/explicit | Select all entries in a CLI table.  Access Group: netgrp
*WebProxyExplicitApi* | [**webProxyExplicitPut**](docs/classes/Fortigate-FortiOS-CMDB-WebProxyExplicitApi) | **PUT** /web-proxy/explicit | Update this specific resource.  Access Group: netgrp
*WebProxyForwardServerApi* | [**webProxyForwardServerGet**](docs/classes/Fortigate-FortiOS-CMDB-WebProxyForwardServerApi) | **GET** /web-proxy/forward-server | Select all entries in a CLI table.  Access Group: netgrp
*WebProxyForwardServerApi* | [**webProxyForwardServerNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WebProxyForwardServerApi) | **DELETE** /web-proxy/forward-server/{name} | Delete this specific resource.  Access Group: netgrp
*WebProxyForwardServerApi* | [**webProxyForwardServerNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WebProxyForwardServerApi) | **GET** /web-proxy/forward-server/{name} | Select a specific entry from a CLI table.  Access Group: netgrp
*WebProxyForwardServerApi* | [**webProxyForwardServerNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WebProxyForwardServerApi) | **PUT** /web-proxy/forward-server/{name} | Update this specific resource.  Access Group: netgrp
*WebProxyForwardServerApi* | [**webProxyForwardServerPost**](docs/classes/Fortigate-FortiOS-CMDB-WebProxyForwardServerApi) | **POST** /web-proxy/forward-server | Create object(s) in this table.  Access Group: netgrp
*WebProxyForwardServerGroupApi* | [**webProxyForwardServerGroupGet**](docs/classes/Fortigate-FortiOS-CMDB-WebProxyForwardServerGroupApi) | **GET** /web-proxy/forward-server-group | Select all entries in a CLI table.  Access Group: netgrp
*WebProxyForwardServerGroupApi* | [**webProxyForwardServerGroupNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WebProxyForwardServerGroupApi) | **DELETE** /web-proxy/forward-server-group/{name} | Delete this specific resource.  Access Group: netgrp
*WebProxyForwardServerGroupApi* | [**webProxyForwardServerGroupNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WebProxyForwardServerGroupApi) | **GET** /web-proxy/forward-server-group/{name} | Select a specific entry from a CLI table.  Access Group: netgrp
*WebProxyForwardServerGroupApi* | [**webProxyForwardServerGroupNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WebProxyForwardServerGroupApi) | **PUT** /web-proxy/forward-server-group/{name} | Update this specific resource.  Access Group: netgrp
*WebProxyForwardServerGroupApi* | [**webProxyForwardServerGroupPost**](docs/classes/Fortigate-FortiOS-CMDB-WebProxyForwardServerGroupApi) | **POST** /web-proxy/forward-server-group | Create object(s) in this table.  Access Group: netgrp
*WebProxyGlobalApi* | [**webProxyGlobalGet**](docs/classes/Fortigate-FortiOS-CMDB-WebProxyGlobalApi) | **GET** /web-proxy/global | Select all entries in a CLI table.  Access Group: netgrp
*WebProxyGlobalApi* | [**webProxyGlobalPut**](docs/classes/Fortigate-FortiOS-CMDB-WebProxyGlobalApi) | **PUT** /web-proxy/global | Update this specific resource.  Access Group: netgrp
*WebProxyProfileApi* | [**webProxyProfileGet**](docs/classes/Fortigate-FortiOS-CMDB-WebProxyProfileApi) | **GET** /web-proxy/profile | Select all entries in a CLI table.  Access Group: netgrp
*WebProxyProfileApi* | [**webProxyProfileNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WebProxyProfileApi) | **DELETE** /web-proxy/profile/{name} | Delete this specific resource.  Access Group: netgrp
*WebProxyProfileApi* | [**webProxyProfileNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WebProxyProfileApi) | **GET** /web-proxy/profile/{name} | Select a specific entry from a CLI table.  Access Group: netgrp
*WebProxyProfileApi* | [**webProxyProfileNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WebProxyProfileApi) | **PUT** /web-proxy/profile/{name} | Update this specific resource.  Access Group: netgrp
*WebProxyProfileApi* | [**webProxyProfilePost**](docs/classes/Fortigate-FortiOS-CMDB-WebProxyProfileApi) | **POST** /web-proxy/profile | Create object(s) in this table.  Access Group: netgrp
*WebProxyUrlMatchApi* | [**webProxyUrlMatchGet**](docs/classes/Fortigate-FortiOS-CMDB-WebProxyUrlMatchApi) | **GET** /web-proxy/url-match | Select all entries in a CLI table.  Access Group: netgrp
*WebProxyUrlMatchApi* | [**webProxyUrlMatchNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WebProxyUrlMatchApi) | **DELETE** /web-proxy/url-match/{name} | Delete this specific resource.  Access Group: netgrp
*WebProxyUrlMatchApi* | [**webProxyUrlMatchNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WebProxyUrlMatchApi) | **GET** /web-proxy/url-match/{name} | Select a specific entry from a CLI table.  Access Group: netgrp
*WebProxyUrlMatchApi* | [**webProxyUrlMatchNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WebProxyUrlMatchApi) | **PUT** /web-proxy/url-match/{name} | Update this specific resource.  Access Group: netgrp
*WebProxyUrlMatchApi* | [**webProxyUrlMatchPost**](docs/classes/Fortigate-FortiOS-CMDB-WebProxyUrlMatchApi) | **POST** /web-proxy/url-match | Create object(s) in this table.  Access Group: netgrp
*WebProxyWispApi* | [**webProxyWispGet**](docs/classes/Fortigate-FortiOS-CMDB-WebProxyWispApi) | **GET** /web-proxy/wisp | Select all entries in a CLI table.  Access Group: netgrp
*WebProxyWispApi* | [**webProxyWispNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WebProxyWispApi) | **DELETE** /web-proxy/wisp/{name} | Delete this specific resource.  Access Group: netgrp
*WebProxyWispApi* | [**webProxyWispNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WebProxyWispApi) | **GET** /web-proxy/wisp/{name} | Select a specific entry from a CLI table.  Access Group: netgrp
*WebProxyWispApi* | [**webProxyWispNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WebProxyWispApi) | **PUT** /web-proxy/wisp/{name} | Update this specific resource.  Access Group: netgrp
*WebProxyWispApi* | [**webProxyWispPost**](docs/classes/Fortigate-FortiOS-CMDB-WebProxyWispApi) | **POST** /web-proxy/wisp | Create object(s) in this table.  Access Group: netgrp
*WebfilterContentApi* | [**webfilterContentGet**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterContentApi) | **GET** /webfilter/content | Select all entries in a CLI table.  Access Group: utmgrp
*WebfilterContentApi* | [**webfilterContentIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterContentApi) | **DELETE** /webfilter/content/{id} | Delete this specific resource.  Access Group: utmgrp
*WebfilterContentApi* | [**webfilterContentIdGet**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterContentApi) | **GET** /webfilter/content/{id} | Select a specific entry from a CLI table.  Access Group: utmgrp
*WebfilterContentApi* | [**webfilterContentIdPut**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterContentApi) | **PUT** /webfilter/content/{id} | Update this specific resource.  Access Group: utmgrp
*WebfilterContentApi* | [**webfilterContentPost**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterContentApi) | **POST** /webfilter/content | Create object(s) in this table.  Access Group: utmgrp
*WebfilterContentHeaderApi* | [**webfilterContentHeaderGet**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterContentHeaderApi) | **GET** /webfilter/content-header | Select all entries in a CLI table.  Access Group: utmgrp
*WebfilterContentHeaderApi* | [**webfilterContentHeaderIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterContentHeaderApi) | **DELETE** /webfilter/content-header/{id} | Delete this specific resource.  Access Group: utmgrp
*WebfilterContentHeaderApi* | [**webfilterContentHeaderIdGet**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterContentHeaderApi) | **GET** /webfilter/content-header/{id} | Select a specific entry from a CLI table.  Access Group: utmgrp
*WebfilterContentHeaderApi* | [**webfilterContentHeaderIdPut**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterContentHeaderApi) | **PUT** /webfilter/content-header/{id} | Update this specific resource.  Access Group: utmgrp
*WebfilterContentHeaderApi* | [**webfilterContentHeaderPost**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterContentHeaderApi) | **POST** /webfilter/content-header | Create object(s) in this table.  Access Group: utmgrp
*WebfilterFortiguardApi* | [**webfilterFortiguardGet**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterFortiguardApi) | **GET** /webfilter/fortiguard | Select all entries in a CLI table.  Access Group: utmgrp
*WebfilterFortiguardApi* | [**webfilterFortiguardPut**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterFortiguardApi) | **PUT** /webfilter/fortiguard | Update this specific resource.  Access Group: utmgrp
*WebfilterFtgdLocalCatApi* | [**webfilterFtgdLocalCatDescDelete**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterFtgdLocalCatApi) | **DELETE** /webfilter/ftgd-local-cat/{desc} | Delete this specific resource.  Access Group: utmgrp
*WebfilterFtgdLocalCatApi* | [**webfilterFtgdLocalCatDescGet**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterFtgdLocalCatApi) | **GET** /webfilter/ftgd-local-cat/{desc} | Select a specific entry from a CLI table.  Access Group: utmgrp
*WebfilterFtgdLocalCatApi* | [**webfilterFtgdLocalCatDescPut**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterFtgdLocalCatApi) | **PUT** /webfilter/ftgd-local-cat/{desc} | Update this specific resource.  Access Group: utmgrp
*WebfilterFtgdLocalCatApi* | [**webfilterFtgdLocalCatGet**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterFtgdLocalCatApi) | **GET** /webfilter/ftgd-local-cat | Select all entries in a CLI table.  Access Group: utmgrp
*WebfilterFtgdLocalCatApi* | [**webfilterFtgdLocalCatPost**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterFtgdLocalCatApi) | **POST** /webfilter/ftgd-local-cat | Create object(s) in this table.  Access Group: utmgrp
*WebfilterFtgdLocalRatingApi* | [**webfilterFtgdLocalRatingGet**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterFtgdLocalRatingApi) | **GET** /webfilter/ftgd-local-rating | Select all entries in a CLI table.  Access Group: utmgrp
*WebfilterFtgdLocalRatingApi* | [**webfilterFtgdLocalRatingPost**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterFtgdLocalRatingApi) | **POST** /webfilter/ftgd-local-rating | Create object(s) in this table.  Access Group: utmgrp
*WebfilterFtgdLocalRatingApi* | [**webfilterFtgdLocalRatingUrlDelete**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterFtgdLocalRatingApi) | **DELETE** /webfilter/ftgd-local-rating/{url} | Delete this specific resource.  Access Group: utmgrp
*WebfilterFtgdLocalRatingApi* | [**webfilterFtgdLocalRatingUrlGet**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterFtgdLocalRatingApi) | **GET** /webfilter/ftgd-local-rating/{url} | Select a specific entry from a CLI table.  Access Group: utmgrp
*WebfilterFtgdLocalRatingApi* | [**webfilterFtgdLocalRatingUrlPut**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterFtgdLocalRatingApi) | **PUT** /webfilter/ftgd-local-rating/{url} | Update this specific resource.  Access Group: utmgrp
*WebfilterIpsUrlfilterCacheSettingApi* | [**webfilterIpsUrlfilterCacheSettingGet**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterIpsUrlfilterCacheSettingApi) | **GET** /webfilter/ips-urlfilter-cache-setting | Select all entries in a CLI table.  Access Group: utmgrp
*WebfilterIpsUrlfilterCacheSettingApi* | [**webfilterIpsUrlfilterCacheSettingPut**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterIpsUrlfilterCacheSettingApi) | **PUT** /webfilter/ips-urlfilter-cache-setting | Update this specific resource.  Access Group: utmgrp
*WebfilterIpsUrlfilterSettingApi* | [**webfilterIpsUrlfilterSettingGet**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterIpsUrlfilterSettingApi) | **GET** /webfilter/ips-urlfilter-setting | Select all entries in a CLI table.  Access Group: utmgrp
*WebfilterIpsUrlfilterSettingApi* | [**webfilterIpsUrlfilterSettingPut**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterIpsUrlfilterSettingApi) | **PUT** /webfilter/ips-urlfilter-setting | Update this specific resource.  Access Group: utmgrp
*WebfilterIpsUrlfilterSetting6Api* | [**webfilterIpsUrlfilterSetting6Get**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterIpsUrlfilterSetting6Api) | **GET** /webfilter/ips-urlfilter-setting6 | Select all entries in a CLI table.  Access Group: utmgrp
*WebfilterIpsUrlfilterSetting6Api* | [**webfilterIpsUrlfilterSetting6Put**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterIpsUrlfilterSetting6Api) | **PUT** /webfilter/ips-urlfilter-setting6 | Update this specific resource.  Access Group: utmgrp
*WebfilterOverrideApi* | [**webfilterOverrideGet**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterOverrideApi) | **GET** /webfilter/override | Select all entries in a CLI table.  Access Group: utmgrp
*WebfilterOverrideApi* | [**webfilterOverrideIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterOverrideApi) | **DELETE** /webfilter/override/{id} | Delete this specific resource.  Access Group: utmgrp
*WebfilterOverrideApi* | [**webfilterOverrideIdGet**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterOverrideApi) | **GET** /webfilter/override/{id} | Select a specific entry from a CLI table.  Access Group: utmgrp
*WebfilterOverrideApi* | [**webfilterOverrideIdPut**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterOverrideApi) | **PUT** /webfilter/override/{id} | Update this specific resource.  Access Group: utmgrp
*WebfilterOverrideApi* | [**webfilterOverridePost**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterOverrideApi) | **POST** /webfilter/override | Create object(s) in this table.  Access Group: utmgrp
*WebfilterProfileApi* | [**webfilterProfileGet**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterProfileApi) | **GET** /webfilter/profile | Select all entries in a CLI table.  Access Group: utmgrp
*WebfilterProfileApi* | [**webfilterProfileNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterProfileApi) | **DELETE** /webfilter/profile/{name} | Delete this specific resource.  Access Group: utmgrp
*WebfilterProfileApi* | [**webfilterProfileNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterProfileApi) | **GET** /webfilter/profile/{name} | Select a specific entry from a CLI table.  Access Group: utmgrp
*WebfilterProfileApi* | [**webfilterProfileNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterProfileApi) | **PUT** /webfilter/profile/{name} | Update this specific resource.  Access Group: utmgrp
*WebfilterProfileApi* | [**webfilterProfilePost**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterProfileApi) | **POST** /webfilter/profile | Create object(s) in this table.  Access Group: utmgrp
*WebfilterSearchEngineApi* | [**webfilterSearchEngineGet**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterSearchEngineApi) | **GET** /webfilter/search-engine | Select all entries in a CLI table.  Access Group: utmgrp
*WebfilterSearchEngineApi* | [**webfilterSearchEngineNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterSearchEngineApi) | **DELETE** /webfilter/search-engine/{name} | Delete this specific resource.  Access Group: utmgrp
*WebfilterSearchEngineApi* | [**webfilterSearchEngineNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterSearchEngineApi) | **GET** /webfilter/search-engine/{name} | Select a specific entry from a CLI table.  Access Group: utmgrp
*WebfilterSearchEngineApi* | [**webfilterSearchEngineNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterSearchEngineApi) | **PUT** /webfilter/search-engine/{name} | Update this specific resource.  Access Group: utmgrp
*WebfilterSearchEngineApi* | [**webfilterSearchEnginePost**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterSearchEngineApi) | **POST** /webfilter/search-engine | Create object(s) in this table.  Access Group: utmgrp
*WebfilterUrlfilterApi* | [**webfilterUrlfilterGet**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterUrlfilterApi) | **GET** /webfilter/urlfilter | Select all entries in a CLI table.  Access Group: utmgrp
*WebfilterUrlfilterApi* | [**webfilterUrlfilterIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterUrlfilterApi) | **DELETE** /webfilter/urlfilter/{id} | Delete this specific resource.  Access Group: utmgrp
*WebfilterUrlfilterApi* | [**webfilterUrlfilterIdGet**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterUrlfilterApi) | **GET** /webfilter/urlfilter/{id} | Select a specific entry from a CLI table.  Access Group: utmgrp
*WebfilterUrlfilterApi* | [**webfilterUrlfilterIdPut**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterUrlfilterApi) | **PUT** /webfilter/urlfilter/{id} | Update this specific resource.  Access Group: utmgrp
*WebfilterUrlfilterApi* | [**webfilterUrlfilterPost**](docs/classes/Fortigate-FortiOS-CMDB-WebfilterUrlfilterApi) | **POST** /webfilter/urlfilter | Create object(s) in this table.  Access Group: utmgrp
*WirelessControllerAccessControlListApi* | [**wirelessControllerAccessControlListGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerAccessControlListApi) | **GET** /wireless-controller/access-control-list | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerAccessControlListApi* | [**wirelessControllerAccessControlListNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerAccessControlListApi) | **DELETE** /wireless-controller/access-control-list/{name} | Delete this specific resource.  Access Group: wifi
*WirelessControllerAccessControlListApi* | [**wirelessControllerAccessControlListNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerAccessControlListApi) | **GET** /wireless-controller/access-control-list/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*WirelessControllerAccessControlListApi* | [**wirelessControllerAccessControlListNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerAccessControlListApi) | **PUT** /wireless-controller/access-control-list/{name} | Update this specific resource.  Access Group: wifi
*WirelessControllerAccessControlListApi* | [**wirelessControllerAccessControlListPost**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerAccessControlListApi) | **POST** /wireless-controller/access-control-list | Create object(s) in this table.  Access Group: wifi
*WirelessControllerAddressApi* | [**wirelessControllerAddressGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerAddressApi) | **GET** /wireless-controller/address | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerAddressApi* | [**wirelessControllerAddressIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerAddressApi) | **DELETE** /wireless-controller/address/{id} | Delete this specific resource.  Access Group: wifi
*WirelessControllerAddressApi* | [**wirelessControllerAddressIdGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerAddressApi) | **GET** /wireless-controller/address/{id} | Select a specific entry from a CLI table.  Access Group: wifi
*WirelessControllerAddressApi* | [**wirelessControllerAddressIdPut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerAddressApi) | **PUT** /wireless-controller/address/{id} | Update this specific resource.  Access Group: wifi
*WirelessControllerAddressApi* | [**wirelessControllerAddressPost**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerAddressApi) | **POST** /wireless-controller/address | Create object(s) in this table.  Access Group: wifi
*WirelessControllerAddrgrpApi* | [**wirelessControllerAddrgrpGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerAddrgrpApi) | **GET** /wireless-controller/addrgrp | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerAddrgrpApi* | [**wirelessControllerAddrgrpIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerAddrgrpApi) | **DELETE** /wireless-controller/addrgrp/{id} | Delete this specific resource.  Access Group: wifi
*WirelessControllerAddrgrpApi* | [**wirelessControllerAddrgrpIdGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerAddrgrpApi) | **GET** /wireless-controller/addrgrp/{id} | Select a specific entry from a CLI table.  Access Group: wifi
*WirelessControllerAddrgrpApi* | [**wirelessControllerAddrgrpIdPut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerAddrgrpApi) | **PUT** /wireless-controller/addrgrp/{id} | Update this specific resource.  Access Group: wifi
*WirelessControllerAddrgrpApi* | [**wirelessControllerAddrgrpPost**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerAddrgrpApi) | **POST** /wireless-controller/addrgrp | Create object(s) in this table.  Access Group: wifi
*WirelessControllerApStatusApi* | [**wirelessControllerApStatusGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerApStatusApi) | **GET** /wireless-controller/ap-status | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerApStatusApi* | [**wirelessControllerApStatusIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerApStatusApi) | **DELETE** /wireless-controller/ap-status/{id} | Delete this specific resource.  Access Group: wifi
*WirelessControllerApStatusApi* | [**wirelessControllerApStatusIdGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerApStatusApi) | **GET** /wireless-controller/ap-status/{id} | Select a specific entry from a CLI table.  Access Group: wifi
*WirelessControllerApStatusApi* | [**wirelessControllerApStatusIdPut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerApStatusApi) | **PUT** /wireless-controller/ap-status/{id} | Update this specific resource.  Access Group: wifi
*WirelessControllerApStatusApi* | [**wirelessControllerApStatusPost**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerApStatusApi) | **POST** /wireless-controller/ap-status | Create object(s) in this table.  Access Group: wifi
*WirelessControllerApcfgProfileApi* | [**wirelessControllerApcfgProfileGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerApcfgProfileApi) | **GET** /wireless-controller/apcfg-profile | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerApcfgProfileApi* | [**wirelessControllerApcfgProfileNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerApcfgProfileApi) | **DELETE** /wireless-controller/apcfg-profile/{name} | Delete this specific resource.  Access Group: wifi
*WirelessControllerApcfgProfileApi* | [**wirelessControllerApcfgProfileNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerApcfgProfileApi) | **GET** /wireless-controller/apcfg-profile/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*WirelessControllerApcfgProfileApi* | [**wirelessControllerApcfgProfileNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerApcfgProfileApi) | **PUT** /wireless-controller/apcfg-profile/{name} | Update this specific resource.  Access Group: wifi
*WirelessControllerApcfgProfileApi* | [**wirelessControllerApcfgProfilePost**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerApcfgProfileApi) | **POST** /wireless-controller/apcfg-profile | Create object(s) in this table.  Access Group: wifi
*WirelessControllerArrpProfileApi* | [**wirelessControllerArrpProfileGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerArrpProfileApi) | **GET** /wireless-controller/arrp-profile | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerArrpProfileApi* | [**wirelessControllerArrpProfileNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerArrpProfileApi) | **DELETE** /wireless-controller/arrp-profile/{name} | Delete this specific resource.  Access Group: wifi
*WirelessControllerArrpProfileApi* | [**wirelessControllerArrpProfileNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerArrpProfileApi) | **GET** /wireless-controller/arrp-profile/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*WirelessControllerArrpProfileApi* | [**wirelessControllerArrpProfileNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerArrpProfileApi) | **PUT** /wireless-controller/arrp-profile/{name} | Update this specific resource.  Access Group: wifi
*WirelessControllerArrpProfileApi* | [**wirelessControllerArrpProfilePost**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerArrpProfileApi) | **POST** /wireless-controller/arrp-profile | Create object(s) in this table.  Access Group: wifi
*WirelessControllerBleProfileApi* | [**wirelessControllerBleProfileGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerBleProfileApi) | **GET** /wireless-controller/ble-profile | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerBleProfileApi* | [**wirelessControllerBleProfileNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerBleProfileApi) | **DELETE** /wireless-controller/ble-profile/{name} | Delete this specific resource.  Access Group: wifi
*WirelessControllerBleProfileApi* | [**wirelessControllerBleProfileNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerBleProfileApi) | **GET** /wireless-controller/ble-profile/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*WirelessControllerBleProfileApi* | [**wirelessControllerBleProfileNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerBleProfileApi) | **PUT** /wireless-controller/ble-profile/{name} | Update this specific resource.  Access Group: wifi
*WirelessControllerBleProfileApi* | [**wirelessControllerBleProfilePost**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerBleProfileApi) | **POST** /wireless-controller/ble-profile | Create object(s) in this table.  Access Group: wifi
*WirelessControllerBonjourProfileApi* | [**wirelessControllerBonjourProfileGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerBonjourProfileApi) | **GET** /wireless-controller/bonjour-profile | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerBonjourProfileApi* | [**wirelessControllerBonjourProfileNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerBonjourProfileApi) | **DELETE** /wireless-controller/bonjour-profile/{name} | Delete this specific resource.  Access Group: wifi
*WirelessControllerBonjourProfileApi* | [**wirelessControllerBonjourProfileNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerBonjourProfileApi) | **GET** /wireless-controller/bonjour-profile/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*WirelessControllerBonjourProfileApi* | [**wirelessControllerBonjourProfileNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerBonjourProfileApi) | **PUT** /wireless-controller/bonjour-profile/{name} | Update this specific resource.  Access Group: wifi
*WirelessControllerBonjourProfileApi* | [**wirelessControllerBonjourProfilePost**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerBonjourProfileApi) | **POST** /wireless-controller/bonjour-profile | Create object(s) in this table.  Access Group: wifi
*WirelessControllerGlobalApi* | [**wirelessControllerGlobalGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerGlobalApi) | **GET** /wireless-controller/global | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerGlobalApi* | [**wirelessControllerGlobalPut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerGlobalApi) | **PUT** /wireless-controller/global | Update this specific resource.  Access Group: wifi
*WirelessControllerHotspot20Anqp3gppCellularApi* | [**wirelessControllerHotspot20Anqp3gppCellularGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20Anqp3gppCellularApi) | **GET** /wireless-controller.hotspot20/anqp-3gpp-cellular | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerHotspot20Anqp3gppCellularApi* | [**wirelessControllerHotspot20Anqp3gppCellularNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20Anqp3gppCellularApi) | **DELETE** /wireless-controller.hotspot20/anqp-3gpp-cellular/{name} | Delete this specific resource.  Access Group: wifi
*WirelessControllerHotspot20Anqp3gppCellularApi* | [**wirelessControllerHotspot20Anqp3gppCellularNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20Anqp3gppCellularApi) | **GET** /wireless-controller.hotspot20/anqp-3gpp-cellular/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*WirelessControllerHotspot20Anqp3gppCellularApi* | [**wirelessControllerHotspot20Anqp3gppCellularNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20Anqp3gppCellularApi) | **PUT** /wireless-controller.hotspot20/anqp-3gpp-cellular/{name} | Update this specific resource.  Access Group: wifi
*WirelessControllerHotspot20Anqp3gppCellularApi* | [**wirelessControllerHotspot20Anqp3gppCellularPost**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20Anqp3gppCellularApi) | **POST** /wireless-controller.hotspot20/anqp-3gpp-cellular | Create object(s) in this table.  Access Group: wifi
*WirelessControllerHotspot20AnqpIpAddressTypeApi* | [**wirelessControllerHotspot20AnqpIpAddressTypeGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20AnqpIpAddressTypeApi) | **GET** /wireless-controller.hotspot20/anqp-ip-address-type | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerHotspot20AnqpIpAddressTypeApi* | [**wirelessControllerHotspot20AnqpIpAddressTypeNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20AnqpIpAddressTypeApi) | **DELETE** /wireless-controller.hotspot20/anqp-ip-address-type/{name} | Delete this specific resource.  Access Group: wifi
*WirelessControllerHotspot20AnqpIpAddressTypeApi* | [**wirelessControllerHotspot20AnqpIpAddressTypeNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20AnqpIpAddressTypeApi) | **GET** /wireless-controller.hotspot20/anqp-ip-address-type/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*WirelessControllerHotspot20AnqpIpAddressTypeApi* | [**wirelessControllerHotspot20AnqpIpAddressTypeNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20AnqpIpAddressTypeApi) | **PUT** /wireless-controller.hotspot20/anqp-ip-address-type/{name} | Update this specific resource.  Access Group: wifi
*WirelessControllerHotspot20AnqpIpAddressTypeApi* | [**wirelessControllerHotspot20AnqpIpAddressTypePost**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20AnqpIpAddressTypeApi) | **POST** /wireless-controller.hotspot20/anqp-ip-address-type | Create object(s) in this table.  Access Group: wifi
*WirelessControllerHotspot20AnqpNaiRealmApi* | [**wirelessControllerHotspot20AnqpNaiRealmGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20AnqpNaiRealmApi) | **GET** /wireless-controller.hotspot20/anqp-nai-realm | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerHotspot20AnqpNaiRealmApi* | [**wirelessControllerHotspot20AnqpNaiRealmNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20AnqpNaiRealmApi) | **DELETE** /wireless-controller.hotspot20/anqp-nai-realm/{name} | Delete this specific resource.  Access Group: wifi
*WirelessControllerHotspot20AnqpNaiRealmApi* | [**wirelessControllerHotspot20AnqpNaiRealmNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20AnqpNaiRealmApi) | **GET** /wireless-controller.hotspot20/anqp-nai-realm/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*WirelessControllerHotspot20AnqpNaiRealmApi* | [**wirelessControllerHotspot20AnqpNaiRealmNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20AnqpNaiRealmApi) | **PUT** /wireless-controller.hotspot20/anqp-nai-realm/{name} | Update this specific resource.  Access Group: wifi
*WirelessControllerHotspot20AnqpNaiRealmApi* | [**wirelessControllerHotspot20AnqpNaiRealmPost**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20AnqpNaiRealmApi) | **POST** /wireless-controller.hotspot20/anqp-nai-realm | Create object(s) in this table.  Access Group: wifi
*WirelessControllerHotspot20AnqpNetworkAuthTypeApi* | [**wirelessControllerHotspot20AnqpNetworkAuthTypeGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20AnqpNetworkAuthTypeApi) | **GET** /wireless-controller.hotspot20/anqp-network-auth-type | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerHotspot20AnqpNetworkAuthTypeApi* | [**wirelessControllerHotspot20AnqpNetworkAuthTypeNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20AnqpNetworkAuthTypeApi) | **DELETE** /wireless-controller.hotspot20/anqp-network-auth-type/{name} | Delete this specific resource.  Access Group: wifi
*WirelessControllerHotspot20AnqpNetworkAuthTypeApi* | [**wirelessControllerHotspot20AnqpNetworkAuthTypeNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20AnqpNetworkAuthTypeApi) | **GET** /wireless-controller.hotspot20/anqp-network-auth-type/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*WirelessControllerHotspot20AnqpNetworkAuthTypeApi* | [**wirelessControllerHotspot20AnqpNetworkAuthTypeNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20AnqpNetworkAuthTypeApi) | **PUT** /wireless-controller.hotspot20/anqp-network-auth-type/{name} | Update this specific resource.  Access Group: wifi
*WirelessControllerHotspot20AnqpNetworkAuthTypeApi* | [**wirelessControllerHotspot20AnqpNetworkAuthTypePost**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20AnqpNetworkAuthTypeApi) | **POST** /wireless-controller.hotspot20/anqp-network-auth-type | Create object(s) in this table.  Access Group: wifi
*WirelessControllerHotspot20AnqpRoamingConsortiumApi* | [**wirelessControllerHotspot20AnqpRoamingConsortiumGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20AnqpRoamingConsortiumApi) | **GET** /wireless-controller.hotspot20/anqp-roaming-consortium | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerHotspot20AnqpRoamingConsortiumApi* | [**wirelessControllerHotspot20AnqpRoamingConsortiumNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20AnqpRoamingConsortiumApi) | **DELETE** /wireless-controller.hotspot20/anqp-roaming-consortium/{name} | Delete this specific resource.  Access Group: wifi
*WirelessControllerHotspot20AnqpRoamingConsortiumApi* | [**wirelessControllerHotspot20AnqpRoamingConsortiumNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20AnqpRoamingConsortiumApi) | **GET** /wireless-controller.hotspot20/anqp-roaming-consortium/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*WirelessControllerHotspot20AnqpRoamingConsortiumApi* | [**wirelessControllerHotspot20AnqpRoamingConsortiumNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20AnqpRoamingConsortiumApi) | **PUT** /wireless-controller.hotspot20/anqp-roaming-consortium/{name} | Update this specific resource.  Access Group: wifi
*WirelessControllerHotspot20AnqpRoamingConsortiumApi* | [**wirelessControllerHotspot20AnqpRoamingConsortiumPost**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20AnqpRoamingConsortiumApi) | **POST** /wireless-controller.hotspot20/anqp-roaming-consortium | Create object(s) in this table.  Access Group: wifi
*WirelessControllerHotspot20AnqpVenueNameApi* | [**wirelessControllerHotspot20AnqpVenueNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20AnqpVenueNameApi) | **GET** /wireless-controller.hotspot20/anqp-venue-name | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerHotspot20AnqpVenueNameApi* | [**wirelessControllerHotspot20AnqpVenueNameNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20AnqpVenueNameApi) | **DELETE** /wireless-controller.hotspot20/anqp-venue-name/{name} | Delete this specific resource.  Access Group: wifi
*WirelessControllerHotspot20AnqpVenueNameApi* | [**wirelessControllerHotspot20AnqpVenueNameNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20AnqpVenueNameApi) | **GET** /wireless-controller.hotspot20/anqp-venue-name/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*WirelessControllerHotspot20AnqpVenueNameApi* | [**wirelessControllerHotspot20AnqpVenueNameNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20AnqpVenueNameApi) | **PUT** /wireless-controller.hotspot20/anqp-venue-name/{name} | Update this specific resource.  Access Group: wifi
*WirelessControllerHotspot20AnqpVenueNameApi* | [**wirelessControllerHotspot20AnqpVenueNamePost**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20AnqpVenueNameApi) | **POST** /wireless-controller.hotspot20/anqp-venue-name | Create object(s) in this table.  Access Group: wifi
*WirelessControllerHotspot20H2qpConnCapabilityApi* | [**wirelessControllerHotspot20H2qpConnCapabilityGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20H2qpConnCapabilityApi) | **GET** /wireless-controller.hotspot20/h2qp-conn-capability | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerHotspot20H2qpConnCapabilityApi* | [**wirelessControllerHotspot20H2qpConnCapabilityNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20H2qpConnCapabilityApi) | **DELETE** /wireless-controller.hotspot20/h2qp-conn-capability/{name} | Delete this specific resource.  Access Group: wifi
*WirelessControllerHotspot20H2qpConnCapabilityApi* | [**wirelessControllerHotspot20H2qpConnCapabilityNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20H2qpConnCapabilityApi) | **GET** /wireless-controller.hotspot20/h2qp-conn-capability/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*WirelessControllerHotspot20H2qpConnCapabilityApi* | [**wirelessControllerHotspot20H2qpConnCapabilityNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20H2qpConnCapabilityApi) | **PUT** /wireless-controller.hotspot20/h2qp-conn-capability/{name} | Update this specific resource.  Access Group: wifi
*WirelessControllerHotspot20H2qpConnCapabilityApi* | [**wirelessControllerHotspot20H2qpConnCapabilityPost**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20H2qpConnCapabilityApi) | **POST** /wireless-controller.hotspot20/h2qp-conn-capability | Create object(s) in this table.  Access Group: wifi
*WirelessControllerHotspot20H2qpOperatorNameApi* | [**wirelessControllerHotspot20H2qpOperatorNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20H2qpOperatorNameApi) | **GET** /wireless-controller.hotspot20/h2qp-operator-name | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerHotspot20H2qpOperatorNameApi* | [**wirelessControllerHotspot20H2qpOperatorNameNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20H2qpOperatorNameApi) | **DELETE** /wireless-controller.hotspot20/h2qp-operator-name/{name} | Delete this specific resource.  Access Group: wifi
*WirelessControllerHotspot20H2qpOperatorNameApi* | [**wirelessControllerHotspot20H2qpOperatorNameNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20H2qpOperatorNameApi) | **GET** /wireless-controller.hotspot20/h2qp-operator-name/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*WirelessControllerHotspot20H2qpOperatorNameApi* | [**wirelessControllerHotspot20H2qpOperatorNameNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20H2qpOperatorNameApi) | **PUT** /wireless-controller.hotspot20/h2qp-operator-name/{name} | Update this specific resource.  Access Group: wifi
*WirelessControllerHotspot20H2qpOperatorNameApi* | [**wirelessControllerHotspot20H2qpOperatorNamePost**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20H2qpOperatorNameApi) | **POST** /wireless-controller.hotspot20/h2qp-operator-name | Create object(s) in this table.  Access Group: wifi
*WirelessControllerHotspot20H2qpOsuProviderApi* | [**wirelessControllerHotspot20H2qpOsuProviderGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20H2qpOsuProviderApi) | **GET** /wireless-controller.hotspot20/h2qp-osu-provider | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerHotspot20H2qpOsuProviderApi* | [**wirelessControllerHotspot20H2qpOsuProviderNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20H2qpOsuProviderApi) | **DELETE** /wireless-controller.hotspot20/h2qp-osu-provider/{name} | Delete this specific resource.  Access Group: wifi
*WirelessControllerHotspot20H2qpOsuProviderApi* | [**wirelessControllerHotspot20H2qpOsuProviderNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20H2qpOsuProviderApi) | **GET** /wireless-controller.hotspot20/h2qp-osu-provider/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*WirelessControllerHotspot20H2qpOsuProviderApi* | [**wirelessControllerHotspot20H2qpOsuProviderNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20H2qpOsuProviderApi) | **PUT** /wireless-controller.hotspot20/h2qp-osu-provider/{name} | Update this specific resource.  Access Group: wifi
*WirelessControllerHotspot20H2qpOsuProviderApi* | [**wirelessControllerHotspot20H2qpOsuProviderPost**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20H2qpOsuProviderApi) | **POST** /wireless-controller.hotspot20/h2qp-osu-provider | Create object(s) in this table.  Access Group: wifi
*WirelessControllerHotspot20H2qpWanMetricApi* | [**wirelessControllerHotspot20H2qpWanMetricGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20H2qpWanMetricApi) | **GET** /wireless-controller.hotspot20/h2qp-wan-metric | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerHotspot20H2qpWanMetricApi* | [**wirelessControllerHotspot20H2qpWanMetricNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20H2qpWanMetricApi) | **DELETE** /wireless-controller.hotspot20/h2qp-wan-metric/{name} | Delete this specific resource.  Access Group: wifi
*WirelessControllerHotspot20H2qpWanMetricApi* | [**wirelessControllerHotspot20H2qpWanMetricNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20H2qpWanMetricApi) | **GET** /wireless-controller.hotspot20/h2qp-wan-metric/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*WirelessControllerHotspot20H2qpWanMetricApi* | [**wirelessControllerHotspot20H2qpWanMetricNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20H2qpWanMetricApi) | **PUT** /wireless-controller.hotspot20/h2qp-wan-metric/{name} | Update this specific resource.  Access Group: wifi
*WirelessControllerHotspot20H2qpWanMetricApi* | [**wirelessControllerHotspot20H2qpWanMetricPost**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20H2qpWanMetricApi) | **POST** /wireless-controller.hotspot20/h2qp-wan-metric | Create object(s) in this table.  Access Group: wifi
*WirelessControllerHotspot20HsProfileApi* | [**wirelessControllerHotspot20HsProfileGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20HsProfileApi) | **GET** /wireless-controller.hotspot20/hs-profile | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerHotspot20HsProfileApi* | [**wirelessControllerHotspot20HsProfileNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20HsProfileApi) | **DELETE** /wireless-controller.hotspot20/hs-profile/{name} | Delete this specific resource.  Access Group: wifi
*WirelessControllerHotspot20HsProfileApi* | [**wirelessControllerHotspot20HsProfileNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20HsProfileApi) | **GET** /wireless-controller.hotspot20/hs-profile/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*WirelessControllerHotspot20HsProfileApi* | [**wirelessControllerHotspot20HsProfileNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20HsProfileApi) | **PUT** /wireless-controller.hotspot20/hs-profile/{name} | Update this specific resource.  Access Group: wifi
*WirelessControllerHotspot20HsProfileApi* | [**wirelessControllerHotspot20HsProfilePost**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20HsProfileApi) | **POST** /wireless-controller.hotspot20/hs-profile | Create object(s) in this table.  Access Group: wifi
*WirelessControllerHotspot20IconApi* | [**wirelessControllerHotspot20IconGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20IconApi) | **GET** /wireless-controller.hotspot20/icon | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerHotspot20IconApi* | [**wirelessControllerHotspot20IconNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20IconApi) | **DELETE** /wireless-controller.hotspot20/icon/{name} | Delete this specific resource.  Access Group: wifi
*WirelessControllerHotspot20IconApi* | [**wirelessControllerHotspot20IconNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20IconApi) | **GET** /wireless-controller.hotspot20/icon/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*WirelessControllerHotspot20IconApi* | [**wirelessControllerHotspot20IconNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20IconApi) | **PUT** /wireless-controller.hotspot20/icon/{name} | Update this specific resource.  Access Group: wifi
*WirelessControllerHotspot20IconApi* | [**wirelessControllerHotspot20IconPost**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20IconApi) | **POST** /wireless-controller.hotspot20/icon | Create object(s) in this table.  Access Group: wifi
*WirelessControllerHotspot20QosMapApi* | [**wirelessControllerHotspot20QosMapGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20QosMapApi) | **GET** /wireless-controller.hotspot20/qos-map | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerHotspot20QosMapApi* | [**wirelessControllerHotspot20QosMapNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20QosMapApi) | **DELETE** /wireless-controller.hotspot20/qos-map/{name} | Delete this specific resource.  Access Group: wifi
*WirelessControllerHotspot20QosMapApi* | [**wirelessControllerHotspot20QosMapNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20QosMapApi) | **GET** /wireless-controller.hotspot20/qos-map/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*WirelessControllerHotspot20QosMapApi* | [**wirelessControllerHotspot20QosMapNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20QosMapApi) | **PUT** /wireless-controller.hotspot20/qos-map/{name} | Update this specific resource.  Access Group: wifi
*WirelessControllerHotspot20QosMapApi* | [**wirelessControllerHotspot20QosMapPost**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerHotspot20QosMapApi) | **POST** /wireless-controller.hotspot20/qos-map | Create object(s) in this table.  Access Group: wifi
*WirelessControllerInterControllerApi* | [**wirelessControllerInterControllerGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerInterControllerApi) | **GET** /wireless-controller/inter-controller | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerInterControllerApi* | [**wirelessControllerInterControllerPut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerInterControllerApi) | **PUT** /wireless-controller/inter-controller | Update this specific resource.  Access Group: wifi
*WirelessControllerLogApi* | [**wirelessControllerLogGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerLogApi) | **GET** /wireless-controller/log | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerLogApi* | [**wirelessControllerLogPut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerLogApi) | **PUT** /wireless-controller/log | Update this specific resource.  Access Group: wifi
*WirelessControllerMpskProfileApi* | [**wirelessControllerMpskProfileGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerMpskProfileApi) | **GET** /wireless-controller/mpsk-profile | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerMpskProfileApi* | [**wirelessControllerMpskProfileNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerMpskProfileApi) | **DELETE** /wireless-controller/mpsk-profile/{name} | Delete this specific resource.  Access Group: wifi
*WirelessControllerMpskProfileApi* | [**wirelessControllerMpskProfileNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerMpskProfileApi) | **GET** /wireless-controller/mpsk-profile/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*WirelessControllerMpskProfileApi* | [**wirelessControllerMpskProfileNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerMpskProfileApi) | **PUT** /wireless-controller/mpsk-profile/{name} | Update this specific resource.  Access Group: wifi
*WirelessControllerMpskProfileApi* | [**wirelessControllerMpskProfilePost**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerMpskProfileApi) | **POST** /wireless-controller/mpsk-profile | Create object(s) in this table.  Access Group: wifi
*WirelessControllerQosProfileApi* | [**wirelessControllerQosProfileGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerQosProfileApi) | **GET** /wireless-controller/qos-profile | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerQosProfileApi* | [**wirelessControllerQosProfileNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerQosProfileApi) | **DELETE** /wireless-controller/qos-profile/{name} | Delete this specific resource.  Access Group: wifi
*WirelessControllerQosProfileApi* | [**wirelessControllerQosProfileNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerQosProfileApi) | **GET** /wireless-controller/qos-profile/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*WirelessControllerQosProfileApi* | [**wirelessControllerQosProfileNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerQosProfileApi) | **PUT** /wireless-controller/qos-profile/{name} | Update this specific resource.  Access Group: wifi
*WirelessControllerQosProfileApi* | [**wirelessControllerQosProfilePost**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerQosProfileApi) | **POST** /wireless-controller/qos-profile | Create object(s) in this table.  Access Group: wifi
*WirelessControllerRegionApi* | [**wirelessControllerRegionGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerRegionApi) | **GET** /wireless-controller/region | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerRegionApi* | [**wirelessControllerRegionNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerRegionApi) | **DELETE** /wireless-controller/region/{name} | Delete this specific resource.  Access Group: wifi
*WirelessControllerRegionApi* | [**wirelessControllerRegionNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerRegionApi) | **GET** /wireless-controller/region/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*WirelessControllerRegionApi* | [**wirelessControllerRegionNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerRegionApi) | **PUT** /wireless-controller/region/{name} | Update this specific resource.  Access Group: wifi
*WirelessControllerRegionApi* | [**wirelessControllerRegionPost**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerRegionApi) | **POST** /wireless-controller/region | Create object(s) in this table.  Access Group: wifi
*WirelessControllerSettingApi* | [**wirelessControllerSettingGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerSettingApi) | **GET** /wireless-controller/setting | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerSettingApi* | [**wirelessControllerSettingPut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerSettingApi) | **PUT** /wireless-controller/setting | Update this specific resource.  Access Group: wifi
*WirelessControllerSnmpApi* | [**wirelessControllerSnmpGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerSnmpApi) | **GET** /wireless-controller/snmp | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerSnmpApi* | [**wirelessControllerSnmpPut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerSnmpApi) | **PUT** /wireless-controller/snmp | Update this specific resource.  Access Group: wifi
*WirelessControllerTimersApi* | [**wirelessControllerTimersGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerTimersApi) | **GET** /wireless-controller/timers | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerTimersApi* | [**wirelessControllerTimersPut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerTimersApi) | **PUT** /wireless-controller/timers | Update this specific resource.  Access Group: wifi
*WirelessControllerUtmProfileApi* | [**wirelessControllerUtmProfileGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerUtmProfileApi) | **GET** /wireless-controller/utm-profile | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerUtmProfileApi* | [**wirelessControllerUtmProfileNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerUtmProfileApi) | **DELETE** /wireless-controller/utm-profile/{name} | Delete this specific resource.  Access Group: wifi
*WirelessControllerUtmProfileApi* | [**wirelessControllerUtmProfileNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerUtmProfileApi) | **GET** /wireless-controller/utm-profile/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*WirelessControllerUtmProfileApi* | [**wirelessControllerUtmProfileNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerUtmProfileApi) | **PUT** /wireless-controller/utm-profile/{name} | Update this specific resource.  Access Group: wifi
*WirelessControllerUtmProfileApi* | [**wirelessControllerUtmProfilePost**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerUtmProfileApi) | **POST** /wireless-controller/utm-profile | Create object(s) in this table.  Access Group: wifi
*WirelessControllerVapApi* | [**wirelessControllerVapGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerVapApi) | **GET** /wireless-controller/vap | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerVapApi* | [**wirelessControllerVapNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerVapApi) | **DELETE** /wireless-controller/vap/{name} | Delete this specific resource.  Access Group: wifi
*WirelessControllerVapApi* | [**wirelessControllerVapNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerVapApi) | **GET** /wireless-controller/vap/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*WirelessControllerVapApi* | [**wirelessControllerVapNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerVapApi) | **PUT** /wireless-controller/vap/{name} | Update this specific resource.  Access Group: wifi
*WirelessControllerVapApi* | [**wirelessControllerVapPost**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerVapApi) | **POST** /wireless-controller/vap | Create object(s) in this table.  Access Group: wifi
*WirelessControllerVapGroupApi* | [**wirelessControllerVapGroupGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerVapGroupApi) | **GET** /wireless-controller/vap-group | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerVapGroupApi* | [**wirelessControllerVapGroupNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerVapGroupApi) | **DELETE** /wireless-controller/vap-group/{name} | Delete this specific resource.  Access Group: wifi
*WirelessControllerVapGroupApi* | [**wirelessControllerVapGroupNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerVapGroupApi) | **GET** /wireless-controller/vap-group/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*WirelessControllerVapGroupApi* | [**wirelessControllerVapGroupNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerVapGroupApi) | **PUT** /wireless-controller/vap-group/{name} | Update this specific resource.  Access Group: wifi
*WirelessControllerVapGroupApi* | [**wirelessControllerVapGroupPost**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerVapGroupApi) | **POST** /wireless-controller/vap-group | Create object(s) in this table.  Access Group: wifi
*WirelessControllerWagProfileApi* | [**wirelessControllerWagProfileGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerWagProfileApi) | **GET** /wireless-controller/wag-profile | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerWagProfileApi* | [**wirelessControllerWagProfileNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerWagProfileApi) | **DELETE** /wireless-controller/wag-profile/{name} | Delete this specific resource.  Access Group: wifi
*WirelessControllerWagProfileApi* | [**wirelessControllerWagProfileNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerWagProfileApi) | **GET** /wireless-controller/wag-profile/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*WirelessControllerWagProfileApi* | [**wirelessControllerWagProfileNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerWagProfileApi) | **PUT** /wireless-controller/wag-profile/{name} | Update this specific resource.  Access Group: wifi
*WirelessControllerWagProfileApi* | [**wirelessControllerWagProfilePost**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerWagProfileApi) | **POST** /wireless-controller/wag-profile | Create object(s) in this table.  Access Group: wifi
*WirelessControllerWidsProfileApi* | [**wirelessControllerWidsProfileGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerWidsProfileApi) | **GET** /wireless-controller/wids-profile | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerWidsProfileApi* | [**wirelessControllerWidsProfileNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerWidsProfileApi) | **DELETE** /wireless-controller/wids-profile/{name} | Delete this specific resource.  Access Group: wifi
*WirelessControllerWidsProfileApi* | [**wirelessControllerWidsProfileNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerWidsProfileApi) | **GET** /wireless-controller/wids-profile/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*WirelessControllerWidsProfileApi* | [**wirelessControllerWidsProfileNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerWidsProfileApi) | **PUT** /wireless-controller/wids-profile/{name} | Update this specific resource.  Access Group: wifi
*WirelessControllerWidsProfileApi* | [**wirelessControllerWidsProfilePost**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerWidsProfileApi) | **POST** /wireless-controller/wids-profile | Create object(s) in this table.  Access Group: wifi
*WirelessControllerWtpApi* | [**wirelessControllerWtpGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerWtpApi) | **GET** /wireless-controller/wtp | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerWtpApi* | [**wirelessControllerWtpPost**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerWtpApi) | **POST** /wireless-controller/wtp | Create object(s) in this table.  Access Group: wifi
*WirelessControllerWtpApi* | [**wirelessControllerWtpWtpIdDelete**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerWtpApi) | **DELETE** /wireless-controller/wtp/{wtp-id} | Delete this specific resource.  Access Group: wifi
*WirelessControllerWtpApi* | [**wirelessControllerWtpWtpIdGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerWtpApi) | **GET** /wireless-controller/wtp/{wtp-id} | Select a specific entry from a CLI table.  Access Group: wifi
*WirelessControllerWtpApi* | [**wirelessControllerWtpWtpIdPut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerWtpApi) | **PUT** /wireless-controller/wtp/{wtp-id} | Update this specific resource.  Access Group: wifi
*WirelessControllerWtpGroupApi* | [**wirelessControllerWtpGroupGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerWtpGroupApi) | **GET** /wireless-controller/wtp-group | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerWtpGroupApi* | [**wirelessControllerWtpGroupNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerWtpGroupApi) | **DELETE** /wireless-controller/wtp-group/{name} | Delete this specific resource.  Access Group: wifi
*WirelessControllerWtpGroupApi* | [**wirelessControllerWtpGroupNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerWtpGroupApi) | **GET** /wireless-controller/wtp-group/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*WirelessControllerWtpGroupApi* | [**wirelessControllerWtpGroupNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerWtpGroupApi) | **PUT** /wireless-controller/wtp-group/{name} | Update this specific resource.  Access Group: wifi
*WirelessControllerWtpGroupApi* | [**wirelessControllerWtpGroupPost**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerWtpGroupApi) | **POST** /wireless-controller/wtp-group | Create object(s) in this table.  Access Group: wifi
*WirelessControllerWtpProfileApi* | [**wirelessControllerWtpProfileGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerWtpProfileApi) | **GET** /wireless-controller/wtp-profile | Select all entries in a CLI table.  Access Group: wifi
*WirelessControllerWtpProfileApi* | [**wirelessControllerWtpProfileNameDelete**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerWtpProfileApi) | **DELETE** /wireless-controller/wtp-profile/{name} | Delete this specific resource.  Access Group: wifi
*WirelessControllerWtpProfileApi* | [**wirelessControllerWtpProfileNameGet**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerWtpProfileApi) | **GET** /wireless-controller/wtp-profile/{name} | Select a specific entry from a CLI table.  Access Group: wifi
*WirelessControllerWtpProfileApi* | [**wirelessControllerWtpProfileNamePut**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerWtpProfileApi) | **PUT** /wireless-controller/wtp-profile/{name} | Update this specific resource.  Access Group: wifi
*WirelessControllerWtpProfileApi* | [**wirelessControllerWtpProfilePost**](docs/classes/Fortigate-FortiOS-CMDB-WirelessControllerWtpProfileApi) | **POST** /wireless-controller/wtp-profile | Create object(s) in this table.  Access Group: wifi

## Models

- [AntivirusProfileNameCifs](docs/classes/Fortigate-FortiOS-Model-CMDB-AntivirusProfileNameCifs.html)
- [AntivirusProfileNameContentDisarm](docs/classes/Fortigate-FortiOS-Model-CMDB-AntivirusProfileNameContentDisarm.html)
- [AntivirusProfileNameFtp](docs/classes/Fortigate-FortiOS-Model-CMDB-AntivirusProfileNameFtp.html)
- [AntivirusProfileNameHttp](docs/classes/Fortigate-FortiOS-Model-CMDB-AntivirusProfileNameHttp.html)
- [AntivirusProfileNameImap](docs/classes/Fortigate-FortiOS-Model-CMDB-AntivirusProfileNameImap.html)
- [AntivirusProfileNameMapi](docs/classes/Fortigate-FortiOS-Model-CMDB-AntivirusProfileNameMapi.html)
- [AntivirusProfileNameNacQuar](docs/classes/Fortigate-FortiOS-Model-CMDB-AntivirusProfileNameNacQuar.html)
- [AntivirusProfileNameNntp](docs/classes/Fortigate-FortiOS-Model-CMDB-AntivirusProfileNameNntp.html)
- [AntivirusProfileNameOutbreakPrevention](docs/classes/Fortigate-FortiOS-Model-CMDB-AntivirusProfileNameOutbreakPrevention.html)
- [AntivirusProfileNamePop3](docs/classes/Fortigate-FortiOS-Model-CMDB-AntivirusProfileNamePop3.html)
- [AntivirusProfileNameSmtp](docs/classes/Fortigate-FortiOS-Model-CMDB-AntivirusProfileNameSmtp.html)
- [AntivirusProfileNameSsh](docs/classes/Fortigate-FortiOS-Model-CMDB-AntivirusProfileNameSsh.html)
- [ApplicationGroupNameApplication](docs/classes/Fortigate-FortiOS-Model-CMDB-ApplicationGroupNameApplication.html)
- [ApplicationGroupNameCategory](docs/classes/Fortigate-FortiOS-Model-CMDB-ApplicationGroupNameCategory.html)
- [ApplicationListNameCategory](docs/classes/Fortigate-FortiOS-Model-CMDB-ApplicationListNameCategory.html)
- [ApplicationListNameDefaultNetworkServices](docs/classes/Fortigate-FortiOS-Model-CMDB-ApplicationListNameDefaultNetworkServices.html)
- [ApplicationListNameEntries](docs/classes/Fortigate-FortiOS-Model-CMDB-ApplicationListNameEntries.html)
- [ApplicationListNameExclusion](docs/classes/Fortigate-FortiOS-Model-CMDB-ApplicationListNameExclusion.html)
- [ApplicationListNameMembers](docs/classes/Fortigate-FortiOS-Model-CMDB-ApplicationListNameMembers.html)
- [ApplicationListNameParameters](docs/classes/Fortigate-FortiOS-Model-CMDB-ApplicationListNameParameters.html)
- [ApplicationListNameRisk](docs/classes/Fortigate-FortiOS-Model-CMDB-ApplicationListNameRisk.html)
- [ApplicationNameNameMetadata](docs/classes/Fortigate-FortiOS-Model-CMDB-ApplicationNameNameMetadata.html)
- [ApplicationNameNameParameters](docs/classes/Fortigate-FortiOS-Model-CMDB-ApplicationNameNameParameters.html)
- [AuthenticationRuleNameSrcaddr](docs/classes/Fortigate-FortiOS-Model-CMDB-AuthenticationRuleNameSrcaddr.html)
- [AuthenticationSchemeNameUserDatabase](docs/classes/Fortigate-FortiOS-Model-CMDB-AuthenticationSchemeNameUserDatabase.html)
- [DlpFilepatternIdEntries](docs/classes/Fortigate-FortiOS-Model-CMDB-DlpFilepatternIdEntries.html)
- [DlpSensorNameFilter](docs/classes/Fortigate-FortiOS-Model-CMDB-DlpSensorNameFilter.html)
- [DlpSensorNameSensitivity](docs/classes/Fortigate-FortiOS-Model-CMDB-DlpSensorNameSensitivity.html)
- [DnsfilterDomainFilterIdEntries](docs/classes/Fortigate-FortiOS-Model-CMDB-DnsfilterDomainFilterIdEntries.html)
- [DnsfilterProfileNameDnsTranslation](docs/classes/Fortigate-FortiOS-Model-CMDB-DnsfilterProfileNameDnsTranslation.html)
- [DnsfilterProfileNameDomainFilter](docs/classes/Fortigate-FortiOS-Model-CMDB-DnsfilterProfileNameDomainFilter.html)
- [DnsfilterProfileNameExternalIpBlocklist](docs/classes/Fortigate-FortiOS-Model-CMDB-DnsfilterProfileNameExternalIpBlocklist.html)
- [DnsfilterProfileNameFilters](docs/classes/Fortigate-FortiOS-Model-CMDB-DnsfilterProfileNameFilters.html)
- [DnsfilterProfileNameFtgdDns](docs/classes/Fortigate-FortiOS-Model-CMDB-DnsfilterProfileNameFtgdDns.html)
- [EmailfilterBwlIdEntries](docs/classes/Fortigate-FortiOS-Model-CMDB-EmailfilterBwlIdEntries.html)
- [EmailfilterBwordIdEntries](docs/classes/Fortigate-FortiOS-Model-CMDB-EmailfilterBwordIdEntries.html)
- [EmailfilterDnsblIdEntries](docs/classes/Fortigate-FortiOS-Model-CMDB-EmailfilterDnsblIdEntries.html)
- [EmailfilterIptrustIdEntries](docs/classes/Fortigate-FortiOS-Model-CMDB-EmailfilterIptrustIdEntries.html)
- [EmailfilterMheaderIdEntries](docs/classes/Fortigate-FortiOS-Model-CMDB-EmailfilterMheaderIdEntries.html)
- [EmailfilterProfileNameImap](docs/classes/Fortigate-FortiOS-Model-CMDB-EmailfilterProfileNameImap.html)
- [EmailfilterProfileNameMapi](docs/classes/Fortigate-FortiOS-Model-CMDB-EmailfilterProfileNameMapi.html)
- [EmailfilterProfileNameMsnHotmail](docs/classes/Fortigate-FortiOS-Model-CMDB-EmailfilterProfileNameMsnHotmail.html)
- [EmailfilterProfileNameSmtp](docs/classes/Fortigate-FortiOS-Model-CMDB-EmailfilterProfileNameSmtp.html)
- [ExtenderControllerExtenderNameAutoSwitch](docs/classes/Fortigate-FortiOS-Model-CMDB-ExtenderControllerExtenderNameAutoSwitch.html)
- [ExtenderControllerExtenderNameControllerReport](docs/classes/Fortigate-FortiOS-Model-CMDB-ExtenderControllerExtenderNameControllerReport.html)
- [ExtenderControllerExtenderNameModem1](docs/classes/Fortigate-FortiOS-Model-CMDB-ExtenderControllerExtenderNameModem1.html)
- [FileFilterProfileNameFileType](docs/classes/Fortigate-FortiOS-Model-CMDB-FileFilterProfileNameFileType.html)
- [FileFilterProfileNameRules](docs/classes/Fortigate-FortiOS-Model-CMDB-FileFilterProfileNameRules.html)
- [IcapProfileNameHeaderGroup](docs/classes/Fortigate-FortiOS-Model-CMDB-IcapProfileNameHeaderGroup.html)
- [IcapProfileNameHttpRespStatusCode](docs/classes/Fortigate-FortiOS-Model-CMDB-IcapProfileNameHttpRespStatusCode.html)
- [IcapProfileNameIcapHeaders](docs/classes/Fortigate-FortiOS-Model-CMDB-IcapProfileNameIcapHeaders.html)
- [IcapProfileNameRespmodForwardRules](docs/classes/Fortigate-FortiOS-Model-CMDB-IcapProfileNameRespmodForwardRules.html)
- [InlineObject](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject.html)
- [InlineObject1](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject1.html)
- [InlineObject10](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject10.html)
- [InlineObject100](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject100.html)
- [InlineObject101](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject101.html)
- [InlineObject102](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject102.html)
- [InlineObject103](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject103.html)
- [InlineObject104](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject104.html)
- [InlineObject105](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject105.html)
- [InlineObject106](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject106.html)
- [InlineObject107](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject107.html)
- [InlineObject108](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject108.html)
- [InlineObject109](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject109.html)
- [InlineObject11](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject11.html)
- [InlineObject110](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject110.html)
- [InlineObject111](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject111.html)
- [InlineObject112](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject112.html)
- [InlineObject113](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject113.html)
- [InlineObject114](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject114.html)
- [InlineObject115](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject115.html)
- [InlineObject116](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject116.html)
- [InlineObject117](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject117.html)
- [InlineObject118](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject118.html)
- [InlineObject119](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject119.html)
- [InlineObject12](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject12.html)
- [InlineObject120](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject120.html)
- [InlineObject121](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject121.html)
- [InlineObject122](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject122.html)
- [InlineObject123](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject123.html)
- [InlineObject124](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject124.html)
- [InlineObject125](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject125.html)
- [InlineObject126](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject126.html)
- [InlineObject127](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject127.html)
- [InlineObject128](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject128.html)
- [InlineObject129](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject129.html)
- [InlineObject13](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject13.html)
- [InlineObject130](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject130.html)
- [InlineObject131](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject131.html)
- [InlineObject132](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject132.html)
- [InlineObject133](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject133.html)
- [InlineObject134](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject134.html)
- [InlineObject135](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject135.html)
- [InlineObject136](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject136.html)
- [InlineObject137](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject137.html)
- [InlineObject138](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject138.html)
- [InlineObject139](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject139.html)
- [InlineObject14](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject14.html)
- [InlineObject140](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject140.html)
- [InlineObject141](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject141.html)
- [InlineObject142](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject142.html)
- [InlineObject143](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject143.html)
- [InlineObject144](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject144.html)
- [InlineObject145](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject145.html)
- [InlineObject146](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject146.html)
- [InlineObject147](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject147.html)
- [InlineObject148](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject148.html)
- [InlineObject149](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject149.html)
- [InlineObject15](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject15.html)
- [InlineObject150](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject150.html)
- [InlineObject151](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject151.html)
- [InlineObject152](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject152.html)
- [InlineObject153](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject153.html)
- [InlineObject154](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject154.html)
- [InlineObject155](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject155.html)
- [InlineObject156](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject156.html)
- [InlineObject157](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject157.html)
- [InlineObject158](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject158.html)
- [InlineObject159](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject159.html)
- [InlineObject16](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject16.html)
- [InlineObject160](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject160.html)
- [InlineObject161](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject161.html)
- [InlineObject162](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject162.html)
- [InlineObject163](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject163.html)
- [InlineObject164](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject164.html)
- [InlineObject165](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject165.html)
- [InlineObject166](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject166.html)
- [InlineObject167](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject167.html)
- [InlineObject168](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject168.html)
- [InlineObject169](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject169.html)
- [InlineObject17](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject17.html)
- [InlineObject170](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject170.html)
- [InlineObject171](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject171.html)
- [InlineObject172](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject172.html)
- [InlineObject173](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject173.html)
- [InlineObject174](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject174.html)
- [InlineObject175](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject175.html)
- [InlineObject176](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject176.html)
- [InlineObject177](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject177.html)
- [InlineObject178](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject178.html)
- [InlineObject179](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject179.html)
- [InlineObject18](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject18.html)
- [InlineObject180](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject180.html)
- [InlineObject181](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject181.html)
- [InlineObject182](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject182.html)
- [InlineObject183](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject183.html)
- [InlineObject184](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject184.html)
- [InlineObject185](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject185.html)
- [InlineObject186](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject186.html)
- [InlineObject187](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject187.html)
- [InlineObject188](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject188.html)
- [InlineObject189](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject189.html)
- [InlineObject19](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject19.html)
- [InlineObject190](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject190.html)
- [InlineObject191](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject191.html)
- [InlineObject192](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject192.html)
- [InlineObject193](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject193.html)
- [InlineObject194](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject194.html)
- [InlineObject195](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject195.html)
- [InlineObject196](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject196.html)
- [InlineObject197](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject197.html)
- [InlineObject198](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject198.html)
- [InlineObject199](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject199.html)
- [InlineObject2](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject2.html)
- [InlineObject20](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject20.html)
- [InlineObject200](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject200.html)
- [InlineObject201](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject201.html)
- [InlineObject202](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject202.html)
- [InlineObject203](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject203.html)
- [InlineObject204](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject204.html)
- [InlineObject205](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject205.html)
- [InlineObject206](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject206.html)
- [InlineObject207](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject207.html)
- [InlineObject208](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject208.html)
- [InlineObject209](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject209.html)
- [InlineObject21](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject21.html)
- [InlineObject210](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject210.html)
- [InlineObject211](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject211.html)
- [InlineObject212](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject212.html)
- [InlineObject213](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject213.html)
- [InlineObject214](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject214.html)
- [InlineObject215](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject215.html)
- [InlineObject216](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject216.html)
- [InlineObject217](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject217.html)
- [InlineObject218](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject218.html)
- [InlineObject219](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject219.html)
- [InlineObject22](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject22.html)
- [InlineObject220](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject220.html)
- [InlineObject221](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject221.html)
- [InlineObject222](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject222.html)
- [InlineObject223](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject223.html)
- [InlineObject224](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject224.html)
- [InlineObject225](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject225.html)
- [InlineObject226](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject226.html)
- [InlineObject227](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject227.html)
- [InlineObject228](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject228.html)
- [InlineObject229](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject229.html)
- [InlineObject23](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject23.html)
- [InlineObject230](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject230.html)
- [InlineObject231](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject231.html)
- [InlineObject232](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject232.html)
- [InlineObject233](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject233.html)
- [InlineObject234](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject234.html)
- [InlineObject235](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject235.html)
- [InlineObject236](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject236.html)
- [InlineObject237](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject237.html)
- [InlineObject238](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject238.html)
- [InlineObject239](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject239.html)
- [InlineObject24](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject24.html)
- [InlineObject240](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject240.html)
- [InlineObject241](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject241.html)
- [InlineObject242](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject242.html)
- [InlineObject243](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject243.html)
- [InlineObject244](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject244.html)
- [InlineObject245](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject245.html)
- [InlineObject246](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject246.html)
- [InlineObject247](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject247.html)
- [InlineObject248](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject248.html)
- [InlineObject249](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject249.html)
- [InlineObject25](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject25.html)
- [InlineObject250](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject250.html)
- [InlineObject251](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject251.html)
- [InlineObject252](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject252.html)
- [InlineObject253](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject253.html)
- [InlineObject254](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject254.html)
- [InlineObject255](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject255.html)
- [InlineObject256](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject256.html)
- [InlineObject257](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject257.html)
- [InlineObject258](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject258.html)
- [InlineObject259](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject259.html)
- [InlineObject26](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject26.html)
- [InlineObject260](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject260.html)
- [InlineObject261](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject261.html)
- [InlineObject262](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject262.html)
- [InlineObject263](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject263.html)
- [InlineObject264](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject264.html)
- [InlineObject265](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject265.html)
- [InlineObject266](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject266.html)
- [InlineObject267](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject267.html)
- [InlineObject268](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject268.html)
- [InlineObject269](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject269.html)
- [InlineObject27](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject27.html)
- [InlineObject270](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject270.html)
- [InlineObject271](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject271.html)
- [InlineObject272](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject272.html)
- [InlineObject273](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject273.html)
- [InlineObject274](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject274.html)
- [InlineObject275](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject275.html)
- [InlineObject276](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject276.html)
- [InlineObject277](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject277.html)
- [InlineObject278](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject278.html)
- [InlineObject279](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject279.html)
- [InlineObject28](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject28.html)
- [InlineObject280](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject280.html)
- [InlineObject281](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject281.html)
- [InlineObject282](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject282.html)
- [InlineObject283](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject283.html)
- [InlineObject284](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject284.html)
- [InlineObject285](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject285.html)
- [InlineObject286](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject286.html)
- [InlineObject287](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject287.html)
- [InlineObject288](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject288.html)
- [InlineObject289](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject289.html)
- [InlineObject29](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject29.html)
- [InlineObject290](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject290.html)
- [InlineObject291](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject291.html)
- [InlineObject292](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject292.html)
- [InlineObject293](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject293.html)
- [InlineObject294](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject294.html)
- [InlineObject295](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject295.html)
- [InlineObject296](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject296.html)
- [InlineObject297](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject297.html)
- [InlineObject298](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject298.html)
- [InlineObject299](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject299.html)
- [InlineObject3](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject3.html)
- [InlineObject30](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject30.html)
- [InlineObject300](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject300.html)
- [InlineObject301](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject301.html)
- [InlineObject302](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject302.html)
- [InlineObject303](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject303.html)
- [InlineObject304](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject304.html)
- [InlineObject305](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject305.html)
- [InlineObject306](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject306.html)
- [InlineObject307](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject307.html)
- [InlineObject308](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject308.html)
- [InlineObject309](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject309.html)
- [InlineObject31](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject31.html)
- [InlineObject310](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject310.html)
- [InlineObject311](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject311.html)
- [InlineObject312](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject312.html)
- [InlineObject313](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject313.html)
- [InlineObject314](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject314.html)
- [InlineObject315](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject315.html)
- [InlineObject316](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject316.html)
- [InlineObject317](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject317.html)
- [InlineObject318](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject318.html)
- [InlineObject319](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject319.html)
- [InlineObject32](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject32.html)
- [InlineObject320](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject320.html)
- [InlineObject321](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject321.html)
- [InlineObject322](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject322.html)
- [InlineObject323](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject323.html)
- [InlineObject324](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject324.html)
- [InlineObject325](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject325.html)
- [InlineObject326](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject326.html)
- [InlineObject327](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject327.html)
- [InlineObject328](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject328.html)
- [InlineObject329](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject329.html)
- [InlineObject33](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject33.html)
- [InlineObject330](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject330.html)
- [InlineObject331](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject331.html)
- [InlineObject332](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject332.html)
- [InlineObject333](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject333.html)
- [InlineObject334](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject334.html)
- [InlineObject335](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject335.html)
- [InlineObject336](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject336.html)
- [InlineObject337](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject337.html)
- [InlineObject338](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject338.html)
- [InlineObject339](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject339.html)
- [InlineObject34](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject34.html)
- [InlineObject340](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject340.html)
- [InlineObject341](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject341.html)
- [InlineObject342](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject342.html)
- [InlineObject343](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject343.html)
- [InlineObject344](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject344.html)
- [InlineObject345](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject345.html)
- [InlineObject346](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject346.html)
- [InlineObject347](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject347.html)
- [InlineObject348](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject348.html)
- [InlineObject349](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject349.html)
- [InlineObject35](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject35.html)
- [InlineObject350](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject350.html)
- [InlineObject351](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject351.html)
- [InlineObject352](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject352.html)
- [InlineObject353](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject353.html)
- [InlineObject354](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject354.html)
- [InlineObject355](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject355.html)
- [InlineObject356](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject356.html)
- [InlineObject357](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject357.html)
- [InlineObject358](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject358.html)
- [InlineObject359](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject359.html)
- [InlineObject36](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject36.html)
- [InlineObject360](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject360.html)
- [InlineObject361](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject361.html)
- [InlineObject362](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject362.html)
- [InlineObject363](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject363.html)
- [InlineObject364](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject364.html)
- [InlineObject365](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject365.html)
- [InlineObject366](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject366.html)
- [InlineObject367](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject367.html)
- [InlineObject368](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject368.html)
- [InlineObject369](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject369.html)
- [InlineObject37](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject37.html)
- [InlineObject370](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject370.html)
- [InlineObject371](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject371.html)
- [InlineObject372](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject372.html)
- [InlineObject373](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject373.html)
- [InlineObject374](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject374.html)
- [InlineObject375](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject375.html)
- [InlineObject376](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject376.html)
- [InlineObject377](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject377.html)
- [InlineObject378](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject378.html)
- [InlineObject379](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject379.html)
- [InlineObject38](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject38.html)
- [InlineObject380](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject380.html)
- [InlineObject381](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject381.html)
- [InlineObject382](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject382.html)
- [InlineObject383](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject383.html)
- [InlineObject384](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject384.html)
- [InlineObject385](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject385.html)
- [InlineObject386](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject386.html)
- [InlineObject387](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject387.html)
- [InlineObject388](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject388.html)
- [InlineObject389](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject389.html)
- [InlineObject39](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject39.html)
- [InlineObject390](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject390.html)
- [InlineObject391](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject391.html)
- [InlineObject392](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject392.html)
- [InlineObject393](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject393.html)
- [InlineObject394](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject394.html)
- [InlineObject395](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject395.html)
- [InlineObject396](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject396.html)
- [InlineObject397](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject397.html)
- [InlineObject398](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject398.html)
- [InlineObject399](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject399.html)
- [InlineObject4](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject4.html)
- [InlineObject40](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject40.html)
- [InlineObject400](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject400.html)
- [InlineObject401](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject401.html)
- [InlineObject402](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject402.html)
- [InlineObject403](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject403.html)
- [InlineObject404](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject404.html)
- [InlineObject405](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject405.html)
- [InlineObject406](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject406.html)
- [InlineObject407](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject407.html)
- [InlineObject408](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject408.html)
- [InlineObject409](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject409.html)
- [InlineObject41](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject41.html)
- [InlineObject410](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject410.html)
- [InlineObject411](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject411.html)
- [InlineObject412](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject412.html)
- [InlineObject413](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject413.html)
- [InlineObject414](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject414.html)
- [InlineObject415](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject415.html)
- [InlineObject416](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject416.html)
- [InlineObject417](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject417.html)
- [InlineObject418](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject418.html)
- [InlineObject419](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject419.html)
- [InlineObject42](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject42.html)
- [InlineObject420](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject420.html)
- [InlineObject421](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject421.html)
- [InlineObject422](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject422.html)
- [InlineObject423](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject423.html)
- [InlineObject424](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject424.html)
- [InlineObject425](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject425.html)
- [InlineObject426](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject426.html)
- [InlineObject427](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject427.html)
- [InlineObject428](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject428.html)
- [InlineObject429](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject429.html)
- [InlineObject43](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject43.html)
- [InlineObject430](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject430.html)
- [InlineObject431](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject431.html)
- [InlineObject432](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject432.html)
- [InlineObject433](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject433.html)
- [InlineObject434](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject434.html)
- [InlineObject435](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject435.html)
- [InlineObject436](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject436.html)
- [InlineObject437](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject437.html)
- [InlineObject438](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject438.html)
- [InlineObject439](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject439.html)
- [InlineObject44](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject44.html)
- [InlineObject440](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject440.html)
- [InlineObject441](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject441.html)
- [InlineObject442](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject442.html)
- [InlineObject443](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject443.html)
- [InlineObject444](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject444.html)
- [InlineObject445](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject445.html)
- [InlineObject446](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject446.html)
- [InlineObject447](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject447.html)
- [InlineObject448](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject448.html)
- [InlineObject449](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject449.html)
- [InlineObject45](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject45.html)
- [InlineObject450](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject450.html)
- [InlineObject451](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject451.html)
- [InlineObject452](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject452.html)
- [InlineObject453](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject453.html)
- [InlineObject454](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject454.html)
- [InlineObject455](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject455.html)
- [InlineObject456](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject456.html)
- [InlineObject457](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject457.html)
- [InlineObject458](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject458.html)
- [InlineObject459](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject459.html)
- [InlineObject46](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject46.html)
- [InlineObject460](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject460.html)
- [InlineObject461](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject461.html)
- [InlineObject462](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject462.html)
- [InlineObject463](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject463.html)
- [InlineObject464](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject464.html)
- [InlineObject465](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject465.html)
- [InlineObject466](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject466.html)
- [InlineObject467](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject467.html)
- [InlineObject468](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject468.html)
- [InlineObject469](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject469.html)
- [InlineObject47](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject47.html)
- [InlineObject470](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject470.html)
- [InlineObject471](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject471.html)
- [InlineObject472](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject472.html)
- [InlineObject473](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject473.html)
- [InlineObject474](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject474.html)
- [InlineObject475](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject475.html)
- [InlineObject476](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject476.html)
- [InlineObject477](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject477.html)
- [InlineObject478](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject478.html)
- [InlineObject479](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject479.html)
- [InlineObject48](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject48.html)
- [InlineObject480](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject480.html)
- [InlineObject481](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject481.html)
- [InlineObject482](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject482.html)
- [InlineObject483](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject483.html)
- [InlineObject484](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject484.html)
- [InlineObject485](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject485.html)
- [InlineObject486](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject486.html)
- [InlineObject487](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject487.html)
- [InlineObject488](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject488.html)
- [InlineObject489](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject489.html)
- [InlineObject49](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject49.html)
- [InlineObject490](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject490.html)
- [InlineObject491](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject491.html)
- [InlineObject492](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject492.html)
- [InlineObject493](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject493.html)
- [InlineObject494](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject494.html)
- [InlineObject495](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject495.html)
- [InlineObject496](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject496.html)
- [InlineObject497](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject497.html)
- [InlineObject498](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject498.html)
- [InlineObject499](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject499.html)
- [InlineObject5](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject5.html)
- [InlineObject50](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject50.html)
- [InlineObject500](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject500.html)
- [InlineObject501](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject501.html)
- [InlineObject502](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject502.html)
- [InlineObject503](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject503.html)
- [InlineObject504](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject504.html)
- [InlineObject505](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject505.html)
- [InlineObject506](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject506.html)
- [InlineObject507](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject507.html)
- [InlineObject508](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject508.html)
- [InlineObject509](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject509.html)
- [InlineObject51](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject51.html)
- [InlineObject510](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject510.html)
- [InlineObject511](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject511.html)
- [InlineObject512](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject512.html)
- [InlineObject513](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject513.html)
- [InlineObject514](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject514.html)
- [InlineObject515](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject515.html)
- [InlineObject516](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject516.html)
- [InlineObject517](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject517.html)
- [InlineObject518](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject518.html)
- [InlineObject519](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject519.html)
- [InlineObject52](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject52.html)
- [InlineObject520](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject520.html)
- [InlineObject521](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject521.html)
- [InlineObject522](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject522.html)
- [InlineObject523](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject523.html)
- [InlineObject524](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject524.html)
- [InlineObject525](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject525.html)
- [InlineObject526](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject526.html)
- [InlineObject527](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject527.html)
- [InlineObject528](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject528.html)
- [InlineObject529](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject529.html)
- [InlineObject53](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject53.html)
- [InlineObject530](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject530.html)
- [InlineObject531](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject531.html)
- [InlineObject532](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject532.html)
- [InlineObject533](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject533.html)
- [InlineObject534](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject534.html)
- [InlineObject535](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject535.html)
- [InlineObject536](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject536.html)
- [InlineObject537](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject537.html)
- [InlineObject538](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject538.html)
- [InlineObject539](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject539.html)
- [InlineObject54](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject54.html)
- [InlineObject540](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject540.html)
- [InlineObject541](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject541.html)
- [InlineObject542](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject542.html)
- [InlineObject543](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject543.html)
- [InlineObject544](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject544.html)
- [InlineObject545](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject545.html)
- [InlineObject546](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject546.html)
- [InlineObject547](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject547.html)
- [InlineObject548](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject548.html)
- [InlineObject549](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject549.html)
- [InlineObject55](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject55.html)
- [InlineObject550](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject550.html)
- [InlineObject551](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject551.html)
- [InlineObject552](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject552.html)
- [InlineObject553](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject553.html)
- [InlineObject554](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject554.html)
- [InlineObject555](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject555.html)
- [InlineObject556](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject556.html)
- [InlineObject557](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject557.html)
- [InlineObject558](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject558.html)
- [InlineObject559](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject559.html)
- [InlineObject56](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject56.html)
- [InlineObject560](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject560.html)
- [InlineObject561](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject561.html)
- [InlineObject562](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject562.html)
- [InlineObject563](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject563.html)
- [InlineObject564](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject564.html)
- [InlineObject565](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject565.html)
- [InlineObject566](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject566.html)
- [InlineObject567](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject567.html)
- [InlineObject568](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject568.html)
- [InlineObject569](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject569.html)
- [InlineObject57](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject57.html)
- [InlineObject570](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject570.html)
- [InlineObject571](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject571.html)
- [InlineObject572](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject572.html)
- [InlineObject573](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject573.html)
- [InlineObject574](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject574.html)
- [InlineObject575](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject575.html)
- [InlineObject576](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject576.html)
- [InlineObject577](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject577.html)
- [InlineObject578](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject578.html)
- [InlineObject579](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject579.html)
- [InlineObject58](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject58.html)
- [InlineObject580](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject580.html)
- [InlineObject581](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject581.html)
- [InlineObject582](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject582.html)
- [InlineObject583](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject583.html)
- [InlineObject584](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject584.html)
- [InlineObject585](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject585.html)
- [InlineObject586](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject586.html)
- [InlineObject587](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject587.html)
- [InlineObject588](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject588.html)
- [InlineObject589](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject589.html)
- [InlineObject59](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject59.html)
- [InlineObject590](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject590.html)
- [InlineObject591](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject591.html)
- [InlineObject592](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject592.html)
- [InlineObject593](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject593.html)
- [InlineObject594](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject594.html)
- [InlineObject595](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject595.html)
- [InlineObject596](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject596.html)
- [InlineObject597](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject597.html)
- [InlineObject598](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject598.html)
- [InlineObject599](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject599.html)
- [InlineObject6](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject6.html)
- [InlineObject60](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject60.html)
- [InlineObject600](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject600.html)
- [InlineObject601](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject601.html)
- [InlineObject602](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject602.html)
- [InlineObject603](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject603.html)
- [InlineObject604](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject604.html)
- [InlineObject605](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject605.html)
- [InlineObject606](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject606.html)
- [InlineObject607](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject607.html)
- [InlineObject608](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject608.html)
- [InlineObject609](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject609.html)
- [InlineObject61](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject61.html)
- [InlineObject610](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject610.html)
- [InlineObject611](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject611.html)
- [InlineObject612](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject612.html)
- [InlineObject613](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject613.html)
- [InlineObject614](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject614.html)
- [InlineObject615](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject615.html)
- [InlineObject616](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject616.html)
- [InlineObject617](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject617.html)
- [InlineObject618](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject618.html)
- [InlineObject619](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject619.html)
- [InlineObject62](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject62.html)
- [InlineObject620](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject620.html)
- [InlineObject63](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject63.html)
- [InlineObject64](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject64.html)
- [InlineObject65](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject65.html)
- [InlineObject66](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject66.html)
- [InlineObject67](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject67.html)
- [InlineObject68](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject68.html)
- [InlineObject69](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject69.html)
- [InlineObject7](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject7.html)
- [InlineObject70](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject70.html)
- [InlineObject71](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject71.html)
- [InlineObject72](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject72.html)
- [InlineObject73](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject73.html)
- [InlineObject74](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject74.html)
- [InlineObject75](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject75.html)
- [InlineObject76](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject76.html)
- [InlineObject77](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject77.html)
- [InlineObject78](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject78.html)
- [InlineObject79](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject79.html)
- [InlineObject8](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject8.html)
- [InlineObject80](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject80.html)
- [InlineObject81](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject81.html)
- [InlineObject82](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject82.html)
- [InlineObject83](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject83.html)
- [InlineObject84](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject84.html)
- [InlineObject85](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject85.html)
- [InlineObject86](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject86.html)
- [InlineObject87](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject87.html)
- [InlineObject88](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject88.html)
- [InlineObject89](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject89.html)
- [InlineObject9](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject9.html)
- [InlineObject90](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject90.html)
- [InlineObject91](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject91.html)
- [InlineObject92](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject92.html)
- [InlineObject93](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject93.html)
- [InlineObject94](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject94.html)
- [InlineObject95](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject95.html)
- [InlineObject96](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject96.html)
- [InlineObject97](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject97.html)
- [InlineObject98](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject98.html)
- [InlineObject99](docs/classes/Fortigate-FortiOS-Model-CMDB-InlineObject99.html)
- [IpsDecoderNameParameter](docs/classes/Fortigate-FortiOS-Model-CMDB-IpsDecoderNameParameter.html)
- [IpsGlobalTlsActiveProbe](docs/classes/Fortigate-FortiOS-Model-CMDB-IpsGlobalTlsActiveProbe.html)
- [IpsSensorNameCve](docs/classes/Fortigate-FortiOS-Model-CMDB-IpsSensorNameCve.html)
- [IpsSensorNameEntries](docs/classes/Fortigate-FortiOS-Model-CMDB-IpsSensorNameEntries.html)
- [IpsSensorNameExemptIp](docs/classes/Fortigate-FortiOS-Model-CMDB-IpsSensorNameExemptIp.html)
- [IpsSensorNameRule](docs/classes/Fortigate-FortiOS-Model-CMDB-IpsSensorNameRule.html)
- [LogFortianalyzerOverrideSettingSerial](docs/classes/Fortigate-FortiOS-Model-CMDB-LogFortianalyzerOverrideSettingSerial.html)
- [LogSettingCustomLogFields](docs/classes/Fortigate-FortiOS-Model-CMDB-LogSettingCustomLogFields.html)
- [LogSyslogdOverrideSettingCustomFieldName](docs/classes/Fortigate-FortiOS-Model-CMDB-LogSyslogdOverrideSettingCustomFieldName.html)
- [LogThreatWeightApplication](docs/classes/Fortigate-FortiOS-Model-CMDB-LogThreatWeightApplication.html)
- [LogThreatWeightGeolocation](docs/classes/Fortigate-FortiOS-Model-CMDB-LogThreatWeightGeolocation.html)
- [LogThreatWeightIps](docs/classes/Fortigate-FortiOS-Model-CMDB-LogThreatWeightIps.html)
- [LogThreatWeightLevel](docs/classes/Fortigate-FortiOS-Model-CMDB-LogThreatWeightLevel.html)
- [LogThreatWeightMalware](docs/classes/Fortigate-FortiOS-Model-CMDB-LogThreatWeightMalware.html)
- [LogThreatWeightWeb](docs/classes/Fortigate-FortiOS-Model-CMDB-LogThreatWeightWeb.html)
- [ReportChartNameCategorySeries](docs/classes/Fortigate-FortiOS-Model-CMDB-ReportChartNameCategorySeries.html)
- [ReportChartNameColumn](docs/classes/Fortigate-FortiOS-Model-CMDB-ReportChartNameColumn.html)
- [ReportChartNameDrillDownCharts](docs/classes/Fortigate-FortiOS-Model-CMDB-ReportChartNameDrillDownCharts.html)
- [ReportChartNameMapping](docs/classes/Fortigate-FortiOS-Model-CMDB-ReportChartNameMapping.html)
- [ReportChartNameValueSeries](docs/classes/Fortigate-FortiOS-Model-CMDB-ReportChartNameValueSeries.html)
- [ReportChartNameXSeries](docs/classes/Fortigate-FortiOS-Model-CMDB-ReportChartNameXSeries.html)
- [ReportChartNameYSeries](docs/classes/Fortigate-FortiOS-Model-CMDB-ReportChartNameYSeries.html)
- [ReportDatasetNameField](docs/classes/Fortigate-FortiOS-Model-CMDB-ReportDatasetNameField.html)
- [ReportDatasetNameParameters](docs/classes/Fortigate-FortiOS-Model-CMDB-ReportDatasetNameParameters.html)
- [ReportLayoutNameBodyItem](docs/classes/Fortigate-FortiOS-Model-CMDB-ReportLayoutNameBodyItem.html)
- [ReportLayoutNameFooter](docs/classes/Fortigate-FortiOS-Model-CMDB-ReportLayoutNameFooter.html)
- [ReportLayoutNameHeader](docs/classes/Fortigate-FortiOS-Model-CMDB-ReportLayoutNameHeader.html)
- [ReportLayoutNameHeaderItem](docs/classes/Fortigate-FortiOS-Model-CMDB-ReportLayoutNameHeaderItem.html)
- [ReportLayoutNameList](docs/classes/Fortigate-FortiOS-Model-CMDB-ReportLayoutNameList.html)
- [ReportLayoutNamePage](docs/classes/Fortigate-FortiOS-Model-CMDB-ReportLayoutNamePage.html)
- [ReportLayoutNameParameters](docs/classes/Fortigate-FortiOS-Model-CMDB-ReportLayoutNameParameters.html)
- [RouterAccessList6NameRule](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterAccessList6NameRule.html)
- [RouterAccessListNameRule](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterAccessListNameRule.html)
- [RouterAspathListNameRule](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterAspathListNameRule.html)
- [RouterBfd6Neighbor](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterBfd6Neighbor.html)
- [RouterBfdNeighbor](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterBfdNeighbor.html)
- [RouterBgpAdminDistance](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterBgpAdminDistance.html)
- [RouterBgpAggregateAddress](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterBgpAggregateAddress.html)
- [RouterBgpAggregateAddress6](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterBgpAggregateAddress6.html)
- [RouterBgpConditionalAdvertise](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterBgpConditionalAdvertise.html)
- [RouterBgpConfederationPeers](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterBgpConfederationPeers.html)
- [RouterBgpNeighbor](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterBgpNeighbor.html)
- [RouterBgpNeighborGroup](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterBgpNeighborGroup.html)
- [RouterBgpNeighborRange](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterBgpNeighborRange.html)
- [RouterBgpNeighborRange6](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterBgpNeighborRange6.html)
- [RouterBgpNetwork](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterBgpNetwork.html)
- [RouterBgpNetwork6](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterBgpNetwork6.html)
- [RouterBgpRedistribute](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterBgpRedistribute.html)
- [RouterBgpTarget](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterBgpTarget.html)
- [RouterBgpVrfLeak](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterBgpVrfLeak.html)
- [RouterCommunityListNameRule](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterCommunityListNameRule.html)
- [RouterIsisIsisInterface](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterIsisIsisInterface.html)
- [RouterIsisIsisNet](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterIsisIsisNet.html)
- [RouterIsisRedistribute](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterIsisRedistribute.html)
- [RouterIsisRedistribute6](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterIsisRedistribute6.html)
- [RouterIsisSummaryAddress](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterIsisSummaryAddress.html)
- [RouterIsisSummaryAddress6](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterIsisSummaryAddress6.html)
- [RouterKeyChainNameKey](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterKeyChainNameKey.html)
- [RouterMulticast6Interface](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterMulticast6Interface.html)
- [RouterMulticast6PimSmGlobal](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterMulticast6PimSmGlobal.html)
- [RouterMulticast6RpAddress](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterMulticast6RpAddress.html)
- [RouterMulticastFlowNameFlows](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterMulticastFlowNameFlows.html)
- [RouterMulticastIgmp](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterMulticastIgmp.html)
- [RouterMulticastInterface](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterMulticastInterface.html)
- [RouterMulticastJoinGroup](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterMulticastJoinGroup.html)
- [RouterMulticastPimSmGlobal](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterMulticastPimSmGlobal.html)
- [RouterMulticastRpAddress](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterMulticastRpAddress.html)
- [RouterOspf6Area](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterOspf6Area.html)
- [RouterOspf6IpsecKeys](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterOspf6IpsecKeys.html)
- [RouterOspf6Neighbor](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterOspf6Neighbor.html)
- [RouterOspf6Ospf6Interface](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterOspf6Ospf6Interface.html)
- [RouterOspf6Range](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterOspf6Range.html)
- [RouterOspf6Redistribute](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterOspf6Redistribute.html)
- [RouterOspf6SummaryAddress](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterOspf6SummaryAddress.html)
- [RouterOspf6VirtualLink](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterOspf6VirtualLink.html)
- [RouterOspfArea](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterOspfArea.html)
- [RouterOspfDistributeList](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterOspfDistributeList.html)
- [RouterOspfFilterList](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterOspfFilterList.html)
- [RouterOspfMd5Keys](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterOspfMd5Keys.html)
- [RouterOspfNeighbor](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterOspfNeighbor.html)
- [RouterOspfNetwork](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterOspfNetwork.html)
- [RouterOspfOspfInterface](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterOspfOspfInterface.html)
- [RouterOspfPassiveInterface](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterOspfPassiveInterface.html)
- [RouterOspfRange](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterOspfRange.html)
- [RouterOspfRedistribute](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterOspfRedistribute.html)
- [RouterOspfSummaryAddress](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterOspfSummaryAddress.html)
- [RouterOspfVirtualLink](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterOspfVirtualLink.html)
- [RouterPolicySeqNumInputDevice](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterPolicySeqNumInputDevice.html)
- [RouterPolicySeqNumInternetServiceCustom](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterPolicySeqNumInternetServiceCustom.html)
- [RouterPolicySeqNumInternetServiceId](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterPolicySeqNumInternetServiceId.html)
- [RouterPolicySeqNumSrc](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterPolicySeqNumSrc.html)
- [RouterPolicySeqNumSrcaddr](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterPolicySeqNumSrcaddr.html)
- [RouterPrefixList6NameRule](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterPrefixList6NameRule.html)
- [RouterPrefixListNameRule](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterPrefixListNameRule.html)
- [RouterRipDistance](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterRipDistance.html)
- [RouterRipDistributeList](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterRipDistributeList.html)
- [RouterRipInterface](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterRipInterface.html)
- [RouterRipNeighbor](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterRipNeighbor.html)
- [RouterRipNetwork](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterRipNetwork.html)
- [RouterRipOffsetList](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterRipOffsetList.html)
- [RouterRipRedistribute](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterRipRedistribute.html)
- [RouterRipngAggregateAddress](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterRipngAggregateAddress.html)
- [RouterRipngDistance](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterRipngDistance.html)
- [RouterRipngInterface](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterRipngInterface.html)
- [RouterRipngNeighbor](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterRipngNeighbor.html)
- [RouterRipngNetwork](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterRipngNetwork.html)
- [RouterRipngOffsetList](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterRipngOffsetList.html)
- [RouterRouteMapNameRule](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterRouteMapNameRule.html)
- [RouterRouteMapNameSetAspath](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterRouteMapNameSetAspath.html)
- [RouterRouteMapNameSetCommunity](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterRouteMapNameSetCommunity.html)
- [RouterRouteMapNameSetExtcommunityRt](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterRouteMapNameSetExtcommunityRt.html)
- [RouterRouteMapNameSetExtcommunitySoo](docs/classes/Fortigate-FortiOS-Model-CMDB-RouterRouteMapNameSetExtcommunitySoo.html)
- [SshFilterProfileNameShellCommands](docs/classes/Fortigate-FortiOS-Model-CMDB-SshFilterProfileNameShellCommands.html)
- [SwitchControllerGlobalCustomCommand](docs/classes/Fortigate-FortiOS-Model-CMDB-SwitchControllerGlobalCustomCommand.html)
- [SwitchControllerGlobalDisableDiscovery](docs/classes/Fortigate-FortiOS-Model-CMDB-SwitchControllerGlobalDisableDiscovery.html)
- [SwitchControllerLldpProfileNameCustomTlvs](docs/classes/Fortigate-FortiOS-Model-CMDB-SwitchControllerLldpProfileNameCustomTlvs.html)
- [SwitchControllerLldpProfileNameMedLocationService](docs/classes/Fortigate-FortiOS-Model-CMDB-SwitchControllerLldpProfileNameMedLocationService.html)
- [SwitchControllerLldpProfileNameMedNetworkPolicy](docs/classes/Fortigate-FortiOS-Model-CMDB-SwitchControllerLldpProfileNameMedNetworkPolicy.html)
- [SwitchControllerLocationNameAddressCivic](docs/classes/Fortigate-FortiOS-Model-CMDB-SwitchControllerLocationNameAddressCivic.html)
- [SwitchControllerLocationNameCoordinates](docs/classes/Fortigate-FortiOS-Model-CMDB-SwitchControllerLocationNameCoordinates.html)
- [SwitchControllerLocationNameElinNumber](docs/classes/Fortigate-FortiOS-Model-CMDB-SwitchControllerLocationNameElinNumber.html)
- [SwitchControllerManagedSwitchSwitchId8021XSettings](docs/classes/Fortigate-FortiOS-Model-CMDB-SwitchControllerManagedSwitchSwitchId8021XSettings.html)
- [SwitchControllerManagedSwitchSwitchIdAllowedVlans](docs/classes/Fortigate-FortiOS-Model-CMDB-SwitchControllerManagedSwitchSwitchIdAllowedVlans.html)
- [SwitchControllerManagedSwitchSwitchIdBindingEntry](docs/classes/Fortigate-FortiOS-Model-CMDB-SwitchControllerManagedSwitchSwitchIdBindingEntry.html)
- [SwitchControllerManagedSwitchSwitchIdCustomCommand](docs/classes/Fortigate-FortiOS-Model-CMDB-SwitchControllerManagedSwitchSwitchIdCustomCommand.html)
- [SwitchControllerManagedSwitchSwitchIdExportTags](docs/classes/Fortigate-FortiOS-Model-CMDB-SwitchControllerManagedSwitchSwitchIdExportTags.html)
- [SwitchControllerManagedSwitchSwitchIdHosts](docs/classes/Fortigate-FortiOS-Model-CMDB-SwitchControllerManagedSwitchSwitchIdHosts.html)
- [SwitchControllerManagedSwitchSwitchIdIgmpSnooping](docs/classes/Fortigate-FortiOS-Model-CMDB-SwitchControllerManagedSwitchSwitchIdIgmpSnooping.html)
- [SwitchControllerManagedSwitchSwitchIdIpSourceGuard](docs/classes/Fortigate-FortiOS-Model-CMDB-SwitchControllerManagedSwitchSwitchIdIpSourceGuard.html)
- [SwitchControllerManagedSwitchSwitchIdMembers](docs/classes/Fortigate-FortiOS-Model-CMDB-SwitchControllerManagedSwitchSwitchIdMembers.html)
- [SwitchControllerManagedSwitchSwitchIdMirror](docs/classes/Fortigate-FortiOS-Model-CMDB-SwitchControllerManagedSwitchSwitchIdMirror.html)
- [SwitchControllerManagedSwitchSwitchIdPorts](docs/classes/Fortigate-FortiOS-Model-CMDB-SwitchControllerManagedSwitchSwitchIdPorts.html)
- [SwitchControllerManagedSwitchSwitchIdRemoteLog](docs/classes/Fortigate-FortiOS-Model-CMDB-SwitchControllerManagedSwitchSwitchIdRemoteLog.html)
- [SwitchControllerManagedSwitchSwitchIdSnmpCommunity](docs/classes/Fortigate-FortiOS-Model-CMDB-SwitchControllerManagedSwitchSwitchIdSnmpCommunity.html)
- [SwitchControllerManagedSwitchSwitchIdSnmpSysinfo](docs/classes/Fortigate-FortiOS-Model-CMDB-SwitchControllerManagedSwitchSwitchIdSnmpSysinfo.html)
- [SwitchControllerManagedSwitchSwitchIdSnmpTrapThreshold](docs/classes/Fortigate-FortiOS-Model-CMDB-SwitchControllerManagedSwitchSwitchIdSnmpTrapThreshold.html)
- [SwitchControllerManagedSwitchSwitchIdSnmpUser](docs/classes/Fortigate-FortiOS-Model-CMDB-SwitchControllerManagedSwitchSwitchIdSnmpUser.html)
- [SwitchControllerManagedSwitchSwitchIdStaticMac](docs/classes/Fortigate-FortiOS-Model-CMDB-SwitchControllerManagedSwitchSwitchIdStaticMac.html)
- [SwitchControllerManagedSwitchSwitchIdStormControl](docs/classes/Fortigate-FortiOS-Model-CMDB-SwitchControllerManagedSwitchSwitchIdStormControl.html)
- [SwitchControllerManagedSwitchSwitchIdStpInstance](docs/classes/Fortigate-FortiOS-Model-CMDB-SwitchControllerManagedSwitchSwitchIdStpInstance.html)
- [SwitchControllerManagedSwitchSwitchIdStpSettings](docs/classes/Fortigate-FortiOS-Model-CMDB-SwitchControllerManagedSwitchSwitchIdStpSettings.html)
- [SwitchControllerManagedSwitchSwitchIdSwitchLog](docs/classes/Fortigate-FortiOS-Model-CMDB-SwitchControllerManagedSwitchSwitchIdSwitchLog.html)
- [SwitchControllerSecurityPolicy8021XNameUserGroup](docs/classes/Fortigate-FortiOS-Model-CMDB-SwitchControllerSecurityPolicy8021XNameUserGroup.html)
- [SwitchControllerSwitchGroupNameMembers](docs/classes/Fortigate-FortiOS-Model-CMDB-SwitchControllerSwitchGroupNameMembers.html)
- [SystemAccprofileNameFwgrpPermission](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemAccprofileNameFwgrpPermission.html)
- [SystemAccprofileNameLoggrpPermission](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemAccprofileNameLoggrpPermission.html)
- [SystemAccprofileNameNetgrpPermission](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemAccprofileNameNetgrpPermission.html)
- [SystemAccprofileNameSysgrpPermission](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemAccprofileNameSysgrpPermission.html)
- [SystemAccprofileNameUtmgrpPermission](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemAccprofileNameUtmgrpPermission.html)
- [SystemAdminNameGuestUsergroups](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemAdminNameGuestUsergroups.html)
- [SystemAdminNameVdom](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemAdminNameVdom.html)
- [SystemAlarmFwPolicyViolations](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemAlarmFwPolicyViolations.html)
- [SystemAlarmGroups](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemAlarmGroups.html)
- [SystemApiUserNameTrusthost](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemApiUserNameTrusthost.html)
- [SystemAutomationActionNameEmailTo](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemAutomationActionNameEmailTo.html)
- [SystemAutomationActionNameHeaders](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemAutomationActionNameHeaders.html)
- [SystemAutomationActionNameSdnConnector](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemAutomationActionNameSdnConnector.html)
- [SystemAutomationDestinationNameDestination](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemAutomationDestinationNameDestination.html)
- [SystemAutomationStitchNameAction](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemAutomationStitchNameAction.html)
- [SystemAutomationStitchNameDestination](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemAutomationStitchNameDestination.html)
- [SystemAutomationTriggerNameFields](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemAutomationTriggerNameFields.html)
- [SystemCentralManagementServerList](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemCentralManagementServerList.html)
- [SystemClusterSyncSyncIdCustomService](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemClusterSyncSyncIdCustomService.html)
- [SystemClusterSyncSyncIdSessionSyncFilter](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemClusterSyncSyncIdSessionSyncFilter.html)
- [SystemClusterSyncSyncIdSyncvd](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemClusterSyncSyncIdSyncvd.html)
- [SystemCsfFabricDevice](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemCsfFabricDevice.html)
- [SystemCsfTrustedList](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemCsfTrustedList.html)
- [SystemDdnsDdnsidDdnsServerAddr](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemDdnsDdnsidDdnsServerAddr.html)
- [SystemDdnsDdnsidMonitorInterface](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemDdnsDdnsidMonitorInterface.html)
- [SystemDhcp6ServerIdIpRange](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemDhcp6ServerIdIpRange.html)
- [SystemDhcp6ServerIdPrefixRange](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemDhcp6ServerIdPrefixRange.html)
- [SystemDhcpServerIdIpRange](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemDhcpServerIdIpRange.html)
- [SystemDhcpServerIdOptions](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemDhcpServerIdOptions.html)
- [SystemDhcpServerIdReservedAddress](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemDhcpServerIdReservedAddress.html)
- [SystemDhcpServerIdTftpServer](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemDhcpServerIdTftpServer.html)
- [SystemDhcpServerIdVciString](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemDhcpServerIdVciString.html)
- [SystemDnsDatabaseNameDnsEntry](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemDnsDatabaseNameDnsEntry.html)
- [SystemDnsDomain](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemDnsDomain.html)
- [SystemDnsServerHostname](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemDnsServerHostname.html)
- [SystemGeoipOverrideNameIp6Range](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemGeoipOverrideNameIp6Range.html)
- [SystemGeoipOverrideNameIpRange](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemGeoipOverrideNameIpRange.html)
- [SystemHaHaMgmtInterfaces](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemHaHaMgmtInterfaces.html)
- [SystemHaSecondaryVcluster](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemHaSecondaryVcluster.html)
- [SystemInterfaceNameClientOptions](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemInterfaceNameClientOptions.html)
- [SystemInterfaceNameDnssl](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemInterfaceNameDnssl.html)
- [SystemInterfaceNameFailAlertInterfaces](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemInterfaceNameFailAlertInterfaces.html)
- [SystemInterfaceNameIp6DelegatedPrefixList](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemInterfaceNameIp6DelegatedPrefixList.html)
- [SystemInterfaceNameIp6ExtraAddr](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemInterfaceNameIp6ExtraAddr.html)
- [SystemInterfaceNameIp6PrefixList](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemInterfaceNameIp6PrefixList.html)
- [SystemInterfaceNameIpv6](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemInterfaceNameIpv6.html)
- [SystemInterfaceNameL2tpClientSettings](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemInterfaceNameL2tpClientSettings.html)
- [SystemInterfaceNameMember](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemInterfaceNameMember.html)
- [SystemInterfaceNameProxyArp](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemInterfaceNameProxyArp.html)
- [SystemInterfaceNameSecondaryip](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemInterfaceNameSecondaryip.html)
- [SystemInterfaceNameSecurityGroups](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemInterfaceNameSecurityGroups.html)
- [SystemInterfaceNameTagging](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemInterfaceNameTagging.html)
- [SystemInterfaceNameTags](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemInterfaceNameTags.html)
- [SystemInterfaceNameVrrp](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemInterfaceNameVrrp.html)
- [SystemInterfaceNameVrrp6](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemInterfaceNameVrrp6.html)
- [SystemIpsecAggregateNameMember](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemIpsecAggregateNameMember.html)
- [SystemLinkMonitorNameServer](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemLinkMonitorNameServer.html)
- [SystemLldpNetworkPolicyNameVoice](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemLldpNetworkPolicyNameVoice.html)
- [SystemMobileTunnelNameNetwork](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemMobileTunnelNameNetwork.html)
- [SystemNat64SecondaryPrefix](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemNat64SecondaryPrefix.html)
- [SystemNpuFpAnomaly](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemNpuFpAnomaly.html)
- [SystemNtpNtpserver](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemNtpNtpserver.html)
- [SystemSamlAssertionAttributes](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSamlAssertionAttributes.html)
- [SystemSamlServiceProviders](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSamlServiceProviders.html)
- [SystemSdnConnectorNameExternalIp](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSdnConnectorNameExternalIp.html)
- [SystemSdnConnectorNameIp](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSdnConnectorNameIp.html)
- [SystemSdnConnectorNameNic](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSdnConnectorNameNic.html)
- [SystemSdnConnectorNameRoute](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSdnConnectorNameRoute.html)
- [SystemSdnConnectorNameRoute1](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSdnConnectorNameRoute1.html)
- [SystemSdnConnectorNameRouteTable](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSdnConnectorNameRouteTable.html)
- [SystemSdnConnectorNameServerList](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSdnConnectorNameServerList.html)
- [SystemSdwanDst](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSdwanDst.html)
- [SystemSdwanDst6](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSdwanDst6.html)
- [SystemSdwanDuplication](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSdwanDuplication.html)
- [SystemSdwanFailAlertInterfaces](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSdwanFailAlertInterfaces.html)
- [SystemSdwanHealthCheck](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSdwanHealthCheck.html)
- [SystemSdwanHealthCheck1](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSdwanHealthCheck1.html)
- [SystemSdwanInternetServiceAppCtrl](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSdwanInternetServiceAppCtrl.html)
- [SystemSdwanInternetServiceAppCtrlGroup](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSdwanInternetServiceAppCtrlGroup.html)
- [SystemSdwanInternetServiceCustom](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSdwanInternetServiceCustom.html)
- [SystemSdwanInternetServiceCustomGroup](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSdwanInternetServiceCustomGroup.html)
- [SystemSdwanInternetServiceGroup](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSdwanInternetServiceGroup.html)
- [SystemSdwanInternetServiceName](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSdwanInternetServiceName.html)
- [SystemSdwanMembers](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSdwanMembers.html)
- [SystemSdwanMembers1](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSdwanMembers1.html)
- [SystemSdwanNeighbor](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSdwanNeighbor.html)
- [SystemSdwanService](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSdwanService.html)
- [SystemSdwanService1](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSdwanService1.html)
- [SystemSdwanServiceId](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSdwanServiceId.html)
- [SystemSdwanSla](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSdwanSla.html)
- [SystemSdwanSla1](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSdwanSla1.html)
- [SystemSdwanSrcintf](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSdwanSrcintf.html)
- [SystemSdwanUsers](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSdwanUsers.html)
- [SystemSdwanZone](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSdwanZone.html)
- [SystemSessionTtlPort](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSessionTtlPort.html)
- [SystemSettingsGuiDefaultPolicyColumns](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSettingsGuiDefaultPolicyColumns.html)
- [SystemSnmpCommunityIdHosts](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSnmpCommunityIdHosts.html)
- [SystemSnmpCommunityIdHosts6](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSnmpCommunityIdHosts6.html)
- [SystemSpeedTestServerNameHost](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemSpeedTestServerNameHost.html)
- [SystemVirtualSwitchNamePort](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemVirtualSwitchNamePort.html)
- [SystemVxlanNameRemoteIp6](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemVxlanNameRemoteIp6.html)
- [SystemZoneNameInterface](docs/classes/Fortigate-FortiOS-Model-CMDB-SystemZoneNameInterface.html)
- [UserDomainControllerNameExtraServer](docs/classes/Fortigate-FortiOS-Model-CMDB-UserDomainControllerNameExtraServer.html)
- [UserDomainControllerNameLdapServer](docs/classes/Fortigate-FortiOS-Model-CMDB-UserDomainControllerNameLdapServer.html)
- [UserExchangeNameKdcIp](docs/classes/Fortigate-FortiOS-Model-CMDB-UserExchangeNameKdcIp.html)
- [UserFssoPollingIdAdgrp](docs/classes/Fortigate-FortiOS-Model-CMDB-UserFssoPollingIdAdgrp.html)
- [UserGroupNameGuest](docs/classes/Fortigate-FortiOS-Model-CMDB-UserGroupNameGuest.html)
- [UserGroupNameMatch](docs/classes/Fortigate-FortiOS-Model-CMDB-UserGroupNameMatch.html)
- [UserGroupNameMember](docs/classes/Fortigate-FortiOS-Model-CMDB-UserGroupNameMember.html)
- [UserNacPolicyNameSwitchScope](docs/classes/Fortigate-FortiOS-Model-CMDB-UserNacPolicyNameSwitchScope.html)
- [UserPeergrpNameMember](docs/classes/Fortigate-FortiOS-Model-CMDB-UserPeergrpNameMember.html)
- [UserQuarantineMacs](docs/classes/Fortigate-FortiOS-Model-CMDB-UserQuarantineMacs.html)
- [UserQuarantineTargets](docs/classes/Fortigate-FortiOS-Model-CMDB-UserQuarantineTargets.html)
- [UserRadiusNameAccountingServer](docs/classes/Fortigate-FortiOS-Model-CMDB-UserRadiusNameAccountingServer.html)
- [UserRadiusNameClass](docs/classes/Fortigate-FortiOS-Model-CMDB-UserRadiusNameClass.html)
- [UserSecurityExemptListNameRule](docs/classes/Fortigate-FortiOS-Model-CMDB-UserSecurityExemptListNameRule.html)
- [UserSecurityExemptListNameService](docs/classes/Fortigate-FortiOS-Model-CMDB-UserSecurityExemptListNameService.html)
- [UserSecurityExemptListNameSrcaddr](docs/classes/Fortigate-FortiOS-Model-CMDB-UserSecurityExemptListNameSrcaddr.html)
- [UserSettingAuthPorts](docs/classes/Fortigate-FortiOS-Model-CMDB-UserSettingAuthPorts.html)
- [VoipProfileNameSccp](docs/classes/Fortigate-FortiOS-Model-CMDB-VoipProfileNameSccp.html)
- [VoipProfileNameSip](docs/classes/Fortigate-FortiOS-Model-CMDB-VoipProfileNameSip.html)
- [VpnIpsecConcentratorNameMember](docs/classes/Fortigate-FortiOS-Model-CMDB-VpnIpsecConcentratorNameMember.html)
- [VpnIpsecPhase1NameBackupGateway](docs/classes/Fortigate-FortiOS-Model-CMDB-VpnIpsecPhase1NameBackupGateway.html)
- [VpnIpsecPhase1NameCertificate](docs/classes/Fortigate-FortiOS-Model-CMDB-VpnIpsecPhase1NameCertificate.html)
- [VpnIpsecPhase1NameIpv4ExcludeRange](docs/classes/Fortigate-FortiOS-Model-CMDB-VpnIpsecPhase1NameIpv4ExcludeRange.html)
- [VpnIpsecPhase1NameIpv6ExcludeRange](docs/classes/Fortigate-FortiOS-Model-CMDB-VpnIpsecPhase1NameIpv6ExcludeRange.html)
- [VpnOcvpnAuthGroups](docs/classes/Fortigate-FortiOS-Model-CMDB-VpnOcvpnAuthGroups.html)
- [VpnOcvpnForticlientAccess](docs/classes/Fortigate-FortiOS-Model-CMDB-VpnOcvpnForticlientAccess.html)
- [VpnOcvpnOverlays](docs/classes/Fortigate-FortiOS-Model-CMDB-VpnOcvpnOverlays.html)
- [VpnOcvpnOverlays1](docs/classes/Fortigate-FortiOS-Model-CMDB-VpnOcvpnOverlays1.html)
- [VpnOcvpnSubnets](docs/classes/Fortigate-FortiOS-Model-CMDB-VpnOcvpnSubnets.html)
- [VpnSslSettingsAuthenticationRule](docs/classes/Fortigate-FortiOS-Model-CMDB-VpnSslSettingsAuthenticationRule.html)
- [VpnSslSettingsSourceAddress6](docs/classes/Fortigate-FortiOS-Model-CMDB-VpnSslSettingsSourceAddress6.html)
- [VpnSslSettingsSourceInterface](docs/classes/Fortigate-FortiOS-Model-CMDB-VpnSslSettingsSourceInterface.html)
- [VpnSslWebHostCheckSoftwareNameCheckItemList](docs/classes/Fortigate-FortiOS-Model-CMDB-VpnSslWebHostCheckSoftwareNameCheckItemList.html)
- [VpnSslWebHostCheckSoftwareNameMd5s](docs/classes/Fortigate-FortiOS-Model-CMDB-VpnSslWebHostCheckSoftwareNameMd5s.html)
- [VpnSslWebPortalNameBookmarkGroup](docs/classes/Fortigate-FortiOS-Model-CMDB-VpnSslWebPortalNameBookmarkGroup.html)
- [VpnSslWebPortalNameBookmarks](docs/classes/Fortigate-FortiOS-Model-CMDB-VpnSslWebPortalNameBookmarks.html)
- [VpnSslWebPortalNameFormData](docs/classes/Fortigate-FortiOS-Model-CMDB-VpnSslWebPortalNameFormData.html)
- [VpnSslWebPortalNameHostCheckPolicy](docs/classes/Fortigate-FortiOS-Model-CMDB-VpnSslWebPortalNameHostCheckPolicy.html)
- [VpnSslWebPortalNameMacAddrCheckRule](docs/classes/Fortigate-FortiOS-Model-CMDB-VpnSslWebPortalNameMacAddrCheckRule.html)
- [VpnSslWebPortalNameMacAddrList](docs/classes/Fortigate-FortiOS-Model-CMDB-VpnSslWebPortalNameMacAddrList.html)
- [VpnSslWebPortalNameOsCheckList](docs/classes/Fortigate-FortiOS-Model-CMDB-VpnSslWebPortalNameOsCheckList.html)
- [VpnSslWebPortalNameSplitDns](docs/classes/Fortigate-FortiOS-Model-CMDB-VpnSslWebPortalNameSplitDns.html)
- [VpnSslWebUserBookmarkNameBookmarks](docs/classes/Fortigate-FortiOS-Model-CMDB-VpnSslWebUserBookmarkNameBookmarks.html)
- [WafProfileNameAccessPattern](docs/classes/Fortigate-FortiOS-Model-CMDB-WafProfileNameAccessPattern.html)
- [WafProfileNameAddressList](docs/classes/Fortigate-FortiOS-Model-CMDB-WafProfileNameAddressList.html)
- [WafProfileNameConstraint](docs/classes/Fortigate-FortiOS-Model-CMDB-WafProfileNameConstraint.html)
- [WafProfileNameContentLength](docs/classes/Fortigate-FortiOS-Model-CMDB-WafProfileNameContentLength.html)
- [WafProfileNameCustomSignature](docs/classes/Fortigate-FortiOS-Model-CMDB-WafProfileNameCustomSignature.html)
- [WafProfileNameDisabledSignature](docs/classes/Fortigate-FortiOS-Model-CMDB-WafProfileNameDisabledSignature.html)
- [WafProfileNameDisabledSubClass](docs/classes/Fortigate-FortiOS-Model-CMDB-WafProfileNameDisabledSubClass.html)
- [WafProfileNameException](docs/classes/Fortigate-FortiOS-Model-CMDB-WafProfileNameException.html)
- [WafProfileNameHeaderLength](docs/classes/Fortigate-FortiOS-Model-CMDB-WafProfileNameHeaderLength.html)
- [WafProfileNameLineLength](docs/classes/Fortigate-FortiOS-Model-CMDB-WafProfileNameLineLength.html)
- [WafProfileNameMainClass](docs/classes/Fortigate-FortiOS-Model-CMDB-WafProfileNameMainClass.html)
- [WafProfileNameMaxCookie](docs/classes/Fortigate-FortiOS-Model-CMDB-WafProfileNameMaxCookie.html)
- [WafProfileNameMaxHeaderLine](docs/classes/Fortigate-FortiOS-Model-CMDB-WafProfileNameMaxHeaderLine.html)
- [WafProfileNameMaxRangeSegment](docs/classes/Fortigate-FortiOS-Model-CMDB-WafProfileNameMaxRangeSegment.html)
- [WafProfileNameMaxUrlParam](docs/classes/Fortigate-FortiOS-Model-CMDB-WafProfileNameMaxUrlParam.html)
- [WafProfileNameMethod](docs/classes/Fortigate-FortiOS-Model-CMDB-WafProfileNameMethod.html)
- [WafProfileNameMethodPolicy](docs/classes/Fortigate-FortiOS-Model-CMDB-WafProfileNameMethodPolicy.html)
- [WafProfileNameParamLength](docs/classes/Fortigate-FortiOS-Model-CMDB-WafProfileNameParamLength.html)
- [WafProfileNameSignature](docs/classes/Fortigate-FortiOS-Model-CMDB-WafProfileNameSignature.html)
- [WafProfileNameUrlAccess](docs/classes/Fortigate-FortiOS-Model-CMDB-WafProfileNameUrlAccess.html)
- [WafProfileNameUrlParamLength](docs/classes/Fortigate-FortiOS-Model-CMDB-WafProfileNameUrlParamLength.html)
- [WafProfileNameVersion](docs/classes/Fortigate-FortiOS-Model-CMDB-WafProfileNameVersion.html)
- [WanoptCacheServiceDstPeer](docs/classes/Fortigate-FortiOS-Model-CMDB-WanoptCacheServiceDstPeer.html)
- [WanoptContentDeliveryNetworkRuleNameContentId](docs/classes/Fortigate-FortiOS-Model-CMDB-WanoptContentDeliveryNetworkRuleNameContentId.html)
- [WanoptContentDeliveryNetworkRuleNameHostDomainNameSuffix](docs/classes/Fortigate-FortiOS-Model-CMDB-WanoptContentDeliveryNetworkRuleNameHostDomainNameSuffix.html)
- [WanoptContentDeliveryNetworkRuleNameMatchEntries](docs/classes/Fortigate-FortiOS-Model-CMDB-WanoptContentDeliveryNetworkRuleNameMatchEntries.html)
- [WanoptContentDeliveryNetworkRuleNamePattern](docs/classes/Fortigate-FortiOS-Model-CMDB-WanoptContentDeliveryNetworkRuleNamePattern.html)
- [WanoptContentDeliveryNetworkRuleNameRules](docs/classes/Fortigate-FortiOS-Model-CMDB-WanoptContentDeliveryNetworkRuleNameRules.html)
- [WanoptProfileNameCifs](docs/classes/Fortigate-FortiOS-Model-CMDB-WanoptProfileNameCifs.html)
- [WanoptProfileNameHttp](docs/classes/Fortigate-FortiOS-Model-CMDB-WanoptProfileNameHttp.html)
- [WanoptProfileNameMapi](docs/classes/Fortigate-FortiOS-Model-CMDB-WanoptProfileNameMapi.html)
- [WanoptProfileNameTcp](docs/classes/Fortigate-FortiOS-Model-CMDB-WanoptProfileNameTcp.html)
- [WebProxyExplicitPacPolicy](docs/classes/Fortigate-FortiOS-Model-CMDB-WebProxyExplicitPacPolicy.html)
- [WebProxyForwardServerGroupNameServerList](docs/classes/Fortigate-FortiOS-Model-CMDB-WebProxyForwardServerGroupNameServerList.html)
- [WebProxyProfileNameHeaders](docs/classes/Fortigate-FortiOS-Model-CMDB-WebProxyProfileNameHeaders.html)
- [WebfilterContentHeaderIdEntries](docs/classes/Fortigate-FortiOS-Model-CMDB-WebfilterContentHeaderIdEntries.html)
- [WebfilterContentIdEntries](docs/classes/Fortigate-FortiOS-Model-CMDB-WebfilterContentIdEntries.html)
- [WebfilterProfileNameAntiphish](docs/classes/Fortigate-FortiOS-Model-CMDB-WebfilterProfileNameAntiphish.html)
- [WebfilterProfileNameCustomPatterns](docs/classes/Fortigate-FortiOS-Model-CMDB-WebfilterProfileNameCustomPatterns.html)
- [WebfilterProfileNameFilters](docs/classes/Fortigate-FortiOS-Model-CMDB-WebfilterProfileNameFilters.html)
- [WebfilterProfileNameFtgdWf](docs/classes/Fortigate-FortiOS-Model-CMDB-WebfilterProfileNameFtgdWf.html)
- [WebfilterProfileNameInspectionEntries](docs/classes/Fortigate-FortiOS-Model-CMDB-WebfilterProfileNameInspectionEntries.html)
- [WebfilterProfileNameKeywordMatch](docs/classes/Fortigate-FortiOS-Model-CMDB-WebfilterProfileNameKeywordMatch.html)
- [WebfilterProfileNameOverride](docs/classes/Fortigate-FortiOS-Model-CMDB-WebfilterProfileNameOverride.html)
- [WebfilterProfileNameOvrdUserGroup](docs/classes/Fortigate-FortiOS-Model-CMDB-WebfilterProfileNameOvrdUserGroup.html)
- [WebfilterProfileNameProfile](docs/classes/Fortigate-FortiOS-Model-CMDB-WebfilterProfileNameProfile.html)
- [WebfilterProfileNameQuota](docs/classes/Fortigate-FortiOS-Model-CMDB-WebfilterProfileNameQuota.html)
- [WebfilterProfileNameWeb](docs/classes/Fortigate-FortiOS-Model-CMDB-WebfilterProfileNameWeb.html)
- [WebfilterProfileNameWispServers](docs/classes/Fortigate-FortiOS-Model-CMDB-WebfilterProfileNameWispServers.html)
- [WebfilterProfileNameYoutubeChannelFilter](docs/classes/Fortigate-FortiOS-Model-CMDB-WebfilterProfileNameYoutubeChannelFilter.html)
- [WebfilterUrlfilterIdEntries](docs/classes/Fortigate-FortiOS-Model-CMDB-WebfilterUrlfilterIdEntries.html)
- [WirelessControllerAccessControlListNameLayer3Ipv4Rules](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerAccessControlListNameLayer3Ipv4Rules.html)
- [WirelessControllerAccessControlListNameLayer3Ipv6Rules](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerAccessControlListNameLayer3Ipv6Rules.html)
- [WirelessControllerAddrgrpIdAddresses](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerAddrgrpIdAddresses.html)
- [WirelessControllerApcfgProfileNameCommandList](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerApcfgProfileNameCommandList.html)
- [WirelessControllerBonjourProfileNamePolicyList](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerBonjourProfileNamePolicyList.html)
- [WirelessControllerHotspot20Anqp3gppCellularNameMccMncList](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerHotspot20Anqp3gppCellularNameMccMncList.html)
- [WirelessControllerHotspot20AnqpNaiRealmNameAuthParam](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerHotspot20AnqpNaiRealmNameAuthParam.html)
- [WirelessControllerHotspot20AnqpNaiRealmNameEapMethod](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerHotspot20AnqpNaiRealmNameEapMethod.html)
- [WirelessControllerHotspot20AnqpNaiRealmNameNaiList](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerHotspot20AnqpNaiRealmNameNaiList.html)
- [WirelessControllerHotspot20AnqpRoamingConsortiumNameOiList](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerHotspot20AnqpRoamingConsortiumNameOiList.html)
- [WirelessControllerHotspot20AnqpVenueNameNameValueList](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerHotspot20AnqpVenueNameNameValueList.html)
- [WirelessControllerHotspot20H2qpOperatorNameNameValueList](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerHotspot20H2qpOperatorNameNameValueList.html)
- [WirelessControllerHotspot20H2qpOsuProviderNameFriendlyName](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerHotspot20H2qpOsuProviderNameFriendlyName.html)
- [WirelessControllerHotspot20H2qpOsuProviderNameServiceDescription](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerHotspot20H2qpOsuProviderNameServiceDescription.html)
- [WirelessControllerHotspot20HsProfileNameOsuProvider](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerHotspot20HsProfileNameOsuProvider.html)
- [WirelessControllerHotspot20IconNameIconList](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerHotspot20IconNameIconList.html)
- [WirelessControllerHotspot20QosMapNameDscpExcept](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerHotspot20QosMapNameDscpExcept.html)
- [WirelessControllerHotspot20QosMapNameDscpRange](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerHotspot20QosMapNameDscpRange.html)
- [WirelessControllerInterControllerInterControllerPeer](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerInterControllerInterControllerPeer.html)
- [WirelessControllerMpskProfileNameMpskGroup](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerMpskProfileNameMpskGroup.html)
- [WirelessControllerMpskProfileNameMpskKey](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerMpskProfileNameMpskKey.html)
- [WirelessControllerMpskProfileNameMpskSchedules](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerMpskProfileNameMpskSchedules.html)
- [WirelessControllerQosProfileNameDscpWmmVo](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerQosProfileNameDscpWmmVo.html)
- [WirelessControllerSettingOffendingSsid](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerSettingOffendingSsid.html)
- [WirelessControllerSnmpCommunity](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerSnmpCommunity.html)
- [WirelessControllerSnmpUser](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerSnmpUser.html)
- [WirelessControllerVapGroupNameVaps](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerVapGroupNameVaps.html)
- [WirelessControllerVapNameMacFilterList](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerVapNameMacFilterList.html)
- [WirelessControllerVapNamePortalMessageOverrides](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerVapNamePortalMessageOverrides.html)
- [WirelessControllerVapNameVlanPool](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerVapNameVlanPool.html)
- [WirelessControllerWtpGroupNameWtps](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerWtpGroupNameWtps.html)
- [WirelessControllerWtpProfileNameDenyMacList](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerWtpProfileNameDenyMacList.html)
- [WirelessControllerWtpProfileNameLbs](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerWtpProfileNameLbs.html)
- [WirelessControllerWtpProfileNamePlatform](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerWtpProfileNamePlatform.html)
- [WirelessControllerWtpProfileNameRadio1](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerWtpProfileNameRadio1.html)
- [WirelessControllerWtpProfileNameRadio2](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerWtpProfileNameRadio2.html)
- [WirelessControllerWtpProfileNameRadio3](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerWtpProfileNameRadio3.html)
- [WirelessControllerWtpWtpIdChannel](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerWtpWtpIdChannel.html)
- [WirelessControllerWtpWtpIdLan](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerWtpWtpIdLan.html)
- [WirelessControllerWtpWtpIdRadio1](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerWtpWtpIdRadio1.html)
- [WirelessControllerWtpWtpIdRadio2](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerWtpWtpIdRadio2.html)
- [WirelessControllerWtpWtpIdRadio3](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerWtpWtpIdRadio3.html)
- [WirelessControllerWtpWtpIdRadio4](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerWtpWtpIdRadio4.html)
- [WirelessControllerWtpWtpIdSplitTunnelingAcl](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerWtpWtpIdSplitTunnelingAcl.html)
- [WirelessControllerWtpWtpIdVaps](docs/classes/Fortigate-FortiOS-Model-CMDB-WirelessControllerWtpWtpIdVaps)

## Authorization

### APIKeyQueryParam

- **Type**: API key
- **API key parameter name**: access_token
- **Location**: URL query string

## Author

fosguiqateam@fortinet.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v2`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
