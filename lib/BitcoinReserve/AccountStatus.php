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
class BitcoinReserve_AccountStatus extends BitcoinReserve_Object {
	
	/**
	 * 
	 * @var string
	 */
	protected $currency;
	
	/**
	 * balance: The raw account balance
	 * @var float
	 */
	protected $balance;
	
	/**
	 * formattedBalance (string): The raw account balance, formatted according to the Cyclos settings
	 * @var string
	 */
	protected $formattedBalance;	
	
	/**
	 * availableBalance: The available balance
	 * @var float
	 */
	protected $availableBalance;
	
	/**
	 * formattedAvailableBalance (string): The available balance, formatted according to the Cyclos settings
	 * @var string
	 */
	protected $formattedAvailableBalance;	
	
	/**
	 * reservedAmount: The amount which is currently reserved
	 * @var float
	 */
	protected $reservedAmount;
	
	/**
	 * formattedReservedAmount (string): The amount which is currently reserved, formatted according to the Cyclos settings
	 * @var string
	 */
	protected $formattedReservedAmount;	
	
	/**
	 * creditLimit: The maximum negative balance this account may reach, represented as a positive number
	 * @var float
	 */
	protected $creditLimit;
	
	/**
	 * formattedCreditLimit (string): The maximum negative balance this account may reach, formatted according to the Cyclos settings
	 * @var string
	 */
	protected $formattedCreditLimit;	
	
	/**
	 * upperCreditLimit: The maximum positive balance this account may reach, or null when unlimited
	 * @var float
	 */
	protected $upperCreditLimit;
	
	/**
	 * formattedUpperCreditLimit (string): The maximum positive balance this account may reach, formatted according to the Cyclos settings
	 * @var string
	 */
	protected $formattedUpperCreditLimit;	

	/**
	 * Get currency value
	 * @return string
	 */
	public function getCurrency()
	{
		return $this->currency;
	}

    /**
     * Set currency value
     * @param string $currency the currency
     * @throws BitcoinReserve_Error
     * @return string
     */
	public function setCurrency($currency) {
		
		if (!BitcoinReserve_Currency::isValid($currency)) {
			throw new BitcoinReserve_Error("BitcoinReserve_AccountStatus::setCurrency. Invalid currency: $currency. Valid values: ".BitcoinReserve_Currency::printValidCurrenciesSymbols().".");
		}
		
		$this->currency = $currency;
		
		return $this;
	}
	
	/**
	 * Get balance value
	 * @return float
	 */
	public function getBalance() {
		return $this->balance;
	}
	
	/**
	 * Set balance value
	 * @param float $balance the balance
	 * @return float
	 */
	public function setBalance($balance) {
		$this->balance = $balance;
		return $this;
	}
	
	/**
	 * Get formattedBalance value
	 * @return float
	 */
	public function getFormattedBalance() {
		return $this->formattedBalance;
	}
	
	/**
	 * Set formattedBalance value
	 * @param float $formattedBalance the formattedBalance
	 * @return float
	 */
	public function setFormattedBalance($formattedBalance) {
		$this->formattedBalance = $formattedBalance;
		return $this;
	}	
	
	/**
	 * Get availableBalance value
	 * @return float
	 */
	public function getAvailableBalance() {
		return $this->availableBalance;
	}
	
	/**
	 * Set availableBalance value
	 * @param float $availableBalance the availableBalance
	 * @return float
	 */
	public function setAvailableBalance($availableBalance)
	{
		$this->availableBalance = $availableBalance;
		
		return $this;
	}
	
	/**
	 * Get formattedAvailableBalance value
	 * @return float
	 */
	public function getFormattedAvailableBalance() {
		return $this->formattedAvailableBalance;
	}
	
	/**
	 * Set formattedAvailableBalance value
	 * @param float $formattedAvailableBalance the formattedAvailableBalance
	 * @return float
	 */
	public function setFormattedAvailableBalance($formattedAvailableBalance) {
		$this->formattedAvailableBalance = $formattedAvailableBalance;
		return $this;
	}	

	/**
	 * Get reservedAmount value
	 * @return float
	 */
	public function getReservedAmount() {
		return $this->reservedAmount;
	}
	
	/**
	 * Set reservedAmount value
	 * @param float $reservedAmount the reservedAmount
	 * @return float
	 */
	public function setReservedAmount($reservedAmount) {
		$this->reservedAmount = $reservedAmount;
		return $this;
	}
	
	/**
	 * Get formattedReservedAmount value
	 * @return float
	 */
	public function getFormattedReservedAmount() {
		return $this->formattedReservedAmount;
	}
	
	/**
	 * Set formattedReservedAmount value
	 * @param float $formattedReservedAmount the formattedReservedAmount
	 * @return float
	 */
	public function setFormattedReservedAmount($formattedReservedAmount) {
		$this->formattedReservedAmount = $formattedReservedAmount;
		return $this;
	}	

	/**
	 * Get creditLimit value
	 * @return float
	 */
	public function getCreditLimit() {
		return $this->creditLimit;
	}
	
	/**
	 * Set creditLimit value
	 * @param float $creditLimit the creditLimit
	 * @return float
	 */
	public function setCreditLimit($creditLimit) {
		$this->creditLimit = $creditLimit;
		return $this;
	}
	
	/**
	 * Get formattedCreditLimit value
	 * @return float
	 */
	public function getFormattedCreditLimit() {
		return $this->formattedCreditLimit;
	}
	
	/**
	 * Set formattedCreditLimit value
	 * @param float $formattedCreditLimit the formattedCreditLimit
	 * @return float
	 */
	public function setFormattedCreditLimit($formattedCreditLimit) {
		$this->formattedCreditLimit = $formattedCreditLimit;
		return $this;
	}	

	/**
	 * Get upperCreditLimit value
	 * @return float
	 */
	public function getUpperCreditLimit() {
		return $this->upperCreditLimit;
	}
	
	/**
	 * Set upperCreditLimit value
	 * @param float $upperCreditLimit the upperCreditLimit
	 * @return float
	 */
	public function setUpperCreditLimit($upperCreditLimit) {
		$this->upperCreditLimit = $upperCreditLimit;
		return $this;
	}
	
	/**
	 * Get formattedUpperCreditLimit value
	 * @return float
	 */
	public function getFormattedUpperCreditLimit() {
		return $this->formattedUpperCreditLimit;
	}
	
	/**
	 * Set formattedUpperCreditLimit value
	 * @param float $formattedUpperCreditLimit the formattedUpperCreditLimit
	 * @return float
	 */
	public function setFormattedUpperCreditLimit($formattedUpperCreditLimit) {
		$this->formattedUpperCreditLimit = $formattedUpperCreditLimit;
		return $this;
	}	
}