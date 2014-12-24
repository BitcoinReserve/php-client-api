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
class BitcoinReserve_AccountService extends BitcoinReserve_Service {
	
	/**
	 * @var string
	 */
	//protected static $serviceUrl = '/account.xml'; // DEV
	protected static $serviceUrl = '/account?wsdl';
	
	public static function getServiceUrl() {
		return self::$serviceUrl;
	}
	
	/**
	 * Return WSDL options array.
	 * @return Array
	 */
	protected static function getWsdlOptions() {
		
		// DEBUG
		//echo "ServiceUrl: " . BitcoinReserve::$apiBase.self::getServiceUrl();
		//die("DEBUG BitcoinReserve_AccountService::getWsdlOptions");
		
		$wsdl = array();
		$wsdl[AccountWebWsdlClass::WSDL_URL] = BitcoinReserve::$apiBase.self::getServiceUrl();
		
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
     * Return an array of BitcoinReserve_MemberAccount owned by the user.
     *
     * PARAMS:
     * string principal OPTIONAL
     *
     * @param array $params |null
     * @throws BitcoinReserve_InvalidParametersError
     * @throws Exception
     * @return Array
     */
	public static function getMemberAccounts($params=null) {
		
		// LOG
		if (self::$log) {
			BitcoinReserve_Logger::instance()->info("CALL API METHOD: BitcoinReserve_AccountService::getMemberAccounts");
			BitcoinReserve_Logger::instance()->info("PARAMS: ".var_export($params, true).PHP_EOL);
		}

		if (!is_null($params) && !is_array($params)) {
			throw new BitcoinReserve_InvalidParametersError("Param params must be an array.");
		}		

		// Service
		$accountWebServiceGet = new AccountWebServiceGet(self::getWsdlOptions());

        $memberAccountsArray = array();
		
		try {

			// LOG
			if (self::$log) {
				BitcoinReserve_Logger::instance()->info("CALL SOAP METHOD: AccountWebServiceGet::getMemberAccounts");
                BitcoinReserve_Logger::instance()->info("PARAMS: EMPTY".PHP_EOL);
			}

            $accountWebServiceGet->getMemberAccounts();

			$accountWebStructGetMemberAccountsResponse = $accountWebServiceGet->getResult();

			// DEBUG
			//self::printDebugInfo($accountWebServiceGet);

			// DEBUG
			//var_dump($accountWebStructGetMemberAccountsResponse);

			if (!$accountWebStructGetMemberAccountsResponse) {

				// Error
				$soapFault = $accountWebServiceGet->getLastErrorForMethod('AccountWebServiceGet::getMemberAccounts');

				// DEBUG
				//var_dump($soapFault);

				self::mapException($soapFault);
			}

			// It returns Array of AccountWebStructMemberAccount
			$memberAccountsArraySoap = $accountWebStructGetMemberAccountsResponse->return;

			// DEBUG
			//var_dump($memberAccountsArraySoap);

			if (self::$debug) {
				self::generateDebugInfo($accountWebServiceGet);
			}

			// DEBUG
			//self::printDebugInfo($accountWebServiceGet);

			foreach($memberAccountsArraySoap as $accountWebStructMemberAccount) {

				// DEBUG
				//var_dump($accountWebStructMemberAccount);

				// Map AccountWebStructMemberAccount to BitcoinReserve_MemberAccount
				$memberAccountsArray[] = BitcoinReserve_MemberAccountMapper::mapMemberAccount($accountWebStructMemberAccount);
			}

			// LOG
			if (self::$log) {
				BitcoinReserve_Logger::instance()->info("SOAP RESPONSE: ".PHP_EOL.var_export($accountWebStructGetMemberAccountsResponse, true));
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
			BitcoinReserve_Logger::instance()->info("API RESPONSE: ".PHP_EOL.var_export($memberAccountsArray, true));
		}

		return $memberAccountsArray;
	}

    /**
     * Get member's account info. Each member can have two accounts one in BTC and one in USD.
     * Account has the same meaning as wallet in other payment systems.
     *
     * PARAMS:
     * string currency BTC or USD
     * string principal OPTIONAL
     * string credentials OPTIONAL
     *
     * @param $params array
     * @throws BitcoinReserve_Error
     * @throws BitcoinReserve_InvalidParametersError
     * @throws Exception
     * @return BitcoinReserve_AccountStatus
     */
	public static function getAccountStatus($params) {

		// LOG
		if (self::$log) {
			BitcoinReserve_Logger::instance()->info("CALL API METHOD: BitcoinReserve_AccountService::getAccountStatus");
			BitcoinReserve_Logger::instance()->info("PARAMS: ".var_export($params, true).PHP_EOL);
		}

		if (!is_array($params)) {
			throw new BitcoinReserve_InvalidParametersError("Param params must be an array.");
		}

		$currency = $params['currency'];

		// (string): The credentials of the member.
		// If credentials are specified then this value overwrites the API global value
		$transactionPwd = null;
		if (!empty($params['transactionPwd'])) {
            $transactionPwd = $params['transactionPwd'];
		} else {
			// Default API value used.
            $transactionPwd = BitcoinReserve::getTransactionPwd();
		}

		if (!BitcoinReserve_Currency::isValid($currency)) {
			throw new BitcoinReserve_Error("BitcoinReserve_AccountService::getAccountStatus. Invalid currency: $currency. Valid values: ".BitcoinReserve_Currency::getValidCurrenciesSymbols().".");
		}

		// Service
		$accountWebServiceSearch = new AccountWebServiceSearch(self::getWsdlOptions());

        // Params
        $accountWebStructAccountHistorySearchParameters = new AccountWebStructAccountHistorySearchParameters();

        // AccountWebStructAccountHistorySearchParameters extends AccountWebStructSearchParameters

        // From AccountWebStructSearchParameters class
        $accountWebStructAccountHistorySearchParameters->setCurrentPage(0);
        $accountWebStructAccountHistorySearchParameters->setPageSize(0); // If set to 0 will return the account status only.

        // From AccountWebStructAccountHistorySearchParameters class
        $accountWebStructAccountHistorySearchParameters->setTransactionPwd($transactionPwd);

        if (!empty($accountTypeId)) {
            $accountWebStructAccountHistorySearchParameters->setAccountTypeId($accountTypeId);
        }
        if (!empty($currency)) {
            $accountWebStructAccountHistorySearchParameters->setCurrency($currency);
        }

		$accountWebStructSearchAccountHistory = new AccountWebStructSearchAccountHistory($accountWebStructAccountHistorySearchParameters);

		try {

			// LOG
			if (self::$log) {
				BitcoinReserve_Logger::instance()->info("CALL SOAP METHOD: AccountWebServiceSearch::searchAccountHistory");
				BitcoinReserve_Logger::instance()->info("PARAMS: ".var_export($accountWebStructSearchAccountHistory, true).PHP_EOL);
			}

			$accountWebServiceSearch->searchAccountHistory($accountWebStructSearchAccountHistory);

			$accountWebStructSearchAccountHistoryResponse = $accountWebServiceSearch->getResult();

			// DEBUG
			if (self::$debug) {
				self::generateDebugInfo($accountWebServiceSearch);
			}

			// DEBUG
			//self::printDebugInfo($accountWebServiceSearch);

			// DEBUG
			//var_dump($accountWebStructSearchAccountHistoryResponse);

			if (!$accountWebStructSearchAccountHistoryResponse) {

				// Error
				$soapFault = $accountWebServiceSearch->getLastErrorForMethod('AccountWebServiceSearch::searchAccountHistory');

				// DEBUG
				//var_dump($soapFault);

				self::mapException($soapFault);
			}

			$accountWebStructAccountHistoryResultPage = $accountWebStructSearchAccountHistoryResponse->return;

			$bitcoinReserveStructAccountStatus = $accountWebStructAccountHistoryResultPage->getAccountStatus();

			// Map BitcoinReserveStructAccountStatus to BitcoinReserve_AccountStatus

			$accountStatus = BitcoinReserve_AccountStatusMapper::mapAccountStatus($bitcoinReserveStructAccountStatus);

			// LOG
			if (self::$log) {
				BitcoinReserve_Logger::instance()->info("SOAP RESPONSE: ".PHP_EOL.var_export($accountWebStructSearchAccountHistoryResponse, true));
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
			BitcoinReserve_Logger::instance()->info("API RESPONSE: ".PHP_EOL.var_export($accountStatus, true));
		}

		return $accountStatus;
	}

    /**
     * The same functionality as getAccountStatus but it returns a collection with
     * the user's all account statuses.
     *
     * PARAMS
     * string principal OPTIONAL
     * string credentials OPTIONAL
     *
     * @param array $params
     * @throws BitcoinReserve_InvalidParametersError
     * @throws Exception
     * @return array|null
     */
	public static function getAllAccountsStatus($params=null) {

		// LOG
		if (self::$log) {
			BitcoinReserve_Logger::instance()->info("CALL API METHOD: BitcoinReserve_AccountService::getAllAccountsStatus");
			BitcoinReserve_Logger::instance()->info("PARAMS: ".var_export($params, true).PHP_EOL);
		}

		if (!is_null($params) && !is_array($params)) {
			throw new BitcoinReserve_InvalidParametersError("Param params must be an array.");
		}

		$accountStatusArray = null;

		try {

			$getMemberAccountsParams = array();
            if (isset($params['transactionPwd'])) $getMemberAccountsParams['transactionPwd'] = $params['transactionPwd'];

			// Get member´s accounts list
			$memberAccounts = BitcoinReserve_AccountService::getMemberAccounts($getMemberAccountsParams);

			// Array of BitcoinReserve_AccountStatus for each member's account (USD and BTC)
			$accountStatusArray = array();

			foreach($memberAccounts as $memberAccount) {

				$currency = $memberAccount->getCurrency();

				$getAccountStatusParams = array();
                if (isset($params['transactionPwd'])) $getAccountStatusParams['transactionPwd'] = $params['transactionPwd'];
				$getAccountStatusParams['currency'] = $currency;

				$accountStatusArray[$currency] = BitcoinReserve_AccountService::getAccountStatus($getAccountStatusParams);
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
			BitcoinReserve_Logger::instance()->info("API RESPONSE: ".PHP_EOL.var_export($accountStatusArray, true));
		}

		return $accountStatusArray;
	}

    /**
     * Returns both the status (balances, limits...) and account history (credits and debits) for a given member account.
     *
     * @param Array $params
     * @throws BitcoinReserve_Error
     * @throws BitcoinReserve_InvalidParametersError
     * @throws Exception
     * @return BitcoinReserve_AccountHistoryResultPage
     */
	public static function searchAccountHistory($params) {

		// LOG
		if (self::$log) {
			BitcoinReserve_Logger::instance()->info("CALL API METHOD: BitcoinReserve_AccountService::searchAccountHistory");
            BitcoinReserve_Logger::instance()->info("PARAMS: ".var_export($params, true).PHP_EOL);
		}

		if (!is_array($params)) {
			throw new BitcoinReserve_InvalidParametersError("Param params must be an array.");
		}

		// Optional
		// (number): The current query page, starting at zero. Defaults to 0.
		if (!empty($params['currentPage'])) {
			$currentPage = $params['currentPage'];
		} else {
			$currentPage = 0;
		}

		// Optional
		// (number): The number of records per page. Defaults to 10. If set to 0 will return the account status only.
		if (!empty($params['pageSize'])) {
			$pageSize = $params['pageSize'];
		} else {
			$pageSize = 10;
		}

		// credentials (string): The credentials of the member.
		// Only required if the service client is not restricted to a member and set to require credentials.
		$transactionPwd = null;
		if (!empty($params['transactionPwd'])) {
			$transactionPwd = $params['transactionPwd'];
		} else {
			// Default API value used.
			$transactionPwd = BitcoinReserve::getTransactionPwd();
		}

		// Optional
		// (integer): The account type internal identifier. When null or zero is passed, first the currency is considered, returning an account of that currency, or, if it was not set, the default account type is assumed.
        $accountTypeId = null;
        if (!empty($params['accountTypeId'])) {
			$accountTypeId = $params['accountTypeId'];
		}

		// Optional
		// currency (string): The currency (either symbol or id) of the member account. Optional. Ignored when accountTypeId is passed.
        $currency = null;
        if (!empty($params['currency'])) {
			$currency = $params['currency'];
		}

		// Optional
		// (date): The begin date for payments. Optional.
        $beginDate = null;
		if (!empty($params['beginDate'])) {
			$beginDate = $params['beginDate'];
		}

		// Optional
		// (date): The end date for payments. Optional.
        $endDate = null;
		if (!empty($params['endDate'])) {
			$endDate = $params['endDate'];
		}

		// Optional
		// (boolean): If true then sort the transaction list in order descending according to the date.
        $reverseOrder = null;
		if (!empty($params['reverseOrder'])) {
			$reverseOrder = $params['reverseOrder'];
		}

		if (!BitcoinReserve_Currency::isValid($currency)) {
			throw new BitcoinReserve_Error("BitcoinReserve_AccountService::searchAccountHistory. Invalid currency: $currency. Valid values: ".BitcoinReserve_Currency::getValidCurrenciesSymbols().".");
		}

		// Service
		$accountWebServiceSearch = new AccountWebServiceSearch(self::getWsdlOptions());

		// Params
		$accountWebStructAccountHistorySearchParameters = new AccountWebStructAccountHistorySearchParameters();

		// AccountWebStructAccountHistorySearchParameters extends AccountWebStructSearchParameters

		// From AccountWebStructSearchParameters class
		$accountWebStructAccountHistorySearchParameters->setCurrentPage($currentPage);
		$accountWebStructAccountHistorySearchParameters->setPageSize($pageSize); // If set to 0 will return the account status only.

		// From AccountWebStructAccountHistorySearchParameters class
        $accountWebStructAccountHistorySearchParameters->setTransactionPwd($transactionPwd);

		if (!empty($accountTypeId)) {
			$accountWebStructAccountHistorySearchParameters->setAccountTypeId($accountTypeId);
		}
		if (!empty($currency)) {
			$accountWebStructAccountHistorySearchParameters->setCurrency($currency);
		}
        if (!empty($beginDate)) {
            $accountWebStructAccountHistorySearchParameters->setBeginDate($beginDate);
        }
        if (!empty($endDate)) {
            $accountWebStructAccountHistorySearchParameters->setEndDate($endDate);
        }
        if (!empty($reverseOrder)) {
            $accountWebStructAccountHistorySearchParameters->setReverseOrder($reverseOrder);
        }

		// DEBUG
		//var_dump($accountWebStructAccountHistorySearchParameters);

		$accountWebStructSearchAccountHistory = new AccountWebStructSearchAccountHistory($accountWebStructAccountHistorySearchParameters);

		$accountHistoryResultPage = null;

		try {

			// LOG
			if (self::$log) {
				BitcoinReserve_Logger::instance()->info("CALL SOAP METHOD: AccountWebServiceSearch::searchAccountHistory");
				BitcoinReserve_Logger::instance()->info("PARAMS: ".var_export($accountWebStructSearchAccountHistory, true).PHP_EOL);
			}

			$accountWebServiceSearch->searchAccountHistory($accountWebStructSearchAccountHistory);

			$accountWebStructSearchAccountHistoryResponse = $accountWebServiceSearch->getResult();

			// DEBUG
			if (self::$debug) {
				self::generateDebugInfo($accountWebServiceSearch);
			}

			// DEBUG
			//self::printDebugInfo($accountWebServiceSearch);

			// DEBUG
			//var_dump($accountWebStructSearchAccountHistoryResponse);

			if (!$accountWebStructSearchAccountHistoryResponse) {

				// Error
				$soapFault = $accountWebServiceSearch->getLastErrorForMethod('AccountWebServiceSearch::searchAccountHistory');

				// DEBUG
				//var_dump($soapFault);

				self::mapException($soapFault);
			}

			$accountWebStructAccountHistoryResultPage = $accountWebStructSearchAccountHistoryResponse->return;

			// Map AccountWebStructAccountHistoryResultPage to BitcoinReserve_AccountHistoryResultPage
			$accountHistoryResultPage = BitcoinReserve_AccountHistoryResultPageMapper::mapAccountHistoryResultPage($accountWebStructAccountHistoryResultPage);

			// LOG
			if (self::$log) {
				BitcoinReserve_Logger::instance()->info("SOAP RESPONSE: ".PHP_EOL.var_export($accountWebStructSearchAccountHistoryResponse, true));
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
			BitcoinReserve_Logger::instance()->info("API RESPONSE: ".PHP_EOL.var_export($accountHistoryResultPage, true));
		}

		return $accountHistoryResultPage;
	}

	/**
	 * Returns a single transfer, given it's identifier, or null when not found.
	 *
	 * @param array $params
	 * @return BitcoinReserve_Transfer|null
	 */
	public static function loadTransfer($params) {

		// LOG
		if (self::$log) {
			BitcoinReserve_Logger::instance()->info("CALL API METHOD: BitcoinReserve_AccountService::loadTransfer");
			BitcoinReserve_Logger::instance()->info("PARAMS: params: ".print_r($params, true).PHP_EOL);
		}

		if (!is_array($params)) {
			throw new BitcoinReserve_InvalidParametersError("Param params must be an array.");
		}

		// The transfer identifier. Required.
		$transferId = $params['transferId'];

        $transactionPwd = null;
        if (!empty($params['transactionPwd'])) {
            $transactionPwd = $params['transactionPwd'];
        } else {
            // Default API value used.
            $transactionPwd = BitcoinReserve::getTransactionPwd();
        }        

		// Service
		$accountWebServiceLoad = new AccountWebServiceLoad(self::getWsdlOptions());

		// Params
		$accountWebStructLoadTransferParameters = new AccountWebStructLoadTransferParameters();

		// AccountWebStructLoadTransferParameters extends AccountWebStructPrincipalParameters

		// From AccountWebStructLoadTransferParameters class
		$accountWebStructLoadTransferParameters->setTransferId($transferId);
        $accountWebStructLoadTransferParameters->setTransactionPwd($transactionPwd);

		// DEBUG
		//var_dump($accountWebStructLoadTransferParameters);
	
		$accountWebStructLoadTransfer = new AccountWebStructLoadTransfer($accountWebStructLoadTransferParameters);
	
		$transfer = null;
	
		try {
	
			// LOG
			if (self::$log) {
				BitcoinReserve_Logger::instance()->info("CALL SOAP METHOD: AccountWebServiceLoad::loadTransfer");
				BitcoinReserve_Logger::instance()->info("PARAMS: ".var_export($accountWebStructLoadTransfer, true).PHP_EOL);
			}
	
			$accountWebServiceLoad->loadTransfer($accountWebStructLoadTransfer);
	
			$accountWebStructLoadTransferResponse = $accountWebServiceLoad->getResult();
	
			// DEBUG
			if (self::$debug) {
				self::generateDebugInfo($accountWebServiceLoad);
			}
	
			// DEBUG
			//self::printDebugInfo($accountWebServiceLoad);
	
			// DEBUG
			//var_dump($accountWebStructLoadTransferResponse);
	
			if (!$accountWebStructLoadTransferResponse) {
	
				// Error
				$soapFault = $accountWebServiceLoad->getLastErrorForMethod('AccountWebServiceLoad::loadTransfer');
	
				// DEBUG
				//var_dump($soapFault);
				
				self::mapException($soapFault);
			}
	
			$accountWebStructTransfer = $accountWebStructLoadTransferResponse->return;
	
			// Map AccountWebStructTransfer to BitcoinReserve_Transfer
			$transfer = BitcoinReserve_TransferMapper::mapTransfer($accountWebStructTransfer);
	
			// LOG
			if (self::$log) {
				BitcoinReserve_Logger::instance()->info("SOAP RESPONSE: ".PHP_EOL.var_export($accountWebStructLoadTransferResponse, true));
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
			BitcoinReserve_Logger::instance()->info("API RESPONSE: ".PHP_EOL.var_export($transfer, true));
		}
	
		return $transfer;
	}	
}