<?php
/**
 * File for class WebShopWebStructExpireTicket
 * @package WebShopWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
/**
 * This class stands for WebShopWebStructExpireTicket originally named expireTicket
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/webshop?wsdl}
 * @package WebShopWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
class WebShopWebStructExpireTicket extends WebShopWebWsdlClass
{
    /**
     * The ticket
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $ticket;
    /**
     * Constructor method for expireTicket
     * @see parent::__construct()
     * @param string $_ticket
     * @return WebShopWebStructExpireTicket
     */
    public function __construct($_ticket = NULL)
    {
        parent::__construct(array('ticket'=>$_ticket),false);
    }
    /**
     * Get ticket value
     * @return string|null
     */
    public function getTicket()
    {
        return $this->ticket;
    }
    /**
     * Set ticket value
     * @param string $_ticket the ticket
     * @return string
     */
    public function setTicket($_ticket)
    {
        return ($this->ticket = $_ticket);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WebShopWebWsdlClass::__set_state()
     * @uses WebShopWebWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebShopWebStructExpireTicket
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
