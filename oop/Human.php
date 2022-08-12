<?php 
class Human {
    protected $name;
    var $eyeColor;
    var $hairColor;
    var $height;
    var $weight;

    

    //setter
    public function setName($name){
        $this->name = $name;
    }

    //getter
    public function getName(){
        return $this->name;
    }

    function sleep(){
        echo $this->name.' đang ngủ';    
    }

    function eat(){
        echo $this->name. ' đang ăn';
    }

    function work(){
        echo $this->name. ' đang làm';
    }
}


?>
