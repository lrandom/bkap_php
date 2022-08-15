<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <form class="container">
         <div class="flex-item">
            <div>Màu nền</div>
            <input type="color" name="bg-color" value="<?php if(isset($_GET['bg-color'])){echo $_GET['bg-color'];} ?>"/>

            <div>Màu chữ</div>
            <input type="color" name="color" value="<?php echo (isset($_GET['color']))?$_GET['color']:''; ?>"/>

            <div>Chiều rộng</div>
            <input type="text" name="width"  value="<?php echo (isset($_GET['width']))?$_GET['width']:''; ?>"/>

            <button>Hiển thị</button>
         </div>
         <div class="flex-item">
            <div>Nội dung</div>
            <textarea name="content"><?php  echo (isset($_GET['content']))?$_GET['content']:'';?></textarea>

            <div>
                <?php
                if(isset($_GET['bg-color'])){
                    $bgColor = $_GET['bg-color'];
                    $color = $_GET['color'];
                    $width = $_GET['width'];
                    $content = $_GET['content'];
                    echo "<p style='background-color:$bgColor;color:$color;width:$width'>$content</p>";
                }
                ?>
            </div>
         </div>
      
    </form>

      <style>
        .container{
            width:800px;
            display:flex;
            gap:2px;
            margin:0px auto;
        }

        
      </style>
</body>
</html>