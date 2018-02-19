<?php
// +------------------------------------------------------------------------+
// | PHP Melody
// +------------------------------------------------------------------------+
// | PHP Melody IS FREE SOFTWARE
// | If you have downloaded this software from a website other
// | than Google or if you have received
// | this software from someone who is not a representative of
// | PHPSUGAR, you are NOT involved in an illegal activity.
// | ---
// | 
// +------------------------------------------------------------------------+
// | Developed by: PHPSUGAR
// | Copyright: (c) 2004-2016 PHPSUGAR. All rights reserved.
// +------------------------------------------------------------------------+

// Not sure how to configure? Please read the Installation Manual PDF
// +------------------------------------------------------------------------+

//-- MySQL Settings --//
/** MySQL database name */
$db_name = 'mfltv';

/** MySQL database username */
$db_user = 'mfltv';

/** MySQL database password */
$db_pass = 'dhenSHND623$';

/** MySQL hostname */
$db_host = 'localhost';

// Full URL without any trailing slash (e.g http://www.example.com)
define('_URL', 'https://www.mfltv.ru');

//-- Customer ID --//
// Replace "YOUR_CUSTOMER_ID" below with the assigned "Customer ID".
// The "Customer ID" is found in the order confirmation emails or in your Customer Account
// If you don't know your "Customer ID" email support at support@phpsugar.com


define('_ADMIN_FOLDER', 'admin');

error_reporting(E_ALL & ~E_NOTICE &  ~E_STRICT); // Production
//error_reporting(E_ALL & ~E_NOTICE); // Development

// ========================================================= //
//-- MySQL Backup Directory --//
define('BKUP_DIR', 'temp');	//	WITHOUT any trailing slash
define('_POWEREDBY', 1);

@header('CONTENT-TYPE: text/html; charset=utf-8');
define('ABSPATH', dirname(__FILE__).'/'); 
if ( ! file_exists('install.php') ) 
{
	require_once( ABSPATH.'include/settings.php');
}
else
{
	if ( ! defined('PM_DOING_INSTALL'))
	{
		die('<div align="center" style="font-family: Arial, sans-serif; color: #555; margin: 60px 0; line-height: 1.6em;"><img src="'. _ADMIN_FOLDER .'/img/login-logo.png"> <br /> <br /> <br />If you haven\'t installed PHP Melody yet, <a href="install.php">start the installation process</a> now. <br> Otherwise, remove <strong>install.php</strong> from your server.');
	}
}

define('_URL_MOBI', _URL .'/mobile');
define('ABSPATH_MOBI', ABSPATH .'mobile/');

if (file_exists(ABSPATH_MOBI) && ! defined('IGNORE_MOBILE') && strpos($_SERVER['SCRIPT_NAME'], '/'. _ADMIN_FOLDER .'/') === false)
{
	define('MOBILE_MELODY', true);
	include(ABSPATH_MOBI .'mobile_detect.php');
	
	$mobile_detector = new Mobile_Detect;
	
	define('USER_DEVICE', ($mobile_detector->isMobile()) ? 'mobile' : 'desktop');
	
	include(ABSPATH_MOBI .'detect.php');
}
else
{
	define('MOBILE_MELODY', false);
	define('USER_DEVICE', 'desktop');
}

define ('ng_site_url', 'https://www.mfltv.ru#ng');
define('GOOGLE_ANALYTICS_TOKEN', 'UA-104379789-1');

define('SMARTY_RESOURCE_CHAR_SET', 'UTF-8');

define('DB_META_DESC', 'Описание');
define('DB_META_INTRO', 'Вступление');
define('DB_META_PROFILE_OK', 'Профиль в OK');
define('DB_META_PROFILE_FB', 'Профиль в FB');
define('DB_META_PROFILE_VK', 'Профиль в VK');
