<?php
//if (isset($_GET["user"]) && isset($_GET["passworld"])) {
//    echo "<pre>";
//    print_r($_GET);
//    echo "</pre>";
//}
//?>
<!--<form action="proscess.php" method="GET" class="formWrap">-->
<!--    <Span>Login</Span>-->
<!--    <div class="frm_group">-->
<!--        <p>Tên đăng nhập</p>-->
<!--        <input type="text" placeholder="Tên đăng nhập.." name="user">-->
<!--    </div>-->
<!--    <div class="frm_group">-->
<!--        <p>Mật khẩu</p>-->
<!--        <input type="password" placeholder="Nhập mật khẩu" name="passworld">-->
<!--    </div>-->
<!--    <button type="submit">Login</button>-->
<!--</form>-->
<form action="proscess.php" method="POST" class="formWrap">
    <Span>Login</Span>
    <div class="frm_group">
        <p>Tên đăng nhập</p>
        <input type="text" placeholder="Tên đăng nhập.." name="user">
    </div>
    <div class="frm_group">
        <p>Mật khẩu</p>
        <input type="password" placeholder="Nhập mật khẩu" name="passworld">
    </div>
    <button type="submit">Login</button>
</form>