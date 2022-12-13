<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./View/Public/style.css">
</head>
<body>
<?php
require_once("./View/Layout/topbar.php")
?>
<!-- header -->
<div class="container-fluid">
    <div class="row header">
        <?php
        require_once("./View/Layout/header.php")
        ?>
    </div>

    <!-- main -->
    <!--    LOGIN-->
    <div class="row row1">
        <div class="col-lg-5 col-md-12 col-12 mx-auto px-md-0 row loginWrap">
            <h5>
                <a href="<?= URLLOGIN ?>index">ĐĂNG NHẬP</a>
                <a href="<?= URLCREATE ?>index" class="active">ĐĂNG KÝ</a>
            </h5>
            <form action="<?= URLCREATE ?>insert" method="post" class="frm_login">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tên <span style="color: red">*</span></label>
                    <input type="text" class="form-control" placeholder="Tên" name="name">
                    <?php
                    if (isset($_SESSION["errorCreate"]["name"])) {
                        ?>
                        <div class="error">
                            <?= $_SESSION["errorCreate"]["name"];
                            unset($_SESSION["errorCreate"]["name"])?>
                        </div>
                        <?php
                    }
                    ?>

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Số điện thoại <span
                                style="color: red">*</span></label>
                    <input type="text" class="form-control" placeholder="Số điện thoại" name="numberPhone">
                    <?php
                    if (isset($_SESSION["errorCreate"]["phoneNumber"])) {
                        ?>
                        <div class="error">
                            <?= $_SESSION["errorCreate"]["phoneNumber"] ;
                            unset($_SESSION["errorCreate"]["phoneNumber"])?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if (isset($_SESSION["checkPhone"])) {
                        ?>
                        <div class="error">
                            <?= $_SESSION["checkPhone"] ;
                            unset($_SESSION["checkPhone"])?>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email <span style="color: red">*</span> </label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="abc@gmail.com" name="email">
                    <?php
                    if (isset($_SESSION["errorCreate"]["email"])) {
                        ?>
                        <div class="error">
                            <?= $_SESSION["errorCreate"]["email"] ;
                            unset($_SESSION["errorCreate"]["email"])?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if (isset($_SESSION["checkEmail"])) {
                        ?>
                        <div class="error">
                            <?= $_SESSION["checkEmail"];
                            unset($_SESSION["checkEmail"])?>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="mb-3">
                    <label>Giới tính </label>
                    <br>
                    <input type="radio" name="gender" value="1"> Nam &nbsp;
                    <input type="radio" name="gender" value="0"> Nữ &nbsp;
                    <input type="radio" name="gender" value="2"> Khác &nbsp;
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mật khẩu <span
                                style="color: red">*</span></label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                           name="password">
                    <?php
                    if (isset($_SESSION["errorCreate"]["password"])) {
                        ?>
                        <div class="error">
                            <?= $_SESSION["errorCreate"]["password"] ;
                            unset($_SESSION["errorCreate"]["password"])?>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Xác nhận mật khẩu <span
                                style="color: red">*</span></label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm"
                           name="confirm">
                    <?php
                    if (isset($_SESSION["errorCreate"]["confirm"])) {
                        ?>
                        <div class="error">
                            <?= $_SESSION["errorCreate"]["confirm"] ;
                            unset($_SESSION["errorCreate"]["confirm"])?>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <button type="submit" class="btn">Đăng ký</button>
            </form>
        </div>
    </div>
</div>
<!-- footer -->
<div class="footer_slide_banner row col-lg-12 mx-auto">
    <img src="https://www.cgv.vn/skin/frontend/cgv/default/images/bg-cgv/brand-type-film-footer_ver2.png" alt=""
         width="100%">
</div>
<div class="row" id="row12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="80">
    <div class="col-lg-10 col-md-12 col-12 mx-auto row">
        <div class="col-lg-3 col-md-5 col-12">
            <h3>TH Cinema </h3>
            <p>Giấy CNĐKDN: 033446300, đăng ký lần đầu ngày 17/12/2022, cấp bởi Sở KHĐT thành phố Hà Nội.</p>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-tumblr"></i>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
        </div>
        <div class="col-lg-2 col-md-3 col-12">
            <h6>Điều kiện sử dụng<span class="plus d-md-none d-lg-none"><i class="fas fa-plus"></i></span><span
                        class="minus d-md-none d-lg-none"><i class="fas fa-minus"></i></span></h6>
            <ul class=" d-md-block d-lg-block">
                <li><a href="" style="color: #FFFFFF;text-decoration: none">Điều kiện chung </a></li>
                <li><a href="" style="color: #FFFFFF;text-decoration: none">Tài khoản thanh toán </a></li>
                <li><a href="" style="color: #FFFFFF;text-decoration: none">Kiểm tra đơn hàng </a></li>
                <li><a href="" style="color: #FFFFFF;text-decoration: none">Câu hỏi thường gặp</a></li>
            </ul>
        </div>
        <div class="col-lg-3 col-md-7 col-12">
            <h6>Chăm sóc khách hàng <span class="plus d-md-none d-lg-none"><i class="fas fa-plus"></i></span><span
                        class="minus d-md-none d-lg-none"><i class="fas fa-minus"></i></span></h6>
            <ul class="widget-contact-info d-md-block d-lg-block">
                <li>Phone/Fax: <a href="tel://0334463900" style="color: #FFFFFF;text-decoration: none">0334463900</a>
                </li>
                <li>Email: <a href="mailto://tungnguyen0603202@gmail.com" style="color: #FFFFFF;text-decoration: none">tunnguyen0603202@gmail.com</a>
                </li>
            </ul>

        </div>
    </div>
</div>
</div>
<div class="row" id="footer">
    <div class="col-lg-10 mx-auto text-center">
        TH Cinema </span> Made with <i class="fa fa-heart text-danger"></i> by VIETTUNG</p>
    </div>
</div>
<!-- end footer -->
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>
<script src="./View/Public/script.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
<style>
    .loginWrap {
        border: 1px solid red;
        border-radius: 5px;
        margin: 20px 0;
    }

    .loginWrap h5 {
        width: 100%;
        text-align: center;
        background-color: #ff0303;
        padding: 10px;
    }

    .loginWrap h5 a {
        text-decoration: none;
        color: #FFFFFF;
        padding: 4px 10px;
    }

    .loginWrap h5 .active {
        border-bottom: 2px solid #FFFFFF;
    }

    .frm_login {
        width: 100%;
        padding: 40px 20px 20px 20px;
    }

    .frm_login button {
        width: 100%;
        background-color: #ff0303;
        color: #FFFFFF;
        font-weight: 500;
        padding: 10px 0;
        margin-top: 30px;
        margin-bottom: 30px;
    }

    label {
        margin-bottom: 1rem;
    }

    .error {
        padding-top: 10px;
        font-size: 12px;
        color: #f10202;
        font-weight: 500;
    }
</style>