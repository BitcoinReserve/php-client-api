<?php
/**
 * File for class WebShopWebStructWebshopTicket
 * @package WebShopWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
/**
 * This class stands for WebShopWebStructWebshopTicket originally named webshopTicket
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/webshop?wsdl}
 * @package WebShopWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
class WebShopWebStructWebshopTicket extends WebShopWebStructTicketVO
{
    /**
     * The clientAddress
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $clientAddress;
    /**
     * The memberAddress
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $memberAddress;
    /**
     * The returnUrl
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $returnUrl;
    /**
     * Constructor method for webshopTicket
     * @see parent::__construct()
     * @param string $_clientAddress
     * @param string $_memberAddress
     * @param string $_returnUrl
     * @return WebShopWebStructWebshopTicket
     */
    public function __construct($_clientAddress = NULL,$_memberAddress = NULL,$_returnUrl = NULL)
    {
        WebShopWebWsdlClass::__construct(array('clientAddress'=>$_clientAddress,'memberAddress'=>$_memberAddress,'returnUrl'=>$_returnUrl),false);
    }
    /**
     * Get clientAddress value
     * @return string|null
     */
    public function getClientAddress()
    {
        return $this->clientAddress;
    }
    /**
     * Set clientAddress value
     * @param string $_clientAddress the clientAddress
     * @return string
     */
    public function setClientAddress($_clientAddress)
    {
        return ($this->clientAddress = $_clientAddress);
    }
    /**
     * Get memberAddress value
     * @return string|null
     */
    public function getMemberAddress()
    {
        return $this->memberAddress;
    }
    /**
     * Set memberAddress value
     * @param string $_memberAddress the memberAddress
     * @return string
     */
    public function setMemberAddress($_memberAddress)
    {
        return ($this->memberAddress = $_memberAddress);
    }
    /**
     * Get returnUrl value
     * @return string|null
     */
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }
    /**
     * Set returnUrl value
     * @param string $_returnUrl the returnUrl
     * @return string
     */
    public function setReturnUrl($_returnUrl)
    {
        return ($this->returnUrl = $_returnUrl);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WebShopWebWsdlClass::__set_state()
     * @uses WebShopWebWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebShopWebStructWebshopTicket
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
