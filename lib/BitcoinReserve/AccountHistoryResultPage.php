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
class BitcoinReserve_AccountHistoryResultPage extends BitcoinReserve_Object {
	
	/**
	 * An object containing the account balance, available balance and so on.
	 * For more details, refer to the model data details
	 * 
	 * @var BitcoinReserve_AccountStatus
	 */
	protected $accountStatus;
	
	/**
	 * The current page in the search.
	 * 
	 * @var integer
	 */
	protected $currentPage;
	
	/**
	 * The total number of transfers (not only those returned in the page).
	 * 
	 * @var integer
	 */
	protected $totalCount;
	
	/**
	 * Array of BitcoinReserve_Transfer
	 * 
	 * @var Array
	 */
	protected $transfers;
	
	/**
	 *
	 * @return BitcoinReserve_AccountStatus
	 */
	public function getAccountStatus() {
		return $this->accountStatus;
	}

    /**
     * @param BitcoinReserve_AccountStatus $accountStatus
     * @return $this
     */
	public function setAccountStatus($accountStatus) {
		$this->accountStatus = $accountStatus;
		return $this;
	}
	
	/**
	 * @return integer
	 */
	public function getCurrentPage() {
		return $this->currentPage;
	}

    /**
     * @param integer $currentPage
     * @return $this
     */
	public function setCurrentPage($currentPage) {
		$this->currentPage = $currentPage;
		return $this;
	}
	
	/**
	 * @return integer
	 */
	public function getTotalCount() {
		return $this->totalCount;
	}

    /**
     * @param integer $totalCount
     * @return $this
     */
	public function setTotalCount($totalCount) {
		$this->totalCount = $totalCount;
		return $this;
	}
	
	/**
	 * Return Array of BitcoinReserve_Transfer
	 * @return Array
	 */
	public function getTransfers() {
		return $this->transfers;
	}

    /**
     * @param array $transfers
     * @return $this
     */
	public function setTransfers($transfers) {
		$this->transfers = $transfers;
		return $this;
	}
	
}