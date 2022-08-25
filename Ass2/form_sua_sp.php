<?php
session_start();
if (!isset($_SESSION['user'])) {
    $errors = 'Vui lòng đăng nhập để sử dụng';
    header("location: ../login.php?errors=$errors");
}
require_once('db.php');
$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id=$id";
$statement = $connect->prepare($sql);
$statement->execute();

$products = $statement->fetch();
?>

<form action="sua_sp.php" method="POST">
    <input type="hidden" name="id" value="<?= $products['id'] ?>">
    <div>
        <div>Nhập lại Name:</div>
        <input type="text" placeholder='name' name='name' value="<?= $products['name'] ?>">
    </div>
    <div>
        <div>
            Nhập lại Description:
        </div>
        <input type="text" placeholder='description' name='description' value="<?= $products['description'] ?>">
    </div>
    <div>
        <div>Nhập lại Color:</div>
        <input type="text" placeholder='color' name='color' value="<?= $products['color'] ?>">
    </div>
    <div>
        <div>Nhập lại Price:</div>
        <input type="text" placeholder='price' name='price' value="<?= $products['price'] ?>">
    </div>
    <div>
        <div>Nhập lại Image_url:</div>
        <input type="file" placeholder='image_url' name='image_url' value="<?= $products['image_url'] ?>">
    </div>
    <div>
        <div>Nhập lại Category_id:</div>
        <input type="number" placeholder='category_id' name='category_id' value="<?= $products['category_id'] ?>">
    </div>
    <button type='submit'>Cập nhật</button>
</form>