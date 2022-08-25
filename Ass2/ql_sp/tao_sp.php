<?php
session_start();
if (!isset($_SESSION['user'])) {
    $errors = 'Vui lòng đăng nhập để sử dụng';
    header("location: ../login.php?errors=$errors");
}
require_once('../db.php');
$name = $_POST['name'];
$description = $_POST['description'];
$color = $_POST['color'];
$price = $_POST['price'];
$image_url = $_POST['image_url'];
$category_id = $_POST['category_id'];
$sql = "INSERT INTO products (name, description, color, price, image_url, category_id) VALUES ('$name', '$description',' $color', '$price','$image_url','$category_id')";
$statement = $connect->prepare($sql);
$statement->execute();
header('location:quan_ly_sp.php');
