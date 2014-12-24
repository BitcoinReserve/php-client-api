<?php
/**
 * File for class PaymentWebStructDoPayment
 * @package PaymentWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
/**
 * This class stands for PaymentWebStructDoPayment originally named doPayment
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/payment?wsdl}
 * @package PaymentWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
class PaymentWebStructDoPayment extends PaymentWebWsdlClass
{
    /**
     * The params
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var PaymentWebStructPaymentParameters
     */
    public $params;
    /**
     * Constructor method for doPayment
     * @see parent::__construct()
     * @param PaymentWebStructPaymentParameters $_params
     * @return PaymentWebStructDoPayment
     */
    public function __construct($_params = NULL)
    {
        parent::__construct(array('params'=>$_params),false);
    }
    /**
     * Get params value
     * @return PaymentWebStructPaymentParameters|null
     */
    public function getParams()
    {
        return $this->params;
    }
    /**
     * Set params value
     * @param PaymentWebStructPaymentParameters $_params the params
     * @return PaymentWebStructPaymentParameters
     */
    public function setParams($_params)
    {
        return ($this->params = $_params);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see PaymentWebWsdlClass::__set_state()
     * @uses PaymentWebWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return PaymentWebStructDoPayment
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
