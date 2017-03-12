<?php

public class ForumQuestion{
    private $id;
    private $topic;
    private $detail;
    private $name;
    private $email;
    private $datetime;
    private $view;
    private $reply;

    public function getId(){
        return $this->id;
    }
    
    public function setId( $id){
        $this->id=$id;
    }

    public function getTopic(){
        return $this->topic;
    }
    
    public function setTopic(topic){
        $this->topic=$topic;
    }

        public function getDetail(){
        return $this->detail;
    }
    
    public function setDetail(detail){
        $this->detail=$detail;
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

    public function getDatetime(){
        return $this->datetime;
    }
    
    public function setDatetime( $datetime){
        $this->datetime=$datetime;
    }
    
    public function getView(){
        return $this->view;
    }
    
    public function setView( $view){
        $this->view=$view;
    }
    
    public function getReply(){
        return $this->reply;
    }
    
    public function setReply( $reply){
        $this->reply=$reply;
    }
}


?>