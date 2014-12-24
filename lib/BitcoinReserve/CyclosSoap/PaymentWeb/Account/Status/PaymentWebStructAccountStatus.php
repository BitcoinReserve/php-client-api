<?php
/**
 * File for class PaymentWebStructAccountStatus
 * @package PaymentWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
/**
 * This class stands for PaymentWebStructAccountStatus originally named accountStatus
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/payment?wsdl}
 * @package PaymentWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
class PaymentWebStructAccountStatus extends PaymentWebWsdlClass
{
    /**
     * The balance
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var decimal
     */
    public $balance;
    /**
     * The formattedBalance
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $formattedBalance;
    /**
     * The availableBalance
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var decimal
     */
    public $availableBalance;
    /**
     * The formattedAvailableBalance
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $formattedAvailableBalance;
    /**
     * The reservedAmount
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var decimal
     */
    public $reservedAmount;
    /**
     * The formattedReservedAmount
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $formattedReservedAmount;
    /**
     * The creditLimit
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var decimal
     */
    public $creditLimit;
    /**
     * The formattedCreditLimit
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $formattedCreditLimit;
    /**
     * The upperCreditLimit
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var decimal
     */
    public $upperCreditLimit;
    /**
     * The formattedUpperCreditLimit
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $formattedUpperCreditLimit;
    /**
     * Constructor method for accountStatus
     * @see parent::__construct()
     * @param decimal $_balance
     * @param string $_formattedBalance
     * @param decimal $_availableBalance
     * @param string $_formattedAvailableBalance
     * @param decimal $_reservedAmount
     * @param string $_formattedReservedAmount
     * @param decimal $_creditLimit
     * @param string $_formattedCreditLimit
     * @param decimal $_upperCreditLimit
     * @param string $_formattedUpperCreditLimit
     * @return PaymentWebStructAccountStatus
     */
    public function __construct($_balance = NULL,$_formattedBalance = NULL,$_availableBalance = NULL,$_formattedAvailableBalance = NULL,$_reservedAmount = NULL,$_formattedReservedAmount = NULL,$_creditLimit = NULL,$_formattedCreditLimit = NULL,$_upperCreditLimit = NULL,$_formattedUpperCreditLimit = NULL)
    {
        parent::__construct(array('balance'=>$_balance,'formattedBalance'=>$_formattedBalance,'availableBalance'=>$_availableBalance,'formattedAvailableBalance'=>$_formattedAvailableBalance,'reservedAmount'=>$_reservedAmount,'formattedReservedAmount'=>$_formattedReservedAmount,'creditLimit'=>$_creditLimit,'formattedCreditLimit'=>$_formattedCreditLimit,'upperCreditLimit'=>$_upperCreditLimit,'formattedUpperCreditLimit'=>$_formattedUpperCreditLimit),false);
    }
    /**
     * Get balance value
     * @return decimal|null
     */
    public function getBalance()
    {
        return $this->balance;
    }
    /**
     * Set balance value
     * @param decimal $_balance the balance
     * @return decimal
     */
    public function setBalance($_balance)
    {
        return ($this->balance = $_balance);
    }
    /**
     * Get formattedBalance value
     * @return string|null
     */
    public function getFormattedBalance()
    {
        return $this->formattedBalance;
    }
    /**
     * Set formattedBalance value
     * @param string $_formattedBalance the formattedBalance
     * @return string
     */
    public function setFormattedBalance($_formattedBalance)
    {
        return ($this->formattedBalance = $_formattedBalance);
    }
    /**
     * Get availableBalance value
     * @return decimal|null
     */
    public function getAvailableBalance()
    {
        return $this->availableBalance;
    }
    /**
     * Set availableBalance value
     * @param decimal $_availableBalance the availableBalance
     * @return decimal
     */
    public function setAvailableBalance($_availableBalance)
    {
        return ($this->availableBalance = $_availableBalance);
    }
    /**
     * Get formattedAvailableBalance value
     * @return string|null
     */
    public function getFormattedAvailableBalance()
    {
        return $this->formattedAvailableBalance;
    }
    /**
     * Set formattedAvailableBalance value
     * @param string $_formattedAvailableBalance the formattedAvailableBalance
     * @return string
     */
    public function setFormattedAvailableBalance($_formattedAvailableBalance)
    {
        return ($this->formattedAvailableBalance = $_formattedAvailableBalance);
    }
    /**
     * Get reservedAmount value
     * @return decimal|null
     */
    public function getReservedAmount()
    {
        return $this->reservedAmount;
    }
    /**
     * Set reservedAmount value
     * @param decimal $_reservedAmount the reservedAmount
     * @return decimal
     */
    public function setReservedAmount($_reservedAmount)
    {
        return ($this->reservedAmount = $_reservedAmount);
    }
    /**
     * Get formattedReservedAmount value
     * @return string|null
     */
    public function getFormattedReservedAmount()
    {
        return $this->formattedReservedAmount;
    }
    /**
     * Set formattedReservedAmount value
     * @param string $_formattedReservedAmount the formattedReservedAmount
     * @return string
     */
    public function setFormattedReservedAmount($_formattedReservedAmount)
    {
        return ($this->formattedReservedAmount = $_formattedReservedAmount);
    }
    /**
     * Get creditLimit value
     * @return decimal|null
     */
    public function getCreditLimit()
    {
        return $this->creditLimit;
    }
    /**
     * Set creditLimit value
     * @param decimal $_creditLimit the creditLimit
     * @return decimal
     */
    public function setCreditLimit($_creditLimit)
    {
        return ($this->creditLimit = $_creditLimit);
    }
    /**
     * Get formattedCreditLimit value
     * @return string|null
     */
    public function getFormattedCreditLimit()
    {
        return $this->formattedCreditLimit;
    }
    /**
     * Set formattedCreditLimit value
     * @param string $_formattedCreditLimit the formattedCreditLimit
     * @return string
     */
    public function setFormattedCreditLimit($_formattedCreditLimit)
    {
        return ($this->formattedCreditLimit = $_formattedCreditLimit);
    }
    /**
     * Get upperCreditLimit value
     * @return decimal|null
     */
    public function getUpperCreditLimit()
    {
        return $this->upperCreditLimit;
    }
    /**
     * Set upperCreditLimit value
     * @param decimal $_upperCreditLimit the upperCreditLimit
     * @return decimal
     */
    public function setUpperCreditLimit($_upperCreditLimit)
    {
        return ($this->upperCreditLimit = $_upperCreditLimit);
    }
    /**
     * Get formattedUpperCreditLimit value
     * @return string|null
     */
    public function getFormattedUpperCreditLimit()
    {
        return $this->formattedUpperCreditLimit;
    }
    /**
     * Set formattedUpperCreditLimit value
     * @param string $_formattedUpperCreditLimit the formattedUpperCreditLimit
     * @return string
     */
    public function setFormattedUpperCreditLimit($_formattedUpperCreditLimit)
    {
        return ($this->formattedUpperCreditLimit = $_formattedUpperCreditLimit);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see PaymentWebWsdlClass::__set_state()
     * @uses PaymentWebWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return PaymentWebStructAccountStatus
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
