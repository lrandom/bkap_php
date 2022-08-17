<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author</title>
</head>
<body>
    <?php 
    include 'AuthorDAL.php';
    $authorDAL = new AuthorDAL();
    $list = $authorDAL->getList();
    ?>
    <table>
        <thead>
          <tr>
              <th>ID</th>
              <th>Name</th>
           </tr>
        </thead>
        <tbody>
            <?php foreach($list as $item): ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['name']; ?></td>
                <td><a href="delete-author.php?id=<?php echo $item['id']; ?>" onclick="return confirm('Are you sure you want to delete this row?')">Xóa</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>