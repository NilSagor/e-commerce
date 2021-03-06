<?php 

class Helper{
	public static function encodeHTML($string,$case=2){
		switch ($case) {
			case 1:
				return htmlentitties($string,ENT_NOQOUTES,'UTF-8',false);
				break;
			case 2:
				$pattern='<([a-zA-Z0-9\.\,"\'_\/\-\+~=;:\(\)?&#%![\]@]+)>';
				// put text onyl divided with html tags into array
				$textMatches=preg_split('/'.$pattern.'/',$string);
				// array for sanitized output
				$textSanitised=array();
				foreach ($textMatches as $key => $value) {
					$textSanitised[$key]=htmlentities(html_entity_decode($value,ENT_NOQOUTES,'UTF-8'),ENT_NOQOUTES,'UTF-8');
				}
				foreach ($textMatches as $key => $value) {
					$string=str_replace($value,$textSanitised[$key],$string);
				}
			
				break;
		}
	}

	public static function getImageSize($image,$case){
		if (is_file($image)) {
			// 0=>width,1=>height,2=>type,3=>attributes
			$size=getImage($image);
			return $size[$case];
		}
	}

	public static function shortenString($string,$len=150){
		if (strlen($string)>$len) {
			$string=trim(substr($string,0,$len));
			$string=substr($string,0,strrpos($string,""))."&hellip;";
		}else{
			$string.="&hellip;";			
		}
		return $string;
	}

	public static function redirect($url=null){
		if (!empty($url)) {
			header("Location:{$url}");
			exit;
		}
	}

	public static function setDate($case=null,$date=null){
		$date=empty($data)?time():strtotime($date);
		switch ($case) {
			case 1:
				// 01/01/2010
			return date('d/m/Y',$date);
				break;
			case 2:
				//Monday 1st January 2010 09:30:56
			return date('l, jS F Y, H:i:s', $date);
				break;
				case 3:
				// 2010-01-01-09-3056
			return date('Y-m-d-H-i-s',$date);
				break;
			default:
				return date('Y-m-d H:i:s',$date);
				break;
		}
	}


	public static function cleanString($name=null){
		if (!empty($name)) {
			return strtolower(preg_replace('/[^a-zA-Z0-9,]/','-',$name));
		}
	}

	public static function clearString($string=null,$array=null){
		if (!empty($string) && !self::isEmpty($array)) {
			$array=self::makeArray($array);
			foreach ($array as $key => $value) {
				$string=str_replace($value,'',$string);
			}
			return $string;
		}
	}


	public static function isEmpty($value=null){
		return empty($value) && !is_numeric($value)?true:false;
	}

	public static function makeArray($array=null){
		return is_array($array) ? $array:array($array);
	}


	public function isArrayEmpty($array=null){
		return ($empty($array)||!is_array($array));
	}









}




 ?>