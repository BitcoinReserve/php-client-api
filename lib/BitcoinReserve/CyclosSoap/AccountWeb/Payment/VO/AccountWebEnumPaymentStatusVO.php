<?php
/**
 * File for class AccountWebEnumPaymentStatusVO
 * @package AccountWeb
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
/**
 * This class stands for AccountWebEnumPaymentStatusVO originally named paymentStatusVO
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/account?wsdl}
 * @package AccountWeb
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
class AccountWebEnumPaymentStatusVO extends AccountWebWsdlClass
{
    /**
     * Constant for value 'PENDING'
     * @return string 'PENDING'
     */
    const VALUE_PENDING = 'PENDING';
    /**
     * Constant for value 'PROCESSED'
     * @return string 'PROCESSED'
     */
    const VALUE_PROCESSED = 'PROCESSED';
    /**
     * Constant for value 'DENIED'
     * @return string 'DENIED'
     */
    const VALUE_DENIED = 'DENIED';
    /**
     * Constant for value 'CANCELED'
     * @return string 'CANCELED'
     */
    const VALUE_CANCELED = 'CANCELED';
    /**
     * Constant for value 'SCHEDULED'
     * @return string 'SCHEDULED'
     */
    const VALUE_SCHEDULED = 'SCHEDULED';
    /**
     * Constant for value 'FAILED'
     * @return string 'FAILED'
     */
    const VALUE_FAILED = 'FAILED';
    /**
     * Constant for value 'BLOCKED'
     * @return string 'BLOCKED'
     */
    const VALUE_BLOCKED = 'BLOCKED';
    /**
     * Return true if value is allowed
     * @uses AccountWebEnumPaymentStatusVO::VALUE_PENDING
     * @uses AccountWebEnumPaymentStatusVO::VALUE_PROCESSED
     * @uses AccountWebEnumPaymentStatusVO::VALUE_DENIED
     * @uses AccountWebEnumPaymentStatusVO::VALUE_CANCELED
     * @uses AccountWebEnumPaymentStatusVO::VALUE_SCHEDULED
     * @uses AccountWebEnumPaymentStatusVO::VALUE_FAILED
     * @uses AccountWebEnumPaymentStatusVO::VALUE_BLOCKED
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(AccountWebEnumPaymentStatusVO::VALUE_PENDING,AccountWebEnumPaymentStatusVO::VALUE_PROCESSED,AccountWebEnumPaymentStatusVO::VALUE_DENIED,AccountWebEnumPaymentStatusVO::VALUE_CANCELED,AccountWebEnumPaymentStatusVO::VALUE_SCHEDULED,AccountWebEnumPaymentStatusVO::VALUE_FAILED,AccountWebEnumPaymentStatusVO::VALUE_BLOCKED));
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
