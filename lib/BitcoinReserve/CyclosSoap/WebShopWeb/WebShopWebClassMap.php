<?php
/**
 * File for the class which returns the class map definition
 * @package WebShopWeb
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
/**
 * Class which returns the class map definition by the static method WebShopWebClassMap::classMap()
 * @package WebShopWeb
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2014-12-22
 */
class WebShopWebClassMap
{
    /**
     * This method returns the array containing the mapping between WSDL structs and generated classes
     * This array is sent to the SoapClient when calling the WS
     * @return array
     */
    final public static function classMap()
    {
        return array (
  'entityVO' => 'WebShopWebStructEntityVO',
  'expireTicket' => 'WebShopWebStructExpireTicket',
  'expireTicketResponse' => 'WebShopWebStructExpireTicketResponse',
  'generateTicket' => 'WebShopWebStructGenerateTicket',
  'generateTicketResponse' => 'WebShopWebStructGenerateTicketResponse',
  'generateWebShopTicketParams' => 'WebShopWebStructGenerateWebShopTicketParams',
  'getTicket' => 'WebShopWebStructGetTicket',
  'getTicketResponse' => 'WebShopWebStructGetTicketResponse',
  'member' => 'WebShopWebStructMember',
  'ticker' => 'WebShopWebStructTicker',
  'tickerResponse' => 'WebShopWebStructTickerResponse',
  'tickerVO' => 'WebShopWebStructTickerVO',
  'ticketVO' => 'WebShopWebStructTicketVO',
  'webshopTicket' => 'WebShopWebStructWebshopTicket',
);
    }
}
