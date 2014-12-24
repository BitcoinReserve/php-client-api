<?php
/**
 * Test with WebShopWeb for 'https://testnet.bitcoinreserve.ch/services/webshop?wsdl'
 * @package WebShopWeb
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
require_once dirname(__FILE__) . '/WebShopWebAutoload.php';
/**
 * Wsdl instanciation infos. By default, nothing has to be set.
 * If you wish to override the SoapClient's options, please refer to the sample below.
 * 
 * This is an associative array as:
 * - the key must be a WebShopWebWsdlClass constant beginning with WSDL_
 * - the value must be the corresponding key value
 * Each option matches the {@link http://www.php.net/manual/en/soapclient.soapclient.php} options
 * 
 * Here is below an example of how you can set the array:
 * $wsdl = array();
 * $wsdl[WebShopWebWsdlClass::WSDL_URL] = 'https://testnet.bitcoinreserve.ch/services/webshop?wsdl';
 * $wsdl[WebShopWebWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
 * $wsdl[WebShopWebWsdlClass::WSDL_TRACE] = true;
 * $wsdl[WebShopWebWsdlClass::WSDL_LOGIN] = 'myLogin';
 * $wsdl[WebShopWebWsdlClass::WSDL_PASSWD] = '**********';
 * etc....
 * Then instantiate the Service class as: 
 * - $wsdlObject = new WebShopWebWsdlClass($wsdl);
 */
/**
 * Examples
 */


/*************************************
 * Example for WebShopWebServiceExpire
 */
$webShopWebServiceExpire = new WebShopWebServiceExpire();
// sample call for WebShopWebServiceExpire::expireTicket()
if($webShopWebServiceExpire->expireTicket(new WebShopWebStructExpireTicket(/*** update parameters list ***/)))
    print_r($webShopWebServiceExpire->getResult());
else
    print_r($webShopWebServiceExpire->getLastError());

/***************************************
 * Example for WebShopWebServiceGenerate
 */
$webShopWebServiceGenerate = new WebShopWebServiceGenerate();
// sample call for WebShopWebServiceGenerate::generateTicket()
if($webShopWebServiceGenerate->generateTicket(new WebShopWebStructGenerateTicket(/*** update parameters list ***/)))
    print_r($webShopWebServiceGenerate->getResult());
else
    print_r($webShopWebServiceGenerate->getLastError());

/*************************************
 * Example for WebShopWebServiceTicker
 */
$webShopWebServiceTicker = new WebShopWebServiceTicker();
// sample call for WebShopWebServiceTicker::ticker()
if($webShopWebServiceTicker->ticker())
    print_r($webShopWebServiceTicker->getResult());
else
    print_r($webShopWebServiceTicker->getLastError());

/**********************************
 * Example for WebShopWebServiceGet
 */
$webShopWebServiceGet = new WebShopWebServiceGet();
// sample call for WebShopWebServiceGet::getTicket()
if($webShopWebServiceGet->getTicket(new WebShopWebStructGetTicket(/*** update parameters list ***/)))
    print_r($webShopWebServiceGet->getResult());
else
    print_r($webShopWebServiceGet->getLastError());
