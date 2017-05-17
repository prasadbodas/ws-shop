<?php

class PageModel extends Model{

	public $_tablename = 'pages';
	//public $_primary_key = 'id';

	public function __construct($db){
		parent::__construct($db);
	}

}
