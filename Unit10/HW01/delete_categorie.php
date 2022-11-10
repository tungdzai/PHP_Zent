<?php
require_once('db_php30.php');
$id = $_GET['id'];
$query = "delete  from database_php.categories where id=" . $id;
$result = $connn->query($query);
header("Location:categories_form.php");