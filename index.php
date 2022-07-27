<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "Hello World"; ?>
    <?php 
      //PasCal->tên class
      //camelCase -> tên biến
      //under_score
      //keba-case

      $myName = "Luan";
      $my_name = "Luan";

      define('MY_NAME','Luan');
      echo MY_NAME;
      
      echo '</br>';
      $arr = [1,2,3,4,5];
      foreach ($arr as $key => $value) {
        echo $key.'='.$value.'</br>';
      }
      foreach ($arr as $v) {
        echo $v;
      }
    ?>

</body>
</html>