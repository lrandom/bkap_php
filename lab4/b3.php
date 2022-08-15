<?php 
function _image($link,$width,$height){
    echo "<img src='$link' width='$width' height='$height'/>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php _image('https://img.meta.com.vn/Data/image/2022/01/13/anh-dep-thien-nhien-3.jpg',100,100); ?>
    <?php _image('https://img.meta.com.vn/Data/image/2022/01/13/anh-dep-thien-nhien-3.jpg',200,200); ?>
</body>
</html>