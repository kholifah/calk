<?php
  require "../../lib/validation/validation.php";
  class validationTest extends PHPUnit_Framework_TestCase{
    function test_Username_Validation(){
      $validation = new Validation();
      
      $username = "sunupf";
      $expectation = true;
      $realCase = $validation->validate_username($username);
      $this->assertEquals($expectation,$realCase);
      
      $username = "";
      $expectation = false;
      $realCase = $validation->validate_username($username);
      $this->assertEquals($expectation,$realCase);
      
      $username = "sunu";
      $expectation = false;
      $realCase = $validation->validate_username($username);
      $this->assertEquals($expectation,$realCase);
      
      $username = "sunu_pinasthika_fajar";
      $expectation = false;
      $realCase = $validation->validate_username($username);
      $this->assertEquals($expectation,$realCase);
    }
    
    function test_Email_Validation(){
      $validation = new Validation();
      
      $email = "";
      $expectation = false;
      $realCase = $validation->validate_email($email);
      $this->assertEquals($expectation,$realCase);
      
      $email = "sunu@vom";
      $expectation = false;
      $realCase = $validation->validate_email($email);
      $this->assertEquals($expectation,$realCase);
      
      $email = "sunupf@gmail.com";
      $expectation = true;
      $realCase = $validation->validate_email($email);
      $this->assertEquals($expectation,$realCase);
      
      $email = "sunupf@gmail.com.id";
      $expectation = true;
      $realCase = $validation->validate_email($email);
      $this->assertEquals($expectation,$realCase);
    }
    
    function test_Password_Validation(){
      $validation = new Validation();
      
      $input = "";
      $expectation = false;
      $realCase = $validation->validate_password($input);
      $this->assertEquals($expectation,$realCase);
      
      $input = "a";
      $expectation = false;
      $realCase = $validation->validate_password($input);
      $this->assertEquals($expectation,$realCase);
      
      $input = "12345";
      $expectation = false;
      $realCase = $validation->validate_password($input);
      $this->assertEquals($expectation,$realCase);
      
      $input = "sunupf%";
      $expectation = false;
      $realCase = $validation->validate_password($input);
      $this->assertEquals($expectation,$realCase);
      
      $input = "Sunupf";
      $expectation = true;
      $realCase = $validation->validate_password($input);
      $this->assertEquals($expectation,$realCase);
    }
  }
?>