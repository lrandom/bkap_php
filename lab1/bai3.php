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
     $name = "Nguyễn Huy Hoàng";
     $age = 25;
     $email = "luongitvnsoft@gmail.com";
     $phone = "0986421127";
     $address = "Số 7, Mỹ Đình, Cầu Giấy, Hà Nội";
     $avatar = "https://cdn.iconscout.com/icon/free/png-256/avatar-370-456322.png";
     $gender = 1;
    ?>
    <form>
        <table border="1">
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" value="<?php echo $name; ?>" />
                </td>
            </tr>
            <tr>
                <td>Age</td>
                <td>
                    <input type="number" value="<?php echo $age; ?>" />
                </td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>
                    <input type="text" value="<?php echo $phone; ?>" />
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="text" value="<?php echo $email; ?>" />
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td>
                    <input type="text" value="<?php echo $address; ?>" />
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <div>
                      <input <?php if($gender==1){echo 'checked="checked"';} ?> type="radio" value="1"/>
                      <label>Nam</label>
                    </div>
                    
                    <div>
                       <input <?php if($gender==0){echo 'checked="checked"';} ?> type="radio" value="0"/>
                       <label>Nữ</label>
                    </div>
                    
                </td>
            </tr>
            <tr>
                <td>Avatar</td>
                <td>
                  <img src="<?php echo $avatar; ?>"/>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>