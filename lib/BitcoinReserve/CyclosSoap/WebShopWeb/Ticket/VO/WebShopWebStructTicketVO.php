<?php
/**
 * File for class WebShopWebStructTicketVO
 * @package WebShopWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
/**
 * This class stands for WebShopWebStructTicketVO originally named ticketVO
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/webshop?wsdl}
 * @package WebShopWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
abstract class WebShopWebStructTicketVO extends WebShopWebStructEntityVO
{
    /**
     * The ticket
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $ticket;
    /**
     * The toMember
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var WebShopWebStructMember
     */
    public $toMember;
    /**
     * The fromMember
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var WebShopWebStructMember
     */
    public $fromMember;
    /**
     * The amount
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var decimal
     */
    public $amount;
    /**
     * The formattedAmount
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $formattedAmount;
    /**
     * The creationDate
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var dateTime
     */
    public $creationDate;
    /**
     * The formattedCreationDate
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $formattedCreationDate;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $description;
    /**
     * The ok
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $ok;
    /**
     * The cancelled
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $cancelled;
    /**
     * The pending
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $pending;
    /**
     * The expired
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $expired;
    /**
     * The awaitingAuthorization
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $awaitingAuthorization;
    /**
     * Constructor method for ticketVO
     * @see parent::__construct()
     * @param string $_ticket
     * @param WebShopWebStructMember $_toMember
     * @param WebShopWebStructMember $_fromMember
     * @param decimal $_amount
     * @param string $_formattedAmount
     * @param dateTime $_creationDate
     * @param string $_formattedCreationDate
     * @param string $_description
     * @param boolean $_ok
     * @param boolean $_cancelled
     * @param boolean $_pending
     * @param boolean $_expired
     * @param boolean $_awaitingAuthorization
     * @return WebShopWebStructTicketVO
     */
    public function __construct($_ticket = NULL,$_toMember = NULL,$_fromMember = NULL,$_amount = NULL,$_formattedAmount = NULL,$_creationDate = NULL,$_formattedCreationDate = NULL,$_description = NULL,$_ok = NULL,$_cancelled = NULL,$_pending = NULL,$_expired = NULL,$_awaitingAuthorization = NULL)
    {
        WebShopWebWsdlClass::__construct(array('ticket'=>$_ticket,'toMember'=>$_toMember,'fromMember'=>$_fromMember,'amount'=>$_amount,'formattedAmount'=>$_formattedAmount,'creationDate'=>$_creationDate,'formattedCreationDate'=>$_formattedCreationDate,'description'=>$_description,'ok'=>$_ok,'cancelled'=>$_cancelled,'pending'=>$_pending,'expired'=>$_expired,'awaitingAuthorization'=>$_awaitingAuthorization),false);
    }
    /**
     * Get ticket value
     * @return string|null
     */
    public function getTicket()
    {
        return $this->ticket;
    }
    /**
     * Set ticket value
     * @param string $_ticket the ticket
     * @return string
     */
    public function setTicket($_ticket)
    {
        return ($this->ticket = $_ticket);
    }
    /**
     * Get toMember value
     * @return WebShopWebStructMember|null
     */
    public function getToMember()
    {
        return $this->toMember;
    }
    /**
     * Set toMember value
     * @param WebShopWebStructMember $_toMember the toMember
     * @return WebShopWebStructMember
     */
    public function setToMember($_toMember)
    {
        return ($this->toMember = $_toMember);
    }
    /**
     * Get fromMember value
     * @return WebShopWebStructMember|null
     */
    public function getFromMember()
    {
        return $this->fromMember;
    }
    /**
     * Set fromMember value
     * @param WebShopWebStructMember $_fromMember the fromMember
     * @return WebShopWebStructMember
     */
    public function setFromMember($_fromMember)
    {
        return ($this->fromMember = $_fromMember);
    }
    /**
     * Get amount value
     * @return decimal|null
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param decimal $_amount the amount
     * @return decimal
     */
    public function setAmount($_amount)
    {
        return ($this->amount = $_amount);
    }
    /**
     * Get formattedAmount value
     * @return string|null
     */
    public function getFormattedAmount()
    {
        return $this->formattedAmount;
    }
    /**
     * Set formattedAmount value
     * @param string $_formattedAmount the formattedAmount
     * @return string
     */
    public function setFormattedAmount($_formattedAmount)
    {
        return ($this->formattedAmount = $_formattedAmount);
    }
    /**
     * Get creationDate value
     * @return dateTime|null
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param dateTime $_creationDate the creationDate
     * @return dateTime
     */
    public function setCreationDate($_creationDate)
    {
        return ($this->creationDate = $_creationDate);
    }
    /**
     * Get formattedCreationDate value
     * @return string|null
     */
    public function getFormattedCreationDate()
    {
        return $this->formattedCreationDate;
    }
    /**
     * Set formattedCreationDate value
     * @param string $_formattedCreationDate the formattedCreationDate
     * @return string
     */
    public function setFormattedCreationDate($_formattedCreationDate)
    {
        return ($this->formattedCreationDate = $_formattedCreationDate);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $_description the description
     * @return string
     */
    public function setDescription($_description)
    {
        return ($this->description = $_description);
    }
    /**
     * Get ok value
     * @return boolean|null
     */
    public function getOk()
    {
        return $this->ok;
    }
    /**
     * Set ok value
     * @param boolean $_ok the ok
     * @return boolean
     */
    public function setOk($_ok)
    {
        return ($this->ok = $_ok);
    }
    /**
     * Get cancelled value
     * @return boolean|null
     */
    public function getCancelled()
    {
        return $this->cancelled;
    }
    /**
     * Set cancelled value
     * @param boolean $_cancelled the cancelled
     * @return boolean
     */
    public function setCancelled($_cancelled)
    {
        return ($this->cancelled = $_cancelled);
    }
    /**
     * Get pending value
     * @return boolean|null
     */
    public function getPending()
    {
        return $this->pending;
    }
    /**
     * Set pending value
     * @param boolean $_pending the pending
     * @return boolean
     */
    public function setPending($_pending)
    {
        return ($this->pending = $_pending);
    }
    /**
     * Get expired value
     * @return boolean|null
     */
    public function getExpired()
    {
        return $this->expired;
    }
    /**
     * Set expired value
     * @param boolean $_expired the expired
     * @return boolean
     */
    public function setExpired($_expired)
    {
        return ($this->expired = $_expired);
    }
    /**
     * Get awaitingAuthorization value
     * @return boolean|null
     */
    public function getAwaitingAuthorization()
    {
        return $this->awaitingAuthorization;
    }
    /**
     * Set awaitingAuthorization value
     * @param boolean $_awaitingAuthorization the awaitingAuthorization
     * @return boolean
     */
    public function setAwaitingAuthorization($_awaitingAuthorization)
    {
        return ($this->awaitingAuthorization = $_awaitingAuthorization);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see WebShopWebWsdlClass::__set_state()
     * @uses WebShopWebWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return WebShopWebStructTicketVO
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
