<?php
require_once ("categorie_DB.php");
?>
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="accordion">
                    <section class="accordion-item">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i>&ensp;Dashboard</div>
                    </section>
                    <section class="accordion-item">
                        <a href="categories_form.php" style="text-decoration: none">
                            <div class="sb-nav-link-icon" style="color:rgba(255, 255, 255, 0.5) "><i class="fas fa-th"></i>&ensp;Danh mục bài viết</div>
                        </a>
                        <div class="accordion-item-content">
                            <?php
                            foreach ($categories as $category) { ?>
                                <p style="padding-left: 60px ;padding-top:10px;cursor: pointer"><?=  $category["name"]?></p>
                            <?php }
                            ?>
                        </div>
                    </section>
                    <section class="accordion-item">
                        <a href="post.php" style="text-decoration: none">
                            <div class="sb-nav-link-icon" style="color:rgba(255, 255, 255, 0.5) "><i class="fas fa-list-ol"></i>&ensp;Quản lý bài viết</div>
                        </a>
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