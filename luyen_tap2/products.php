<?php

require_once('db.php');

$sql = "SELECT products.id , products.name, products.price, products.quantity,products.image,products.description,cate_name FROM products JOIN categories ON products.cate_id = categories.id";

$statement = $connect->prepare($sql);


$statement->execute();

$products = $statement->fetchALL();

?>

<a href="form_tao_sp.php"><button>Tạo sản phẩm mới</button></a>

<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Image</th>
            <th>Description</th>
            <th>Cate_name</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $key => $value) : ?>
            <tr>
                <td><?= $value['id'] ?></td>
                <td><?= $value['name'] ?></td>
                <td><?= $value['price'] ?></td>
                <td><?= $value['quantity'] ?></td>
                <td><img src="<?= $value['image'] ?>" alt=""></td>
                <td><?= $value['description'] ?></td>
                <td><?= $value['cate_name'] ?></td>

                <td><a href="xoa_sp.php?id=<?= $value['id'] ?>"><button>Xóa sản phẩm</button></a>
                    <a href="form_sua_sp.php?id=<?= $value['id'] ?>"><button>Sửa sản phẩm</button></a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>