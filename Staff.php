<?php
class Staff extends Person
{
    // vacancy
    private $vacancy;
 
    public function setVacancy($value){
        $this->vacancy=$value;
    }
    public function getVacancy(){
        return $this->vacancy;
    }
    function __construct($fn=null,$ln=null,$bd=null,$vac=null)
    {
        $this -> firstName=$fn;
        $this -> lastName=$ln;
        $this -> yearOfBirth=$bd;
        $this -> vacancy=$vac;
    }
    public function getInfo(){
        return parent::getInfo(). "Vacancy is ".$this->vacancy." <br>";
    }
    
}


?>