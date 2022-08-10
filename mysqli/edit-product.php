<?php 
    //kết nối vào mysql server 
    $connect = mysqli_connect('localhost','root','','tiki'); //mở kết nối đến mysql server và chọn CSDL tên là tiki
    //nếu $connect = false thì là có lỗi xảy ra
    if(!$connect){
      die("Connect Failed").mysqli_connect_error();//in ra thông báo lỗi và dừng chương trình
    }
    
    $id = $_GET['id'];
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $price  = $_POST['price'];
        $content = $_POST['content'];
        //echo $content;
        $sql = "UPDATE products SET name='$name',price='$price',content='$content' WHERE id=$id";
        //echo $sql;
        mysqli_query($connect,$sql);
    }

    $sql = "SELECT * FROM products WHERE id=$id";
    $results = mysqli_query($connect,$sql);
    if(mysqli_num_rows($results)==1){
        $obj = mysqli_fetch_assoc($results);
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
        <div>
          <input type="text" name="name" placeholder="Name" value="<?php echo $obj['name']; ?>"/>
        </div> 
        <div>
          <input type="text" name="price" placeholder="Price" value="<?php echo $obj['price']; ?>"/>
        </div>
        
        <div>
          <textarea name="content" placeholder="Content"><?php echo $obj['content']; ?></textarea>
        </div>
       
        <button>Submit</button>
    </form>
</body>
</html>