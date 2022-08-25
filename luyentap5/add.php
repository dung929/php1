<?php
require_once('db.php');
$room_name = $_POST['room_name'];
$image = $_FILES['image'];

$save = 'img/' . basename($image['name']);
move_uploaded_file($image['tmp_name'], $save);

$intro = $_POST['intro'];
$description = $_POST['description'];
$number = $_POST['number'];
$price = $_POST['price'];
$type_id = $_POST['type_id'];

$name_err = '';
$image_err = '';
$intro_err = '';
$des_err = '';
$number_err = '';
$price_err = '';

if ($room_name == '') {
    $name_err = 'Khong de trong!';
}
if ($intro == '') {
    $intro_err = 'Khong de trong!';
}
if ($description == '') {
    $des_err = 'Khong de trong!';
}
if ($number == '') {
    $number_err = 'Khong de trong!';
} else if ($number <= 0) {
    $number_err = 'Nhap so lon hon 0!';
}
if ($price == '') {
    $price_err = 'Khong de trong!';
} else if ($price <= 0) {
    $price_err = 'Nhap so lon hon 0!';
}
if ($image['size'] > 2 * 1024 * 1024) {
    $image_err = 'Kich co anh khong duoc qua 2mb';
}
if (!empty($name_err) || !empty($intro_err) || !empty($des_err) || !empty($number_err) || !empty($price_err) || !empty($image_err)) {
    header("location:form_add.php?name_err=$name_err&intro_err=$intro_err&des_err=$des_err&number_err=$number_err&price_err=$price_err&image_err=$image_err");
    die;
}
$sql = "INSERT INTO rooms (room_name,image,intro,description,number,price,type_id) VALUES ('$room_name','$save','$intro','$description','$number','$price','$type_id')";
$statement = $connect->prepare($sql);

$statement->execute();
header("location:rooms.php");
