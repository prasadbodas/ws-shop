<?php

class CategoryController extends Controller{

	public $category_mod = null;

	public function __construct(){
		parent::__construct();
		$this->category_mod = new CategoryModel($this->db);
	}

	public function index(){
		$rlt = $this->category_mod->get();
		$this->title = 'Product Categories' . " | " . $this->title;

		$content = 'views/admin/categories/index.php';
		include(APP . 'views/admin/_main.php');
	}

}
