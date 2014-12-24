<?php
/**
 * File for class AccountWebServiceLoad
 * @package AccountWeb
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
/**
 * This class stands for AccountWebServiceLoad originally named Load
 * @package AccountWeb
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
class AccountWebServiceLoad extends AccountWebWsdlClass
{
    /**
     * Method to call the operation originally named loadTransfer
     * @uses AccountWebWsdlClass::getSoapClient()
     * @uses AccountWebWsdlClass::setResult()
     * @uses AccountWebWsdlClass::saveLastError()
     * @param AccountWebStructLoadTransfer $_accountWebStructLoadTransfer
     * @return AccountWebStructLoadTransferResponse
     */
    public function loadTransfer(AccountWebStructLoadTransfer $_accountWebStructLoadTransfer)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->loadTransfer($_accountWebStructLoadTransfer));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see AccountWebWsdlClass::getResult()
     * @return AccountWebStructLoadTransferResponse
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
