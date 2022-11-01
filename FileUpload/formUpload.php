<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <title>Upload File</title>
</head>
<body>
<div class="container">
    <h4>Up ảnh đại diện</h4>
    <form action="functionUploadFile.php" method="POST" enctype="multipart/form-data" role="form">
        <p>Chọn ảnh đại diện</p>
        <input type="file" name="avatar"><br>
        <button type="submit" value="submit" name="btn_login" class="btn btn-primary">Up ảnh</button>
        <br>
    </form>

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
    if (isset($_SESSION["uploadStatus"]) && $_SESSION["uploadStatus"][0] == true) { ?>
        <div class="alert alert-success" role="alert">
            Đường dẫn file upload <?= $_SESSION["uploadStatus"][1] ?>
        </div>

        <?php
        unset($_SESSION["uploadStatus"]);
    } ?>
</div>
</body>
</html>
