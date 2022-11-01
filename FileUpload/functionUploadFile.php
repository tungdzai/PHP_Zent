<?php
session_start();
echo "<pre>";
print_r($_FILES);
echo "</pre>";
function checkUPLoadfile($inputName, $targetDir, $allowTypes, $maxSize, $override)
{
    $uploadStatus = true; // Đánh dấu xem lỗi hay không.
    $targetFile = $targetDir . "/" . basename($_FILES["$inputName"]["name"]); // Tên đường dẫn ảnh được lưu trên sever.
    $errors = array(); // khai báo mảng lỗi khi UpLoadFile.

    $types = "";
    //Duyệt danh sách các định dạng file cho phép.
    if (is_array($allowTypes)) {
        foreach ($allowTypes as $key => $type) {
            $types .= $type . ",";
        }
    }

    $types = trim($types, ","); // cắt dấu , cuối chuỗi types.

    // check dữ liệu vào file.
    if (!isset($_FILES[$inputName]["name"])) {
        $errors[] = "Không có dữ liệu file";
        $uploadStatus = false;

    }
    //Kiểm tra lỗi của file.
    if ($_FILES[$inputName]["error"] !== 0) {
        $errors[] = "Dữ liệu up load bị lỗi";
        $uploadStatus = false;
    }
    //Kiểm tra đuôi file
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    if (!in_array($imageFileType, $allowTypes)) {
        $errors[] = "Chỉ được uploadfile đúng định dạng " . $types;
        $uploadStatus = false;
    }

    // kiểm tra kích thước file
    if ($_FILES[$inputName]["size"] > $maxSize * 1024 * 1024) {
        $errors[] = "Không được upload file ảnh lớn hơn" . $maxSize;
        $uploadStatus = false;
    }

    //kiểm tra file có tồn tại chưa.
    if (file_exists($targetFile) && $override == false) {
        $errors[] = "Tên file đã tồn tại trên sever";
        $uploadStatus = false;
    }
    // upLoad file
    //move_uploaded_file di chuyển file đã tải đến vị trí mới( move_uploaded_file ( string $from , string $to ): bool)
    if ($uploadStatus) {
        if (move_uploaded_file($_FILES[$inputName]["tmp_name"], $targetFile)) {
            return array(true, $targetFile);
        } else {
            $errors[] = "Có lỗi xảy ra khi upload file.Vui lòng kiểm tra lại !";
            return array(false, $errors);
        }
    } else {
        return array(false, $errors);
    }
}

$uploadFile = checkUPLoadfile("avatar", "image", array("jpg", "png", "gif"), 1, true);
$_SESSION["uploadStatus"] = $uploadFile;
//header("Location: formUpload.php");

