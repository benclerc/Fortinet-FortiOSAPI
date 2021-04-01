<?php

/**
 * PHP library used for interacting with Fortigate firewall (FortiOS) configuration API (Log).
 * @author Benjamin Clerc <contact@benjamin-clerc.com>
 * @copyright Copyright (c) 2021, Benjamin Clerc.
 * @license MIT
 * @link https://github.com/benclerc/Fortinet-FortiOSAPI
 */

namespace Fortinet\FortiOSAPI;

use stdClass;

/**
 * FortiOS API Log
 * @link https://fndn.fortinet.net/ Fortinet developer ressource center.
 */
class FortiOSAPILog extends \Fortinet\FortiOSAPI
{
	/**
	 * Return a description of the quarantined virus file.
	 * @route  GET /disk/virus/archive
	 * @param  $mkey checksum column from the virus log.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllDiskVirusArchive(int $mkey = null) : stdClass
	{
		return $this->curlRequest('GET', '/log/disk/virus/archive', NULL, ['mkey'=>$mkey], NULL);
	}


	/**
	 * Return a list of archived items for the desired type. :type can be app-ctrl or ips
	 * @route  GET /disk/{type}/archive
	 * @param  $type Type of log that can be retrieved
	 * @param  $mkey Archive identifier.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getDiskArchive(string $type, int $mkey = null) : stdClass
	{
		return $this->curlRequest('GET', '/log/disk/archive', $type, ['mkey'=>$mkey], NULL);
	}


	/**
	 * Download an archived file.
	 * @route  GET /disk/{type}/archive-download
	 * @param  $type Type of log that can be retrieved
	 * @param  $mkey Archive identifier.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getDiskArchiveDownload(string $type, int $mkey = null) : stdClass
	{
		return $this->curlRequest('GET', '/log/disk/archive-download', $type, ['mkey'=>$mkey], NULL);
	}


	/**
	 * Log data for the given log type in raw format.
	 * @route  GET /disk/{type}/raw
	 * @param  $type Type of log that can be retrieved
	 * @param  $start Row number for the first row to return.
	 * @param  $rows Number of rows to return.
	 * @param  $session_id Provide a session_id to continue getting data for that request.
	 * @param  $serial_no Retrieve log from the specified device.
	 * @param  $is_ha_member Is the specified device an HA member.
	 * @param  $filter Filtering multiple key/value pairs
	 * Operator     |   Description
	 * ==     |   Case insensitive match with pattern.
	 * !=     |    Does not match with pattern (case insensitive).
	 * =@     |    Pattern found in object value (case insensitive).
	 * !@     |    ﻿Pattern not﻿ found in object value (case insensitive).
	 * <=     |    Value must be less than or equal to ﻿pattern﻿.
	 * <     |    Value must be less than pattern﻿.
	 * .>=    |    Value must be greater than or equal to ﻿pattern﻿.
	 * .>     |    Value must be greater than ﻿pattern﻿.
	 * Logical OR using ,    |    Separate filters using commas ','
	 * Logical AND using &   |    Filter strings can be combined to create logical AND queries by including multiple filters in the request.
	 * Combining AND and OR    |    You can combine AND and OR filters together to create more complex filters.
	 *
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getDiskRaw(
		string $type,
		int $start = null,
		int $rows = null,
		int $session_id = null,
		string $serial_no = null,
		string $is_ha_member = null,
		array $filter = null
	) : stdClass {
		return $this->curlRequest('GET', '/log/disk/raw', $type, ['start'=>$start, 'rows'=>$rows, 'session_id'=>$session_id, 'serial_no'=>$serial_no, 'is_ha_member'=>$is_ha_member, 'filter'=>$filter], NULL);
	}


	/**
	 * Log data for the given log type in raw format.
	 * @route  GET /disk/traffic/{subtype}/raw
	 * @param  $start Row number for the first row to return.
	 * @param  $rows Number of rows to return.
	 * @param  $session_id Provide a session_id to continue getting data for that request.
	 * @param  $serial_no Retrieve log from the specified device.
	 * @param  $is_ha_member Is the specified device an HA member.
	 * @param  $filter Filtering multiple key/value pairs
	 * Operator     |   Description
	 * ==     |   Case insensitive match with pattern.
	 * !=     |    Does not match with pattern (case insensitive).
	 * =@     |    Pattern found in object value (case insensitive).
	 * !@     |    ﻿Pattern not﻿ found in object value (case insensitive).
	 * <=     |    Value must be less than or equal to ﻿pattern﻿.
	 * <     |    Value must be less than pattern﻿.
	 * .>=    |    Value must be greater than or equal to ﻿pattern﻿.
	 * .>     |    Value must be greater than ﻿pattern﻿.
	 * Logical OR using ,    |    Separate filters using commas ','
	 * Logical AND using &   |    Filter strings can be combined to create logical AND queries by including multiple filters in the request.
	 * Combining AND and OR    |    You can combine AND and OR filters together to create more complex filters.
	 *
	 * @param  $subtype Select the subtype for the Traffic log category
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getDiskTrafficRaw(
		int $start = null,
		int $rows = null,
		int $session_id = null,
		string $serial_no = null,
		string $is_ha_member = null,
		array $filter = null,
		string $subtype
	) : stdClass {
		return $this->curlRequest('GET', '/log/disk/traffic/raw', $subtype, ['start'=>$start, 'rows'=>$rows, 'session_id'=>$session_id, 'serial_no'=>$serial_no, 'is_ha_member'=>$is_ha_member, 'filter'=>$filter], NULL);
	}


	/**
	 * Log data for the given log type in raw format.
	 * @route  GET /disk/event/{subtype}/raw
	 * @param  $start Row number for the first row to return.
	 * @param  $rows Number of rows to return.
	 * @param  $session_id Provide a session_id to continue getting data for that request.
	 * @param  $serial_no Retrieve log from the specified device.
	 * @param  $is_ha_member Is the specified device an HA member.
	 * @param  $filter Filtering multiple key/value pairs
	 * Operator     |   Description
	 * ==     |   Case insensitive match with pattern.
	 * !=     |    Does not match with pattern (case insensitive).
	 * =@     |    Pattern found in object value (case insensitive).
	 * !@     |    ﻿Pattern not﻿ found in object value (case insensitive).
	 * <=     |    Value must be less than or equal to ﻿pattern﻿.
	 * <     |    Value must be less than pattern﻿.
	 * .>=    |    Value must be greater than or equal to ﻿pattern﻿.
	 * .>     |    Value must be greater than ﻿pattern﻿.
	 * Logical OR using ,    |    Separate filters using commas ','
	 * Logical AND using &   |    Filter strings can be combined to create logical AND queries by including multiple filters in the request.
	 * Combining AND and OR    |    You can combine AND and OR filters together to create more complex filters.
	 *
	 * @param  $subtype Select the subtype for the Event log category
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getDiskEventRaw(
		int $start = null,
		int $rows = null,
		int $session_id = null,
		string $serial_no = null,
		string $is_ha_member = null,
		array $filter = null,
		string $subtype
	) : stdClass {
		return $this->curlRequest('GET', '/log/disk/event/raw', $subtype, ['start'=>$start, 'rows'=>$rows, 'session_id'=>$session_id, 'serial_no'=>$serial_no, 'is_ha_member'=>$is_ha_member, 'filter'=>$filter], NULL);
	}


	/**
	 * Log data for the given log type (and subtype). Append '/raw' to retrieve in raw format.
	 * @route  GET /disk/{type}
	 * @param  $type Type of log that can be retrieved
	 * @param  $start Row number for the first row to return.
	 * @param  $rows Number of rows to return.
	 * @param  $session_id Provide a session_id to continue getting data for that request.
	 * @param  $serial_no Retrieve log from the specified device.
	 * @param  $is_ha_member Is the specified device an HA member.
	 * @param  $filter Filtering multiple key/value pairs
	 * Operator     |   Description
	 * ==     |   Case insensitive match with pattern.
	 * !=     |    Does not match with pattern (case insensitive).
	 * =@     |    Pattern found in object value (case insensitive).
	 * !@     |    ﻿Pattern not﻿ found in object value (case insensitive).
	 * <=     |    Value must be less than or equal to ﻿pattern﻿.
	 * <     |    Value must be less than pattern﻿.
	 * .>=    |    Value must be greater than or equal to ﻿pattern﻿.
	 * .>     |    Value must be greater than ﻿pattern﻿.
	 * Logical OR using ,    |    Separate filters using commas ','
	 * Logical AND using &   |    Filter strings can be combined to create logical AND queries by including multiple filters in the request.
	 * Combining AND and OR    |    You can combine AND and OR filters together to create more complex filters.
	 *
	 * @param  $extra Flag(s) for extra data to be included [reverse_lookup|country_id].
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getDisk(
		string $type,
		int $start = null,
		int $rows = null,
		int $session_id = null,
		string $serial_no = null,
		string $is_ha_member = null,
		array $filter = null,
		string $extra = null
	) : stdClass {
		return $this->curlRequest('GET', '/log/disk', $type, ['start'=>$start, 'rows'=>$rows, 'session_id'=>$session_id, 'serial_no'=>$serial_no, 'is_ha_member'=>$is_ha_member, 'filter'=>$filter, 'extra'=>$extra], NULL);
	}


	/**
	 * Log data for the given log type (and subtype). Append '/raw' to retrieve in raw format.
	 * @route  GET /disk/traffic/{subtype}
	 * @param  $start Row number for the first row to return.
	 * @param  $rows Number of rows to return.
	 * @param  $session_id Provide a session_id to continue getting data for that request.
	 * @param  $serial_no Retrieve log from the specified device.
	 * @param  $is_ha_member Is the specified device an HA member.
	 * @param  $filter Filtering multiple key/value pairs
	 * Operator     |   Description
	 * ==     |   Case insensitive match with pattern.
	 * !=     |    Does not match with pattern (case insensitive).
	 * =@     |    Pattern found in object value (case insensitive).
	 * !@     |    ﻿Pattern not﻿ found in object value (case insensitive).
	 * <=     |    Value must be less than or equal to ﻿pattern﻿.
	 * <     |    Value must be less than pattern﻿.
	 * .>=    |    Value must be greater than or equal to ﻿pattern﻿.
	 * .>     |    Value must be greater than ﻿pattern﻿.
	 * Logical OR using ,    |    Separate filters using commas ','
	 * Logical AND using &   |    Filter strings can be combined to create logical AND queries by including multiple filters in the request.
	 * Combining AND and OR    |    You can combine AND and OR filters together to create more complex filters.
	 *
	 * @param  $extra Flag(s) for extra data to be included [reverse_lookup|country_id].
	 * @param  $subtype Select the subtype for the Traffic log category
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getDiskTraffic(
		int $start = null,
		int $rows = null,
		int $session_id = null,
		string $serial_no = null,
		string $is_ha_member = null,
		array $filter = null,
		string $extra = null,
		string $subtype
	) : stdClass {
		return $this->curlRequest('GET', '/log/disk/traffic', $subtype, ['start'=>$start, 'rows'=>$rows, 'session_id'=>$session_id, 'serial_no'=>$serial_no, 'is_ha_member'=>$is_ha_member, 'filter'=>$filter, 'extra'=>$extra], NULL);
	}


	/**
	 * Log data for the given log type (and subtype). Append '/raw' to retrieve in raw format.
	 * @route  GET /disk/event/{subtype}
	 * @param  $start Row number for the first row to return.
	 * @param  $rows Number of rows to return.
	 * @param  $session_id Provide a session_id to continue getting data for that request.
	 * @param  $serial_no Retrieve log from the specified device.
	 * @param  $is_ha_member Is the specified device an HA member.
	 * @param  $filter Filtering multiple key/value pairs
	 * Operator     |   Description
	 * ==     |   Case insensitive match with pattern.
	 * !=     |    Does not match with pattern (case insensitive).
	 * =@     |    Pattern found in object value (case insensitive).
	 * !@     |    ﻿Pattern not﻿ found in object value (case insensitive).
	 * <=     |    Value must be less than or equal to ﻿pattern﻿.
	 * <     |    Value must be less than pattern﻿.
	 * .>=    |    Value must be greater than or equal to ﻿pattern﻿.
	 * .>     |    Value must be greater than ﻿pattern﻿.
	 * Logical OR using ,    |    Separate filters using commas ','
	 * Logical AND using &   |    Filter strings can be combined to create logical AND queries by including multiple filters in the request.
	 * Combining AND and OR    |    You can combine AND and OR filters together to create more complex filters.
	 *
	 * @param  $extra Flag(s) for extra data to be included [reverse_lookup|country_id].
	 * @param  $subtype Select the subtype for the Event log category
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getDiskEvent(
		int $start = null,
		int $rows = null,
		int $session_id = null,
		string $serial_no = null,
		string $is_ha_member = null,
		array $filter = null,
		string $extra = null,
		string $subtype
	) : stdClass {
		return $this->curlRequest('GET', '/log/disk/event', $subtype, ['start'=>$start, 'rows'=>$rows, 'session_id'=>$session_id, 'serial_no'=>$serial_no, 'is_ha_member'=>$is_ha_member, 'filter'=>$filter, 'extra'=>$extra], NULL);
	}


	/**
	 * Return a description of the quarantined virus file.
	 * @route  GET /fortianalyzer/virus/archive
	 * @param  $mkey checksum column from the virus log.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllFortianalyzerVirusArchive(int $mkey = null) : stdClass
	{
		return $this->curlRequest('GET', '/log/fortianalyzer/virus/archive', NULL, ['mkey'=>$mkey], NULL);
	}


	/**
	 * Return a list of archived items for the desired type. :type can be app-ctrl or ips
	 * @route  GET /fortianalyzer/{type}/archive
	 * @param  $type Type of log that can be retrieved
	 * @param  $mkey Archive identifier.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getFortianalyzerArchive(string $type, int $mkey = null) : stdClass
	{
		return $this->curlRequest('GET', '/log/fortianalyzer/archive', $type, ['mkey'=>$mkey], NULL);
	}


	/**
	 * Download an archived file.
	 * @route  GET /fortianalyzer/{type}/archive-download
	 * @param  $type Type of log that can be retrieved
	 * @param  $mkey Archive identifier.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getFortianalyzerArchiveDownload(string $type, int $mkey = null) : stdClass
	{
		return $this->curlRequest('GET', '/log/fortianalyzer/archive-download', $type, ['mkey'=>$mkey], NULL);
	}


	/**
	 * Log data for the given log type in raw format.
	 * @route  GET /fortianalyzer/{type}/raw
	 * @param  $type Type of log that can be retrieved
	 * @param  $start Row number for the first row to return.
	 * @param  $rows Number of rows to return.
	 * @param  $session_id Provide a session_id to continue getting data for that request.
	 * @param  $serial_no Retrieve log from the specified device.
	 * @param  $is_ha_member Is the specified device an HA member.
	 * @param  $filter Filtering multiple key/value pairs
	 * Operator     |   Description
	 * ==     |   Case insensitive match with pattern.
	 * !=     |    Does not match with pattern (case insensitive).
	 * =@     |    Pattern found in object value (case insensitive).
	 * !@     |    ﻿Pattern not﻿ found in object value (case insensitive).
	 * <=     |    Value must be less than or equal to ﻿pattern﻿.
	 * <     |    Value must be less than pattern﻿.
	 * .>=    |    Value must be greater than or equal to ﻿pattern﻿.
	 * .>     |    Value must be greater than ﻿pattern﻿.
	 * Logical OR using ,    |    Separate filters using commas ','
	 * Logical AND using &   |    Filter strings can be combined to create logical AND queries by including multiple filters in the request.
	 * Combining AND and OR    |    You can combine AND and OR filters together to create more complex filters.
	 *
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getFortianalyzerRaw(
		string $type,
		int $start = null,
		int $rows = null,
		int $session_id = null,
		string $serial_no = null,
		string $is_ha_member = null,
		array $filter = null
	) : stdClass {
		return $this->curlRequest('GET', '/log/fortianalyzer/raw', $type, ['start'=>$start, 'rows'=>$rows, 'session_id'=>$session_id, 'serial_no'=>$serial_no, 'is_ha_member'=>$is_ha_member, 'filter'=>$filter], NULL);
	}


	/**
	 * Log data for the given log type in raw format.
	 * @route  GET /fortianalyzer/traffic/{subtype}/raw
	 * @param  $start Row number for the first row to return.
	 * @param  $rows Number of rows to return.
	 * @param  $session_id Provide a session_id to continue getting data for that request.
	 * @param  $serial_no Retrieve log from the specified device.
	 * @param  $is_ha_member Is the specified device an HA member.
	 * @param  $filter Filtering multiple key/value pairs
	 * Operator     |   Description
	 * ==     |   Case insensitive match with pattern.
	 * !=     |    Does not match with pattern (case insensitive).
	 * =@     |    Pattern found in object value (case insensitive).
	 * !@     |    ﻿Pattern not﻿ found in object value (case insensitive).
	 * <=     |    Value must be less than or equal to ﻿pattern﻿.
	 * <     |    Value must be less than pattern﻿.
	 * .>=    |    Value must be greater than or equal to ﻿pattern﻿.
	 * .>     |    Value must be greater than ﻿pattern﻿.
	 * Logical OR using ,    |    Separate filters using commas ','
	 * Logical AND using &   |    Filter strings can be combined to create logical AND queries by including multiple filters in the request.
	 * Combining AND and OR    |    You can combine AND and OR filters together to create more complex filters.
	 *
	 * @param  $subtype Select the subtype for the Traffic log category
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getFortianalyzerTrafficRaw(
		int $start = null,
		int $rows = null,
		int $session_id = null,
		string $serial_no = null,
		string $is_ha_member = null,
		array $filter = null,
		string $subtype
	) : stdClass {
		return $this->curlRequest('GET', '/log/fortianalyzer/traffic/raw', $subtype, ['start'=>$start, 'rows'=>$rows, 'session_id'=>$session_id, 'serial_no'=>$serial_no, 'is_ha_member'=>$is_ha_member, 'filter'=>$filter], NULL);
	}


	/**
	 * Log data for the given log type in raw format.
	 * @route  GET /fortianalyzer/event/{subtype}/raw
	 * @param  $start Row number for the first row to return.
	 * @param  $rows Number of rows to return.
	 * @param  $session_id Provide a session_id to continue getting data for that request.
	 * @param  $serial_no Retrieve log from the specified device.
	 * @param  $is_ha_member Is the specified device an HA member.
	 * @param  $filter Filtering multiple key/value pairs
	 * Operator     |   Description
	 * ==     |   Case insensitive match with pattern.
	 * !=     |    Does not match with pattern (case insensitive).
	 * =@     |    Pattern found in object value (case insensitive).
	 * !@     |    ﻿Pattern not﻿ found in object value (case insensitive).
	 * <=     |    Value must be less than or equal to ﻿pattern﻿.
	 * <     |    Value must be less than pattern﻿.
	 * .>=    |    Value must be greater than or equal to ﻿pattern﻿.
	 * .>     |    Value must be greater than ﻿pattern﻿.
	 * Logical OR using ,    |    Separate filters using commas ','
	 * Logical AND using &   |    Filter strings can be combined to create logical AND queries by including multiple filters in the request.
	 * Combining AND and OR    |    You can combine AND and OR filters together to create more complex filters.
	 *
	 * @param  $subtype Select the subtype for the Event log category
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getFortianalyzerEventRaw(
		int $start = null,
		int $rows = null,
		int $session_id = null,
		string $serial_no = null,
		string $is_ha_member = null,
		array $filter = null,
		string $subtype
	) : stdClass {
		return $this->curlRequest('GET', '/log/fortianalyzer/event/raw', $subtype, ['start'=>$start, 'rows'=>$rows, 'session_id'=>$session_id, 'serial_no'=>$serial_no, 'is_ha_member'=>$is_ha_member, 'filter'=>$filter], NULL);
	}


	/**
	 * Log data for the given log type (and subtype). Append '/raw' to retrieve in raw format.
	 * @route  GET /fortianalyzer/{type}
	 * @param  $type Type of log that can be retrieved
	 * @param  $start Row number for the first row to return.
	 * @param  $rows Number of rows to return.
	 * @param  $session_id Provide a session_id to continue getting data for that request.
	 * @param  $serial_no Retrieve log from the specified device.
	 * @param  $is_ha_member Is the specified device an HA member.
	 * @param  $filter Filtering multiple key/value pairs
	 * Operator     |   Description
	 * ==     |   Case insensitive match with pattern.
	 * !=     |    Does not match with pattern (case insensitive).
	 * =@     |    Pattern found in object value (case insensitive).
	 * !@     |    ﻿Pattern not﻿ found in object value (case insensitive).
	 * <=     |    Value must be less than or equal to ﻿pattern﻿.
	 * <     |    Value must be less than pattern﻿.
	 * .>=    |    Value must be greater than or equal to ﻿pattern﻿.
	 * .>     |    Value must be greater than ﻿pattern﻿.
	 * Logical OR using ,    |    Separate filters using commas ','
	 * Logical AND using &   |    Filter strings can be combined to create logical AND queries by including multiple filters in the request.
	 * Combining AND and OR    |    You can combine AND and OR filters together to create more complex filters.
	 *
	 * @param  $extra Flag(s) for extra data to be included [reverse_lookup|country_id].
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getFortianalyzer(
		string $type,
		int $start = null,
		int $rows = null,
		int $session_id = null,
		string $serial_no = null,
		string $is_ha_member = null,
		array $filter = null,
		string $extra = null
	) : stdClass {
		return $this->curlRequest('GET', '/log/fortianalyzer', $type, ['start'=>$start, 'rows'=>$rows, 'session_id'=>$session_id, 'serial_no'=>$serial_no, 'is_ha_member'=>$is_ha_member, 'filter'=>$filter, 'extra'=>$extra], NULL);
	}


	/**
	 * Log data for the given log type (and subtype). Append '/raw' to retrieve in raw format.
	 * @route  GET /fortianalyzer/traffic/{subtype}
	 * @param  $start Row number for the first row to return.
	 * @param  $rows Number of rows to return.
	 * @param  $session_id Provide a session_id to continue getting data for that request.
	 * @param  $serial_no Retrieve log from the specified device.
	 * @param  $is_ha_member Is the specified device an HA member.
	 * @param  $filter Filtering multiple key/value pairs
	 * Operator     |   Description
	 * ==     |   Case insensitive match with pattern.
	 * !=     |    Does not match with pattern (case insensitive).
	 * =@     |    Pattern found in object value (case insensitive).
	 * !@     |    ﻿Pattern not﻿ found in object value (case insensitive).
	 * <=     |    Value must be less than or equal to ﻿pattern﻿.
	 * <     |    Value must be less than pattern﻿.
	 * .>=    |    Value must be greater than or equal to ﻿pattern﻿.
	 * .>     |    Value must be greater than ﻿pattern﻿.
	 * Logical OR using ,    |    Separate filters using commas ','
	 * Logical AND using &   |    Filter strings can be combined to create logical AND queries by including multiple filters in the request.
	 * Combining AND and OR    |    You can combine AND and OR filters together to create more complex filters.
	 *
	 * @param  $extra Flag(s) for extra data to be included [reverse_lookup|country_id].
	 * @param  $subtype Select the subtype for the Traffic log category
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getFortianalyzerTraffic(
		int $start = null,
		int $rows = null,
		int $session_id = null,
		string $serial_no = null,
		string $is_ha_member = null,
		array $filter = null,
		string $extra = null,
		string $subtype
	) : stdClass {
		return $this->curlRequest('GET', '/log/fortianalyzer/traffic', $subtype, ['start'=>$start, 'rows'=>$rows, 'session_id'=>$session_id, 'serial_no'=>$serial_no, 'is_ha_member'=>$is_ha_member, 'filter'=>$filter, 'extra'=>$extra], NULL);
	}


	/**
	 * Log data for the given log type (and subtype). Append '/raw' to retrieve in raw format.
	 * @route  GET /fortianalyzer/event/{subtype}
	 * @param  $start Row number for the first row to return.
	 * @param  $rows Number of rows to return.
	 * @param  $session_id Provide a session_id to continue getting data for that request.
	 * @param  $serial_no Retrieve log from the specified device.
	 * @param  $is_ha_member Is the specified device an HA member.
	 * @param  $filter Filtering multiple key/value pairs
	 * Operator     |   Description
	 * ==     |   Case insensitive match with pattern.
	 * !=     |    Does not match with pattern (case insensitive).
	 * =@     |    Pattern found in object value (case insensitive).
	 * !@     |    ﻿Pattern not﻿ found in object value (case insensitive).
	 * <=     |    Value must be less than or equal to ﻿pattern﻿.
	 * <     |    Value must be less than pattern﻿.
	 * .>=    |    Value must be greater than or equal to ﻿pattern﻿.
	 * .>     |    Value must be greater than ﻿pattern﻿.
	 * Logical OR using ,    |    Separate filters using commas ','
	 * Logical AND using &   |    Filter strings can be combined to create logical AND queries by including multiple filters in the request.
	 * Combining AND and OR    |    You can combine AND and OR filters together to create more complex filters.
	 *
	 * @param  $extra Flag(s) for extra data to be included [reverse_lookup|country_id].
	 * @param  $subtype Select the subtype for the Event log category
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getFortianalyzerEvent(
		int $start = null,
		int $rows = null,
		int $session_id = null,
		string $serial_no = null,
		string $is_ha_member = null,
		array $filter = null,
		string $extra = null,
		string $subtype
	) : stdClass {
		return $this->curlRequest('GET', '/log/fortianalyzer/event', $subtype, ['start'=>$start, 'rows'=>$rows, 'session_id'=>$session_id, 'serial_no'=>$serial_no, 'is_ha_member'=>$is_ha_member, 'filter'=>$filter, 'extra'=>$extra], NULL);
	}


	/**
	 * Return a description of the quarantined virus file.
	 * @route  GET /forticloud/virus/archive
	 * @param  $mkey checksum column from the virus log.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllForticloudVirusArchive(int $mkey = null) : stdClass
	{
		return $this->curlRequest('GET', '/log/forticloud/virus/archive', NULL, ['mkey'=>$mkey], NULL);
	}


	/**
	 * Return a list of archived items for the desired type. :type can be app-ctrl or ips
	 * @route  GET /forticloud/{type}/archive
	 * @param  $type Type of log that can be retrieved
	 * @param  $mkey Archive identifier.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getForticloudArchive(string $type, int $mkey = null) : stdClass
	{
		return $this->curlRequest('GET', '/log/forticloud/archive', $type, ['mkey'=>$mkey], NULL);
	}


	/**
	 * Download an archived file.
	 * @route  GET /forticloud/{type}/archive-download
	 * @param  $type Type of log that can be retrieved
	 * @param  $mkey Archive identifier.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getForticloudArchiveDownload(string $type, int $mkey = null) : stdClass
	{
		return $this->curlRequest('GET', '/log/forticloud/archive-download', $type, ['mkey'=>$mkey], NULL);
	}


	/**
	 * Log data for the given log type in raw format.
	 * @route  GET /forticloud/{type}/raw
	 * @param  $type Type of log that can be retrieved
	 * @param  $start Row number for the first row to return.
	 * @param  $rows Number of rows to return.
	 * @param  $session_id Provide a session_id to continue getting data for that request.
	 * @param  $serial_no Retrieve log from the specified device.
	 * @param  $is_ha_member Is the specified device an HA member.
	 * @param  $filter Filtering multiple key/value pairs
	 * Operator     |   Description
	 * ==     |   Case insensitive match with pattern.
	 * !=     |    Does not match with pattern (case insensitive).
	 * =@     |    Pattern found in object value (case insensitive).
	 * !@     |    ﻿Pattern not﻿ found in object value (case insensitive).
	 * <=     |    Value must be less than or equal to ﻿pattern﻿.
	 * <     |    Value must be less than pattern﻿.
	 * .>=    |    Value must be greater than or equal to ﻿pattern﻿.
	 * .>     |    Value must be greater than ﻿pattern﻿.
	 * Logical OR using ,    |    Separate filters using commas ','
	 * Logical AND using &   |    Filter strings can be combined to create logical AND queries by including multiple filters in the request.
	 * Combining AND and OR    |    You can combine AND and OR filters together to create more complex filters.
	 *
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getForticloudRaw(
		string $type,
		int $start = null,
		int $rows = null,
		int $session_id = null,
		string $serial_no = null,
		string $is_ha_member = null,
		array $filter = null
	) : stdClass {
		return $this->curlRequest('GET', '/log/forticloud/raw', $type, ['start'=>$start, 'rows'=>$rows, 'session_id'=>$session_id, 'serial_no'=>$serial_no, 'is_ha_member'=>$is_ha_member, 'filter'=>$filter], NULL);
	}


	/**
	 * Log data for the given log type in raw format.
	 * @route  GET /forticloud/traffic/{subtype}/raw
	 * @param  $start Row number for the first row to return.
	 * @param  $rows Number of rows to return.
	 * @param  $session_id Provide a session_id to continue getting data for that request.
	 * @param  $serial_no Retrieve log from the specified device.
	 * @param  $is_ha_member Is the specified device an HA member.
	 * @param  $filter Filtering multiple key/value pairs
	 * Operator     |   Description
	 * ==     |   Case insensitive match with pattern.
	 * !=     |    Does not match with pattern (case insensitive).
	 * =@     |    Pattern found in object value (case insensitive).
	 * !@     |    ﻿Pattern not﻿ found in object value (case insensitive).
	 * <=     |    Value must be less than or equal to ﻿pattern﻿.
	 * <     |    Value must be less than pattern﻿.
	 * .>=    |    Value must be greater than or equal to ﻿pattern﻿.
	 * .>     |    Value must be greater than ﻿pattern﻿.
	 * Logical OR using ,    |    Separate filters using commas ','
	 * Logical AND using &   |    Filter strings can be combined to create logical AND queries by including multiple filters in the request.
	 * Combining AND and OR    |    You can combine AND and OR filters together to create more complex filters.
	 *
	 * @param  $subtype Select the subtype for the Traffic log category
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getForticloudTrafficRaw(
		int $start = null,
		int $rows = null,
		int $session_id = null,
		string $serial_no = null,
		string $is_ha_member = null,
		array $filter = null,
		string $subtype
	) : stdClass {
		return $this->curlRequest('GET', '/log/forticloud/traffic/raw', $subtype, ['start'=>$start, 'rows'=>$rows, 'session_id'=>$session_id, 'serial_no'=>$serial_no, 'is_ha_member'=>$is_ha_member, 'filter'=>$filter], NULL);
	}


	/**
	 * Log data for the given log type in raw format.
	 * @route  GET /forticloud/event/{subtype}/raw
	 * @param  $start Row number for the first row to return.
	 * @param  $rows Number of rows to return.
	 * @param  $session_id Provide a session_id to continue getting data for that request.
	 * @param  $serial_no Retrieve log from the specified device.
	 * @param  $is_ha_member Is the specified device an HA member.
	 * @param  $filter Filtering multiple key/value pairs
	 * Operator     |   Description
	 * ==     |   Case insensitive match with pattern.
	 * !=     |    Does not match with pattern (case insensitive).
	 * =@     |    Pattern found in object value (case insensitive).
	 * !@     |    ﻿Pattern not﻿ found in object value (case insensitive).
	 * <=     |    Value must be less than or equal to ﻿pattern﻿.
	 * <     |    Value must be less than pattern﻿.
	 * .>=    |    Value must be greater than or equal to ﻿pattern﻿.
	 * .>     |    Value must be greater than ﻿pattern﻿.
	 * Logical OR using ,    |    Separate filters using commas ','
	 * Logical AND using &   |    Filter strings can be combined to create logical AND queries by including multiple filters in the request.
	 * Combining AND and OR    |    You can combine AND and OR filters together to create more complex filters.
	 *
	 * @param  $subtype Select the subtype for the Event log category
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getForticloudEventRaw(
		int $start = null,
		int $rows = null,
		int $session_id = null,
		string $serial_no = null,
		string $is_ha_member = null,
		array $filter = null,
		string $subtype
	) : stdClass {
		return $this->curlRequest('GET', '/log/forticloud/event/raw', $subtype, ['start'=>$start, 'rows'=>$rows, 'session_id'=>$session_id, 'serial_no'=>$serial_no, 'is_ha_member'=>$is_ha_member, 'filter'=>$filter], NULL);
	}


	/**
	 * Log data for the given log type (and subtype). Append '/raw' to retrieve in raw format.
	 * @route  GET /forticloud/{type}
	 * @param  $type Type of log that can be retrieved
	 * @param  $start Row number for the first row to return.
	 * @param  $rows Number of rows to return.
	 * @param  $session_id Provide a session_id to continue getting data for that request.
	 * @param  $serial_no Retrieve log from the specified device.
	 * @param  $is_ha_member Is the specified device an HA member.
	 * @param  $filter Filtering multiple key/value pairs
	 * Operator     |   Description
	 * ==     |   Case insensitive match with pattern.
	 * !=     |    Does not match with pattern (case insensitive).
	 * =@     |    Pattern found in object value (case insensitive).
	 * !@     |    ﻿Pattern not﻿ found in object value (case insensitive).
	 * <=     |    Value must be less than or equal to ﻿pattern﻿.
	 * <     |    Value must be less than pattern﻿.
	 * .>=    |    Value must be greater than or equal to ﻿pattern﻿.
	 * .>     |    Value must be greater than ﻿pattern﻿.
	 * Logical OR using ,    |    Separate filters using commas ','
	 * Logical AND using &   |    Filter strings can be combined to create logical AND queries by including multiple filters in the request.
	 * Combining AND and OR    |    You can combine AND and OR filters together to create more complex filters.
	 *
	 * @param  $extra Flag(s) for extra data to be included [reverse_lookup|country_id].
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getForticloud(
		string $type,
		int $start = null,
		int $rows = null,
		int $session_id = null,
		string $serial_no = null,
		string $is_ha_member = null,
		array $filter = null,
		string $extra = null
	) : stdClass {
		return $this->curlRequest('GET', '/log/forticloud', $type, ['start'=>$start, 'rows'=>$rows, 'session_id'=>$session_id, 'serial_no'=>$serial_no, 'is_ha_member'=>$is_ha_member, 'filter'=>$filter, 'extra'=>$extra], NULL);
	}


	/**
	 * Log data for the given log type (and subtype). Append '/raw' to retrieve in raw format.
	 * @route  GET /forticloud/traffic/{subtype}
	 * @param  $start Row number for the first row to return.
	 * @param  $rows Number of rows to return.
	 * @param  $session_id Provide a session_id to continue getting data for that request.
	 * @param  $serial_no Retrieve log from the specified device.
	 * @param  $is_ha_member Is the specified device an HA member.
	 * @param  $filter Filtering multiple key/value pairs
	 * Operator     |   Description
	 * ==     |   Case insensitive match with pattern.
	 * !=     |    Does not match with pattern (case insensitive).
	 * =@     |    Pattern found in object value (case insensitive).
	 * !@     |    ﻿Pattern not﻿ found in object value (case insensitive).
	 * <=     |    Value must be less than or equal to ﻿pattern﻿.
	 * <     |    Value must be less than pattern﻿.
	 * .>=    |    Value must be greater than or equal to ﻿pattern﻿.
	 * .>     |    Value must be greater than ﻿pattern﻿.
	 * Logical OR using ,    |    Separate filters using commas ','
	 * Logical AND using &   |    Filter strings can be combined to create logical AND queries by including multiple filters in the request.
	 * Combining AND and OR    |    You can combine AND and OR filters together to create more complex filters.
	 *
	 * @param  $extra Flag(s) for extra data to be included [reverse_lookup|country_id].
	 * @param  $subtype Select the subtype for the Traffic log category
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getForticloudTraffic(
		int $start = null,
		int $rows = null,
		int $session_id = null,
		string $serial_no = null,
		string $is_ha_member = null,
		array $filter = null,
		string $extra = null,
		string $subtype
	) : stdClass {
		return $this->curlRequest('GET', '/log/forticloud/traffic', $subtype, ['start'=>$start, 'rows'=>$rows, 'session_id'=>$session_id, 'serial_no'=>$serial_no, 'is_ha_member'=>$is_ha_member, 'filter'=>$filter, 'extra'=>$extra], NULL);
	}


	/**
	 * Log data for the given log type (and subtype). Append '/raw' to retrieve in raw format.
	 * @route  GET /forticloud/event/{subtype}
	 * @param  $start Row number for the first row to return.
	 * @param  $rows Number of rows to return.
	 * @param  $session_id Provide a session_id to continue getting data for that request.
	 * @param  $serial_no Retrieve log from the specified device.
	 * @param  $is_ha_member Is the specified device an HA member.
	 * @param  $filter Filtering multiple key/value pairs
	 * Operator     |   Description
	 * ==     |   Case insensitive match with pattern.
	 * !=     |    Does not match with pattern (case insensitive).
	 * =@     |    Pattern found in object value (case insensitive).
	 * !@     |    ﻿Pattern not﻿ found in object value (case insensitive).
	 * <=     |    Value must be less than or equal to ﻿pattern﻿.
	 * <     |    Value must be less than pattern﻿.
	 * .>=    |    Value must be greater than or equal to ﻿pattern﻿.
	 * .>     |    Value must be greater than ﻿pattern﻿.
	 * Logical OR using ,    |    Separate filters using commas ','
	 * Logical AND using &   |    Filter strings can be combined to create logical AND queries by including multiple filters in the request.
	 * Combining AND and OR    |    You can combine AND and OR filters together to create more complex filters.
	 *
	 * @param  $extra Flag(s) for extra data to be included [reverse_lookup|country_id].
	 * @param  $subtype Select the subtype for the Event log category
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getForticloudEvent(
		int $start = null,
		int $rows = null,
		int $session_id = null,
		string $serial_no = null,
		string $is_ha_member = null,
		array $filter = null,
		string $extra = null,
		string $subtype
	) : stdClass {
		return $this->curlRequest('GET', '/log/forticloud/event', $subtype, ['start'=>$start, 'rows'=>$rows, 'session_id'=>$session_id, 'serial_no'=>$serial_no, 'is_ha_member'=>$is_ha_member, 'filter'=>$filter, 'extra'=>$extra], NULL);
	}


	/**
	 * Return a description of the quarantined virus file.
	 * @route  GET /memory/virus/archive
	 * @param  $mkey checksum column from the virus log.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getAllMemoryVirusArchive(int $mkey = null) : stdClass
	{
		return $this->curlRequest('GET', '/log/memory/virus/archive', NULL, ['mkey'=>$mkey], NULL);
	}


	/**
	 * Return a list of archived items for the desired type. :type can be app-ctrl or ips
	 * @route  GET /memory/{type}/archive
	 * @param  $type Type of log that can be retrieved
	 * @param  $mkey Archive identifier.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getMemoryArchive(string $type, int $mkey = null) : stdClass
	{
		return $this->curlRequest('GET', '/log/memory/archive', $type, ['mkey'=>$mkey], NULL);
	}


	/**
	 * Download an archived file.
	 * @route  GET /memory/{type}/archive-download
	 * @param  $type Type of log that can be retrieved
	 * @param  $mkey Archive identifier.
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getMemoryArchiveDownload(string $type, int $mkey = null) : stdClass
	{
		return $this->curlRequest('GET', '/log/memory/archive-download', $type, ['mkey'=>$mkey], NULL);
	}


	/**
	 * Log data for the given log type in raw format.
	 * @route  GET /memory/{type}/raw
	 * @param  $type Type of log that can be retrieved
	 * @param  $start Row number for the first row to return.
	 * @param  $rows Number of rows to return.
	 * @param  $session_id Provide a session_id to continue getting data for that request.
	 * @param  $serial_no Retrieve log from the specified device.
	 * @param  $is_ha_member Is the specified device an HA member.
	 * @param  $filter Filtering multiple key/value pairs
	 * Operator     |   Description
	 * ==     |   Case insensitive match with pattern.
	 * !=     |    Does not match with pattern (case insensitive).
	 * =@     |    Pattern found in object value (case insensitive).
	 * !@     |    ﻿Pattern not﻿ found in object value (case insensitive).
	 * <=     |    Value must be less than or equal to ﻿pattern﻿.
	 * <     |    Value must be less than pattern﻿.
	 * .>=    |    Value must be greater than or equal to ﻿pattern﻿.
	 * .>     |    Value must be greater than ﻿pattern﻿.
	 * Logical OR using ,    |    Separate filters using commas ','
	 * Logical AND using &   |    Filter strings can be combined to create logical AND queries by including multiple filters in the request.
	 * Combining AND and OR    |    You can combine AND and OR filters together to create more complex filters.
	 *
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getMemoryRaw(
		string $type,
		int $start = null,
		int $rows = null,
		int $session_id = null,
		string $serial_no = null,
		string $is_ha_member = null,
		array $filter = null
	) : stdClass {
		return $this->curlRequest('GET', '/log/memory/raw', $type, ['start'=>$start, 'rows'=>$rows, 'session_id'=>$session_id, 'serial_no'=>$serial_no, 'is_ha_member'=>$is_ha_member, 'filter'=>$filter], NULL);
	}


	/**
	 * Log data for the given log type in raw format.
	 * @route  GET /memory/traffic/{subtype}/raw
	 * @param  $start Row number for the first row to return.
	 * @param  $rows Number of rows to return.
	 * @param  $session_id Provide a session_id to continue getting data for that request.
	 * @param  $serial_no Retrieve log from the specified device.
	 * @param  $is_ha_member Is the specified device an HA member.
	 * @param  $filter Filtering multiple key/value pairs
	 * Operator     |   Description
	 * ==     |   Case insensitive match with pattern.
	 * !=     |    Does not match with pattern (case insensitive).
	 * =@     |    Pattern found in object value (case insensitive).
	 * !@     |    ﻿Pattern not﻿ found in object value (case insensitive).
	 * <=     |    Value must be less than or equal to ﻿pattern﻿.
	 * <     |    Value must be less than pattern﻿.
	 * .>=    |    Value must be greater than or equal to ﻿pattern﻿.
	 * .>     |    Value must be greater than ﻿pattern﻿.
	 * Logical OR using ,    |    Separate filters using commas ','
	 * Logical AND using &   |    Filter strings can be combined to create logical AND queries by including multiple filters in the request.
	 * Combining AND and OR    |    You can combine AND and OR filters together to create more complex filters.
	 *
	 * @param  $subtype Select the subtype for the Traffic log category
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getMemoryTrafficRaw(
		int $start = null,
		int $rows = null,
		int $session_id = null,
		string $serial_no = null,
		string $is_ha_member = null,
		array $filter = null,
		string $subtype
	) : stdClass {
		return $this->curlRequest('GET', '/log/memory/traffic/raw', $subtype, ['start'=>$start, 'rows'=>$rows, 'session_id'=>$session_id, 'serial_no'=>$serial_no, 'is_ha_member'=>$is_ha_member, 'filter'=>$filter], NULL);
	}


	/**
	 * Log data for the given log type in raw format.
	 * @route  GET /memory/event/{subtype}/raw
	 * @param  $start Row number for the first row to return.
	 * @param  $rows Number of rows to return.
	 * @param  $session_id Provide a session_id to continue getting data for that request.
	 * @param  $serial_no Retrieve log from the specified device.
	 * @param  $is_ha_member Is the specified device an HA member.
	 * @param  $filter Filtering multiple key/value pairs
	 * Operator     |   Description
	 * ==     |   Case insensitive match with pattern.
	 * !=     |    Does not match with pattern (case insensitive).
	 * =@     |    Pattern found in object value (case insensitive).
	 * !@     |    ﻿Pattern not﻿ found in object value (case insensitive).
	 * <=     |    Value must be less than or equal to ﻿pattern﻿.
	 * <     |    Value must be less than pattern﻿.
	 * .>=    |    Value must be greater than or equal to ﻿pattern﻿.
	 * .>     |    Value must be greater than ﻿pattern﻿.
	 * Logical OR using ,    |    Separate filters using commas ','
	 * Logical AND using &   |    Filter strings can be combined to create logical AND queries by including multiple filters in the request.
	 * Combining AND and OR    |    You can combine AND and OR filters together to create more complex filters.
	 *
	 * @param  $subtype Select the subtype for the Event log category
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getMemoryEventRaw(
		int $start = null,
		int $rows = null,
		int $session_id = null,
		string $serial_no = null,
		string $is_ha_member = null,
		array $filter = null,
		string $subtype
	) : stdClass {
		return $this->curlRequest('GET', '/log/memory/event/raw', $subtype, ['start'=>$start, 'rows'=>$rows, 'session_id'=>$session_id, 'serial_no'=>$serial_no, 'is_ha_member'=>$is_ha_member, 'filter'=>$filter], NULL);
	}


	/**
	 * Log data for the given log type (and subtype). Append '/raw' to retrieve in raw format.
	 * @route  GET /memory/{type}
	 * @param  $type Type of log that can be retrieved
	 * @param  $start Row number for the first row to return.
	 * @param  $rows Number of rows to return.
	 * @param  $session_id Provide a session_id to continue getting data for that request.
	 * @param  $serial_no Retrieve log from the specified device.
	 * @param  $is_ha_member Is the specified device an HA member.
	 * @param  $filter Filtering multiple key/value pairs
	 * Operator     |   Description
	 * ==     |   Case insensitive match with pattern.
	 * !=     |    Does not match with pattern (case insensitive).
	 * =@     |    Pattern found in object value (case insensitive).
	 * !@     |    ﻿Pattern not﻿ found in object value (case insensitive).
	 * <=     |    Value must be less than or equal to ﻿pattern﻿.
	 * <     |    Value must be less than pattern﻿.
	 * .>=    |    Value must be greater than or equal to ﻿pattern﻿.
	 * .>     |    Value must be greater than ﻿pattern﻿.
	 * Logical OR using ,    |    Separate filters using commas ','
	 * Logical AND using &   |    Filter strings can be combined to create logical AND queries by including multiple filters in the request.
	 * Combining AND and OR    |    You can combine AND and OR filters together to create more complex filters.
	 *
	 * @param  $extra Flag(s) for extra data to be included [reverse_lookup|country_id].
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getMemory(
		string $type,
		int $start = null,
		int $rows = null,
		int $session_id = null,
		string $serial_no = null,
		string $is_ha_member = null,
		array $filter = null,
		string $extra = null
	) : stdClass {
		return $this->curlRequest('GET', '/log/memory', $type, ['start'=>$start, 'rows'=>$rows, 'session_id'=>$session_id, 'serial_no'=>$serial_no, 'is_ha_member'=>$is_ha_member, 'filter'=>$filter, 'extra'=>$extra], NULL);
	}


	/**
	 * Log data for the given log type (and subtype). Append '/raw' to retrieve in raw format.
	 * @route  GET /memory/traffic/{subtype}
	 * @param  $start Row number for the first row to return.
	 * @param  $rows Number of rows to return.
	 * @param  $session_id Provide a session_id to continue getting data for that request.
	 * @param  $serial_no Retrieve log from the specified device.
	 * @param  $is_ha_member Is the specified device an HA member.
	 * @param  $filter Filtering multiple key/value pairs
	 * Operator     |   Description
	 * ==     |   Case insensitive match with pattern.
	 * !=     |    Does not match with pattern (case insensitive).
	 * =@     |    Pattern found in object value (case insensitive).
	 * !@     |    ﻿Pattern not﻿ found in object value (case insensitive).
	 * <=     |    Value must be less than or equal to ﻿pattern﻿.
	 * <     |    Value must be less than pattern﻿.
	 * .>=    |    Value must be greater than or equal to ﻿pattern﻿.
	 * .>     |    Value must be greater than ﻿pattern﻿.
	 * Logical OR using ,    |    Separate filters using commas ','
	 * Logical AND using &   |    Filter strings can be combined to create logical AND queries by including multiple filters in the request.
	 * Combining AND and OR    |    You can combine AND and OR filters together to create more complex filters.
	 *
	 * @param  $extra Flag(s) for extra data to be included [reverse_lookup|country_id].
	 * @param  $subtype Select the subtype for the Traffic log category
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getMemoryTraffic(
		int $start = null,
		int $rows = null,
		int $session_id = null,
		string $serial_no = null,
		string $is_ha_member = null,
		array $filter = null,
		string $extra = null,
		string $subtype
	) : stdClass {
		return $this->curlRequest('GET', '/log/memory/traffic', $subtype, ['start'=>$start, 'rows'=>$rows, 'session_id'=>$session_id, 'serial_no'=>$serial_no, 'is_ha_member'=>$is_ha_member, 'filter'=>$filter, 'extra'=>$extra], NULL);
	}


	/**
	 * Log data for the given log type (and subtype). Append '/raw' to retrieve in raw format.
	 * @route  GET /memory/event/{subtype}
	 * @param  $start Row number for the first row to return.
	 * @param  $rows Number of rows to return.
	 * @param  $session_id Provide a session_id to continue getting data for that request.
	 * @param  $serial_no Retrieve log from the specified device.
	 * @param  $is_ha_member Is the specified device an HA member.
	 * @param  $filter Filtering multiple key/value pairs
	 * Operator     |   Description
	 * ==     |   Case insensitive match with pattern.
	 * !=     |    Does not match with pattern (case insensitive).
	 * =@     |    Pattern found in object value (case insensitive).
	 * !@     |    ﻿Pattern not﻿ found in object value (case insensitive).
	 * <=     |    Value must be less than or equal to ﻿pattern﻿.
	 * <     |    Value must be less than pattern﻿.
	 * .>=    |    Value must be greater than or equal to ﻿pattern﻿.
	 * .>     |    Value must be greater than ﻿pattern﻿.
	 * Logical OR using ,    |    Separate filters using commas ','
	 * Logical AND using &   |    Filter strings can be combined to create logical AND queries by including multiple filters in the request.
	 * Combining AND and OR    |    You can combine AND and OR filters together to create more complex filters.
	 *
	 * @param  $extra Flag(s) for extra data to be included [reverse_lookup|country_id].
	 * @param  $subtype Select the subtype for the Event log category
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function getMemoryEvent(
		int $start = null,
		int $rows = null,
		int $session_id = null,
		string $serial_no = null,
		string $is_ha_member = null,
		array $filter = null,
		string $extra = null,
		string $subtype
	) : stdClass {
		return $this->curlRequest('GET', '/log/memory/event', $subtype, ['start'=>$start, 'rows'=>$rows, 'session_id'=>$session_id, 'serial_no'=>$serial_no, 'is_ha_member'=>$is_ha_member, 'filter'=>$filter, 'extra'=>$extra], NULL);
	}


	/**
	 * Abort a running log search session.
	 * @route  POST /search/abort/{session_id}
	 * @param  $session_id Provide the session ID for the request
	 * @return stdClass Return the firewall's response as an object.
	 */
	public function addSearchAbort(int $session_id) : stdClass
	{
		return $this->curlRequest('POST', '/log/search/abort', $session_id, NULL, NULL);
	}
}
