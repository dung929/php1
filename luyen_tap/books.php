<?php
require_once('db.php');

$sql = 'SELECT books.id,book_title,books.image,intro,detail,books.page,price,cate_name FROM books JOIN categories ON books.cate_id = categories.id';
$statement = $connect->prepare($sql);


$statement->execute();

$books = $statement->fetchAll();

?>
<a href="form_tao_book.php"><button style="background-color:red ; border-radius:8px ; padding:10px ; color: white; font-weight:700">Tạo sách mới</button></a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Book-Title</th>
            <th>Image</th>
            <th>Intro</th>
            <th>Detail</th>
            <th>Page</th>
            <th>Price</th>
            <th>Categories</th>
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
                    <a href="form_sua_book.php?id=<?= $value['id'] ?>"><button style="background-color:violet ; border-radius:8px ; padding:10px;border:none ; color: white; font-weight:700">Sửa Book</button></a>
                    <a href="xoa_book.php?id=<?= $value['id'] ?>"><button style="background-color:pink ; border-radius:8px ; padding:10px ;border:none; color: white; font-weight:700">Xóa Book</button>
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>



</table>