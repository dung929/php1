<?php

require_once('db.php');

$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id = $id";
$statement = $connect->prepare($sql);

$statement->execute();

$products = $statement->fetch();

?>

<form action="sua_sp.php" method="POST" >
    <label for="">Name</label>
    <input type="text" name='name' value="<?= $products['name'] ?>">
    <span style="color:red">
    <!-- <?php isset($errors['name']) ? $errors['name'] : ''?> -->
    </span>
    <br>
    <label for="">Price</label>
    <input type="number" name='price' value="<?= $products['price'] ?>">
    <span>
    <!-- <?php isset($errors['price']) ? $errors['price'] : ''?> -->
    </span>
    <br>
    <label for="">Quantity</label>
    <input type="number" name='quantity' value="<?= $products['quantity'] ?>">
    <span>
    <!-- <?php isset($errors['quantity']) ? $errors['quantity'] : ''?> -->
    </span>
    <br>
    <label for="">Image</label>
    <input type="file" name='image' value="<?= $products['image'] ?>">
    <span>
    <!-- <?php isset($errors['image']) ? $errors['image'] : ''?> -->
    </span>
    <br>
    <label for="">Description</label>
    <input type="text" name='description' value="<?= $products['description'] ?>">
    <span>
    <!-- <?php isset($errors['description']) ? $errors['description'] : ''?> -->
    </span>
    <br>
    <label for="">Cate_id</label>
    <input type="radio" value="1" name="cate_id" <?php if ($products['cate_id'] == 1) {
                                                        echo 'checked';
                                                    } ?>>Điện thoại
    <input type="radio" value="2" name="cate_id" <?php if ($products['cate_id'] == 2) {
                                                        echo 'checked';
                                                    } ?>>Mỹ phẩm
    <input type="radio" value="3" name="cate_id" <?php if ($products['cate_id'] == 3) {
                                                        echo 'checked';
                                                    } ?>>Điện tử
    <br>
    <button>Submit</button>
</form>