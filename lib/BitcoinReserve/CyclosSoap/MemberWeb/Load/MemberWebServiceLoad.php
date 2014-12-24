<?php
/**
 * File for class MemberWebServiceLoad
 * @package MemberWeb
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
/**
 * This class stands for MemberWebServiceLoad originally named Load
 * @package MemberWeb
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
class MemberWebServiceLoad extends MemberWebWsdlClass
{
    /**
     * Method to call the operation originally named loadByDisplayName
     * @uses MemberWebWsdlClass::getSoapClient()
     * @uses MemberWebWsdlClass::setResult()
     * @uses MemberWebWsdlClass::saveLastError()
     * @param MemberWebStructLoadByDisplayName $_memberWebStructLoadByDisplayName
     * @return MemberWebStructLoadByDisplayNameResponse
     */
    public function loadByDisplayName(MemberWebStructLoadByDisplayName $_memberWebStructLoadByDisplayName)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->loadByDisplayName($_memberWebStructLoadByDisplayName));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named loadByAccountNumber
     * @uses MemberWebWsdlClass::getSoapClient()
     * @uses MemberWebWsdlClass::setResult()
     * @uses MemberWebWsdlClass::saveLastError()
     * @param MemberWebStructLoadByAccountNumber $_memberWebStructLoadByAccountNumber
     * @return MemberWebStructLoadByAccountNumberResponse
     */
    public function loadByAccountNumber(MemberWebStructLoadByAccountNumber $_memberWebStructLoadByAccountNumber)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->loadByAccountNumber($_memberWebStructLoadByAccountNumber));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see MemberWebWsdlClass::getResult()
     * @return MemberWebStructLoadByAccountNumberResponse|MemberWebStructLoadByDisplayNameResponse
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
