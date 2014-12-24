<?php
/**
 * File for class AccountWebStructLoadTransferParameters
 * @package AccountWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
/**
 * This class stands for AccountWebStructLoadTransferParameters originally named loadTransferParameters
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/account?wsdl}
 * @package AccountWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
class AccountWebStructLoadTransferParameters extends AccountWebWsdlClass
{
    /**
     * The transactionPwd
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $transactionPwd;
    /**
     * The transferId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $transferId;
    /**
     * Constructor method for loadTransferParameters
     * @see parent::__construct()
     * @param string $_transactionPwd
     * @param long $_transferId
     * @return AccountWebStructLoadTransferParameters
     */
    public function __construct($_transactionPwd = NULL,$_transferId = NULL)
    {
        parent::__construct(array('transactionPwd'=>$_transactionPwd,'transferId'=>$_transferId),false);
    }
    /**
     * Get transactionPwd value
     * @return string|null
     */
    public function getTransactionPwd()
    {
        return $this->transactionPwd;
    }
    /**
     * Set transactionPwd value
     * @param string $_transactionPwd the transactionPwd
     * @return string
     */
    public function setTransactionPwd($_transactionPwd)
    {
        return ($this->transactionPwd = $_transactionPwd);
    }
    /**
     * Get transferId value
     * @return long|null
     */
    public function getTransferId()
    {
        return $this->transferId;
    }
    /**
     * Set transferId value
     * @param long $_transferId the transferId
     * @return long
     */
    public function setTransferId($_transferId)
    {
        return ($this->transferId = $_transferId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AccountWebWsdlClass::__set_state()
     * @uses AccountWebWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AccountWebStructLoadTransferParameters
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
