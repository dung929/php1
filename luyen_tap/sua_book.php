<?php
 require_once('db.php');

$book_title = $_POST['book_title'];
$image = $_POST['image'];
$intro = $_POST['intro'];
$detail = $_POST['detail'];
$page = $_POST['page'];
$price = $_POST['price'];
$cate_id = $_POST['cate_id'];

$sql = "UPDATE books SET  book_title = '$book_title', image = '$image',intro='$intro',detail='$detail',page='$page',price='$price',cate_id='$cate_id' WHERE id =$id";
 $statement = $connect -> prepare($sql);

 $statement -> execute();

 header('location:books.php');