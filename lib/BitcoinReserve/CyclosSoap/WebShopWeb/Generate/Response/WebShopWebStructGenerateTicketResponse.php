<?php
/**
 * File for class WebShopWebStructGenerateTicketResponse
 * @package WebShopWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
/**
 * This class stands for WebShopWebStructGenerateTicketResponse originally named generateTicketResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/webshop?wsdl}
 * @package WebShopWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
class WebShopWebStructGenerateTicketResponse extends WebShopWebWsdlClass
{
    /**
     * The return
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $return;
    /**
     * Constructor method for generateTicketResponse
     * @see parent::__construct()
     * @param string $_return
     * @return WebShopWebStructGenerateTicketResponse
     */
    public function __construct($_return = NULL)
    {
        parent::__construct(array('return'=>$_return),false);
    }
    /**
     * Get return value
     * @return string|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param string $_return the return
     * @return string
     */
    public function setReturn($_return)
    {
        return ($this->return = $_return);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WebShopWebWsdlClass::__set_state()
     * @uses WebShopWebWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebShopWebStructGenerateTicketResponse
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
