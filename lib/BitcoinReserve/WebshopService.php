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
class BitcoinReserve_WebshopService extends BitcoinReserve_Service {
	
	/**
	 * @var string
	 */
	protected static $serviceUrl = '/webshop?wsdl';
	
	/**
	 * @var string
	 */
	protected static $paymentUrl = '/do/webshop/payment';
	
	public static function getServiceUrl() {
		return self::$serviceUrl;
	}
	
	/**
	 * Return WSDL options array.
	 * @return Array
	 */
	protected static function getWsdlOptions() {
		
		$wsdl = array();
		$wsdl[WebShopWebWsdlClass::WSDL_URL] = BitcoinReserve::$apiBase.self::getServiceUrl();
		$wsdl[WebShopWebWsdlClass::WSDL_CACHE_WSDL] = false;
		
		// basic http authentication
		$wsdl[WebShopWebWsdlClass::WSDL_LOGIN] = BitcoinReserve::getUsername();
		$wsdl[WebShopWebWsdlClass::WSDL_PASSWORD] = BitcoinReserve::getApiKey();	
		
		$context = self::getContext();
		if (!is_null($context)) {
			$wsdl[AccountWebWsdlClass::WSDL_STREAM_CONTEXT] = $context;
		}		

		return $wsdl;
	}

