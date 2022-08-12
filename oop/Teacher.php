<?php 
//include 'Human.php';
class Teacher extends Human{
    private $teacherId;
    public function teach(){
        echo $this->name.' day hoc';
    }

    public function eat(){
        echo $this->name. 'An phở';
    }
}
?>