<?php

/*
 * This file is part of the bitcoin-reserve-php package.
 *
 * (c) Bitcoin Reserve <http://bitcoinreserve.ch/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Map XXXWebStructCurrency to BitcoinReserve_Currency.
 * 
 * @author Jose Celano <josecelno@gmail.com>
 *
 */
class BitcoinReserve_CurrencyMapper extends BitcoinReserve_Mapper {
	
	/**
	 * Map from XXXWebStructCurrency to BitcoinReserve_Currency.
	 *
	 * @param XXXWebStructCurrency $structCurrency
	 * @return BitcoinReserve_Ticket
	 */
	public static function mapCurrency($structCurrency=null) {
		
		if (is_null($structCurrency))
			return null;		
		
		// DEBUG
		//var_dump($structCurrency);
		//die("DEBUG BitcoinReserve_CurrencyMapper::mapCurrency");
		
		$currency = new BitcoinReserve_Currency();
		
		if (!BitcoinReserve_Currency::isValid($structCurrency->getSymbol())) {
			throw new BitcoinReserve_Error("BitcoinReserve_CurrencyMapper::mapCurrency. Invalid currency: ".$structCurrency->getSymbol().". Valid values: ".BitcoinReserve_Currency::printValidCurrenciesSymbols().".");
		}		
		
		$currency->setSymbol($structCurrency->getSymbol());
		$currency->setName($structCurrency->getName());
		$currency->setPattern($structCurrency->getPattern());
		
		// DEBUG
		//var_dump($currency);
		//die("DEBUG BitcoinReserve_CurrencyMapper::mapCurrency");

		return $currency;
	}
}