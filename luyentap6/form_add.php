<form action="add.php" method="POST" enctype="multipart/form-data">
    <div>
        <input type="text" name="name">
        <?php if (isset($_GET['name_err'])) : ?>
            <span style="color:red;"><?= $_GET['name_err'] ?></span>
        <?php endif ?>
    </div>
    <div>
        <input type="file" name="image">
        <?php if (isset($_GET['image_err'])) : ?>
            <span style="color:red;"><?= $_GET['image_err'] ?></span>
        <?php endif ?>
    </div>
    <div>
        <input type="number" name="price">
        <?php if (isset($_GET['price_err'])) : ?>
            <span style="color:red;"><?= $_GET['price_err'] ?></span>
        <?php endif ?>
    </div>
    <div>
        <input type="number" name="quantity">
        <?php if (isset($_GET['quan_err'])) : ?>
            <span style="color:red;"><?= $_GET['quan_err'] ?></span>
        <?php endif ?>
    </div>
    <div>
        <input type="text" name="description">      
        <?php if (isset($_GET['des_err'])) : ?>
            <span style="color:red;"><?= $_GET['des_err'] ?></span>
        <?php endif ?>
    </div>
    <div>
        <input type="radio" name="brand_id" value=1 checked>1
        <input type="radio" name="brand_id" value=2>2
    </div>
    <button>Submit</button>
</form>