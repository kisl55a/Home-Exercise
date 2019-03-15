<?php
 abstract class Person
{
//     firstName
// lastName
// yearOfBirth
// selectedCourses (array)
// greditPoints (just one value)
   protected $firstName;
   protected $lastName;
   protected $yearOfBirth;


    public function setFirstName($value){ 
        $this->firstName=$value;
    }
    public function setLastName($value){
        $this->lastName=$value;
    }
    public function getFirstName(){
        return $this->firstName;
    }
    public function getLastName(){
        return $this->lastName;
    }
    public function setYearOfBirth($value){
        return $this->yearOfBirth=$value;
    }
    public function getYearOfBirth(){
        return $this->yearOfBirth;
    }
    public function getAge(){
        if ($this -> yearOfBirth){
        $num=(int)($this->getYearOfBirth());
        return (2019-$num);}
        else
        {
            return "No age added";
        }
    }
    public function getInfo(){
        return "First name is ".$this->firstName." <br>
        Last name is ".$this->lastName." <br>
        Year of birth is ".$this->yearOfBirth." <br>
        Age :" .$this ->getAge()."<br>";

    }
}
?>