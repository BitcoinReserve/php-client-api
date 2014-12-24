<?php
/**
 * File for class WebShopWebStructGenerateWebShopTicketParams
 * @package WebShopWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
/**
 * This class stands for WebShopWebStructGenerateWebShopTicketParams originally named generateWebShopTicketParams
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/webshop?wsdl}
 * @package WebShopWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
class WebShopWebStructGenerateWebShopTicketParams extends WebShopWebWsdlClass
{
    /**
     * The amount
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var decimal
     */
    public $amount;
    /**
     * The currency
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $currency;
    /**
     * The clientAddress
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $clientAddress;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $description;
    /**
     * The returnUrl
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $returnUrl;
    /**
     * The toUsername
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $toUsername;
    /**
     * Constructor method for generateWebShopTicketParams
     * @see parent::__construct()
     * @param decimal $_amount
     * @param string $_currency
     * @param string $_clientAddress
     * @param string $_description
     * @param string $_returnUrl
     * @param string $_toUsername
     * @return WebShopWebStructGenerateWebShopTicketParams
     */
    public function __construct($_amount = NULL,$_currency = NULL,$_clientAddress = NULL,$_description = NULL,$_returnUrl = NULL,$_toUsername = NULL)
    {
        parent::__construct(array('amount'=>$_amount,'currency'=>$_currency,'clientAddress'=>$_clientAddress,'description'=>$_description,'returnUrl'=>$_returnUrl,'toUsername'=>$_toUsername),false);
    }
    /**
     * Get amount value
     * @return decimal|null
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param decimal $_amount the amount
     * @return decimal
     */
    public function setAmount($_amount)
    {
        return ($this->amount = $_amount);
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $_currency the currency
     * @return string
     */
    public function setCurrency($_currency)
    {
        return ($this->currency = $_currency);
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
     * Get toUsername value
     * @return string|null
     */
    public function getToUsername()
    {
        return $this->toUsername;
    }
    /**
     * Set toUsername value
     * @param string $_toUsername the toUsername
     * @return string
     */
    public function setToUsername($_toUsername)
    {
        return ($this->toUsername = $_toUsername);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WebShopWebWsdlClass::__set_state()
     * @uses WebShopWebWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebShopWebStructGenerateWebShopTicketParams
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
