<?php
/**
 * File for class AccountWebStructBasePaymentDataVO
 * @package AccountWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
/**
 * This class stands for AccountWebStructBasePaymentDataVO originally named basePaymentDataVO
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/account?wsdl}
 * @package AccountWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
abstract class AccountWebStructBasePaymentDataVO extends AccountWebStructEntityVO
{
    /**
     * The date
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var dateTime
     */
    public $date;
    /**
     * The formattedDate
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $formattedDate;
    /**
     * The processDate
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var dateTime
     */
    public $processDate;
    /**
     * The formattedProcessDate
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $formattedProcessDate;
    /**
     * The amount
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var decimal
     */
    public $amount;
    /**
     * The formattedAmount
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $formattedAmount;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AccountWebEnumPaymentStatusVO
     */
    public $status;
    /**
     * Constructor method for basePaymentDataVO
     * @see parent::__construct()
     * @param dateTime $_date
     * @param string $_formattedDate
     * @param dateTime $_processDate
     * @param string $_formattedProcessDate
     * @param decimal $_amount
     * @param string $_formattedAmount
     * @param AccountWebEnumPaymentStatusVO $_status
     * @return AccountWebStructBasePaymentDataVO
     */
    public function __construct($_date = NULL,$_formattedDate = NULL,$_processDate = NULL,$_formattedProcessDate = NULL,$_amount = NULL,$_formattedAmount = NULL,$_status = NULL)
    {
        AccountWebWsdlClass::__construct(array('date'=>$_date,'formattedDate'=>$_formattedDate,'processDate'=>$_processDate,'formattedProcessDate'=>$_formattedProcessDate,'amount'=>$_amount,'formattedAmount'=>$_formattedAmount,'status'=>$_status),false);
    }
    /**
     * Get date value
     * @return dateTime|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param dateTime $_date the date
     * @return dateTime
     */
    public function setDate($_date)
    {
        return ($this->date = $_date);
    }
    /**
     * Get formattedDate value
     * @return string|null
     */
    public function getFormattedDate()
    {
        return $this->formattedDate;
    }
    /**
     * Set formattedDate value
     * @param string $_formattedDate the formattedDate
     * @return string
     */
    public function setFormattedDate($_formattedDate)
    {
        return ($this->formattedDate = $_formattedDate);
    }
    /**
     * Get processDate value
     * @return dateTime|null
     */
    public function getProcessDate()
    {
        return $this->processDate;
    }
    /**
     * Set processDate value
     * @param dateTime $_processDate the processDate
     * @return dateTime
     */
    public function setProcessDate($_processDate)
    {
        return ($this->processDate = $_processDate);
    }
    /**
     * Get formattedProcessDate value
     * @return string|null
     */
    public function getFormattedProcessDate()
    {
        return $this->formattedProcessDate;
    }
    /**
     * Set formattedProcessDate value
     * @param string $_formattedProcessDate the formattedProcessDate
     * @return string
     */
    public function setFormattedProcessDate($_formattedProcessDate)
    {
        return ($this->formattedProcessDate = $_formattedProcessDate);
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
     * Get formattedAmount value
     * @return string|null
     */
    public function getFormattedAmount()
    {
        return $this->formattedAmount;
    }
    /**
     * Set formattedAmount value
     * @param string $_formattedAmount the formattedAmount
     * @return string
     */
    public function setFormattedAmount($_formattedAmount)
    {
        return ($this->formattedAmount = $_formattedAmount);
    }
    /**
     * Get status value
     * @return AccountWebEnumPaymentStatusVO|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @uses AccountWebEnumPaymentStatusVO::valueIsValid()
     * @param AccountWebEnumPaymentStatusVO $_status the status
     * @return AccountWebEnumPaymentStatusVO
     */
    public function setStatus($_status)
    {
        if(!AccountWebEnumPaymentStatusVO::valueIsValid($_status))
        {
            return false;
        }
        return ($this->status = $_status);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AccountWebWsdlClass::__set_state()
     * @uses AccountWebWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AccountWebStructBasePaymentDataVO
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
