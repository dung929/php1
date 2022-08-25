<?php
require_once('db.php');
$id =$_GET['id'];
$sql= "SELECT * FROM books WHERE id=$id";

$statement = $connect -> prepare($sql);
$statement ->execute();

$books = $statement -> fetch();

?>

<form action="edit.php" method="POST" enctype="multipart/form-data">
    <div>
        <input type="hidden" name="id" value="<?= $books['id']?>">
    </div>
    <div>
        <label for="">Title</label>
        <input type="text" name="title" value="<?= $books['title']?>">
    </div>
    <div>
        <label for="">Price</label>
        <input type="number" name="price" value="<?= $books['price']?>">
    </div>
    <div>
        <label for="">Image</label>
        <input type="file" name="image" value="<?= $books['image']?>">
    </div>
    <div>
        <label for="">Intro</label>
        <input type="text" name="intro" value="<?= $books['intro']?>">
    </div>
    <div>
        <label for="">Content</label>
        <input type="text" name="content" value="<?= $books['content']?>">
    </div>
    <div>
        <label for="">Page</label>
        <input type="number" name="page" value="<?= $books['page']?>">
    </div>
    <div>
        <label for="">Author_id</label>
<input type="radio" name="author_id" value="1"
<?php if($books['author_id']==1){
    echo 'checked';
}
>
    </div>


</form>