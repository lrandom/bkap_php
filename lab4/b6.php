<?php 
 $products = [
    [
        'name'=>'Rau củ 1',
        'price'=>15000,
        'sale_price'=>10000,
        'image'=>'https://img.meta.com.vn/Data/image/2022/01/13/anh-dep-thien-nhien-3.jpg'
    ],
    [
        'name'=>'Rau củ 2',
        'price'=>15000,
        'sale_price'=>10000,
        'image'=>'https://img.meta.com.vn/Data/image/2022/01/13/anh-dep-thien-nhien-3.jpg'
    ],
    [
        'name'=>'Rau củ 3',
        'price'=>15000,
        'sale_price'=>0,
        'image'=>'https://img.meta.com.vn/Data/image/2022/01/13/anh-dep-thien-nhien-3.jpg'
    ],
    [
        'name'=>'Rau củ 4',
        'price'=>15000,
        'sale_price'=>10000,
        'image'=>'https://img.meta.com.vn/Data/image/2022/01/13/anh-dep-thien-nhien-3.jpg'
    ]
    ];

    function _image($link,$width,$height){
        return "<img src='$link' width='$width' height='$height'/>";
    }

 function _getSaleProduct($products){
    echo '<table border="1">';
    foreach($products as $product){
       if($product['sale_price']>0){
         echo '<tr>';
         echo '<td>'.$product['name'].'</td>';
         echo '<td>'.$product['price'].'</td>';
         echo '<td>'.$product['sale_price'].'</td>';
         echo '<td>'._image($product['image'],100,100).'</td>';
         echo '</tr>';
       }     
    }
    echo '</table>';
 }

 _getSaleProduct($products);

?>