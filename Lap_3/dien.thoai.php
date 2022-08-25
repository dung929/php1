<?php
$connect = new PDO(
    'mysql:host=127.0.0.1;dbname=Lap_3',
    'root',
    ''
);
 $sql = 'SELECT dien_thoai.id, dien_thoai.name,dien_thoai.price,danh_muc.ten FROM dien_thoai JOIN danh_muc ON dien_thoai.danh_muc_id=danh_muc.id';

 $statement=$connect ->prepare($sql);

 $statement ->execute();
 $dien_thoai=$statement ->fetchAll();
 ?>

 <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Information</th>
            <th>Category</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($dien_thoai as $key => $value): ?>
            <tr>
                <td><?= $value ['id'] ?></td>
                <td><?= $value ['name'] ?></td>
                <td><?= $value ['price'] ?></td>
                <td><?= ($value ['price'] >200) ? 'Đắt' : 'Rẻ' ?></td>
                <td><?=$value ['ten']?></td>
            </tr>
<?php endforeach ?>
    </tbody>
 </table>