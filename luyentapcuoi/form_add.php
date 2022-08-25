<form action="add.php" method="POST" enctype="multipart/form-data">
    <div>
        <label for="">Name</label>
        <input type="text" name="name">
        <?php if (isset($_GET['name_err'])) : ?>
            <span style="color:red;"><?= $_GET['name_err'] ?></span>
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
        <label for="">Price</label>
        <input type="number" name="price">
        <?php if (isset($_GET['price_err'])) : ?>
            <span style="color:red;"><?= $_GET['price_err'] ?></span>
        <?php endif ?>
    </div>
    <div>
        <label for="">quantity</label>
        <input type="number" name="quantity" </div>
        <?php if (isset($_GET['quantity_err'])) : ?>
            <span style="color:red;"><?= $_GET['quantity_err'] ?></span>
        <?php endif ?>
        <div>
            <label for="">Description</label>
            <input type="text" name="description">
            <?php if (isset($_GET['des_err'])) : ?>
                <span style="color:red;"><?= $_GET['des_err'] ?></span>
            <?php endif ?>
        </div>
        <div>
            <label for="Brand_id">
                <input type="radio" name="brand_id" value="1" checked>Sam Sung
                <input type="radio" name="brand_id" value="2">Oppo
                <input type="radio" name="brand_id" value="3">Vivo
            </label>
        </div>
        <button>Submit</button>
</form>