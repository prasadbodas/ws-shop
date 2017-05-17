<?php

class CategoryModel extends Model{

	public $_tablename = 'categories';

	public function __construct($db){
		parent::__construct($db);
	}

	public function get_products_by($id){
		$query = 'select p.name,p.id,p.image,c.name as category FROM products as p
				join category_products as cp ON (cp.product_id = p.id)
				join categories as c ON (c.id = cp.category_id)
				where cp.category_id = '.$id.'
		';
		$result = mysqli_query($this->_db, $query);
		return $result;
	}

}
