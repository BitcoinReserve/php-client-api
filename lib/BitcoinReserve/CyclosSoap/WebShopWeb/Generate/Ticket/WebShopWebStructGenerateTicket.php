<?php
/**
 * File for class WebShopWebStructGenerateTicket
 * @package WebShopWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
/**
 * This class stands for WebShopWebStructGenerateTicket originally named generateTicket
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/webshop?wsdl}
 * @package WebShopWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
class WebShopWebStructGenerateTicket extends WebShopWebWsdlClass
{
    /**
     * The params
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var WebShopWebStructGenerateWebShopTicketParams
     */
    public $params;
    /**
     * Constructor method for generateTicket
     * @see parent::__construct()
     * @param WebShopWebStructGenerateWebShopTicketParams $_params
     * @return WebShopWebStructGenerateTicket
     */
    public function __construct($_params = NULL)
    {
        parent::__construct(array('params'=>$_params),false);
    }
    /**
     * Get params value
     * @return WebShopWebStructGenerateWebShopTicketParams|null
     */
    public function getParams()
    {
        return $this->params;
    }
    /**
     * Set params value
     * @param WebShopWebStructGenerateWebShopTicketParams $_params the params
     * @return WebShopWebStructGenerateWebShopTicketParams
     */
    public function setParams($_params)
    {
        return ($this->params = $_params);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WebShopWebWsdlClass::__set_state()
     * @uses WebShopWebWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebShopWebStructGenerateTicket
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
