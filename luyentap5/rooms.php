<?php

require_once('db.php');

$sql = "SELECT rooms.room_id,room_name,image,intro,description,number,price,type_name FROM rooms JOIN types ON rooms.type_id=types.type_id";

$statement = $connect->prepare($sql);

$statement->execute();

$rooms = $statement->fetchAll();

?>

<a href="form_add.php"><button>New</button></a>
<table>
    <thead>
        <tr>
            <th>ROOM_ID</th>
            <th>ROOM_NAME</th>
            <th>IMAGE</th>
            <th>INTRO</th>
            <th>DESCRIPTION</th>
            <th>NUMBER</th>
            <th>PRICE</th>
            <th>TYPE_NAME</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($rooms as $key => $value) : ?>
            <tr>
                <th><?= $value['room_id'] ?></th>
                <th><?= $value['room_name'] ?></th>
                <th><img src="<?= $value['image'] ?>" alt="" width="50px"></th>
                <th><?= $value['intro'] ?></th>
                <th><?= $value['description'] ?></th>
                <th><?= $value['number'] ?></th>
                <th><?= $value['price'] ?></th>
                <th><?= $value['type_name'] ?></th>
                <th>
                    <a href="form_edit.php?room_id=<?= $value['room_id'] ?>"><button>Edit</button></a>
                    <a href="delete.php?room_id=<?= $value['room_id'] ?>"><button onclick="return confirm('Ban co muon xoa khong ?')">Delete</button></a>
                </th>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>