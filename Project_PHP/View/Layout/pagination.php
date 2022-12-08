<nav aria-label="Page navigation example">
    <ul class="pagination">
        <?php
        $page_item = $_GET["page"] ?? null;
        $item=$_GET["mod"]."s";
        if ($_GET["mod"]== "category"){
            $item="categories";
        }
        for ($i = 1; $i <= $$item[1]; $i++) { ?>
            <li class="page-item"><a class="page-link" href="index.php?mod=<?=$_GET["mod"] ?>&&act=index&&page=<?= $i ?>"><?= $i ?></a></li>
            <?php
        }
        ?>
    </ul>
</nav>