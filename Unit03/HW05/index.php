<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Dashboard</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body>
<!-- header -->
<?php require_once('header.php'); ?>
<!-- end header -->
<div id="layoutSidenav">

    <!-- sidebar -->
    <?php require_once('sidebar.php'); ?>
    <!-- end sidebar -->

    <div id="layoutSidenav_content">
        <!-- main -->
        <main class="main">
            <div class="container-fluid">
                <h1 class="container-fluid-title">Dashboard</h1>
            </div>
        </main>
        <!-- end main -->

        <!-- footer -->
        <?php require_once('footer.php'); ?>
        <!-- end footer -->
    </div>
</div>
</body>
</html>
<style>
    body{
        margin: 0;
        padding: 0;
    }
    #layoutSidenav{
        display: flex;
    }
    .container-fluid-title{
        margin-top: 20px;
        margin-left: 20px;
    }
    #layoutSidenav_content{
        display: flex;
        flex-wrap: wrap;
        width: 100%;
    }
    .main{
        height: 75vh;
    }
</style>
