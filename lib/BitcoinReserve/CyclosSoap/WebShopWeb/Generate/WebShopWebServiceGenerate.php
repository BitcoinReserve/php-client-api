<?php
/**
 * File for class WebShopWebServiceGenerate
 * @package WebShopWeb
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
/**
 * This class stands for WebShopWebServiceGenerate originally named Generate
 * @package WebShopWeb
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
class WebShopWebServiceGenerate extends WebShopWebWsdlClass
{
    /**
     * Method to call the operation originally named generateTicket
     * @uses WebShopWebWsdlClass::getSoapClient()
     * @uses WebShopWebWsdlClass::setResult()
     * @uses WebShopWebWsdlClass::saveLastError()
     * @param WebShopWebStructGenerateTicket $_webShopWebStructGenerateTicket
     * @return WebShopWebStructGenerateTicketResponse
     */
    public function generateTicket(WebShopWebStructGenerateTicket $_webShopWebStructGenerateTicket)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->generateTicket($_webShopWebStructGenerateTicket));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see WebShopWebWsdlClass::getResult()
     * @return WebShopWebStructGenerateTicketResponse
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
