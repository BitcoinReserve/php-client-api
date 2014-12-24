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
 * Map XXXWebStructAccountStatus to BitcoinReserve_AccountStatus.
 * 
 * @author Jose Celano <josecelno@gmail.com>
 *
 */
class BitcoinReserve_AccountStatusMapper extends BitcoinReserve_Mapper {
	
	/**
	 * Map from XXXWebStructAccountStatus to BitcoinReserve_AccountStatus.
	 *
	 * @param XXXWebStructAccountStatus $structAccountStatus
	 * @return BitcoinReserve_AccountStatus
	 */
	public static function mapAccountStatus($structAccountStatus=null) {
		
		if (is_null($structAccountStatus))
			return null;		
		
		// DEBUG
		//var_dump($structAccountStatus);
		
		$accountStatus = new BitcoinReserve_AccountStatus();
		
		$currency = substr($structAccountStatus->getFormattedBalance(), -3);
		if (!BitcoinReserve_Currency::isValid($currency)) {
			throw new BitcoinReserve_Error("BitcoinReserve_AccountStatusMapper::mapAccountStatus. Invalid currency: $currency. Valid values: ".BitcoinReserve_Currency::printValidCurrenciesSymbols().".");
		}
		$accountStatus->setCurrency($currency);
		
		$accountStatus->setBalance((float)$structAccountStatus->getBalance());
		$accountStatus->setFormattedBalance($structAccountStatus->getFormattedBalance());
		$accountStatus->setAvailableBalance((float)$structAccountStatus->getAvailableBalance());
		$accountStatus->setFormattedAvailableBalance($structAccountStatus->getFormattedAvailableBalance());
		$accountStatus->setReservedAmount((float)$structAccountStatus->getReservedAmount());
		$accountStatus->setFormattedReservedAmount($structAccountStatus->getFormattedReservedAmount());
		$accountStatus->setCreditLimit((float)$structAccountStatus->getCreditLimit());
		$accountStatus->setFormattedCreditLimit($structAccountStatus->getFormattedCreditLimit());
		$accountStatus->setUpperCreditLimit((float)$structAccountStatus->getUpperCreditLimit());
		$accountStatus->setFormattedUpperCreditLimit($structAccountStatus->getFormattedUpperCreditLimit());

		// DEBUG
		//var_dump($accountStatus);

		return $accountStatus;
	}
}