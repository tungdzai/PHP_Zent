<?php
session_start();
require_once("post_DB.php");
require_once("search.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Quản lý bài viết</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Style.css">
</head>

<body class="sb-nav-fixed">
<?php require_once("header.php"); ?>
<div id="layoutSidenav">
    <?php require_once("sidebar.php"); ?>
    <div id="layoutSidenav_content">
        <div class="success">
            <?php
            if (isset($_COOKIE["success"])) { ?>
                <div class="alert alert-success" role="alert">
                    <?= $_COOKIE["success"] ?>
                </div>
                <?php
            } ?>
            <?php
            if (isset($_COOKIE["error"])) { ?>
                <div class="alert alert-success" role="alert">
                    <?= $_COOKIE["error"] ?>
                </div>
                <?php
            } ?>
        </div>
        <!-- main -->
        <main>
            <div class="container-fluid px-4 posts">
                <a href="post_add.php" class="btn btn-success" style="margin-bottom: 10px">Thêm mới <i
                            class="far fa-map-pin"></i> </a>
                <form class="table_left">
                    <h3>Quản lý bài viết</h3>
                    <hr>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Thumbnail</th>
                            <th scope="col">Content</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        if (count($search_arrays) == 0) {
                            ?>
                            <td>Không có bài viết</td>
                            <?php
                        } else {
                            foreach ($search_arrays as $index => $post) { ?>
                                <tr>
                                    <td><?= $index + 1 ?></td>
                                    <td><?= $post["title"] ?></td>
                                    <td><?= $post["description"] ?></td>
                                    <td class="imgWrap">
                                        <img src="./<?= $post["thumbnail"] ?>" alt="">
                                    </td>
                                    <td><?= $post["content"] ?></td>
                                    <td>
                                        <a href="post_add.php?id=<?= $post["id"] ?>" class="btn btn-success">Edit</a>
                                        <a href="delete_post.php?id=<?= $post["id"] ?>"
                                           class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>

                        </tbody>
                    </table>
                </form>
        </main>
        <?php require_once("footer.php"); ?>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
<script src="scripts.js"></script>
</body>
</html>
<style>
    .posts {
        margin-top: 60px;
    }

    .imgWrap {
        width: 30px;
    }

    .imgWrap img {
        width: 100%;
        border-radius: 5px;

    }

    .posts .table_left {
        width: 100%;
        padding: 20px;
        border: 1px solid #c4c4c4;
        border-radius: 10px;
        margin-right: 10px;
    }

</style>
