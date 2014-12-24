<?php
/**
 * File for class WebShopWebServiceTicker
 * @package WebShopWeb
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
/**
 * This class stands for WebShopWebServiceTicker originally named Ticker
 * @package WebShopWeb
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
class WebShopWebServiceTicker extends WebShopWebWsdlClass
{
    /**
     * Method to call the operation originally named ticker
     * @uses WebShopWebWsdlClass::getSoapClient()
     * @uses WebShopWebWsdlClass::setResult()
     * @uses WebShopWebWsdlClass::saveLastError()
     * @param WebShopWebStructTicker $_webShopWebStructTicker
     * @return WebShopWebStructTickerResponse
     */
    public function ticker()
    {
        try
        {
            return $this->setResult(self::getSoapClient()->ticker());
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see WebShopWebWsdlClass::getResult()
     * @return WebShopWebStructTickerResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
