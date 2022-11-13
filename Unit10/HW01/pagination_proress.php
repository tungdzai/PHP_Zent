<?php
require_once("post.php");
require_once("db_php30.php");
$sql = "select count(id) as total from posts";
// fetch_assoc() lấy 1 bản ghi
$total_records = $connn->query($sql)->fetch_assoc();
$current_page = isset($_GET['page']) ? $_GET['page'] : 1; //Trang hiện tại
$limit = 10;
$total_page = ceil($total_records["total"] / $limit); // Tổng trang
$start = ($current_page - 1) * $limit;
$result = mysqli_query($connn, "SELECT * FROM posts LIMIT $start, $limit");
$post_page = array();
while ($row = mysqli_fetch_assoc($result)) {
    $post_page[] = $row;
}



