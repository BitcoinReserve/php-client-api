<?php
/**
 * File for class WebShopWebServiceExpire
 * @package WebShopWeb
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
/**
 * This class stands for WebShopWebServiceExpire originally named Expire
 * @package WebShopWeb
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
class WebShopWebServiceExpire extends WebShopWebWsdlClass
{
    /**
     * Method to call the operation originally named expireTicket
     * @uses WebShopWebWsdlClass::getSoapClient()
     * @uses WebShopWebWsdlClass::setResult()
     * @uses WebShopWebWsdlClass::saveLastError()
     * @param WebShopWebStructExpireTicket $_webShopWebStructExpireTicket
     * @return WebShopWebStructExpireTicketResponse
     */
    public function expireTicket(WebShopWebStructExpireTicket $_webShopWebStructExpireTicket)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->expireTicket($_webShopWebStructExpireTicket));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see WebShopWebWsdlClass::getResult()
     * @return WebShopWebStructExpireTicketResponse
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
