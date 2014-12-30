Bitcoin Reserve Java SOAP Client
================================

This software enables your application to send SOAP messages to Bitcoin Reserve and receive responses. 
It requires credentials for an active BitcoinReserve.ch Business Account obtainable through the [website](https://bitcoinreserve.ch).  

Requirements
------------
PHP 5.3 or higher.  
SOAP extension. 

Usage
-----

    <?php 
 
    // BitcoinReserve php library
    require(dirname(__FILE__) . '/../bitcoin-reserve-php-1.1.0/lib/BitcoinReserve.php');

    // Use Bitcoin Reserve's Testnet server
    BitcoinReserve::enableTestMode();
    
    // Supply your credentials
    BitcoinReserve::setApiKey('yourApiKey');
    BitcoinReserve::setUsername('yourAccountNumber');
    BitcoinReserve::setTransactionPwd('yourTransactionPassword');
 
    // Ticker
    $ticker = BitcoinReserve_WebShopService::ticker();
 
    echo "<b>Ticker: </b>" . $ticker->getTicker() . " USD<br/>";
    echo "<b>Timestamp (ISO 8601): </b>" . $ticker->getTimestamp();    
    
This version of the client currently supports:  

- ticker  
- searchAccountHistory  
- loadTransfer  
- getMemberAccounts  
- loadByDisplayName  
- loadByAccountNumber    
- doPayment  
- simulatePayment  
- doBulkPayment  
- generateTicket  
- getTicket  
- expireTicket  
  
  
Please check the server's current WSDL specification for inconsistencies: \[[Testnet](https://testnet.bitcoinreserve.ch/services)] or \[[Production](https://bitcoinreserve.ch/services)]. 
  

Additional Information
----------------------

See a [live demonstration in PHP](https://testnet.bitcoinreserve.ch/demo)  
This project is based on [Cyclos3's](http://www.cyclos.org/cyclos3/features/) 
[Web Services](http://www.cyclos.org/wiki/index.php/Web_services)  

