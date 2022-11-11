<?php
session_start();
require_once("db_php30.php");
$key = isset($_GET["id"]) ? $_GET["id"] : 0;
$sql = "select *from posts where id=".$key;
$post_edit = $connn->query($sql)->fetch_assoc();

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
    <link rel="stylesheet" href="Style.css">
</head>

<body class="sb-nav-fixed">
<?php require_once("header.php"); ?>
<div id="layoutSidenav">
    <?php require_once("sidebar.php"); ?>
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
            <?php
            if (isset($_SESSION["error_post"])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php
                    foreach ($_SESSION["error_post"] as $error) {
                        echo "<p>-" . $error . "</p>";
                    }
                    unset($_SESSION["error_post"])
                    ?>
                </div>
                <?php
            } ?>
        </div>
        <!-- main -->
        <main>
            <div class="container-fluid px-4 categoriesWrap">
                <form action="post_add_proress.php" class="frm_add" method="post" enctype="multipart/form-data"
                      role="form">
                    <h3>
                        <?php
                        $key = isset($_GET["id"]) ? $_GET["id"] : 0;
                        if ($key == 0) {
                            ?>
                            Thêm mới bài viết
                            <?php
                        } else {
                            ?>
                            Chỉnh sửa bài viết
                            <?php
                        }
                        ?>
                    </h3>
                    <hr>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=""
                               name="title" value="<?= $key!=0 ?$post_edit["title"]: null ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Description</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=""
                               name="description" value="<?= $key!=0 ?$post_edit["description"]: null ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Thumbnail</label>
                        <input type="file" class="form-control" name="thumbnail">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Content</label>
                        <textarea name="content" class="form-control" rows="4" type="text"><?= $key!=0 ?$post_edit["content"]: null ?></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Category</label>
                        <select class="form-control" name="category_id">
                            <option value="0">---</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>

                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit" value="<?= $key ?>">
                        <?= $key == 0 ? "Create" : "Update" ?>
                    </button>
                </form>
            </div>
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
    .categoriesWrap {
        margin-top: 20px;
    }

    .categoriesWrap .frm_add {
        width: 60%;
        padding: 20px;
        border: 1px solid #c4c4c4;
        border-radius: 10px;
        margin-left: 10px;
        margin: 0 auto;
        background-color: #eafcff;

    }


</style>
