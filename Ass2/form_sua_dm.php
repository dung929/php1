<?php
session_start();
if (!isset($_SESSION['user'])) {
    $errors = 'Vui lòng đăng nhập để sử dụng';
    header("location: ../login.php?errors=$errors");
}
require_once('db.php');
$id = $_GET['id'];
$sql = "SELECT * FROM categories WHERE id=$id";
$statement = $connect->prepare($sql);
$statement->execute();

$categories = $statement->fetch();
?>

<form action="sua_dm.php" method="POST">
    <input type="hidden" name="id" value="<?= $categories['id'] ?>">
    <div>
        <div>Nhập lại Name:</div>
        <input type="text" placeholder='name' name='ten' value="<?= $categories['ten'] ?>">
    </div>
    <button type='submit'>Cập nhật</button>
</form>
