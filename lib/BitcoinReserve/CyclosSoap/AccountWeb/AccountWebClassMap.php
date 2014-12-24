<?php
/**
 * File for the class which returns the class map definition
 * @package AccountWeb
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
/**
 * Class which returns the class map definition by the static method AccountWebClassMap::classMap()
 * @package AccountWeb
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-23
 */
class AccountWebClassMap
{
    /**
     * This method returns the array containing the mapping between WSDL structs and generated classes
     * This array is sent to the SoapClient when calling the WS
     * @return array
     */
    final public static function classMap()
    {
        return array (
  'accountHistoryResultPage' => 'AccountWebStructAccountHistoryResultPage',
  'accountHistorySearchParameters' => 'AccountWebStructAccountHistorySearchParameters',
  'accountStatus' => 'AccountWebStructAccountStatus',
  'accountType' => 'AccountWebStructAccountType',
  'basePaymentDataVO' => 'AccountWebStructBasePaymentDataVO',
  'basePaymentVO' => 'AccountWebStructBasePaymentVO',
  'currency' => 'AccountWebStructCurrency',
  'entityVO' => 'AccountWebStructEntityVO',
  'fieldValue' => 'AccountWebStructFieldValue',
  'getMemberAccounts' => 'AccountWebStructGetMemberAccounts',
  'getMemberAccountsResponse' => 'AccountWebStructGetMemberAccountsResponse',
  'loadTransfer' => 'AccountWebStructLoadTransfer',
  'loadTransferParameters' => 'AccountWebStructLoadTransferParameters',
  'loadTransferResponse' => 'AccountWebStructLoadTransferResponse',
  'member' => 'AccountWebStructMember',
  'memberAccount' => 'AccountWebStructMemberAccount',
  'paymentStatusVO' => 'AccountWebEnumPaymentStatusVO',
  'resultPage' => 'AccountWebStructResultPage',
  'searchAccountHistory' => 'AccountWebStructSearchAccountHistory',
  'searchAccountHistoryResponse' => 'AccountWebStructSearchAccountHistoryResponse',
  'searchParameters' => 'AccountWebStructSearchParameters',
  'transfer' => 'AccountWebStructTransfer',
  'transferType' => 'AccountWebStructTransferType',
);
    }
}
