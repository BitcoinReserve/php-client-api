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
 * This class is returned by BitcoinReserve_PaymentService::doPayment method.
 * 
 * @see BitcoinReserve_PaymentService::doPayment method
 * @package bitcoin-reserve-php
 * @category Object 
 *
 */
class BitcoinReserve_PaymentResult extends BitcoinReserve_Object {
	
	// Status are mapped directly from Cyclos ones:
	// https://www.cyclos.org/docs/javadocs/nl/strohalm/cyclos/webservices/payments/PaymentStatus.html#TO_NOT_FOUND
	
	// Status
	const STATUS_PROCESSED = 'PROCESSED'; // The payment was successfully processed
	const STATUS_PENDING_AUTHORIZATION = 'PENDING_AUTHORIZATION'; // The payment was created, but is awaiting authorization
	const STATUS_INVALID_CREDENTIALS = 'INVALID_CREDENTIALS'; // Invalid credential was entered
	const STATUS_BLOCKED_CREDENTIALS = 'BLOCKED_CREDENTIALS'; // The credential were blocked for exceeding allowed tries
	const STATUS_INVALID_CHANNEL = 'INVALID_CHANNEL'; // The payment was being performed from a channel the member doesn't have access
	const STATUS_INVALID_PARAMETERS = 'INVALID_PARAMETERS'; // One or more parameters were invalid
	const STATUS_NOT_ENOUGH_CREDITS = 'NOT_ENOUGH_CREDITS'; // The payment couldn't be performed, because there was not enough amount on the source account
	const STATUS_MAX_DAILY_AMOUNT_EXCEEDED = 'MAX_DAILY_AMOUNT_EXCEEDED'; // The payment couldn't be performed, because the maximum amount today has been exceeded
	const STATUS_RECEIVER_UPPER_CREDIT_LIMIT_REACHED = 'RECEIVER_UPPER_CREDIT_LIMIT_REACHED'; // The payment couldn't be performed, because the destination account would surpass it's upper credit limit
	const STATUS_UNKNOWN_ERROR = 'UNKNOWN_ERROR'; // Any other unexpected error will fall in this category
	const STATUS_NOT_PERFORMED = 'NOT_PERFORMED'; // In a bulk action, when a payment result in error, all next payments will have this status	
	const STATUS_TO_NOT_FOUND = 'TO_NOT_FOUND'; // The given to member was not found. This stats is returned even if the memeber exists but he is pending to approve.
	
	// Status list
	public static $PAYMENT_RESULT_STATUSES = array(
		self::STATUS_PROCESSED 								=> self::STATUS_PROCESSED,
		self::STATUS_PENDING_AUTHORIZATION 					=> self::STATUS_PENDING_AUTHORIZATION,
		self::STATUS_INVALID_CREDENTIALS 					=> self::STATUS_INVALID_CREDENTIALS,
		self::STATUS_BLOCKED_CREDENTIALS 					=> self::STATUS_BLOCKED_CREDENTIALS,
		self::STATUS_INVALID_CHANNEL 						=> self::STATUS_INVALID_CHANNEL,
		self::STATUS_INVALID_PARAMETERS 					=> self::STATUS_INVALID_PARAMETERS,
		self::STATUS_NOT_ENOUGH_CREDITS 					=> self::STATUS_NOT_ENOUGH_CREDITS,
		self::STATUS_MAX_DAILY_AMOUNT_EXCEEDED 				=> self::STATUS_MAX_DAILY_AMOUNT_EXCEEDED,
		self::STATUS_RECEIVER_UPPER_CREDIT_LIMIT_REACHED 	=> self::STATUS_RECEIVER_UPPER_CREDIT_LIMIT_REACHED,
		self::STATUS_UNKNOWN_ERROR 							=> self::STATUS_UNKNOWN_ERROR,
		self::STATUS_NOT_PERFORMED 							=> self::STATUS_NOT_PERFORMED,
		self::STATUS_TO_NOT_FOUND 							=> self::STATUS_TO_NOT_FOUND ,
	);	
	
	/**
	 * @var string
	 */
	protected $status;	
	
	/**
	 * @var BitcoinReserve_Transfer
	 */
	protected $transfer;
	
	/**
	 * @var BitcoinReserve_AccountStatus
	 */
	protected $fromAccountStatus;
	
	/**
	 * @var BitcoinReserve_AccountStatus
	 */
	protected $toAccountStatus;
	
	/**
	 * Check if the status is a valid status.
	 *
	 * @param string $status status
	 * @return Boolean
	 */
	public static function isValidStatus($status) {
		return (in_array($status, self::$PAYMENT_RESULT_STATUSES));
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
     * @throws Exception
     * @return $this
     */
	public function setStatus($status) {
		
		if (!in_array($status, self::$PAYMENT_RESULT_STATUSES)) {
			throw new Exception("Error BitcoinReserve_PaymentResult::setStatus. Invalid status $status. Status valid values are: ".print_r(self::$PAYMENT_RESULT_STATUSES, true));
		}
				
		$this->status = $status;
		return $this;
	}
	
	/**
	 *
	 * @return BitcoinReserve_Transfer
	 */
	public function getTransfer() {
		return $this->transfer;
	}

    /**
     *
     * @param BitcoinReserve_Transfer $transfer
     * @return $this
     */
	public function setTransfer($transfer) {
		$this->transfer = $transfer;
		return $this;
	}
	
	/**
	 *
	 * @return BitcoinReserve_AccountStatus
	 */
	public function getFromAccountStatus() {
		return $this->fromAccountStatus;
	}

    /**
     *
     * @param BitcoinReserve_AccountStatus $fromAccountStatus
     * @return $this
     */
	public function setFromAccountStatus($fromAccountStatus) {
		$this->fromAccountStatus = $fromAccountStatus;
		return $this;
	}
	
	/**
	 *
	 * @return BitcoinReserve_AccountStatus
	 */
	public function getToAccountStatus() {
		return $this->toAccountStatus;
	}

    /**
     *
     * @param BitcoinReserve_AccountStatus $toAccountStatus
     * @return $this
     */
	public function setToAccountStatus($toAccountStatus) {
		$this->toAccountStatus = $toAccountStatus;
		return $this;
	}
		
}