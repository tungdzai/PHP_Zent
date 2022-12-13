<div class="topbar">
    <div class="header_top">
        <img src="https://www.cgv.vn/skin/frontend/cgv/default/images/bg-cgv/recruitment_icon1.png" alt="">
        <span>TUYỂN DỤNG</span>
    </div>
    <div class="header_top">
        <img src="https://www.cgv.vn/skin/frontend/cgv/default/images/bg-cgv/icon_promotion25.png" alt="">
        <span>TIN MỚI & ƯU ĐÃI</span>
    </div>
    <div class="header_top">
        <img src="https://www.cgv.vn/skin/frontend/cgv/default/images/bg-cgv/icon_ticket25.png" alt="">
        <span>VÉ CỦA TÔI</span>
    </div>
    <div class="login">
        <a href="<?= URLLOGIN ?>index" style="text-decoration: none ;color: rgb(0 0 0)" >
            <img src="https://www.cgv.vn/skin/frontend/cgv/default/images/bg-cgv/icon_login25.png" alt="">
            <span>
                <?= isset($_SESSION["auth"]) ? "Xin chào:". $_SESSION["auth"]["name"]:" Đăng nhập/Đăng ký"?></span>
        </a>
        <a href="<?=  URLLOGIN ?>logout" style="text-decoration: none ;color: rgb(0 0 0)" >
            <span><?= isset($_SESSION["auth"]) ? "Thoát ": null ?></span>
        </a>
    </div>
</div>