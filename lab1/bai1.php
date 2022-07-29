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
    ?>

    <table border="1">
        <tr>
            <td>
                Name
            </td>
            <td>
                <?php echo $name; ?>
            </td>
        </tr>
        <tr>
            <td>
                Age
            </td>
            <td>
                <?php echo $age; ?>
            </td>
        </tr>
        <tr>
            <td>
                Phone
            </td>
            <td>
                <?php echo $phone; ?>
            </td>
        </tr>
        <tr>
            <td>
                Email
            </td>
            <td>
                <?php echo $email; ?>
            </td>
        </tr>
        <tr>
            <td>
                Address
            </td>
            <td>
                <?php echo $address; ?>
            </td>
        </tr>
    </table>
</body>

</html>