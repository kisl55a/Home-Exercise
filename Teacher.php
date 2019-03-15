<?php
class Teacher extends Person
{
//     teachingSubjects (array)
// department
    private $department;
    private $teachingSubjects=array();
    public function setDepartment($value){
        $this->department=$value;
    }
    public function getDepartment(){
        return $this->department;
    }
    public function setTeachingSubjects($value){
        array_push($this->teachingSubjects,$value);
    }
    public function getTeachingSubjects(){
        return $this->teachingSubjects;
    }
    function __construct($fn=null,$ln=null,$bd=null,$dep=null,$ts= array())
    {
        $this -> firstName=$fn;
        $this -> lastName=$ln;
        $this -> yearOfBirth=$bd;
        $this -> department=$dep;
        $this -> teachingSubjects=$ts;
    }
    public function getInfo(){
        $subjectsLoop=" ";
        foreach ($this -> teachingSubjects as $key ) {
            $subjectsLoop.=$key.", ";
         }
         return parent::getInfo(). "Department: ".$this->department." <br> Courses:".$subjectsLoop;
    }
  

    
}


?>