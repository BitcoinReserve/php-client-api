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
 * @category Error
 *
 */
class BitcoinReserve_Error extends Exception {
	
	/* Soap Errors */
	const SOAP_ERROR_INVALID_PARAMETER = 'ns1:invalid-parameter';
	const SOAP_ERROR_INVALID_PARAMETERS = 'ns1:invalid-parameters'; 		// If the principal is null and the client is not restricted to a member.
	const SOAP_ERROR_MEMBER_NOT_FOUND = 'ns1:member-not-found'; 			// If the given principal did not match any member
	const SOAP_ERROR_INVALID_CHANNEL = 'ns1:invalid-channel'; 				// If the member did not enabled the access to the service client's channel.
	const SOAP_ERROR_INVALID_CREDENTIALS = 'ns1:invalid-credentials'; 		// If the given credentials are invalid
	const SOAP_ERROR_BLOCKED_CREDENTIALS = 'ns1:blocked-credentials'; 		// If the given credentials are blocked by exceeding the maximum tries	
	const SOAP_ERROR_UNAUTHORIZED_ACCESS = 'ns1:unauthorized-access'; 		// If the client is restricted to a member and both fromMember and toMember aren't the retricted member.
	const SOAP_ERROR_CURRENTLY_UNAVAILABLE = 'ns1:currently-unavailable'; 	// It was not possible to acquire required locks. The client should attempt the same operation again
	const SOAP_ERROR_QUERY_PARSE_ERROR = 'ns1:query-parse-error'; 			// When the given keywords contains an invalid expression
	const SOAP_ERROR_UNEXPECTED_ERRROR = 'ns1:unexpected-error';
	
	/* Errors */
	const ERROR_INVALID_PARAMETER = 'Invalid parameter';
	const ERROR_INVALID_CURRENCY = 'Invalid currency';
		
	public function __construct($message) {
		parent::__construct($message);
	}
}
