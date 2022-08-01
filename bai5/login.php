<?php 
if(isset($_POST['email'])){
  echo "Dữ liệu bạn đã gửi lên là\n";
  echo $_POST['email'];
  echo "\n";
  echo $_POST['password'];
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
        <input type="email" name="email" placeholder="Vui lòng nhập email"/>
        <input type="password" name="password" placeholder="Vui lòng nhập mật khẩu"/>
        <button>Đăng nhập</button>
    </form>
</body>
</html>