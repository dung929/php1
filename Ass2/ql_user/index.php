<?php
session_start();
if (!isset($_SESSION['user'])) {
    $errors = 'Vui lòng đăng nhập để sử dụng';
    header("location: ../login.php?errors=$errors");
}
require_once('../db.php');
$sql = 'SELECT * FROM users';
$statement = $connect->prepare($sql);
$statement->execute();
$users = $statement->fetchAll();
?>
<a href="form-tao-user.php">New User</a>
<table>
    <thead>
        <tr>
            <th>Username</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $key => $value) : ?>
            <tr>
                <td><?= $value['username'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>