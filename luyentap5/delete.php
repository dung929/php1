<?php
require_once('db.php');
$room_id = $_GET['room_id'];
$sql = "DELETE FROM rooms WHERE room_id=$room_id";
$statement = $connect->prepare($sql);

$statement->execute();
header("location:rooms.php");
