<?php
$book_title = $_POST['book_title'];
$image = $_FILES['image'];

$filename = 'img/' . basename($image['name']);

move_uploaded_file($image["tmp_name"], $filename);

$intro = $_POST['intro'];

$detail = $_POST['detail'];

$page = $_POST['page'];

$price = $_POST['price'];

$cate_id = $_POST['cate_id'];


$book_title_err = '';
$intro_err = '';
$detail_err = '';
$page_err = '';
$price_err = '';
$image_err = '';

if ($book_title == '') {
    $book_title_err = 'Vui lòng không để trống !';
}
if ($intro == '') {
    $intro_err = 'Vui lòng không để trống !';
}
if ($detail == '') {
    $detail_err = 'Vui lòng không để trống !';
}
if ($page == '') {
    $page_err = 'Vui lòng không để trống !';
}
if ($price == '') {
    $price_err = 'Vui lòng không để trống !';
}
if ($page <= 0) {
    $page_err = 'Vui lòng nhập số lớn hơn 0 !';
}
if ($price <= 0) {
    $price_err = 'Vui lòng nhập số lớn hơn 0 !';
}
if ($image['size'] > 2 * 1024 * 1024) {
    $image_err = "Ảnh không được vượt quá 2MB";
}
if (!empty($book_title_err) || !empty($intro_err) || !empty($detail_err) || !empty($page_err) || !empty($price_err) || !empty($image_err)) {
    header("location:form_edit_books.php?book_title_err=$book_title_err & intro_err=$intro_err & detail_err=$detail_err & page_err=$page_err & price_err=$price_err & image_err=$image_err");
    die;
}
require_once('db.php');

$sql = "UPDATE books SET book_title='$book_title',image='$filename',intro='$intro',detail='$detail',page='$page',price='$price',cate_id='$cate_id'";
$statement = $connect->prepare($sql);

$statement->execute();

header("location:books.php");
