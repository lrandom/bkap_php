<?php
$errors = [];
function validate(){
    if (empty($_POST['email'])) {
        $errors['email'] = 'Vui lòng điền email';
        return false;
    }

    if (empty($_POST['password'])) {
        $errors['password'] = 'Vui lòng điền mật khẩu';
        return false;
    }
    return true;
}
if (isset($_POST['email'])) {
    if(validate()){
        //xử lý tiếp
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
    <form method="POST">
        <div>
            <input type="email" name="email" placeholder="Vui lòng nhập email" />
            <?php if (isset($errors['email'])) {
            ?>
                <div class="error"><?php echo $errors['email']; ?></div>
            <?php
            } ?>
        </div>

        <div>
            <input type="password" name="password" placeholder="Vui lòng nhập mật khẩu" />
            <?php if (isset($errors['password'])) {
            ?>
                <div class="error"><?php echo $errors['password']; ?></div>
            <?php
            } ?>
        </div>

        <button>Đăng nhập</button>
    </form>

    <style>
        .error {
            color: red;
        }
    </style>
</body>

</html>