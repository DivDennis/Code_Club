<?php
class Lesson{
    private $id;
    private $topic;
    private $info;
    private $category;

    public function getId(){
        return $this->id;
    }

    public function getTopic(){
        return $this->topic;
    }

    public function getInfo(){
        return $this->info;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setTopic($topic){
        $this->topic = $topic;
    }

    public function setInfo($info){
        $this->info = $info;
    }
    
    public function getCategory(){
        return $this->category;
    }
    public function setCategory($category){
        $this->setCategory = $category;
    }
}
?>