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
class BitcoinReserve_Ticket extends BitcoinReserve_Object {
	
	// Status
	const STATUS_OK = 'ok';
	const STATUS_CANCELLED = 'cancelled';
	const STATUS_PENDING = 'pending';
	const STATUS_EXPIRED = 'expired';
	const STATUS_AWAITING_AUTHORIZATION = 'awaitingAuthorization';
	
	// Ticket status
	public static $TICKET_STATUSES = array(
		self::STATUS_OK 					=> self::STATUS_OK,
		self::STATUS_CANCELLED 				=> self::STATUS_CANCELLED,
		self::STATUS_PENDING 				=> self::STATUS_PENDING,
		self::STATUS_EXPIRED 				=> self::STATUS_EXPIRED,
		self::STATUS_AWAITING_AUTHORIZATION	=> self::STATUS_AWAITING_AUTHORIZATION,									
	);	
	
	/**
	 * 
	 * @var int
	 */
	protected $id;
	
	/**
	 * The ticket identifier
	 * @var string
	 */	
	protected $ticket;
	
	/**
	 * The payment amount
	 * @var float
	 */	
	protected $amount;
	
	/**
	 * The payment amount, formatted according to the Cyclos settings
	 * @var String
	 */
	protected $formattedAmount;	
	
	/**
	 *
	 * @var string
	 */	
	protected $currency;
	
	/**
	 * The member that paid the transaction
	 * @var BitcoinReserve_Member
	 */	
	protected $fromMember;
	
	/**
	 * The member that received the transaction (when was to a member)
	 * @var BitcoinReserve_Member
	 */	
	protected $toMember;
	
	/**
	 * The date the ticket was created. 
	 *
	 * @var string ISO 8601
	 */
	protected $creationDate;

	/**
	 * The date the ticket was created, formatted according to the Cyclos settings
	 * @var String
	 */
	protected $formattedCreationDate;	
	
	/**
	 * The payment description
	 * @var string
	 */	
	protected $description;
	
	/**
	 * The ticket status
	 * @var string
	 */	
	protected $status;
	
	/**
	 * Indicates if the payment was successfully completed
	 * @var Boolean
	 */
	protected $ok;
	
	/**
	 * Indicates if the payment was successfully completed
	 * @var Boolean
	 */
	protected $cancelled;	
	
	/**
	 * Indicates if the payment wasn't completed yet
	 * @var Boolean
	 */
	protected $pending;
	
	/**
	 * Indicates if the payment wasn't completed within an hour
	 * @var Boolean
	 */
	protected $expired;
	
	/**
	 * Indicates if the payment is awaiting authorization in Cyclos
	 * @var Boolean
	 */
	protected $awaitingAuthorization;

	/**
	 * The client member IP address
	 * @var string
	 */	
	protected $clientAddress;
	
	/**
	 * The web shop IP address
	 * @var string
	 */	
	protected $memberAddress;
	
	/**
	 * The informed return url	
	 * @var string
	 */	
	protected $returnUrl;	
	
	/**
	 * Check if the status is a valid status.
	 *
	 * @param string $status status
	 * @return Boolean
	 */
	public static function isValidStatus($status) {
		return (in_array($status, self::$TICKET_STATUSES));
	}	
		
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
	 * Get ticket value
	 * @return string
	 */
	public function getTicket() {
		return $this->ticket;
	}
	
	/**
	 * Set ticket value
	 * @param string $ticket the ticket
	 * @return string
	 */
	public function setTicket($ticket) {
		$this->ticket = $ticket;
		return $this;
	}	
	
	/**
	 * Get amount value
	 * @return float
	 */
	public function getAmount() {
		return $this->amount;
	}
	
	/**
	 * Set amount value
	 * @param float $amount the amount
	 * @return float
	 */
	public function setAmount($amount) {
		$this->amount = $amount;
		return $this;
	}
	
	/**
	 * Get formattedAmount value
	 * @return string
	 */
	public function getFormattedAmount() {
		return $this->formattedAmount;
	}
	
	/**
	 * Set formattedAmount value
	 * @param string $formattedAmount the formattedAmount
	 * @return string
	 */
	public function setFormattedAmount($formattedAmount) {
		$this->formattedAmount = $formattedAmount;
		return $this;
	}	
	
	/**
	 * Get currency value
	 * @return string|null
	 */
	public function getCurrency() {
		return $this->currency;
	}

    /**
     * Set currency value
     * @param $currency
     * @return $this
     * @throws Exception
     */
	public function setCurrency($currency) {
		if (($currency != 'BTC') && ($currency != 'USD')) {
			throw new Exception("Error BitcoinReserve_MemberAccount::setCurrency. Currency valid values are: BTC or USD.");
		}
	
		$this->currency = $currency;
		return $this;
	}	

	/**
	 * Get fromMember value
	 * @return string
	 */
	public function getFromMember() {
		return $this->fromMember;
	}
	
