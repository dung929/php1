<form action="add.php" method="POST" enctype="multipart/form-data">
    <div>
        <label for="">Room_name</label>
        <input type="text" name="room_name">
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
        <label for="">Intro</label>
        <input type="text" name="intro">
        <?php if (isset($_GET['intro_err'])) : ?>
            <span style="color:red;"><?= $_GET['intro_err'] ?></span>
        <?php endif ?>
    </div>
    <div>
        <label for="">Description</label>
        <input type="text" name="description">
        <?php if (isset($_GET['des_err'])) : ?>
            <span style="color:red;"><?= $_GET['des_err'] ?></span>
        <?php endif ?>
    </div>
    <div>
        <label for="">Number</label>
        <input type="number" name="number" min=1>
        <?php if (isset($_GET['number_err'])) : ?>
            <span style="color:red;"><?= $_GET['number_err'] ?></span>
        <?php endif ?>
    </div>
    <div>
        <label for="">Price</label>
        <input type="number" name="price" min=1>
        <?php if (isset($_GET['price_err'])) : ?>
            <span style="color:red;"><?= $_GET['price_err'] ?></span>
        <?php endif ?>
    </div>
    <div>
        <label for="">Type_id</label>
        <input type="radio" name="type_id" value="1" checked>Khách sạn
        <input type="radio" name="type_id" value="2">Nhà nghỉ
    </div>
    <button>Submit</button>
</form>