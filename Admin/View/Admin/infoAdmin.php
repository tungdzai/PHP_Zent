<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Thông tin tài khoản </title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./View/Layout/style.css">
</head>

<body class="sb-nav-fixed">
<?php require_once("./View/Layout/header.php"); ?>
<div id="layoutSidenav">
    <?php require_once("./View/Layout/sidebar.php"); ?>
    <div id="layoutSidenav_content">
        <!-- main -->
        <main>
            <div class="status">
            </div>
            <div class="container-fluid px-4 categoriesWrap">
                <form action="#" class="frm_add" method="post" enctype="multipart/form-data" role="form">
                    <div class="frmRight">
                        <h3> Thông tin tài khoàn </h3>
                        <hr>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label" >Họ và Tên</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=""
                                   name="name" value="">
                        </div>
                        <div class="frm_group">
                            <p>Giới tính</p>
                            <input type="radio" name="gender" value="nam"> Nam
                            <input type="radio" name="gender" value="nu"> Nữ
                            <input type="radio" name="gender" value="khac"> Khác

                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label" >Số điện thoại</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=""
                                   name="numberphone" value="">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label" >Email</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=""
                                   name="email" value="">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit" value="#">
                            Lưu
                        </button>
                    </div>
                    <div class="frmLeft">
                        <img src="https://cdn.icon-icons.com/icons2/1378/PNG/512/avatardefault_92824.png" class="rounded-circle " style="width: 150px;height: 150px"
                             alt="Avatar"  id="image_Avatar" />
                        <input type="file" class="form-control " name="thumbnail" id="edit_avatar">
                    </div>
                </form>
            </div>
        </main>
        <?php require_once("./View/Layout/footer.php"); ?>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
<script src="./View/Layout/scripts.js"></script>
<script>
    document.getElementById("image_Avatar").addEventListener("click",function (){
        document.getElementById("edit_avatar").click();
    });
    document.getElementById("edit_avatar").addEventListener('change',function (){
        const file=this.files[0];
        if (file){
            const reader= new FileReader();
            reader.addEventListener("load",function (){
                document.getElementById("image_Avatar").setAttribute('src',reader.result)
            })
            reader.readAsArrayBuffer(file)
            console.log(reader.readAsArrayBuffer(file))
        }
    })
</script>
</body>
</html>

<style>
    .categoriesWrap {
        display: flex;
        justify-content: space-between;
        margin-top: 40px;
    }

    .categoriesWrap .frm_add {
        width: 50%;
        padding: 20px;
        border: 1px solid #c4c4c4;
        border-radius: 10px;
        margin-left: 10px;
        margin: 0 auto;
        background-color: #38a59838;

    }

    .avatar_categorie img {
        width: 100%;
    }
    .frm_add{
        display: flex;
        justify-content: space-between;
    }
    .frmRight{
        width: 50%;
    }
    .frmLeft{
        width: 35%;
        cursor: pointer;
    }

</style>
