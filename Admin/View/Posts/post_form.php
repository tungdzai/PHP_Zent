<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Chi tiết phim</title>
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
        <main style="background-color: #fdfcf0">
            <div class="status">
                <?php
                if (isset($_SESSION["errorPost"])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $_SESSION["errorPost"][0];
                        unset($_SESSION["errorPost"])
                        ?>
                    </div>
                    <?php
                } ?>
            </div>
            <div class="container-fluid px-4 categoriesWrap">
                <form action="<?= URLPOST ?><?= isset($_GET["id"]) ? "update" : "insert" ?>"
                      class="frm_add" method="post" enctype="multipart/form-data"
                      role="form">
                    <h3>
                        <?=
                        isset($_GET["id"]) ? "Chỉnh sửa chi tiết phim " : "Thêm mới chi tiết phim";
                        ?>
                    </h3>
                    <hr>
                    <div class="form-group mb-3">
                        <label for="">Phim<span style="color: red"> * </span></label>
                        <select class="form-control" name="category_id">
                            <option value="<?= isset($_GET["id"]) ? $post_show["category_id"]: 0 ?>"><?= isset($_GET["id"]) ? $post_show["name"]: null ?></option>
                            <?php
                            foreach ($list_phim as $index => $item) { ?>
                                <option value="<?= $item["id"] ?>"><?= $item["name"] ?></option>
                                <?php
                            }
                            ?>
                        </select>
                        <?php
                        if (isset($_SESSION["errorsPost"]["category_id"])) {
                            ?>
                            <div class="errorPost">
                               <?=$_SESSION["errorsPost"]["category_id"];
                               unset($_SESSION["errorsPost"]["category_id"])?>
                            </div>
                            <?php

                        }
                        ?>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Thể loại<span
                                    style="color: red"> * </span></label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=""
                               name="country" value="<?= isset($_GET["id"]) ? $post_show["country"] : null?>">
                        <?php
                        if (isset($_SESSION["errorsPost"]["country"])) {
                            ?>
                            <div class="errorPost">
                                <?=$_SESSION["errorsPost"]["country"];
                                unset($_SESSION["errorsPost"]["country"])?>
                            </div>
                            <?php
                        }
                        ?>
                        <?php
                        if (isset($_SESSION["errorsUpdate"]["country"])) {
                            ?>
                            <div class="errorPost">
                                <?=$_SESSION["errorsUpdate"]["country"];
                                unset($_SESSION["errorsUpdate"]["country"])?>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Content<span style="color: red"> * </span></label>
                        <textarea name="content" class="form-control" rows="4"
                                  type="text"><?= isset($_GET["id"]) ? $post_show["content"] : null ?></textarea>
                        <?php
                        if (isset($_SESSION["errorsPost"]["content"])) {
                            ?>
                            <div class="errorPost">
                                <?=$_SESSION["errorsPost"]["content"];
                                unset($_SESSION["errorsPost"]["content"])?>
                            </div>
                            <?php

                        }
                        ?>
                        <?php
                        if (isset($_SESSION["errorsUpdate"]["content"])) {
                            ?>
                            <div class="errorPost">
                                <?=$_SESSION["errorsUpdate"]["content"];
                                unset($_SESSION["errorsUpdate"]["content"])?>
                            </div>
                            <?php

                        }
                        ?>
                    </div>
                    <div class="Trailer mb-3">
                        <label  for="exampleFormControlInput1" class="form-label">Trailer<span style="color: red"> * </span></label>
                        <input type="file" class="form-control" name="video">
                        <?php
                        if (isset($_SESSION["errorsUpdate"]["trailer"])) {
                            ?>
                            <div class="errorPost">
                                <?=$_SESSION["errorsUpdate"]["trailer"];
                                unset($_SESSION["errorsUpdate"]["trailer"])?>
                            </div>
                            <?php

                        }
                        ?>
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
        background-color: #c9a3be70;

    }

    .avatar_categorie img {
        width: 100%;
    }

    .errorPost {
        padding-top: 10px;
        font-size: 12px;
        color: #f10202;
        font-weight: 500;
    }

</style>
