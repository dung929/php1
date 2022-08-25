<?php
session_start();
if (!isset($_SESSION['user'])) {
    $errors = 'Vui lòng đăng nhập để sử dụng';
    header("location: ../login.php?errors=$errors");
}
require_once('db.php');
$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$color = $_POST['color'];
$price = $_POST['price'];
$image_url = $_POST['image_url'];
$category_id = $_POST['category_id'];

$sql = "UPDATE products SET name='$name', description='$description',color='$color',price='$price',image_url='$image_url',category_id='$category_id' WHERE id=$id";

$statement = $connect->prepare($sql);
$statement->execute();
header('location: products.php');
