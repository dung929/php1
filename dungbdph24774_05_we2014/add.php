<?php
require_once('db.php');

$id = $_POST['id'];
$title = $_POST['title'];
$price = $_POST['price'];
$image = $_FILES['image'];
$save = 'img/' . basename($image['name']);
move_uploaded_file($image['tmp_name'], $save);
$intro = $_POST['intro'];
$content = $_POST['content'];
$page = $_POST['page'];
$author_id = $_POST['author_id'];



$title_err='';
$price_err='';
$image_err='';




$statement = $connect->prepare($sql);
$statement->execute();
header("location:books.php");
