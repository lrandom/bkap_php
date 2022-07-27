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
      /* $arr = [2,3,4,5,6,6];//mảng chỉ số nguyên
       $arr = array(2,3,4,5,6,7);
       $arr[]=10;
       $arr[]=20;
       foreach($arr as $v){
        echo $v;
       }

       $associativeArr = [
          'name'=>'Luan',
          'age'=>20
       ];

       echo '<br>';

       foreach ($associativeArr as $key => $value) {
          echo $key.'=>'.$value.'</br>';
       }

       $twoDimensionArr = [
         [0,1,2,3],
         [4,5,6,7]
       ];
       echo $twoDimensionArr[1][2];//6*/

       $multipleDimensionArr = [
         [
            [
                [
                    'name'=>'Luan',
                    'address'=>['Ha Noi','Quang Ninh']
                ]
            ]
         ]
                ];

        echo $multipleDimensionArr[0][0][0]['address'][1];//Quang Ninh      
        foreach($multipleDimensionArr as $value1){
            foreach($value1 as $value2){
                foreach($value2 as $value3){
                    foreach($value3 as $key=>$value){
                       if(is_string($value)){
                        echo $value;
                       }else{
                        foreach($value as $v){
                            echo $v;
                        }
                       }
                    }
                }
            }
        }
        
      /*  $multipleDimensionArr2 = [
            'user1'=>[
                'name'=>'Luan',
                'address'=>'Quang Ninh'
            ],
            'user2'=>[
                'name'=>'Nam',
                'address'=>'Ha Noi'
            ]
            ];

        foreach ($multipleDimensionArr2 as $key => $value) {
           foreach ($value as $key1=>$value1) {
              echo $value1;
           }
        }         

        echo $multipleDimensionArr2['user2']['address'];
        echo '<br>';
        var_dump($multipleDimensionArr2);
        echo '<br>';
        print_r($multipleDimensionArr2);*/
    ?>
</body>
</html>