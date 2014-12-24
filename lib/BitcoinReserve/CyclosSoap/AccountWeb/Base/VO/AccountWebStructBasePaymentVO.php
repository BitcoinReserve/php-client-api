<?php
/**
 * File for class AccountWebStructBasePaymentVO
 * @package AccountWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
/**
 * This class stands for AccountWebStructBasePaymentVO originally named basePaymentVO
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/account?wsdl}
 * @package AccountWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
abstract class AccountWebStructBasePaymentVO extends AccountWebStructBasePaymentDataVO
{
    /**
     * The transferType
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AccountWebStructTransferType
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
     * @var AccountWebStructMember
     */
    public $fromMember;
    /**
     * The member
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AccountWebStructMember
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
     * @var AccountWebStructFieldValue
     */
    public $fields;
    /**
     * Constructor method for basePaymentVO
     * @see parent::__construct()
     * @param AccountWebStructTransferType $_transferType
     * @param string $_description
     * @param AccountWebStructMember $_fromMember
     * @param AccountWebStructMember $_member
     * @param string $_fromSystemAccountName
     * @param string $_systemAccountName
     * @param AccountWebStructFieldValue $_fields
     * @return AccountWebStructBasePaymentVO
     */
    public function __construct($_transferType = NULL,$_description = NULL,$_fromMember = NULL,$_member = NULL,$_fromSystemAccountName = NULL,$_systemAccountName = NULL,$_fields = NULL)
    {
        AccountWebWsdlClass::__construct(array('transferType'=>$_transferType,'description'=>$_description,'fromMember'=>$_fromMember,'member'=>$_member,'fromSystemAccountName'=>$_fromSystemAccountName,'systemAccountName'=>$_systemAccountName,'fields'=>$_fields),false);
    }
    /**
     * Get transferType value
     * @return AccountWebStructTransferType|null
     */
    public function getTransferType()
    {
        return $this->transferType;
    }
    /**
     * Set transferType value
     * @param AccountWebStructTransferType $_transferType the transferType
     * @return AccountWebStructTransferType
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
     * @return AccountWebStructMember|null
     */
    public function getFromMember()
    {
        return $this->fromMember;
    }
    /**
     * Set fromMember value
     * @param AccountWebStructMember $_fromMember the fromMember
     * @return AccountWebStructMember
     */
    public function setFromMember($_fromMember)
    {
        return ($this->fromMember = $_fromMember);
    }
    /**
     * Get member value
     * @return AccountWebStructMember|null
     */
    public function getMember()
    {
        return $this->member;
    }
    /**
     * Set member value
     * @param AccountWebStructMember $_member the member
     * @return AccountWebStructMember
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
     * @return AccountWebStructFieldValue|null
     */
    public function getFields()
    {
        return $this->fields;
    }
    /**
     * Set fields value
     * @param AccountWebStructFieldValue $_fields the fields
     * @return AccountWebStructFieldValue
     */
    public function setFields($_fields)
    {
        return ($this->fields = $_fields);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AccountWebWsdlClass::__set_state()
     * @uses AccountWebWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AccountWebStructBasePaymentVO
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
