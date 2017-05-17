<?php

class Controller{

	public $db = NULL;
	public $model = NULL;
	public $session = null;
	public $title = '';

	public function __construct(){
		$this->db = DBConnection::getDBConnection();
		$this->title = PROJECT_NAME;

		$this->session = new Session();
	}
}
