<?php
session_start();

$thongTinSV=$_POST;

$_SESSION["thongtinSV"][]=$thongTinSV;
header('Location:inThongTinSV.php');
