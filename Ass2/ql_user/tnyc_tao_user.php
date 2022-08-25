<?php
session_start();
if (!isset($_SESSION['user'])) {
    $errors = 'Vui lòng đăng nhập để sử dụng';
    header("location: ../login.php?errors=$errors");
}
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
    header("location: form-tao-user.php?errors=$errors");
} else {
$password_hashed = password_hash($password, PASSWORD_BCRYPT);
require_once('../db.php');
$sql = "INSERT INTO users (username, password) "
    . "VALUES ('$username', '$password_hashed')";
$statement = $connect->prepare($sql);
$statement->execute();
header('location: index.php');
}
?>
<div style="color: orange   ;">
    <?php echo $errors ?>
</div>