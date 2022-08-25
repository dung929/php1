<?php
require_once('db.php');
$book_title = $_POST['book_title'];
$price = $_POST['price']; 
$page = $_POST['page'];
$errors = '';
$maxfilesize=2000000;
if ($book_title == '') {
    $errors .='Tên sách không được để trống!';
}
if ($price < 0 ) {
    $errors .= 'Vui lòng nhập số dương!';
}
else if ($page < 0 ) {
    $errors .= 'Vui lòng nhập số dương!';
}
if($save_avatar > $maxfilesize){
    $errors .= 'Vui lòng chọn lại ảnh nhỏ hơn 2mb!';
}
if ($errors != '') {
    header("location: form_tao_book.php?errors=$errors");
} 
else {
$image = $_FILES['image'];
$save_avatar = '';
if ($image['tmp_name'] != '') {
    $folderName = 'img/';
    $fileName = uniqid() . $image['name'];
    $file = $image['tmp_name'];
    if (move_uploaded_file($file, $folderName . $fileName)) {
        $save_avatar = $folderName . $fileName;
    }
}
$intro = $_POST['intro'];
$detail = $_POST['detail'];
$cate_id = $_POST['cate_id'];
$sql = "INSERT INTO books (book_title,image,intro,detail,page,price,cate_id) VALUES ('$book_title','$save_avatar','$intro','$detail','$page','$price','$cate_id')";
$statement = $connect->prepare($sql);

$statement->execute();

header('location:books.php');
}
?>
