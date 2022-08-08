<?php 
 if(isset($_POST['name'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $content = $_POST['content'];

    //kết nối vào mysql server 
    $connect = mysqli_connect('localhost','root','','tiki'); //mở kết nối đến mysql server và chọn CSDL tên là tiki
    //nếu $connect = false thì là có lỗi xảy ra
    if(!$connect){
      die("Connect Failed").mysqli_connect_error();//in ra thông báo lỗi và dừng chương trình
    }
    $sql = "INSERT INTO products(name,price,content) VALUES('$name',$price,'$content')";
    //thuc thi cau lenh
    mysqli_query($connect,$sql);
    echo mysqli_insert_id($connect);//trả về id tự sinh sau khi insert
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
    <form method="POST">
        <input type="text" name="name" placeholder="Name"/>
        <input type="text" name="price" placeholder="Price"/>
        <textarea name="content" placeholder="Content"></textarea>
        <button>Submit</button>
    </form>
</body>
</html>