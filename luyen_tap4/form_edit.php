<?php 
require_once('db.php');
$id = $_GET['id'];
$sql = "SELECT * FROM books WHERE id = $id";
$statement = $connect->prepare($sql);

$statement->execute();

$books = $statement->fetch();

?>

<form action="edit.php" method="POST" enctype="multipart/form-data">
    <div>
        <label for="">Book_title</label>
        <input type="text" name="book_title" value="<?= $books['book_title'] ?>">
        <?php if (isset($_GET['book_err'])) : ?>
            <span style="color:red;"><?= $_GET['book_err'] ?></span>
        <?php endif ?>
    </div>
    <div>
        <label for="">Image</label>
        <input type="file" name="image">
        <?php if (isset($_GET['image_err'])) : ?>
            <span style="color:red;"><?= $_GET['image_err'] ?></span>
        <?php endif ?>
    </div>
    <div>
        <label for="">Intro</label>
        <input type="text" name="intro" value="<?= $books['intro'] ?>">
        <?php if (isset($_GET['intro_err'])) : ?>
            <span style="color:red;"><?= $_GET['intro_err'] ?></span>
        <?php endif ?>
    </div>
    <div>
        <label for="">Detail</label>
        <input type="text" name="detail" value="<?= $books['detail'] ?>">
        <?php if (isset($_GET['detail_err'])) : ?>
            <span style="color:red;"><?= $_GET['detail_err'] ?></span>
        <?php endif ?>
    </div>
    <div>
        <label for="">Page</label>
        <input type="number" name="page" min=1 value="<?= $books['page'] ?>">
        <?php if (isset($_GET['page_err'])) : ?>
            <span style="color:red;"><?= $_GET['page_err'] ?></span>
        <?php endif ?>
    </div>
    <div>
        <label for="">Price</label>
        <input type="number" name="price" min=1 value="<?= $books['price'] ?>">
        <?php if (isset($_GET['price_err'])) : ?>
            <span style="color:red;"><?= $_GET['price_err'] ?></span>
        <?php endif ?>
    </div>
    <div>
        <label for="">Cate_id</label>
        <input type="radio" value=1 name="cate_id" <?php if ($books['cate_id'] == 1) {
                                                        echo 'checked';
                                                    } ?>>1

        <input type="radio" value=2 name="cate_id" <?php if ($books['cate_id'] == 2) {
                                                        echo 'checked';
                                                    } ?>>2
        <input type="radio" value=3 name="cate_id" <?php if ($books['cate_id'] == 3) {
                                                        echo 'checked';
                                                    } ?>>3
    </div>
    <button>Submit</button>
</form>