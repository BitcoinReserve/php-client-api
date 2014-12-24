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
class BitcoinReserve_AccountType extends BitcoinReserve_Object {

	/**
	 * id
	 *
	 * @var int
	 */
	protected $id;
	
	/**
	 * name The transfer type name
	 * 
	 * Sample value: "Bitcoin member account"
	 *
	 * @var string
	 */
	protected $name;

	/**
	 * currency Contains this account type's currency 
	 *
	 * @var BitcoinReserve_Currency
	 */
	protected $currency;
	
	/**
	 *
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

    /**
     *
     * @param int $id
     * @return $this
     */
	public function setId($id) {
		$this->id = $id;
		return $this;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

    /**
     *
     * @param string $name
     * @return $this
     */
	public function setName($name) {
		$this->name = $name;
		return $this;
	}
	
	/**
	 *
	 * @return BitcoinReserve_Currency
	 */
	public function getCurrency() {
		return $this->currency;
	}

    /**
     *
     * @param BitcoinReserve_Currency $currency
     * @return $this
     */
	public function setCurrency($currency) {
		$this->currency = $currency;
		return $this;
	}
	
}