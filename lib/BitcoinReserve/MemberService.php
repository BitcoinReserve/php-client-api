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
 * @package bitcoin-reserve-php
 * @category Service
 *
 */
class BitcoinReserve_MemberService extends BitcoinReserve_Service {
	
	/**
	 * @var string
	 */
	protected static $serviceUrl = '/members?wsdl';
	
	public static function getServiceUrl() {
		return self::$serviceUrl;
	}
	
	/**
	 * Return WSDL options array.
	 * @return Array
	 */
	protected static function getWsdlOptions() {
		
		$wsdl = array();
		$wsdl[MemberWebWsdlClass::WSDL_URL] = BitcoinReserve::$apiBase.self::getServiceUrl();
		
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
     * Given a user identifier, returns a member.
     *
     * @param string $accountNumber
     * @throws Exception
     * @return BitcoinReserve_Member
     */
	public static function loadByAccountNumber($accountNumber) {

		// LOG
		if (self::$log) {
			BitcoinReserve_Logger::instance()->info("CALL API METHOD: BitcoinReserve_MemberService::loadByAccountNumber");
			BitcoinReserve_Logger::instance()->info("PARAMS: ".var_export($accountNumber, true).PHP_EOL);
		}
		
		// Service
		$memberWebServiceLoad = new MemberWebServiceLoad(self::getWsdlOptions());
		
		$memberWebStructLoadByAccountNumber = new MemberWebStructLoadByAccountNumber($accountNumber);
		
		$member = null;
		
		try {
				
			// LOG
			if (self::$log) {
				BitcoinReserve_Logger::instance()->info("CALL SOAP METHOD: MemberWebServiceLoad::loadByAccountNumber");
				BitcoinReserve_Logger::instance()->info("PARAMS: ".var_export($memberWebStructLoadByAccountNumber, true).PHP_EOL);
			}
		
			$memberWebServiceLoad->loadByAccountNumber($memberWebStructLoadByAccountNumber);
		
			$memberWebStructLoadByAccountNumberResponse = $memberWebServiceLoad->getResult();
			
			// DEBUG
			//self::printDebugInfo($memberWebServiceLoad);
			
			// DEBUG
			//var_dump($memberWebStructLoadByAccountNumberResponse);
			
			if (!$memberWebStructLoadByAccountNumberResponse) {
			
				// Error
				$soapFault = $memberWebServiceLoad->getLastErrorForMethod('MemberWebServiceLoad::loadByAccountNumber');
			
				// DEBUG
				//var_dump($soapFault);
			
				self::mapException($soapFault);
			}			
		
			// It returns MemberWebStructMember instance
			$memberWebStructMember = $memberWebStructLoadByAccountNumberResponse->return;
				
			// DEBUG
			//var_dump($memberWebStructMember);
		
			if (self::$debug) {
				self::generateDebugInfo($memberWebServiceLoad);
			}
				
			// DEBUG
			//self::printDebugInfo($memberWebServiceLoad);
				
			// Map MemberWebStructMember to BitcoinReserve_Member
			$member = BitcoinReserve_MemberMapper::mapMember($memberWebStructMember);
				
			// LOG
			if (self::$log) {
				BitcoinReserve_Logger::instance()->info("SOAP RESPONSE: ".PHP_EOL.var_export($memberWebStructLoadByAccountNumberResponse, true));
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
			BitcoinReserve_Logger::instance()->info("API RESPONSE: ".PHP_EOL.var_export($member, true));
		}
		
		return $member;		
	}

    /**
     * Given a user display name, returns a member.
     *
     * @param string $displayName
     * @throws Exception
     * @return BitcoinReserve_Member
     */
    public static function loadByDisplayName($displayName) {

        // LOG
        if (self::$log) {
            BitcoinReserve_Logger::instance()->info("CALL API METHOD: BitcoinReserve_MemberService::loadByDisplayName");
            BitcoinReserve_Logger::instance()->info("PARAMS: ".var_export($displayName, true).PHP_EOL);
        }

        // Service
        $memberWebServiceLoad = new MemberWebServiceLoad(self::getWsdlOptions());

        $memberWebStructLoadByDisplayName = new MemberWebStructLoadByDisplayName($displayName);

        $member = null;

        try {

            // LOG
            if (self::$log) {
                BitcoinReserve_Logger::instance()->info("CALL SOAP METHOD: MemberWebServiceLoad::loadByDisplayName");
                BitcoinReserve_Logger::instance()->info("PARAMS: ".var_export($memberWebStructLoadByDisplayName, true).PHP_EOL);
            }

            $memberWebServiceLoad->loadByDisplayName($memberWebStructLoadByDisplayName);

            $memberWebStructLoadByDisplayNameResponse = $memberWebServiceLoad->getResult();

            // DEBUG
            //self::printDebugInfo($memberWebServiceLoad);

            // DEBUG
            //var_dump($memberWebStructLoadByDisplayNameResponse);

            if (!$memberWebStructLoadByDisplayNameResponse) {

                // Error
                $soapFault = $memberWebServiceLoad->getLastErrorForMethod('MemberWebServiceLoad::loadByDisplayName');

                // DEBUG
                //var_dump($soapFault);

                self::mapException($soapFault);
            }

            // It returns MemberWebStructMember instance
            $memberWebStructMember = $memberWebStructLoadByDisplayNameResponse->return;

            // DEBUG
            //var_dump($memberWebStructMember);

            if (self::$debug) {
                self::generateDebugInfo($memberWebServiceLoad);
            }

            // DEBUG
            //self::printDebugInfo($memberWebServiceLoad);

            // Map MemberWebStructMember to BitcoinReserve_Member
            $member = BitcoinReserve_MemberMapper::mapMember($memberWebStructMember);

            // LOG
            if (self::$log) {
                BitcoinReserve_Logger::instance()->info("SOAP RESPONSE: ".PHP_EOL.var_export($memberWebStructLoadByDisplayNameResponse, true));
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
            BitcoinReserve_Logger::instance()->info("API RESPONSE: ".PHP_EOL.var_export($member, true));
        }

        return $member;
    }
}