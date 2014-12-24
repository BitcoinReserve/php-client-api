<?php
/**
 * File for class AccountWebStructSearchAccountHistoryResponse
 * @package AccountWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
/**
 * This class stands for AccountWebStructSearchAccountHistoryResponse originally named searchAccountHistoryResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/account?wsdl}
 * @package AccountWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
class AccountWebStructSearchAccountHistoryResponse extends AccountWebWsdlClass
{
    /**
     * The return
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AccountWebStructAccountHistoryResultPage
     */
    public $return;
    /**
     * Constructor method for searchAccountHistoryResponse
     * @see parent::__construct()
     * @param AccountWebStructAccountHistoryResultPage $_return
     * @return AccountWebStructSearchAccountHistoryResponse
     */
    public function __construct($_return = NULL)
    {
        parent::__construct(array('return'=>$_return),false);
    }
    /**
     * Get return value
     * @return AccountWebStructAccountHistoryResultPage|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param AccountWebStructAccountHistoryResultPage $_return the return
     * @return AccountWebStructAccountHistoryResultPage
     */
    public function setReturn($_return)
    {
        return ($this->return = $_return);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AccountWebWsdlClass::__set_state()
     * @uses AccountWebWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AccountWebStructSearchAccountHistoryResponse
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
