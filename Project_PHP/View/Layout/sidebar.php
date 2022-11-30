<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="accordion">
                    <section class="accordion-item">
                        <a href="<?= URLADMIN ?>" style="text-decoration: none">
                            <div class="sb-nav-link-icon" style="color:rgba(255, 255, 255, 0.5)" ><i class="fas fa-tachometer-alt"></i>&ensp;Dashboard</div>
                        </a>
                    </section>
                    <section class="accordion-item">
                        <a href="#" style="text-decoration: none">
                            <div class="sb-nav-link-icon" style="color:rgba(255, 255, 255, 0.5) "><i class="fas fa-th"></i>&ensp;Danh mục bài viết</div>
                        </a>
                        <div class="accordion-item-content">
                            <a href="<?= URLCATEGORY?>store" style="text-decoration: none">
                                <div class="sb-nav-link-icon" style="color:rgba(255, 255, 255, 0.5) ;padding: 10px 30px"><i class="fas fa-plus"></i>&nbsp; Thêm mới</div>
                            </a>
                            <a href="<?= URLCATEGORY?>index&&page=1" style="text-decoration: none">
                                <div class="sb-nav-link-icon" style="color:rgba(255, 255, 255, 0.5) ;padding: 10px 30px"><i class="fas fa-list"></i>&nbsp; Danh sách </div>
                            </a>
                        </div>
                    </section>
                    <section class="accordion-item">
                        <a href="<?=  URLPOST ?>index" style="text-decoration: none">
                            <div class="sb-nav-link-icon" style="color:rgba(255, 255, 255, 0.5) "><i class="fas fa-th"> </i>&nbsp; Quản lý bài viết</div>
                        </a>
                        <div class="accordion-item-content">
                            <a href="#" style="text-decoration: none">
                                <div class="sb-nav-link-icon" style="color:rgba(255, 255, 255, 0.5) ;padding: 10px 30px"><i class="fas fa-plus"></i>&nbsp; Thêm mới</div>
                            </a>
                            <a href="#" style="text-decoration: none">
                                <div class="sb-nav-link-icon" style="color:rgba(255, 255, 255, 0.5) ;padding: 10px 30px"><i class="fas fa-list"></i>&nbsp; Danh sách </div>
                            </a>
                        </div>
                    </section>
                    <section class="accordion-item">
                        <a href="<?= URLUSER ?>index" style="text-decoration: none">
                            <div class="sb-nav-link-icon" style="color:rgba(255, 255, 255, 0.5) "><i class="fas fa-th"> </i>&nbsp; Quản lý tài khoản</div>
                        </a>
                        <div class="accordion-item-content">
                            <a href="#" style="text-decoration: none">
                                <div class="sb-nav-link-icon" style="color:rgba(255, 255, 255, 0.5) ;padding: 10px 30px"><i class="fas fa-plus"></i>&nbsp; Thêm mới</div>
                            </a>
                            <a href="#" style="text-decoration: none">
                                <div class="sb-nav-link-icon" style="color:rgba(255, 255, 255, 0.5) ;padding: 10px 30px"><i class="fas fa-list"></i>&nbsp; Danh sách </div>
                            </a>
                        </div>
                    </section>
                </div>

            </div>
        </div>
    </nav>
</div>
<style>
    /* The Magic */
    .accordion:hover .accordion-item:hover .accordion-item-content,
    .accordion .accordion-item--default .accordion-item-content {
        height: max-content;
    }
    .accordion-item-content,
    .accordion:hover .accordion-item-content {
        height: 0;
        overflow: hidden;
        transition: height .25s;
    }
    .accordion-item-content p:hover{
        color: #fff;
    }
    /* Aesthetic */
    .accordion .accordion-item {
        background-color:#212529 ;
        padding: 1em;
        color: rgba(255, 255, 255, 0.5);;
    }
</style>