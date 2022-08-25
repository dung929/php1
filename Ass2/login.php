<?php
session_start();

$errors = isset($_GET['errors']) ? $_GET['errors'] : '';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (isset($_SESSION['user'])) { ?>
        Đăng nhập thành công !.... Chào: <?= $_SESSION['user']['username'] ?>!
        <a href="logout.php"><button>Đăng xuất</button></a>
        <div>
            <a href="./ql_user/index.php"><button>Quản trị user</button></a>
            <br>
            <a href="./ql_sp/quan_ly_sp.php"><button>Quản lý sản phẩm</button></a>
            <br>
            <a href="./ql_dm/quan_ly_dm.php"><button>Quản lý danh mục</button></a>
            <br>
            <a href="products.php">
                <button>Trang sản phẩm</button>
            </a>
        </div>
    <?php } else { ?>
        <form action="post-login.php" method="POST">
            <h2>Vui lòng đăng nhập</h2>
            <input type="text" name="username">
            <input type="password" name="password">
            <button>Login</button>
        </form>

    <?php } ?>
</body>

</html>
<div style="color: orange   ;">
    <?php echo $errors ?>
</div>