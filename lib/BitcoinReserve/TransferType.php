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
 *
 * @package bitcoin-reserve-php
 * @category Object
 *
 */
class BitcoinReserve_TransferType extends BitcoinReserve_Object {

	/**
	 * id
	 *
	 * @var int
	 */
	protected $id;
	
	/**
	 * name
	 * 
	 * Sample value: "Bitcoin transfer member to member"
	 *
	 * @var string
	 */
	protected $name;

	/**
	 * from 
	 *
	 * @var BitcoinReserve_AccountType
	 */
	protected $from;
	
	/**
	 * to
	 *
	 * @var BitcoinReserve_AccountType
	 */
	protected $to;
	
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
	 * @return BitcoinReserve_AccountType
	 */
	public function getFrom() {
		return $this->from;
	}

    /**
     *
     * @param BitcoinReserve_AccountType $from
     * @return $this
     */
	public function setFrom($from) {
		$this->from = $from;
		return $this;
	}
	
	/**
	 *
	 * @return BitcoinReserve_AccountType
	 */
	public function getTo() {
		return $this->to;
	}

    /**
     *
     * @param BitcoinReserve_AccountType $to
     * @return $this
     */
	public function setTo($to) {
		$this->to = $to;
		return $this;
	}
		
}