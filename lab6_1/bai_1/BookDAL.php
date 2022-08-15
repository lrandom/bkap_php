<?php 
include_once 'DB.php';
class BookDAL extends DB{
    public function getList(){
        $sql = "SELECT *,book.id as book_id,book.name as book_name,author.name as author_name
         FROM book INNER JOIN author ON author.id = book.author_id";
        $result = mysqli_query($this->connect,$sql);
        return $result;
    }
}
?>
