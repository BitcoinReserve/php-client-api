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
 * Map XXXWebStructAccountType to BitcoinReserve_AccountType.
 * 
 * @author Jose Celano <josecelno@gmail.com>
 *
 */
class BitcoinReserve_AccountTypeMapper extends BitcoinReserve_Mapper {
	
	/**
	 * Map from XXXWebStructAccountType to BitcoinReserve_AccountType.
	 *
	 * @param XXXWebStructAccountType $structAccountType
	 * @return BitcoinReserve_AccountType
	 */
	public static function mapAccountType($structAccountType=null) {
		
		if (is_null($structAccountType))
			return null;		
		
		// DEBUG
		//var_dump($structAccountType);
		
		$accountType = new BitcoinReserve_AccountType();
		
		$accountType->setId($structAccountType->getId());
		$accountType->setName($structAccountType->getId());
		$accountType->setCurrency(BitcoinReserve_CurrencyMapper::mapCurrency($structAccountType->getCurrency()));

		// DEBUG
		//var_dump($accountType);

		return $accountType;
	}
}