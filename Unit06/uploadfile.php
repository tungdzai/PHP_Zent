<?php
echo "<pre>";
print_r($_FILES);
echo "</pre>";

// Kiểm tra file có tồn tại hay không
if (empty($_FILES["avatar"])) {
    echo "File không tồn tại";
    die("1");
}
// kiểm tra lỗi của file
if ($_FILES["avatar"]["error"] !=0) {
    echo "Dữ liệu file bị lỗi";
    die("2");
}
// Tạo thư mục lưu file up load
$target_dir = "images/"; // Vị trí file lưu tạm trong sever
$target_file = $target_dir . basename($_FILES["avatar"]["name"]); // file sẽ lưu tên trong upload với tên giống tên ban đầu.
echo "<br/> $target_file";

// Lấy phần mở rộng của file( đuôi file )
$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
echo"<br/> $imageFileType";

// kiểm tra xem có phải file ảnh hay không.
$check=getimagesize($_FILES["avatar"]["tmp_name"]);// lấy ra đường dẫn file từ máy.
echo "<pre>";
print_r($check);
echo "</pre>";
if ($check !== false){
    echo "<br/> Đây là file ảnh -".$check["mime"];
}else{
    echo "Đây không phải file ảnh";
}
// Kiểm tra file có tồn tại trong sever hay không
if (file_exists($target_file)){
    echo "<br/>Tên file đã tồn tại trên sever";
}else{
    echo "<br/> Tên file chưa tồn tại trên sever";
}
// lấy ra kích thước file.
$file_size= $_FILES["avatar"]["size"];
echo " <br/>  Kích thước của file ".$file_size."byte";
// Upload file lên sever.
$uploadFile= move_uploaded_file($_FILES["avatar"]["tmp_name"],$target_file);
var_dump($uploadFile);