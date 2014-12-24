<?php
/**
 * File for class AccountWebStructFieldValue
 * @package AccountWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
/**
 * This class stands for AccountWebStructFieldValue originally named fieldValue
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/account?wsdl}
 * @package AccountWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
class AccountWebStructFieldValue extends AccountWebWsdlClass
{
    /**
     * The internalName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $internalName;
    /**
     * The fieldId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $fieldId;
    /**
     * The displayName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $displayName;
    /**
     * The value
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $value;
    /**
     * The possibleValueId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $possibleValueId;
    /**
     * The memberValueId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $memberValueId;
    /**
     * Constructor method for fieldValue
     * @see parent::__construct()
     * @param string $_internalName
     * @param long $_fieldId
     * @param string $_displayName
     * @param string $_value
     * @param long $_possibleValueId
     * @param long $_memberValueId
     * @return AccountWebStructFieldValue
     */
    public function __construct($_internalName = NULL,$_fieldId = NULL,$_displayName = NULL,$_value = NULL,$_possibleValueId = NULL,$_memberValueId = NULL)
    {
        parent::__construct(array('internalName'=>$_internalName,'fieldId'=>$_fieldId,'displayName'=>$_displayName,'value'=>$_value,'possibleValueId'=>$_possibleValueId,'memberValueId'=>$_memberValueId),false);
    }
    /**
     * Get internalName value
     * @return string|null
     */
    public function getInternalName()
    {
        return $this->internalName;
    }
    /**
     * Set internalName value
     * @param string $_internalName the internalName
     * @return string
     */
    public function setInternalName($_internalName)
    {
        return ($this->internalName = $_internalName);
    }
    /**
     * Get fieldId value
     * @return long|null
     */
    public function getFieldId()
    {
        return $this->fieldId;
    }
    /**
     * Set fieldId value
     * @param long $_fieldId the fieldId
     * @return long
     */
    public function setFieldId($_fieldId)
    {
        return ($this->fieldId = $_fieldId);
    }
    /**
     * Get displayName value
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }
    /**
     * Set displayName value
     * @param string $_displayName the displayName
     * @return string
     */
    public function setDisplayName($_displayName)
    {
        return ($this->displayName = $_displayName);
    }
    /**
     * Get value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $_value the value
     * @return string
     */
    public function setValue($_value)
    {
        return ($this->value = $_value);
    }
    /**
     * Get possibleValueId value
     * @return long|null
     */
    public function getPossibleValueId()
    {
        return $this->possibleValueId;
    }
    /**
     * Set possibleValueId value
     * @param long $_possibleValueId the possibleValueId
     * @return long
     */
    public function setPossibleValueId($_possibleValueId)
    {
        return ($this->possibleValueId = $_possibleValueId);
    }
    /**
     * Get memberValueId value
     * @return long|null
     */
    public function getMemberValueId()
    {
        return $this->memberValueId;
    }
    /**
     * Set memberValueId value
     * @param long $_memberValueId the memberValueId
     * @return long
     */
    public function setMemberValueId($_memberValueId)
    {
        return ($this->memberValueId = $_memberValueId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AccountWebWsdlClass::__set_state()
     * @uses AccountWebWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AccountWebStructFieldValue
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
