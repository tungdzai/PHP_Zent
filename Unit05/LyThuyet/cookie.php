<?php
setcookie('msg',"Đăng nhập thành công",time()+60);
if (isset($_COOKIE["msg"])){
    echo "<br/.>".$_COOKIE["msg"];
}