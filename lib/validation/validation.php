<?php
  class Validation{
    function validate_username($string){
      // Validation Rule 
      // 1. it's not null => required
      // 4. minimal length 6
      // 5. maximal length  20
      
      //not implemented yet
      // 2. only letter or number
      // 3. have to start with letter
      
      //Check if NULL
      if($string=="" or $string === NULL){
        return false;
      }
      
      //Check if length less than 6 or more than 20
      if(strlen($string)<6 or strlen($string)>20){
        return false;
      }
      
      return true;
    }
  }
?>