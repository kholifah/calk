<?php
  require "../../lib/validation/validation.php";
  class validationTest extends PHPUnit_Framework_TestCase{
    function test_Username_Validation(){
      
      
      $username = "sunupf";
      
      $expectation = true;
      
      $validation = new Validation();
      
      $realCase = $validation->validate_username($username);
      
      $this->assertEquals($expectation,$realCase);
    }
  }
?>