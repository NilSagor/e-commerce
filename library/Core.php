<?php 

namespace libs;

class Core{
	public $objUrl;
	public $objNavigation;
	public $objCurrency;
	public $objAdmin;

	public $meta_title="E-commerce project";
	public $meta_description="E-commerce project";

	public function __construct(){
		$this->objUrl=new Url();
		$this->objNavigation=new Navigation($this->objUrl);
		$this->objCurrency=new Currency();
	}
}






 ?>