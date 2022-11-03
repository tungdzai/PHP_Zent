<?php

use PHPMailer\PHPMailer\PHPMailer;

function send_email($email_recive, $name, $contents, $subject)
{
    //https://www.google.com/settings/security/lesssecureapps
    // Khai báo thư viên phpmailer
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';
    require 'PHPMailer/Exception.php';

    // Khai báo tạo PHPMailer
    $mail = new PHPMailer();

    //Khai báo gửi mail bằng SMTP
    $mail->isSMTP();
    //Tắt mở kiểm tra lỗi trả về, chấp nhận các giá trị 0 1 2
    // 0 = off không thông báo bất kì gì, tốt nhất nên dùng khi đã hoàn thành.
    // 1 = Thông báo lỗi ở client
    // 2 = Thông báo lỗi cả client và lỗi ở server
    // To load the French version
    $mail->SMTPDebug = 0;
    $mail->Host = "smtp.gmail.com"; //host smtp để gửi mail
    $mail->SMTPAuth = true; //Xác thực SMTP
    $mail->Username = "tivhstore@gmail.com"; // Tên đăng nhập tài khoản Gmail
    $mail->Password = "thuhien0703"; //Mật khẩu của gmail
    $mail->Port = 587; // cổng để gửi mail
    $mail->SMTPSecure = "tls"; //Phương thức mã hóa thư - ssl hoặc tls

    $mail->SMTPOptions= array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true)
    );
    $mail->setLanguage('vi', '/optional/path/to/language/directory/');
    $mail->CharSet = "UTF-8";
    $mail->Debugoutput = "html"; // Lỗi trả về hiển thị với cấu trúc HTML

    $mail->SetFrom("tivhstore@gmail.com", "TIVHStore"); // Thông tin người gửi
    $mail->AddReplyTo("tivhstore@gmail.com", "TIVHStore");// Ấn định email sẽ nhận khi người dùng reply lại.
    $mail->AddAddress($email_recive, $name);//Email của người nhận
    $mail->Subject = $subject; //Tiêu đề của thư
    $mail->MsgHTML($contents); //Nội dung của bức thư.
    //$mail->MsgHTML(file_get_contents("email-template.html"), dirname(__FILE__));
    // Gửi thư với tập tin html
    $mail->AltBody = "Nội dung thư";
    //Nội dung rút gọn hiển thị bên ngoài thư mục thư.

    //Tiến hành gửi email và kiểm tra lỗi
    if ($mail->send()) {
        echo "Gửi email thành công !";
        return true;
    } else {
        echo "Có lỗi khi gửi email";
        return false;
    }
}

$contents = "Xin chào bạn ";
$subject = "Test_1";
send_email("tivhstore@gmail.com", "NGuyễn Việt Tùng", $contents, $subject);