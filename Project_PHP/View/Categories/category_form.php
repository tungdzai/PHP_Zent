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
            <div class="status">
                <?php
                if (isset($_SESSION["errorCategory"])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $_SESSION["errorCategory"][0];
                        unset($_SESSION["errorCategory"])
                        ?>
                    </div>
                    <?php
                } ?>
            </div>
            <div class="container-fluid px-4 categoriesWrap">
                <form action="<?= URLCATEGORY ?><?= isset($_GET["id"]) ? "update":"insert"?>"
                      class="frm_add" method="post" enctype="multipart/form-data"
                      role="form">
                    <h3>
                        <?=
                        isset($_GET["id"]) ? "Chỉnh sửa danh mục" : "Thêm mới danh mục";
                        ?>
                    </h3>
                    <hr>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label" >Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=""
                               name="name" value="<?=isset($_GET["id"]) ? $category_show["name"] : null ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Parent category</label>
                        <select class="form-control" name="parent_id">
                            <option value="">---</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Avatar</label>
                        <input type="file" class="form-control" name="thumbnail">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Description</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=""
                               name="description" value="<?=isset($_GET["id"]) ? $category_show["description"] : null ?>">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit" value="<?= $_GET["id"] ?? null ?>">
                        <?= isset($_GET["id"]) ? "Cập nhật " : "Thêm mới"; ?>
                    </button>
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
        margin-top: 40px;
    }

    .categoriesWrap .frm_add {
        width: 50%;
        padding: 20px;
        border: 1px solid #c4c4c4;
        border-radius: 10px;
        margin-left: 10px;
        margin: 0 auto;
        background-color: #eafcff;

    }

    .avatar_categorie img {
        width: 100%;
    }

</style>
