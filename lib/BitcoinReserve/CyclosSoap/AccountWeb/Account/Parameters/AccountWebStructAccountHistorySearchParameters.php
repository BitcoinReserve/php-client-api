<?php
/**
 * File for class AccountWebStructAccountHistorySearchParameters
 * @package AccountWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
/**
 * This class stands for AccountWebStructAccountHistorySearchParameters originally named accountHistorySearchParameters
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/account?wsdl}
 * @package AccountWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
class AccountWebStructAccountHistorySearchParameters extends AccountWebStructSearchParameters
{
    /**
     * The accountTypeId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $accountTypeId;
    /**
     * The currency
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $currency;
    /**
     * The beginDate
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var dateTime
     */
    public $beginDate;
    /**
     * The endDate
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var dateTime
     */
    public $endDate;
    /**
     * The reverseOrder
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $reverseOrder;
    /**
     * The transactionPwd
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $transactionPwd;
    /**
     * Constructor method for accountHistorySearchParameters
     * @see parent::__construct()
     * @param long $_accountTypeId
     * @param string $_currency
     * @param dateTime $_beginDate
     * @param dateTime $_endDate
     * @param boolean $_reverseOrder
     * @param string $_transactionPwd
     * @return AccountWebStructAccountHistorySearchParameters
     */
    public function __construct($_accountTypeId = NULL,$_currency = NULL,$_beginDate = NULL,$_endDate = NULL,$_reverseOrder = NULL,$_transactionPwd = NULL)
    {
        AccountWebWsdlClass::__construct(array('accountTypeId'=>$_accountTypeId,'currency'=>$_currency,'beginDate'=>$_beginDate,'endDate'=>$_endDate,'reverseOrder'=>$_reverseOrder,'transactionPwd'=>$_transactionPwd),false);
    }
    /**
     * Get accountTypeId value
     * @return long|null
     */
    public function getAccountTypeId()
    {
        return $this->accountTypeId;
    }
    /**
     * Set accountTypeId value
     * @param long $_accountTypeId the accountTypeId
     * @return long
     */
    public function setAccountTypeId($_accountTypeId)
    {
        return ($this->accountTypeId = $_accountTypeId);
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $_currency the currency
     * @return string
     */
    public function setCurrency($_currency)
    {
        return ($this->currency = $_currency);
    }
    /**
     * Get beginDate value
     * @return dateTime|null
     */
    public function getBeginDate()
    {
        return $this->beginDate;
    }
    /**
     * Set beginDate value
     * @param dateTime $_beginDate the beginDate
     * @return dateTime
     */
    public function setBeginDate($_beginDate)
    {
        return ($this->beginDate = $_beginDate);
    }
    /**
     * Get endDate value
     * @return dateTime|null
     */
    public function getEndDate()
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param dateTime $_endDate the endDate
     * @return dateTime
     */
    public function setEndDate($_endDate)
    {
        return ($this->endDate = $_endDate);
    }
    /**
     * Get reverseOrder value
     * @return boolean|null
     */
    public function getReverseOrder()
    {
        return $this->reverseOrder;
    }
    /**
     * Set reverseOrder value
     * @param boolean $_reverseOrder the reverseOrder
     * @return boolean
     */
    public function setReverseOrder($_reverseOrder)
    {
        return ($this->reverseOrder = $_reverseOrder);
    }
    /**
     * Get transactionPwd value
     * @return string|null
     */
    public function getTransactionPwd()
    {
        return $this->transactionPwd;
    }
    /**
     * Set transactionPwd value
     * @param string $_transactionPwd the transactionPwd
     * @return string
     */
    public function setTransactionPwd($_transactionPwd)
    {
        return ($this->transactionPwd = $_transactionPwd);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AccountWebWsdlClass::__set_state()
     * @uses AccountWebWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AccountWebStructAccountHistorySearchParameters
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
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
