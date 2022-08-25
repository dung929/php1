<?php
$id = $_POST['id'];
$name = $_POST['name'];
$image = $_FILES['image'];
$save = 'img/' . basename($image['name']);
move_uploaded_file($image['tmp_name'], $save);
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$description = $_POST['description'];
$brand_id = $_POST['brand_id'];

require_once('db.php');

$sql = "UPDATE products SET name='$name',image='$save',price='$price',quantity='$quantity',description='$description',brand_id='$brand_id' WHERE id=$id";
$statement = $connect->prepare($sql);

$statement->execute();
header("location:products.php");