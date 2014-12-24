<?php
/**
 * File for class PaymentWebStructAbstractPaymentParameters
 * @package PaymentWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
/**
 * This class stands for PaymentWebStructAbstractPaymentParameters originally named abstractPaymentParameters
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/payment?wsdl}
 * @package PaymentWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
abstract class PaymentWebStructAbstractPaymentParameters extends PaymentWebWsdlClass
{
    /**
     * The toMember
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $toMember;
    /**
     * The amount
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var decimal
     */
    public $amount;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $description;
    /**
     * The currency
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $currency;
    /**
     * The traceNumber
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $traceNumber;
    /**
     * The traceData
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $traceData;
    /**
     * Constructor method for abstractPaymentParameters
     * @see parent::__construct()
     * @param string $_toMember
     * @param decimal $_amount
     * @param string $_description
     * @param string $_currency
     * @param string $_traceNumber
     * @param string $_traceData
     * @return PaymentWebStructAbstractPaymentParameters
     */
    public function __construct($_toMember = NULL,$_amount = NULL,$_description = NULL,$_currency = NULL,$_traceNumber = NULL,$_traceData = NULL)
    {
        parent::__construct(array('toMember'=>$_toMember,'amount'=>$_amount,'description'=>$_description,'currency'=>$_currency,'traceNumber'=>$_traceNumber,'traceData'=>$_traceData),false);
    }
    /**
     * Get toMember value
     * @return string|null
     */
    public function getToMember()
    {
        return $this->toMember;
    }
    /**
     * Set toMember value
     * @param string $_toMember the toMember
     * @return string
     */
    public function setToMember($_toMember)
    {
        return ($this->toMember = $_toMember);
    }
    /**
     * Get amount value
     * @return decimal|null
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param decimal $_amount the amount
     * @return decimal
     */
    public function setAmount($_amount)
    {
        return ($this->amount = $_amount);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $_description the description
     * @return string
     */
    public function setDescription($_description)
    {
        return ($this->description = $_description);
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
     * Get traceNumber value
     * @return string|null
     */
    public function getTraceNumber()
    {
        return $this->traceNumber;
    }
    /**
     * Set traceNumber value
     * @param string $_traceNumber the traceNumber
     * @return string
     */
    public function setTraceNumber($_traceNumber)
    {
        return ($this->traceNumber = $_traceNumber);
    }
    /**
     * Get traceData value
     * @return string|null
     */
    public function getTraceData()
    {
        return $this->traceData;
    }
    /**
     * Set traceData value
     * @param string $_traceData the traceData
     * @return string
     */
    public function setTraceData($_traceData)
    {
        return ($this->traceData = $_traceData);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see PaymentWebWsdlClass::__set_state()
     * @uses PaymentWebWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return PaymentWebStructAbstractPaymentParameters
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
