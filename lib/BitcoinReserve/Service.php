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
abstract class BitcoinReserve_Service {
	
	const BTC = 'BTC';
	const USD = 'USD';
	
	// Currency list
	public static $CURRENCIES = array(
			self::BTC => self::BTC,
			self::USD => self::USD,
	);	
	
	/**
	 * @var boolean
	 */
	public static $debug = true;
	
	/**
	 * @var boolean
	 */
	public static $log = true;

	/**
	 * @var string The last debug info in text plain
	 */
	public static $lastDebugInfoTextPlain = '';
	
	/**
	 * @var string The last debug info in html
	 */
	public static $lastDebugInfoHtml = '';

    /**
     * Converts Cyclos Soap Exception into BitcoinReserve Exception class.
     *
     * @param \SoapFault $soapFault
     * @throws BitcoinReserve_AuthenticationError
     * @throws BitcoinReserve_Error
     * @throws BitcoinReserve_InvalidParametersError
     */
	protected static function mapException(\SoapFault $soapFault) {
		
		switch ($soapFault->faultcode) {
			case BitcoinReserve_Error::SOAP_ERROR_INVALID_CREDENTIALS:
				throw new BitcoinReserve_AuthenticationError("Soap Error. Faultcode: ".$soapFault->faultcode." Faultstring: ".$soapFault->faultstring);
				break;
			case BitcoinReserve_Error::SOAP_ERROR_INVALID_PARAMETER:
				throw new BitcoinReserve_InvalidParametersError("Soap Error. Faultcode: ".$soapFault->faultcode." Faultstring: ".$soapFault->faultstring);
				break;
			case BitcoinReserve_Error::SOAP_ERROR_INVALID_PARAMETERS:
				throw new BitcoinReserve_InvalidParametersError("Soap Error. Faultcode: ".$soapFault->faultcode." Faultstring: ".$soapFault->faultstring);
				break;
			default:
				throw new BitcoinReserve_Error("Soap Error. Faultcode: ".$soapFault->faultcode." Faultstring:".$soapFault->faultstring);
				break;
		}
	}
	
	/**
	 *
	 */
	public static function getLastDebugInfoTextPlain() {
		return self::$lastDebugInfoTextPlain;
	}	
	
	/**
	 * 
	 * @param string $debugInfo
	 */
	public static function setLastDebugInfoTextPlain($debugInfo) {
		self::$lastDebugInfoTextPlain = $debugInfo;
	}
	
	/**
	 *
	 */
	public static function getLastDebugInfoHtml() {
		return self::$lastDebugInfoHtml;
	}	
	
	/**
	 * 
	 * @param string $debugInfo
	 */
	public static function setLastDebugInfoHtml($debugInfo) {
		self::$lastDebugInfoHtml = $debugInfo;
	}	

	/**
	 * Generate debug info from the last soap call.
	 * 
	 * @param XXXWsdlClass $service
	 * return void
	 */
	public static function generateDebugInfo($service) {

		$lastRequestHeaders = var_export($service->getLastRequestHeaders(), true);
		$lastRequest = var_export($service->getLastRequest(), true);
		$lastResponseHeaders = var_export($service->getLastResponseHeaders(), true);
		$lastResponse = var_export($service->getLastResponse(), true);
		$result = var_export($service->getResult(), true);

		$lastRequestHeadersHtml = htmlentities($lastRequestHeaders);
		$lastRequestHtml = htmlentities($lastRequest);
		$lastResponseHeadersHtml = htmlentities($lastResponseHeaders);
		$lastResponseHtml = htmlentities($lastResponse);
		$resultHtml = htmlentities($result);
		
		// DEBUG
		$debugInfo = '';
		$debugInfo .= "====== REQUEST HEADERS =====" . PHP_EOL;
		$debugInfo .= "<pre>" . PHP_EOL . $lastRequestHeaders . PHP_EOL . "</pre>" . PHP_EOL;
		$debugInfo .= "========= REQUEST ==========" . PHP_EOL;
		$debugInfo .= "<pre>" . PHP_EOL . $lastRequest . PHP_EOL . "</pre>" . PHP_EOL;
		$debugInfo .= "========= RESPONSE HEADERS =========" . PHP_EOL;
		$debugInfo .= "<pre>" . PHP_EOL . $lastResponseHeaders . PHP_EOL . "</pre>" . PHP_EOL;
		$debugInfo .= "========= RESPONSE =========" . PHP_EOL;
		$debugInfo .= "<pre>" . PHP_EOL . $lastResponse . PHP_EOL . "</pre>" . PHP_EOL;
		$debugInfo .= "========= RESPONSE OBJECT =========" . PHP_EOL;
		$debugInfo .= "<pre>" . PHP_EOL . $result . PHP_EOL . "</pre>" . PHP_EOL;
	
		self::setLastDebugInfoTextPlain($debugInfo);
		
		// DEBUG html
		$debugInfoHtml = '';
		$debugInfoHtml .= "====== REQUEST HEADERS =====" . PHP_EOL;
		$debugInfoHtml .= "<pre>" . PHP_EOL . $lastRequestHeadersHtml . PHP_EOL . "</pre>" . PHP_EOL;
		$debugInfoHtml .= "========= REQUEST ==========" . PHP_EOL;
		$debugInfoHtml .= "<pre>" . PHP_EOL . $lastRequestHtml . PHP_EOL . "</pre>" . PHP_EOL;
		$debugInfoHtml .= "========= RESPONSE HEADERS =========" . PHP_EOL;
		$debugInfoHtml .= "<pre>" . PHP_EOL . $lastResponseHeadersHtml . PHP_EOL . "</pre>" . PHP_EOL;
		$debugInfoHtml .= "========= RESPONSE =========" . PHP_EOL;
		$debugInfoHtml .= "<pre>" . PHP_EOL . $lastResponseHtml . PHP_EOL . "</pre>" . PHP_EOL;
		$debugInfoHtml .= "========= RESPONSE OBJECT =========" . PHP_EOL;
		$debugInfoHtml .= "<pre>" . PHP_EOL . $resultHtml . PHP_EOL . "</pre>" . PHP_EOL;
		
		self::setLastDebugInfoHtml($debugInfoHtml);		
	}
	
