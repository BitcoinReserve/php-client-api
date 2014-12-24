<?php
/**
 * File for class WebShopWebStructTickerVO
 * @package WebShopWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
/**
 * This class stands for WebShopWebStructTickerVO originally named tickerVO
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/webshop?wsdl}
 * @package WebShopWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
class WebShopWebStructTickerVO extends WebShopWebStructEntityVO
{
    /**
     * The ticker
     * @var float
     */
    public $ticker;
    /**
     * The timestamp
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var dateTime
     */
    public $timestamp;
    /**
     * Constructor method for tickerVO
     * @see parent::__construct()
     * @param float $_ticker
     * @param dateTime $_timestamp
     * @return WebShopWebStructTickerVO
     */
    public function __construct($_ticker = NULL,$_timestamp = NULL)
    {
        WebShopWebWsdlClass::__construct(array('ticker'=>$_ticker,'timestamp'=>$_timestamp),false);
    }
    /**
     * Get ticker value
     * @return float|null
     */
    public function getTicker()
    {
        return $this->ticker;
    }
    /**
     * Set ticker value
     * @param float $_ticker the ticker
     * @return float
     */
    public function setTicker($_ticker)
    {
        return ($this->ticker = $_ticker);
    }
    /**
     * Get timestamp value
     * @return dateTime|null
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
    /**
     * Set timestamp value
     * @param dateTime $_timestamp the timestamp
     * @return dateTime
     */
    public function setTimestamp($_timestamp)
    {
        return ($this->timestamp = $_timestamp);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WebShopWebWsdlClass::__set_state()
     * @uses WebShopWebWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebShopWebStructTickerVO
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
