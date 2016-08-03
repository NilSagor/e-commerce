<?php 

namespace libs;

class Url{
	public $key_page='page';
	public $key_modules=array('panel');
	public $module='front';
	public $main='index';
	public $cpage='index';
	public $c='login';
	public $a='index';
	public $params=array();
	public $paramsRaw=array();
	public $stringRaw;


	public function __construct(){
		$this->_process;
	}

	private function _process(){
		$uri=$_SERVER['REQUEST_URI'];
		if (!empty($uri)) {
			$uriQ=explode('?',$uri);
			$uri=$uriQ[0];
			if (count($uriQ)>1) {
				$uriRaw=explode('&',$uriQ[1]);
				if (count($uriRaw)>1) {
					foreach ($uriRaw as $key => $row) {
						$this->splitRaw($row);
					}
				}
			}
		}
	}
}
