<?php
require_once ("pagination_proress.php");
$page_item = isset($_GET["page"]) ?$_GET["page"]: null;
?>
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item">
            <a class="page-link" href="post.php?page=<?= ($page_item - 1)>0  ?($page_item - 1):1 ?>" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <?php
        for ($i=1 ;$i <= $total_page ;$i++){?>
            <li class="page-item"><a class="page-link" href="post.php?page=<?= $i ?>"><?= $i ?></a></li>
        <?php
        }
        ?>
        <li class="page-item">
            <a class="page-link" href="post.php?page=<?= ($page_item +1) < $total_page ? ($page_item +1) : $total_page  ?>" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>
<style>
    .pagination{
        justify-content: end;
        margin-top: 10px;
    }
</style>