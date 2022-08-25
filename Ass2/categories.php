<?php
require_once('db.php');
$sql = "SELECT * FROM categories";
$statement = $connect->prepare($sql);
$statement->execute();

$categories = $statement->fetchAll();
?>
<a href="products.php">
    <button>Trang sản phẩm</button>
</a>
<a href="tt_sp_theo_dm.php">
    <button>Xem chi tiết</button>
</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($categories as $key => $value) : ?>
            <tr>
                <td><?= $value['id'] ?></td>
                <td><?= $value['ten'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>