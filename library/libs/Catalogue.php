<?php 

namespace libs;

class Catalogue extends Application{
	protected $_table='categories';
	protected $_table_2='products';

	public function __construct(){
		parent::__construct();
	}

	public function getCatagoryByIdentity($identity=null){
		if (!empty($identity)) {
			$sql="SELECT*
				FROM `{$this->_table}`
				WHERE `idenetity`=?";
			return $this->_Db->fetchOne($sql,$identity);
		}
		return null;
	}

	public function getProductByIdentity($identity=null){
		if (!empty($identity)) {
			$sql="SELECT*
				FROM `{$this->_table_2}`
				WHERE `identity`=?";
			return $this->_Db->fetchOne($sql,$identity);
		}
		return null;
	}

	public function getCategories(){
		$sql="SELECT*
		FROM `{$this->_table}`
		ORDER BY `name` ASC";
	}

	public function getCategory($id=null){
		if (!empty($id)) {
			$sql="SELECT 'c'.*,
			(
				SELECT COUNT('id')
				FROM `{$this->_table_2}`
				WHERE `category`=`c`.`id`)
			AS `product_count` FROM `{$this->_table}` 'c'
			WHERE `c`.`id`=?";
			return $this->_Db->fetchOne($sql,$id);
		}
		return null;
	}
}





 ?>