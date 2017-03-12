<?php

public class ForumAnswer{
    private $question_id;
    private $id;
    private $name;
    private $email;
    private $answer;
    private $datetime;

    public function getQuestion_id(){
        return $this->question_id;
    }
    
    public function setQuestion_id( $question_id){
        $this->question_id=$question_id;
    }

    public function getId(){
        return $this->id;
    }
    
    public function setId(id){
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

    public function getAnswer(){
        return $this->answer;
    }
    
    public function setAnswer( $answer){
        $this->answer=$answer;
    }

    public function getDatetime(){
        return $this->datetime;
    }
    
    public function setDatetime( $datetime){
        $this->datetime=$datetime;
    }
}


?>