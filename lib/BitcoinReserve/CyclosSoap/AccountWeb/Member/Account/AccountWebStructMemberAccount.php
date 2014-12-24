<?php
/**
 * File for class AccountWebStructMemberAccount
 * @package AccountWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
/**
 * This class stands for AccountWebStructMemberAccount originally named memberAccount
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/account?wsdl}
 * @package AccountWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
class AccountWebStructMemberAccount extends AccountWebStructEntityVO
{
    /**
     * The isDefault
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $isDefault;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AccountWebStructAccountType
     */
    public $type;
    /**
     * Constructor method for memberAccount
     * @see parent::__construct()
     * @param boolean $_isDefault
     * @param AccountWebStructAccountType $_type
     * @return AccountWebStructMemberAccount
     */
    public function __construct($_isDefault = NULL,$_type = NULL)
    {
        AccountWebWsdlClass::__construct(array('isDefault'=>$_isDefault,'type'=>$_type),false);
    }
    /**
     * Get isDefault value
     * @return boolean|null
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }
    /**
     * Set isDefault value
     * @param boolean $_isDefault the isDefault
     * @return boolean
     */
    public function setIsDefault($_isDefault)
    {
        return ($this->isDefault = $_isDefault);
    }
    /**
     * Get type value
     * @return AccountWebStructAccountType|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param AccountWebStructAccountType $_type the type
     * @return AccountWebStructAccountType
     */
    public function setType($_type)
    {
        return ($this->type = $_type);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AccountWebWsdlClass::__set_state()
     * @uses AccountWebWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AccountWebStructMemberAccount
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
