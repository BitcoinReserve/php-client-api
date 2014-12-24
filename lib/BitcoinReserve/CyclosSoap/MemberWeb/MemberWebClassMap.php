<?php
/**
 * File for the class which returns the class map definition
 * @package MemberWeb
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
/**
 * Class which returns the class map definition by the static method MemberWebClassMap::classMap()
 * @package MemberWeb
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
class MemberWebClassMap
{
    /**
     * This method returns the array containing the mapping between WSDL structs and generated classes
     * This array is sent to the SoapClient when calling the WS
     * @return array
     */
    final public static function classMap()
    {
        return array (
  'entityVO' => 'MemberWebStructEntityVO',
  'loadByAccountNumber' => 'MemberWebStructLoadByAccountNumber',
  'loadByAccountNumberResponse' => 'MemberWebStructLoadByAccountNumberResponse',
  'loadByDisplayName' => 'MemberWebStructLoadByDisplayName',
  'loadByDisplayNameResponse' => 'MemberWebStructLoadByDisplayNameResponse',
  'member' => 'MemberWebStructMember',
);
    }
}
