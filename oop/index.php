
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
    include 'Human.php';
    $can = new Human();
    $duc = new Human();
    
    //$can->name='Dinh Van Can';
    // $can->setName('Đinh Van Căn');
    // $can->getName();
    // $can->sleep();
    // $can->eat();
    // $can->work();
    echo '<br>';
    
    
    //$duc->name='Phan Ba Duc';
    // $duc->setName('Phan Bá Đức');
    // $duc->getName();
    // $duc->sleep();
    // $duc->eat();
    // $duc->work();

    include 'Teacher.php';
    $luan = new Teacher();
    $luan->setName('Nguyen Thanh Luan');
    $luan->eat();
    $luan->teach();

    include 'Student.php';
    $van = new Student();
    $van->setName('Nguyen Quoc Van');
    $van->learn();
    ?>
</body>
</html>