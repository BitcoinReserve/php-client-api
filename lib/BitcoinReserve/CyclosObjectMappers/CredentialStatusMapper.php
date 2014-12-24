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
 * Map XXXWebStructCredentialStatus to BitcoinReserve_CredentialStatus.
 * 
 * @author Jose Celano <josecelno@gmail.com>
 *
 */
class BitcoinReserve_CredentialStatusMapper extends BitcoinReserve_Mapper {
	
	/**
	 * Map from XXXWebStructCredentialStatus to BitcoinReserve_CredentialStatus.
	 *
	 * @param XXXWebStructCredentialStatus $structCredentialStatus
	 * @return BitcoinReserve_CredentialStatus
	 */
	public static function mapCredentialStatus($structCredentialStatus=null) {
		
		if (is_null($structCredentialStatus))
			return null;		
		
		// DEBUG
		//var_dump($structCredentialStatus);
		
		$credentialStatus = new BitcoinReserve_CredentialStatus();
		
		$credentialStatus->setStatus($structCredentialStatus);
		
		// DEBUG
		//var_dump($credentialStatus);

		return $credentialStatus;
	}
}