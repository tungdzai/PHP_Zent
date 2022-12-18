<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mua vé</title>
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
        <div class="col-lg-8 col-md-12 col-12 mx-auto px-md-0 row bookingWrap">
            <div class="titleBooking">
                <h3>BOOKING ONLINE</h3>
            </div>
            <div class="infoBooking">
                <span class="city">Khu vực:</span>
                <br>
                <select  name="cinema" class="cinemasWrap" >
                    <option selected>Chọn rạp</option>
                    <option >Hùng Vương Plaza</option>
                    <option >Vincom Center Landmark 81</option>
                    <option >Vincom Metropolis Liễu Giai</option>
                </select>
                <br>
                <span>Phim:</span>
                <br>
                <span>
                    <?php
                    $formatDate = new Format();
                    $date = $formatDate->formatDate($_POST["dateBooking"]);
                    echo $date;
                    ?>
                </span>
                <span>
                    <?= $_POST["timeBooking"] ?>
                </span>
            </div>
            <div class="ticketbox">
                <img src="https://www.cgv.vn/skin/frontend/cgv/default/images/bg-cgv/bg-screen.png" alt="">
                <ul class=" row_ticketbox">
                    <li class="seat" >A9</li>
                    <li class="seat ">A8</li>
                    <li class="seat ">A7</li>
                    <li class="seat ">A6</li>
                    <li class="seat ">A5</li>
                    <li class="seat ">A4</li>
                    <li class="seat ">A3</li>
                    <li class="seat ">A2</li>
                    <li class="seat ">A1</li>
                </ul>
                <ul class="row_ticketbox">
                    <li class="seat ">B9</li>
                    <li class="seat ">B8</li>
                    <li class="seat ">B7</li>
                    <li class="seat ">B6</li>
                    <li class="seat ">B5</li>
                    <li class="seat ">B4</li>
                    <li class="seat ">B3</li>
                    <li class="seat ">B2</li>
                    <li class="seat ">B1</li>
                </ul>

                <ul class="row_ticketbox">
                    <li class="seat ">C9</li>
                    <li class="seat ">C8</li>
                    <li class="seat ">C7</li>
                    <li class="seat ">C6</li>
                    <li class="seat ">C5</li>
                    <li class="seat ">C4</li>
                    <li class="seat ">C3</li>
                    <li class="seat ">C2</li>
                    <li class="seat ">C1</li>
                </ul>
                <ul class="row_ticketbox">
                    <li class="seat ">D9</li>
                    <li class="seat ">D8</li>
                    <li class="seat ">D7</li>
                    <li class="seat ">D6</li>
                    <li class="seat ">D5</li>
                    <li class="seat ">D4</li>
                    <li class="seat ">D3</li>
                    <li class="seat ">D2</li>
                    <li class="seat ">D1</li>
                </ul>

                <ul class="row_ticketbox">
                    <li class="seat ">E9</li>
                    <li class="seat ">E8</li>
                    <li class="seat ">E7</li>
                    <li class="seat ">E6</li>
                    <li class="seat ">E5</li>
                    <li class="seat ">E4</li>
                    <li class="seat ">E3</li>
                    <li class="seat ">E2</li>
                    <li class="seat ">E1</li>
                </ul>

                <ul class=" row_ticketbox">
                    <li class="seat ">F9</li>
                    <li class="seat ">F8</li>
                    <li class="seat ">F7</li>
                    <li class="seat ">F6</li>
                    <li class="seat ">F5</li>
                    <li class="seat ">F4</li>
                    <li class="seat ">F3</li>
                    <li class="seat ">F2</li>
                    <li class="seat ">F1</li>
                </ul>

                <ul class=" row_ticketbox">
                    <li class="seat ">G9</li>
                    <li class="seat ">G8</li>
                    <li class="seat ">G7</li>
                    <li class="seat ">G6</li>
                    <li class="seat ">G5</li>
                    <li class="seat ">G4</li>
                    <li class="seat ">G3</li>
                    <li class="seat ">G2</li>
                    <li class="seat ">G1</li>
                </ul>

                <ul class=" row_ticketbox">
                    <li class="seat ">H9</li>
                    <li class="seat ">H8</li>
                    <li class="seat ">H7</li>
                    <li class="seat ">H6</li>
                    <li class="seat ">H5</li>
                    <li class="seat ">H4</li>
                    <li class="seat ">H3</li>
                    <li class="seat ">H2</li>
                    <li class="seat occupied ">H1</li>
                </ul>
            </div>
            <div class="noteBooking">
                <ul>
                    <li class="selected" style="display: none">Còn trống</li>
                    <li class="occupied" style="display: none">Đã đặt</li>
                </ul>
            </div>
            <div class="totalBooking" >
                Tổng: <span id="total"  >0.00</span> VND.
            </div>
            <div class="payment">
                <button>Thanh toán</button>
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
    const ticketbox = document.querySelector('.ticketbox');
    const seats = document.querySelectorAll('.row_ticketbox .seat:not(.occupied');
    const total=document.getElementById('total');
    let price = 75000;
    function updateSelectedCount() {
        const selectedSeats = document.querySelectorAll('.row_ticketbox .selected');
        const selectedSeatsCount=selectedSeats.length;
        const seatsIndex=[...selectedSeats].map(function (seat){
            return [...seats].indexOf(seat);
        })
        console.log(seatsIndex);
        total.innerText=selectedSeatsCount * price;
        console.log(total.innerText);

    }

    ticketbox.addEventListener('click', (e) => {
        if (e.target.classList.contains('seat') && !e.target.classList.contains('occupied')) {
            e.target.classList.toggle('selected');
        }
        updateSelectedCount();
    })


</script>
<style>
    .bookingWrap {
        border: 1px solid #989595;
    }

    .titleBooking {
        background-color: black;
        width: 100%;
        text-align: center;
        color: #f0f0f0;
        padding: 5px;
    }

    .titleBooking h3 {
        font-weight: 500;
        font-size: 25px;
    }

    .infoBooking {
        width: 100%;
        padding: 15px 10px;
        border-bottom: 1px solid;
    }

    .ticketbox {
        width: 100%;
        margin-top: 20px;
    }

    .ticketbox img {
        width: 100%;
        margin-bottom: 50px;
    }

    .row_ticketbox{
        display: flex;
        justify-content: center;
    }

    .row_ticketbox li {
        cursor: pointer;
        margin: 4px;
        padding: 3px 4px;
        border: 1px solid #3a882e;
        border-radius: 10px;
    }

    .selected {
        background-color: rgba(121, 255, 75, 0.73);
        color: #fffefe;
    }

    .occupied {
        background-color: #be0a0a;
        color: #fffefe;
    }

    .totalBooking {
        width: 100%;
        padding: 10px;
        text-align: right;
    }
    .payment{
        width: 100%;
        text-align: right;
        padding: 5px;

    }
    .payment button{
        background-color: #c41515;
        border: none;
        padding: 5px 10px;
        color: #FFFFFF;
        border-radius: 5px;
    }
    .cinemasWrap{
        padding: 5px 0;
        background-color: #fdfcf0;
        border: none;
        margin: 10px 0;
    }

</style>