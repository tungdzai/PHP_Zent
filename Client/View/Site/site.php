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
    <!-- main -->
    <!--    Detail -->
    <div class="row row1">
        <div class="container_theater">
            <div class="theatre_list product_view">
                <div class="showtime_top"></div>
                <div class="theater_site theater_show">
                    <div class="cinema_list_content">
                        <div class="title_cinema"><h1>TH CINEMAS</h1></div>
                        <div class="cinema_site">
                            <ul class="cinema_site_row">
                                <?php
                                foreach ($sites as $index => $site) {?>
                                    <li class="city"><?=$site["city"] ?></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="cinema_city">
                            <ul class="city_row">
                                <li class="cinema">1</li>
                                <li class="cinema">1</li>
                                <li class="cinema">1</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="showtime_bottom">
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
    const city=document.querySelector(".city_row")
    const site=document.querySelector('.cinema_site_row');
    site.addEventListener("click",(e)=>{
        city.style.display="block";
    })

</script>
<style>
    .container_theater {
        width: 75%;
        margin: 0 auto;
    }
    .theatre_list{
        margin: 30px 0;
    }

    .showtime_top {
        background: url("https://www.cgv.vn/skin/frontend/cgv/default/images/cinema-showtimes-favorite-top.png") no-repeat;
        width: 100%;
        height: 43px;
    }

    .theater_site {
        background: url("https://www.cgv.vn/skin/frontend/cgv/default/images/cinema-showtimes-favorite-center.png") repeat-y;
    }

    .cinema_list_content {
        padding: 17px 40px
    }

    .title_cinema {
        text-align: center;
        margin-bottom: 20px;
    }

    .title_cinema h1 {
        color: #717171;
        font-size: 48px;
        font-weight: bold;
        text-shadow: 2px 2px 2px #b9b9b9;
    }

    .cinema_site {
        width: 100%;
        border-bottom: 2px solid #727171;
        border-top: 2px solid #727171;
        padding: 6px 10px 15px;
    }

    .cinema_site ul {
        color: #FFFFFF;
        display: flex;
        flex-wrap: wrap;
        padding: 10px;
    }
    .cinema_site ul  li{
        margin-top: 15px;
        width: 20%;
        cursor: pointer;
    }
    .showtime_bottom{
        background: url("https://www.cgv.vn/skin/frontend/cgv/default/images/cinema-showtimes-favorite-bottom.png") no-repeat;
        width: 100%;
        height: 43px;
    }
    .cinema_site ul  li:hover{
       color: #ee4545;
    }
    .city_row{
        color: #FFFFFF;
        display: none;
    }


</style>