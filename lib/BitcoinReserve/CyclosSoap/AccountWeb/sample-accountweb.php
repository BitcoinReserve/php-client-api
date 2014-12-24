<?php
/**
 * Test with AccountWeb for 'https://testnet.bitcoinreserve.ch/services/account?wsdl'
 * @package AccountWeb
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
ini_set('memory_limit','512M');
ini_set('display_errors',true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/AccountWebAutoload.php';
/**
 * Wsdl instanciation infos. By default, nothing has to be set.
 * If you wish to override the SoapClient's options, please refer to the sample below.
 * 
 * This is an associative array as:
 * - the key must be a AccountWebWsdlClass constant beginning with WSDL_
 * - the value must be the corresponding key value
 * Each option matches the {@link http://www.php.net/manual/en/soapclient.soapclient.php} options
 * 
 * Here is below an example of how you can set the array:
 * $wsdl = array();
 * $wsdl[AccountWebWsdlClass::WSDL_URL] = 'https://testnet.bitcoinreserve.ch/services/account?wsdl';
 * $wsdl[AccountWebWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
 * $wsdl[AccountWebWsdlClass::WSDL_TRACE] = true;
 * $wsdl[AccountWebWsdlClass::WSDL_LOGIN] = 'myLogin';
 * $wsdl[AccountWebWsdlClass::WSDL_PASSWD] = '**********';
 * etc....
 * Then instantiate the Service class as: 
 * - $wsdlObject = new AccountWebWsdlClass($wsdl);
 */
/**
 * Examples
 */


/*************************************
 * Example for AccountWebServiceSearch
 */
$accountWebServiceSearch = new AccountWebServiceSearch();
// sample call for AccountWebServiceSearch::searchAccountHistory()
if($accountWebServiceSearch->searchAccountHistory(new AccountWebStructSearchAccountHistory(/*** update parameters list ***/)))
    print_r($accountWebServiceSearch->getResult());
else
    print_r($accountWebServiceSearch->getLastError());

/***********************************
 * Example for AccountWebServiceLoad
 */
$accountWebServiceLoad = new AccountWebServiceLoad();
// sample call for AccountWebServiceLoad::loadTransfer()
if($accountWebServiceLoad->loadTransfer(new AccountWebStructLoadTransfer(/*** update parameters list ***/)))
    print_r($accountWebServiceLoad->getResult());
else
    print_r($accountWebServiceLoad->getLastError());

/**********************************
 * Example for AccountWebServiceGet
 */
$accountWebServiceGet = new AccountWebServiceGet();
// sample call for AccountWebServiceGet::getMemberAccounts()
if($accountWebServiceGet->getMemberAccounts())
    print_r($accountWebServiceGet->getResult());
else
    print_r($accountWebServiceGet->getLastError());
