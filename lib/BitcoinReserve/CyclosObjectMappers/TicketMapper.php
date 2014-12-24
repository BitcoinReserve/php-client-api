<?php

/*
 * This file is part of the bitcoin-reserve-php package.
 *
 * (c) Bitcoin Reserve <http://bitcoinreserve.ch/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class BitcoinReserve_TicketMapper extends BitcoinReserve_Mapper {
	
	/**
	 * Map from XXXWebStructWebshopTicket to BitcoinReserve_Ticket.
	 *
	 * @param XXXWebStructWebshopTicket $structWebshopTicket
	 * @return BitcoinReserve_Ticket
	 */
	public static function mapTicket($structWebshopTicket) {
		
		if (is_null($structWebshopTicket))
			return null;		
		
		// DEBUG
		//var_dump($structWebshopTicket);
				
		$ticket = new BitcoinReserve_Ticket();
		
		// DEBUG
		//var_dump($ticket);
		
		// XXXWebStructWebshopTicket extends BitcoinReserveStructTicketVO
				
		// Attributes from BitcoinReserveStructTicketVO
		$ticket->setId($structWebshopTicket->getId());
		$ticket->setTicket($structWebshopTicket->getTicket());
		$ticket->setAmount((float)$structWebshopTicket->getAmount());
		$ticket->setFormattedAmount($structWebshopTicket->getFormattedAmount());
		
		// Extract currency from FormattedAmount. Ticket has not currency attribute.
		$currency = substr($structWebshopTicket->getFormattedAmount(), -3);
		
		if (!BitcoinReserve_Currency::isValid($currency)) {
			throw new BitcoinReserve_Error("BitcoinReserve_TicketMapper::mapTicket. Invalid currency: $currency. Valid values: ".BitcoinReserve_Currency::printValidCurrenciesSymbols().".");
		}
		$ticket->setCurrency($currency);
		
		$ticket->setFromMember(BitcoinReserve_MemberMapper::mapMember($structWebshopTicket->getFromMember()));
		$ticket->setToMember(BitcoinReserve_MemberMapper::mapMember($structWebshopTicket->getToMember()));
				
		$ticket->setCreationDate($structWebshopTicket->getCreationDate()); // TODO: map to DateTime
		$ticket->setFormattedCreationDate($structWebshopTicket->getFormattedCreationDate());
		$ticket->setDescription($structWebshopTicket->getDescription());
		
		if ($structWebshopTicket->getOk()) {
			$ticket->setStatus(BitcoinReserve_Ticket::STATUS_OK);
		} elseif ($structWebshopTicket->getCancelled()) {
			$ticket->setStatus(BitcoinReserve_Ticket::STATUS_CANCELLED);
		} elseif ($structWebshopTicket->getPending()) {
			$ticket->setStatus(BitcoinReserve_Ticket::STATUS_PENDING);			
		} elseif ($structWebshopTicket->getExpired()) {
			$ticket->setStatus(BitcoinReserve_Ticket::STATUS_EXPIRED);
		} elseif ($structWebshopTicket->getAwaitingAuthorization()) {
			$ticket->setStatus(BitcoinReserve_Ticket::STATUS_AWAITING_AUTHORIZATION);
		} else {
			throw new Exception("Error BitcoinReserve_TicketMapper::mapTicket. No valid state value.");
		}
		
		$ticket->setOk($structWebshopTicket->getOk());
		$ticket->setCancelled($structWebshopTicket->getCancelled());
		$ticket->setPending($structWebshopTicket->getPending());
		$ticket->setExpired($structWebshopTicket->getExpired());
		$ticket->setAwaitingAuthorization($structWebshopTicket->getAwaitingAuthorization());
		
		// Attributes from XXXWebStructWebshopTicket
		$ticket->setClientAddress($structWebshopTicket->getClientAddress());
		$ticket->setMemberAddress($structWebshopTicket->getMemberAddress());
		$ticket->setReturnUrl($structWebshopTicket->getReturnUrl());		
		
		// DEBUG
		//var_dump($ticket);

		return $ticket;
	}
}