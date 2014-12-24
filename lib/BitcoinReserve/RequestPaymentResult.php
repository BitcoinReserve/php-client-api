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
class BitcoinReserve_RequestPaymentResult extends BitcoinReserve_Object {
	
	const STATUS_REQUEST_RECEIVED = 'REQUEST_RECEIVED';
	const STATUS_FROM_NOT_FOUND = 'FROM_NOT_FOUND';
	const STATUS_INVALID_PARAMETERS = 'INVALID_PARAMETERS';

    // Status list
    public static $REQUEST_PAYMENT_RESULT_STATUSES = array(
        self::STATUS_REQUEST_RECEIVED       => self::STATUS_REQUEST_RECEIVED,
        self::STATUS_FROM_NOT_FOUND         => self::STATUS_FROM_NOT_FOUND,
        self::STATUS_INVALID_PARAMETERS 	=> self::STATUS_INVALID_PARAMETERS,
    );
	
	/**
	 * @var string
	 */
	protected $status;	
	
	/**
	 * Only the ticket token. It is not a BitcoinReserve_Ticket.
	 * @var string
	 */
	protected $ticket;
	
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

        if (!in_array($status, self::$REQUEST_PAYMENT_RESULT_STATUSES)) {
            throw new Exception("Error BitcoinReserve_RequestPaymentResult::setStatus. Invalid status $status. Status valid values are: ".print_r(self::$REQUEST_PAYMENT_RESULT_STATUSES, true));
        }

		$this->status = $status;
		return $this;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getTicket() {
		return $this->ticket;
	}

    /**
     *
     * @param string $ticket
     * @return $this
     */
	public function setTicket($ticket) {
		$this->ticket = $ticket;
		return $this;
	}
}