<?php
   namespace Models;

   class User{

    //Attributes
    private  $userEmail;
    private  $userPassword;

    //Constructor
    function __construct(){

    }

    //GET
    public function GetUserEmail(){
        return $this->userEmail;
    }

    public function GetUserPassword(){
        return $this->userPassword;
    }

    //SET
    public function SetUserEmail($email){
        $this->userEmail = $email;
    }

    public function SetUserPassword($password){
        $this->userPassword = $password;
    }
}
?>