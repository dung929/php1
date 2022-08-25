<?php
session_start();
if (!isset($_SESSION['user'])) {
    $errors = 'Vui lòng đăng nhập để sử dụng';
    header("location: ../login.php?errors=$errors");
}
?>
<form action="tnyc_tao_user.php" method='POST'>
    <label for="">Nhập Usename mới:</label>
    <input type="text" name="username">
    <label for="">Nhập lại Password mới:</label>
    <input type="password" name="password">
    <button>Tạo mới</button>
</form>