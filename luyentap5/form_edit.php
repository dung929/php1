<?php
require_once('db.php');

$room_id = $_GET['room_id'];

$sql = "SELECT * FROM rooms WHERE room_id = $room_id";

$statement = $connect -> prepare($sql);

$statement -> execute();

$rooms = $statement ->fetch();

?>

<form action="edit.php" method="POST" enctype="multipart/form-data">
    <div>
        <label for="">Room_name</label>
        <input type="text" name='room_name' value="<?= $rooms['room_name']?>">
    </div>
    <div>
        <label for="">Image</label>
        <input type="file" name='image' value="<?= $rooms['image']?>">
    </div>
    <div>
        <label for="">Intro</label>
        <input type="text" name='intro' value="<?= $rooms['intro']?>">
    </div>
    <div>
        <label for="">Description</label>
        <input type="text" name='description' value="<?= $rooms['description']?>">
    </div>
    <div>
        <label for="">Number</label>
        <input type="number" name='number' value="<?= $rooms['number']?>">
    </div>
    <div>
        <label for="">Price</label>
        <input type="number" name='price' value="<?= $rooms['price']?>">
    </div>
    <div>
        <label for="">Type_id</label>
        <input type="radio" name="type_id" value=1 <?php if($rooms['type_id']==1){
            echo 'checked';
        }?>>1
          <input type="radio" name="type_id" value=2 <?php if($rooms['type_id']==2){
            echo 'checked';
        }?>>2
    </div>
    <button>Submit</button>
</form>