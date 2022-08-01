<?php 
 //var_dump($_FILES);
 //echo $_FILES['img']['name'];
 //echo $_FILES['img']['tmp_name'];
 if(isset($_FILES['img']) && $_FILES['img']['name']!=null){
    move_uploaded_file($_FILES['img']['tmp_name'],'uploads/'.$_FILES['img']['name']);
 }
?>