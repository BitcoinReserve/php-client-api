<?php
/**
 * File for class PaymentWebServiceSimulate
 * @package PaymentWeb
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
/**
 * This class stands for PaymentWebServiceSimulate originally named Simulate
 * @package PaymentWeb
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
class PaymentWebServiceSimulate extends PaymentWebWsdlClass
{
    /**
     * Method to call the operation originally named simulatePayment
     * @uses PaymentWebWsdlClass::getSoapClient()
     * @uses PaymentWebWsdlClass::setResult()
     * @uses PaymentWebWsdlClass::saveLastError()
     * @param PaymentWebStructSimulatePayment $_paymentWebStructSimulatePayment
     * @return PaymentWebStructSimulatePaymentResponse
     */
    public function simulatePayment(PaymentWebStructSimulatePayment $_paymentWebStructSimulatePayment)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->simulatePayment($_paymentWebStructSimulatePayment));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see PaymentWebWsdlClass::getResult()
     * @return PaymentWebStructSimulatePaymentResponse
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
