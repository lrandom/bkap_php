<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Banner</title>
</head>
<body>
   <?php
    if(!isset($_COOKIE['banner'])){
        setcookie('banner','banner',time()+3600*24*3,"/");
        ?>
        <div class="banner">
            Hay mua sp cua chung toi, tri bach benh, ba benh, ko khoi ko lay tien1
        </div>
        <?php
    }
   ?>
    <style>
        .banner {
            height: 200px;
            width:1280px;
            margin:0px auto;
            background:blue;
            color:white;
        }
    </style>
</body>
</html>