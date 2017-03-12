<?php

public class Users{
    private $id;
    private $name;
    private $email;
    private $birthdate;
    private $password;
    private $username;
    private $image;
    private $salt;
    private $skills;
    private $bio;

    public function getId(){
        return $this->id;
    }
    
    public function setId( $id){
        $this->id=$id;
    }
   
    public function getName(){
        return $this->name;
    }

    public function setName($name ){
         $this->name=$name;
    }

    public function getEmail(){
        return $this->email;
    }
    
    public function setEmail( $email){
        $this->email=$email;
    }

    public function getBirthdate(){
        return $this->birthdate;
    }
    
    public function setBirthdate( $birthdate){
        $this->birthdate=$birthdate;
    }
    
    public function getPassword(){
        return $this->password;
    }
    
    public function setPassword( $password){
        $this->password=$password;
    }
    
    public function getUsername(){
        return $this->username;
    }
    
    public function setUsername( $username){
        $this->username=$username;
    }

      public function getImage(){
        return $this->image;
    }
    
    public function setImage( $image){
        $this->image=$image;
    }

      public function getSalt(){
        return $this->salt;
    }
    
    public function setSalt( $salt){
        $this->salt=$salt;
    }

      public function getSkills(){
        return $this->skills;
    }
    
    public function setSkills( $skills){
        $this->skills=$skills;
    }

      public function getBio(){
        return $this->bio;
    }
    
    public function setBio( $bio){
        $this->bio=$bio;
    }
}


?>