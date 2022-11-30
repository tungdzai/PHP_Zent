<nav aria-label="Page navigation example">
    <ul class="pagination">
        <?php
        $page_item = $_GET["page"] ?? null;
        for ($i = 1; $i <= $categories[1]; $i++) { ?>
            <li class="page-item"><a class="page-link" href="index.php?mod=category&&act=index&&page=<?= $i ?>"><?= $i ?></a></li>
            <?php
        }
        ?>
    </ul>
</nav>