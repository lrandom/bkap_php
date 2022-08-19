<?php 
include 'AuthorDAL.php'; 
include 'BookDAL.php';
if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
   header('Location:list-book.php');
}
$id = $_GET['id'];
$authorDAL = new AuthorDAL();
$listAuthor = $authorDAL->getList();
$bookDAL =new BookDAL();

if(isset($_POST['name'])){
 $bookDAL->update($id,$_POST['name'],$_POST['price'],$_POST['author_id']);
}
$currentBook =$bookDAL->getBookById($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Book</title>
</head>
<body>
    <h1>Update Book</h1>
     <form method="POST">
       <div>
          <label>Name</label>
          <input type="text" name="name" value="<?php echo $currentBook['book_name']; ?>" placeholder="Please Enter Book Name"/>
       </div>
       <div>
          <label>Price</label>
          <input type="text" name="price" value="<?php echo $currentBook['price']; ?>" placeholder="Please Enter Price"/>
       </div>
       <div>
          <label>Author</label>
          <select name="author_id">
            <?php foreach ($listAuthor as $author) {
               ?>
                <option value="<?php echo $author['id']; ?>" <?php if($currentBook['author_id']==$author['id']){echo 'selected="selected"';} ?>><?php echo $author['name']; ?></option>               
               <?php
            } ?>
          </select>
       </div>
       <div>
           <button>Update</button>
       </div>
     </form>
</body>
</html>