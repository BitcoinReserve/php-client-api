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
 * Map XXXWebStructTransfer to BitcoinReserve_Transfer.
 * 
 * @author Jose Celano <josecelno@gmail.com>
 *
 */
class BitcoinReserve_TransferMapper extends BitcoinReserve_Mapper {
	
	/**
	 * Map from XXXWebStructTransfer to BitcoinReserve_Transfer.
	 *
	 * @param XXXWebStructTransfer $structTransfer
	 * @return BitcoinReserve_Ticket
	 */
	public static function mapTransfer($structTransfer=null) {
		
		if (is_null($structTransfer))
			return null;		
		
		// DEBUG
		/*ini_set('xdebug.var_display_max_depth', -1);
		ini_set('xdebug.var_display_max_children', -1);
		ini_set('xdebug.var_display_max_data', -1);		
		var_dump($structTransfer);
		//die("DEBUG BitcoinReserve_TransferMapper::mapTransfer");*/
		
		$transfer = new BitcoinReserve_Transfer();
		
		$transfer->setId($structTransfer->getId());
		$transfer->setDate($structTransfer->getDate());
		$transfer->setFormattedDate($structTransfer->getFormattedDate());
		$transfer->setProcessDate($structTransfer->getProcessDate());
		$transfer->setFormattedProcessDate($structTransfer->getFormattedProcessDate());
		$transfer->setAmount((float)$structTransfer->getAmount());
		$transfer->setFormattedAmount($structTransfer->getFormattedAmount());
		$transfer->setStatus($structTransfer->getStatus());
		
		$transfer->setTransferType(BitcoinReserve_TransferTypeMapper::mapTransferType($structTransfer->getTransferType()));
		
		$transfer->setDescription($structTransfer->getDescription());
		
		$transfer->setFromMember(BitcoinReserve_MemberMapper::mapMember($structTransfer->getFromMember()));
		$transfer->setMember(BitcoinReserve_MemberMapper::mapMember($structTransfer->getMember()));
		
		$transfer->setTransactionNumber($structTransfer->getTransactionNumber());	
		
		// DEBUG
		/*var_dump($transfer);
		die("DEBUG BitcoinReserve_TransferMapper::mapTransfer");*/

		return $transfer;
	}
}