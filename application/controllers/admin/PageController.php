<?php

class PageController extends Controller{

	public $page_mod = null;

	public function __construct(){
		parent::__construct();
		$this->page_mod = new PageModel($this->db);
	}

	public function index($slug = false){
		$rlt = $this->page_mod->get();
		$this->title = 'Pages' . " | " . $this->title;

		$content = 'views/admin/pages/index.php';
		include(APP . 'views/admin/_main.php');
	}

	public function edit($id = false){
		if($id){
			$page = $this->page_mod->get_by($id);
		}else{
			
		}
		// if(isset($_POST['submit'])){
		// 	$data = array(
		// 		'name'		=> htmlspecialchars($_POST['name']),
		// 		'slug'		=> $_POST['slug'],
		// 		'body'		=> htmlspecialchars($_POST['body']),
		// 		'template'	=> $_POST['template'],
		// 		'parent_id'	=> $_POST['parent_id'],
		// 		'created'	=> date('Y-m-d H:i:s')
		// 	);
		// 	if($this->page_mod->insert($data)){
		// 		header('location:'.URL.'admin/page');
		// 	}
		// }

		$rlt = $this->page_mod->get();

		$content = 'views/admin/pages/form.php';
		include(APP . 'views/admin/_main.php');
	}

}
