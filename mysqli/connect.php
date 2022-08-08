
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
  $connect = mysqli_connect('localhost','root','','tiki'); //mở kết nối đến mysql server và chọn CSDL tên là tiki

  //nếu $connect = false thì là có lỗi xảy ra
  if(!$connect){
    die("Connect Failed").mysqli_connect_error();//in ra thông báo lỗi và dừng chương trình
  }
  echo "Connect Success";


  //đóng kết nôi
  //mysqli_close($connect);

?>
    <table border="1">
      <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
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
        </tr>
        <?php 
            }
          }        
        ?>
    
      </tbody>
    </table>

</body>
</html>