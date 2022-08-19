<?php 
  /*$pdo = new PDO("mysql:host=localhost;dbname=bookonline","root","");
  $prp = $pdo->prepare('INSERT INTO book(name,price,author_id) VALUES (?,?,?)');
  $prp->bindParam(1,$name);
  $prp->bindParam(2,$price);
  $prp->bindParam(3,$authorId);
  $name = "Viet Bac";
  $price = 200000;
  $authorId = 3;
  $prp->execute();
  $name = "Viet Bac 2";
  $price = 200000;
  $authorId = 3;
  $prp->execute();*/

  $pdo = new PDO("mysql:host=localhost;dbname=bookonline","root","");
  $prp = $pdo->prepare('INSERT INTO book(name,price,author_id) VALUES (:name,:price,:author_id)');
  $prp->bindParam(":name",$name);
  $prp->bindParam(":price",$price);
  $prp->bindParam(":author_id",$authorId);
  $name = "Viet Bac";
  $price = 200000;
  $authorId = 3;
  $prp->execute();
  $name = "Viet Bac 2";
  $price = 200000;
  $authorId = 3;
  $prp->execute();
?>