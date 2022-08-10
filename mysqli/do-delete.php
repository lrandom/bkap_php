<?php
if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    $connect = mysqli_connect('localhost', 'root', '', 'tiki'); //mở kết nối đến mysql server và chọn CSDL tên là tiki

//nếu $connect = false thì là có lỗi xảy ra
    if (!$connect) {
        die("Connect Failed") . mysqli_connect_error();//in ra thông báo lỗi và dừng chương trình
    }
    $id = $_GET['id'];
    $sql = "DELETE FROM products WHERE id=$id";
    mysqli_query($connect, $sql);
    header('Location:list-product.php');
}