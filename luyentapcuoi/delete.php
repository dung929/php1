<?php
require_once('db.php');
$id = $_GET['id'];
$sql = "DELETE FROM products WHERE id=$id";

$statement = $connect ->prepare($sql);

$statement->execute();

header("location:products.php");
