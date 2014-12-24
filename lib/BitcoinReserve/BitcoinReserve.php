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
 * @category Global
 *
 */
abstract class BitcoinReserve {
	
	const VERSION = '1.1.0';
    const API_DOMAIN = 'bitcoinreserve.ch'; // Do not add subdomains, slash or any other character
    const API_BASE_LIVE = 'https://www.bitcoinreserve.ch/services';
    const WEB_BASE_LIVE = 'https://www.bitcoinreserve.ch';
    const API_BASE_TEST = 'https://testnet.bitcoinreserve.ch/services';
    const WEB_BASE_TEST = 'https://testnet.bitcoinreserve.ch';
	
	/**
	* @var string The Bitcoin Reserve API key to be used for authenticating requests.
	*/
	public static $apiKey;
	
	/**
	 * @var string The Bitcoin Reserve username.
	 */
	public static $username;	
  
	/**
	 * @var string The Bitcoin Reserve user transaction password.
	 */
	public static $transactionPwd;	
	
    /**
     * @var boolean
     */
    public static $testMode = false;

	/**
	 * @var boolean
	 */
	public static $debug = true;
	
	/**
	 * @var boolean
	 */
	public static $log = true;
	
	/**
	 * @var string The domain for the Bitcoin Reserve API.
	 */
	public static $apiDomain = self::API_DOMAIN;
	
	/**
	* @var string The base URL to get WSDL files.
	*/
	public static $apiBase = self::API_BASE_LIVE;
	
	/**
	 * @var string The base URL for the Bitcoin Reserve web site.
	 */
	public static $webBase = self::WEB_BASE_LIVE;
	
	/**
	 * @var string Path for the ca-bundle.crt which contains well known root CA certificates.
	 * It must contains bitcoinreserve certificates. Absolute path. Only needed is verifySslCerts is enabled.
	 */
	public static $caBundlePath;	

	/**
	* @var string|null The version of the Bitcoin Reserve API to use for requests.
	*/
	public static $apiVersion = null;
	
	/**
	* @var boolean Defaults to true.
	*/
	public static $verifySslCerts = true;
	
	/**
	 * @return string The API domain.
	 */
	public static function getApiDomain() {
		return self::$apiDomain;
	}
	
	/**
	 * Sets the API domain.
	 *
	 * @param string $apiDomain
	 */
	public static function setApiDomain($apiDomain) {
		self::$apiDomain = $apiDomain;
	}

	/**
	 * @return string The API base url to get WSDL files.
	 */
	public static function getApiBase() {
		return self::$apiBase;
	}
	
	/**
	 * Sets the API base url to get WSDL files.
	 *
	 * @param string $apiBase
	 */
	public static function setApiBase($apiBase) {
		self::$apiBase = $apiBase;
	}

	/**
	 * @return string The BitcoinReserve base url.
	 */
	public static function getWebBase() {
		return self::$webBase;
	}
	
	/**
	 * Sets the The BitcoinReserve base url.
	 *
	 * @param string $webBase
	 */
	public static function setWebBase($webBase) {
		self::$webBase = $webBase;
	}	

	/**
	* @return string The API key used for requests.
	*/
	public static function getApiKey() {
		return self::$apiKey;
	}

	/**
	* Sets the API key to be used for requests.
	*
	* @param string $apiKey
	*/
	public static function setApiKey($apiKey) {
		self::$apiKey = $apiKey;
	}
	
	/**
	 * @return string The API username used to authenticated the request in the server.
	 */
	public static function getUsername() {
		return self::$username;
	}
	
	/**
	 * Sets the API username to be used for requests.
	 *
	 * @param string $username
	 */
	public static function setUsername($username)	{
		self::$username = $username;
	}	

	/**
	 * @return string The user transaction password.
	 */
	public static function getTransactionPwd()	{
		return self::$transactionPwd;
	}
	
	/**
	 * Sets the user transaction password.
	 *
	 * @param string $transactionPwd
	 */
	public static function setTransactionPwd($transactionPwd) {
		self::$transactionPwd = $transactionPwd;
	}
	
	/**
	* @return string The API version used for requests. null if we're using the
	*    latest version.
	*/
	public static function getApiVersion()	{
		return self::$apiVersion;
	}

	/**
	* @param string $apiVersion The API version to use for requests.
	*/
	public static function setApiVersion($apiVersion) {
		self::$apiVersion = $apiVersion;
	}

	/**
	* @return boolean
	*/
	public static function getVerifySslCerts() {
		return self::$verifySslCerts;
	}

	/**
	* @param boolean $verify
	*/
	public static function setVerifySslCerts($verify) {
		self::$verifySslCerts = $verify;
	}
	
	/**
	 * @return string
	 */
	public static function getCaBundlePath() {
		return self::$caBundlePath;
	}
	
	/**
	 * @param string $caBundlePath
	 */
	public static function setCaBundlePath($caBundlePath) {
		self::$caBundlePath = $caBundlePath;
	}

    /**
     *
     */
    public static function enableTestMode() {
        self::setApiBase(self::API_BASE_TEST);
        self::setWebBase(self::WEB_BASE_TEST);
    }

    /**
     *
     */
    public static function enableLiveMode() {
        self::setApiBase(self::API_BASE_LIVE);
        self::setWebBase(self::WEB_BASE_LIVE);
    }
}