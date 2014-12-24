<?php
/**
 * File for class PaymentWebEnumPaymentStatus
 * @package PaymentWeb
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
/**
 * This class stands for PaymentWebEnumPaymentStatus originally named paymentStatus
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/payment?wsdl}
 * @package PaymentWeb
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
class PaymentWebEnumPaymentStatus extends PaymentWebWsdlClass
{
    /**
     * Constant for value 'PROCESSED'
     * @return string 'PROCESSED'
     */
    const VALUE_PROCESSED = 'PROCESSED';
    /**
     * Constant for value 'PENDING_AUTHORIZATION'
     * @return string 'PENDING_AUTHORIZATION'
     */
    const VALUE_PENDING_AUTHORIZATION = 'PENDING_AUTHORIZATION';
    /**
     * Constant for value 'INVALID_CREDENTIALS'
     * @return string 'INVALID_CREDENTIALS'
     */
    const VALUE_INVALID_CREDENTIALS = 'INVALID_CREDENTIALS';
    /**
     * Constant for value 'BLOCKED_CREDENTIALS'
     * @return string 'BLOCKED_CREDENTIALS'
     */
    const VALUE_BLOCKED_CREDENTIALS = 'BLOCKED_CREDENTIALS';
    /**
     * Constant for value 'INVALID_CHANNEL'
     * @return string 'INVALID_CHANNEL'
     */
    const VALUE_INVALID_CHANNEL = 'INVALID_CHANNEL';
    /**
     * Constant for value 'INVALID_PARAMETERS'
     * @return string 'INVALID_PARAMETERS'
     */
    const VALUE_INVALID_PARAMETERS = 'INVALID_PARAMETERS';
    /**
     * Constant for value 'FROM_NOT_FOUND'
     * @return string 'FROM_NOT_FOUND'
     */
    const VALUE_FROM_NOT_FOUND = 'FROM_NOT_FOUND';
    /**
     * Constant for value 'TO_NOT_FOUND'
     * @return string 'TO_NOT_FOUND'
     */
    const VALUE_TO_NOT_FOUND = 'TO_NOT_FOUND';
    /**
     * Constant for value 'NOT_ENOUGH_CREDITS'
     * @return string 'NOT_ENOUGH_CREDITS'
     */
    const VALUE_NOT_ENOUGH_CREDITS = 'NOT_ENOUGH_CREDITS';
    /**
     * Constant for value 'MAX_DAILY_AMOUNT_EXCEEDED'
     * @return string 'MAX_DAILY_AMOUNT_EXCEEDED'
     */
    const VALUE_MAX_DAILY_AMOUNT_EXCEEDED = 'MAX_DAILY_AMOUNT_EXCEEDED';
    /**
     * Constant for value 'RECEIVER_UPPER_CREDIT_LIMIT_REACHED'
     * @return string 'RECEIVER_UPPER_CREDIT_LIMIT_REACHED'
     */
    const VALUE_RECEIVER_UPPER_CREDIT_LIMIT_REACHED = 'RECEIVER_UPPER_CREDIT_LIMIT_REACHED';
    /**
     * Constant for value 'NOT_PERFORMED'
     * @return string 'NOT_PERFORMED'
     */
    const VALUE_NOT_PERFORMED = 'NOT_PERFORMED';
    /**
     * Constant for value 'UNKNOWN_ERROR'
     * @return string 'UNKNOWN_ERROR'
     */
    const VALUE_UNKNOWN_ERROR = 'UNKNOWN_ERROR';
    /**
     * Return true if value is allowed
     * @uses PaymentWebEnumPaymentStatus::VALUE_PROCESSED
     * @uses PaymentWebEnumPaymentStatus::VALUE_PENDING_AUTHORIZATION
     * @uses PaymentWebEnumPaymentStatus::VALUE_INVALID_CREDENTIALS
     * @uses PaymentWebEnumPaymentStatus::VALUE_BLOCKED_CREDENTIALS
     * @uses PaymentWebEnumPaymentStatus::VALUE_INVALID_CHANNEL
     * @uses PaymentWebEnumPaymentStatus::VALUE_INVALID_PARAMETERS
     * @uses PaymentWebEnumPaymentStatus::VALUE_FROM_NOT_FOUND
     * @uses PaymentWebEnumPaymentStatus::VALUE_TO_NOT_FOUND
     * @uses PaymentWebEnumPaymentStatus::VALUE_NOT_ENOUGH_CREDITS
     * @uses PaymentWebEnumPaymentStatus::VALUE_MAX_DAILY_AMOUNT_EXCEEDED
     * @uses PaymentWebEnumPaymentStatus::VALUE_RECEIVER_UPPER_CREDIT_LIMIT_REACHED
     * @uses PaymentWebEnumPaymentStatus::VALUE_NOT_PERFORMED
     * @uses PaymentWebEnumPaymentStatus::VALUE_UNKNOWN_ERROR
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(PaymentWebEnumPaymentStatus::VALUE_PROCESSED,PaymentWebEnumPaymentStatus::VALUE_PENDING_AUTHORIZATION,PaymentWebEnumPaymentStatus::VALUE_INVALID_CREDENTIALS,PaymentWebEnumPaymentStatus::VALUE_BLOCKED_CREDENTIALS,PaymentWebEnumPaymentStatus::VALUE_INVALID_CHANNEL,PaymentWebEnumPaymentStatus::VALUE_INVALID_PARAMETERS,PaymentWebEnumPaymentStatus::VALUE_FROM_NOT_FOUND,PaymentWebEnumPaymentStatus::VALUE_TO_NOT_FOUND,PaymentWebEnumPaymentStatus::VALUE_NOT_ENOUGH_CREDITS,PaymentWebEnumPaymentStatus::VALUE_MAX_DAILY_AMOUNT_EXCEEDED,PaymentWebEnumPaymentStatus::VALUE_RECEIVER_UPPER_CREDIT_LIMIT_REACHED,PaymentWebEnumPaymentStatus::VALUE_NOT_PERFORMED,PaymentWebEnumPaymentStatus::VALUE_UNKNOWN_ERROR));
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
