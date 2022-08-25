<?php
require_once('db.php');
$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id= $id";

$statement =$connect ->prepare($sql);

$statement ->execute();
$products = $statement ->fetch();
?>

<form action="edit.php" method="POST" enctype="multipart/form-data">
    <div>
        <input type="hidden" name="id" value="<?= $products['id']?>">
    </div>
    <div>
        <label for="">Name</label>
        <input type="text" name="name" value="<?= $products['name']?>">
    </div>
    <div>
        <label for="">Image</label>
        <input type="file" name="image" value="<?= $products['image']?>">
    </div>
    <div>
        <label for="">Price</label>
        <input type="number" name="price" value="<?= $products['price']?>">
    </div>  
    <div>
        <label for="">quantity</label>
        <input type="number" name="quantity" value="<?= $products['quantity']?>">
    </div>
    <div>
        <label for="">Description</label>
        <input type="text" name="description" value="<?= $products['description']?>">
    </div>
    <div>
        <label for="Brand_id">
            <input type="radio" name="brand_id" value="1"
            <?php if($products['brand_id']==1){
                echo 'checked';
            }?>
            >Sam Sung
            <input type="radio" name="brand_id" value="2"
            <?php if($products['brand_id']==2){
                echo 'checked';
            }?>
            >Oppo
            <input type="radio" name="brand_id" value="3"
            <?php if($products['brand_id']==3){
                echo 'checked';
            }?>
            >Vivo
        </label>
    </div>
    <button>Submit</button>
</form>