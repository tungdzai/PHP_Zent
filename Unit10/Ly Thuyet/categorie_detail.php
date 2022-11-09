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
    <title>CATEGORIES</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h3 class="text-center">--- CATEGORIES ---</h3>
    <a href="#" class="btn btn-primary">Add New Category</a>
    <table class="table">
        <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Thumbnail</th>
        <th>Description</th>
        <th>Action</th>
        </thead>
            <tr>
                <td><?= $categorie["id"] ?></td>
                <td><?= $categorie["category_name"] ?></td>
                <td>
                    <img src="<?= $categorie["category_thumbnail"]?>"
                         width="100px" height="100px">
                </td>
                <td><?= $categorie["category_slug"] ?></td>
                <td>
                    <a href="categorie_detail.php?id=<?= $categorie["id"] ?>" class="btn btn-primary">Edit</a>
                    <a href="categorie_detail.php?id=<?= $categorie["id"] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>

    </table>
</div>
</body>
</html>
