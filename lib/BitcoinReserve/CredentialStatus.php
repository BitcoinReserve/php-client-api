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
class BitcoinReserve_CredentialStatus extends BitcoinReserve_Object {
	
	/**
	 * Constant for value 'VALID'
	 * @return string 'VALID'
	 */
	const STATUS_VALID = 'VALID';
	
	/**
	 * Constant for value 'INVALID'
	 * @return string 'INVALID'
	 */
	const STATUS_INVALID = 'INVALID';
	
	/**
	 * Constant for value 'BLOCKED'
	 * @return string 'BLOCKED'
	 */
	const STATUS_BLOCKED = 'BLOCKED';
	
	// CredentialStatus status
	public static $CREDENTIAL_STATUSES = array(
		self::STATUS_VALID		=> self::STATUS_VALID,
		self::STATUS_INVALID	=> self::STATUS_INVALID,
		self::STATUS_BLOCKED 	=> self::STATUS_BLOCKED,
	);	
	
	/**
	 * Check if string is a valid status const.
	 *
	 * @param string $status the status
	 * @return Boolean
	 */
	public static function isValid($status) {
		return (in_array($status, self::$CREDENTIAL_STATUSES));
	}
	
	/**
	 * Print a list of available statuses.
	 *
	 * @param string $symbol the currency symbol. Sample BTC
	 * @return string
	 */
	public static  function printValidCurrenciesSymbols() {
		echo implode (", ", self::$CREDENTIAL_STATUSES);
	}	

	/**
	 * Get status value
	 * @return string
	 */
	public function getStatus() {
		return $this->status;
	}

    /**
     * Set status value
     * @param string $status the status
     * @throws BitcoinReserve_Error
     * @return string
     */
	public function setStatus($status) {
		
		if (!$this->isValid($status)) {
			throw new BitcoinReserve_Error("BitcoinReserve_CredentialStatus::setStatus. Invalid status: $status. Valid values: ".BitcoinReserve_CredentialStatus::printValidStatuses().".");
		}
		
		$this->status = $status;
		
		return $this;
	}
	
}