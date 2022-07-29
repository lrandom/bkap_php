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
      $products = [
        [
            'id'=>1,
            'name'=>'Rau củ sạch 1',
            'price'=>150000,
            'image'=>'https://www.knorr.com/content/dam/unilever/knorr_world/vietnam/general_image/savoury/other_savoury/teaser_image_meo_bao_quan_rau_cu-1188506.jpg',
            'quantity'=>2
        ],
        [
            'id'=>2,
            'name'=>'Rau củ sạch 2',
            'price'=>180000,
            'image'=>'https://www.knorr.com/content/dam/unilever/knorr_world/vietnam/general_image/savoury/other_savoury/teaser_image_meo_bao_quan_rau_cu-1188506.jpg',
            'quantity'=>3
        ],
        [
            'id'=>3,
            'name'=>'Rau củ sạch 3',
            'price'=>190000,
            'image'=>'https://www.knorr.com/content/dam/unilever/knorr_world/vietnam/general_image/savoury/other_savoury/teaser_image_meo_bao_quan_rau_cu-1188506.jpg',
            'quantity'=>4
        ],
        [
            'id'=>4,
            'name'=>'Rau củ sạch 4',
            'price'=>120000,
            'image'=>'https://www.knorr.com/content/dam/unilever/knorr_world/vietnam/general_image/savoury/other_savoury/teaser_image_meo_bao_quan_rau_cu-1188506.jpg',
            'quantity'=>5
        ]
        ];
    ?>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Sub Total</th>
            </tr>
        </thead>
        <tbody>
            <?php 
             $totalQuantity = 0;
             $totalPrice = 0;
             foreach ($products as $product) { 
                $totalQuantity+=$product['quantity'];
                $totalPrice+=($product['price']*$product['quantity']);
                ?>
                <tr>
                <td><?php echo $product['id']; ?></td>
                <td><img src="<?php echo $product['image'] ?>" style="width:100px"/></td>
                <td><?php echo $product['name']; ?></td>
                <td><?php echo $product['price']; ?></td>
                <td><?php echo $product['quantity']; ?></td>
                <td><?php echo $product['price']*$product['quantity'];?></td>
                </tr>
                <?php
             }
            ?>
        </tbody>

        <tfoot>
            <tr>
                <td colspan="4">Total Quantity</td>
                <td colspan="2"><?php echo $totalQuantity; ?></td>
            </tr>
            <tr>
                <td colspan="4">Total Price</td>
                <td colspan="2"><?php echo $totalPrice; ?></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>