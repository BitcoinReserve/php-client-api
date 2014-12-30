<?php

/**
 * This file is part of the bitcoin-reserve-php package.
 *
 * (c) Bitcoin Reserve <http://bitcoinreserve.ch/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 *
 * 
 * @package bitcoin-reserve-php
 * @category Service 
 *
 */
class BitcoinReserve_PaymentService extends BitcoinReserve_Service {
	
	// doPayment response status list
	const RESPONSE_STATUS_INVALID_PARAMETERS = 'INVALID_PARAMETERS';
	const RESPONSE_STATUS_PROCESSED = 'PROCESSED';
	// requestPaymentConfirmation  response status list
	const RESPONSE_STATUS_FROM_NOT_FOUND = 'FROM_NOT_FOUND';
	const RESPONSE_STATUS_REQUEST_RECEIVED = 'REQUEST_RECEIVED';
	//const RESPONSE_STATUS_INVALID_PARAMETERS = 'PROCESSED'; // Same as doPayment
	
	// requestPaymentConfirmation channel list
	const CHANNEL_INTERNET_PAYMENTS = 'InternetPayments';
	
	// PaymentWebStructPaymentResult status list
	const PAYMENT_RESULT_STATUS_PROCESSED = 'PROCESSED'; // The payment was successfully processed
	const PAYMENT_RESULT_STATUS_PENDING_AUTHORIZATION = 'PENDING_AUTHORIZATION'; // The payment was created, but is awaiting authorization
	const PAYMENT_RESULT_STATUS_INVALID_CREDENTIALS = 'INVALID_CREDENTIALS'; // Invalid credential was entered
	const PAYMENT_RESULT_STATUS_BLOCKED_CREDENTIALS = 'BLOCKED_CREDENTIALS'; // The credential were blocked for exceeding allowed tries
	const PAYMENT_RESULT_STATUS_INVALID_CHANNEL = 'INVALID_CHANNEL'; // The payment was being performed from a channel the member doesn't have access
	const PAYMENT_RESULT_STATUS_INVALID_PARAMETERS = 'INVALID_PARAMETERS'; // One or more parameters were invalid
	const PAYMENT_RESULT_STATUS_NOT_ENOUGH_CREDITS = 'NOT_ENOUGH_CREDITS'; // The payment couldn't be performed, because there was not enough amount on the source account
	const PAYMENT_RESULT_STATUS_MAX_DAILY_AMOUNT_EXCEEDED = 'MAX_DAILY_AMOUNT_EXCEEDED'; // The payment couldn't be performed, because the maximum amount today has been exceeded
	const PAYMENT_RESULT_STATUS_RECEIVER_UPPER_CREDIT_LIMIT_REACHED = 'RECEIVER_UPPER_CREDIT_LIMIT_REACHED'; // The payment couldn't be performed, because the destination account would surpass it's upper credit limit
	const PAYMENT_RESULT_STATUS_UNKNOWN_ERROR = 'UNKNOWN_ERROR'; // Any other unexpected error will fall in this category
	const PAYMENT_RESULT_STATUS_NOT_PERFORMED = 'NOT_PERFORMED'; // In a bulk action, when a payment result in error, all next payments will have this status	
	
	/**
	 * @var string
	 */
	protected static $serviceUrl = '/payment?wsdl';
	
	public static function getServiceUrl() {
		return self::$serviceUrl;
	}
	
	/**
	 * Return WSDL options array.
	 * @return Array
	 */
	protected static function getWsdlOptions() {
		
		$wsdl = array();
		$wsdl[PaymentWebWsdlClass::WSDL_URL] = BitcoinReserve::$apiBase.self::getServiceUrl();
		
		// basic http authentication
		$wsdl[AccountWebWsdlClass::WSDL_LOGIN] = BitcoinReserve::getUsername();
		$wsdl[AccountWebWsdlClass::WSDL_PASSWORD] = BitcoinReserve::getApiKey();	

		$context = self::getContext();
		if (!is_null($context)) {
			$wsdl[AccountWebWsdlClass::WSDL_STREAM_CONTEXT] = $context;
		}		
	
		return $wsdl;
	}

