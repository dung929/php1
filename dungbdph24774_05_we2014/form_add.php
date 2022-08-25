<form action="add.php" method="POST" enctype="multipart/form-data">
    <div>
        <label for="">Title</label>
        <input type="text" name="title">
        <?php if (isset($_GET['title_err'])) : ?>
            <span style="color:red;"><?= $_GET['title_err'] ?></span>
        <?php endif ?>
    </div>
    <div>
        <label for="">Price</label>
        <input type="number" name="price">
        <?php if (isset($_GET['price_err'])) : ?>
            <span style="color:red;"><?= $_GET['price_err'] ?></span>
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
        <input type="text" name="intro">
        <?php if (isset($_GET['intro_err'])) : ?>
            <span style="color:red;"><?= $_GET['intro_err'] ?></span>
        <?php endif ?>
    </div>
    <div>
        <label for="">Content</label>
        <input type="text" name="content">
        <?php if (isset($_GET['con_err'])) : ?>
            <span style="color:red;"><?= $_GET['con_err'] ?></span>
        <?php endif ?>
    </div>
    <div>
        <label for="">Page</label>
        <input type="number" name="page">
        <?php if (isset($_GET['page_err'])) : ?>
            <span style="color:red;"><?= $_GET['page_err'] ?></span>
        <?php endif ?>
    </div>
    <div>
        <label for="">Author_id</label>
        <input type="radio" name="author_id" value="1" checked>Hoang Nhat Anh
        <input type="radio" name="author_id" value="2">Hoang Tit
    </div>
    <button>Submit</button>


</form>