<?php
/**
 * File for class AccountWebStructTransferType
 * @package AccountWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
/**
 * This class stands for AccountWebStructTransferType originally named transferType
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/account?wsdl}
 * @package AccountWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
class AccountWebStructTransferType extends AccountWebStructEntityVO
{
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $name;
    /**
     * The from
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AccountWebStructAccountType
     */
    public $from;
    /**
     * The to
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var AccountWebStructAccountType
     */
    public $to;
    /**
     * Constructor method for transferType
     * @see parent::__construct()
     * @param string $_name
     * @param AccountWebStructAccountType $_from
     * @param AccountWebStructAccountType $_to
     * @return AccountWebStructTransferType
     */
    public function __construct($_name = NULL,$_from = NULL,$_to = NULL)
    {
        AccountWebWsdlClass::__construct(array('name'=>$_name,'from'=>$_from,'to'=>$_to),false);
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $_name the name
     * @return string
     */
    public function setName($_name)
    {
        return ($this->name = $_name);
    }
    /**
     * Get from value
     * @return AccountWebStructAccountType|null
     */
    public function getFrom()
    {
        return $this->from;
    }
    /**
     * Set from value
     * @param AccountWebStructAccountType $_from the from
     * @return AccountWebStructAccountType
     */
    public function setFrom($_from)
    {
        return ($this->from = $_from);
    }
    /**
     * Get to value
     * @return AccountWebStructAccountType|null
     */
    public function getTo()
    {
        return $this->to;
    }
    /**
     * Set to value
     * @param AccountWebStructAccountType $_to the to
     * @return AccountWebStructAccountType
     */
    public function setTo($_to)
    {
        return ($this->to = $_to);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AccountWebWsdlClass::__set_state()
     * @uses AccountWebWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AccountWebStructTransferType
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
