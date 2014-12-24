<?php

/**
 * This file is part of the bitcoin-reserve-php package.
 *
 * (c) Bitcoin Reserve <http://bitcoinreserve.ch/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 *
 * @package bitcoin-reserve-php
 * @category Object
 *
 */
class BitcoinReserve_Currency extends BitcoinReserve_Object {
	
	const BTC = 'BTC';
	const USD = 'USD';

	// Currency list
	public static $CURRENCIES = array(
			self::BTC => self::BTC,
			self::USD => self::USD,
	);
		
    /**
     * The symbol. Sample: BTC
     * @var string
     */
    private $symbol;
    
    /**
     * The name. Sample: Bitcoin
     * @var string
     */
    private $name;
    
    /**
     * The pattern. A string containing #amount#, which should be replaced by the actual amount. 
     * For example: "$U #amount" would be replaced by "$U 0.00".
     * 
     * @var string
     */
    public $pattern;
    
    /**
     * Check if string is a currency valid const.
     *
     * @param string $symbol the currency symbol. Sample BTC
     * @return Boolean
     */
    public static function isValid($symbol) {
    	return (in_array($symbol, self::$CURRENCIES));
    }
    
    /**
     * Get a list of available currencies.
     *
     * @return string
     */
    public static  function getValidCurrenciesSymbols() {
    	return implode (", ", self::$CURRENCIES);
    }    
    
    /**
     * Print a list of available currencies.
     * 
     * @return string
     */
    public static  function printValidCurrenciesSymbols() {
    	echo BitcoinReserve_Currency::getValidCurrenciesSymbols();
    }    
    
    /**
     * Get symbol value
     * @return string|null
     */
    public function getSymbol() {
        return $this->symbol;
    }
    
    /**
     * Set symbol value
     * @param string $symbol the symbol
     * @return string
     */
    public function setSymbol($symbol) {
    	$this->symbol = $symbol;
        return $this;
    }
    
    /**
     * Get name value
     * @return string|null
     */
    public function getName() {
        return $this->name;
    }
    
    /**
     * Set name value
     * @param string $name the name
     * @return string
     */
    public function setName($name) {
    	$this->name = $name;
        return $this;
    }
    
    /**
     * Get pattern value
     * @return string|null
     */
    public function getPattern() {
        return $this->pattern;
    }
    
    /**
     * Set pattern value
     * @param string $pattern the pattern
     * @return string
     */
    public function setPattern($pattern) {
    	$this->pattern = $pattern;
        return $this;
    }
}