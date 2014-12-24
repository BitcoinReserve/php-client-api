<?php

/**
 * This file is part of the bitcoin-reserve-php package.
 *
 * (c) Bitcoin Reserve <http://bitcoinreserve.ch/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Katzgrau\KLogger\Logger;
use Psr\Log\LogLevel;

/**
 *
 * @package bitcoin-reserve-php
 * @category Util
 *
 */
final class BitcoinReserve_Logger extends Logger {
	
	/**
	 * @var BitcoinReserve_Logger
	 */
	public static $logger=null;
	
	/**
	 * http://php.net/manual/en/function.is-writable.php#73596
	 * 
	 * @param string $path
	 * @return boolean
	 */
	private static function isWritable($path) {
		
		//will work in despite of Windows ACLs bug
		//NOTE: use a trailing slash for folders!!!
		//see http://bugs.php.net/bug.php?id=27609
		//see http://bugs.php.net/bug.php?id=30931
	
		if ($path{strlen($path)-1}=='/') // recursively return a temporary file path
			return self::isWritable($path.uniqid(mt_rand()).'.tmp');
		else if (is_dir($path))
			return self::isWritable($path.'/'.uniqid(mt_rand()).'.tmp');
		// check tmp file for read/write capabilities
		$rm = file_exists($path);
		$f = @fopen($path, 'a');
		if ($f===false)
			return false;
		fclose($f);
		if (!$rm)
			unlink($path);
		return true;
	}

    /**
     * Get the singleton instance.
     *
     * @param string $logDirectory
     * @param int|string $logLevelThreshold Current minimum logging threshold
     * @throws Exception
     * @return BitcoinReserve_Logger
     */
	public static function instance($logDirectory='', $logLevelThreshold=LogLevel::DEBUG) {
		
		if (empty($logDirectory)) {
			
			// Default log directory
			$logDirectory = dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'Log'.DIRECTORY_SEPARATOR;

			// DEBUG
			//die("DEBUG BitcoinReserve_Logger::instance $logDirectory");
		}
		
		// Check directory perms
		if (!self::isWritable($logDirectory)) {
			throw new \Exception('Log directory is not writable: '.$logDirectory);
		}
		
		if (self::$logger === null) {
			self::$logger = new BitcoinReserve_Logger($logDirectory, $logLevelThreshold);
		}
		return self::$logger;
	}

    /**
     * Constructor
     *
     * @param string $logDirectory
     * @param integer $logLevelThreshold Current minimum logging threshold
     * @return \BitcoinReserve_Logger
     */
	public function __construct($logDirectory, $logLevelThreshold) {
		parent::__construct($logDirectory, $logLevelThreshold);
	}	
}