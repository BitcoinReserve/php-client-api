<?php
/**
 * File for class MemberWebStructEntityVO
 * @package MemberWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
/**
 * This class stands for MemberWebStructEntityVO originally named entityVO
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/members?wsdl}
 * @package MemberWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
abstract class MemberWebStructEntityVO extends MemberWebWsdlClass
{
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $id;
    /**
     * Constructor method for entityVO
     * @see parent::__construct()
     * @param long $_id
     * @return MemberWebStructEntityVO
     */
    public function __construct($_id = NULL)
    {
        parent::__construct(array('id'=>$_id),false);
    }
    /**
     * Get id value
     * @return long|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param long $_id the id
     * @return long
     */
    public function setId($_id)
    {
        return ($this->id = $_id);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MemberWebWsdlClass::__set_state()
     * @uses MemberWebWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return MemberWebStructEntityVO
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
