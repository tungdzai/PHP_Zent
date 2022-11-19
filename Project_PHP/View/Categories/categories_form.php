<?php
//require_once("categorie_DB.php");
//$id = isset($_GET["id"])?$_GET["id"]: 0;
//$sql = "select * from categories where id=$id";
//$categorie_edit = $connn->query($sql)->fetch_assoc(); // Lấy ra 1 bản ghi.
?>
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
        <div class="error">
            <?php
            if (isset($_SESSION["uploadStatus"]) && $_SESSION["uploadStatus"][0] == false) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php
                    foreach ($_SESSION["uploadStatus"][1] as $error) {
                        echo "<p>-" . $error . "</p>";
                    }
                    unset($_SESSION["uploadStatus"])
                    ?>
                </div>
                <?php
            } ?>

        </div>
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
                        if (count($categories) != 0) { ?>
                            <?php
                            foreach ($categories as $index => $category) { ?>
                                <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= $category["name"] ?></td>
                                <td class="avatar_categorie">
                                    <img src="../HW01/<?= $category["thumbnail"] ?>" alt="">
                                </td>
                                <td><?= $category["description"] ?></td>
                                <td>
                                    <a href="categories_form.php?id=<?= $category["id"] ?>"
                                       class="btn btn-success">Edit</a>
                                    <a href="delete_categorie.php?id=<?= $category["id"] ?>"
                                       class="btn btn-danger">Delete</a>
                                </td>
                                </tr><?php
                            }
                            ?>
                            <?php
                        } else {
                            ?>
                            <td>Chưa có sản phẩm nảo được thêm!</td>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </form>
                <form action="index.php?mod=categorie&&act=insert" class="frm_add" method="post" enctype="multipart/form-data"
                      role="form">
                    <h3>
                        <?=
                        isset($_GET["id"]) ? "Chỉnh sửa danh mục " : "Thêm danh mục mới";
                        ?>
                    </h3>
                    <hr>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=""
                               name="name" value="<?=isset($_GET["id"])? $categorie_edit["name"]:null ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Parent category</label>
                        <select class="form-control" name="parent_id">
                            <option value="">---</option>
                            <?php
                            foreach ($categories as $category) { ?>
                                <option value="<?= $category["id"] ?>"><?= $category["name"] ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Avatar</label>
                        <input type="file" class="form-control" name="thumbnail">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Description</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=""
                               name="description" value="<?=isset($_GET["id"])? $categorie_edit["description"]:null ?>" >
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit" value="<?=isset($_GET["id"])? $_GET["id"]:null ?>"><?=isset($_GET["id"])? "Cập nhật":"Create" ?></button>
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

    .categoriesWrap .table_left {
        width: 65%;
        padding: 20px;
        border: 1px solid #c4c4c4;
        border-radius: 10px;
        margin-right: 10px;
    }

    .categoriesWrap .table_left h3 {

    }

    .categoriesWrap .frm_add {
        width: 35%;
        padding: 20px;
        border: 1px solid #c4c4c4;
        border-radius: 10px;
        margin-left: 10px;

    }

    .avatar_categorie img {
        width: 100%;
    }

    .avatar_categorie {
        width: 130px;
        height: 100px;
    }

</style>
