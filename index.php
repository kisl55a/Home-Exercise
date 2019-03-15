<?php 
spl_autoload_register(function($class_name){
    include $class_name.'.php';
});
echo '<h2>Student</h2>';
$student= new Student("Ann","Simons","1946","60",array("English","Math","History","Physics"));
 echo $student -> getInfo();
 echo '<h2>Teacher</h2>';
$teacher= new Teacher("Natalya","Jaapi","1974","Oulu",array("Mathematics","Finnish"));
echo $teacher -> getInfo();
 echo '<h2>Staff 1</h2>';
 $st= new Staff('Stephan','John','2000','Cleaner');
echo $st ->getInfo();
echo '<h2>Staff 2</h2>';
$st1= new Staff('John','Steven','1999','Caretaker');
echo $st1 -> getInfo();
?>