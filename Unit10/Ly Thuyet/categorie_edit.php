<?php
require_once("categories.php");
$id = isset($_GET["id"]) ? $_GET["id"] : null;
if ($id == null) {
    header("Location:index.php");
}
$sql = "select * from blog.categories where id=$id";

$categorie = $conn->query($sql)->fetch_assoc(); // Lấy ra 1 bản ghi.
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevMind - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Edit New Category</h3>
    <hr>
    <form action="categorie_edit_proress.php?id=<?=$categorie["id"]?>" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" id="" placeholder="" name="category_name" value="<?=$categorie["category_name"]?>">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" class="form-control" id="" placeholder="" name="category_description" value="<?=$categorie["category_description"]?>">
        </div>
        <button type="submit" class="btn btn-primary" >UPDATE</button>
    </form>
</div>
</body>
</html>