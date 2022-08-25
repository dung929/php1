<?php
require_once('db.php');

$id = $_GET['id'];

$sql ="SELECT * FROM books WHERE id = $id";
$statement = $connect->prepare($sql);

$statement->execute();

$books = $statement->fetch();


?>
<form action="sua_book.php" method="POST">
    <label for="">Book-Title</label>
    <input type="text" name="book_title" value="<?= $books['book_title'] ?>">
    <br>
    <label for="">Image</label>
    <input type="file" name="image" value="<?= $books['image'] ?>">
    <br>
    <label for="">Intro</label>
    <input type="text" name="intro" value="<?= $books['intro'] ?>">
    <br>
    <label for="">Detail</label>
    <input type="text" name="detail" value="<?= $books['detail'] ?>">
    <br>
    <label for="">Page</label>
    <input type="number" name="page" value="<?= $books['page'] ?>">
    <br>
    <label for="">Price</label>
    <input type="number" name="price" value="<?= $books['price'] ?>">
    <br>
    <label for="">Cate_name</label>
    <input type="radio" name="cate_id" value="1" 
    <?php 
    if($books["cate_id"]==1){
        echo "checked";
    }
    ?>
    >Sách triết lý
    <input type="radio" name="cate_id" value="2" 
    <?php 
    if($books["cate_id"]==2){
        echo "checked";
    }
    ?>
    >Sách thiếu nhi
    <input type="radio" name="cate_id" value="3" 
    <?php 
    if($books["cate_id"]==3){
        echo "checked";
    }
    ?>
    >Sách xì ke Tiến
    <br>
    <button>Submit</button>
</form>