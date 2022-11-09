<?php
require_once("categories.php")
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
    <a href="categorie_add.php" class="btn btn-primary">Add New Category</a>
    <table class="table">
        <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Thumbnail</th>
        <th>Description</th>
        <th>Action</th>
        </thead>
        <?php foreach ($categories as  $cate) {?>

        <tr>
            <td><?= $cate["id"] ?></td>
            <td><?= $cate["category_name"] ?></td>
            <td>
                <img src="<?= $cate["category_thumbnail"]?>"
                     width="100px" height="100px">
            </td>
            <td><?= $cate["category_description"] ?></td>
            <td>
                <a href="categorie_detail.php?id=<?= $cate["id"] ?>" class="btn btn-primary">Detail</a>
                <a href="categorie_edit.php?id=<?= $cate["id"] ?>" class="btn btn-success">Edit</a>
                <a href="categorie_delete.php?id=<?= $cate["id"] ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>