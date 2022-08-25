<?php
require_once('db.php');
$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id=$id";

$statement = $connect->prepare($sql);
$statement->execute();

$products = $statement->fetch();
?>

<form action="edit.php" method="POST" enctype="multipart/form-data">
    <div>
        <input type="hidden" name="id" value="<?= $products['id']?>">
    </div>
    <div>
        <input type="text" name="name" value="<?= $products['name'] ?>">
    </div>
    <div>
        <input type="file" name="image" value="<?= $products['image'] ?>">
    </div>
    <div>
        <input type="number" name="price" value="<?= $products['price'] ?>">
    </div>
    <div>
        <input type="number" name="quantity" value="<?= $products['quantity'] ?>">
    </div>
    <div>
        <input type="text" name="description" value="<?= $products['description'] ?>">
    </div>
    <div>
        <input type="radio" name="brand_id" value=1 <?php if ($products['brand_id'] == 1) {
                                                        echo 'checked';
                                                    } ?>>1
        <input type="radio" name="brand_id" value=2 <?php if ($products['brand_id'] == 2) {
                                                        echo 'checked';
                                                    } ?>>2
    </div>
    <button>Submit</button>
</form>