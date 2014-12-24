<?php

/**
 * This file is part of the bitcoin-reserve-php package.
 *
 * (c) Bitcoin Reserve <http://bitcoinreserve.ch/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Tested on PHP 5.3

/*if (!function_exists('curl_init')) {
  throw new Exception('Bitcoin Reserve needs the CURL PHP extension.');
}*/
if (!extension_loaded('soap')) {
	throw new Exception('Bitcoin Reserve needs the SOAP PHP extension.');
}
/*if (!function_exists('json_decode')) {
  throw new Exception('Bitcoin Reserve needs the JSON PHP extension.');
}
if (!function_exists('mb_detect_encoding')) {
  throw new Exception('Bitcoin Reserve needs the Multibyte String PHP extension.');
}*/

// Cyclos Soap
require(dirname(__FILE__) . '/BitcoinReserve/CyclosSoap/CyclosSoapAutoload.php');

// Mappers. From Soap object to SCI objects
require(dirname(__FILE__) . '/BitcoinReserve/CyclosObjectMappers/CyclosObjectMappersAutoload.php');

// External dependencies
require(dirname(__FILE__) . '/../vendor/autoload.php');

// Bitcoin Reserve singleton
require(dirname(__FILE__) . '/BitcoinReserve/BitcoinReserve.php');

// Errors
require(dirname(__FILE__) . '/BitcoinReserve/Error.php');
require(dirname(__FILE__) . '/BitcoinReserve/AuthenticationError.php');
require(dirname(__FILE__) . '/BitcoinReserve/InvalidParametersError.php');

// Logger
require(dirname(__FILE__) . '/BitcoinReserve/Logger.php');

// Bitcoin Reserve Objects
require(dirname(__FILE__) . '/BitcoinReserve/Object.php');
require(dirname(__FILE__) . '/BitcoinReserve/AccountHistoryResultPage.php');
require(dirname(__FILE__) . '/BitcoinReserve/AccountStatus.php');
require(dirname(__FILE__) . '/BitcoinReserve/AccountType.php');
require(dirname(__FILE__) . '/BitcoinReserve/CredentialStatus.php');
require(dirname(__FILE__) . '/BitcoinReserve/CredentialType.php');
require(dirname(__FILE__) . '/BitcoinReserve/Currency.php');
require(dirname(__FILE__) . '/BitcoinReserve/Member.php');
require(dirname(__FILE__) . '/BitcoinReserve/MemberAccount.php');
require(dirname(__FILE__) . '/BitcoinReserve/PaymentResult.php');
require(dirname(__FILE__) . '/BitcoinReserve/PrincipalType.php');
require(dirname(__FILE__) . '/BitcoinReserve/RequestPaymentResult.php');
require(dirname(__FILE__) . '/BitcoinReserve/Ticker.php');
require(dirname(__FILE__) . '/BitcoinReserve/Ticket.php');
require(dirname(__FILE__) . '/BitcoinReserve/Transfer.php');
require(dirname(__FILE__) . '/BitcoinReserve/TransferType.php');

// Bitcoin Reserve Services
require(dirname(__FILE__) . '/BitcoinReserve/Service.php');
require(dirname(__FILE__) . '/BitcoinReserve/AccountService.php');
require(dirname(__FILE__) . '/BitcoinReserve/MemberService.php');
require(dirname(__FILE__) . '/BitcoinReserve/PaymentService.php');
require(dirname(__FILE__) . '/BitcoinReserve/WebshopService.php');