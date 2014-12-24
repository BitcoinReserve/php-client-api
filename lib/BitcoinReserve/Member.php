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
class BitcoinReserve_Member extends BitcoinReserve_Object {
	
	/**
	 * id (number): The internal identifier
	 * @var string
	 */
	protected $id;

    /**
     * name (string): The member account number
     * @var int
     */
    protected $accountNumber;    
	
	/**
	 * name (string): The member name
	 * @var string
	 */	
	protected $name;

	/**
	 * username (string): The login name
	 * @var string
	 */	
	protected $username;
	
	/**
	 * email (string): The member e-mail
	 * @var string
	 */
	protected $email;	
	
	/**
	 * groupId (number): The group identifier
	 * @var int
	 */	
	protected $groupId;

	/**
	 * Get id value
	 * @return string
	 */
	public function getId()	{
		return $this->id;
	}
	
	/**
	 * Set id value
	 * @param integer $id the id
	 * @return BitcoinReserve_Member
	 */
	public function setId($id) {
		$this->id = $id;
		return $this;
	}

    /**
     * Get accountNumber value
     * @return string
     */
    public function getAccountNumber() {
        return $this->accountNumber;
    }

    /**
     * Set accountNumber value
     * @param string $accountNumber the accountNumber
     * @return BitcoinReserve_Member
     */
    public function setAccountNumber($accountNumber) {
        $this->accountNumber = $accountNumber;
        return $this;
    }    
	
	/**
	 * Get name value
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}
	
	/**
	 * Set name value
	 * @param string $name the name
	 * @return BitcoinReserve_Member
	 */
	public function setName($name) {
		$this->name = $name;
		return $this;
	}
	
	/**
	 * Get groupId value
	 * @return int
	 */
	public function getGroupId() {
		return $this->groupId;
	}
	
	/**
	 * Set groupId value
	 * @param int $groupId the groupId
	 * @return BitcoinReserve_Member
	 */
	public function setGroupId($groupId) {
		$this->groupId = $groupId;
		return $this;
	}	
}