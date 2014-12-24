<?php
/**
 * File for class PaymentWebStructPaymentResult
 * @package PaymentWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
/**
 * This class stands for PaymentWebStructPaymentResult originally named paymentResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/payment?wsdl}
 * @package PaymentWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
class PaymentWebStructPaymentResult extends PaymentWebWsdlClass
{
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var PaymentWebEnumPaymentStatus
     */
    public $status;
    /**
     * The transfer
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var PaymentWebStructTransfer
     */
    public $transfer;
    /**
     * The fromAccountStatus
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var PaymentWebStructAccountStatus
     */
    public $fromAccountStatus;
    /**
     * The toAccountStatus
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var PaymentWebStructAccountStatus
     */
    public $toAccountStatus;
    /**
     * Constructor method for paymentResult
     * @see parent::__construct()
     * @param PaymentWebEnumPaymentStatus $_status
     * @param PaymentWebStructTransfer $_transfer
     * @param PaymentWebStructAccountStatus $_fromAccountStatus
     * @param PaymentWebStructAccountStatus $_toAccountStatus
     * @return PaymentWebStructPaymentResult
     */
    public function __construct($_status = NULL,$_transfer = NULL,$_fromAccountStatus = NULL,$_toAccountStatus = NULL)
    {
        parent::__construct(array('status'=>$_status,'transfer'=>$_transfer,'fromAccountStatus'=>$_fromAccountStatus,'toAccountStatus'=>$_toAccountStatus),false);
    }
    /**
     * Get status value
     * @return PaymentWebEnumPaymentStatus|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @uses PaymentWebEnumPaymentStatus::valueIsValid()
     * @param PaymentWebEnumPaymentStatus $_status the status
     * @return PaymentWebEnumPaymentStatus
     */
    public function setStatus($_status)
    {
        if(!PaymentWebEnumPaymentStatus::valueIsValid($_status))
        {
            return false;
        }
        return ($this->status = $_status);
    }
    /**
     * Get transfer value
     * @return PaymentWebStructTransfer|null
     */
    public function getTransfer()
    {
        return $this->transfer;
    }
    /**
     * Set transfer value
     * @param PaymentWebStructTransfer $_transfer the transfer
     * @return PaymentWebStructTransfer
     */
    public function setTransfer($_transfer)
    {
        return ($this->transfer = $_transfer);
    }
    /**
     * Get fromAccountStatus value
     * @return PaymentWebStructAccountStatus|null
     */
    public function getFromAccountStatus()
    {
        return $this->fromAccountStatus;
    }
    /**
     * Set fromAccountStatus value
     * @param PaymentWebStructAccountStatus $_fromAccountStatus the fromAccountStatus
     * @return PaymentWebStructAccountStatus
     */
    public function setFromAccountStatus($_fromAccountStatus)
    {
        return ($this->fromAccountStatus = $_fromAccountStatus);
    }
    /**
     * Get toAccountStatus value
     * @return PaymentWebStructAccountStatus|null
     */
    public function getToAccountStatus()
    {
        return $this->toAccountStatus;
    }
    /**
     * Set toAccountStatus value
     * @param PaymentWebStructAccountStatus $_toAccountStatus the toAccountStatus
     * @return PaymentWebStructAccountStatus
     */
    public function setToAccountStatus($_toAccountStatus)
    {
        return ($this->toAccountStatus = $_toAccountStatus);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see PaymentWebWsdlClass::__set_state()
     * @uses PaymentWebWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return PaymentWebStructPaymentResult
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
