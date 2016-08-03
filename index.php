<?php 

use SSD\Core;

date_default_timezone_get('Europe/London');

if(!isset($_SESSION)){
	session_start();
}

// 0=>production, 1=>development
defined("ENVIRONMENT")
	||define("ENVIRONMENT",1);

defined("DS")
	||define("DS",DIRECTORY_SEPARATOR);

if (ENVIRONMENT==1) {
	ini_set('display_errors','On');
	error_reporting(-1);
}else{
	ini_set('display_errors','Off');
	error_reporting(0);
}



require_once('inc'.DS.'config.php');
require_once('SSD'.DS.'SSDException.php');
require_once('SSD'.DS.'Autoloader.php');


$core=new Core();
$core->run();

set_exception_handler('SSD'.DS.'SSDException.php');
spl_atuload_register(array('SSD\Autoloader','load'));






 ?>