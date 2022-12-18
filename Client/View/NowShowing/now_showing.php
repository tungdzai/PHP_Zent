<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết phim | TH Cinema</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./View/Public/style.css">
    <script src="https://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>
    <link href="https://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>
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
    <div class="breadcrumbs">
        <ul class="col-lg-10 col-md-12 col-12 mx-auto px-md-0 row">
            <li class="home"><a href="#" style="color: #1c1f23"><i class="fas fa-home"></i></a><i class="fas fa-chevron-right"></i></li>
            <li class="category">Phim<i class="fas fa-chevron-right"></i></li>
            <li class="category">Phim đang chiếu</li>
        </ul>
    </div>

    <!-- main -->
    <!-- Now Showing -->
    <div class="row row1">
        <div class="col-lg-8 col-md-12 col-12 mx-auto px-md-0 row nowShowing">
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <a href="#" class="itemWrap">
                        <img class="card-img-top" src=""
                             alt="Card image cap">
                    </a>
                    <a href="#">
                        <div class="card-block">
                            <p>#</p>
                            <hr>
                            <span></span>
                        </div>
                    </a>
                </div>
            </div>
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
<script>
    var timepicker = new TimePicker('time', {
        lang: 'en',
        theme: 'dark'
    });
    timepicker.on('change', function(evt) {

        var value = (evt.hour || '00') + ':' + (evt.minute || '00');
        evt.element.value = value;

    });
</script>
<style>
    .detail_top{
        display: flex;
        margin-top: 20px;
        width: 100%;
    }
    .detail_top_left{
        width: 40%;
    }
    .detail_top_right{
        width: 60%;
    }
    .detail_top_left_top {
        width: 70%;
    }
    .detail_top_left_bottom {
        width: 70%;
    }
    .detail_top_left_bottom button{
        width: 100%;
        margin-top: 10px;
        margin-bottom: 20px;
        padding: 10px;
        border: none;
        background-color: #231f20;
        color: #cdc197;
        font-size: 16px;
        text-align: center;
        font-weight: 500;
    }
    .detail_top_left_bottom :hover{
        color: #b69629;
    }

    .detail_top_left_top img{
        width: 100%;
        border-radius: 5px;
    }
    .detail_top_right_top h2{
        font-size: 24px;
        color: #231f20;
    }
    .detail_bottom{
        margin-top: 20px;
        margin-bottom: 40px;
    }
    .detail_bottom h3{
        font-size: 20px;
    }
    .detail_bottom p{
        padding-left: 20px;
    }
    .Trailer button{
        background-color: #F10202;
        border: none;
        padding: 7px 17px;
        color: #FFFFFF;
        font-weight: 500;
        border-radius: 7px;

    }

    .breadcrumbs{
        background-color: #f1f0e5;
        padding: 1px 0;
        border-bottom: 1px solid #cacac0;
    }
    .breadcrumbs ul{
        display: flex;
        margin: 2px;
    }
    .breadcrumbs ul li{
        font-size: 15px;
    }
    .breadcrumbs ul li i{
        padding: 0 5px;
        color: #565657;
    }
    .category{
        color: #565657;
    }
    .booking_online h3{
        font-size: 20px;
        margin-bottom: 30px;
    }

    .booking_online{
        padding: 15px;
        background-color: #fdfcf0;
    }
    .cinemasWrap{
        width: 100%;
        padding: 5px;
        margin-bottom: 50px;
        background-color: #fdfcf0;
    }
    .dateBooking{
        width: 100%;
        padding: 4px;
        margin-bottom: 50px;
        background-color: #fdfcf0;
        border: 1px solid rgb(118, 118, 118);
    }
    #time{
        width: 100%;
        padding: 5px;
        margin-bottom: 50px;
        background-color: #fdfcf0;
        border: 1px solid rgb(118, 118, 118);
    }
    ._jw-tpk-container{
        height: 190px;
    }
</style>