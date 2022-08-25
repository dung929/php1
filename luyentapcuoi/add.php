<?php
$name = $_POST['name'];
$image = $_FILES['image'];
$save = 'img/' . basename($image['name']);
move_uploaded_file($image['tmp_name'], $save);
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$description = $_POST['description'];
$brand_id = $_POST['brand_id'];



$name_err = '';
$image_err = '';
$price_err = '';
$quantity_err = '';
$des_err = '';



if ($name == '') {
    $name_err = 'Vui long khong de trong !';
}
if ($price == '') {
    $price_err = 'Vui long khong de trong !';
} else if ($price <= 0) {
    $price_err = 'Vui long nhap so lon hon 0!';
}
if ($description == '') {
    $des_err = 'Vui long khong de trong !';
}
if ($quantity == '') {
    $quantity_err = 'Vui long khong de trong !';
} else if ($quantity <= 0) {
    $quantity_err = 'Vui long nhap so lon hon 0!';
}   
if ($image['size'] >= 2 * 1024 * 1024) {
    $image_err = 'Kich co anh khong duoc qua 2mb!'; 
}


if (!empty($name_err) || !empty($image_err) || !empty($price_err) || !empty($des_err) || !empty($quantity_err)) {
    header("location:form_add.php?name_err=$name_err & image_err=$image_err & price_err=$price_err & des_err=$des_err & quantity_err=$quantity_err");
    die;
}
require_once('db.php');
$sql="INSERT INTO products (name,image,price,quantity,description,brand_id) VALUES ('$name','$save','$price','$quantity','$description','$brand_id')";
$statement = $connect->prepare($sql);

$statement->execute();
header("location:products.php");
