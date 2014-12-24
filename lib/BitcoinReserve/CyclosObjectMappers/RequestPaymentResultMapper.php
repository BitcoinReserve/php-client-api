<?php

/*
 * This file is part of the bitcoin-reserve-php package.
 *
 * (c) Bitcoin Reserve <http://bitcoinreserve.ch/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class BitcoinReserve_RequestPaymentResultMapper extends BitcoinReserve_Mapper {
	
	/**
	 * Map from XXXWebStructRequestPaymentResult to BitcoinReserve_RequestPaymentResult.
	 *
	 * @param XXXWebStructRequestPaymentResult $structRequestPaymentResult
	 * @return BitcoinReserve_RequestPaymentResult
	 */
	public static function mapRequestPaymentResult($structRequestPaymentResult) {
		
		if (is_null($structRequestPaymentResult))
			return null;		
		
		// DEBUG
		//var_dump($structRequestPaymentResult);
				
		$requestPaymentResult = new BitcoinReserve_RequestPaymentResult();
		
		$requestPaymentResult->setStatus($structRequestPaymentResult->getStatus());
		$requestPaymentResult->setTicket($structRequestPaymentResult->getTicket());
		
		// DEBUG
		//var_dump($requestPaymentResult);

		return $requestPaymentResult;
	}
}