<?php
require_once('db.php');
$sql = "SELECT * FROM products";
$statement = $connect->prepare($sql);
$statement->execute();

$products = $statement->fetchAll();
?>
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
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $key => $value) : ?>
            <tr>
                <td><?= $value['id'] ?></td>
                <td><?= $value['name'] ?></td>
                <td><?= $value['description'] ?></td>
                <td><?= $value['color'] ?></td>
                <td><?= $value['price'] ?></td>
                <td><img src="<?= 'img/'.$value['image_url'] ?>" alt="" width="50px"></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>