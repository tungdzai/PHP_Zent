<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Danh mục bài viết</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./View/Layout/style.css">
</head>

<body class="sb-nav-fixed">
<?php require_once("./View/Layout/header.php"); ?>
<div id="layoutSidenav">
    <?php require_once("./View/Layout/sidebar.php"); ?>
    <div id="layoutSidenav_content">
        <!-- main -->
        <main>
            <div class="addcategory" style="padding: 20px 30px ; border-radius: 10px ">
                <a href="<?= URLCATEGORY ?>store" class="btn btn-info" style="color: #FFFFFF;font-weight: 500">Thêm mới</a>
            </div>
            <div class="container-fluid px-4 categoriesWrap">
                <form class="table_left">
                    <h3>Danh mục bài viết</h3>
                    <hr>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Avatar</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($categories as $index => $category) { ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= $category["name"] ?></td>
                                <td class="avatar_categorie">
                                    <img src="./Public/Storage/<?= $category["thumbnail"] ?>" alt="">
                                </td>
                                <td><?= $category["description"] ?></td>
                                <td>
                                    <a href="#"
                                       class="btn btn-success">Edit</a>
                                    <a href="#" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </form>
            </div>
        </main>
        <?php require_once("./View/Layout/footer.php"); ?>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
<script src="./View/Layout/scripts.js"></script>
</body>
</html>

<style>
    .categoriesWrap {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    .categoriesWrap .table_left {
        width: 100%;
        padding: 20px;
        border: 1px solid #c4c4c4;
        border-radius: 10px;
        margin-right: 10px;
    }
    .avatar_categorie{
        width: 150px;
    }
    .avatar_categorie img {
        width: 100%;
        border-radius: 5px;
    }

</style>