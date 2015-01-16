<?php
  class registerTest extends PHPUnit_Framework_TestCase{
    function test_Normal_Case_For_Register(){
      // 1. fill the form
      // 2. there is $_POST = > username,email,password
      $data = array(
        'username' => 'sunupf',
        'email' => 'sunupf@gmail.com',
        'password' => 'qweasd'
      );
      
      // 3. validate it => that's mean?We must create Validation LIbrary
      // 4. insert it to DB => we must have DB library
      
    }
  }
?>