    /**
     * Generate new ticket for payment. Ticket will be used to identify payment when user is redirected to Bitcoin Reserve site.
     *
     * @param $params
     * @throws BitcoinReserve_InvalidParametersError
     * @throws Exception
     * @return string
     */
	public static function generateTicket($params) {
		
		// LOG
		if (self::$log) {
			BitcoinReserve_Logger::instance()->info("CALL API METHOD: BitcoinReserve_WebshopService::generateTicket");
			BitcoinReserve_Logger::instance()->info("PARAMS: ".var_export($params, true).PHP_EOL);
		}
		
		if (!is_array($params)) {
			throw new BitcoinReserve_InvalidParametersError("Param params must be an array.");
		}		
		
		$amount = $params['amount'];
		$currency = $params['currency'];
		$description = $params['description'];
		$clientAddress = $params['clientAddress'];
		$toUsername = $params['toUsername'];
		$returnUrl = $params['returnUrl'];
				
		$webShopWebServiceGenerate = new WebShopWebServiceGenerate(self::getWsdlOptions());
		
		$webShopWebStructGenerateWebShopTicketParams = new WebShopWebStructGenerateWebShopTicketParams();

		$webShopWebStructGenerateWebShopTicketParams->setAmount($amount);
		$webShopWebStructGenerateWebShopTicketParams->setCurrency($currency);
		$webShopWebStructGenerateWebShopTicketParams->setDescription($description);
		$webShopWebStructGenerateWebShopTicketParams->setClientAddress($clientAddress);
		$webShopWebStructGenerateWebShopTicketParams->setToUsername($toUsername);
		$webShopWebStructGenerateWebShopTicketParams->setReturnUrl($returnUrl);
		
		$webShopWebStructGenerateTicket = new WebShopWebStructGenerateTicket($webShopWebStructGenerateWebShopTicketParams);

		$ticket = null;
		
		try {
			
			// LOG
			if (self::$log) {
				BitcoinReserve_Logger::instance()->info("CALL SOAP METHOD: WebShopWebServiceGenerate::generateTicket");
				BitcoinReserve_Logger::instance()->info("PARAMS: ".var_export($webShopWebStructGenerateTicket, true).PHP_EOL);
			}
			
			$webShopWebServiceGenerate->generateTicket($webShopWebStructGenerateTicket);

			$webShopWebStructGenerateTicketResponse = $webShopWebServiceGenerate->getResult();
			
			// DEBUG
			if (self::$debug) {
				self::generateDebugInfo($webShopWebServiceGenerate);
			}
			
			// DEBUG
			//self::printDebugInfo($webShopWebServiceGenerate);			
			
			// DEBUG
			//var_dump($webShopWebStructGenerateTicketResponse);
			
			if (!$webShopWebStructGenerateTicketResponse) {
					
				// Error
				$soapFault = $webShopWebServiceGenerate->getLastErrorForMethod('WebShopWebServiceGenerate::generateTicket');
					
				// DEBUG
				//var_dump($soapFault);
				
				self::mapException($soapFault);
			}			
			
			$ticket = $webShopWebStructGenerateTicketResponse->return;
			
			// LOG
			if (self::$log) {
				BitcoinReserve_Logger::instance()->info("SOAP RESPONSE: ".PHP_EOL.var_export($webShopWebStructGenerateTicketResponse, true));
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
			BitcoinReserve_Logger::instance()->info("API RESPONSE: ".PHP_EOL.var_export($ticket, true));
		}		
		
		return $ticket;
	}
	
	/**
	 * Generate new ticket for payment. Ticket will be used to identify payment when user is redirected to Bitcoin Reserve site.
	 *
	 * @param string $ticket
	 * @return string
	 */	
	public static function getPaymentRedirectUrl($ticket) {
		return BitcoinReserve::$webBase.self::$paymentUrl."?ticket=".$ticket;
	}

    /**
     * Get ticket data.
     *
     * @param string $ticketId
     * @throws Exception
     * @return BitcoinReserve_Ticket
     */
	public static function getTicket($ticketId) {
		
		// LOG
		if (self::$log) {
			BitcoinReserve_Logger::instance()->info("CALL API METHOD: BitcoinReserve_WebshopService::getTicket");
			BitcoinReserve_Logger::instance()->info("PARAMS: ".var_export($ticketId, true).PHP_EOL);
		}		
	
		// Service
		$webShopWebServiceGet = new WebShopWebServiceGet(self::getWsdlOptions());
	
		// Params
		$webShopWebStructGetTicket = new WebShopWebStructGetTicket();
		$webShopWebStructGetTicket->setTicket($ticketId);
		
		$ticket = null;
	
		try {
			
			// LOG
			if (self::$log) {
				BitcoinReserve_Logger::instance()->info("CALL SOAP METHOD: WebShopWebServiceGet::getTicket");
				BitcoinReserve_Logger::instance()->info("PARAMS: ".var_export($webShopWebStructGetTicket, true).PHP_EOL);
			}			
				
			$webShopWebServiceGet->getTicket($webShopWebStructGetTicket);
				
			$webShopWebStructGetTicketResponse = $webShopWebServiceGet->getResult();
			
			// DEBUG
			if (self::$debug) {
				self::generateDebugInfo($webShopWebServiceGet);
			}
				
			// DEBUG
			//self::printDebugInfo($webShopWebServiceGet);
				
			// DEBUG
			//var_dump($webShopWebStructGetTicketResponse);
			
			if (!$webShopWebStructGetTicketResponse) {
			
				// Error
				$soapFault = $webShopWebServiceGet->getLastErrorForMethod('WebShopWebServiceGet::getTicket');
			
				// DEBUG
				//var_dump($soapFault);
			
				self::mapException($soapFault);
			}			
				
			$webShopWebStructWebshopTicket = $webShopWebStructGetTicketResponse->return;
			
			// Map from WebShopWebStructWebshopTicket to BitcoinReserve_Ticket
			$ticket = BitcoinReserve_TicketMapper::mapTicket($webShopWebStructWebshopTicket);

			/* FromMember can be null. It happens when the user cancels the payment. It must be managed by merchant.
			if (is_null($ticket->getFromMember())) {
				throw new Exception("BitcoinReserve_WebshopService::getTicket. FromMember is null.");
			}*/
			
			// LOG
			if (self::$log) {
				BitcoinReserve_Logger::instance()->info("SOAP RESPONSE: ".PHP_EOL.var_export($webShopWebStructGetTicketResponse, true));
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
			BitcoinReserve_Logger::instance()->info("API RESPONSE: ".PHP_EOL.var_export($ticket, true));
		}
	
		return $ticket;
	}

    /**
     * Expire ticket.
     *
     * @param string $ticketId
     * @throws Exception
     * @return BitcoinReserve_Ticket
     */
	public static function expireTicket($ticketId) {
	
		// LOG
		if (self::$log) {
			BitcoinReserve_Logger::instance()->info("CALL API METHOD: BitcoinReserve_WebshopService::expireTicket");
			BitcoinReserve_Logger::instance()->info("PARAMS: ".var_export($ticketId, true).PHP_EOL);
		}
	
		// Service
		$webShopWebServiceExpire = new WebShopWebServiceExpire(self::getWsdlOptions());
	
		// Params
		$webShopWebStructExpireTicket = new WebShopWebStructExpireTicket();
		$webShopWebStructExpireTicket->setTicket($ticketId);
	
		$expired = null;
	
		try {
				
			// LOG
			if (self::$log) {
				BitcoinReserve_Logger::instance()->info("CALL SOAP METHOD: WebShopWebServiceExpire::expireTicket");
				BitcoinReserve_Logger::instance()->info("PARAMS: ".var_export($webShopWebStructExpireTicket, true).PHP_EOL);
			}
	
			$webShopWebServiceExpire->expireTicket($webShopWebStructExpireTicket);
	
			$webShopWebStructExpireTicketResponse = $webShopWebServiceExpire->getResult();
				
			// DEBUG
			if (self::$debug) {
				self::generateDebugInfo($webShopWebServiceExpire);
			}
	
			// DEBUG
			//self::printDebugInfo($webShopWebServiceExpire);
	
			// DEBUG
			//var_dump($webShopWebStructExpireTicketResponse);
				
			if (!$webShopWebStructExpireTicketResponse) {
					
				// Error
				$soapFault = $webShopWebServiceExpire->getLastErrorForMethod('WebShopWebServiceExpire::expireTicket');
					
				// DEBUG
				//var_dump($soapFault);
					
				self::mapException($soapFault);
			}

			// Boolean: tru if ticket has been expired sucesfully.
			$expired = $webShopWebStructExpireTicketResponse->return;
				
			// LOG
			if (self::$log) {
				BitcoinReserve_Logger::instance()->info("SOAP RESPONSE: ".PHP_EOL.var_export($webShopWebStructExpireTicketResponse, true));
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
			BitcoinReserve_Logger::instance()->info("API RESPONSE: ".PHP_EOL.var_export($expired, true));
		}
	
		return $expired;
	}

    /**
     * Get ticket data.
     *
     * @throws Exception
     * @return BitcoinReserve_Ticket
     */
	public static function ticker() {
	
		// LOG
		if (self::$log) {
			BitcoinReserve_Logger::instance()->info("CALL API METHOD: BitcoinReserve_WebshopService::ticker");
		}
	
		// Service
		$webShopWebServiceTicker = new WebShopWebServiceTicker(self::getWsdlOptions());
	
		// Params
		//$webShopWebStructTicker = new WebShopWebStructTicker(); // For the time being no params required.
	
		$ticker = null;
	
		try {
				
			// LOG
			if (self::$log) {
				BitcoinReserve_Logger::instance()->info("CALL SOAP METHOD: WebShopWebServiceGet::getTicket");
				//BitcoinReserve_Logger::instance()->info("PARAMS: ".var_export($webShopWebStructTicker, true).PHP_EOL);
			}
	
			$webShopWebServiceTicker->ticker();
	
			$webShopWebStructTickerResponse = $webShopWebServiceTicker->getResult();
				
			// DEBUG
			if (self::$debug) {
				self::generateDebugInfo($webShopWebServiceTicker);
			}
	
			// DEBUG
			//self::printDebugInfo($webShopWebServiceTicker);
	
			// DEBUG
			//var_dump($webShopWebStructTickerResponse);
				
			if (!$webShopWebStructTickerResponse) {
					
				// Error
				$soapFault = $webShopWebServiceTicker->getLastErrorForMethod('WebShopWebServiceTicker::ticker');
					
				// DEBUG
				//var_dump($soapFault);
					
				self::mapException($soapFault);
			}
	
			$webShopWebStructTickerVO = $webShopWebStructTickerResponse->return;
				
			// Map from WebShopWebStructTickerVO to BitcoinReserve_Ticker
			$ticker = BitcoinReserve_TickerMapper::mapTicker($webShopWebStructTickerVO);
	
			// LOG
			if (self::$log) {
				BitcoinReserve_Logger::instance()->info("SOAP RESPONSE: ".PHP_EOL.var_export($webShopWebStructTickerResponse, true));
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
			BitcoinReserve_Logger::instance()->info("API RESPONSE: ".PHP_EOL.var_export($ticker, true));
		}
	
		return $ticker;
	}	
}