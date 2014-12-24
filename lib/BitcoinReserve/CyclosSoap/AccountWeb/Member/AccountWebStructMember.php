<?php
/**
 * File for class AccountWebStructMember
 * @package AccountWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
/**
 * This class stands for AccountWebStructMember originally named member
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/account?wsdl}
 * @package AccountWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
class AccountWebStructMember extends AccountWebStructEntityVO
{
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $name;
    /**
     * The accountNumber
     * @var int
     */
    public $accountNumber;
    /**
     * The groupId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $groupId;
    /**
     * Constructor method for member
     * @see parent::__construct()
     * @param string $_name
     * @param int $_accountNumber
     * @param long $_groupId
     * @return AccountWebStructMember
     */
    public function __construct($_name = NULL,$_accountNumber = NULL,$_groupId = NULL)
    {
        AccountWebWsdlClass::__construct(array('name'=>$_name,'accountNumber'=>$_accountNumber,'groupId'=>$_groupId),false);
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
     * Get accountNumber value
     * @return int|null
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }
    /**
     * Set accountNumber value
     * @param int $_accountNumber the accountNumber
     * @return int
     */
    public function setAccountNumber($_accountNumber)
    {
        return ($this->accountNumber = $_accountNumber);
    }
    /**
     * Get groupId value
     * @return long|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }
    /**
     * Set groupId value
     * @param long $_groupId the groupId
     * @return long
     */
    public function setGroupId($_groupId)
    {
        return ($this->groupId = $_groupId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AccountWebWsdlClass::__set_state()
     * @uses AccountWebWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AccountWebStructMember
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
