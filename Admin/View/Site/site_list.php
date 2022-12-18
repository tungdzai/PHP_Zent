<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Site</title>
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
            <div class="status_cinemas">
            </div>
            <div class="addcategory" style="padding: 20px 30px ; border-radius: 10px ">
                <a href="#" class="btn btn-info" style="color: #FFFFFF;font-weight: 500">Thêm rạp phim</a>
            </div>
            <div class="container-fluid px-4 categoriesWrap">
                <form class="table_left">
                    <h3>Danh sách rạp phim</h3>
                    <hr>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col" style="text-align: center">City</th>
                            <th scope="col" style="text-align: center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if (count($sites[0]) == 0) {
                            ?>
                            <td>Chưa có rạp phim nào</td>
                            <?php
                        }
                        ?>
                        <?php
                        foreach ($sites[0] as $index => $site) { ?>
                            <tr>
                                <td><?= $index + 1 + $sites[2] * ($sites[3] - 1) ?></td>
                                <td style="text-align: center"><?=$site["city"]?></td>
                                <td style="text-align: center">
                                    <a href="<?= URLCINEMA ?>index&id=<?= $site["id"] ?>" class="btn btn-success">Detail</a>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal<?= $index + 1 + $sites[2] * ($sites[3] - 1) ?>">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <div class="modal fade"
                                         id="exampleModal<?= $index + 1 + $sites[2] * ($sites[3] - 1) ?>"
                                         tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Bạn muốn xoá danh mục ?</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Tất cả hoạt động trên danh mục sẽ bị xoá khỏi danh sách
                                                        và bạn sẽ không thể mở lại danh mục nữa. Sẽ không có cách nào để
                                                        hoàn tác. Bạn có chắc không?
                                                    </p>
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close
                                                    </button>
                                                    <a href="<?= URLSITE ?>remove&id=<?= $site["id"] ?>"
                                                       class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <?php
                        }
                        ?>

                        </tbody>
                    </table>
                </form>
            </div>
            <div class="pagination">
                <?php require_once("./View/Layout/pagination.php") ?>
            </div>
        </main>
        <?php require_once("./View/Layout/footer.php"); ?>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
<script src="./View/Layout/scripts.js"></script>
<script>
</script>
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

    .avatar_categorie {
        width: 150px;
    }

    .avatar_categorie img {
        width: 100%;
        border-radius: 5px;
    }

    .pagination {
        padding: 15px;
        justify-content: right;
    }

    .form-control {
        width: 4%;
    }

    .form_pagination {
        padding-top: 10px;
    }

</style>