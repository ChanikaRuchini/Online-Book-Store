<?php
require_once "user.php";


class Customer extends User{
    // property declaration
    private $name;
    private $mobile;
    private $email;
    

    // method declaration
    function __construct($id){
        parent::__construct($id);
    }
    public function __destruct(){
        //destroy paper object
    }
    public function getName(){
        return $this->name;
    }
    public function getMobile(){
        return $this->mobile;
    }
    public function getEmail(){
        return $this->email;
    }
   
    public function setMobile($mob){
       $this->mobile = $mob ;
    
    }

     public function setEmail($email){
        $this->email = $email ;
        
     
    }
     public function setName($name){
        $this->name = $name ;
        
     
    }  
}
?>