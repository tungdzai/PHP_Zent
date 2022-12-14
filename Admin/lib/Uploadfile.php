<?php

class Uploadfile
{
    public function fileUpload($inputName, $targetDir, $allowTypes, $maxSize)
    {
        $uploadStatus = true;
        $targetFile = $targetDir . "/" . basename($_FILES["$inputName"]["name"]);

        $errors = array();
        $types = "";
        if (is_array($allowTypes)) {
            foreach ($allowTypes as $key => $type) {
                $types .= $type . ",";
            }
        }
        $types = trim($types, ",");
        if (!isset($_FILES[$inputName]["name"])) {
            $errors[] = "Không có dữ liệu file";
            $uploadStatus = false;

        }
        if ($_FILES[$inputName]["error"] !== 0) {
            $errors[] = "Dữ liệu up load bị lỗi";
            $uploadStatus = false;
        }

        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        if (!in_array($imageFileType, $allowTypes)) {
            $errors[] = "Chỉ được upload file đúng định dạng " . $types;
            $uploadStatus = false;
        }

        if ($_FILES[$inputName]["size"] > $maxSize * 1024 * 1024) {
            $errors[] = "Không được upload file ảnh lớn hơn" . $maxSize;
            $uploadStatus = false;
        }

        if ($uploadStatus) {
            if (move_uploaded_file($_FILES[$inputName]["tmp_name"], getcwd() . DIRECTORY_SEPARATOR . "Public/Storage/" . $targetFile)) {
                return array(true, $targetFile);
            } else {
                $errors[] = "Có lỗi xảy ra khi upload file.Vui lòng kiểm tra lại !";
                return array(false, $errors);
            }
        } else {
            return array(false, $errors);
        }

    }


}