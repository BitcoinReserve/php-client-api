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
class BitcoinReserve_Transfer extends BitcoinReserve_Object {
	
	// TODO: I think it is not used. Status is in PaymentResult.
	const STATUS_PROCESSED = 'PROCESSED';

	/**
	 * The internal identifier
	 * 
	 * @var int
	 */
	protected $id;
          
	/**
	 * The creation / submission date
	 * 
	 * @var string ISO 8601
	 */
	protected $date;
	
	/**
	 * The creation / submission date, formatted according to the Cyclos settings
	 * @var string
	 */
	protected $formattedDate;

	/**
	 * The processing / accepting date
	 *
	 * @var string ISO 8601
	 */
	protected $processDate;

	/**
	 * The processing / accepting date, formatted according to the Cyclos settings	 *
	 * @var string
	 */
	protected $formattedProcessDate;

	/**
	 * The payment amount
	 * @var float
	 */
	protected $amount;
	
	/**
	 * The payment amount, formatted according to the Cyclos settings	 *
	 * @var string
	 */
	protected $formattedAmount;
	
	/**
	 * <status>PROCESSED</status>
	 *
	 * @var string
	 */
	protected $status;
	
	/**
	 * The payment type
	 * @var BitcoinReserve_TransferType
	 */
	protected $transferType;

	/**
	 * The transfer description
	 * @var string
	 */
	protected $description;	
	
	/**
	 * @var BitcoinReserve_Member
	 */
	protected $fromMember;
	
	/**
	 * The member which received / performed the payment, when the payment was to / from a member
	 * @var BitcoinReserve_Member
	 */
	protected $member;
	
	/**
	 * The system account name, when the payment was to / from system
	 * TODO: map this field in mapper
	 * @var unknown
	 */
	protected $systemAccountName;

	/**
	 * The generated transaction number
	 * @var string
	 */
	protected $transactionNumber;
	
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
	public function getDate() {
		return $this->date;
	}
	
	/**
	 *
	 * @param string $date 
	 */
	public function setDate($date) {
		$this->date = $date;
		return $this;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getFormattedDate() {
		return $this->formattedDate;
	}
	
	/**
	 *
	 * @param string $formattedDate
	 */
	public function setFormattedDate($formattedDate) {
		$this->formattedDate = $formattedDate;
		return $this;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getProcessDate() {
		return $this->processDate;
	}
	
	/**
	 *
	 * @param string $processDate
	 */
	public function setProcessDate($processDate) {
		$this->processDate = $processDate;
		return $this;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getFormattedProcessDate() {
		return $this->formattedProcessDate;
	}
	
	/**
	 *
	 * @param string $formattedProcessDate
	 */
	public function setFormattedProcessDate($formattedProcessDate) {
		$this->formattedProcessDate = $formattedProcessDate;
		return $this;
	}
	
	/**
	 *
	 * @return float
	 */
	public function getAmount() {
		return $this->amount;
	}
	
	/**
	 *
	 * @param float $amount
	 */
	public function setAmount($amount) {
		$this->amount = $amount;
		return $this;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getFormattedAmount() {
		return $this->formattedAmount;
	}
	
	/**
	 *
	 * @param string $formattedAmount
	 */
	public function setFormattedAmount($formattedAmount) {
		$this->formattedAmount = $formattedAmount;
		return $this;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getStatus() {
		return $this->status;
	}
	
	/**
	 *
	 * @param string $status
	 */
	public function setStatus($status) {
		// TODO: check it is a valid status
		$this->status = $status;
		return $this;
	}
	
	/**
	 *
	 * @return BitcoinReserve_TransferType
	 */
	public function getTransferType() {
		return $this->transferType;
	}

    /**
     *
     * @param BitcoinReserve_TransferType $transferType
     * @return $this
     */
	public function setTransferType($transferType) {
		$this->transferType = $transferType;
		return $this;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}
	
	/**
	 *
	 * @param string $description
	 */
	public function setDescription($description) {
		$this->description = $description;
		return $this;
	}
	
	/**
	 *
	 * @return BitcoinReserve_Member
	 */
	public function getFromMember() {
		return $this->fromMember;
	}
	
	/**
	 *
	 * @param BitcoinReserve_Member $fromMember
	 */
	public function setFromMember($fromMember) {
		$this->fromMember = $fromMember;
		return $this;
	}
	
	/**
	 *
	 * @return BitcoinReserve_Member
	 */
	public function getMember() {
		return $this->member;
	}
	
	/**
	 *
	 * @param BitcoinReserve_Member $member
	 */
	public function setMember($member) {
		$this->member = $member;
		return $this;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getTransactionNumber() {
		return $this->transactionNumber;
	}
	
	/**
	 *
	 * @param string $transactionNumber
	 */
	public function setTransactionNumber($transactionNumber) {
		$this->transactionNumber = $transactionNumber;
		return $this;
	}
}