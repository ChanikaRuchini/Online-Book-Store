<?php
class User{
    // property declaration
    private $id;
    private $name;
    private $mobile;
    private $email;
   
    // method declaration
    function __construct($id){
		$this->id = $id;
		
    }
    public function __destruct(){
        //destroy paper object
    }
    public function getID() {
        return $this->id;
    }
    public function getName() {
        return $this->name;
    }
    public function getNIC(){
        return $this->nic;
    }
    public function getMobile(){
        return $this->mobile;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getFaculty(){
        return $this->faculty;
    }
    public function getDepartment(){
        return $this->department;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setNIC($nic){
        $this->nic = $nic;
    }
    public function setMobile($mobile){
        $this->mobile = $mobile;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setFaculty($faculty){
        $this->faculty = $faculty;
    }
    public function setDepartment($department){
        $this->department = $department;
    }
}
?>