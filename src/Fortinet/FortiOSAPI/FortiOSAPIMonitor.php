<?php

/**
 * PHP library used for interacting with Fortigate firewall (FortiOS) configuration API (Monitor).
 * @author Benjamin Clerc <contact@benjamin-clerc.com>
 * @copyright Copyright (c) 2021, Benjamin Clerc.
 * @license MIT
 * @link https://github.com/benclerc/Fortinet-FortiOSAPI
 */

namespace Fortinet;

use stdClass;

/**
 * FortiOS API Monitor
 * @link https://fndn.fortinet.net/ Fortinet developer ressource center.
 */
class FortiOSAPIMonitor extends FortiOSAPI
{
	/**
	 * Retrieve a list of Azure applications that can be used for configuring an Azure SDN connector.
	 * Access Group: sysgrp.cfg
	 * @route  GET /azure/application-list
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllAzureApplicationList() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/azure/application-list', NULL, NULL, NULL);
	}


	/**
	 * Update the Azure application list data or get the status of an update.
	 * Access Group: sysgrp.cfg
	 * @route  POST /azure/application-list/refresh
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addAzureApplicationListRefresh(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/azure/application-list/refresh', NULL, NULL, $body);
	}


	/**
	 * List endpoint records.
	 * Access Group: utmgrp.endpoint-control
	 * @route  GET /endpoint-control/record-list
	 * @param  $intf_name Filter: Name of interface where the endpoint was detected.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllEndpointControlRecordList(string $intf_name = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/endpoint-control/record-list', NULL, ['intf_name'=>$intf_name], NULL);
	}


	/**
	 * Summary of FortiClient endpoint records.
	 * Access Group: utmgrp.endpoint-control
	 * @route  GET /endpoint-control/summary
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllEndpointControlSummary() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/endpoint-control/summary', NULL, NULL, NULL);
	}


	/**
	 * List available FortiClient installers.
	 * Access Group: utmgrp.endpoint-control
	 * @route  GET /endpoint-control/installer
	 * @param  $min_version Filter: Minimum installer version. (String of the format n[.n[.n]]).
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllEndpointControlInstaller(string $min_version = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/endpoint-control/installer', NULL, ['min_version'=>$min_version], NULL);
	}


	/**
	 * Download a FortiClient installer via FortiGuard.
	 * Access Group: utmgrp.endpoint-control
	 * @route  GET /endpoint-control/installer/download
	 * @param  $mkey Name of installer (image_id).
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllEndpointControlInstallerDownload(string $mkey) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/endpoint-control/installer/download', NULL, ['mkey'=>$mkey], NULL);
	}


	/**
	 * Download an endpoint avatar image.
	 * Access Group: utmgrp.endpoint-control
	 * @route  GET /endpoint-control/avatar/download
	 * @param  $uid Single FortiClient UID.
	 * @param  $user User name of the endpoint.
	 * @param  $fingerprint Avatar fingerprint.
	 * @param  $default Default avatar name ['authuser'|'unauthuser'|'authuser_72'|'unauthuser_72']. Default avatar when endpoint / device avatar is not available. If default is not set, Not found 404 is returned.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllEndpointControlAvatarDownload(
		string $uid = null,
		string $user = null,
		string $fingerprint = null,
		string $default = null
	) : stdClass {
		return $this->curlRequest('GET', '/monitor/endpoint-control/avatar/download', NULL, ['uid'=>$uid, 'user'=>$user, 'fingerprint'=>$fingerprint, 'default'=>$default], NULL);
	}


	/**
	 * Retrieve EMS connection status for a specific EMS.
	 * Access Group: utmgrp.endpoint-control
	 * @route  GET /endpoint-control/ems/status
	 * @param  $ems_name EMS server name (as defined in CLI table endpoint-control.fctems).
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllEndpointControlEmsStatus(string $ems_name) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/endpoint-control/ems/status', NULL, ['ems_name'=>$ems_name], NULL);
	}


	/**
	 * Retrieve authentication status of the EMS server certificate for a specific EMS.
	 * Access Group: utmgrp.endpoint-control
	 * @route  GET /endpoint-control/ems/cert-status
	 * @param  $ems_name EMS server name (as defined in CLI table endpoint-control.fctems).
	 * @param  $with_cert Return detailed certificate information. Available when the certificate is authenticated by installed CA certificates.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllEndpointControlEmsCertStatus(string $ems_name, bool $with_cert = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/endpoint-control/ems/cert-status', NULL, ['ems_name'=>$ems_name, 'with_cert'=>$with_cert], NULL);
	}


	/**
	 * Verify EMS server certificate for a specific EMS.
	 * Access Group: utmgrp.endpoint-control
	 * @route  POST /endpoint-control/ems/verify-cert
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addEndpointControlEmsVerifyCert(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/endpoint-control/ems/verify-cert', NULL, NULL, $body);
	}


	/**
	 * Retrieve status summary for all configured EMS.
	 * Access Group: utmgrp.endpoint-control
	 * @route  GET /endpoint-control/ems/status-summary
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllEndpointControlEmsStatusSummary() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/endpoint-control/ems/status-summary', NULL, NULL, NULL);
	}


	/**
	 * Retrieve statistics for specific configured FortiExtender units.
	 * Access Group: netgrp.cfg
	 * @route  GET /extender-controller/extender
	 * @param  $id FortiExtender ID.
	 * @param  $name List of FortiExtender IDs to query.
	 * @param  $type Statistic type.'type' options are [system | modem | usage | last]. If 'type' is not specified, all types of statistics are retrieved.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllExtenderControllerExtender(string $id, array $name = null, string $type = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/extender-controller/extender', NULL, ['id'=>$id, 'name'=>$name, 'type'=>$type], NULL);
	}


	/**
	 * Execute diagnotic commands.
	 * Access Group: netgrp.cfg
	 * @route  POST /extender-controller/extender/diagnose
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addExtenderControllerExtenderDiagnose(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/extender-controller/extender/diagnose', NULL, NULL, $body);
	}


	/**
	 * Reset a specific FortiExtender unit.
	 * Access Group: netgrp.cfg
	 * @route  POST /extender-controller/extender/reset
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addExtenderControllerExtenderReset(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/extender-controller/extender/reset', NULL, NULL, $body);
	}


	/**
	 * Upgrade FortiExtender.
	 * Access Group: sysgrp.mnt
	 * @route  POST /extender-controller/extender/upgrade
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addExtenderControllerExtenderUpgrade(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/extender-controller/extender/upgrade', NULL, NULL, $body);
	}


	/**
	 * List configured load balance server health monitors.
	 * Access Group: sysgrp.cfg
	 * @route  GET /firewall/health
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllFirewallHealth() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/firewall/health', NULL, NULL, NULL);
	}


	/**
	 * List implicit and explicit local-in firewall policies.
	 * Access Group: fwgrp.policy
	 * @route  GET /firewall/local-in
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllFirewallLocalIn() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/firewall/local-in', NULL, NULL, NULL);
	}


	/**
	 * List counters for all IPv4 ACL.
	 * Access Group: fwgrp.policy
	 * @route  GET /firewall/acl
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllFirewallAcl() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/firewall/acl', NULL, NULL, NULL);
	}


	/**
	 * Reset counters for one or more IPv4 ACLs by policy ID.
	 * Access Group: fwgrp.policy
	 * @route  POST /firewall/acl/clear_counters
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addFirewallAclClear_counters(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/firewall/acl/clear_counters', NULL, NULL, $body);
	}


	/**
	 * List counters for all IPv6 ACL.
	 * Access Group: fwgrp.policy
	 * @route  GET /firewall/acl6
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllFirewallAcl6() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/firewall/acl6', NULL, NULL, NULL);
	}


	/**
	 * Reset counters for one or more IPv6 ACLs by policy ID.
	 * Access Group: fwgrp.policy
	 * @route  POST /firewall/acl6/clear_counters
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addFirewallAcl6Clear_counters(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/firewall/acl6/clear_counters', NULL, NULL, $body);
	}


	/**
	 * List internet services that exist at a given IP or Subnet.
	 * Access Group: any
	 * @route  GET /firewall/internet-service-match
	 * @param  $ip IP (in dot-decimal notation).
	 * @param  $mask IP Mask (in dot-decimal notation).
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllFirewallInternetServiceMatch(string $ip, string $mask) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/firewall/internet-service-match', NULL, ['ip'=>$ip, 'mask'=>$mask], NULL);
	}


	/**
	 * List all details for a given Internet Service ID.
	 * Access Group: fwgrp.address
	 * @route  GET /firewall/internet-service-details
	 * @param  $id ID of the Internet Service to get details for.
	 * @param  $country_id Filter: Country ID.
	 * @param  $region_id Filter: Region ID.
	 * @param  $city_id Filter: City ID.
	 * @param  $start Starting entry index. If a value is less than zero, it will be set to zero.
	 * @param  $count Maximum number of entries to return. Valid range is [20, 1000]; if a value is specified out of that range, it will be rounded up or down. Default value is 1000.
	 * @param  $summary_only Only return number of entries instead of entries.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllFirewallInternetServiceDetails(
		int $id,
		int $country_id = null,
		int $region_id = null,
		int $city_id = null,
		int $start = null,
		int $count = null,
		bool $summary_only = null
	) : stdClass {
		return $this->curlRequest('GET', '/monitor/firewall/internet-service-details', NULL, ['id'=>$id, 'country_id'=>$country_id, 'region_id'=>$region_id, 'city_id'=>$city_id, 'start'=>$start, 'count'=>$count, 'summary_only'=>$summary_only], NULL);
	}


	/**
	 * List traffic statistics for firewall policies.
	 * Access Group: fwgrp.policy
	 * @route  GET /firewall/policy
	 * @param  $policyid Filter: Policy ID.
	 * @param  $ip_version Filter: Traffic IP Version. [ ipv4 | ipv6 ], if left empty, will retrieve data for both ipv4 and ipv6.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllFirewallPolicy(int $policyid = null, string $ip_version = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/firewall/policy', NULL, ['policyid'=>$policyid, 'ip_version'=>$ip_version], NULL);
	}


	/**
	 * Reset traffic statistics for all firewall policies.
	 * Access Group: fwgrp.policy
	 * @route  POST /firewall/policy/reset
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addFirewallPolicyReset() : stdClass
	{
		return $this->curlRequest('POST', '/monitor/firewall/policy/reset', NULL, NULL, NULL);
	}


	/**
	 * Reset traffic statistics for one or more firewall policies by policy ID.
	 * Access Group: fwgrp.policy
	 * @route  POST /firewall/policy/clear_counters
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addFirewallPolicyClear_counters(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/firewall/policy/clear_counters', NULL, NULL, $body);
	}


	/**
	 * List IPS engine statistics for security policies.
	 * Access Group: fwgrp.policy
	 * @route  GET /firewall/security-policy
	 * @param  $policyid Filter: Policy ID.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllFirewallSecurityPolicy(int $policyid = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/firewall/security-policy', NULL, ['policyid'=>$policyid], NULL);
	}


	/**
	 * Reset traffic statistics for one or more security policies by policy ID.
	 * Access Group: fwgrp.policy
	 * @route  POST /firewall/security-policy/clear_counters
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addFirewallSecurityPolicyClear_counters(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/firewall/security-policy/clear_counters', NULL, NULL, $body);
	}


	/**
	 * List traffic statistics for all explicit proxy policies.
	 * Access Group: fwgrp.policy
	 * @route  GET /firewall/proxy-policy
	 * @param  $policyid Filter: Policy ID.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllFirewallProxyPolicy(int $policyid = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/firewall/proxy-policy', NULL, ['policyid'=>$policyid], NULL);
	}


	/**
	 * Reset traffic statistics for one or more explicit proxy policies by policy ID.
	 * Access Group: fwgrp.policy
	 * @route  POST /firewall/proxy-policy/clear_counters
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addFirewallProxyPolicyClear_counters(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/firewall/proxy-policy/clear_counters', NULL, NULL, $body);
	}


	/**
	 * Performs a policy lookup by creating a dummy packet and asking the kernel which policy would be hit.
	 * Access Group: fwgrp.policy
	 * @route  GET /firewall/policy-lookup
	 * @param  $ipv6 Perform an IPv6 lookup?
	 * @param  $srcintf Source interface.
	 * @param  $sourceport Source port.
	 * @param  $sourceip Source IP.
	 * @param  $protocol Protocol.
	 * @param  $dest Destination IP/FQDN.
	 * @param  $destport Destination port.
	 * @param  $icmptype ICMP type.
	 * @param  $icmpcode ICMP code.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllFirewallPolicyLookup(
		bool $ipv6 = null,
		string $srcintf,
		int $sourceport = null,
		string $sourceip = null,
		string $protocol,
		string $dest,
		int $destport = null,
		int $icmptype = null,
		int $icmpcode = null
	) : stdClass {
		return $this->curlRequest('GET', '/monitor/firewall/policy-lookup', NULL, ['ipv6'=>$ipv6, 'srcintf'=>$srcintf, 'sourceport'=>$sourceport, 'sourceip'=>$sourceip, 'protocol'=>$protocol, 'dest'=>$dest, 'destport'=>$destport, 'icmptype'=>$icmptype, 'icmpcode'=>$icmpcode], NULL);
	}


	/**
	 * List all active firewall sessions (optionally filtered).
	 * Access Group: sysgrp.cfg
	 * @route  GET /firewall/session
	 * @param  $ip_version IP version [*ipv4 | ipv6 | ipboth].
	 * @param  $start Starting entry index.
	 * @param  $count Maximum number of entries to return. Valid range is [20, 1000]; if a value is specified out of that range, it will be rounded up or down.
	 * @param  $summary Enable/disable inclusion of session summary (setup rate, total sessions, etc).
	 * @param  $sourceport Filter: Source port.
	 * @param  $policyid Filter: Policy ID.
	 * @param  $application Filter: Application ID.
	 * @param  $application Filter: Application PROTO/PORT. (e.g. "TCP/443")
	 * @param  $protocol Filter: Protocol name [all|igmp|tcp|udp|icmp|etc].
	 * @param  $destport Filter: Destination port.
	 * @param  $srcintf Filter: Source interface name.
	 * @param  $dstintf Filter: Destination interface name.
	 * @param  $srcintfrole Filter: Source interface roles.
	 * @param  $dstintfrole Filter: Destination interface roles.
	 * @param  $source Filter: Source IP address.
	 * @param  $srcuuid Filter: Source UUID.
	 * @param  $destination Filter: Destination IP address.
	 * @param  $dstuuid Filter: Destination UUID.
	 * @param  $username Filter: Authenticated username.
	 * @param  $shaper Filter: Forward traffic shaper name.
	 * @param  $country Filter: Destination country name.
	 * @param  $owner Filter: Destination owner.
	 * @param  $natsourceaddress Filter: NAT source address.
	 * @param  $natsourceport Filter: NAT source port.
	 * @param  $filterCsf Filter: Include sessions from downstream fortigates.
	 * @param  $since Filter: Only return sessions generated since this Unix timestamp.
	 * @param  $seconds Filter: Only return sessions generated in the last N seconds.
	 * @param  $webDomain Filter: Web domain.
	 * @param  $webCategory Filter: Web category.
	 * @param  $fortiasic Filter: 1 to include NPU accelerated sessions, 0 to exclude.
	 * @param  $nturbo Filter: 1 to include nTurbo sessions, 0 to exclude.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllFirewallSession(
		string $ip_version = null,
		int $start = null,
		int $count,
		bool $summary = null,
		int $sourceport = null,
		int $policyid = null,
		string $application = null,
		string $protocol = null,
		int $destport = null,
		string $srcintf = null,
		string $dstintf = null,
		array $srcintfrole = null,
		array $dstintfrole = null,
		string $source = null,
		string $srcuuid = null,
		string $destination = null,
		string $dstuuid = null,
		string $username = null,
		string $shaper = null,
		string $country = null,
		string $owner = null,
		string $natsourceaddress = null,
		int $natsourceport = null,
		bool $filterCsf = null,
		int $since = null,
		int $seconds = null,
		string $webDomain = null,
		string $webCategory = null,
		int $fortiasic = null,
		int $nturbo = null
	) : stdClass {
		return $this->curlRequest('GET', '/monitor/firewall/session', NULL, ['ip_version'=>$ip_version, 'start'=>$start, 'count'=>$count, 'summary'=>$summary, 'sourceport'=>$sourceport, 'policyid'=>$policyid, 'application'=>$application, 'protocol'=>$protocol, 'destport'=>$destport, 'srcintf'=>$srcintf, 'dstintf'=>$dstintf, 'srcintfrole'=>$srcintfrole, 'dstintfrole'=>$dstintfrole, 'source'=>$source, 'srcuuid'=>$srcuuid, 'destination'=>$destination, 'dstuuid'=>$dstuuid, 'username'=>$username, 'shaper'=>$shaper, 'country'=>$country, 'owner'=>$owner, 'natsourceaddress'=>$natsourceaddress, 'natsourceport'=>$natsourceport, 'filter-csf'=>$filterCsf, 'since'=>$since, 'seconds'=>$seconds, 'web-domain'=>$webDomain, 'web-category'=>$webCategory, 'fortiasic'=>$fortiasic, 'nturbo'=>$nturbo], NULL);
	}


	/**
	 * Immediately clear all active IPv4 and IPv6 sessions and IPS sessions of current VDOM.
	 * Access Group: sysgrp.cfg
	 * @route  POST /firewall/session/clear_all
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addFirewallSessionClear_all() : stdClass
	{
		return $this->curlRequest('POST', '/monitor/firewall/session/clear_all', NULL, NULL, NULL);
	}


	/**
	 * Close a specific firewall session that matches all provided criteria.
	 * Access Group: sysgrp.cfg
	 * @route  POST /firewall/session/close
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addFirewallSessionClose(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/firewall/session/close', NULL, NULL, $body);
	}


	/**
	 * List of statistics for configured firewall shared traffic shapers.
	 * Access Group: fwgrp.others
	 * @route  GET /firewall/shaper
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllFirewallShaper() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/firewall/shaper', NULL, NULL, NULL);
	}


	/**
	 * Reset statistics for all configured traffic shapers.
	 * Access Group: fwgrp.others
	 * @route  POST /firewall/shaper/reset
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addFirewallShaperReset() : stdClass
	{
		return $this->curlRequest('POST', '/monitor/firewall/shaper/reset', NULL, NULL, NULL);
	}


	/**
	 * List of statistics for configured firewall per-IP traffic shapers.
	 * Access Group: fwgrp.others
	 * @route  GET /firewall/per-ip-shaper
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllFirewallPerIpShaper() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/firewall/per-ip-shaper', NULL, NULL, NULL);
	}


	/**
	 * Reset statistics for all configured firewall per-IP traffic shapers.
	 * Access Group: fwgrp.others
	 * @route  POST /firewall/per-ip-shaper/reset
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addFirewallPerIpShaperReset() : stdClass
	{
		return $this->curlRequest('POST', '/monitor/firewall/per-ip-shaper/reset', NULL, NULL, NULL);
	}


	/**
	 * List all firewall load balance servers.
	 * Access Group: fwgrp.others
	 * @route  GET /firewall/load-balance
	 * @param  $start Starting entry index.
	 * @param  $count Maximum number of entries to return.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllFirewallLoadBalance(int $start = null, int $count) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/firewall/load-balance', NULL, ['start'=>$start, 'count'=>$count], NULL);
	}


	/**
	 * List of FQDN address objects and the IPs they resolved to.
	 * Access Group: fwgrp.address
	 * @route  GET /firewall/address-fqdns
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllFirewallAddressFqdns() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/firewall/address-fqdns', NULL, NULL, NULL);
	}


	/**
	 * List of IPv6 FQDN address objects and the IPs they resolved to.
	 * Access Group: fwgrp.address
	 * @route  GET /firewall/address-fqdns6
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllFirewallAddressFqdns6() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/firewall/address-fqdns6', NULL, NULL, NULL);
	}


	/**
	 * Add ClearPass address with SPT (System Posture Token) value.
	 * Access Group: fwgrp.address
	 * @route  POST /firewall/clearpass-address/add
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addFirewallClearpassAddressAdd(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/firewall/clearpass-address/add', NULL, NULL, $body);
	}


	/**
	 * Delete ClearPass address with SPT (System Posture Token) value.
	 * Access Group: fwgrp.address
	 * @route  POST /firewall/clearpass-address/delete
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addFirewallClearpassAddressDelete(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/firewall/clearpass-address/delete', NULL, NULL, $body);
	}


	/**
	 * List IPv4 pool statistics.
	 * Access Group: fwgrp.policy
	 * @route  GET /firewall/ippool
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllFirewallIppool() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/firewall/ippool', NULL, NULL, NULL);
	}


	/**
	 * Get the list of IPv4 mappings for the specified IP pool.
	 * Access Group: fwgrp.policy
	 * @route  GET /firewall/ippool/mapping
	 * @param  $mkey The IP pool name.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllFirewallIppoolMapping(string $mkey) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/firewall/ippool/mapping', NULL, ['mkey'=>$mkey], NULL);
	}


	/**
	 * Retrieve a list of all UUIDs with their object type and VDOM.
	 * Access Group: fwgrp.address
	 * @route  GET /firewall/uuid-list
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllFirewallUuidList() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/firewall/uuid-list', NULL, NULL, NULL);
	}


	/**
	 * Retrieve a mapping of UUIDs to their firewall object type for given UUIDs.
	 * Access Group: fwgrp.address
	 * @route  GET /firewall/uuid-type-lookup
	 * @param  $uuids UUID to be resolved.
	 * @param  $uuids List of UUIDs to be resolved.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllFirewallUuidTypeLookup(array $uuids = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/firewall/uuid-type-lookup', NULL, ['uuids'=>$uuids], NULL);
	}


	/**
	 * List of Fabric Connector address objects and the IPs they resolve to.
	 * Access Group: fwgrp.address
	 * @route  GET /firewall/address-dynamic
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllFirewallAddressDynamic() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/firewall/address-dynamic', NULL, NULL, NULL);
	}


	/**
	 * List of IPv6 Fabric Connector address objects and the IPs they resolve to.
	 * Access Group: fwgrp.address
	 * @route  GET /firewall/address6-dynamic
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllFirewallAddress6Dynamic() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/firewall/address6-dynamic', NULL, NULL, NULL);
	}


	/**
	 * List all available filters for a specified SDN Fabric Connector. Used for Fabric Connector address objects.
	 * Access Group: fwgrp.address
	 * @route  GET /firewall/sdn-connector-filters
	 * @param  $connector Name of the SDN Fabric Connector to get the filters from.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllFirewallSdnConnectorFilters(string $connector) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/firewall/sdn-connector-filters', NULL, ['connector'=>$connector], NULL);
	}


	/**
	 * Retrieve the FortiGuard redirect portal IP.
	 * Access Group: any
	 * @route  GET /fortiguard/redirect-portal
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllFortiguardRedirectPortal() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/fortiguard/redirect-portal', NULL, NULL, NULL);
	}


	/**
	 * Retrieve historical statistics for communication with FortiGuard services.
	 * Access Group: sysgrp.mnt
	 * @route  GET /fortiguard/service-communication-stats
	 * @param  $service_type To get stats for [forticare|fortiguard_download|fortiguard_query|forticloud_log|fortisandbox_cloud|fortiguard.com|ocvpn|sdns|fortitoken_registration|sms_service]. Defaults to all stats if not provided.
	 * @param  $timeslot History timeslot of stats [1_hour|24_hour|1_week]. Defaults to all timeslots if not provided.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllFortiguardServiceCommunicationStats(
		string $service_type = null,
		string $timeslot = null
	) : stdClass {
		return $this->curlRequest('GET', '/monitor/fortiguard/service-communication-stats', NULL, ['service_type'=>$service_type, 'timeslot'=>$timeslot], NULL);
	}


	/**
	 * Retrieve drill-down and summary data for FortiView (both realtime and historical).
	 * Access Group: ftviewgrp
	 * @route  GET /fortiview/statistics
	 * @param  $realtime Set to true to retrieve realtime results (from kernel).
	 * @param  $filter A map of filter keys to arrays of values.
	 * @param  $sessionid FortiView request Session ID.
	 * @param  $count Maximum number of details to return.
	 * @param  $device FortiView source device [disk|fortianalyzer|forticloud].
	 * @param  $report_by Report by field.
	 * @param  $sort_by Sort by field.
	 * @param  $chart_only Only return graph values in results.
	 * @param  $start Start timestamp.
	 * @param  $end End timestamp.
	 * @param  $ip_version IP version [*ipv4 | ipv6 | ipboth].
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllFortiviewStatistics(
		bool $realtime = null,
		string $filter = null,
		int $sessionid = null,
		int $count = null,
		string $device = null,
		string $report_by = null,
		string $sort_by = null,
		bool $chart_only = null,
		int $start = null,
		int $end = null,
		string $ip_version = null
	) : stdClass {
		return $this->curlRequest('GET', '/monitor/fortiview/statistics', NULL, ['realtime'=>$realtime, 'filter'=>$filter, 'sessionid'=>$sessionid, 'count'=>$count, 'device'=>$device, 'report_by'=>$report_by, 'sort_by'=>$sort_by, 'chart_only'=>$chart_only, 'start'=>$start, 'end'=>$end, 'ip_version'=>$ip_version], NULL);
	}


	/**
	 * Cancel a FortiView request session.
	 * Access Group: ftviewgrp
	 * @route  POST /fortiview/session/cancel
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addFortiviewSessionCancel(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/fortiview/session/cancel', NULL, NULL, $body);
	}


	/**
	 * Retrieve FortiSandbox analysis details for a specific file checksum.
	 * Access Group: sysgrp.cfg
	 * @route  GET /fortiview/sandbox-file-details
	 * @param  $checksum Checksum of a specific file that has been analyzed by the connected FortiSandbox.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllFortiviewSandboxFileDetails(string $checksum) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/fortiview/sandbox-file-details', NULL, ['checksum'=>$checksum], NULL);
	}


	/**
	 * Retrieve list of available FortiSandbox analysis files.
	 * Access Group: sysgrp.cfg
	 * @route  GET /fortiview/sandbox-file-list
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllFortiviewSandboxFileList() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/fortiview/sandbox-file-list', NULL, NULL, NULL);
	}


	/**
	 * Retrieve location details for IPs queried against FortiGuard's geoip service.
	 * Access Group: sysgrp.cfg
	 * @route  POST /geoip/geoip-query/select
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addGeoipGeoipQuerySelect(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/geoip/geoip-query/select', NULL, NULL, $body);
	}


	/**
	 * Returns a list of rate-based signatures in IPS package.
	 * Access Group: utmgrp.ips
	 * @route  GET /ips/rate-based
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllIpsRateBased() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/ips/rate-based', NULL, NULL, NULL);
	}


	/**
	 * Returns IPS meta data.
	 * Access Group: utmgrp.ips
	 * @route  GET /ips/metadata
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllIpsMetadata() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/ips/metadata', NULL, NULL, NULL);
	}


	/**
	 * Returns IPS anomaly list.
	 * Access Group: utmgrp.ips
	 * @route  GET /ips/anomaly
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllIpsAnomaly() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/ips/anomaly', NULL, NULL, NULL);
	}


	/**
	 * Returns a list of applications that exceed the scan range from a list of application IDs.
	 * Access Group: utmgrp.ips
	 * @route  GET /ips/exceed-scan-range
	 * @param  $ids List of application IDs.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllIpsExceedScanRange(array $ids) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/ips/exceed-scan-range', NULL, ['ids'=>$ids], NULL);
	}


	/**
	 * Get current license & registration status.
	 * Access Group: any
	 * @route  GET /license/status
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllLicenseStatus() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/license/status', NULL, NULL, NULL);
	}


	/**
	 * Get current license & registration status for the connected FortiAnalyzer.
	 * Access Group: secfabgrp
	 * @route  GET /license/fortianalyzer-status
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllLicenseFortianalyzerStatus() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/license/fortianalyzer-status', NULL, NULL, NULL);
	}


	/**
	 * Upgrade or downgrade UTM engine or signature package (IPS/AntiVirus/Application Control/Industrial database/Security Rating) using uploaded file.
	 * Access Group: sysgrp.upd
	 * @route  POST /license/database/upgrade
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addLicenseDatabaseUpgrade(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/license/database/upgrade', NULL, NULL, $body);
	}


	/**
	 * Get current FortiCare resellers for the requested country.
	 * Access Group: sysgrp.cfg
	 * @route  GET /license/forticare-resellers
	 * @param  $country_code FortiGuard country code
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllLicenseForticareResellers(int $country_code = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/license/forticare-resellers', NULL, ['country_code'=>$country_code], NULL);
	}


	/**
	 * Get FortiCare organization size and industry lists.
	 * Access Group: sysgrp.cfg
	 * @route  GET /license/forticare-org-list
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllLicenseForticareOrgList() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/license/forticare-org-list', NULL, NULL, NULL);
	}


	/**
	 * Return current used, free and total disk bytes.
	 * Access Group: loggrp.data-access
	 * @route  GET /log/current-disk-usage
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllLogCurrentDiskUsage() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/log/current-disk-usage', NULL, NULL, NULL);
	}


	/**
	 * Retrieve information on state of log devices.
	 * Access Group: loggrp.data-access
	 * @route  GET /log/device/state
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllLogDeviceState() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/log/device/state', NULL, NULL, NULL);
	}


	/**
	 * Return FortiCloud log status.
	 * Access Group: loggrp.config
	 * @route  GET /log/forticloud
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllLogForticloud() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/log/forticloud', NULL, NULL, NULL);
	}


	/**
	 * Get FortiCloud report list.
	 * Access Group: loggrp.data-access
	 * @route  GET /log/forticloud-report-list
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllLogForticloudReportList() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/log/forticloud-report-list', NULL, NULL, NULL);
	}


	/**
	 * Get local reports list.
	 * Access Group: loggrp.report-access
	 * @route  GET /log/local-report-list
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllLogLocalReportList() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/log/local-report-list', NULL, NULL, NULL);
	}


	/**
	 * Download local report
	 * Access Group: loggrp.data-access
	 * @route  GET /log/local-report/download
	 * @param  $mkey Local Report Name.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllLogLocalReportDownload(string $mkey) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/log/local-report/download', NULL, ['mkey'=>$mkey], NULL);
	}


	/**
	 * Delete a local report.
	 * Access Group: loggrp.data-access
	 * @route  POST /log/local-report/delete
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addLogLocalReportDelete(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/log/local-report/delete', NULL, NULL, $body);
	}


	/**
	 * Return FortiAnalyzer/FortiManager log status.
	 * Access Group: loggrp.config
	 * @route  GET /log/fortianalyzer
	 * @param  $scope Scope from which to test the connectivity of the FortiAnalyzer address [vdom|global].
	 * @param  $server FortiAnalyzer/FortiManager address.
	 * @param  $srcip The IP to use to make the request to the FortiAnalyzer [<ip>|auto]. When set to "auto" it will use the FortiGate's routing table to determine the IP to make the request from.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllLogFortianalyzer(string $scope = null, string $server = null, string $srcip = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/log/fortianalyzer', NULL, ['scope'=>$scope, 'server'=>$server, 'srcip'=>$srcip], NULL);
	}


	/**
	 * Retrieve information on FortiAnalyzer's queue state. Note:- FortiAnalyzer logs are queued only if upload-option is realtime.
	 * Access Group: loggrp.config
	 * @route  GET /log/fortianalyzer-queue
	 * @param  $scope Scope from which to retrieve FortiAnalyzer's queue state [vdom*|global].
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllLogFortianalyzerQueue(string $scope = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/log/fortianalyzer-queue', NULL, ['scope'=>$scope], NULL);
	}


	/**
	 * Return historic hourly disk usage in bytes.
	 * Access Group: loggrp.data-access
	 * @route  GET /log/hourly-disk-usage
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllLogHourlyDiskUsage() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/log/hourly-disk-usage', NULL, NULL, NULL);
	}


	/**
	 * Returns the amount of logs in bytes sent daily to a remote logging service (FortiCloud or FortiAnalyzer).
	 * Access Group: loggrp.data-access
	 * @route  GET /log/historic-daily-remote-logs
	 * @param  $server Service name [forticloud | fortianalyzer].
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllLogHistoricDailyRemoteLogs(string $server) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/log/historic-daily-remote-logs', NULL, ['server'=>$server], NULL);
	}


	/**
	 * Return number of logs sent by category per day for a specific log device.
	 * Access Group: loggrp.data-access
	 * @route  GET /log/stats
	 * @param  $dev Log device [*memory | disk | fortianalyzer | forticloud].
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllLogStats(string $dev = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/log/stats', NULL, ['dev'=>$dev], NULL);
	}


	/**
	 * Reset logging statistics for all log devices.
	 * Access Group: loggrp.data-access
	 * @route  POST /log/stats/reset
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addLogStatsReset() : stdClass
	{
		return $this->curlRequest('POST', '/monitor/log/stats/reset', NULL, NULL, NULL);
	}


	/**
	 * Download PDF report from FortiCloud.
	 * Access Group: loggrp.data-access
	 * @route  GET /log/forticloud-report/download
	 * @param  $mkey FortiCloud Report ID.
	 * @param  $inline Set to 1 to download the report inline.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllLogForticloudReportDownload(int $mkey, int $inline = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/log/forticloud-report/download', NULL, ['mkey'=>$mkey, 'inline'=>$inline], NULL);
	}


	/**
	 * Download IPS/application control packet capture files. Uses configured log display device.
	 * Access Group: loggrp.data-access
	 * @route  GET /log/ips-archive/download
	 * @param  $mkey IPS archive ID.
	 * @param  $pcap_no Packet capture roll number (required when log device is 'disk')
	 * @param  $pcap_category Packet capture category (required when log device is 'disk')
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllLogIpsArchiveDownload(int $mkey, int $pcap_no = null, int $pcap_category = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/log/ips-archive/download', NULL, ['mkey'=>$mkey, 'pcap_no'=>$pcap_no, 'pcap_category'=>$pcap_category], NULL);
	}


	/**
	 * Download policy-based packet capture archive.
	 * Access Group: loggrp.data-access
	 * @route  GET /log/policy-archive/download
	 * @param  $mkey Session ID (from traffic log).
	 * @param  $srcip Source IP.
	 * @param  $dstip Destination IP.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllLogPolicyArchiveDownload(int $mkey, string $srcip, string $dstip) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/log/policy-archive/download', NULL, ['mkey'=>$mkey, 'srcip'=>$srcip, 'dstip'=>$dstip], NULL);
	}


	/**
	 * Download file quarantined by AntiVirus.
	 * Access Group: loggrp.data-access
	 * @route  GET /log/av-archive/download
	 * @param  $mkey Checksum for quarantined file.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllLogAvArchiveDownload(string $mkey) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/log/av-archive/download', NULL, ['mkey'=>$mkey], NULL);
	}


	/**
	 * List all event log descriptions. Deprecated in 6.2.3 replaced by /api/v2/static/logid_metadata.json.
	 * Access Group: any
	 * @route  GET /log/event
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllLogEvent() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/log/event', NULL, NULL, NULL);
	}


	/**
	 * Get IPv4 ARP table.
	 * Access Group: sysgrp.cfg
	 * @route  GET /network/arp
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllNetworkArp() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/network/arp', NULL, NULL, NULL);
	}


	/**
	 * List all active LLDP neighbors.
	 * Access Group: netgrp
	 * @route  GET /network/lldp/neighbors
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllNetworkLldpNeighbors() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/network/lldp/neighbors', NULL, NULL, NULL);
	}


	/**
	 * List all active LLDP ports.
	 * Access Group: netgrp
	 * @route  GET /network/lldp/ports
	 * @param  $mkey Filter: specific port name.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllNetworkLldpPorts(string $mkey = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/network/lldp/ports', NULL, ['mkey'=>$mkey], NULL);
	}


	/**
	 * Get DNS latency.
	 * Access Group: sysgrp.cfg
	 * @route  GET /network/dns/latency
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllNetworkDnsLatency() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/network/dns/latency', NULL, NULL, NULL);
	}


	/**
	 * Get latency information for live FortiGuard services.
	 * Access Group: sysgrp.cfg
	 * @route  GET /network/fortiguard/live-services-latency
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllNetworkFortiguardLiveServicesLatency() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/network/fortiguard/live-services-latency', NULL, NULL, NULL);
	}


	/**
	 * Get DDNS servers.
	 * Access Group: sysgrp.cfg
	 * @route  GET /network/ddns/servers
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllNetworkDdnsServers() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/network/ddns/servers', NULL, NULL, NULL);
	}


	/**
	 * Check DDNS FQDN availability.
	 * Access Group: sysgrp.cfg
	 * @route  GET /network/ddns/lookup
	 * @param  $domain Filter: domain to check.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllNetworkDdnsLookup(string $domain) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/network/ddns/lookup', NULL, ['domain'=>$domain], NULL);
	}


	/**
	 * Retrieve the resolved DNS domain name for a given IP address.
	 * Access Group: any
	 * @route  GET /network/reverse-ip-lookup
	 * @param  $ip IP address (in dot-decimal notation).
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllNetworkReverseIpLookup(string $ip) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/network/reverse-ip-lookup', NULL, ['ip'=>$ip], NULL);
	}


	/**
	 * Retrieve NSX service status.
	 * Access Group: sysgrp.cfg
	 * @route  GET /nsx/service/status
	 * @param  $mkey Filter: NSX SDN name.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllNsxServiceStatus(string $mkey = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/nsx/service/status', NULL, ['mkey'=>$mkey], NULL);
	}


	/**
	 * Add NSX service to connector.
	 * Access Group: sysgrp.cfg
	 * @route  POST /nsx/service/add
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addNsxServiceAdd(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/nsx/service/add', NULL, NULL, $body);
	}


	/**
	 * List NSX instances and their resource statistics.
	 * Access Group: sysgrp.cfg
	 * @route  GET /nsx/instance
	 * @param  $mkey Filter: NSX SDN name.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllNsxInstance(string $mkey = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/nsx/instance', NULL, ['mkey'=>$mkey], NULL);
	}


	/**
	 * Login to FortiCloud.
	 * Access Group: sysgrp.cfg
	 * @route  POST /registration/forticloud/login
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addRegistrationForticloudLogin(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/registration/forticloud/login', NULL, NULL, $body);
	}


	/**
	 * Create a FortiCloud account.
	 * Access Group: sysgrp.cfg
	 * @route  POST /registration/forticloud/create
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addRegistrationForticloudCreate(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/registration/forticloud/create', NULL, NULL, $body);
	}


	/**
	 * Logout from FortiCloud.
	 * Access Group: sysgrp.cfg
	 * @route  POST /registration/forticloud/logout
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addRegistrationForticloudLogout() : stdClass
	{
		return $this->curlRequest('POST', '/monitor/registration/forticloud/logout', NULL, NULL, NULL);
	}


	/**
	 * Retrieve the FortiCloud disclaimer.
	 * Access Group: sysgrp.cfg
	 * @route  GET /registration/forticloud/disclaimer
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllRegistrationForticloudDisclaimer() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/registration/forticloud/disclaimer', NULL, NULL, NULL);
	}


	/**
	 * Retrieve a list of FortiCloud login domains.
	 * Access Group: sysgrp.cfg
	 * @route  GET /registration/forticloud/domains
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllRegistrationForticloudDomains() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/registration/forticloud/domains', NULL, NULL, NULL);
	}


	/**
	 * Login to FortiCare.
	 * Access Group: sysgrp.cfg
	 * @route  POST /registration/forticare/login
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addRegistrationForticareLogin(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/registration/forticare/login', NULL, NULL, $body);
	}


	/**
	 * Transfer to a new FortiCare account.
	 * Access Group: sysgrp.cfg
	 * @route  POST /registration/forticare/transfer
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addRegistrationForticareTransfer(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/registration/forticare/transfer', NULL, NULL, $body);
	}


	/**
	 * Create a new FortiCare account.
	 * Access Group: sysgrp.cfg
	 * @route  POST /registration/forticare/create
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addRegistrationForticareCreate(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/registration/forticare/create', NULL, NULL, $body);
	}


	/**
	 * Add a FortiCare license.
	 * Access Group: sysgrp.cfg
	 * @route  POST /registration/forticare/add-license
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addRegistrationForticareAddLicense(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/registration/forticare/add-license', NULL, NULL, $body);
	}


	/**
	 * Register a device to FortiCloud through FortiGate. Currently FortiSwitch and FortiAP are supported.
	 * Access Group: sysgrp.cfg
	 * @route  POST /registration/forticloud/register-device
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addRegistrationForticloudRegisterDevice(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/registration/forticloud/register-device', NULL, NULL, $body);
	}


	/**
	 * Fetch device registration status from FortiCloud. Currently FortiSwitch and FortiAP are supported.
	 * Access Group: sysgrp.cfg
	 * @route  GET /registration/forticloud/device-status
	 * @param  $serials Serials of FortiSwitch and FortiAP to fetch registration status.
	 * @param  $update_cache Clear cache and retrieve updated data.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllRegistrationForticloudDeviceStatus(array $serials, bool $update_cache = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/registration/forticloud/device-status', NULL, ['serials'=>$serials, 'update_cache'=>$update_cache], NULL);
	}


	/**
	 * Add a VDOM license.
	 * Access Group: sysgrp.cfg
	 * @route  POST /registration/vdom/add-license
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addRegistrationVdomAddLicense(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/registration/vdom/add-license', NULL, NULL, $body);
	}


	/**
	 * Migrate standalone FortiGate Cloud account to FortiCloud.
	 * Access Group: sysgrp.cfg
	 * @route  POST /registration/forticloud/migrate
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addRegistrationForticloudMigrate(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/registration/forticloud/migrate', NULL, NULL, $body);
	}


	/**
	 * List all active IPv4 routing table entries.
	 * Access Group: netgrp.route-cfg
	 * @route  GET /router/ipv4
	 * @param  $start Starting entry index.
	 * @param  $count Maximum number of entries to return (Default for all routes).
	 * @param  $ip_mask Filter: IP/netmask.
	 * @param  $gateway Filter: gateway.
	 * @param  $type Filter: route type.
	 * @param  $interface Filter: interface name.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllRouterIpv4(
		int $start = null,
		int $count = null,
		string $ip_mask = null,
		string $gateway = null,
		string $type = null,
		string $interface = null
	) : stdClass {
		return $this->curlRequest('GET', '/monitor/router/ipv4', NULL, ['start'=>$start, 'count'=>$count, 'ip_mask'=>$ip_mask, 'gateway'=>$gateway, 'type'=>$type, 'interface'=>$interface], NULL);
	}


	/**
	 * List all active IPv6 routing table entries.
	 * Access Group: netgrp.route-cfg
	 * @route  GET /router/ipv6
	 * @param  $start Starting entry index.
	 * @param  $count Maximum number of entries to return (Default for all routes).
	 * @param  $ip_mask Filter: IP/netmask.
	 * @param  $gateway Filter: gateway.
	 * @param  $type Filter: route type.
	 * @param  $interface Filter: interface name.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllRouterIpv6(
		int $start = null,
		int $count = null,
		string $ip_mask = null,
		string $gateway = null,
		string $type = null,
		string $interface = null
	) : stdClass {
		return $this->curlRequest('GET', '/monitor/router/ipv6', NULL, ['start'=>$start, 'count'=>$count, 'ip_mask'=>$ip_mask, 'gateway'=>$gateway, 'type'=>$type, 'interface'=>$interface], NULL);
	}


	/**
	 * Retrieve routing table statistics, including number of matched routes.
	 * Access Group: sysgrp.cfg
	 * @route  GET /router/statistics
	 * @param  $ip_version IP version (4|6). If not present, IPv4 and IPv6 will be returned.
	 * @param  $ip_mask Filter: IP/netmask.
	 * @param  $gateway Filter: gateway.
	 * @param  $type Filter: route type.
	 * @param  $interface Filter: interface name.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllRouterStatistics(
		int $ip_version = null,
		string $ip_mask = null,
		string $gateway = null,
		string $type = null,
		string $interface = null
	) : stdClass {
		return $this->curlRequest('GET', '/monitor/router/statistics', NULL, ['ip_version'=>$ip_version, 'ip_mask'=>$ip_mask, 'gateway'=>$gateway, 'type'=>$type, 'interface'=>$interface], NULL);
	}


	/**
	 * Performs a route lookup by querying the routing table.
	 * Access Group: netgrp.route-cfg
	 * @route  GET /router/lookup
	 * @param  $ipv6 Perform an IPv6 lookup.
	 * @param  $destination Destination IP/FQDN.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllRouterLookup(bool $ipv6 = null, string $destination) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/router/lookup', NULL, ['ipv6'=>$ipv6, 'destination'=>$destination], NULL);
	}


	/**
	 * Performs a route lookup by querying the policy routing table.
	 * Access Group: netgrp.route-cfg
	 * @route  GET /router/lookup-policy
	 * @param  $ipv6 Perform an IPv6 lookup.
	 * @param  $destination Destination IP/FQDN.
	 * @param  $source Source IP/FQDN.
	 * @param  $destination_port Destination Port.
	 * @param  $interface_name Incoming Interface.
	 * @param  $protocol_number IP Protocol Number.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllRouterLookupPolicy(
		bool $ipv6 = null,
		string $destination,
		string $source = null,
		int $destination_port = null,
		string $interface_name = null,
		int $protocol_number = null
	) : stdClass {
		return $this->curlRequest('GET', '/monitor/router/lookup-policy', NULL, ['ipv6'=>$ipv6, 'destination'=>$destination, 'source'=>$source, 'destination_port'=>$destination_port, 'interface_name'=>$interface_name, 'protocol_number'=>$protocol_number], NULL);
	}


	/**
	 * Retrieve a list of active IPv4 policy routes.
	 * Access Group: netgrp.route-cfg
	 * @route  GET /router/policy
	 * @param  $start Starting entry index.
	 * @param  $count Maximum number of entries to return.
	 * @param  $count_only Returns the number of IPv4 policy routes only.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllRouterPolicy(int $start = null, int $count = null, bool $count_only = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/router/policy', NULL, ['start'=>$start, 'count'=>$count, 'count_only'=>$count_only], NULL);
	}


	/**
	 * Retrieve a list of active IPv6 policy routes.
	 * Access Group: netgrp.route-cfg
	 * @route  GET /router/policy6
	 * @param  $start Starting entry index.
	 * @param  $count Maximum number of entries to return.
	 * @param  $count_only Returns the number of IPv6 policy routes only.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllRouterPolicy6(int $start = null, int $count = null, bool $count_only = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/router/policy6', NULL, ['start'=>$start, 'count'=>$count, 'count_only'=>$count_only], NULL);
	}


	/**
	 * Retrieve statistics for configured FortiSwitches
	 * Access Group: wifi
	 * @route  GET /switch-controller/managed-switch
	 * @param  $mkey Filter: FortiSwitch ID.
	 * @param  $fsw_id Filter: FortiSwitch ID. `mkey` should be used instead.
	 * @param  $poe Filter: Retrieve PoE statistics for ports of configured FortiSwitches. Port power usage is in Watt units.
	 * @param  $port_stats Filter: Retrieve tx/rx statistics for ports of configured FortiSwitches.
	 * @param  $qos_stats Filter: Retrieve QoS statistics for ports of configured FortiSwitches.
	 * @param  $stp_status Filter: Retrieve STP status for ports of configured FortiSwitches.
	 * @param  $igmp_snooping_group Filter: Retrieve IGMP Snooping group for configured FortiSwitches.
	 * @param  $transceiver Filter: Retrieve transceiver information for ports of configured FortiSwitches.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSwitchControllerManagedSwitch(
		string $mkey = null,
		string $fsw_id = null,
		bool $poe = null,
		bool $port_stats = null,
		bool $qos_stats = null,
		bool $stp_status = null,
		bool $igmp_snooping_group = null,
		bool $transceiver = null
	) : stdClass {
		return $this->curlRequest('GET', '/monitor/switch-controller/managed-switch', NULL, ['mkey'=>$mkey, 'fsw_id'=>$fsw_id, 'poe'=>$poe, 'port_stats'=>$port_stats, 'qos_stats'=>$qos_stats, 'stp_status'=>$stp_status, 'igmp_snooping_group'=>$igmp_snooping_group, 'transceiver'=>$transceiver], NULL);
	}


	/**
	 * Update administrative state for a given FortiSwitch (enable or disable authorization).
	 * Access Group: wifi
	 * @route  POST /switch-controller/managed-switch/update
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSwitchControllerManagedSwitchUpdate(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/switch-controller/managed-switch/update', NULL, NULL, $body);
	}


	/**
	 * Restart a given FortiSwitch.
	 * Access Group: wifi
	 * @route  POST /switch-controller/managed-switch/restart
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSwitchControllerManagedSwitchRestart(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/switch-controller/managed-switch/restart', NULL, NULL, $body);
	}


	/**
	 * Reset PoE on a given FortiSwitch's port.
	 * Access Group: wifi
	 * @route  POST /switch-controller/managed-switch/poe-reset
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSwitchControllerManagedSwitchPoeReset(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/switch-controller/managed-switch/poe-reset', NULL, NULL, $body);
	}


	/**
	 * Retrieve XML for rendering FortiSwitch faceplate widget.
	 * Access Group: wifi
	 * @route  GET /switch-controller/managed-switch/faceplate-xml
	 * @param  $mkey Name of managed FortiSwitch.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSwitchControllerManagedSwitchFaceplateXml(string $mkey = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/switch-controller/managed-switch/faceplate-xml', NULL, ['mkey'=>$mkey], NULL);
	}


	/**
	 * Send 'Factory Reset' command to a given FortiSwitch.
	 * Access Group: wifi
	 * @route  POST /switch-controller/managed-switch/factory-reset
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSwitchControllerManagedSwitchFactoryReset(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/switch-controller/managed-switch/factory-reset', NULL, NULL, $body);
	}


	/**
	 * Retrieve DHCP servers monitored by FortiSwitches.
	 * Access Group: wifi
	 * @route  GET /switch-controller/managed-switch/dhcp-snooping
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSwitchControllerManagedSwitchDhcpSnooping() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/switch-controller/managed-switch/dhcp-snooping', NULL, NULL, NULL);
	}


	/**
	 * Get a list of transceivers being used by managed FortiSwitches.
	 * Access Group: any
	 * @route  GET /switch-controller/managed-switch/transceivers
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSwitchControllerManagedSwitchTransceivers() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/switch-controller/managed-switch/transceivers', NULL, NULL, NULL);
	}


	/**
	 * Retrieve health-check statistics for managed FortiSwitches.
	 * Access Group: wifi
	 * @route  GET /switch-controller/managed-switch/health
	 * @param  $mkey Filter: FortiSwitch ID.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSwitchControllerManagedSwitchHealth(string $mkey = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/switch-controller/managed-switch/health', NULL, ['mkey'=>$mkey], NULL);
	}


	/**
	 * Diagnose cable information for a port. Virtual FortiSwitches and FortiLink ports are not supported.
	 * Access Group: wifi
	 * @route  GET /switch-controller/managed-switch/cable-status
	 * @param  $mkey Name of managed FortiSwitch.
	 * @param  $port Name of managed FortiSwitch port.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSwitchControllerManagedSwitchCableStatus(string $mkey, string $port) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/switch-controller/managed-switch/cable-status', NULL, ['mkey'=>$mkey, 'port'=>$port], NULL);
	}


	/**
	 * Retrieve a list of recommended firmware for managed FortiSwitches.
	 * Access Group: wifi
	 * @route  GET /switch-controller/fsw-firmware
	 * @param  $mkey Filter: FortiSwitch ID.
	 * @param  $timeout FortiGuard connection timeout (defaults to 3 seconds).
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSwitchControllerFswFirmware(string $mkey = null, string $timeout = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/switch-controller/fsw-firmware', NULL, ['mkey'=>$mkey, 'timeout'=>$timeout], NULL);
	}


	/**
	 * Download FortiSwitch firmware from FortiGuard to the FortiGate according to FortiSwitch image ID.
	 * Access Group: wifi
	 * @route  POST /switch-controller/fsw-firmware/download
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSwitchControllerFswFirmwareDownload(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/switch-controller/fsw-firmware/download', NULL, NULL, $body);
	}


	/**
	 * Push FortiSwitch firmware to the given device.
	 * Access Group: wifi
	 * @route  POST /switch-controller/fsw-firmware/push
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSwitchControllerFswFirmwarePush(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/switch-controller/fsw-firmware/push', NULL, NULL, $body);
	}


	/**
	 * Upload FortiSwitch firmware to the management FortiGate and then push to target FortiSwitches.
	 * Access Group: wifi
	 * @route  POST /switch-controller/fsw-firmware/upload
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSwitchControllerFswFirmwareUpload(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/switch-controller/fsw-firmware/upload', NULL, NULL, $body);
	}


	/**
	 * Retrieve a list of devices detected on all switches.
	 * Access Group: wifi
	 * @route  GET /switch-controller/detected-device
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSwitchControllerDetectedDevice() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/switch-controller/detected-device', NULL, NULL, NULL);
	}


	/**
	 * Validate a FortiSwitch serial number prefix.
	 * Access Group: wifi
	 * @route  GET /switch-controller/validate-switch-prefix
	 * @param  $prefix Prefix of FortiSwitch serial number.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSwitchControllerValidateSwitchPrefix(string $prefix = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/switch-controller/validate-switch-prefix', NULL, ['prefix'=>$prefix], NULL);
	}


	/**
	 * Find a pair of FortiSwitches that are eligible to form a tier-1 MCLAG.
	 * Access Group: wifi
	 * @route  GET /switch-controller/mclag-icl/eligible-peer
	 * @param  $fortilink FortiLink interface name.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSwitchControllerMclagIclEligiblePeer(string $fortilink) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/switch-controller/mclag-icl/eligible-peer', NULL, ['fortilink'=>$fortilink], NULL);
	}


	/**
	 * Switch between VDOM modes.
	 * Access Group: sysgrp.cfg
	 * @route  POST /system/admin/change-vdom-mode
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemAdminChangeVdomMode(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/admin/change-vdom-mode', NULL, NULL, $body);
	}


	/**
	 * Retrieve the information about config scripts.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/config-script
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemConfigScript() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/config-script', NULL, NULL, NULL);
	}


	/**
	 * Delete the history of config scripts.
	 * Access Group: sysgrp.cfg
	 * @route  POST /system/config-script/delete
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemConfigScriptDelete(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/config-script/delete', NULL, NULL, $body);
	}


	/**
	 * Run remote config scripts.
	 * Access Group: sysgrp.cfg
	 * @route  POST /system/config-script/run
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemConfigScriptRun(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/config-script/run', NULL, NULL, $body);
	}


	/**
	 * Upload and run a new configuration script file.
	 * Access Group: sysgrp.cfg
	 * @route  POST /system/config-script/upload
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemConfigScriptUpload(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/config-script/upload', NULL, NULL, $body);
	}


	/**
	 * Get configuration sync status of SLBC cluster master and slave.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/config-sync/status
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemConfigSyncStatus() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/config-sync/status', NULL, NULL, NULL);
	}


	/**
	 * Generate a new api-key for the specified api-key-auth admin. The old api-key will be replaced. The response contains the only chance to read the new api-key plaintext in the api_key field.
	 * Access Group: sysgrp.admin
	 * @route  POST /system/api-user/generate-key
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemApiUserGenerateKey(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/api-user/generate-key', NULL, NULL, $body);
	}


	/**
	 * Returns a list of system configuration revisions.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/config-revision
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemConfigRevision() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/config-revision', NULL, NULL, NULL);
	}


	/**
	 * Updates comments for a system configuration file.
	 * Access Group: sysgrp.cfg
	 * @route  POST /system/config-revision/update-comments
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemConfigRevisionUpdateComments(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/config-revision/update-comments', NULL, NULL, $body);
	}


	/**
	 * Deletes one or more system configuration revisions.
	 * Access Group: sysgrp.cfg
	 * @route  POST /system/config-revision/delete
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemConfigRevisionDelete(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/config-revision/delete', NULL, NULL, $body);
	}


	/**
	 * Download a specific configuration revision.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/config-revision/file
	 * @param  $config_id Configuration id.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemConfigRevisionFile(int $config_id = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/config-revision/file', NULL, ['config_id'=>$config_id], NULL);
	}


	/**
	 * Retrieve meta information for a specific configuration revision.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/config-revision/info
	 * @param  $config_id Configuration id.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemConfigRevisionInfo(int $config_id = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/config-revision/info', NULL, ['config_id'=>$config_id], NULL);
	}


	/**
	 * Create a new config revision checkpoint.
	 * Access Group: sysgrp.cfg
	 * @route  POST /system/config-revision/save
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemConfigRevisionSave(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/config-revision/save', NULL, NULL, $body);
	}


	/**
	 * Return a list of currently logged in administrators.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/current-admins
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemCurrentAdmins() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/current-admins', NULL, NULL, NULL);
	}


	/**
	 * Return admins info that are connected to current interface.
	 * Access Group: netgrp.cfg
	 * @route  GET /system/interface-connected-admins-info
	 * @param  $interface Interface that admins is connected through.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemInterfaceConnectedAdminsInfo(string $interface) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/interface-connected-admins-info', NULL, ['interface'=>$interface], NULL);
	}


	/**
	 * Disconnects logged in administrators.
	 * Access Group: sysgrp.cfg
	 * @route  POST /system/disconnect-admins/select
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemDisconnectAdminsSelect(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/disconnect-admins/select', NULL, NULL, $body);
	}


	/**
	 * Sets current system time stamp.
	 * Access Group: sysgrp.cfg
	 * @route  POST /system/time/set
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemTimeSet(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/time/set', NULL, NULL, $body);
	}


	/**
	 * Gets current system time stamp.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/time
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemTime() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/time', NULL, NULL, NULL);
	}


	/**
	 * Gets a list of all NPU VDOM Links and VDOM Links.
	 * Access Group: netgrp.cfg
	 * @route  GET /system/vdom-link
	 * @param  $scope Scope from which to retrieve the VDOM link informaton from [vdom|global].
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemVdomLink(string $scope = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/vdom-link', NULL, ['scope'=>$scope], NULL);
	}


	/**
	 * Immediately reboot this device.
	 * Access Group: sysgrp.cfg
	 * @route  POST /system/os/reboot
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemOsReboot(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/os/reboot', NULL, NULL, $body);
	}


	/**
	 * Immediately shutdown this device.
	 * Access Group: sysgrp.cfg
	 * @route  POST /system/os/shutdown
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemOsShutdown(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/os/shutdown', NULL, NULL, $body);
	}


	/**
	 * Retrieve current usage of global resources as well as both the default and user configured maximum values.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/global-resources
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemGlobalResources() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/global-resources', NULL, NULL, NULL);
	}


	/**
	 * Retrieve VDOM resource information, including CPU and memory usage.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/vdom-resource
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemVdomResource() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/vdom-resource', NULL, NULL, NULL);
	}


	/**
	 * List all DHCP and DHCPv6 leases.
	 * Access Group: netgrp.cfg
	 * @route  GET /system/dhcp
	 * @param  $scope Scope from which to retrieve DHCP leases [vdom*|global]. Global scope is only accessible for global administrators.
	 * @param  $ipv6 Include IPv6 addresses in the response.
	 * @param  $interface Filter: Retrieve DHCP leases for this interface only.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemDhcp(string $scope = null, bool $ipv6 = null, string $interface = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/dhcp', NULL, ['scope'=>$scope, 'ipv6'=>$ipv6, 'interface'=>$interface], NULL);
	}


	/**
	 * Revoke IPv4 DHCP leases.
	 * Access Group: netgrp.cfg
	 * @route  POST /system/dhcp/revoke
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemDhcpRevoke(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/dhcp/revoke', NULL, NULL, $body);
	}


	/**
	 * Revoke IPv6 DHCP leases.
	 * Access Group: netgrp.cfg
	 * @route  POST /system/dhcp6/revoke
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemDhcp6Revoke(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/dhcp6/revoke', NULL, NULL, $body);
	}


	/**
	 * List NTP servers status.
	 * Access Group: netgrp.cfg
	 * @route  GET /system/ntp/status
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemNtpStatus() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/ntp/status', NULL, NULL, NULL);
	}


	/**
	 * Retrieve a list of firmware images available to use for upgrade on this device.
	 * Access Group: sysgrp.mnt
	 * @route  GET /system/firmware
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemFirmware() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/firmware', NULL, NULL, NULL);
	}


	/**
	 * Upgrade firmware image on this device using uploaded file.
	 * Access Group: sysgrp.mnt
	 * @route  POST /system/firmware/upgrade
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemFirmwareUpgrade(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/firmware/upgrade', NULL, NULL, $body);
	}


	/**
	 * Retrieve a list of supported firmware upgrade paths.
	 * Access Group: sysgrp.mnt
	 * @route  GET /system/firmware/upgrade-paths
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemFirmwareUpgradePaths() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/firmware/upgrade-paths', NULL, NULL, NULL);
	}


	/**
	 * Set file system check flag so that it will be executed on next device reboot.
	 * Access Group: sysgrp.cfg
	 * @route  POST /system/fsck/start
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemFsckStart() : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/fsck/start', NULL, NULL, NULL);
	}


	/**
	 * Retrieve information for the non-boot disk.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/storage
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemStorage() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/storage', NULL, NULL, NULL);
	}


	/**
	 * Save admin and guest-admin passwords.
	 * Access Group: any
	 * @route  POST /system/change-password/select
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemChangePasswordSelect(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/change-password/select', NULL, NULL, $body);
	}


	/**
	 * Check whether password conforms to the password policy.
	 * Access Group: any
	 * @route  POST /system/password-policy-conform/select
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemPasswordPolicyConformSelect(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/password-policy-conform/select', NULL, NULL, $body);
	}


	/**
	 * Retrieve a full tree of downstream FortiGates registered to the Security Fabric.
	 * Access Group: secfabgrp
	 * @route  GET /system/csf
	 * @param  $scope Scope from which to retrieve the Security Fabric tree [vdom*|global].
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemCsf(string $scope = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/csf', NULL, ['scope'=>$scope], NULL);
	}


	/**
	 * Retrieve fabric devices with pending authorizations for joining the Security Fabric. Note:- This list is currently available on Security Fabric root only.
	 * Access Group: secfabgrp
	 * @route  GET /system/csf/pending-authorizations
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemCsfPendingAuthorizations() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/csf/pending-authorizations', NULL, NULL, NULL);
	}


	/**
	 * Register appliance to Security Fabric.
	 * Access Group: secfabgrp
	 * @route  POST /system/csf/register-appliance
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemCsfRegisterAppliance(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/csf/register-appliance', NULL, NULL, $body);
	}


	/**
	 * Retrieve statistics for internal/external configured modem.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/modem
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemModem() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/modem', NULL, NULL, NULL);
	}


	/**
	 * Reset statistics for internal/external configured modem.
	 * Access Group: sysgrp.cfg
	 * @route  POST /system/modem/reset
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemModemReset() : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/modem/reset', NULL, NULL, NULL);
	}


	/**
	 * Trigger a connect for the configured modem.
	 * Access Group: sysgrp.cfg
	 * @route  POST /system/modem/connect
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemModemConnect() : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/modem/connect', NULL, NULL, NULL);
	}


	/**
	 * Trigger a disconnect for the configured modem.
	 * Access Group: sysgrp.cfg
	 * @route  POST /system/modem/disconnect
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemModemDisconnect() : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/modem/disconnect', NULL, NULL, NULL);
	}


	/**
	 * Update supported modem list from FortiGuard.
	 * Access Group: sysgrp.cfg
	 * @route  POST /system/modem/update
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemModemUpdate() : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/modem/update', NULL, NULL, NULL);
	}


	/**
	 * List all 3G modems available via FortiGuard.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/3g-modem
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystem3gModem() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/3g-modem', NULL, NULL, NULL);
	}


	/**
	 * Retreive current and historical usage data for a provided resource.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/resource/usage
	 * @param  $scope Scope of resource [vdom|global]. This parameter is only applicable if the FGT is in VDOM mode.
	 * @param  $resource Resource to get usage data for [cpu|mem|disk|session|session6|setuprate|setuprate6|disk_lograte|faz_lograte|forticloud_lograte]. Defaults to all resources if not provided. Additionally, [npu_session|npu_session6] data is available for devices that have an NPU and [nturbo_session|nturbo_session6] data is available for NP6 devices that support NTurbo.
	 * @param  $interval Time interval of resource usage [1-min|10-min|30-min|1-hour|12-hour|24-hour]. Defaults to all intervals if not provided.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemResourceUsage(
		string $scope = null,
		string $resource = null,
		string $interval = null
	) : stdClass {
		return $this->curlRequest('GET', '/monitor/system/resource/usage', NULL, ['scope'=>$scope, 'resource'=>$resource, 'interval'=>$interval], NULL);
	}


	/**
	 * Return a list of all configured packet captures.
	 * Access Group: netgrp.packet-capture
	 * @route  GET /system/sniffer
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemSniffer() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/sniffer', NULL, NULL, NULL);
	}


	/**
	 * Restart specified packet capture.
	 * Access Group: netgrp.packet-capture
	 * @route  POST /system/sniffer/restart
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemSnifferRestart(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/sniffer/restart', NULL, NULL, $body);
	}


	/**
	 * Start specified packet capture.
	 * Access Group: netgrp.packet-capture
	 * @route  POST /system/sniffer/start
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemSnifferStart(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/sniffer/start', NULL, NULL, $body);
	}


	/**
	 * Stop specified packet capture.
	 * Access Group: netgrp.packet-capture
	 * @route  POST /system/sniffer/stop
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemSnifferStop(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/sniffer/stop', NULL, NULL, $body);
	}


	/**
	 * Clear the results of a specified packet capture.
	 * Access Group: netgrp.packet-capture
	 * @route  POST /system/sniffer/clear
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemSnifferClear(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/sniffer/clear', NULL, NULL, $body);
	}


	/**
	 * Download a stored packet capture.
	 * Access Group: netgrp.packet-capture
	 * @route  GET /system/sniffer/download
	 * @param  $mkey ID of packet capture entry.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemSnifferDownload(int $mkey) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/sniffer/download', NULL, ['mkey'=>$mkey], NULL);
	}


	/**
	 * Stats for automation stitches.
	 * Access Group: secfabgrp
	 * @route  GET /system/automation-stitch/stats
	 * @param  $mkey Filter: Automation stitch name.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemAutomationStitchStats(string $mkey = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/automation-stitch/stats', NULL, ['mkey'=>$mkey], NULL);
	}


	/**
	 * Triggers an automation stitch for testing purposes.
	 * Access Group: sysgrp
	 * @route  POST /system/automation-stitch/test
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemAutomationStitchTest(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/automation-stitch/test', NULL, NULL, $body);
	}


	/**
	 * Triggers an incoming webhook for an automation stitch.
	 * Access Group: secfabgrp
	 * @route  POST /system/automation-stitch/webhook
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemAutomationStitchWebhook(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/automation-stitch/webhook', NULL, NULL, $body);
	}


	/**
	 * Format log disk.
	 * Access Group: loggrp.data-access
	 * @route  POST /system/logdisk/format
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemLogdiskFormat() : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/logdisk/format', NULL, NULL, NULL);
	}


	/**
	 * Retrieve statistics for all system interfaces.
	 * Access Group: netgrp.cfg
	 * @route  GET /system/interface
	 * @param  $interface_name Filter: interface name.
	 * @param  $include_vlan Enable to include VLANs in result list.
	 * @param  $include_aggregate Enable to include Aggregate interfaces in result list.
	 * @param  $scope Scope from which to retrieve the interface stats from [vdom|global].
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemInterface(
		string $interface_name = null,
		bool $include_vlan = null,
		bool $include_aggregate = null,
		string $scope = null
	) : stdClass {
		return $this->curlRequest('GET', '/monitor/system/interface', NULL, ['interface_name'=>$interface_name, 'include_vlan'=>$include_vlan, 'include_aggregate'=>$include_aggregate, 'scope'=>$scope], NULL);
	}


	/**
	 * Retrieve PoE statistics for system interfaces.
	 * Access Group: netgrp.cfg
	 * @route  GET /system/interface/poe
	 * @param  $mkey Filter: Name of the interface to fetch PoE statistics for.
	 * @param  $scope Scope from which to retrieve the interface stats from [vdom|global] (default=vdom).
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemInterfacePoe(string $mkey = null, string $scope = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/interface/poe', NULL, ['mkey'=>$mkey, 'scope'=>$scope], NULL);
	}


	/**
	 * Retrieve the DHCP client status of an interface.
	 * Access Group: netgrp.cfg
	 * @route  GET /system/interface/dhcp-status
	 * @param  $mkey Name of the interface.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemInterfaceDhcpStatus(string $mkey) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/interface/dhcp-status', NULL, ['mkey'=>$mkey], NULL);
	}


	/**
	 * Renew DHCP lease of an interface.
	 * Access Group: netgrp.cfg
	 * @route  POST /system/interface/dhcp-renew
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemInterfaceDhcpRenew(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/interface/dhcp-renew', NULL, NULL, $body);
	}


	/**
	 * Retrieve a list of all interfaces along with some meta information regarding their availability.
	 * Access Group: any
	 * @route  GET /system/available-interfaces
	 * @param  $view_type Optionally include additional information for interfaces. This parameter can be repeated multiple times. 'poe': Includes PoE information for supported ports (DEPRECATED in 6.4). 'ha': Includes extra meta information useful when dealing with interfaces related to HA configuration. Interfaces that are used by an HA cluster as management interfaces are also included in this view. 'zone': Includes extra meta information for determining zone membership eligibility. 'vwp': Includes extra meta information for determining virtual wire pair eligibility. 'sdwan': Includes extra meta information for determining SD-WAN eligibility. 'switch': Includes extra meta information for determining switch eligibility. 'hard-switch': Includes extra meta information for determining hard-switch eligibility. 'limited': Includes limited information on parent interfaces that are in another VDOM. 'stat': Includes TX/RX statistics data.
	 * @param  $scope Scope of interface list [vdom|global]
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemAvailableInterfaces(string $view_type = null, string $scope = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/available-interfaces', NULL, ['view_type'=>$view_type, 'scope'=>$scope], NULL);
	}


	/**
	 * Retrieve a list of interfaces and their acquired DNS servers.
	 * Access Group: any
	 * @route  GET /system/acquired-dns
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemAcquiredDns() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/acquired-dns', NULL, NULL, NULL);
	}


	/**
	 * Resolves the provided FQDNs to FQDN -> IP mappings.
	 * Access Group: any
	 * @route  GET /system/resolve-fqdn
	 * @param  $ipv6 Resolve for the AAAA record?
	 * @param  $fqdn FQDN
	 * @param  $fqdn List of FQDNs to be resolved
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemResolveFqdn(bool $ipv6 = null, array $fqdn = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/resolve-fqdn', NULL, ['ipv6'=>$ipv6, 'fqdn'=>$fqdn], NULL);
	}


	/**
	 * Retrieve a list of all IPv6 IP pools that are valid for NAT 46 policies.
	 * Access Group: any
	 * @route  GET /system/nat46-ippools
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemNat46Ippools() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/nat46-ippools', NULL, NULL, NULL);
	}


	/**
	 * Run a speed-test on the given interface.
	 * Access Group: netgrp.cfg
	 * @route  POST /system/interface/speed-test-trigger
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemInterfaceSpeedTestTrigger(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/interface/speed-test-trigger', NULL, NULL, $body);
	}


	/**
	 * Retrieve the current status of a speed-test with the results if finished.
	 * Access Group: netgrp.cfg
	 * @route  GET /system/interface/speed-test-status
	 * @param  $id ID of the speed test.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemInterfaceSpeedTestStatus(int $id) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/interface/speed-test-status', NULL, ['id'=>$id], NULL);
	}


	/**
	 * Retrieve information about connected USB drives, including estimated log sizes.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/usb-log
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemUsbLog() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/usb-log', NULL, NULL, NULL);
	}


	/**
	 * Start backup of logs from current VDOM to USB drive.
	 * Access Group: sysgrp.cfg
	 * @route  POST /system/usb-log/start
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemUsbLogStart() : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/usb-log/start', NULL, NULL, NULL);
	}


	/**
	 * Stop backup of logs to USB drive.
	 * Access Group: sysgrp.cfg
	 * @route  POST /system/usb-log/stop
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemUsbLogStop() : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/usb-log/stop', NULL, NULL, NULL);
	}


	/**
	 * Eject USB drives for safe removal.
	 * Access Group: sysgrp.cfg
	 * @route  POST /system/usb-device/eject
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemUsbDeviceEject() : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/usb-device/eject', NULL, NULL, NULL);
	}


	/**
	 * Determine if there is an IP conflict for a specific IP using ARP.
	 * Access Group: netgrp.cfg
	 * @route  GET /system/ipconf
	 * @param  $devs List of interfaces to check for conflict.
	 * @param  $ipaddr IPv4 address to check for conflict.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemIpconf(array $devs, string $ipaddr) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/ipconf', NULL, ['devs'=>$devs, 'ipaddr'=>$ipaddr], NULL);
	}


	/**
	 * Immediately update status for FortiGuard services.
	 * Access Group: sysgrp.cfg
	 * @route  POST /system/fortiguard/update
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemFortiguardUpdate() : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/fortiguard/update', NULL, NULL, NULL);
	}


	/**
	 * Immediately clear all FortiGuard statistics.
	 * Access Group: sysgrp.cfg
	 * @route  POST /system/fortiguard/clear-statistics
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemFortiguardClearStatistics() : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/fortiguard/clear-statistics', NULL, NULL, NULL);
	}


	/**
	 * Test availability of FortiGuard services.
	 * Access Group: sysgrp.cfg
	 * @route  POST /system/fortiguard/test-availability
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemFortiguardTestAvailability(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/fortiguard/test-availability', NULL, NULL, $body);
	}


	/**
	 * Get FortiGuard server list and information.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/fortiguard/server-info
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemFortiguardServerInfo() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/fortiguard/server-info', NULL, NULL, NULL);
	}


	/**
	 * Get FortiManager status.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/fortimanager/status
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemFortimanagerStatus() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/fortimanager/status', NULL, NULL, NULL);
	}


	/**
	 * Configure FortiManager IP. Register FortiManager if 'fortimanager_ip' is provided.       Unregister FortiManager if only 'unregister' parameter is specified and set to true.
	 * Access Group: sysgrp.cfg
	 * @route  POST /system/fortimanager/config
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemFortimanagerConfig(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/fortimanager/config', NULL, NULL, $body);
	}


	/**
	 * Get FortiManager backup summary.
	 * Access Group: fwgrp
	 * @route  GET /system/fortimanager/backup-summary
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemFortimanagerBackupSummary() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/fortimanager/backup-summary', NULL, NULL, NULL);
	}


	/**
	 * Import or update from FortiManager objects.
	 * Access Group: fwgrp
	 * @route  POST /system/fortimanager/backup-action
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemFortimanagerBackupAction(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/fortimanager/backup-action', NULL, NULL, $body);
	}


	/**
	 * Get the properties of a FortiManager object.
	 * Access Group: fwgrp
	 * @route  GET /system/fortimanager/backup-details
	 * @param  $mkey Object name.
	 * @param  $datasource Object datasource.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemFortimanagerBackupDetails(string $mkey, string $datasource) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/fortimanager/backup-details', NULL, ['mkey'=>$mkey, 'datasource'=>$datasource], NULL);
	}


	/**
	 * Get available certificates.
	 * Access Group: any
	 * @route  GET /system/available-certificates
	 * @param  $scope Scope of certificate [vdom*|global].
	 * @param  $with_remote Include remote certificates.
	 * @param  $with_ca Include certificate authorities.
	 * @param  $with_crl Include certificate revocation lists.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemAvailableCertificates(
		string $scope = null,
		bool $with_remote = null,
		bool $with_ca = null,
		bool $with_crl = null
	) : stdClass {
		return $this->curlRequest('GET', '/monitor/system/available-certificates', NULL, ['scope'=>$scope, 'with_remote'=>$with_remote, 'with_ca'=>$with_ca, 'with_crl'=>$with_crl], NULL);
	}


	/**
	 * Get trusted certifiate authorities.
	 * Access Group: any
	 * @route  GET /system/trusted-cert-authorities
	 * @param  $scope Scope of certificate [vdom*|global].
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemTrustedCertAuthorities(string $scope = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/trusted-cert-authorities', NULL, ['scope'=>$scope], NULL);
	}


	/**
	 * Download certificate.
	 * Access Group: vpngrp
	 * @route  GET /system/certificate/download
	 * @param  $mkey Name of certificate.
	 * @param  $type Type of certificate [local-cer|remote-cer|local-ca|remote-ca|local-csr|crl].
	 * @param  $scope Scope of certificate [vdom*|global].
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemCertificateDownload(string $mkey, string $type, string $scope = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/certificate/download', NULL, ['mkey'=>$mkey, 'type'=>$type, 'scope'=>$scope], NULL);
	}


	/**
	 * Get certificate information from a certificate string.
	 * Access Group: any
	 * @route  POST /system/certificate/read-info
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemCertificateReadInfo(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/certificate/read-info', NULL, NULL, $body);
	}


	/**
	 * Download debug report for technical support.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/debug/download
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemDebugDownload() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/debug/download', NULL, NULL, NULL);
	}


	/**
	 * Dump system com-log to file.
	 * Access Group: sysgrp.cfg
	 * @route  POST /system/com-log/dump
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemComLogDump() : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/com-log/dump', NULL, NULL, NULL);
	}


	/**
	 * Fetch system com-log file dump progress.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/com-log/update
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemComLogUpdate() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/com-log/update', NULL, NULL, NULL);
	}


	/**
	 * Download com-log file (after file dump is complete).
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/com-log/download
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemComLogDownload() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/com-log/download', NULL, NULL, NULL);
	}


	/**
	 * Download the error log of the configuration management database.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/config-error-log/download
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemConfigErrorLogDownload() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/config-error-log/download', NULL, NULL, NULL);
	}


	/**
	 * Retrieve statistics for FortiGuard botnet database.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/botnet/stat
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemBotnetStat() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/botnet/stat', NULL, NULL, NULL);
	}


	/**
	 * List all known IP-based botnet entries in FortiGuard botnet database.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/botnet
	 * @param  $start Starting entry index.
	 * @param  $count Maximum number of entries to return.
	 * @param  $include_hit_only Include entries with hits only.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemBotnet(int $start = null, int $count = null, bool $include_hit_only = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/botnet', NULL, ['start'=>$start, 'count'=>$count, 'include_hit_only'=>$include_hit_only], NULL);
	}


	/**
	 * List all known domain-based botnet entries in FortiGuard botnet database.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/botnet-domains
	 * @param  $start Starting entry index.
	 * @param  $count Maximum number of entries to return.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemBotnetDomains(int $start = null, int $count = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/botnet-domains', NULL, ['start'=>$start, 'count'=>$count], NULL);
	}


	/**
	 * List statistics on domain-based botnet entries in FortiGuard botnet database.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/botnet-domains/stat
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemBotnetDomainsStat() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/botnet-domains/stat', NULL, NULL, NULL);
	}


	/**
	 * List hit botnet domains with hit count > 0.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/botnet-domains/hits
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemBotnetDomainsHits() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/botnet-domains/hits', NULL, NULL, NULL);
	}


	/**
	 * List of statistics for members of HA cluster.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/ha-statistics
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemHaStatistics() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/ha-statistics', NULL, NULL, NULL);
	}


	/**
	 * Get HA cluster historical logs.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/ha-history
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemHaHistory() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/ha-history', NULL, NULL, NULL);
	}


	/**
	 * List of checksums for members of HA cluster.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/ha-checksums
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemHaChecksums() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/ha-checksums', NULL, NULL, NULL);
	}


	/**
	 * Get configuration of peer(s) in HA cluster. Uptime is expressed in seconds.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/ha-peer
	 * @param  $serial_no Serial number of the HA member. If not specified, fetch information for all HA members
	 * @param  $vcluster_id Virtual cluster number. If not specified, fetch information for all active vclusters
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemHaPeer(string $serial_no = null, int $vcluster_id = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/ha-peer', NULL, ['serial_no'=>$serial_no, 'vcluster_id'=>$vcluster_id], NULL);
	}


	/**
	 * Update configuration of peer in HA cluster.
	 * Access Group: sysgrp.cfg
	 * @route  POST /system/ha-peer/update
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemHaPeerUpdate(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/ha-peer/update', NULL, NULL, $body);
	}


	/**
	 * Update configuration of peer in HA cluster.
	 * Access Group: sysgrp.cfg
	 * @route  POST /system/ha-peer/disconnect
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemHaPeerDisconnect(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/ha-peer/disconnect', NULL, NULL, $body);
	}


	/**
	 * Retrieve per-interface statistics for active link monitors.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/link-monitor
	 * @param  $mkey Name of link monitor.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemLinkMonitor(string $mkey = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/link-monitor', NULL, ['mkey'=>$mkey], NULL);
	}


	/**
	 * Restore system configuration from uploaded file or from USB.
	 * Access Group: sysgrp.mnt
	 * @route  POST /system/config/restore
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemConfigRestore(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/config/restore', NULL, NULL, $body);
	}


	/**
	 * Backup system config
	 * Access Group: sysgrp.mnt
	 * @route  GET /system/config/backup
	 * @param  $destination Configuration file destination [file* | usb]
	 * @param  $usb_filename When using 'usb' destination: the filename to save to on the connected USB device
	 * @param  $password Password to encrypt configuration data.
	 * @param  $scope Specify global or VDOM only backup [global | vdom].
	 * @param  $vdom If 'vdom' scope specified, the name of the VDOM to backup configuration.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemConfigBackup(
		string $destination = null,
		string $usb_filename = null,
		string $password = null,
		string $scope,
		string $vdom = null
	) : stdClass {
		return $this->curlRequest('GET', '/monitor/system/config/backup', NULL, ['destination'=>$destination, 'usb_filename'=>$usb_filename, 'password'=>$password, 'scope'=>$scope, 'vdom'=>$vdom], NULL);
	}


	/**
	 * Explicitly save all configuration.
	 * Access Group: sysgrp.cfg
	 * @route  POST /system/config/save
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemConfigSave() : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/config/save', NULL, NULL, NULL);
	}


	/**
	 * List configuration files available on connected USB drive.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/config/usb-filelist
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemConfigUsbFilelist() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/config/usb-filelist', NULL, NULL, NULL);
	}


	/**
	 * List of running processes and their resource usage.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/running-processes
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemRunningProcesses() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/running-processes', NULL, NULL, NULL);
	}


	/**
	 * Retrieve a list of FortiSandbox cloud regions.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/sandbox/cloud-regions
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemSandboxCloudRegions() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/sandbox/cloud-regions', NULL, NULL, NULL);
	}


	/**
	 * Retrieve sandbox statistics.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/sandbox/stats
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemSandboxStats() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/sandbox/stats', NULL, NULL, NULL);
	}


	/**
	 * Retrieve sandbox status.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/sandbox/status
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemSandboxStatus() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/sandbox/status', NULL, NULL, NULL);
	}


	/**
	 * Test the connectivity of a given FortiSandbox IP.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/sandbox/test-connect
	 * @param  $server IP/FQDN of the FortiSandbox to test.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemSandboxTestConnect(string $server) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/sandbox/test-connect', NULL, ['server'=>$server], NULL);
	}


	/**
	 * Retrieve all objects that are currently using as well as objects that can use the given object.
	 * Access Group: any
	 * @route  GET /system/object/usage
	 * @param  $q_path The CMDB table's path
	 * @param  $q_name The CMDB table's name
	 * @param  $qtypes List of CMDB table qTypes
	 * @param  $scope Scope of resource [vdom|global].
	 * @param  $mkey The mkey for the object
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemObjectUsage(
		string $q_path = null,
		string $q_name = null,
		array $qtypes = null,
		string $scope = null,
		string $mkey
	) : stdClass {
		return $this->curlRequest('GET', '/monitor/system/object/usage', NULL, ['q_path'=>$q_path, 'q_name'=>$q_name, 'qtypes'=>$qtypes, 'scope'=>$scope, 'mkey'=>$mkey], NULL);
	}


	/**
	 * Retrieve basic system status.
	 * Access Group: any
	 * @route  GET /system/status
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemStatus() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/status', NULL, NULL, NULL);
	}


	/**
	 * Get world timezone and daylight saving time.
	 * Access Group: any
	 * @route  GET /system/timezone
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemTimezone() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/timezone', NULL, NULL, NULL);
	}


	/**
	 * Get a list of transceivers being used by the FortiGate.
	 * Access Group: any
	 * @route  GET /system/interface/transceivers
	 * @param  $scope Scope from which to retrieve the transceiver information from [vdom|global].
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemInterfaceTransceivers(string $scope = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/interface/transceivers', NULL, ['scope'=>$scope], NULL);
	}


	/**
	 * Get VM information.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/vm-information
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemVmInformation() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/vm-information', NULL, NULL, NULL);
	}


	/**
	 * Update VM license using uploaded file. Reboots immediately if successful.
	 * Access Group: sysgrp.cfg
	 * @route  POST /system/vmlicense/upload
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemVmlicenseUpload(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/vmlicense/upload', NULL, NULL, $body);
	}


	/**
	 * Retrieve system sensor status.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/sensor-info
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemSensorInfo() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/sensor-info', NULL, NULL, NULL);
	}


	/**
	 * Retrieve a Security Rating report result. Without ID specified, returns the most recent result.
	 * Access Group: secfabgrp
	 * @route  GET /system/security-rating
	 * @param  $id Report ID.
	 * @param  $report_type Report type to view, Security Report when unspecified.
	 * @param  $scope Scope of the report [vdom*|global]. Global scope is only accessible for global administrators.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemSecurityRating(int $id = null, string $report_type = null, string $scope = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/security-rating', NULL, ['id'=>$id, 'report_type'=>$report_type, 'scope'=>$scope], NULL);
	}


	/**
	 * Retrieve list of report types the Security Rating package supports.
	 * Access Group: secfabgrp
	 * @route  GET /system/security-rating/supported-reports
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemSecurityRatingSupportedReports() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/security-rating/supported-reports', NULL, NULL, NULL);
	}


	/**
	 * Retrieve Security Rating history.
	 * Access Group: secfabgrp
	 * @route  GET /system/security-rating/history
	 * @param  $report_type Security Rating report history to view, view Security Report when unspecified.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemSecurityRatingHistory(string $report_type = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/security-rating/history', NULL, ['report_type'=>$report_type], NULL);
	}


	/**
	 * Run a Security Rating report.
	 * Access Group: secfabgrp
	 * @route  POST /system/security-rating/trigger
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemSecurityRatingTrigger(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/security-rating/trigger', NULL, NULL, $body);
	}


	/**
	 * Check if a Security Rating report is currently running.
	 * Access Group: secfabgrp
	 * @route  GET /system/security-rating/status
	 * @param  $id Report ID.
	 * @param  $report_type Report type to view, Security Report when unspecified.
	 * @param  $progress Query report progress.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemSecurityRatingStatus(
		int $id = null,
		string $report_type = null,
		bool $progress = null
	) : stdClass {
		return $this->curlRequest('GET', '/monitor/system/security-rating/status', NULL, ['id'=>$id, 'report_type'=>$report_type, 'progress'=>$progress], NULL);
	}


	/**
	 * Returns the requested Security Rating language mapping.
	 * Access Group: secfabgrp
	 * @route  GET /system/security-rating/lang
	 * @param  $key Requested language mapping (en, fr, big5, euc-kr, GB2312, pg, sp, x-sjis).
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemSecurityRatingLang(string $key = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/security-rating/lang', NULL, ['key'=>$key], NULL);
	}


	/**
	 * Check whether a list of TCP port ranges is available for a certain service.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/check-port-availability
	 * @param  $port_ranges List of TCP port range objects to check against.
	 * @param  $service The service in which the ports could be available. 'service' options are [reserved | sysglobal | webproxy | ftpproxy | sslvpn | slaprobe | fsso | ftm_push]. If 'service' is not specified, the port ranges availability is checked against all services.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemCheckPortAvailability(array $port_ranges, string $service = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/check-port-availability', NULL, ['port_ranges'=>$port_ranges, 'service'=>$service], NULL);
	}


	/**
	 * Retrieve a list of NSX security tags for connected NSX servers.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/sdn-connector/nsx-security-tags
	 * @param  $mkey Filter: NSX SDN connector name.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemSdnConnectorNsxSecurityTags(string $mkey = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/sdn-connector/nsx-security-tags', NULL, ['mkey'=>$mkey], NULL);
	}


	/**
	 * Retrieve connection status for SDN connectors.
	 * Access Group: sysgrp.cfg
	 * @route  GET /system/sdn-connector/status
	 * @param  $mkey Filter: SDN connector name.
	 * @param  $type Filter: SDN connector type. Ignored if mkey is specified.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllSystemSdnConnectorStatus(string $mkey = null, string $type = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/system/sdn-connector/status', NULL, ['mkey'=>$mkey, 'type'=>$type], NULL);
	}


	/**
	 * Update an SDN connector's connection status.
	 * Access Group: sysgrp.cfg
	 * @route  POST /system/sdn-connector/update
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemSdnConnectorUpdate(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/sdn-connector/update', NULL, NULL, $body);
	}


	/**
	 * Validate a string representing a private key from GCP in PEM format.
	 * Access Group: any
	 * @route  POST /system/sdn-connector/validate-gcp-key
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSystemSdnConnectorValidateGcpKey(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/system/sdn-connector/validate-gcp-key', NULL, NULL, $body);
	}


	/**
	 * List authenticated firewall users.
	 * Access Group: authgrp
	 * @route  GET /user/firewall
	 * @param  $start Starting entry index.
	 * @param  $count Maximum number of entries to return.
	 * @param  $ipv4 Include IPv4 user (default=true).
	 * @param  $ipv6 Include IPv6 users.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllUserFirewall(
		int $start = null,
		int $count = null,
		bool $ipv4 = null,
		bool $ipv6 = null
	) : stdClass {
		return $this->curlRequest('GET', '/monitor/user/firewall', NULL, ['start'=>$start, 'count'=>$count, 'ipv4'=>$ipv4, 'ipv6'=>$ipv6], NULL);
	}


	/**
	 * Trigger authentication for a single firewall user.
	 * Access Group: authgrp
	 * @route  POST /user/firewall/auth
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addUserFirewallAuth(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/user/firewall/auth', NULL, NULL, $body);
	}


	/**
	 * Deauthenticate single, multiple, or all firewall users.
	 * Access Group: authgrp
	 * @route  POST /user/firewall/deauth
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addUserFirewallDeauth(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/user/firewall/deauth', NULL, NULL, $body);
	}


	/**
	 * Return a list of all banned users by IP.
	 * Access Group: authgrp
	 * @route  GET /user/banned
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllUserBanned() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/user/banned', NULL, NULL, NULL);
	}


	/**
	 * Immediately clear a list of specific banned users by IP.
	 * Access Group: authgrp
	 * @route  POST /user/banned/clear_users
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addUserBannedClear_users(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/user/banned/clear_users', NULL, NULL, $body);
	}


	/**
	 * Immediately add one or more users to the banned list.
	 * Access Group: authgrp
	 * @route  POST /user/banned/add_users
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addUserBannedAdd_users(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/user/banned/add_users', NULL, NULL, $body);
	}


	/**
	 * Immediately clear all banned users.
	 * Access Group: authgrp
	 * @route  POST /user/banned/clear_all
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addUserBannedClear_all() : stdClass
	{
		return $this->curlRequest('POST', '/monitor/user/banned/clear_all', NULL, NULL, NULL);
	}


	/**
	 * Retrieve a map of FortiTokens and their status.
	 * Access Group: authgrp
	 * @route  GET /user/fortitoken
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllUserFortitoken() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/user/fortitoken', NULL, NULL, NULL);
	}


	/**
	 * Activate a set of FortiTokens by serial number.
	 * Access Group: authgrp
	 * @route  POST /user/fortitoken/activate
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addUserFortitokenActivate(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/user/fortitoken/activate', NULL, NULL, $body);
	}


	/**
	 * Retrieve FortiToken Cloud service status.
	 * Access Group: authgrp
	 * @route  GET /user/fortitoken-cloud/status
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllUserFortitokenCloudStatus() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/user/fortitoken-cloud/status', NULL, NULL, NULL);
	}


	/**
	 * List email addresses collected from captive portal.
	 * Access Group: authgrp
	 * @route  GET /user/collected-email
	 * @param  $ipv6 Include collected email from IPv6 users.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllUserCollectedEmail(bool $ipv6 = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/user/collected-email', NULL, ['ipv6'=>$ipv6], NULL);
	}


	/**
	 * Retrieve a list of detected devices.
	 * Access Group: authgrp
	 * @route  GET /user/detected-device
	 * @param  $expand_child_macs Include child devices as separate entries in the list.
	 * @param  $with_dhcp Retrieve DHCP lease information.
	 * @param  $with_endpoint Retrieve FortiClient endpoint information.
	 * @param  $with_fortilink Retrieve FortiLink information.
	 * @param  $with_fortiap Retrieve FortiAP information.
	 * @param  $with_user Retrieve authenticated user information.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllUserDetectedDevice(
		bool $expand_child_macs = null,
		bool $with_dhcp = null,
		bool $with_endpoint = null,
		bool $with_fortilink = null,
		bool $with_fortiap = null,
		bool $with_user = null
	) : stdClass {
		return $this->curlRequest('GET', '/monitor/user/detected-device', NULL, ['expand_child_macs'=>$expand_child_macs, 'with_dhcp'=>$with_dhcp, 'with_endpoint'=>$with_endpoint, 'with_fortilink'=>$with_fortilink, 'with_fortiap'=>$with_fortiap, 'with_user'=>$with_user], NULL);
	}


	/**
	 * Retrieve user devices from user device store. List all the user devices if there is no filter set.
	 * Access Group: authgrp
	 * @route  GET /user/device/query
	 * @param  $start Number of entries to skip from the beginning.
	 * @param  $number Maximum number of entries to return.
	 * @param  $filters A map of filters. Type: {"key":  "value"}
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllUserDeviceQuery(int $start = null, int $number = null, string $filters = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/user/device/query', NULL, ['start'=>$start, 'number'=>$number, 'filters'=>$filters], NULL);
	}


	/**
	 * Remove single or multiple user devices specified by host MAC addresses.
	 * Access Group: authgrp
	 * @route  POST /user/device/remove
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addUserDeviceRemove(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/user/device/remove', NULL, NULL, $body);
	}


	/**
	 * Retrieve a list of detected devices.
	 * Access Group: authgrp
	 * @route  GET /user/device
	 * @param  $master_only List of master device only.
	 * @param  $master_mac Filter: Master MAC of a device. Multiple entries could be returned.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllUserDevice(bool $master_only = null, string $master_mac = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/user/device', NULL, ['master_only'=>$master_only, 'master_mac'=>$master_mac], NULL);
	}


	/**
	 * Refresh a set of FortiTokens by serial number.
	 * Access Group: authgrp
	 * @route  POST /user/fortitoken/refresh
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addUserFortitokenRefresh(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/user/fortitoken/refresh', NULL, NULL, $body);
	}


	/**
	 * Provision a set of FortiTokens by serial number.
	 * Access Group: authgrp
	 * @route  POST /user/fortitoken/provision
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addUserFortitokenProvision(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/user/fortitoken/provision', NULL, NULL, $body);
	}


	/**
	 * Send a FortiToken activation code to a user via SMS or Email.
	 * Access Group: authgrp
	 * @route  POST /user/fortitoken/send-activation
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addUserFortitokenSendActivation(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/user/fortitoken/send-activation', NULL, NULL, $body);
	}


	/**
	 * Import trial mobile FortiTokens.
	 * Access Group: authgrp
	 * @route  POST /user/fortitoken/import-trial
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addUserFortitokenImportTrial() : stdClass
	{
		return $this->curlRequest('POST', '/monitor/user/fortitoken/import-trial', NULL, NULL, NULL);
	}


	/**
	 * Import a list of tokens from FortiGuard to the FortiGate unit.
	 * Access Group: authgrp
	 * @route  POST /user/fortitoken/import-mobile
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addUserFortitokenImportMobile(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/user/fortitoken/import-mobile', NULL, NULL, $body);
	}


	/**
	 * Import a FortiToken seed file.
	 * Access Group: authgrp
	 * @route  POST /user/fortitoken/import-seed
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addUserFortitokenImportSeed(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/user/fortitoken/import-seed', NULL, NULL, $body);
	}


	/**
	 * Refresh remote agent group list for all fsso agents.
	 * Access Group: authgrp
	 * @route  POST /user/fsso/refresh-server
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addUserFssoRefreshServer() : stdClass
	{
		return $this->curlRequest('POST', '/monitor/user/fsso/refresh-server', NULL, NULL, NULL);
	}


	/**
	 * Get a list of fsso and fsso polling status.
	 * Access Group: authgrp
	 * @route  GET /user/fsso
	 * @param  $mkey Filter: Get the status for a specific FSSO entry. `type` is required if this is set.
	 * @param  $type Filter: Get the status for this type of FSSO entry [fsso|fsso-polling].
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllUserFsso(string $mkey = null, string $type = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/user/fsso', NULL, ['mkey'=>$mkey, 'type'=>$type], NULL);
	}


	/**
	 * Sent guest login details via email.
	 * Access Group: authgrp
	 * @route  POST /user/guest/email
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addUserGuestEmail(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/user/guest/email', NULL, NULL, $body);
	}


	/**
	 * Sent guest login details via SMS.
	 * Access Group: authgrp
	 * @route  POST /user/guest/sms
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addUserGuestSms(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/user/guest/sms', NULL, NULL, $body);
	}


	/**
	 * Test the connectivity of the given RADIUS server and, optionally, the validity of a username & password.
	 * Access Group: authgrp
	 * @route  POST /user/radius/test-connect
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addUserRadiusTestConnect(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/user/radius/test-connect', NULL, NULL, $body);
	}


	/**
	 * Test the connectivity of the given TACACS+ server.
	 * Access Group: authgrp
	 * @route  POST /user/tacacs-plus/test
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addUserTacacsPlusTest(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/user/tacacs-plus/test', NULL, NULL, $body);
	}


	/**
	 * Query user info.
	 * Access Group: authgrp
	 * @route  GET /user/info/query
	 * @param  $start Number of entries to skip from the beginning.
	 * @param  $number Maximum number of entries to return.
	 * @param  $filters A list of filters. Type: {"type": string, "value": string}
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllUserInfoQuery(int $start = null, int $number = null, array $filters) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/user/info/query', NULL, ['start'=>$start, 'number'=>$number, 'filters'=>$filters], NULL);
	}


	/**
	 * Get user info thumbnail. Returns the first match to the filter.
	 * Access Group: authgrp
	 * @route  GET /user/info/thumbnail
	 * @param  $filters A list of filters. Type: {"type": string, "value": string}
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllUserInfoThumbnail(array $filters) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/user/info/thumbnail', NULL, ['filters'=>$filters], NULL);
	}


	/**
	 * Lookup FortiGuard rating for a specific URL.
	 * Access Group: utmgrp.webfilter
	 * @route  POST /utm/rating-lookup/select
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addUtmRatingLookupSelect(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/utm/rating-lookup/select', NULL, NULL, $body);
	}


	/**
	 * Query remote FortiFlow database to resolve hosts to application control entries.
	 * Access Group: any
	 * @route  GET /utm/app-lookup
	 * @param  $hosts List of hosts to resolve.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllUtmAppLookup(array $hosts = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/utm/app-lookup', NULL, ['hosts'=>$hosts], NULL);
	}


	/**
	 * Retrieve a list of application control categories.
	 * Access Group: any
	 * @route  GET /utm/application-categories
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllUtmApplicationCategories() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/utm/application-categories', NULL, NULL, NULL);
	}


	/**
	 * Retrieve antivirus scanning statistics.
	 * Access Group: utmgrp.antivirus
	 * @route  GET /utm/antivirus/stats
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllUtmAntivirusStats() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/utm/antivirus/stats', NULL, NULL, NULL);
	}


	/**
	 * Retrieve a list of blacklisted SSL certificates.
	 * Access Group: fwgrp.others
	 * @route  GET /utm/blacklisted-certificates
	 * @param  $start Starting entry index.
	 * @param  $count Maximum number of entries to return. Limit is set to 2000.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllUtmBlacklistedCertificates(int $start, int $count) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/utm/blacklisted-certificates', NULL, ['start'=>$start, 'count'=>$count], NULL);
	}


	/**
	 * Retrieve blacklisted SSL certificates statistics.
	 * Access Group: fwgrp.others
	 * @route  GET /utm/blacklisted-certificates/statistics
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllUtmBlacklistedCertificatesStatistics() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/utm/blacklisted-certificates/statistics', NULL, NULL, NULL);
	}


	/**
	 * Retrieve health-check statistics for each SD-WAN link.
	 * Access Group: netgrp.cfg
	 * @route  GET /virtual-wan/health-check
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllVirtualWanHealthCheck() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/virtual-wan/health-check', NULL, NULL, NULL);
	}


	/**
	 * Retrieve log of SD-WAN interface quality information.
	 * Access Group: netgrp.cfg
	 * @route  GET /virtual-wan/interface-log
	 * @param  $interface Filter: Interface name.
	 * @param  $since Filter: Only return SLA logs generated since this Unix timestamp.
	 * @param  $seconds Filter: Only return SLA logs generated in the last N seconds.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllVirtualWanInterfaceLog(
		string $interface = null,
		int $since = null,
		int $seconds = null
	) : stdClass {
		return $this->curlRequest('GET', '/monitor/virtual-wan/interface-log', NULL, ['interface'=>$interface, 'since'=>$since, 'seconds'=>$seconds], NULL);
	}


	/**
	 * Retrieve log of SLA probe results for for each SD-WAN SLA rule.
	 * Access Group: netgrp.cfg
	 * @route  GET /virtual-wan/sla-log
	 * @param  $sla Filter: SLA name.
	 * @param  $interface Filter: Interface name.
	 * @param  $since Filter: Only return SLA logs generated since this Unix timestamp.
	 * @param  $seconds Filter: Only return SLA logs generated in the last N seconds.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllVirtualWanSlaLog(
		string $sla = null,
		string $interface = null,
		int $since = null,
		int $seconds = null
	) : stdClass {
		return $this->curlRequest('GET', '/monitor/virtual-wan/sla-log', NULL, ['sla'=>$sla, 'interface'=>$interface, 'since'=>$since, 'seconds'=>$seconds], NULL);
	}


	/**
	 * Retrieve interface statistics for each SD-WAN link.
	 * Access Group: netgrp.cfg
	 * @route  GET /virtual-wan/members
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllVirtualWanMembers() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/virtual-wan/members', NULL, NULL, NULL);
	}


	/**
	 * Import CA certificate.
	 * Access Group: vpngrp
	 * @route  POST /vpn-certificate/ca/import
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addVpnCertificateCaImport(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/vpn-certificate/ca/import', NULL, NULL, $body);
	}


	/**
	 * Import certificate revocation lists (CRL) from file content.
	 * Access Group: vpngrp
	 * @route  POST /vpn-certificate/crl/import
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addVpnCertificateCrlImport(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/vpn-certificate/crl/import', NULL, NULL, $body);
	}


	/**
	 * Import local certificate.
	 * Access Group: vpngrp
	 * @route  POST /vpn-certificate/local/import
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addVpnCertificateLocalImport(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/vpn-certificate/local/import', NULL, NULL, $body);
	}


	/**
	 * Import remote certificate.
	 * Access Group: vpngrp
	 * @route  POST /vpn-certificate/remote/import
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addVpnCertificateRemoteImport(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/vpn-certificate/remote/import', NULL, NULL, $body);
	}


	/**
	 * Generate a certificate signing request (CSR) and a private key. The CSR can be retrieved / downloaded from CLI, GUI and REST API.
	 * Access Group: vpngrp
	 * @route  POST /vpn-certificate/csr/generate
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addVpnCertificateCsrGenerate(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/vpn-certificate/csr/generate', NULL, NULL, $body);
	}


	/**
	 * Clear IKE gateways.
	 * Access Group: vpngrp
	 * @route  POST /vpn/ike/clear
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addVpnIkeClear(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/vpn/ike/clear', NULL, NULL, $body);
	}


	/**
	 * Return an array of active IPsec VPNs.
	 * Access Group: vpngrp
	 * @route  GET /vpn/ipsec
	 * @param  $tunnel Filter for a specific IPsec tunnel name.
	 * @param  $start Starting entry index.
	 * @param  $count Maximum number of entries to return.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllVpnIpsec(string $tunnel = null, int $start = null, int $count = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/vpn/ipsec', NULL, ['tunnel'=>$tunnel, 'start'=>$start, 'count'=>$count], NULL);
	}


	/**
	 * Bring up a specific IPsec VPN tunnel.
	 * Access Group: vpngrp
	 * @route  POST /vpn/ipsec/tunnel_up
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addVpnIpsecTunnel_up(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/vpn/ipsec/tunnel_up', NULL, NULL, $body);
	}


	/**
	 * Bring down a specific IPsec VPN tunnel.
	 * Access Group: vpngrp
	 * @route  POST /vpn/ipsec/tunnel_down
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addVpnIpsecTunnel_down(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/vpn/ipsec/tunnel_down', NULL, NULL, $body);
	}


	/**
	 * Reset statistics for a specific IPsec VPN tunnel.
	 * Access Group: vpngrp
	 * @route  POST /vpn/ipsec/tunnel_reset_stats
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addVpnIpsecTunnel_reset_stats(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/vpn/ipsec/tunnel_reset_stats', NULL, NULL, $body);
	}


	/**
	 * Get information on devices registered in the Overlay Controller VPN cloud assisted group.
	 * Access Group: vpngrp
	 * @route  GET /vpn/ocvpn/members
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllVpnOcvpnMembers() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/vpn/ocvpn/members', NULL, NULL, NULL);
	}


	/**
	 * Get the last status message from FortiCloud Overlay Controller VPN cloud service.
	 * Access Group: vpngrp
	 * @route  GET /vpn/ocvpn/status
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllVpnOcvpnStatus() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/vpn/ocvpn/status', NULL, NULL, NULL);
	}


	/**
	 * Get meta information (e.g. licenses and registered members) from Overlay Controller VPN cloud service.
	 * Access Group: vpngrp
	 * @route  GET /vpn/ocvpn/meta
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllVpnOcvpnMeta() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/vpn/ocvpn/meta', NULL, NULL, NULL);
	}


	/**
	 * Retrieve a list of all SSL-VPN sessions and sub-sessions.
	 * Access Group: vpngrp
	 * @route  GET /vpn/ssl
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllVpnSsl() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/vpn/ssl', NULL, NULL, NULL);
	}


	/**
	 * Remove all active tunnel sessions in current virtual domain.
	 * Access Group: vpngrp
	 * @route  POST /vpn/ssl/clear_tunnel
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addVpnSslClear_tunnel() : stdClass
	{
		return $this->curlRequest('POST', '/monitor/vpn/ssl/clear_tunnel', NULL, NULL, NULL);
	}


	/**
	 * Terminate the provided SSL-VPN session.
	 * Access Group: vpngrp
	 * @route  POST /vpn/ssl/delete
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addVpnSslDelete(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/vpn/ssl/delete', NULL, NULL, $body);
	}


	/**
	 * Return statistics about the SSL-VPN.
	 * Access Group: vpngrp
	 * @route  GET /vpn/ssl/stats
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllVpnSslStats() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/vpn/ssl/stats', NULL, NULL, NULL);
	}


	/**
	 * Provision SSL-VPN users with target applications. The provisioning message (email or SMS) is sent with no confirmation of success.
	 * Access Group: vpngrp
	 * @route  POST /vpn/ssl/provision-user
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addVpnSslProvisionUser(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/vpn/ssl/provision-user', NULL, NULL, $body);
	}


	/**
	 * Retrieve WAN opt. statistics history.
	 * Access Group: wanoptgrp
	 * @route  GET /wanopt/history
	 * @param  $period Statistics period [10-min*|hour|day|week|30-day].
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllWanoptHistory(string $period = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/wanopt/history', NULL, ['period'=>$period], NULL);
	}


	/**
	 * Reset WAN opt. statistics.
	 * Access Group: wanoptgrp
	 * @route  POST /wanopt/history/reset
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addWanoptHistoryReset() : stdClass
	{
		return $this->curlRequest('POST', '/monitor/wanopt/history/reset', NULL, NULL, NULL);
	}


	/**
	 * Retrieve webcache statistics history.
	 * Access Group: wanoptgrp
	 * @route  GET /wanopt/webcache
	 * @param  $period Statistics period [10-min*|hour|day|week|30-day].
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllWanoptWebcache(string $period = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/wanopt/webcache', NULL, ['period'=>$period], NULL);
	}


	/**
	 * Reset webcache statistics.
	 * Access Group: wanoptgrp
	 * @route  POST /wanopt/webcache/reset
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addWanoptWebcacheReset() : stdClass
	{
		return $this->curlRequest('POST', '/monitor/wanopt/webcache/reset', NULL, NULL, NULL);
	}


	/**
	 * Retrieve a list of WAN opt peer statistics.
	 * Access Group: wanoptgrp
	 * @route  GET /wanopt/peer_stats
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllWanoptPeer_stats() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/wanopt/peer_stats', NULL, NULL, NULL);
	}


	/**
	 * Reset WAN opt peer statistics.
	 * Access Group: wanoptgrp
	 * @route  POST /wanopt/peer_stats/reset
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addWanoptPeer_statsReset() : stdClass
	{
		return $this->curlRequest('POST', '/monitor/wanopt/peer_stats/reset', NULL, NULL, NULL);
	}


	/**
	 * Import localization language file to this FortiGate.
	 * Access Group: sysgrp.mnt
	 * @route  POST /web-ui/language/import
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addWebUiLanguageImport(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/web-ui/language/import', NULL, NULL, $body);
	}


	/**
	 * Upload custom language file to this Fortigate.
	 * Access Group: sysgrp.mnt
	 * @route  POST /web-ui/custom-language/create
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addWebUiCustomLanguageCreate(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/web-ui/custom-language/create', NULL, NULL, $body);
	}


	/**
	 * Update custom language file to this Fortigate.
	 * Access Group: sysgrp.mnt
	 * @route  POST /web-ui/custom-language/update
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addWebUiCustomLanguageUpdate(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/web-ui/custom-language/update', NULL, NULL, $body);
	}


	/**
	 * Download a custom language file.
	 * Access Group: sysgrp.mnt
	 * @route  GET /web-ui/custom-language/download
	 * @param  $filename Name of custom language entry.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllWebUiCustomLanguageDownload(string $filename) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/web-ui/custom-language/download', NULL, ['filename'=>$filename], NULL);
	}


	/**
	 * Retrieve webcache statistics.
	 * Access Group: wanoptgrp
	 * @route  GET /webcache/stats
	 * @param  $period Statistics period [10min|hour|day|month].
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllWebcacheStats(string $period = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/webcache/stats', NULL, ['period'=>$period], NULL);
	}


	/**
	 * Reset all webcache statistics.
	 * Access Group: wanoptgrp
	 * @route  POST /webcache/stats/reset
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addWebcacheStatsReset() : stdClass
	{
		return $this->curlRequest('POST', '/monitor/webcache/stats/reset', NULL, NULL, NULL);
	}


	/**
	 * List all administrative and user initiated webfilter overrides.
	 * Access Group: utmgrp.webfilter
	 * @route  GET /webfilter/override
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllWebfilterOverride() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/webfilter/override', NULL, NULL, NULL);
	}


	/**
	 * Delete a configured webfilter override.
	 * Access Group: utmgrp.webfilter
	 * @route  POST /webfilter/override/delete
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addWebfilterOverrideDelete(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/webfilter/override/delete', NULL, NULL, $body);
	}


	/**
	 * List all URLs in FortiSandbox malicious URL database.
	 * Access Group: utmgrp.webfilter
	 * @route  GET /webfilter/malicious-urls
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllWebfilterMaliciousUrls() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/webfilter/malicious-urls', NULL, NULL, NULL);
	}


	/**
	 * Retrieve statistics for the FortiSandbox malicious URL database.
	 * Access Group: utmgrp.webfilter
	 * @route  GET /webfilter/malicious-urls/stat
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllWebfilterMaliciousUrlsStat() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/webfilter/malicious-urls/stat', NULL, NULL, NULL);
	}


	/**
	 * Retrieve quota usage statistics for webfilter categories.
	 * Access Group: utmgrp.webfilter
	 * @route  GET /webfilter/category-quota
	 * @param  $profile Webfilter profile.
	 * @param  $user User or IP (required if profile specified).
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllWebfilterCategoryQuota(string $profile = null, string $user = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/webfilter/category-quota', NULL, ['profile'=>$profile, 'user'=>$user], NULL);
	}


	/**
	 * Reset webfilter quota for user or IP.
	 * Access Group: utmgrp.webfilter
	 * @route  POST /webfilter/category-quota/reset
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addWebfilterCategoryQuotaReset(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/webfilter/category-quota/reset', NULL, NULL, $body);
	}


	/**
	 * Return FortiGuard web filter categories.
	 * Access Group: any
	 * @route  GET /webfilter/fortiguard-categories
	 * @param  $include_unrated Include Unrated category in result list.
	 * @param  $convert_unrated_id Convert Unrated category id to the one for CLI use.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllWebfilterFortiguardCategories(
		bool $include_unrated = null,
		bool $convert_unrated_id = null
	) : stdClass {
		return $this->curlRequest('GET', '/monitor/webfilter/fortiguard-categories', NULL, ['include_unrated'=>$include_unrated, 'convert_unrated_id'=>$convert_unrated_id], NULL);
	}


	/**
	 * List all URLs in FortiGuard trusted URL database.
	 * Access Group: utmgrp.webfilter
	 * @route  GET /webfilter/trusted-urls
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllWebfilterTrustedUrls() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/webfilter/trusted-urls', NULL, NULL, NULL);
	}


	/**
	 * Download webproxy PAC file.
	 * Access Group: netgrp.cfg
	 * @route  GET /webproxy/pacfile/download
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllWebproxyPacfileDownload() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/webproxy/pacfile/download', NULL, NULL, NULL);
	}


	/**
	 * Upload webproxy PAC file.
	 * Access Group: netgrp.cfg
	 * @route  POST /webproxy/pacfile/upload
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addWebproxyPacfileUpload(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/webproxy/pacfile/upload', NULL, NULL, $body);
	}


	/**
	 * Retrieve a list of connected WiFi clients.
	 * Access Group: wifi
	 * @route  GET /wifi/client
	 * @param  $start Starting entry index.
	 * @param  $count Maximum number of entries to return.
	 * @param  $type Request type [all*|fail-login].
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllWifiClient(int $start = null, int $count = null, string $type = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/wifi/client', NULL, ['start'=>$start, 'count'=>$count, 'type'=>$type], NULL);
	}


	/**
	 * Disassociate a WiFi client from the FortiAP it's currently connected to. The client will need to reassociate with the same FortiAP or another to resume connectivity.
	 * Access Group: wifi
	 * @route  POST /wifi/client/disassociate
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addWifiClientDisassociate(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/wifi/client/disassociate', NULL, NULL, $body);
	}


	/**
	 * Retrieve a list of managed FortiAPs.
	 * Access Group: wifi
	 * @route  GET /wifi/managed_ap
	 * @param  $wtp_id Filter: single managed FortiAP by ID.
	 * @param  $incl_local Enable to include the local FortiWiFi device in the results.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllWifiManaged_ap(string $wtp_id = null, bool $incl_local = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/wifi/managed_ap', NULL, ['wtp_id'=>$wtp_id, 'incl_local'=>$incl_local], NULL);
	}


	/**
	 * Update administrative state for a given FortiAP (enable or disable authorization).
	 * Access Group: wifi
	 * @route  POST /wifi/managed_ap/set_status
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addWifiManaged_apSet_status(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/wifi/managed_ap/set_status', NULL, NULL, $body);
	}


	/**
	 * Retrieve a list of current and recommended firmware for FortiAPs in use.
	 * Access Group: wifi
	 * @route  GET /wifi/firmware
	 * @param  $timeout FortiGuard connection timeout (defaults to 2 seconds).
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllWifiFirmware(string $timeout = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/wifi/firmware', NULL, ['timeout'=>$timeout], NULL);
	}


	/**
	 * Download FortiAP firmware from FortiGuard to the FortiGate according to FortiAP image ID.
	 * Access Group: wifi
	 * @route  POST /wifi/firmware/download
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addWifiFirmwareDownload(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/wifi/firmware/download', NULL, NULL, $body);
	}


	/**
	 * Push FortiAP firmware to the given device.
	 * Access Group: wifi
	 * @route  POST /wifi/firmware/push
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addWifiFirmwarePush(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/wifi/firmware/push', NULL, NULL, $body);
	}


	/**
	 * Upload FortiAP firmware to the management FortiGate and then push to target FortiAPs.
	 * Access Group: wifi
	 * @route  POST /wifi/firmware/upload
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addWifiFirmwareUpload(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/wifi/firmware/upload', NULL, NULL, $body);
	}


	/**
	 * Restart a given FortiAP.
	 * Access Group: wifi
	 * @route  POST /wifi/managed_ap/restart
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addWifiManaged_apRestart(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/wifi/managed_ap/restart', NULL, NULL, $body);
	}


	/**
	 * Turn a managed FortiAP's LED blinking on or off.
	 * Access Group: wifi
	 * @route  POST /wifi/managed_ap/led-blink
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addWifiManaged_apLedBlink(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/wifi/managed_ap/led-blink', NULL, NULL, $body);
	}


	/**
	 * When FortiWiFi is in client mode, retrieve list of local WiFi networks.
	 * Access Group: wifi
	 * @route  GET /wifi/network/list
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllWifiNetworkList() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/wifi/network/list', NULL, NULL, NULL);
	}


	/**
	 * When FortiWiFi is in client mode, retrieve status of currently connected WiFi network, if any.
	 * Access Group: wifi
	 * @route  GET /wifi/network/status
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllWifiNetworkStatus() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/wifi/network/status', NULL, NULL, NULL);
	}


	/**
	 * When FortiWiFi is in client mode, connect to the specified network, if configured in the 'wifi' interface.
	 * Access Group: wifi
	 * @route  POST /wifi/network/connect
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addWifiNetworkConnect(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/wifi/network/connect', NULL, NULL, $body);
	}


	/**
	 * When FortiWiFi is in client mode, start a scan for local WiFi networks.
	 * Access Group: wifi
	 * @route  POST /wifi/network/scan
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addWifiNetworkScan() : stdClass
	{
		return $this->curlRequest('POST', '/monitor/wifi/network/scan', NULL, NULL, NULL);
	}


	/**
	 * Retrieve statistics for all managed FortiAPs.
	 * Access Group: wifi
	 * @route  GET /wifi/ap_status
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllWifiAp_status() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/wifi/ap_status', NULL, NULL, NULL);
	}


	/**
	 * Retrieve a list of interfering APs for one FortiAP radio.
	 * Access Group: wifi
	 * @route  GET /wifi/interfering_ap
	 * @param  $wtp FortiAP ID to query.
	 * @param  $radio Radio ID.
	 * @param  $start Starting entry index.
	 * @param  $count Maximum number of entries to return.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllWifiInterfering_ap(
		string $wtp = null,
		int $radio = null,
		int $start = null,
		int $count = null
	) : stdClass {
		return $this->curlRequest('GET', '/monitor/wifi/interfering_ap', NULL, ['wtp'=>$wtp, 'radio'=>$radio, 'start'=>$start, 'count'=>$count], NULL);
	}


	/**
	 * Retrieve presence analytics statistics.
	 * Access Group: wifi
	 * @route  GET /wifi/euclid
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllWifiEuclid() : stdClass
	{
		return $this->curlRequest('GET', '/monitor/wifi/euclid', NULL, NULL, NULL);
	}


	/**
	 * Reset presence analytics statistics.
	 * Access Group: wifi
	 * @route  POST /wifi/euclid/reset
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addWifiEuclidReset() : stdClass
	{
		return $this->curlRequest('POST', '/monitor/wifi/euclid/reset', NULL, NULL, NULL);
	}


	/**
	 * Retrieves a floorplan/region image from a configured FortiAP region.
	 * Access Group: wifi
	 * @route  GET /wifi/region-image
	 * @param  $region_name Region name to retrieve image from.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllWifiRegionImage(string $region_name) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/wifi/region-image', NULL, ['region_name'=>$region_name], NULL);
	}


	/**
	 * Saves a floorplan/region image to an existing region.
	 * Access Group: wifi
	 * @route  POST /wifi/region-image/upload
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addWifiRegionImageUpload(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/wifi/region-image/upload', NULL, NULL, $body);
	}


	/**
	 * Retrieve a list of detected rogue APs.
	 * Access Group: wifi
	 * @route  GET /wifi/rogue_ap
	 * @param  $start Starting entry index.
	 * @param  $count Maximum number of entries to return.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllWifiRogue_ap(int $start = null, int $count = null) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/wifi/rogue_ap', NULL, ['start'=>$start, 'count'=>$count], NULL);
	}


	/**
	 * Clear all detected rogue APs.
	 * Access Group: wifi
	 * @route  POST /wifi/rogue_ap/clear_all
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addWifiRogue_apClear_all() : stdClass
	{
		return $this->curlRequest('POST', '/monitor/wifi/rogue_ap/clear_all', NULL, NULL, NULL);
	}


	/**
	 * Mark detected APs as rogue APs.
	 * Access Group: wifi
	 * @route  POST /wifi/rogue_ap/set_status
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addWifiRogue_apSet_status(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/wifi/rogue_ap/set_status', NULL, NULL, $body);
	}


	/**
	 * Retrieve spectrum analysis information for a specific FortiAP.
	 * Access Group: wifi
	 * @route  GET /wifi/spectrum
	 * @param  $wtp_id FortiAP ID to query.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllWifiSpectrum(string $wtp_id) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/wifi/spectrum', NULL, ['wtp_id'=>$wtp_id], NULL);
	}


	/**
	 * Start spectrum analysis for a specific FortiAP for a duration of time.
	 * Access Group: wifi
	 * @route  POST /wifi/spectrum/start
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addWifiSpectrumStart(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/wifi/spectrum/start', NULL, NULL, $body);
	}


	/**
	 * Extend duration of an existing spectrum analysis for a specific FortiAP.
	 * Access Group: wifi
	 * @route  POST /wifi/spectrum/keep-alive
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addWifiSpectrumKeepAlive(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/wifi/spectrum/keep-alive', NULL, NULL, $body);
	}


	/**
	 * Stop spectrum analysis for a specific FortiAP.
	 * Access Group: wifi
	 * @route  POST /wifi/spectrum/stop
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addWifiSpectrumStop(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/wifi/spectrum/stop', NULL, NULL, $body);
	}


	/**
	 * Retrieve the VLAN probe results.
	 * Access Group: wifi
	 * @route  GET /wifi/vlan-probe
	 * @param  $ap_interface FortiAP interface to send the probe on.
	 * @param  $wtp FortiAP ID.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllWifiVlanProbe(int $ap_interface, string $wtp) : stdClass
	{
		return $this->curlRequest('GET', '/monitor/wifi/vlan-probe', NULL, ['ap_interface'=>$ap_interface, 'wtp'=>$wtp], NULL);
	}


	/**
	 * Start a VLAN probe.
	 * Access Group: wifi
	 * @route  POST /wifi/vlan-probe/start
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addWifiVlanProbeStart(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/wifi/vlan-probe/start', NULL, NULL, $body);
	}


	/**
	 * Stop a VLAN probe.
	 * Access Group: wifi
	 * @route  POST /wifi/vlan-probe/stop
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addWifiVlanProbeStop(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/wifi/vlan-probe/stop', NULL, NULL, $body);
	}


	/**
	 * Generate pre-shared keys for specific multi pre-shared key profile.
	 * Access Group: wifi
	 * @route  POST /wifi/ssid/generate-keys
	 * @param  $body Possible parameters to go in the body for the request.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addWifiSsidGenerateKeys(stdClass $body) : stdClass
	{
		return $this->curlRequest('POST', '/monitor/wifi/ssid/generate-keys', NULL, NULL, $body);
	}
}
