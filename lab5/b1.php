
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <select name="image">
            <option>Chọn ảnh</option>
            <option value="https://toanthaydinh.com/wp-content/uploads/2020/04/anh-mua-thu-dep.jpg">Ảnh 1</option>
            <option value="https://img.meta.com.vn/Data/image/2022/01/13/anh-dep-thien-nhien-3.jpg">Ảnh 2</option>
            <option value="https://phunugioi.com/wp-content/uploads/2020/02/anh-phong-canh-hung-vy-nui-va-song.jpg">Ảnh 3</option>
        </select>

        <button>Chọn ảnh</button>
    </form>
    
    <?php 
    if(isset($_GET['image'])){
        echo '<img src="'.$_GET['image'].'"/>';
    }
    ?>
</body>
</html>