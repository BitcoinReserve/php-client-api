<?php

/*
 * This file is part of the bitcoin-reserve-php package.
 *
 * (c) Bitcoin Reserve <http://bitcoinreserve.ch/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class BitcoinReserve_PaymentResultMapper extends BitcoinReserve_Mapper {
	
	/**
	 * Map from XXXWebStructPaymentResult to BitcoinReserve_PaymentResult.
	 *
	 * @param XXXWebStructPaymentResult $structPaymentResult
	 * @return BitcoinReserve_PaymentResult
	 */
	public static function mapPaymentResult($structPaymentResult) {
		
		if (is_null($structPaymentResult))
			return null;		
		
		// DEBUG
		/*var_dump($structPaymentResult);
		die("DEBUG BitcoinReserve_PaymentResultMapper::mapPaymentResult");*/
				
		$paymentResult = new BitcoinReserve_PaymentResult();

		// NOTICE: For the time being status is mapped directly. Both classes use the same statuses and the same const representing the status internally.
		$paymentResult->setStatus($structPaymentResult->getStatus());

		$paymentResult->setTransfer(BitcoinReserve_TransferMapper::mapTransfer($structPaymentResult->getTransfer()));
		
		$paymentResult->setFromAccountStatus(BitcoinReserve_AccountStatusMapper::mapAccountStatus($structPaymentResult->getFromAccountStatus()));
		
		$paymentResult->setToAccountStatus(BitcoinReserve_AccountStatusMapper::mapAccountStatus($structPaymentResult->getToAccountStatus()));
		
		// DEBUG
		//var_dump($paymentResult);

		return $paymentResult;
	}
}