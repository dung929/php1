<?php
require_once('db.php');

$sql= "SELECT products.id,name,image,price,quantity,description,brand_name FROM products JOIN brands ON products.brand_id=brands.brand_id";

$statememnt=$connect ->prepare($sql);

$statememnt->execute();

$products = $statememnt->fetchAll();

?>
<a href="form_add.php"><button>Add</button></a>
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>image</th>
            <th>price</th>
            <th>quantity</th>
            <th>description</th>
            <th>brand_name</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($products as $key => $value):?>
            <tr>
                <td><?= $value['id']?></td>
                <td><?= $value['name']?></td>
                <td><img src="<?= $value['image']?>" alt="" width="50px"></td>
                <td><?= $value['price']?></td>
                <td><?= $value['quantity']?></td>
                <td><?= $value['description']?></td>
                <td><?= $value['brand_name']?></td>
                <td>
                    <a href="form_edit.php?id=<?= $value['id']?>"><button>Edit</button></a>
                    <a href="delete.php?id=<?= $value['id']?>"><button onclick="return confirm('Ban co muon xoa khong?')">Delete</button></a>
                </td>
            </tr>
            <?php endforeach ?>
    </tbody>
</table>
