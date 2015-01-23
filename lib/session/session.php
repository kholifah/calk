<?php
  class Session{
    function __construct(){
      session_start();
    }
    function setSession(){
      foreach($data as $key=>$value){
        $_SESSION[$key] = $value;
      }
    }
    function unsetSession(){
      foreach($data as $key=>$value){
        session_unset($_SESSION[$key]);
      }
    }
  }
?>