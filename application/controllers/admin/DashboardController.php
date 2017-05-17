<?php

/**
 *
 */
class DashboardController extends Controller
{

  function __construct()
  {
    parent::__construct();
  }

  public function index(){

    $content = 'views/admin/dashboard.php';
    include(APP . 'views/admin/_main.php');
  }

  public function login(){

    header('location: '. URL . 'admin/dashboard/index');

    if(isset($_POST['login'])){
        var_dump($_POST);
    }

    include(APP . 'views/admin/login.php');
  }
}
