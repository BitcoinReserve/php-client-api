<?php
/**
 * File to load generated classes once at once time
 * @package PaymentWeb
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
/**
 * Includes for all generated classes files
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
require_once dirname(__FILE__) . '/PaymentWebWsdlClass.php';
require_once dirname(__FILE__) . '/Entity/VO/PaymentWebStructEntityVO.php';
require_once dirname(__FILE__) . '/Base/VO/PaymentWebStructBasePaymentDataVO.php';
require_once dirname(__FILE__) . '/Abstract/Parameters/PaymentWebStructAbstractPaymentParameters.php';
require_once dirname(__FILE__) . '/Base/VO/PaymentWebStructBasePaymentVO.php';
require_once dirname(__FILE__) . '/Account/Status/PaymentWebStructAccountStatus.php';
require_once dirname(__FILE__) . '/Simulate/Payment/PaymentWebStructSimulatePayment.php';
require_once dirname(__FILE__) . '/Do/Payment/PaymentWebStructDoBulkPayment.php';
require_once dirname(__FILE__) . '/Payment/VO/PaymentWebEnumPaymentStatusVO.php';
require_once dirname(__FILE__) . '/Payment/Status/PaymentWebEnumPaymentStatus.php';
require_once dirname(__FILE__) . '/Do/Response/PaymentWebStructDoBulkPaymentResponse.php';
require_once dirname(__FILE__) . '/Member/PaymentWebStructMember.php';
require_once dirname(__FILE__) . '/Simulate/Response/PaymentWebStructSimulatePaymentResponse.php';
require_once dirname(__FILE__) . '/Transfer/Type/PaymentWebStructTransferType.php';
require_once dirname(__FILE__) . '/Do/Response/PaymentWebStructDoPaymentResponse.php';
require_once dirname(__FILE__) . '/Field/Value/PaymentWebStructFieldValue.php';
require_once dirname(__FILE__) . '/Payment/Parameters/PaymentWebStructPaymentParameters.php';
require_once dirname(__FILE__) . '/Payment/Result/PaymentWebStructPaymentResult.php';
require_once dirname(__FILE__) . '/Transfer/PaymentWebStructTransfer.php';
require_once dirname(__FILE__) . '/Account/Type/PaymentWebStructAccountType.php';
require_once dirname(__FILE__) . '/Do/Payment/PaymentWebStructDoPayment.php';
require_once dirname(__FILE__) . '/Currency/PaymentWebStructCurrency.php';
require_once dirname(__FILE__) . '/Do/PaymentWebServiceDo.php';
require_once dirname(__FILE__) . '/Simulate/PaymentWebServiceSimulate.php';
require_once dirname(__FILE__) . '/PaymentWebClassMap.php';
