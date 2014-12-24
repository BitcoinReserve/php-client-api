<?php
/**
 * File for class WebShopWebServiceGet
 * @package WebShopWeb
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
/**
 * This class stands for WebShopWebServiceGet originally named Get
 * @package WebShopWeb
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
class WebShopWebServiceGet extends WebShopWebWsdlClass
{
    /**
     * Method to call the operation originally named getTicket
     * @uses WebShopWebWsdlClass::getSoapClient()
     * @uses WebShopWebWsdlClass::setResult()
     * @uses WebShopWebWsdlClass::saveLastError()
     * @param WebShopWebStructGetTicket $_webShopWebStructGetTicket
     * @return WebShopWebStructGetTicketResponse
     */
    public function getTicket(WebShopWebStructGetTicket $_webShopWebStructGetTicket)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getTicket($_webShopWebStructGetTicket));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see WebShopWebWsdlClass::getResult()
     * @return WebShopWebStructGetTicketResponse
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
