<?php
session_start();
if (!isset($_SESSION['user'])) {
    $errors = 'Vui lòng đăng nhập để sử dụng';
    header("location: ../login.php?errors=$errors");
}
require_once('db.php');
$id = $_POST['id'];
$ten = $_POST['ten'];

$sql = "UPDATE categories SET ten='$ten' WHERE id=$id";

$statement = $connect->prepare($sql);
$statement->execute();
header('location: categories.php');
