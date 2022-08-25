<?php
session_start();
if (!isset($_SESSION['user'])) {
    $errors = 'Vui lòng đăng nhập để sử dụng';
    header("location: ../login.php?errors=$errors");
}
?>
<form
    action="tao_dm.php"
    method="POST"
>
    <input type="text" name='ten' placeholder="Name">
    <button>Tạo mới</button>
</form>