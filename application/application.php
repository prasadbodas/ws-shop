<?php

if(isset($_GET['url']) && $_GET['url'] <> '' ){
	$url = trim($_GET['url'], '/');
	$url = explode('/', $url);

	if(is_dir(APP . 'controllers/' . $url[0])){
		$d = isset($url[0]) ? $url[0] : '';
		$c = isset($url[1]) ? $url[1] : 'dashboard';

		if(isset($url[2])){
			$m = $url[2];
		}else{
			$m = 'index';
		}

		unset($url[0]);
		unset($url[1]);
		unset($url[2]);

		$params = array_values($url);
	}else{
		$d = '';
		$c = isset($url[0]) ? $url[0] : 'page';

		if(isset($url[1])){
			$m = $url[1];
		}else{
			$m = ($c == 'page') ? 'homepage' : 'index';
		}

		unset($url[0]);
		unset($url[1]);

		$params = array_values($url);
	}
}else{
	$d = '';
	$c = 'page';
	$m = 'homepage';
}




require_once('config/config.php');
require_once('core/DBConnection.php');
require_once('core/Session.php');
require_once('core/Controller.php');
require_once('core/Model.php');

$c = ucfirst($c).'Controller';

if($d <> ''){
	require_once('controllers/'.$d.'/'.$c.'.php');
}else{
	require_once('controllers/'.$c.'.php');
}

function __autoload($m){
	require_once('models/'.$m.'.php');
}


if(!empty($params)){
	$c = new $c();
	call_user_func_array(array($c, $m), $params);
	// $c = new $c();
	// $c->$m($url);
}else{
	$c = new $c();
	$c->$m();
}
