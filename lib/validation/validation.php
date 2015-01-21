<?php
  class Validation{
    /**
     * Fungsi untuk validasi username
     * @param  string  $string string yang di inputkan sebagai username
     * @return boolean return true ketika lolos validasi return false ketika gagal validasi 
     */
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
    
    /**
     * [[Description]]
     * @param  [[Type]] $string [[Description]]
     * @return boolean  [[Description]]
     */
    function validate_email($string){
      if($string=="" or $string === NULL){
        return false;
      }
      
      if(!filter_var($string,FILTER_VALIDATE_EMAIL)){
        return false;
      }
      
      return true;
    }
    
    function validate_password($string){
      if($string=="" or $string === NULL){
        return false;
      }
      if(strlen($string)<6){
        return false;
      }
      if(!preg_match("/^[A-Z]/",$string)){
        return false;
      }
      return true;
    }
    
    function validate_is_not_null($string){
      if(trim($string)=="" or $string === NULL){
        return false;
      }
      return true;
    }
    
    function validate_password_is_not_null($string){
      if($string=="" or $string === NULL){
        return false;
      }
      return true;
    }
    
  }
?>