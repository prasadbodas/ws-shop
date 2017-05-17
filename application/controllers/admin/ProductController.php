<?php

class ProductController extends Controller{

	public $product_mod = null;

	public function __construct(){
		parent::__construct();
		$this->product_mod = new ProductModel($this->db);
	}

	public function index(){
		$rlt = $this->product_mod->get();
		$this->title = 'Products' . " | " . $this->title;

		$content = 'views/admin/products/index.php';
		include(APP . 'views/admin/_main.php');
	}

	public function add(){
		$data = array(
			'name'	=> "Lenovo k6 Power",
			'created'	=> date('Y-m-d H:i:s')
		);
		$this->product_mod->insert($data);
	}
}
