<?php
/**
 * File for class MemberWebStructLoadByDisplayNameResponse
 * @package MemberWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
/**
 * This class stands for MemberWebStructLoadByDisplayNameResponse originally named loadByDisplayNameResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/members?wsdl}
 * @package MemberWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
class MemberWebStructLoadByDisplayNameResponse extends MemberWebWsdlClass
{
    /**
     * The return
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var MemberWebStructMember
     */
    public $return;
    /**
     * Constructor method for loadByDisplayNameResponse
     * @see parent::__construct()
     * @param MemberWebStructMember $_return
     * @return MemberWebStructLoadByDisplayNameResponse
     */
    public function __construct($_return = NULL)
    {
        parent::__construct(array('return'=>$_return),false);
    }
    /**
     * Get return value
     * @return MemberWebStructMember|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param MemberWebStructMember $_return the return
     * @return MemberWebStructMember
     */
    public function setReturn($_return)
    {
        return ($this->return = $_return);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MemberWebWsdlClass::__set_state()
     * @uses MemberWebWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MemberWebStructLoadByDisplayNameResponse
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
