<?php 
 class Human{
    public function __construct(){
         echo "Khoi tao";      
    }
 }

 $tuanAnh = new Human();//Khoi tao

 class Teacher{
    public function __construct($name){
        echo $name;
    }
 }

 $luan = new Teacher("Luan");
?>