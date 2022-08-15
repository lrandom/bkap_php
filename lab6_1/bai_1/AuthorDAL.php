<?php 
include_once 'DB.php';
class AuthorDAL extends DB{
    public function getList(){
        $sql = "SELECT * FROM author";
        $result = mysqli_query($this->connect,$sql);
        return $result;
    }
}
?>
