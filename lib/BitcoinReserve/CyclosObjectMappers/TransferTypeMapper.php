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
 * Map XXXWebStructTransferType to BitcoinReserve_TransferType.
 * 
 * @author Jose Celano <josecelno@gmail.com>
 *
 */
class BitcoinReserve_TransferTypeMapper extends BitcoinReserve_Mapper {
	
	/**
	 * Map from XXXWebStructTransferType to BitcoinReserve_TransferType.
	 *
	 * @param XXXWebStructTransferType $structTransferType
	 * @return BitcoinReserve_Ticket
	 */
	public static function mapTransferType($structTransferType=null) {
		
		if (is_null($structTransferType))
			return null;		
		
		// DEBUG
		//var_dump($structTransferType);
		//die("DEBUG BitcoinReserve_TransferTypeMapper::mapTransferType");
		
		$transferType = new BitcoinReserve_TransferType();
		
		$transferType->setId($structTransferType->getId());
		$transferType->setName($structTransferType->getName());
		
		$transferType->setFrom(BitcoinReserve_AccountTypeMapper::mapAccountType($structTransferType->getFrom()));
		$transferType->setTo(BitcoinReserve_AccountTypeMapper::mapAccountType($structTransferType->getTo()));
		
		// DEBUG
		//var_dump($transferType);
		//die("DEBUG BitcoinReserve_TransferTypeMapper::mapTransferType");

		return $transferType;
	}
}