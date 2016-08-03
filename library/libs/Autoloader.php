<?php 
namespace libs;

class Autoloader{

	public static function load($className){
		$class=str_replace('\\',DS,ltrim($className,'\\'));
		$class=str_replace('-',DS,$class).'.php';
		@require_once($class);

	}
}