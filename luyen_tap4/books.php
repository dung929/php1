<?php

require_once('db.php');

$sql = "SELECT books.id,book_title,image,intro,detail,page,price,cate_name FROM books JOIN categories ON books.cate_id = categories.id";

$statement = $connect->prepare($sql);

$statement->execute();

$books = $statement->fetchAll();

?>
<a href="form_add.php"><button>Tao danh sach moi</button></a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>BOOK_TITLE</th>
            <th>IMAGE</th>
            <th>INTRO</th>
            <th>DETAIL</th>
            <th>PAGE</th>
            <th>PRICE</th>
            <th>CATE_NAME</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($books as $key => $value) : ?>
            <tr>
                <td><?= $value['id'] ?></td>
                <td><?= $value['book_title'] ?></td>
                <td><img src="<?= $value['image'] ?>" alt="" width="50px"></td>
                <td><?= $value['intro'] ?></td>
                <td><?= $value['detail'] ?></td>
                <td><?= $value['page'] ?></td>
                <td><?= $value['price'] ?></td>
                <td><?= $value['cate_name'] ?></td>
                <td>
                    <a href="delete.php?id=<?= $value['id'] ?>"><button>Xoa</button></a>
                    <a href="form_edit.php?id=<?= $value['id'] ?>"><button>Sua</button></a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>