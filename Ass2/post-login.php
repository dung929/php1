<?php
session_start();
if (!isset($_SESSION['user'])) {
    $errors = 'Vui lòng đăng nhập để sử dụng';
    header("location: ../login.php?errors=$errors");
}
require_once('db.php');
$username = $_POST['username'];
$password = $_POST['password'];
$errors = '';
if ($username == '') {
    $errors = $errors . 'User không được để trống!.';
}
if ($password == '') {
    $errors .= 'Password không được để trống!.';
}
if ($errors != '') {
    header("location: login.php?errors=$errors");
} else {
    $sql = "SELECT * FROM users WHERE username='$username'";
    $statement = $connect->prepare($sql);
    $statement->execute();
    $loginUser = $statement->fetch();
    if ($loginUser == false) {
        $errors = 'Người dùng không tồn tại!';
        header("location: login.php?errors=$errors");
    } else if (password_verify($password, $loginUser['password']) == true) {
        $errors = 'Mật khẩu không chính xác!';
        header("location: login.php?errors=$errors");
    } else {
        session_start();
        $_SESSION['user'] = $loginUser;
        header("location: login.php");
    }
}
