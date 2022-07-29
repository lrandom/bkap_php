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
    $users = [
        [
            'name' => 'Nguyễn Huy Hoàng',
            'email' => 'huyhoang@gmail.com',
            'phone' => '0834738434',
            'gender' => 'Nam',
            'avatar' => 'https://cdn.iconscout.com/icon/free/png-256/avatar-370-456322.png'
        ],
        [
            'name' => 'Trần Đình Hoàng',
            'email' => 'huyhoang1@gmail.com',
            'phone' => '12189271892',
            'gender' => 'Nữ',
            'avatar' => 'https://cdn.iconscout.com/icon/free/png-256/avatar-370-456322.png'
        ],
        [
            'name' => 'Trần Đình Hoàng 2',
            'email' => 'huyhoang1@gmail.com',
            'phone' => '12189271892',
            'gender' => 'Nữ',
            'avatar' => 'https://cdn.iconscout.com/icon/free/png-256/avatar-370-456322.png'
        ]
    ];
    ?>
    <table border="1">
        <thead>
            <tr>
                <td>Name</td>
                <td>Email</td>
                <td>Phone</td>
                <td>Gender</td>
                <td>Avatar</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($users as $user) {
            ?>
                <tr>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['phone']; ?></td>
                    <td><?php echo $user['gender']; ?></td>
                    <td>
                        <img src="<?php echo $user['avatar']; ?>"/>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>