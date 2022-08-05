<?php 
 if(isset($_FILES['img']) && $_FILES['img']['name']!=null){
    $dir = 'uploads/'.date('m').'_'.date('Y');//uploads/08_2022 -> ten thu muc

    //nếu chưa tồn tại thư mục thì tiến hành uploads 
    if(!file_exists($dir) || is_file($dir)){
      mkdir($dir);//tạo thư mục uploads/08_2022
    }
    move_uploaded_file($_FILES['img']['tmp_name'],$dir.'/'.time().$_FILES['img']['name']);
 }
?>