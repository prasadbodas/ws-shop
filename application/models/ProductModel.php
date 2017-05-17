<?php

class ProductModel extends Model{

	public $_tablename = 'products';

	public function __construct($db){
		parent::__construct($db);
	}

}
