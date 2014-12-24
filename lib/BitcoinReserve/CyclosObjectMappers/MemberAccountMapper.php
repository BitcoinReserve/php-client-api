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
 * 
 *
 */
class BitcoinReserve_MemberAccountMapper extends BitcoinReserve_Mapper {
	
	/**
	 * Map XXXWebReserveStructMemberAccount to BitcoinReserve_MemberAccount.
	 *
	 * @param XXXWebReserveStructMemberAccount $structMemberAccount
	 * @return BitcoinReserve_MemberAccount
	 */
	public static function mapMemberAccount($structMemberAccount) {
		
		if (is_null($structMemberAccount))
			return null;		
	
		$memberAccount = new BitcoinReserve_MemberAccount();
		
		$memberAccount->setCurrency($structMemberAccount->getType()->getCurrency()->getSymbol());
		$memberAccount->setIsDefault($structMemberAccount->getIsDefault());
		$memberAccount->setType(BitcoinReserve_AccountTypeMapper::mapAccountType($structMemberAccount->getType()));

		return $memberAccount;
	}
}