<?php
/**
 * File for class PaymentWebStructPaymentParameters
 * @package PaymentWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
/**
 * This class stands for PaymentWebStructPaymentParameters originally named paymentParameters
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/payment?wsdl}
 * @package PaymentWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
class PaymentWebStructPaymentParameters extends PaymentWebStructAbstractPaymentParameters
{
    /**
     * The transferTypeId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $transferTypeId;
    /**
     * The transactionPwd
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $transactionPwd;
    /**
     * The customValues
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var PaymentWebStructFieldValue
     */
    public $customValues;
    /**
     * The fromMemberFieldsToReturn
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $fromMemberFieldsToReturn;
    /**
     * The toMemberFieldsToReturn
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $toMemberFieldsToReturn;
    /**
     * The returnStatus
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $returnStatus;
    /**
     * Constructor method for paymentParameters
     * @see parent::__construct()
     * @param long $_transferTypeId
     * @param string $_transactionPwd
     * @param PaymentWebStructFieldValue $_customValues
     * @param string $_fromMemberFieldsToReturn
     * @param string $_toMemberFieldsToReturn
     * @param boolean $_returnStatus
     * @return PaymentWebStructPaymentParameters
     */
    public function __construct($_transferTypeId = NULL,$_transactionPwd = NULL,$_customValues = NULL,$_fromMemberFieldsToReturn = NULL,$_toMemberFieldsToReturn = NULL,$_returnStatus = NULL)
    {
        PaymentWebWsdlClass::__construct(array('transferTypeId'=>$_transferTypeId,'transactionPwd'=>$_transactionPwd,'customValues'=>$_customValues,'fromMemberFieldsToReturn'=>$_fromMemberFieldsToReturn,'toMemberFieldsToReturn'=>$_toMemberFieldsToReturn,'returnStatus'=>$_returnStatus),false);
    }
    /**
     * Get transferTypeId value
     * @return long|null
     */
    public function getTransferTypeId()
    {
        return $this->transferTypeId;
    }
    /**
     * Set transferTypeId value
     * @param long $_transferTypeId the transferTypeId
     * @return long
     */
    public function setTransferTypeId($_transferTypeId)
    {
        return ($this->transferTypeId = $_transferTypeId);
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
     * Get customValues value
     * @return PaymentWebStructFieldValue|null
     */
    public function getCustomValues()
    {
        return $this->customValues;
    }
    /**
     * Set customValues value
     * @param PaymentWebStructFieldValue $_customValues the customValues
     * @return PaymentWebStructFieldValue
     */
    public function setCustomValues($_customValues)
    {
        return ($this->customValues = $_customValues);
    }
    /**
     * Get fromMemberFieldsToReturn value
     * @return string|null
     */
    public function getFromMemberFieldsToReturn()
    {
        return $this->fromMemberFieldsToReturn;
    }
    /**
     * Set fromMemberFieldsToReturn value
     * @param string $_fromMemberFieldsToReturn the fromMemberFieldsToReturn
     * @return string
     */
    public function setFromMemberFieldsToReturn($_fromMemberFieldsToReturn)
    {
        return ($this->fromMemberFieldsToReturn = $_fromMemberFieldsToReturn);
    }
    /**
     * Get toMemberFieldsToReturn value
     * @return string|null
     */
    public function getToMemberFieldsToReturn()
    {
        return $this->toMemberFieldsToReturn;
    }
    /**
     * Set toMemberFieldsToReturn value
     * @param string $_toMemberFieldsToReturn the toMemberFieldsToReturn
     * @return string
     */
    public function setToMemberFieldsToReturn($_toMemberFieldsToReturn)
    {
        return ($this->toMemberFieldsToReturn = $_toMemberFieldsToReturn);
    }
    /**
     * Get returnStatus value
     * @return boolean|null
     */
    public function getReturnStatus()
    {
        return $this->returnStatus;
    }
    /**
     * Set returnStatus value
     * @param boolean $_returnStatus the returnStatus
     * @return boolean
     */
    public function setReturnStatus($_returnStatus)
    {
        return ($this->returnStatus = $_returnStatus);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see PaymentWebWsdlClass::__set_state()
     * @uses PaymentWebWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return PaymentWebStructPaymentParameters
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
