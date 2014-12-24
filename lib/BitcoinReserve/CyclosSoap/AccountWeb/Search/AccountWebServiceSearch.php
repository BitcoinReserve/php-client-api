<?php
/**
 * File for class AccountWebServiceSearch
 * @package AccountWeb
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
/**
 * This class stands for AccountWebServiceSearch originally named Search
 * @package AccountWeb
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
class AccountWebServiceSearch extends AccountWebWsdlClass
{
    /**
     * Method to call the operation originally named searchAccountHistory
     * @uses AccountWebWsdlClass::getSoapClient()
     * @uses AccountWebWsdlClass::setResult()
     * @uses AccountWebWsdlClass::saveLastError()
     * @param AccountWebStructSearchAccountHistory $_accountWebStructSearchAccountHistory
     * @return AccountWebStructSearchAccountHistoryResponse
     */
    public function searchAccountHistory(AccountWebStructSearchAccountHistory $_accountWebStructSearchAccountHistory)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->searchAccountHistory($_accountWebStructSearchAccountHistory));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see AccountWebWsdlClass::getResult()
     * @return AccountWebStructSearchAccountHistoryResponse
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
