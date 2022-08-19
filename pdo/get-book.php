<?php 
  $pdo = new PDO("mysql:host=localhost;dbname=bookonline","root","");
  //statement la mot instance/object cua lop the hien cho mot cau lenh thuc thi SQL
  $stm = $pdo->query("SELECT * FROM book");
  //$stm->setFetchMode(PDO::FETCH_OBJ);  
  $result = $stm->fetchAll(PDO::FETCH_ASSOC)
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
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
          
            <?php 
          foreach($result as $row){
?>

            <tr>
               <td><?php echo $row['id']; ?></td>    
               <td><?php echo $row['name']; ?></td>    
            </tr>
<?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>