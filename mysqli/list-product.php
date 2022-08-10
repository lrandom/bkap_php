
<?php 
  $connect = mysqli_connect('localhost','root','','tiki'); //mở kết nối đến mysql server và chọn CSDL tên là tiki

  //nếu $connect = false thì là có lỗi xảy ra
  if(!$connect){
    die("Connect Failed").mysqli_connect_error();//in ra thông báo lỗi và dừng chương trình
  }
  //echo "Connect Success";
  //đóng kết nôi
  //mysqli_close($connect);
?>
<?php 
if(isset($_GET['action'])) {
    $action = $_GET['action'];
    $id=$_GET['id'];
    if($action=='delete'){
        //thao tác xóa
        //tiến hành xóa
        $sql = "DELETE FROM products WHERE id=$id";
        mysqli_query($connect,$sql);    
    }else if($action=='edit'){
        //thao tác sửa
        //tiến hành sửa
        //sử dụng lệnh header để set cho http response một header location
        header('Location:edit-product.php?id='.$id);
    }
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
    <a href="add-product.php">Thêm</a>
    <table border="1">
      <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Thao tác</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $sql = "SELECT * FROM products";
          $results = mysqli_query($connect,$sql);//thực thi câu lệnh sql ở trên
          if(mysqli_num_rows($results)>0){
            //có kết quả trả về 
            while($row = mysqli_fetch_assoc($results)){
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['price']; ?></td>
            <td>
                <a onclick="return confirm('Bạn chắc chắn muốn xóa ?')"
                   href="?action=delete&id=<?php echo $row['id']; ?>">Xóa</a>
                <a href="?action=edit&id=<?php echo $row['id']; ?>">Sửa</a>
            </td>
        </tr>
        <?php 
            }
          }        
        ?>
      </tbody>
    </table>

</body>
</html>