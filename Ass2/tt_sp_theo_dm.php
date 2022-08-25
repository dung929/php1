<?php
session_start();
if (!isset($_SESSION['user'])) {
    $errors = 'Vui lòng đăng nhập để sử dụng';
    header("location: login.php?errors=$errors");
}
require_once('db.php');

$sql = 'SELECT products.id, products.name,products.description,products.color,products.price,products.image_url,categories.ten FROM categories JOIN products ON products.category_id=categories.id';
$statement = $connect->prepare($sql);
$statement->execute();

$categories = $statement->fetchAll();
?>
<a href="products.php">
    <button>Trang sản phẩm</button>
</a>
<a href="login.php">
    <button>Trang quản trị</button>
</a>
<a href="categories.php"><button>
    Trang danh mục
</button></a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>DESCRIPTION</th>
            <th>COLOR</th>
            <th>PRICE </th>
            <th>IMAGE_URL</th>
            <th>CATEGORIES</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($categories as $key => $value) : ?>
            <tr>
                <td><?= $value['id'] ?></td>
                <td><?= $value['name'] ?></td>
                <td><?= $value['description'] ?></td>
                <td><?= $value['color'] ?></td>
                <td><?= $value['price'] ?></td>
                <td><img src="<?= 'img/'.$value['image_url'] ?>" alt="" width="50px"></td>
                <td><?= $value['ten'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>    