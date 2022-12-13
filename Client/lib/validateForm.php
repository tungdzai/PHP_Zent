<?php

class validateForm
{
    public function checkNumberPhone($phoneNumber)
    {
        $pattern = '/(84|0[3|5|7|8|9])+([0-9]{8})\b/';
        return preg_match($pattern, $phoneNumber);

    }

    public function checkEmail($email)
    {
        $pattern = '/(^[a-zA-Z0-9_.]+[@]{1}[a-z0-9]+[\.][a-z]+$)/';
        return preg_match($pattern, $email);
    }

    public function checkPass($password)
    {
        $pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';
        return preg_match($pattern, $password);
    }

    public function checkCreate($name, $phoneNumber, $email, $password, $confirm)
    {
        $statusCreate = true;
        $errorCreate = array();
        //check name
        if (empty($name)) {
            $errorCreate["name"] = "Tên không được để trống !";
            $statusCreate = false;
        }
        // check phone
        if (empty($phoneNumber)) {
            $errorCreate["phoneNumber"] = "Số điện thoại không được để trống !";
            $statusCreate = false;
        } else {
            $checkNumber = $this->checkNumberPhone($phoneNumber);
            if (!$checkNumber) {
                $errorCreate["phoneNumber"] = "Số điện thoại không đúng định dạng !";
                $statusCreate = false;
            }
        }
        //check email
        if (empty($email)) {
            $errorCreate["email"] = "Email không được để trống !";
            $statusCreate = false;
        } else {
            $checkNumber = $this->checkEmail($email);
            if (!$checkNumber) {
                $errorCreate["email"] = "Email không đúng định dạng !";
                $statusCreate = false;
            }
        }
        //check pass
        if (empty($password)) {
            $errorCreate["password"] = "Mật khẩu không được để trống !";
            $statusCreate = false;
        } else {
            $checkPass = $this->checkPass($password);
            if (!$checkPass) {
                $errorCreate["password"] = "Mật khẩu tối thiểu tám ký tự, ít nhất một chữ hoa, một chữ thường, một số và một ký tự đặc biệt !";
                $statusCreate = false;
            } elseif (strcmp($password, $confirm) != 0) {
                $errorCreate["confirm"] = "Mật khẩu xác nhận chưa đúng !";
                $statusCreate = false;
            }

        }
        if (empty($confirm)) {
            $errorCreate["confirm"] = "Xác thực không được để trống !";
            $statusCreate = false;
        }


        if ($statusCreate) {
            return array(true, "Đăng ký thành công !");
        } else {
            return array(false, $errorCreate);
        }

    }

}
