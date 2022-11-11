<?php
require_once("db_php30.php");
$key = isset($_GET["search"])?$_GET["search"]:null;
if (isset($key)) {
    $sql = " select * from categories where title like '%".$key."%' ";
} else {
    $sql = "select * from categories  ";
}
$results = $connn->query($sql);
$search_arrays = array();
while ($row = $results->fetch_assoc()) {
    $search_arrays[] = $row;
}
?>