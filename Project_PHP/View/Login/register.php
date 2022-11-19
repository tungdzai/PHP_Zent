<?php
session_start();
$statusRegiter = isset($_SESSION["status_register"][0]) ? $_SESSION["status_register"][0] : null;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="./View/Login/style_login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
<div id='stars'></div>
<div id='stars2'></div>
<div id='stars3'></div>
<div id='title'>
    <form action="register_proress.php" method="post">
        <h1>Register</h1>
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Name" name="name">
            <?php
            if ($statusRegiter == false && isset($_SESSION["status_register"][1]["notname"])) {
                ?>
                <p>
                    <?= $_SESSION["status_register"][1]["notname"];
                    unset($_SESSION["status_register"][1]["notname"]) ?>
                </p>
                <?php
            } elseif ($statusRegiter == false && isset($_SESSION["status_register"][1]["name"])) {
                ?>
                <p>
                    <?= $_SESSION["status_register"][1]["name"];
                    unset($_SESSION["status_register"][1]["name"]) ?>
                </p>

                <?php
            }
            ?>
        </div>
        <div class="mb-3">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                   placeholder="Email" name="email">
            <?php
            if ($statusRegiter == false && isset($_SESSION["status_register"][1]["email"])) {
                ?>
                <p>
                    <?= $_SESSION["status_register"][1]["email"];
                    unset($_SESSION["status_register"][1]["email"]) ?>
                </p>
                <?php
            }
            ?>
        </div>
        <div class="mb-3">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
            <?php
            if ($statusRegiter == false && isset($_SESSION["status_register"][1]["password"])) {
                ?>
                <p>
                    <?= $_SESSION["status_register"][1]["password"];
                    unset($_SESSION["status_register"][1]["password"]) ?>
                </p>
                <?php
            }
            ?>
        </div>
        <div class="mb-3">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm" name="confirm">
            <?php
            if ($statusRegiter == false && isset($_SESSION["status_register"][1]["confirm"])) {
                ?>
                <p>
                    <?= $_SESSION["status_register"][1]["confirm"];
                    unset($_SESSION["status_register"][1]["confirm"]) ?>
                </p>
                <?php
            }
            ?>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-info" style="color: #FFFFFF ; width: 100%">Đăng kí</button>
        </div>
        <a href="index.php">Đăng nhập</a>
    </form>
</div>
</body>
</html>
<style>
    body {
        margin: -7px;
        padding: 0;
    }

    form {
        padding: 30px;
        background-color: #FFFFFF;
        color: black;
        width: 30%;
        margin: 0 auto;
        border-radius: 10px;
    }

    form h1 {
        margin-bottom: 20px;
    }

    #title {
        top: 15%;
    }

    a {
        font-size: 15px;
        letter-spacing: normal;
        text-decoration: none;
        color: #0dcaf0;
    }

    .mb-3 p {
        font-size: 14px;
        letter-spacing: normal;
        text-align: left;
        padding-top: 1px;
        margin: 0;
        color: #ea0b0b;
    }
</style>