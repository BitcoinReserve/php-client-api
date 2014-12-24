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
 * Map XXXWebStructAccountHistoryResultPage to BitcoinReserve_AccountHistoryResultPage.
 * 
 * @author Jose Celano <josecelno@gmail.com>
 *
 */
class BitcoinReserve_AccountHistoryResultPageMapper extends BitcoinReserve_Mapper {
	
	/**
	 * Map from XXXWebStructAccountHistoryResultPage to BitcoinReserve_AccountHistoryResultPage.
	 *
	 * @param XXXWebStructAccountHistoryResultPage $structAccountHistoryResultPage
	 * @return BitcoinReserve_AccountHistoryResultPage
	 */
	public static function mapAccountHistoryResultPage($structAccountHistoryResultPage=null) {
		
		if (is_null($structAccountHistoryResultPage))
			return null;		
		
		// DEBUG
		//var_dump($structAccountHistoryResultPage);
		
		$accountHistoryResultPage = new BitcoinReserve_AccountHistoryResultPage();
		
		$accountHistoryResultPage->setAccountStatus(BitcoinReserve_AccountStatusMapper::mapAccountStatus($structAccountHistoryResultPage->getAccountStatus()));
		
		$accountHistoryResultPage->setCurrentPage($structAccountHistoryResultPage->getCurrentPage());
		$accountHistoryResultPage->setTotalCount($structAccountHistoryResultPage->getTotalCount());
		
		$transferArray = array();
		
		$bitcoinReserveStructTransferArray = $structAccountHistoryResultPage->getTransfers();
		
		// DEBUG
		/*print_r($bitcoinReserveStructTransferArray);
		die("DEBUG BitcoinReserve_AccountHistoryResultPageMapper::mapAccountHistoryResultPage");*/
		
		if (is_array($bitcoinReserveStructTransferArray)) {
			foreach ($bitcoinReserveStructTransferArray as $structTransferKey => $structTransfer) {
				$transferArray[$structTransferKey] = BitcoinReserve_TransferMapper::mapTransfer($structTransfer);
			}
		}
		$accountHistoryResultPage->setTransfers($transferArray);

		// DEBUG
		//var_dump($accountHistoryResultPage);

		return $accountHistoryResultPage;
	}
}