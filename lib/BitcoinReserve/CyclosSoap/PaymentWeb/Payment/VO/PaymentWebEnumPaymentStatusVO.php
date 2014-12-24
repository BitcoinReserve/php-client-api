<?php
/**
 * File for class PaymentWebEnumPaymentStatusVO
 * @package PaymentWeb
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
/**
 * This class stands for PaymentWebEnumPaymentStatusVO originally named paymentStatusVO
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/payment?wsdl}
 * @package PaymentWeb
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
class PaymentWebEnumPaymentStatusVO extends PaymentWebWsdlClass
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
     * @uses PaymentWebEnumPaymentStatusVO::VALUE_PENDING
     * @uses PaymentWebEnumPaymentStatusVO::VALUE_PROCESSED
     * @uses PaymentWebEnumPaymentStatusVO::VALUE_DENIED
     * @uses PaymentWebEnumPaymentStatusVO::VALUE_CANCELED
     * @uses PaymentWebEnumPaymentStatusVO::VALUE_SCHEDULED
     * @uses PaymentWebEnumPaymentStatusVO::VALUE_FAILED
     * @uses PaymentWebEnumPaymentStatusVO::VALUE_BLOCKED
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(PaymentWebEnumPaymentStatusVO::VALUE_PENDING,PaymentWebEnumPaymentStatusVO::VALUE_PROCESSED,PaymentWebEnumPaymentStatusVO::VALUE_DENIED,PaymentWebEnumPaymentStatusVO::VALUE_CANCELED,PaymentWebEnumPaymentStatusVO::VALUE_SCHEDULED,PaymentWebEnumPaymentStatusVO::VALUE_FAILED,PaymentWebEnumPaymentStatusVO::VALUE_BLOCKED));
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
