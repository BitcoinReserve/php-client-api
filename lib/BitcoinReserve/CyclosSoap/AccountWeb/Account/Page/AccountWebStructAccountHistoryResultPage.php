<?php
/**
 * File for class AccountWebStructAccountHistoryResultPage
 * @package AccountWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
/**
 * This class stands for AccountWebStructAccountHistoryResultPage originally named accountHistoryResultPage
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/account?wsdl}
 * @package AccountWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
class AccountWebStructAccountHistoryResultPage extends AccountWebStructResultPage
{
    /**
     * The accountStatus
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AccountWebStructAccountStatus
     */
    public $accountStatus;
    /**
     * The transfers
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var AccountWebStructTransfer
     */
    public $transfers;
    /**
     * Constructor method for accountHistoryResultPage
     * @see parent::__construct()
     * @param AccountWebStructAccountStatus $_accountStatus
     * @param AccountWebStructTransfer $_transfers
     * @return AccountWebStructAccountHistoryResultPage
     */
    public function __construct($_accountStatus = NULL,$_transfers = NULL)
    {
        AccountWebWsdlClass::__construct(array('accountStatus'=>$_accountStatus,'transfers'=>$_transfers),false);
    }
    /**
     * Get accountStatus value
     * @return AccountWebStructAccountStatus|null
     */
    public function getAccountStatus()
    {
        return $this->accountStatus;
    }
    /**
     * Set accountStatus value
     * @param AccountWebStructAccountStatus $_accountStatus the accountStatus
     * @return AccountWebStructAccountStatus
     */
    public function setAccountStatus($_accountStatus)
    {
        return ($this->accountStatus = $_accountStatus);
    }
    /**
     * Get transfers value
     * @return AccountWebStructTransfer|null
     */
    public function getTransfers()
    {
        return $this->transfers;
    }
    /**
     * Set transfers value
     * @param AccountWebStructTransfer $_transfers the transfers
     * @return AccountWebStructTransfer
     */
    public function setTransfers($_transfers)
    {
        return ($this->transfers = $_transfers);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AccountWebWsdlClass::__set_state()
     * @uses AccountWebWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AccountWebStructAccountHistoryResultPage
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
