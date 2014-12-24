<?php

/*
 * This file is part of the bitcoin-reserve-php package.
 *
 * (c) Bitcoin Reserve <http://bitcoinreserve.ch/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class BitcoinReserve_MemberMapper extends BitcoinReserve_Mapper {
	
	/**
	 * Map from XXXWebStructMember to BitcoinReserve_Member.
	 *
	 * @param XXXWebStructMember $structMember
	 * @return BitcoinReserve_Ticket
	 */
	public static function mapMember($structMember=null) {
		
		if (is_null($structMember))
			return null;
		
		$member = new BitcoinReserve_Member();
		
		$member->setId($structMember->getId());
        $member->setAccountNumber($structMember->getAccountNumber());
		$member->setName($structMember->getName());
		$member->setGroupId($structMember->getGroupId());

		return $member;
	}
}