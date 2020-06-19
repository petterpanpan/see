<?php

/* Redefine REQUEST_URI if empty (on some webservers...) */
if (!isset($_SERVER['REQUEST_URI']) || $_SERVER['REQUEST_URI'] == '')
	$_SERVER['REQUEST_URI'] = $_SERVER['SCRIPT_NAME'];
if ($tmp = strpos($_SERVER['REQUEST_URI'], '?'))
	$_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], 0, $tmp);
$_SERVER['REQUEST_URI'] = str_replace('//', '/', $_SERVER['REQUEST_URI']);

define('INSTALL_VERSION', '1.3.2.3');
define('INSTALL_PATH', dirname(__FILE__));
include_once(INSTALL_PATH.'/classes/ToolsInstall.php');
define('SETTINGS_FILE', INSTALL_PATH.'/../config/settings.inc.php');
define('DEFINES_FILE', INSTALL_PATH.'/../config/defines.inc.php');
define('INSTALLER__PS_BASE_URI', substr($_SERVER['REQUEST_URI'], 0, -1 * (strlen($_SERVER['REQUEST_URI']) - strrpos($_SERVER['REQUEST_URI'], '/')) - strlen(substr(dirname($_SERVER['REQUEST_URI']), strrpos(dirname($_SERVER['REQUEST_URI']), '/')+1))));
define('INSTALLER__PS_BASE_URI_ABSOLUTE', 'http://'.ToolsInstall::getHttpHost(false, true).INSTALLER__PS_BASE_URI);

// XML Header
header('Content-Type: text/xml');

// Switching method
if(isset($_GET['method']))
{
	switch ($_GET['method'])
	{
		
		case 'checkConfig' :
			include_once('xml/checkConfig.php');
		break;
	
		case 'checkDB' :
			include_once('xml/checkDB.php');
		break;
		
		case 'createDB' :
			include_once('xml/createDB.php');
		break;
	
		case 'checkMail' :
			include_once('xml/checkMail.php');
		break;
	
		case 'checkShopInfos' :
			include_once('xml/checkShopInfos.php');
		break;
		
		case 'doUpgrade' :
			include_once('xml/doUpgrade.php');
		break;
	}
}
?>
