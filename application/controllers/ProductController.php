<?php

class ProductController extends Controller{

	public $product_mod = null;

	public function __construct(){
		parent::__construct();
		$this->product_mod = new ProductModel($this->db);
	}

	public function index($id = false){

		if($id == false){
			$rlt = $this->product_mod->get();
			$this->title = 'Products' . " | " . $this->title;
			$content = 'views/products/index.php';
		}else{
			$rlt = $this->product_mod->get_by($id);
			$this->title = 'Product' . " | " . $this->title;
			$content = 'views/products/detail.php';
		}

		include(APP . 'views/layouts/_main.php');
	}

	// public function add(){
	// 	$data = array(
	// 		'name'	=> "Samsung S7",
	// 		'created'	=> date('Y-m-d H:i:s')
	// 	);
	// 	$this->product_mod->insert($data);
	// }
}
