<?php 

if (!isset($_SESSION)) {
	session_start();
}

// site domain name with http
defined("SITE_URL")
	|| define("SITE_URL","http://".$_SERVER['SERVER_NAME']);

// Root path
defined("ROOT_PATH")
	|| define("ROOT_PATH",realpath(dirname(__FILE__).DS."..".DS));

// Classes Directory
defined("CLASSES_DIR")
	|| define("CLASSES_DIT","library");

// Classes path
defined("CLASSES_PATH")
	|| define("CLASSES_PATH",ROOT_PATH.DS.CLASSES_DIR);

// Plugin path
defined("PLUGIN_PATH")
	||define("PLUGIN_PATH",ROOT_PATH.DS."plugin");

// Pages Directory
	defined("PAGES_DIR")
		||define("PAGES_DIR","pages");

// Module folder
	defined("MOD_DIR")
		||define("MOD_DIR","mod");

// inc folder
	defined("INC_DIR")
		|| define("INC_DIR","inc");

// template folder
	defined("TEMPLATE_DIR")
		|| define("TEMPLATE_DIR","template");

// Email path
	defined("EMAIL_PATH")
		|| define("EMAIL_PATH",ROOT_PATH.DS."emails");

// Catalogue Directory
	defined("CATALOGUE_DIR")
		|| define("CATALOGUE_DIR","media".DS."Catalogue");

// Catalogue image path
	defined("CATALOGUE_PATH")
		|| define("CATALOGUE_PATH",ROOT_PATH.DS.CATALOGUE_DIR);


// SMTP

	defined("SMTP_USE")
		|| define("SMTP_USE",false);

	defined("SMTP_HOST")
		|| define("SMTP_HOST",'');

	defined("SMTP_USERNAME")
		|| define("SMTP_USERNAME",'');

	defined("SMTP_PASSWORD")
		|| define("SMTP_PASSWORD",'');

	defined("SMTP_PORT")
		|| define("SMTP_PORT",'');

	defined("SMTP_SSL")
		|| define("SMTP_SSL",'');


// Database
	defined("DB_HOST")
		|| define("DB_HOST",'localhost');
	defined("DB_NAME")
		|| define("DB_NAME",'');
	defined("DB_USER")
		|| define("DB_USER",'');
	defined("DB_PASS")
		|| define("DB_PASS",'');

//Add all Above directories to the include path

set_include_path(implode(PATH_SEPARATOR,array(
	realpath(ROOT_PATH.DS.INC_DIR),
	realpath(CLASSES_PATH),
	get_include_path()
	))); 


 ?>