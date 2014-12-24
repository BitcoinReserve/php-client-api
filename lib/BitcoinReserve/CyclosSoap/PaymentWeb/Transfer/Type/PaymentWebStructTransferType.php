<?php
/**
 * File for class PaymentWebStructTransferType
 * @package PaymentWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
/**
 * This class stands for PaymentWebStructTransferType originally named transferType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/payment?wsdl}
 * @package PaymentWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
class PaymentWebStructTransferType extends PaymentWebStructEntityVO
{
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $name;
    /**
     * The from
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var PaymentWebStructAccountType
     */
    public $from;
    /**
     * The to
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var PaymentWebStructAccountType
     */
    public $to;
    /**
     * Constructor method for transferType
     * @see parent::__construct()
     * @param string $_name
     * @param PaymentWebStructAccountType $_from
     * @param PaymentWebStructAccountType $_to
     * @return PaymentWebStructTransferType
     */
    public function __construct($_name = NULL,$_from = NULL,$_to = NULL)
    {
        PaymentWebWsdlClass::__construct(array('name'=>$_name,'from'=>$_from,'to'=>$_to),false);
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
     * Get from value
     * @return PaymentWebStructAccountType|null
     */
    public function getFrom()
    {
        return $this->from;
    }
    /**
     * Set from value
     * @param PaymentWebStructAccountType $_from the from
     * @return PaymentWebStructAccountType
     */
    public function setFrom($_from)
    {
        return ($this->from = $_from);
    }
    /**
     * Get to value
     * @return PaymentWebStructAccountType|null
     */
    public function getTo()
    {
        return $this->to;
    }
    /**
     * Set to value
     * @param PaymentWebStructAccountType $_to the to
     * @return PaymentWebStructAccountType
     */
    public function setTo($_to)
    {
        return ($this->to = $_to);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see PaymentWebWsdlClass::__set_state()
     * @uses PaymentWebWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return PaymentWebStructTransferType
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
