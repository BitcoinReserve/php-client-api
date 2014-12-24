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
 * @category Object
 *
 */
class BitcoinReserve_CredentialType extends BitcoinReserve_Object {
	
	/**
	 * Constant for value 'LOGIN_PASSWORD'
	 * @return string 'LOGIN_PASSWORD'
	 */
	const TYPE_LOGIN_PASSWORD = 'LOGIN_PASSWORD';
	
	/**
	 * Constant for value 'TRANSACTION_PASSWORD'
	 * @return string 'TRANSACTION_PASSWORD'
	 */
	const TYPE_TRANSACTION_PASSWORD = 'TRANSACTION_PASSWORD';
	
	/**
	 * Constant for value 'PIN'
	 * @return string 'PIN'
	 */
	const TYPE_PIN = 'PIN';
	
	/**
	 * Constant for value 'CARD_SECURITY_CODE'
	 * @return string 'CARD_SECURITY_CODE'
	 */
	const TYPE_CARD_SECURITY_CODE = 'CARD_SECURITY_CODE';	
	
	// CredentialType type
	public static $CREDENTIAL_TYPES = array(
		self::TYPE_LOGIN_PASSWORD		=> self::TYPE_LOGIN_PASSWORD,
		self::TYPE_TRANSACTION_PASSWORD	=> self::TYPE_TRANSACTION_PASSWORD,
		self::TYPE_PIN 					=> self::TYPE_PIN,
		self::TYPE_CARD_SECURITY_CODE 	=> self::TYPE_CARD_SECURITY_CODE,			
	);	
	
	/**
	 * Check if string is a valid type const.
	 *
	 * @param string $type the type
	 * @return Boolean
	 */
	public static function isValid($type) {
		return (in_array($type, self::$CREDENTIAL_TYPES));
	}
	
	/**
	 * Print a list of available types.
	 * @return string
	 */
	public static  function printValidCredentialTypes() {
		echo implode (", ", self::$CREDENTIAL_TYPES);
	}	
}