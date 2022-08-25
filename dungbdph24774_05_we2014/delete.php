<?php
require_once('db.php');
$id = $_GET['id'];
$sql = "DELETE FROM books WHERE id= $id";

$statement = $connect -> prepare($sql);
$statement ->execute();
header("location:books.php");