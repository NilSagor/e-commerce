<?php 

namespace libs;

use \Exception;
class LibsException extends Exception{
	private static function _isDvelopment(){
		return(ENVIRONMENT==1)
	}

	public static function getOutput($e=null){
		if (is_object($e) && ($e instanceof Exception)) {
			if (self::_isDvelopment()) {
				$out=array();
				$out[]='Message:'.$e->getMessage();
				$out[]='File:'.$e->getFile();
				$out[]='Line:'.$e->getLine();
				$out[]='Code:'.$e->getCode();
				echo '<ul><li>'.implode("</li><li>",$out).'</li></ul>';
				exit();
			}else{
				echo '<p>An error occured.<br>';
				echo 'Please contact us explaining what has happened <br/>';
				echo 'We are sorry for any inconvenience</p>';
				exit();
			}
		}
	}
}


 ?>