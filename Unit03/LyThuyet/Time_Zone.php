<?php
//THời gian tại Việt Nam.
 date_default_timezone_set('Asia/Ho_Chi_Minh');

 // Danh Sách time zone.
$timezone=DateTimeZone::listIdentifiers();
foreach ( $timezone as $item) {
    echo $item."<br/>";
}

//Đinh dạng ngày giờ.
echo date('d/m/y -H:i:s');