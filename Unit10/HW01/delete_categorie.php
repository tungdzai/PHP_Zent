<?php
require_once('db_php30.php');
$id = $_GET['id'];
$query = "delete  from categories where id=" . $id;
$result = $connn->query($query);
header("Location:categories_form.php");