    /**
     * Make a payment from member to member. Inmediate payment.
     *
     * @params Array
     * @param $params
     * @throws BitcoinReserve_InvalidParametersError
     * @throws Exception
     * @return BitcoinReserve_PaymentResult
     */
	public static function doPayment($params) {
		
		// LOG
		if (self::$log) {
			BitcoinReserve_Logger::instance()->info("CALL API METHOD: BitcoinReserve_PaymentService::doPayment");
			BitcoinReserve_Logger::instance()->info("PARAMS: ".var_export($params, true).PHP_EOL);
		}

		if (!is_array($params)) {
			throw new BitcoinReserve_InvalidParametersError("Param params must be an array.");
		}		
		
		// Params validation is done in server side.
		
		// Required params
		$amount = $params['amount'];
		$currency = $params['currency'];
		$description = $params['description'];
		$toMember = $params['toMember'];
		
		$transactionPwd = null;
		if (!empty($params['transactionPwd'])) {
			$transactionPwd = $params['transactionPwd'];
		} else {
			// Default API value used.
			$transactionPwd = BitcoinReserve::getTransactionPwd();
		}		

		// Service
		$paymentWebServiceDo = new PaymentWebServiceDo(self::getWsdlOptions());
		
		// Params		
		$paymentWebStructPaymentParameters = new PaymentWebStructPaymentParameters();
		
		// PaymentWebStructPaymentParameters extends PaymentWebStructAbstractPaymentParameters
		
		// Attributes from PaymentWebStructAbstractPaymentParameters
		$paymentWebStructPaymentParameters->setToMember($toMember);
		
		// Attributes from PaymentWebStructPaymentParameters
		$paymentWebStructPaymentParameters->setAmount($amount);
		$paymentWebStructPaymentParameters->setDescription($description);
		$paymentWebStructPaymentParameters->setCurrency($currency);
        $paymentWebStructPaymentParameters->setTransactionPwd($transactionPwd);
		
		// lines below with unset fix a Cyclos Soap API bug. Attribute can not be null if they are present in the request body
		// Sample request:
		/*
		'<?xml version="1.0" encoding="UTF-8"?>
		<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:ns1="http://payments.webservices.cyclos.strohalm.nl/">
		  <SOAP-ENV:Body>
		    <ns1:doPayment>
		      <params>
		        <fromMemberPrincipalType>USER</fromMemberPrincipalType>
		        <fromMember>6639066</fromMember>
		        <toMemberPrincipalType>USER</toMemberPrincipalType>
		        <toMember>7419161</toMember>
		        <amount>0.01</amount>
		        <description>Cashout (immediate)0.01 BTC to Sample Memeber 7419161</description>
		        <currency>BTC</currency>
		        <credentials>jdnfu7r_123</credentials>
		        <customValues xsi:nil="true"/>
		        <fromMemberFieldsToReturn xsi:nil="true"/>
		        <toMemberFieldsToReturn xsi:nil="true"/>
		      </params>
		    </ns1:doPayment>
		  </SOAP-ENV:Body>
		</SOAP-ENV:Envelope>
		*/
		// Lines with xsi:nil="true" causes the server returns INVALID_PARAMETER status. So it is necessary to unset those attributes
		
		unset($paymentWebStructPaymentParameters->customValues);
		unset($paymentWebStructPaymentParameters->fromMemberFieldsToReturn);
		unset($paymentWebStructPaymentParameters->toMemberFieldsToReturn);
		
		$paymentWebStructDoPayment = new PaymentWebStructDoPayment($paymentWebStructPaymentParameters); 
		
		$paymentResult = null;
		
		try {
			
			// LOG
			if (self::$log) {
				BitcoinReserve_Logger::instance()->info("CALL SOAP METHOD: PaymentWebServiceDo::doPayment");
				BitcoinReserve_Logger::instance()->info("PARAMS: ".var_export($paymentWebStructDoPayment, true).PHP_EOL);
			}			
				
			$paymentWebServiceDo->doPayment($paymentWebStructDoPayment);
			
			// DEBUG
			if (self::$debug) {
				self::generateDebugInfo($paymentWebServiceDo);
			}			
			
			// DEBUG
			//self::printDebugInfo($paymentWebServiceDo);	

			$paymentWebStructDoPaymentResponse = $paymentWebServiceDo->getResult();
			
			// DEBUG
			/*ini_set('xdebug.var_display_max_depth', 5);
			ini_set('xdebug.var_display_max_children', 256);
			ini_set('xdebug.var_display_max_data', 1024);
			var_dump($paymentWebStructDoPaymentResponse);
			die("DEBUG BitcoinReserve_PaymentService::doPayment");*/
			
			// DEBUG
			//self::printDebugInfo($paymentWebServiceDo);
				
			// DEBUG
			//var_dump($paymentWebStructDoPaymentResponse);
				
			if (!$paymentWebStructDoPaymentResponse) {
					
				// Error
				$soapFault = $paymentWebServiceDo->getLastErrorForMethod('PaymentWebServiceDo::doPayment');
					
				// DEBUG
				//var_dump($soapFault);
					
				self::mapException($soapFault);
			}			
						
			// It returns PaymentWebStructPaymentResult
			$paymentWebStructPaymentResult = $paymentWebStructDoPaymentResponse->return;
			
			// Map from PaymentWebStructPaymentResult to BitcoinReserve_PaymentResult
			$paymentResult =  BitcoinReserve_PaymentResultMapper::mapPaymentResult($paymentWebStructPaymentResult);
			
			// LOG
			if (self::$log) {
				BitcoinReserve_Logger::instance()->info("SOAP RESPONSE: ".PHP_EOL.var_export($paymentWebStructDoPaymentResponse, true));
				BitcoinReserve_Logger::instance()->info("SOAP DEBUG: ".PHP_EOL.self::getLastDebugInfo(false));
			}			
			
		} catch (Exception $e) {

            // LOG
            if (self::$log) {
                BitcoinReserve_Logger::instance()->critical("EXCEPTION: ".$e->getMessage());
            }
				
			throw $e;
		}
		
		// LOG
		if (self::$log) {
			BitcoinReserve_Logger::instance()->info("API RESPONSE: ".PHP_EOL.var_export($paymentResult, true));
		}		
		
		return $paymentResult;		
	}

