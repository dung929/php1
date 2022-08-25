<?php
session_start();
if (!isset($_SESSION['user'])) {
    $errors = 'Vui lòng đăng nhập để sử dụng';
    header("location: ../login.php?errors=$errors");
}
require_once('../db.php');
$ten = $_POST['ten'];
$sql = "INSERT INTO categories (ten) VALUES ('$ten')";
$statement = $connect->prepare($sql);
$statement->execute();
header('location:quan_ly_dm.php');
