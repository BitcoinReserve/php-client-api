<?php
/**
 * File for class PaymentWebServiceDo
 * @package PaymentWeb
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
/**
 * This class stands for PaymentWebServiceDo originally named Do
 * @package PaymentWeb
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
class PaymentWebServiceDo extends PaymentWebWsdlClass
{
    /**
     * Method to call the operation originally named doPayment
     * @uses PaymentWebWsdlClass::getSoapClient()
     * @uses PaymentWebWsdlClass::setResult()
     * @uses PaymentWebWsdlClass::saveLastError()
     * @param PaymentWebStructDoPayment $_paymentWebStructDoPayment
     * @return PaymentWebStructDoPaymentResponse
     */
    public function doPayment(PaymentWebStructDoPayment $_paymentWebStructDoPayment)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doPayment($_paymentWebStructDoPayment));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named doBulkPayment
     * @uses PaymentWebWsdlClass::getSoapClient()
     * @uses PaymentWebWsdlClass::setResult()
     * @uses PaymentWebWsdlClass::saveLastError()
     * @param PaymentWebStructDoBulkPayment $_paymentWebStructDoBulkPayment
     * @return PaymentWebStructDoBulkPaymentResponse
     */
    public function doBulkPayment(PaymentWebStructDoBulkPayment $_paymentWebStructDoBulkPayment)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->doBulkPayment($_paymentWebStructDoBulkPayment));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see PaymentWebWsdlClass::getResult()
     * @return PaymentWebStructDoBulkPaymentResponse|PaymentWebStructDoPaymentResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