	/**
	 * Simulates a payment. The input parameters are the same as simulatePayment(), but the result is only the payment status.
	 * No payment is actually performed.
	 *
	 * @params Array
	 * @param $params
	 * @return BitcoinReserve_PaymentResult
	 * @throws BitcoinReserve_InvalidParametersError
	 * @throws Exception
	 */
	public static function simulatePayment($params) {
	
		// LOG
		if (self::$log) {
			BitcoinReserve_Logger::instance()->info("CALL API METHOD: BitcoinReserve_PaymentService::simulatePayment");
			BitcoinReserve_Logger::instance()->info("PARAMS: ".var_export($params, true).PHP_EOL);
		}
		
		if (!is_array($params)) {
			throw new BitcoinReserve_InvalidParametersError("Param params must be an array.");
		}		
	
		$amount = $params['amount'];
		$currency = $params['currency'];
		$description = $params['description'];
		$toMember = $params['toMember'];
	
		// Service
		$paymentWebServiceSimulate = new PaymentWebServiceSimulate(self::getWsdlOptions());
	
		// Params
		$paymentWebStructPaymentParameters = new PaymentWebStructPaymentParameters();
	
		// PaymentWebStructPaymentParameters extends PaymentWebStructAbstractPaymentParameters
	
		// Attributes from PaymentWebStructAbstractPaymentParameters
		$paymentWebStructPaymentParameters->setToMember($toMember);
	
		// Atributes from PaymentWebStructPaymentParameters
		$paymentWebStructPaymentParameters->setAmount($amount);
		$paymentWebStructPaymentParameters->setDescription($description);
		$paymentWebStructPaymentParameters->setCurrency($currency);
        $paymentWebStructPaymentParameters->setTransactionPwd(BitcoinReserve::getTransactionPwd());
	
		// unsets below with unset fix a Cyclos Soap API bug. Attribute can not be null if they are present in the request body. See simulatePayment method.
		unset($paymentWebStructPaymentParameters->customValues);
		unset($paymentWebStructPaymentParameters->fromMemberFieldsToReturn);
		unset($paymentWebStructPaymentParameters->toMemberFieldsToReturn);
	
		$paymentWebStructSimulatePayment = new PaymentWebStructSimulatePayment($paymentWebStructPaymentParameters);
	
		$paymentResult = null;
	
		try {
				
			// LOG
			if (self::$log) {
				BitcoinReserve_Logger::instance()->info("CALL SOAP METHOD: PaymentWebServiceSimulate::simulatePayment");
				BitcoinReserve_Logger::instance()->info("PARAMS: ".var_export($paymentWebStructSimulatePayment, true).PHP_EOL);
			}
	
			$paymentWebServiceSimulate->simulatePayment($paymentWebStructSimulatePayment);
				
			// DEBUG
			if (self::$debug) {
				self::generateDebugInfo($paymentWebServiceSimulate);
			}
				
			// DEBUG
			//self::printDebugInfo($paymentWebServiceSimulate);
	
			$paymentWebStructSimulatePaymentResponse = $paymentWebServiceSimulate->getResult();
	
			// DEBUG
			//self::printDebugInfo($paymentWebServiceSimulate);
			
			// DEBUG
			//var_dump($paymentWebStructSimulatePaymentResponse);
			
			if (!$paymentWebStructSimulatePaymentResponse) {
					
				// Error
				$soapFault = $paymentWebServiceSimulate->getLastErrorForMethod('PaymentWebServiceSimulate::simulatePayment');
					
				// DEBUG
				//var_dump($soapFault);
					
				self::mapException($soapFault);
			}			
	
			// It returns PaymentWebStructPaymentResult
			$paymentWebStructPaymentResult = $paymentWebStructSimulatePaymentResponse->return;
			
			/* ATENTION: simulatePayment only return status not a full object. Here is a sample object returned:
				object(PaymentWebStructSimulatePaymentResponse)[11]
				  public 'return' => string 'PROCESSED' (length=9)
			   That is why mapper is not used.
			 */
				
			// Map from PaymentWebStructPaymentResult to BitcoinReserve_PaymentResult
			$paymentResult =  new BitcoinReserve_PaymentResult;
			$paymentResult->setStatus($paymentWebStructPaymentResult);
				
			// LOG
			if (self::$log) {
				BitcoinReserve_Logger::instance()->info("SOAP RESPONSE: ".PHP_EOL.var_export($paymentWebStructSimulatePaymentResponse, true));
				BitcoinReserve_Logger::instance()->info("SOAP DEBUG: ".PHP_EOL.self::getLastDebugInfo(false));
			}
				
		} catch (Exception $e) {

            // LOG
            if (self::$log) {
                BitcoinReserve_Logger::instance()->critical("EXCEPTION: ".$e->getMessage());
            }
	
			throw $e;
		}
	
		// LOG
		if (self::$log) {
			BitcoinReserve_Logger::instance()->info("API RESPONSE: ".PHP_EOL.var_export($paymentResult, true));
		}
	
		return $paymentResult;
	}

