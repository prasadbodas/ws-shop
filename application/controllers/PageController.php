<?php

class PageController extends Controller{

	public $page_mod = null;

	public function __construct(){
		parent::__construct();
		$this->page_mod = new PageModel($this->db);
	}

	public function index($slug = false){
		if($slug == false){
			// $this->title = '404 Not Found' . " | " . $this->title;
			// $content = 'views/404.php';

			$this->homepage();
			die();
		}else{
			$this->page_mod->_primary_key = 'slug';
			$rlt = $this->page_mod->get_by($slug);
			if($rlt->num_rows > 0){
				$this->title = 'Page' . " | " . $this->title;
				$content = 'views/pages/page.php';
			}else{
				$this->title = '404 Not Found' . " | " . $this->title;
				$content = 'views/404.php';
			}
		}

		include(APP . 'views/layouts/_main.php');
	}

	public function homepage(){
		$this->page_mod->_primary_key = 'template';
		$rlt = $this->page_mod->get_by('homepage');

		$content = 'views/pages/homepage.php';
		include(APP . 'views/layouts/_main.php');
	}

}
