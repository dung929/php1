<?php
session_start();
if (!isset($_SESSION['user'])) {
    $errors = 'Vui lòng đăng nhập để sử dụng';
    header("location: ../login.php?errors=$errors");
}
?>
<form
    action="tao_sp.php"
    method="POST"
>
    <input type="text" name='name' placeholder="Name">
    <input type="text" name='description' placeholder="Description">
    <input type="text" name='color' placeholder="Color">
    <input type="text" name='price' placeholder="Price">
    <input type="file" name='image_url' placeholder="Image_url">
    <input type="number" name='category_id' placeholder="Category_id">
    <button>Tạo mới</button>
</form>