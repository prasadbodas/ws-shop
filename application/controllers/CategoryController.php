<?php

class CategoryController extends Controller{

	public $category_mod = null;

	public function __construct(){
		parent::__construct();
		$this->category_mod = new CategoryModel($this->db);
	}

	public function index($id = false){

		if($id == false){
			$rlt = $this->category_mod->get();
			$this->title = 'Product Categories' . " | " . $this->title;
			$content = 'views/categories/index.php';
		}else{
			$category = $this->category_mod->get_by($id);
			$rlt = $this->category_mod->get_products_by($id);
			$this->title = 'Category' . " | " . $this->title;
			$content = 'views/categories/archive.php';
		}

		include(APP . 'views/layouts/_main.php');
	}

}
