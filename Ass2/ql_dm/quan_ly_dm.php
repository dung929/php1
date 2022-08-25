<?php
session_start();
if (!isset($_SESSION['user'])) {
    $errors = 'Vui lòng đăng nhập để sử dụng';
    header("location: ../login.php?errors=$errors");
}
require_once('../db.php');
$sql = "SELECT * FROM categories";
$statement = $connect->prepare($sql);
$statement->execute();

$categories = $statement->fetchAll();
?>
<a href="../products.php">
    <button>Trang sản phẩm</button>
</a>
<a href="../login.php">
    <button>Trang quản trị</button>
</a>
<a href="form_tao_dm.php"><button>Tạo danh mục mới</button></a>

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
                <td> <a href="../form_sua_dm.php?id=<?php echo $value['id'] ?>">
                        <button>Sửa danh mục</button>
                    </a>
                    <a href="../xoa_dm.php?id=<?php echo $value['id'] ?>">
                        <button>Xóa danh mục</button>
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<a href="../tt_sp_theo_dm.php">
    <button>Xem chi tiết</button>
</a>