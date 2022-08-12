<?php 
//include 'Human.php';
class Student extends Human{
    private $studentId;
    public function learn(){
         echo $this->name . ' hoc hanh';   
    }
}
?>