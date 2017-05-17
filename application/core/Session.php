<?php

/**
 *
 */
class Session
{

  function __construct(){
    if( !isset($_SESSION) ){
      $this->init_session();
    }
  }

  public function init_session(){
    session_start();
  }

  public function session_exists( $session_name ){
    return isset($_SESSION[$session_name]);
  }

  public function insert_value( $session_name , array $data ){
      if( is_array($_SESSION[$session_name]) ){
          array_push( $_SESSION[$session_name], $data );
      }
  }

  public function display_session( $session_name ){
      echo '<pre>';print_r($_SESSION[$session_name]);echo '</pre>';
  }

  public function remove_session( $session_name = '' ){
      if( !empty($session_name) ){
          unset( $_SESSION[$session_name] );
      }
      else{
          unset($_SESSION);
      }
  }

  public function get_session_data( $session_name ){
      return $_SESSION[$session_name];
  }

  public function set_session_data( $session_name , $data ){
      $_SESSION[$session_name] = $data;
  }
}
