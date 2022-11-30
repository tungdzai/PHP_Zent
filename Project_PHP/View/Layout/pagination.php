<nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item">
            <a class="page-link" href="index.php?mod=category&&act=index&&page="  aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <?php
        $page_item = $_GET["page"] ?? null;
        for ($i=1; $i<= $categories[1];$i++){ ?>
            <li class="page-item"><a class="page-link" href="index.php?mod=category&&act=index&&page=<?= $i ?>"><?= $i ?></a></li>
        <?php
        }
        ?>
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>