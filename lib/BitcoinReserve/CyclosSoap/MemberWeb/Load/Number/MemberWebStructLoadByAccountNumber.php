<?php
/**
 * File for class MemberWebStructLoadByAccountNumber
 * @package MemberWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
/**
 * This class stands for MemberWebStructLoadByAccountNumber originally named loadByAccountNumber
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/members?wsdl}
 * @package MemberWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
class MemberWebStructLoadByAccountNumber extends MemberWebWsdlClass
{
    /**
     * The accountNumber
     * @var int
     */
    public $accountNumber;
    /**
     * Constructor method for loadByAccountNumber
     * @see parent::__construct()
     * @param int $_accountNumber
     * @return MemberWebStructLoadByAccountNumber
     */
    public function __construct($_accountNumber = NULL)
    {
        parent::__construct(array('accountNumber'=>$_accountNumber),false);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MemberWebWsdlClass::__set_state()
     * @uses MemberWebWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MemberWebStructLoadByAccountNumber
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
