<?php
/**
 * File for class PaymentWebStructBasePaymentVO
 * @package PaymentWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
/**
 * This class stands for PaymentWebStructBasePaymentVO originally named basePaymentVO
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/payment?wsdl}
 * @package PaymentWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
abstract class PaymentWebStructBasePaymentVO extends PaymentWebStructBasePaymentDataVO
{
    /**
     * The transferType
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var PaymentWebStructTransferType
     */
    public $transferType;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $description;
    /**
     * The fromMember
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var PaymentWebStructMember
     */
    public $fromMember;
    /**
     * The member
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var PaymentWebStructMember
     */
    public $member;
    /**
     * The fromSystemAccountName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $fromSystemAccountName;
    /**
     * The systemAccountName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $systemAccountName;
    /**
     * The fields
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var PaymentWebStructFieldValue
     */
    public $fields;
    /**
     * Constructor method for basePaymentVO
     * @see parent::__construct()
     * @param PaymentWebStructTransferType $_transferType
     * @param string $_description
     * @param PaymentWebStructMember $_fromMember
     * @param PaymentWebStructMember $_member
     * @param string $_fromSystemAccountName
     * @param string $_systemAccountName
     * @param PaymentWebStructFieldValue $_fields
     * @return PaymentWebStructBasePaymentVO
     */
    public function __construct($_transferType = NULL,$_description = NULL,$_fromMember = NULL,$_member = NULL,$_fromSystemAccountName = NULL,$_systemAccountName = NULL,$_fields = NULL)
    {
        PaymentWebWsdlClass::__construct(array('transferType'=>$_transferType,'description'=>$_description,'fromMember'=>$_fromMember,'member'=>$_member,'fromSystemAccountName'=>$_fromSystemAccountName,'systemAccountName'=>$_systemAccountName,'fields'=>$_fields),false);
    }
    /**
     * Get transferType value
     * @return PaymentWebStructTransferType|null
     */
    public function getTransferType()
    {
        return $this->transferType;
    }
    /**
     * Set transferType value
     * @param PaymentWebStructTransferType $_transferType the transferType
     * @return PaymentWebStructTransferType
     */
    public function setTransferType($_transferType)
    {
        return ($this->transferType = $_transferType);
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
     * Get fromMember value
     * @return PaymentWebStructMember|null
     */
    public function getFromMember()
    {
        return $this->fromMember;
    }
    /**
     * Set fromMember value
     * @param PaymentWebStructMember $_fromMember the fromMember
     * @return PaymentWebStructMember
     */
    public function setFromMember($_fromMember)
    {
        return ($this->fromMember = $_fromMember);
    }
    /**
     * Get member value
     * @return PaymentWebStructMember|null
     */
    public function getMember()
    {
        return $this->member;
    }
    /**
     * Set member value
     * @param PaymentWebStructMember $_member the member
     * @return PaymentWebStructMember
     */
    public function setMember($_member)
    {
        return ($this->member = $_member);
    }
    /**
     * Get fromSystemAccountName value
     * @return string|null
     */
    public function getFromSystemAccountName()
    {
        return $this->fromSystemAccountName;
    }
    /**
     * Set fromSystemAccountName value
     * @param string $_fromSystemAccountName the fromSystemAccountName
     * @return string
     */
    public function setFromSystemAccountName($_fromSystemAccountName)
    {
        return ($this->fromSystemAccountName = $_fromSystemAccountName);
    }
    /**
     * Get systemAccountName value
     * @return string|null
     */
    public function getSystemAccountName()
    {
        return $this->systemAccountName;
    }
    /**
     * Set systemAccountName value
     * @param string $_systemAccountName the systemAccountName
     * @return string
     */
    public function setSystemAccountName($_systemAccountName)
    {
        return ($this->systemAccountName = $_systemAccountName);
    }
    /**
     * Get fields value
     * @return PaymentWebStructFieldValue|null
     */
    public function getFields()
    {
        return $this->fields;
    }
    /**
     * Set fields value
     * @param PaymentWebStructFieldValue $_fields the fields
     * @return PaymentWebStructFieldValue
     */
    public function setFields($_fields)
    {
        return ($this->fields = $_fields);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see PaymentWebWsdlClass::__set_state()
     * @uses PaymentWebWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return PaymentWebStructBasePaymentVO
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
