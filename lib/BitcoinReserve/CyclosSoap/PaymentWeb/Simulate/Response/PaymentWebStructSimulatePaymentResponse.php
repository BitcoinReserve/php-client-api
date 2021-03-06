<?php
/**
 * File for class PaymentWebStructSimulatePaymentResponse
 * @package PaymentWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
/**
 * This class stands for PaymentWebStructSimulatePaymentResponse originally named simulatePaymentResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/payment?wsdl}
 * @package PaymentWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
class PaymentWebStructSimulatePaymentResponse extends PaymentWebWsdlClass
{
    /**
     * The return
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var PaymentWebEnumPaymentStatus
     */
    public $return;
    /**
     * Constructor method for simulatePaymentResponse
     * @see parent::__construct()
     * @param PaymentWebEnumPaymentStatus $_return
     * @return PaymentWebStructSimulatePaymentResponse
     */
    public function __construct($_return = NULL)
    {
        parent::__construct(array('return'=>$_return),false);
    }
    /**
     * Get return value
     * @return PaymentWebEnumPaymentStatus|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @uses PaymentWebEnumPaymentStatus::valueIsValid()
     * @param PaymentWebEnumPaymentStatus $_return the return
     * @return PaymentWebEnumPaymentStatus
     */
    public function setReturn($_return)
    {
        if(!PaymentWebEnumPaymentStatus::valueIsValid($_return))
        {
            return false;
        }
        return ($this->return = $_return);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see PaymentWebWsdlClass::__set_state()
     * @uses PaymentWebWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return PaymentWebStructSimulatePaymentResponse
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