	/**
	 * Set fromMember value
	 * @param BitcoinReserve_Member $fromMember the fromMember
	 * @return BitcoinReserve_Member
	 */
	public function setFromMember(BitcoinReserve_Member $fromMember=null) {
		$this->fromMember = $fromMember;
		return $this;
	}

	/**
	 * Get toMember value
	 * @return BitcoinReserve_Member
	 */
	public function getToMember() {
		return $this->toMember;
	}
	
	/**
	 * Set toMember value
	 * @param BitcoinReserve_Member $toMember the toMember
	 * @return BitcoinReserve_Member
	 */
	public function setToMember(BitcoinReserve_Member $toMember) {
		$this->toMember = $toMember;
		return $this;
	}
	
	/**
	 * Get creationDate value
	 * @return string ISO 8601
	 */
	public function getCreationDate() {
		return $this->creationDate;
	}
	
	/**
	 * Set creationDate value
	 * @param string $creationDate
	 * @return string
	 */
	public function setCreationDate($creationDate) {
		$this->creationDate = $creationDate;
		return $this;
	}
	
	/**
	 * Get formattedCreationDate value
	 * @return String
	 */
	public function getFormattedCreationDate() {
		return $this->formattedCreationDate;
	}
	
	/**
	 * Set formattedCreationDate value
	 * @param string $formattedCreationDate
	 * @return string
	 */
	public function setFormattedCreationDate($formattedCreationDate) {
		$this->formattedCreationDate = $formattedCreationDate;
		return $this;
	}	

	/**
	 * Get description value
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}
	
	/**
	 * Set description value
	 * @param string $description
	 * @return string
	 */
	public function setDescription($description) {
		$this->description = $description;
		return $this;
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
     * @param string $status
     * @throws Exception
     * @return string
     */
	public function setStatus($status) {
		if (!in_array($status, self::$TICKET_STATUSES)) {
			throw new Exception("Error BitcoinReserve_Ticket::setStatus. Invalid status. Status valid values are: ".print_r(self::$TICKET_STATUSES, true));
		}
	
		$this->status = $status;
		return $this;
	}
	
	/**
	 * Get ok value
	 * @return Boolean
	 */
	public function getOk() {
		return $this->ok;
	}
	
	/**
	 * Set ok value
	 * @param Boolean $ok
	 * @return Boolean
	 */
	public function setOk($ok) {
		$this->ok = $ok;
		return $this;
	}
	
	/**
	 * Get cancelled value
	 * @return Boolean
	 */
	public function getCancelled() {
		return $this->cancelled;
	}
	
	/**
	 * Set cancelled value
	 * @param Boolean $cancelled
	 * @return Boolean
	 */
	public function setCancelled($cancelled) {
		$this->cancelled = $cancelled;
		return $this;
	}
	
	/**
	 * Get pending value
	 * @return Boolean
	 */
	public function getPending() {
		return $this->pending;
	}
	
	/**
	 * Set pending value
	 * @param Boolean $pending
	 * @return Boolean
	 */
	public function setPending($pending) {
		$this->pending = $pending;
		return $this;
	}
	
	/**
	 * Get expired value
	 * @return Boolean
	 */
	public function getExpired() {
		return $this->expired;
	}
	
	/**
	 * Set expired value
	 * @param Boolean $expired
	 * @return Boolean
	 */
	public function setExpired($expired) {
		$this->expired = $expired;
		return $this;
	}
	
	/**
	 * Get awaitingAuthorization value
	 * @return Boolean
	 */
	public function getAwaitingAuthorization() {
		return $this->awaitingAuthorization;
	}
	
	/**
	 * Set awaitingAuthorization value
	 * @param Boolean $awaitingAuthorization
	 * @return Boolean
	 */
	public function setAwaitingAuthorization($awaitingAuthorization) {
		$this->awaitingAuthorization = $awaitingAuthorization;
		return $this;
	}	
	
	/**
	 * Get clientAddress value
	 * @return string
	 */
	public function getClientAddress() {
		return $this->clientAddress;
	}
	
	/**
	 * Set clientAddress value
	 * @param string $clientAddress
	 * @return string
	 */
	public function setClientAddress($clientAddress) {
		$this->clientAddress = $clientAddress;
		return $this;
	}	

	/**
	 * Get memberAddress value
	 * @return string
	 */
	public function getMemberAddress() {
		return $this->memberAddress;
	}
	
	/**
	 * Set memberAddress value
	 * @param string $memberAddress
	 * @return string
	 */
	public function setMemberAddress($memberAddress) {
		$this->memberAddress = $memberAddress;
		return $this->memberAddress;
	}	
	
	/**
	 * Get returnUrl value
	 * @return string
	 */
	public function getReturnUrl() {
		return $this->returnUrl;
	}
	
	/**
	 * Set returnUrl value
	 * @param string $returnUrl
	 * @return string
	 */
	public function setReturnUrl($returnUrl) {
		$this->returnUrl = $returnUrl;
		return $this;
	}
}