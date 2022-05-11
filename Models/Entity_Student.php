<?php
// model student định nghĩa thông tin của 1 sinh viên
class Entity_Student{
    public $id ;
    public $name ;
    public $age ; 
    public $university ;
    public function __construct($_id,$_name,$_age,$_university){
        $this->id = $_id;
        $this->name = $_name;
        $this->age = $_age;
        $this->university = $_university;
    }
}

?>