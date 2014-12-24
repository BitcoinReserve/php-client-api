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
class BitcoinReserve_PrincipalType extends BitcoinReserve_Object {
	
	/**
	 * @const user
	 */
	const USER = 'USER';
	
	/**
	 * @const card
	 */
	const CARD = 'CARD';
	
	/**
	 * @const email
	 */
	const EMAIL = 'EMAIL';

	/**
	 * @const custom filed
	 */
	const CUSTOM_FIELD = 'CUSTOM_FIELD';

	// PrincipalType list
	public static $PRINCIPAL_TYPES = array(
			self::USER => self::USER,
			self::CARD => self::CARD,
			self::EMAIL => self::EMAIL,
			self::CUSTOM_FIELD => self::CUSTOM_FIELD
	);
	
	/**
	 * Check if string is a principalType valid const.
	 *
	 * @param string $principalType the principalType
	 * @return Boolean
	 */
	public static function isValid($principalType) {
		return (in_array($principalType, self::$PRINCIPAL_TYPES));
	}	
}