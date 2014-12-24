<?php
/**
 * File for class AccountWebStructCurrency
 * @package AccountWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
/**
 * This class stands for AccountWebStructCurrency originally named currency
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/account?wsdl}
 * @package AccountWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
class AccountWebStructCurrency extends AccountWebStructEntityVO
{
    /**
     * The symbol
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $symbol;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $name;
    /**
     * The pattern
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $pattern;
    /**
     * Constructor method for currency
     * @see parent::__construct()
     * @param string $_symbol
     * @param string $_name
     * @param string $_pattern
     * @return AccountWebStructCurrency
     */
    public function __construct($_symbol = NULL,$_name = NULL,$_pattern = NULL)
    {
        AccountWebWsdlClass::__construct(array('symbol'=>$_symbol,'name'=>$_name,'pattern'=>$_pattern),false);
    }
    /**
     * Get symbol value
     * @return string|null
     */
    public function getSymbol()
    {
        return $this->symbol;
    }
    /**
     * Set symbol value
     * @param string $_symbol the symbol
     * @return string
     */
    public function setSymbol($_symbol)
    {
        return ($this->symbol = $_symbol);
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $_name the name
     * @return string
     */
    public function setName($_name)
    {
        return ($this->name = $_name);
    }
    /**
     * Get pattern value
     * @return string|null
     */
    public function getPattern()
    {
        return $this->pattern;
    }
    /**
     * Set pattern value
     * @param string $_pattern the pattern
     * @return string
     */
    public function setPattern($_pattern)
    {
        return ($this->pattern = $_pattern);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AccountWebWsdlClass::__set_state()
     * @uses AccountWebWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AccountWebStructCurrency
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
