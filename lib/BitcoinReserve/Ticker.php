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
 * Server time and BTC/USD pair.
 *
 * @package bitcoin-reserve-php
 * @category Object
 *
 */
class BitcoinReserve_Ticker extends BitcoinReserve_Object {
	
	/**
	 *
	 * @var int
	 */
	protected $id;	
	
	/**
	 * BTC price in USD
	 * @var float
	 */	
	protected $ticker;
	
	/**
	 * Current server time. ISO 8601 formatted string.
	 * @var String
	 */
	protected $timestamp;	
	
	/**
	 * Get id value
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Set id value
	 * @param string $id the id
	 * @return string
	 */
	public function setId($id) {
		$this->id = $id;
		return $this;
	}
		
	/**
	 * Get ticker value
	 * @return string
	 */
	public function getTicker() {
		return $this->ticker;
	}
	
	/**
	 * Set ticker value
	 * @param string $ticker the ticker
	 * @return string
	 */
	public function setTicker($ticker) {
		$this->ticker = $ticker;
		return $this;
	}	
	
	/**
	 * Get timestamp value
	 * @return string
	 */
	public function getTimestamp() {
		return $this->timestamp;
	}
	
	/**
	 * Set timestamp value
	 * @param string $timestamp the timestamp
	 * @return string
	 */
	public function setTimestamp($timestamp) {
		$this->timestamp = $timestamp;
		return $this;
	}	
}