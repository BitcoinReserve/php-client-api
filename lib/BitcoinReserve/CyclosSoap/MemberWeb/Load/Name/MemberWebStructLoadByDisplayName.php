<?php
/**
 * File for class MemberWebStructLoadByDisplayName
 * @package MemberWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
/**
 * This class stands for MemberWebStructLoadByDisplayName originally named loadByDisplayName
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/members?wsdl}
 * @package MemberWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
class MemberWebStructLoadByDisplayName extends MemberWebWsdlClass
{
    /**
     * The displayName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $displayName;
    /**
     * Constructor method for loadByDisplayName
     * @see parent::__construct()
     * @param string $_displayName
     * @return MemberWebStructLoadByDisplayName
     */
    public function __construct($_displayName = NULL)
    {
        parent::__construct(array('displayName'=>$_displayName),false);
    }
    /**
     * Get displayName value
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }
    /**
     * Set displayName value
     * @param string $_displayName the displayName
     * @return string
     */
    public function setDisplayName($_displayName)
    {
        return ($this->displayName = $_displayName);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MemberWebWsdlClass::__set_state()
     * @uses MemberWebWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MemberWebStructLoadByDisplayName
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
