<?php
/**
 * File for class AccountWebStructLoadTransfer
 * @package AccountWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
/**
 * This class stands for AccountWebStructLoadTransfer originally named loadTransfer
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/account?wsdl}
 * @package AccountWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
class AccountWebStructLoadTransfer extends AccountWebWsdlClass
{
    /**
     * The params
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AccountWebStructLoadTransferParameters
     */
    public $params;
    /**
     * Constructor method for loadTransfer
     * @see parent::__construct()
     * @param AccountWebStructLoadTransferParameters $_params
     * @return AccountWebStructLoadTransfer
     */
    public function __construct($_params = NULL)
    {
        parent::__construct(array('params'=>$_params),false);
    }
    /**
     * Get params value
     * @return AccountWebStructLoadTransferParameters|null
     */
    public function getParams()
    {
        return $this->params;
    }
    /**
     * Set params value
     * @param AccountWebStructLoadTransferParameters $_params the params
     * @return AccountWebStructLoadTransferParameters
     */
    public function setParams($_params)
    {
        return ($this->params = $_params);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AccountWebWsdlClass::__set_state()
     * @uses AccountWebWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AccountWebStructLoadTransfer
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
