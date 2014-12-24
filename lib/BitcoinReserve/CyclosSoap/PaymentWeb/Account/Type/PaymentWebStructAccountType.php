<?php
/**
 * File for class PaymentWebStructAccountType
 * @package PaymentWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
/**
 * This class stands for PaymentWebStructAccountType originally named accountType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/payment?wsdl}
 * @package PaymentWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
class PaymentWebStructAccountType extends PaymentWebStructEntityVO
{
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $name;
    /**
     * The currency
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var PaymentWebStructCurrency
     */
    public $currency;
    /**
     * Constructor method for accountType
     * @see parent::__construct()
     * @param string $_name
     * @param PaymentWebStructCurrency $_currency
     * @return PaymentWebStructAccountType
     */
    public function __construct($_name = NULL,$_currency = NULL)
    {
        PaymentWebWsdlClass::__construct(array('name'=>$_name,'currency'=>$_currency),false);
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $_name the name
     * @return string
     */
    public function setName($_name)
    {
        return ($this->name = $_name);
    }
    /**
     * Get currency value
     * @return PaymentWebStructCurrency|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param PaymentWebStructCurrency $_currency the currency
     * @return PaymentWebStructCurrency
     */
    public function setCurrency($_currency)
    {
        return ($this->currency = $_currency);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see PaymentWebWsdlClass::__set_state()
     * @uses PaymentWebWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return PaymentWebStructAccountType
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
