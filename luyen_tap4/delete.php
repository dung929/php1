<?php

$id = $_GET['id'];

require_once('db.php');

$sql = "DELETE FROM books WHERE id=$id";

$statement = $connect->prepare($sql);

$statement->execute();

header("location:books.php");
