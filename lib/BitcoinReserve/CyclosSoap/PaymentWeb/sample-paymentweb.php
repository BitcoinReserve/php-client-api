<?php
/**
 * Test with PaymentWeb for 'https://testnet.bitcoinreserve.ch/services/payment?wsdl'
 * @package PaymentWeb
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
require_once dirname(__FILE__) . '/PaymentWebAutoload.php';
/**
 * Wsdl instanciation infos. By default, nothing has to be set.
 * If you wish to override the SoapClient's options, please refer to the sample below.
 * 
 * This is an associative array as:
 * - the key must be a PaymentWebWsdlClass constant beginning with WSDL_
 * - the value must be the corresponding key value
 * Each option matches the {@link http://www.php.net/manual/en/soapclient.soapclient.php} options
 * 
 * Here is below an example of how you can set the array:
 * $wsdl = array();
 * $wsdl[PaymentWebWsdlClass::WSDL_URL] = 'https://testnet.bitcoinreserve.ch/services/payment?wsdl';
 * $wsdl[PaymentWebWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
 * $wsdl[PaymentWebWsdlClass::WSDL_TRACE] = true;
 * $wsdl[PaymentWebWsdlClass::WSDL_LOGIN] = 'myLogin';
 * $wsdl[PaymentWebWsdlClass::WSDL_PASSWD] = '**********';
 * etc....
 * Then instantiate the Service class as: 
 * - $wsdlObject = new PaymentWebWsdlClass($wsdl);
 */
/**
 * Examples
 */


/*********************************
 * Example for PaymentWebServiceDo
 */
$paymentWebServiceDo = new PaymentWebServiceDo();
// sample call for PaymentWebServiceDo::doPayment()
if($paymentWebServiceDo->doPayment(new PaymentWebStructDoPayment(/*** update parameters list ***/)))
    print_r($paymentWebServiceDo->getResult());
else
    print_r($paymentWebServiceDo->getLastError());
// sample call for PaymentWebServiceDo::doBulkPayment()
if($paymentWebServiceDo->doBulkPayment(new PaymentWebStructDoBulkPayment(/*** update parameters list ***/)))
    print_r($paymentWebServiceDo->getResult());
else
    print_r($paymentWebServiceDo->getLastError());

/***************************************
 * Example for PaymentWebServiceSimulate
 */
$paymentWebServiceSimulate = new PaymentWebServiceSimulate();
// sample call for PaymentWebServiceSimulate::simulatePayment()
if($paymentWebServiceSimulate->simulatePayment(new PaymentWebStructSimulatePayment(/*** update parameters list ***/)))
    print_r($paymentWebServiceSimulate->getResult());
else
    print_r($paymentWebServiceSimulate->getLastError());
