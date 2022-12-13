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
        <div class="col-lg-8 col-md-12 col-12 mx-auto px-md-0 row detailWrap">
            <div class="detail_top">
                <div class="detail_top_left">
                    <div class="detail_top_left_top">
                        <img src="../Admin/Public/Storage/<?=$detail["thumbnail"]?>" alt="">
                    </div>
                    <div class="detail_top_left_bottom">
                        <button >Đặt vé</button>
                    </div>
                </div>
                <div class="detail_top_right">
                    <div class="detail_top_right_top">
                        <h2><?=$detail["name"]?></h2>
                    </div>
                    <div class="detail_top_right_bottom">
                        <p>Ngày khởi chiếu: <?php
                            $formatDate = new Format();
                            $date = $formatDate->formatDate( $detail["opening"]);
                            echo $date;
                           ?>
                        </p>
                        <p>Thời lượng:100 phút</p>
                        <p>Quốc gia :<?=$detail["country"]?></p>
                        <p>Độ tuổi:<?=$detail["description"]?></p>
                        <div class="Trailer">
                            <button>Xem trailer <i class="fas fa-play-circle"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="detail_bottom">
                <h3 style="border-bottom: 1px solid rgba(204,28,28,0.9); width: max-content;padding-bottom: 10px">NỘI DUNG PHIM</h3>
                <p><?=$detail["content"]?></p>
            </div>
            <div class="booking_online">
                <h3 style="border-bottom: 1px solid rgba(204,28,28,0.9); width: max-content;padding-bottom: 10px">XEM LỊCH CHIẾU</h3>
                <form action="#" class="frmbooking">
                    <select class="form_rap">
                        <option selected>Chọn rạp</option>
                        <option value="1">Vincom Center Bà Triệu</option>
                        <option value="2">Vincom Nguyễn Chí Thanh</option>
                        <option value="3">Vincom Royal City</option>
                        <option value="4">Trương Định Plaza</option>
                        <option value="5">Vincom Bắc Từ Liêm</option>
                        <option value="6">Vincom Trần Duy Hưng</option>
                        <option value="7">Hồ Gươm Plaza</option>
                        <option value="8">Rice City</option>
                        <option value="9">Vincom Long Biên</option>
                        <option value="10">Sun Grand Thụy Khuê</option>
                        <option value="11">Vincom Ocean Park</option>
                    </select>
                    <input type="date" min="2022-12-07" class="frm_date">
                    <button type="submit"> Mua vé</button>
                </form>
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
    .booking_online h3{
        font-size: 20px;
    }
    .form_rap{
        padding: 5px;
        width: 250px;
        background-color: #fdfcf0;
        border-radius: 5px;
        margin-right: 100px;
    }
    .frm_date{
        padding: 3px;
        width: 200px;
        background-color: #fdfcf0;
        border-radius: 5px;
        border: 1px solid rgb(118, 118, 118);
        margin-right: 100px;


    }
    .frmbooking{
        display: flex;
    }
    .frmbooking button{
        background-color: #F10202;
        border: none;
        padding: 5px 17px;
        color: #FFFFFF;
        font-weight: 500;
        border-radius: 7px;
    }
    .booking_online{
        margin-bottom: 200px;
    }
</style>