    /**
     * Make a bulk payment from member to a list of members. Inmediate payment.
     * This method is the same as doPayment but a collection of payments is made at the same time.
     *
     * INPORTANT This method perform several payments in the given sequence, under the same transaction (they are all guaranteed to succeed or fail atomically).
     *
     * Performs several payments, returning a payment status for each input parameter.
     * Has the same input parameter as doPayment(), but in a collection. The result is also a collection, one for each input.
     * It's guaranteed that the size of the result collection is the same as the inputs.
     * Also, if one payment fails, there will be no attempts to perform next payments, they will all have NOT_PERFORMED as status.
     * It is also possible that a payment fails some static validation.
     * If this happens, the payments which fail will have a corresponding status, and the others will be NOT_PERFORMED (even previous ones).
     * So, a possible way to check whether all payments were performed is to check the last status.
     * If it is PROCESSED or PENDING_AUTHORIZATION, it means the bulk was successful.
     *
     * @params Array $paymentsCollection
     * @param $paymentsCollection
     * @throws BitcoinReserve_InvalidParametersError
     * @throws Exception
     * @return BitcoinReserve_PaymentResult
     */
	public static function doBulkPayment($paymentsCollection) {
	
		// LOG
		if (self::$log) {
			BitcoinReserve_Logger::instance()->info("CALL API METHOD: BitcoinReserve_PaymentService::doBulkPayment");
			BitcoinReserve_Logger::instance()->info("PARAMS: ".var_export($paymentsCollection, true).PHP_EOL);
		}
		
		if (!is_array($paymentsCollection)) {
			throw new BitcoinReserve_InvalidParametersError("Param paymentsCollection must be an array of array.");
		}		
	
		// Service
		$paymentWebServiceDo = new PaymentWebServiceDo(self::getWsdlOptions());
		
		$paymentWebStructPaymentParametersCollection = array();

		foreach($paymentsCollection as $paymentKey => $params) {

			if (!is_array($params)) {
				throw new BitcoinReserve_InvalidParametersError("Invalid payment data. Each payment data in payment collection must be an array.");
			}
						
			$amount = $params['amount'];
			$currency = $params['currency'];
			$description = $params['description'];
			$toMember = $params['toMember'];
			
			$transactionPwd = null;
			if (!empty($params['transactionPwd'])) {
				$transactionPwd = $params['transactionPwd'];
			} else {
				// Default API value used.
				$transactionPwd = BitcoinReserve::getTransactionPwd();
			}			
		
			// Params
			$paymentWebStructPaymentParameters = new PaymentWebStructPaymentParameters();
		
			// PaymentWebStructPaymentParameters extends PaymentWebStructAbstractPaymentParameters
		
			// Attributes from PaymentWebStructAbstractPaymentParameters
			$paymentWebStructPaymentParameters->setToMember($toMember);
		
			// Attributes from PaymentWebStructPaymentParameters
			$paymentWebStructPaymentParameters->setAmount($amount);
			$paymentWebStructPaymentParameters->setDescription($description);
			$paymentWebStructPaymentParameters->setTransactionPwd($transactionPwd);
		
			unset($paymentWebStructPaymentParameters->customValues);
			unset($paymentWebStructPaymentParameters->fromMemberFieldsToReturn);
			unset($paymentWebStructPaymentParameters->toMemberFieldsToReturn);
		
			//$paymentWebStructDoPayment = new PaymentWebStructDoPayment($paymentWebStructPaymentParameters);
			
			$paymentWebStructPaymentParametersCollection[] = $paymentWebStructPaymentParameters;
		}

		$paymentWebStructDoBulkPayment = new PaymentWebStructDoBulkPayment($paymentWebStructPaymentParametersCollection);		
	
		$paymentResult = null;
	
		try {
				
			// LOG
			if (self::$log) {
				BitcoinReserve_Logger::instance()->info("CALL SOAP METHOD: PaymentWebServiceDo::doBulkPayment");
				BitcoinReserve_Logger::instance()->info("PARAMS: ".var_export($paymentWebStructDoBulkPayment, true).PHP_EOL);
			}
	
			$paymentWebServiceDo->doBulkPayment($paymentWebStructDoBulkPayment);
				
			// DEBUG
			if (self::$debug) {
				self::generateDebugInfo($paymentWebServiceDo);
			}
				
			// DEBUG
			//self::printDebugInfo($paymentWebServiceDo);
	
			$paymentWebStructDoBulkPaymentResponse = $paymentWebServiceDo->getResult();
	
			// DEBUG
			/*var_dump($paymentWebStructDoBulkPaymentResponse);
			die("DEBUG BitcoinReserve_PaymentService::doBulkPayment");*/
	
			// It returns PaymentWebStructPaymentResult
			$paymentWebStructPaymentResultCollection = $paymentWebStructDoBulkPaymentResponse->return;
				
			$paymentResultCollection = array();
			foreach($paymentWebStructPaymentResultCollection as $key => $paymentWebStructPaymentResult) {
				// Map from PaymentWebStructPaymentResult to BitcoinReserve_PaymentResult
				$paymentResultCollection[$key] = BitcoinReserve_PaymentResultMapper::mapPaymentResult($paymentWebStructPaymentResult);
			}
				
			// LOG
			if (self::$log) {
				BitcoinReserve_Logger::instance()->info("SOAP RESPONSE: ".PHP_EOL.var_export($paymentWebStructDoBulkPaymentResponse, true));
				BitcoinReserve_Logger::instance()->info("SOAP DEBUG: ".PHP_EOL.self::getLastDebugInfo(false));
			}
				
		} catch (Exception $e) {

            // LOG
            if (self::$log) {
                BitcoinReserve_Logger::instance()->critical("EXCEPTION: ".$e->getMessage());
            }
	
			throw $e;
		}
	
		// LOG
		if (self::$log) {
			BitcoinReserve_Logger::instance()->info("API RESPONSE: ".PHP_EOL.var_export($paymentResultCollection, true));
		}
	
		return $paymentResultCollection;
	}

