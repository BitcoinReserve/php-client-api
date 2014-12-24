<?php
/**
 * File for class AccountWebServiceGet
 * @package AccountWeb
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
/**
 * This class stands for AccountWebServiceGet originally named Get
 * @package AccountWeb
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
class AccountWebServiceGet extends AccountWebWsdlClass
{
    /**
     * Method to call the operation originally named getMemberAccounts
     * @uses AccountWebWsdlClass::getSoapClient()
     * @uses AccountWebWsdlClass::setResult()
     * @uses AccountWebWsdlClass::saveLastError()
     * @param AccountWebStructGetMemberAccounts $_accountWebStructGetMemberAccounts
     * @return AccountWebStructGetMemberAccountsResponse
     */
    public function getMemberAccounts()
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getMemberAccounts());
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see AccountWebWsdlClass::getResult()
     * @return AccountWebStructGetMemberAccountsResponse
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
