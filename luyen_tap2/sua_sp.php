<?php
require_once('db.php');

$name = $_POST['name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$image = $_POST['image'];
$description = $_POST['description'];
$cate_id = $_POST['cate_id'];
// $errors = [];
//  if($name ==''){
//     $errors['name'] = "Tên không được để trống!";
//  }

//  if($price<0){
//     $errors['price'] = "Vui lòng chọn giá lớn hơn 0!";
//  }

//  if($quantity<0){
//     $errors['quantity'] = "Vui lòng chọn số lượng lớn hơn 0!";
//  }
// $image = $file['name'];

// if($file['size'] > 0){
//     if($file['size'] > 2 *1024 *1024){
//         $errors['image'] ="Kích cỡ ảnh không được vượt quá 2mb!";
//     }
// }
// if($description ==''){
//     $errors['description'] = "Mô tả không được để trống!";
//  }
//  if($errors !=''){
//     header("location:form_sua_sp.php?errors=$errors");
//  }

// else{
$sql="UPDATE products SET NAME='$name' WHERE id=$id";
$statement = $connect->prepare($sql);

$statement -> execute();

header('location:products.php');
// }