    /**
     * Make a mass payment from member to a list of members. Inmediate payment.
     * This method is the same as doPayment but a collection of payments is made at the same time.
     *
     * INPORTANT This method perform several payments in the given sequence.
     *
     * Performs several payments, returning a payment status for each input parameter.
     * Has the same input parameter as doPayment(), but in a collection. The result is also a collection, one for each input.
     * It's guaranteed that the size of the result collection is the same as the inputs.
     * Also, if one payment fails, it will have NOT_PERFORMED as status.
     * It is also possible that a payment fails some static validation.
     * If this happens, the payments which fail will have a corresponding status.
     * So, there is no way to check whether all payments were performed. You have to check all statuses.
     *
     * @params Array $paymentsCollection
     * @param $paymentsCollection
     * @throws BitcoinReserve_InvalidParametersError
     * @return BitcoinReserve_PaymentResult
     */
	public static function doMassPayment($paymentsCollection) {
	
		// LOG
		if (self::$log) {
			BitcoinReserve_Logger::instance()->info("CALL API METHOD: BitcoinReserve_PaymentService::doMassPayment");
			BitcoinReserve_Logger::instance()->info("PARAMS: ".var_export($paymentsCollection, true).PHP_EOL);
		}
		
		if (!is_array($paymentsCollection)) {
			throw new BitcoinReserve_InvalidParametersError("Param paymentsCollection must be an array of array.");
		}		
	
		$paymentResultCollection = array();
	
		foreach($paymentsCollection as $paymentKey => $params) {
			
			if (!is_array($params)) {
				throw new BitcoinReserve_InvalidParametersError("Invalid payment data. Each payment data in payment collection must be an array.");
			}			
	
			/* List of available params:
			 * $amount = $params['amount'];
			 * $currency = $params['currency'];
			 * $description = $params['description'];
			 * $toMember = $params['toMember'];
			 */
			
			try {
			
				$paymentResultCollection[$paymentKey] = self::doPayment($params);
			
			} catch (Exception $e) {

                // LOG
                if (self::$log) {
                    BitcoinReserve_Logger::instance()->critical("EXCEPTION: ".$e->getMessage());
                }
			
				$paymentResultNotPerformed = new BitcoinReserve_PaymentResult();
				$paymentResultNotPerformed->setStatus(BitcoinReserve_PaymentResult::STATUS_NOT_PERFORMED);
				
				$paymentResultCollection[$paymentKey] = $paymentResultNotPerformed;
				
			}
		}
	
		// LOG
		if (self::$log) {
			BitcoinReserve_Logger::instance()->info("API RESPONSE: ".PHP_EOL.var_export($paymentResultCollection, true));
		}
	
		return $paymentResultCollection;
	}	
}