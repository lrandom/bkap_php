<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
     function add($a,$b=40){
        return $a+$b;
     }

     $total = add(10);
     echo $total;

     $myName = "Luan";
     $hello = "Hello";
     $helloName = $hello.','.$myName; //$hello,$myName
     $helloName = "$hello,$myName"; //Hello,Luan
    ?>
</body>
</html>