	/**
	 * 
	 * @param boolean $html
	 */
	public static function getLastDebugInfo($html=true) {
		if ($html) {
			return self::$lastDebugInfoHtml;
		} else {
			return self::$lastDebugInfoTextPlain;
		}
	}
	
	/**
	 * Alias for getLastDebugInfo.
	 * @param boolean $html
	 */
	public static function getDebugInfo($html=true) {
		return self::getLastDebugInfo($html);
	}	
	
	/**
	 * 
	 * @param BitcoinReserveWsdlClass $service
	 * @param boolean $html
	 * @param boolean $toString
	 */
	public static function printDebugInfo(BitcoinReserveWsdlClass $service, $html=true, $toString=false) {
		
		if ($toString) {
			// Return
			if ($html) {
				return self::$lastDebugInfoHtml;
			} else {  
				return self::$lastDebugInfoTextPlain;
			}
		} else {
			// Echo
			if ($html) {			
				echo self::$lastDebugInfoHtml;
			} else {
				echo self::$lastDebugInfoTextPlain;
			}
		}
	}
	
	/**
	 * Get stream context if peer certificate verification is enabled.
	 */
	public static function getContext() {

		$context = null;

        //return $context;
		
		if (BitcoinReserve::getVerifySslCerts()) {
				
			$cafilePath = BitcoinReserve::getCaBundlePath();
				
			if (empty($cafilePath)) {
		
				// Use default path
		
				$currentPath = dirname(__FILE__);
				$cafilePath = $currentPath.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'ca-bundle.crt';
				// CA file without bitcoinreserve certificate. For testing.
				//$cafilePath = $currentPath.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'ca-bundle-test-failure.crt';
			}
				
			// To use local cert
			//$wsdl[AccountWebWsdlClass::WSDL_LOCAL_CERT] = $cafilePath;
			
			// Check you client: https://www.howsmyssl.com/

			// Ciphers recommended by Mozilla.
			// https://wiki.mozilla.org/Security/Server_Side_TLS#Recommended_Ciphersuite
			$ciphers = implode(':', array(
				'ECDHE-RSA-AES128-GCM-SHA256',
				'ECDHE-ECDSA-AES128-GCM-SHA256',
				'ECDHE-RSA-AES256-GCM-SHA384',
				'ECDHE-ECDSA-AES256-GCM-SHA384',
				'DHE-RSA-AES128-GCM-SHA256',
				'DHE-DSS-AES128-GCM-SHA256',
				'kEDH+AESGCM',
				'ECDHE-RSA-AES128-SHA256',
				'ECDHE-ECDSA-AES128-SHA256',
				'ECDHE-RSA-AES128-SHA',
				'ECDHE-ECDSA-AES128-SHA',
				'ECDHE-RSA-AES256-SHA384',
				'ECDHE-ECDSA-AES256-SHA384',
				'ECDHE-RSA-AES256-SHA',
				'ECDHE-ECDSA-AES256-SHA',
				'DHE-RSA-AES128-SHA256',
				'DHE-RSA-AES128-SHA',
				'DHE-DSS-AES128-SHA256',
				'DHE-RSA-AES256-SHA256',
				'DHE-DSS-AES256-SHA',
				'DHE-RSA-AES256-SHA',
				'!aNULL',
				'!eNULL',
				'!EXPORT',
				'!DES',
				'!RC4',
				'!3DES',
				'!MD5',
				'!PSK',	
			));
			
			// http://phpsecurity.readthedocs.org/en/latest/Transport-Layer-Security-(HTTPS-SSL-and-TLS).html
			$contextOptions = array(
				'ssl' => array(
					'verify_peer'   		=> true,
					'cafile' 				=> $cafilePath,
					'verify_depth'  		=> 5,
					'CN_match' 				=> '*.' . BitcoinReserve::getApiDomain(),
					'disable_compression' 	=> true,
					'SNI_enabled'         	=> true,
					'ciphers'				=> $ciphers,
				)
			);			
				
			$context = stream_context_create($contextOptions);
		}

		return $context;
	}	
		
}
