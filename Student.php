<?php
class Student extends Person
{
    protected $greditPoints;
    protected $selectedCourses=array();
    public function setGreditPoints($value){
        $this->greditPoints=$value;
    }
    public function getGreditPoints(){
        return $this->greditPoints;
    }
    public function setSelectedCourses($value){
        array_push($this->selectedCourses,$value);
    }
    public function getSelectedCourses(){
        return $this->selectedCourses;
    }
    function __construct($fn=null,$ln=null,$bd=null,$points=null,$courses= array())
    {
        $this -> firstName=$fn;
        $this -> lastName=$ln;
        $this -> yearOfBirth=$bd;
        $this -> greditPoints=$points;
        $this -> selectedCourses=$courses;
       
    }
    // foreach ($arr as $key => $value) {
    //     // $arr[3] будет перезаписываться значениями $arr при каждой итерации цикла
    //     echo "{$key} => {$value} ";
    //     print_r($arr);
    // }
    public function getInfo(){
        $coursesLoop=" ";
        foreach ($this -> selectedCourses as $key ) {
            $coursesLoop.=$key.", ";
         }
         return parent::getInfo(). "Credits: ".$this->greditPoints." <br> Courses:".$coursesLoop;
    }
}


?>