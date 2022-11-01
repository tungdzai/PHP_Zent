<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Up Load File</title>
</head>
<body>
<div class="container">
    <h3>Up load</h3>
    <form action="uploadfile.php" method="POST" enctype="multipart/form-data">
        <p>Chọn ảnh đại diện</p>
        <input type="file" name="avatar">
        <button type="submit" value="submit" >Submit</button>
    </form>

</div>
</body>
</html>
