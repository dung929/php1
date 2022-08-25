<?php
session_start();
if (!isset($_SESSION['user'])) {
    $errors = 'Vui lòng đăng nhập để sử dụng';
    header("location: ../login.php?errors=$errors");
}
require_once('db.php');
$id = $_GET['id'];

$sql = "DELETE FROM categories WHERE id=$id";

$statement = $connect->prepare($sql);
$statement->execute();
header('location: ./ql_dm/quan_ly_dm.php');