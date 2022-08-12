<?php
include 'ICarUI.php';
include 'ICarOPeration.php';
include 'AbCar.php';
 class Car extends AbCar implements ICarUI,ICarOperation{


    const CLASS_NAME = 'Car';
    static $className='Car';
    private $numberOfWheel;
    private $brand;
    private $color;
    private $type;
    private $carName;

    static function getClassName(){
      return 'Car';
    }

    public function __construct($carName,$numberOfWheel,$brand,$color,$type)
    {
       echo "init object";    
       $this->carName= $carName;
       $this->numberOfWheel = $numberOfWheel;
       $this->brand = $brand;
       $this->color=$color;
       $this->type=$type;
    }

    public function getCarInfo(){
        echo $this->carName;
        echo $this->numberOfWheel;
        echo $this->brand;
        echo $this->color;
        echo $this->type;
    }

 
    public function __get($name)
    {
      echo 'get magic method '.$name;
    }

    public function __set($name, $value)
    {
      echo 'set magic method '.$name.':'.$value;
    }

    function setNumberOfWheel($numberOfWheel){

    }

    function setColor($color){

    }

    public function start(){
      echo 'Start Car';
   }

   public function stop(){
    echo 'Stop Car';
   }

   public function pause(){

   }
 }

//  class FlyCar extends Car{
//    public function start(){

//    }
//  }

//  $flyCar01 = new FlyCar();
//  $flyCar01->start();

 $xpander = new Car('Xpander',4,'Mitsubishi','den','MVP');
 //$xpander->getCarInfo();
 $vinfast = new Car('Vinfast Lux A',4,'Vinfast','xanh','Sedan');
 //$vinfast->getCarInfo();
 $vinfast->start();
 //echo $vinfast->name;
 //$vinfast->engine = 'Turbo 1.0';

 Car::$className;
 Car::getClassName();
?>