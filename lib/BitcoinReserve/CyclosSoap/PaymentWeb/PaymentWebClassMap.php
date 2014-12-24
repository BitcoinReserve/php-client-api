<?php
/**
 * File for the class which returns the class map definition
 * @package PaymentWeb
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
/**
 * Class which returns the class map definition by the static method PaymentWebClassMap::classMap()
 * @package PaymentWeb
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
class PaymentWebClassMap
{
    /**
     * This method returns the array containing the mapping between WSDL structs and generated classes
     * This array is sent to the SoapClient when calling the WS
     * @return array
     */
    final public static function classMap()
    {
        return array (
  'abstractPaymentParameters' => 'PaymentWebStructAbstractPaymentParameters',
  'accountStatus' => 'PaymentWebStructAccountStatus',
  'accountType' => 'PaymentWebStructAccountType',
  'basePaymentDataVO' => 'PaymentWebStructBasePaymentDataVO',
  'basePaymentVO' => 'PaymentWebStructBasePaymentVO',
  'currency' => 'PaymentWebStructCurrency',
  'doBulkPayment' => 'PaymentWebStructDoBulkPayment',
  'doBulkPaymentResponse' => 'PaymentWebStructDoBulkPaymentResponse',
  'doPayment' => 'PaymentWebStructDoPayment',
  'doPaymentResponse' => 'PaymentWebStructDoPaymentResponse',
  'entityVO' => 'PaymentWebStructEntityVO',
  'fieldValue' => 'PaymentWebStructFieldValue',
  'member' => 'PaymentWebStructMember',
  'paymentParameters' => 'PaymentWebStructPaymentParameters',
  'paymentResult' => 'PaymentWebStructPaymentResult',
  'paymentStatus' => 'PaymentWebEnumPaymentStatus',
  'paymentStatusVO' => 'PaymentWebEnumPaymentStatusVO',
  'simulatePayment' => 'PaymentWebStructSimulatePayment',
  'simulatePaymentResponse' => 'PaymentWebStructSimulatePaymentResponse',
  'transfer' => 'PaymentWebStructTransfer',
  'transferType' => 'PaymentWebStructTransferType',
);
    }
}
