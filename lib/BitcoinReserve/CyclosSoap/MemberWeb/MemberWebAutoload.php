<?php
/**
 * File to load generated classes once at once time
 * @package MemberWeb
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
/**
 * Includes for all generated classes files
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
require_once dirname(__FILE__) . '/MemberWebWsdlClass.php';
require_once dirname(__FILE__) . '/Entity/VO/MemberWebStructEntityVO.php';
require_once dirname(__FILE__) . '/Load/Number/MemberWebStructLoadByAccountNumber.php';
require_once dirname(__FILE__) . '/Load/Response/MemberWebStructLoadByAccountNumberResponse.php';
require_once dirname(__FILE__) . '/Member/MemberWebStructMember.php';
require_once dirname(__FILE__) . '/Load/Response/MemberWebStructLoadByDisplayNameResponse.php';
require_once dirname(__FILE__) . '/Load/Name/MemberWebStructLoadByDisplayName.php';
require_once dirname(__FILE__) . '/Load/MemberWebServiceLoad.php';
require_once dirname(__FILE__) . '/MemberWebClassMap.php';
