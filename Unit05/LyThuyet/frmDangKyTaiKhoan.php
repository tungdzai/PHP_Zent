<form action="dataDangKyTaiKhoan.php" method="post">
    <span>Đăng ký thông tin cá nhân và tài khoản</span>
    <div class="frm_group">
        <p>Họ và tên</p>
        <input type="text" placeholder="Họ và tên..." name="fullName">
    </div>
    <div class="frm_group">
        <p>Giới tính</p>
        <input type="radio" name="gioi_tinh" value="nam">Nam
        <input type="radio" name="gioi_tinh" value="nu">Nữ
        <input type="radio" name="gioi_tinh" value="khac">Khác

    </div>
    <div class="frm_group">
        <p>Mật khẩu</p>
        <input type="password" placeholder="Nhập mật khẩu" name="passWord">
    </div>
    <div class="frm_group">
        <p>Giới thiệu</p>
        <textarea name="intro" id="" cols="30" rows="10"></textarea>
    </div>
<!--    list_Checkbox-->
    <div class="frm_group">
        <p>Bạn biết những ngôn ngữ lập trính nào.</p>
        <input type="checkbox" name="ngo_ngu[]" value="C">C
        <input type="checkbox" name="ngo_ngu[]" value="C++">C++
        <input type="checkbox" name="ngo_ngu[]" value="Java">Java
        <input type="checkbox" name="ngo_ngu[]" value="php">PHP
        <input type="checkbox" name="ngo_ngu[]" value="python">Python
    </div>

<!--    drop-down list-->
    <div class="frm_group" >
        <p>Bạn đang sống ở đâu</p>
        <select name="city" id="">
            <option value="">Lựa chọn thành phố bạn sống</option>
            <option value="hanoi">Hà Nội</option>
            <option value="hcm">Hồ Chí Minh</option>
            <option value="danang">Đà Nẵng</option>
        </select>
    </div>

    <div class="frm_group">
        <input type="checkbox" name="dieu_khoan" value="done">Đã đọc điều khoản đăng ký
    </div>
    <button type="submit">Đăng ký</button>
</form>
