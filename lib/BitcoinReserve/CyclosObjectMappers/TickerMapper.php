<?php

/*
 * This file is part of the bitcoin-reserve-php package.
 *
 * (c) Bitcoin Reserve <http://bitcoinreserve.ch/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class BitcoinReserve_TickerMapper extends BitcoinReserve_Mapper {
	
	/**
	 * Map from WebShopWebStructTickerVO to BitcoinReserve_Ticker.
	 *
	 * @param WebShopWebStructTickerVO $webShopWebStructTickerVO
	 * @return BitcoinReserve_Ticker
	 */
	public static function mapTicker($webShopWebStructTickerVO) {
		
		if (is_null($webShopWebStructTickerVO))
			return null;		
		
		// DEBUG
		//var_dump($webShopWebStructTickerVO);
				
		$ticker = new BitcoinReserve_Ticker();
		
		// DEBUG
		//var_dump($ticker);
		
		// WebShopWebStructTickerVO extends WebShopWebStructEntityVO
				
		// Attributes from WebShopWebStructEntityVO
		$ticker->setId($webShopWebStructTickerVO->getId());
		
		// Attributes from WebShopWebStructTickerVO
		$ticker->setTicker(round((float)$webShopWebStructTickerVO->getTicker(),2));
		$ticker->setTimestamp($webShopWebStructTickerVO->getTimestamp());
		
		// DEBUG
		//var_dump($ticker);

		return $ticker;
	}
}