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
class BitcoinReserve_MemberAccount extends BitcoinReserve_Object {
	
	/**
	 * BTC/USD.
	 * @var string
	 */
	protected $currency;
	
	/**
	 * @var boolean
	 */
	public $isDefault;
	
	/**
	 * @var BitcoinReserve_AccountType
	 */
	public $type;	

	/**
	 * Get currency value
	 * @return string
	 */
	public function getCurrency() {
		return $this->currency;
	}

    /**
     * Set currency value
     * @param $currency
     * @return $this
     * @throws BitcoinReserve_Error
     * @internal param BitcoinReserveStructCurrency $_currency the currency
     */
	public function setCurrency($currency) {
		
		if (!BitcoinReserve_Currency::isValid($currency)) {
			throw new BitcoinReserve_Error("BitcoinReserve_MemberAccount::setCurrency. Invalid currency: $currency. Valid values: ".BitcoinReserve_Currency::printValidCurrenciesSymbols().".");
		}
		
		$this->currency = $currency;
		
		return $this;
	}	
	
	/**
	 * Get isDefault value
	 * @return boolean
	 */
	public function getIsDefault() {
		return $this->isDefault;
	}
	
	/**
	 * Set isDefault value
	 * @param boolean $isDefault
	 * @return BitcoinReserve_MemberAccount
	 */
	public function setIsDefault($isDefault) {
		$this->isDefault = $isDefault;
		return $this;
	}	
	
	/**
	 * Get type value
	 * @return BitcoinReserve_AccountType
	 */
	public function getType() {
		return $this->type;
	}
	
	/**
	 * Set type value
	 * @param BitcoinReserve_AccountType $type
	 * @return BitcoinReserve_AccountType
	 */
	public function setType($type) {
		$this->type = $type;
		return $this;
	}	
}