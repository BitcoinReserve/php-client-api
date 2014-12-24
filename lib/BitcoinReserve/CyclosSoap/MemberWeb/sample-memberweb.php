<?php
/**
 * Test with MemberWeb for 'https://testnet.bitcoinreserve.ch/services/members?wsdl'
 * @package MemberWeb
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
ini_set('memory_limit','512M');
ini_set('display_errors',true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/MemberWebAutoload.php';
/**
 * Wsdl instanciation infos. By default, nothing has to be set.
 * If you wish to override the SoapClient's options, please refer to the sample below.
 * 
 * This is an associative array as:
 * - the key must be a MemberWebWsdlClass constant beginning with WSDL_
 * - the value must be the corresponding key value
 * Each option matches the {@link http://www.php.net/manual/en/soapclient.soapclient.php} options
 * 
 * Here is below an example of how you can set the array:
 * $wsdl = array();
 * $wsdl[MemberWebWsdlClass::WSDL_URL] = 'https://testnet.bitcoinreserve.ch/services/members?wsdl';
 * $wsdl[MemberWebWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
 * $wsdl[MemberWebWsdlClass::WSDL_TRACE] = true;
 * $wsdl[MemberWebWsdlClass::WSDL_LOGIN] = 'myLogin';
 * $wsdl[MemberWebWsdlClass::WSDL_PASSWD] = '**********';
 * etc....
 * Then instantiate the Service class as: 
 * - $wsdlObject = new MemberWebWsdlClass($wsdl);
 */
/**
 * Examples
 */


/**********************************
 * Example for MemberWebServiceLoad
 */
$memberWebServiceLoad = new MemberWebServiceLoad();
// sample call for MemberWebServiceLoad::loadByDisplayName()
if($memberWebServiceLoad->loadByDisplayName(new MemberWebStructLoadByDisplayName(/*** update parameters list ***/)))
    print_r($memberWebServiceLoad->getResult());
else
    print_r($memberWebServiceLoad->getLastError());
// sample call for MemberWebServiceLoad::loadByAccountNumber()
if($memberWebServiceLoad->loadByAccountNumber(new MemberWebStructLoadByAccountNumber(/*** update parameters list ***/)))
    print_r($memberWebServiceLoad->getResult());
else
    print_r($memberWebServiceLoad->getLastError());
