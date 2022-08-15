<?php 
function _upload($tmp,$image){
    move_uploaded_file($tmp,'uploads/'.$image);
} 

if(isset($_FILES['image']) && $_FILES['image']['name']!=null){
    _upload($_FILES['image']['tmp_name'],$_FILES['image']['name']);
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
    <form enctype="multipart/form-data" method="post">
        <input type="file" name="image"/>
        <button>Submit</button>
    </form>
</body>
</html>