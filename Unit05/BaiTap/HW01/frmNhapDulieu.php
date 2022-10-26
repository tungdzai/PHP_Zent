<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <form action="data_sinhvien.php" method="POST" role="form">
        <br>
        <legend>Nhập dữ liệu thông tin của sinh viên</legend>
        <div class="form-group">
            <label for="">Họ và tên</label>
            <input type="text" class="form-control" name="fullname">
        </div>
        <div class="form-group">
            <label for="">Giới tính</label>
            <input type="radio" name="sex" value="Nam">Nam
            <input type="radio" name="sex" value="Nữ">Nữ
            <input type="radio" name="sex" value="Khác">Khác
        </div>
        <div class="form-group">
            <label for="">Ngày Sinh</label>
            <input type="date" class="form-control" name="bithday">
        </div>
        <div class="form-group">
            <label for="">Quê quán</label>
            <input type="text" class="form-control" name="village" >
        </div>
        <div class="form-group">
            <label for="">Ngoại ngữ</label>
            <input type="checkbox" name="ngoaingu[]" value="Tiếng Anh"> Tiếng Anh
            <input type="checkbox" name="ngoaingu[]" value="Tiếng Nhật"> Tiếng Nhật
            <input type="checkbox" name="ngoaingu[]" value="Tiếng Pháp"> Tiếng Pháp
        </div>
        <div class="form-group">
            <label for="">Thông tin thêm</label>
            <textarea name="intro" class="form-control" id="" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Đăng ký</button>
    </form>
</div>
</body>
</html>