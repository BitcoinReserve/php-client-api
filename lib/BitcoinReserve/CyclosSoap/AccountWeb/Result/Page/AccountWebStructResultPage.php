<?php
/**
 * File for class AccountWebStructResultPage
 * @package AccountWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
/**
 * This class stands for AccountWebStructResultPage originally named resultPage
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testnet.bitcoinreserve.ch/services/account?wsdl}
 * @package AccountWeb
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
abstract class AccountWebStructResultPage extends AccountWebWsdlClass
{
    /**
     * The currentPage
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $currentPage;
    /**
     * The pageSize
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $pageSize;
    /**
     * The totalCount
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $totalCount;
    /**
     * Constructor method for resultPage
     * @see parent::__construct()
     * @param int $_currentPage
     * @param int $_pageSize
     * @param int $_totalCount
     * @return AccountWebStructResultPage
     */
    public function __construct($_currentPage = NULL,$_pageSize = NULL,$_totalCount = NULL)
    {
        parent::__construct(array('currentPage'=>$_currentPage,'pageSize'=>$_pageSize,'totalCount'=>$_totalCount),false);
    }
    /**
     * Get currentPage value
     * @return int|null
     */
    public function getCurrentPage()
    {
        return $this->currentPage;
    }
    /**
     * Set currentPage value
     * @param int $_currentPage the currentPage
     * @return int
     */
    public function setCurrentPage($_currentPage)
    {
        return ($this->currentPage = $_currentPage);
    }
    /**
     * Get pageSize value
     * @return int|null
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }
    /**
     * Set pageSize value
     * @param int $_pageSize the pageSize
     * @return int
     */
    public function setPageSize($_pageSize)
    {
        return ($this->pageSize = $_pageSize);
    }
    /**
     * Get totalCount value
     * @return int|null
     */
    public function getTotalCount()
    {
        return $this->totalCount;
    }
    /**
     * Set totalCount value
     * @param int $_totalCount the totalCount
     * @return int
     */
    public function setTotalCount($_totalCount)
    {
        return ($this->totalCount = $_totalCount);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AccountWebWsdlClass::__set_state()
     * @uses AccountWebWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AccountWebStructResultPage
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
