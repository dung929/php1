<?php 
$room_name = $_POST['room_name'];
$image = $_FILES['image'];
$save = 'img/'. basename($image['name']);
move_uploaded_file($image['tmp_name'],$save);
$intro = $_POST['intro'];
$description = $_POST['description'];
$number = $_POST['number'];
$price = $_POST['price'];
$type_id = $_POST['type_id'];

require_once('db.php');
 $sql = "UPDATE rooms SET room_name='$room_name',image='$save',intro='$intro',description='$description',number='$number',price='$price',type_id='$type_id'";
$statement = $connect -> prepare($sql);

$statement ->execute();

header("location:rooms.php");