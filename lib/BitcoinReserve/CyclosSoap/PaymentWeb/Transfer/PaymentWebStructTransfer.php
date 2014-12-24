<?php
/**
 * File for class PaymentWebStructTransfer
 * @package PaymentWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
/**
 * This class stands for PaymentWebStructTransfer originally named transfer
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/payment?wsdl}
 * @package PaymentWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
class PaymentWebStructTransfer extends PaymentWebStructBasePaymentVO
{
    /**
     * The transactionNumber
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $transactionNumber;
    /**
     * The traceNumber
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $traceNumber;
    /**
     * Constructor method for transfer
     * @see parent::__construct()
     * @param string $_transactionNumber
     * @param string $_traceNumber
     * @return PaymentWebStructTransfer
     */
    public function __construct($_transactionNumber = NULL,$_traceNumber = NULL)
    {
        PaymentWebWsdlClass::__construct(array('transactionNumber'=>$_transactionNumber,'traceNumber'=>$_traceNumber),false);
    }
    /**
     * Get transactionNumber value
     * @return string|null
     */
    public function getTransactionNumber()
    {
        return $this->transactionNumber;
    }
    /**
     * Set transactionNumber value
     * @param string $_transactionNumber the transactionNumber
     * @return string
     */
    public function setTransactionNumber($_transactionNumber)
    {
        return ($this->transactionNumber = $_transactionNumber);
    }
    /**
     * Get traceNumber value
     * @return string|null
     */
    public function getTraceNumber()
    {
        return $this->traceNumber;
    }
    /**
     * Set traceNumber value
     * @param string $_traceNumber the traceNumber
     * @return string
     */
    public function setTraceNumber($_traceNumber)
    {
        return ($this->traceNumber = $_traceNumber);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see PaymentWebWsdlClass::__set_state()
     * @uses PaymentWebWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return PaymentWebStructTransfer
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
