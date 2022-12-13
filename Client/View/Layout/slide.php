<div class="bd-example slide_show" style="width: 80%">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
            $sum = 0;
            foreach ($categories as $index => $category) {
                if ($category["carouse"] == 1) {
                    $sum++;
                }
            }
            for ($i = 0; $i < $sum; $i++) {
                if ($i == 0) {
                    ?>
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <?php
                } else {
                    ?>
                    <li data-target="#carouselExampleCaptions" data-slide-to="<?=$i?>" class=""></li>
                    <?php

                }

            }
            ?>
        </ol>
        <div class="carousel-inner" role="listbox">
            <?php
            $indexCarouse = array();
            foreach ($categories as $index => $category) {
                if ($category["carouse"] == 1) {
                    $indexCarouse[] = $index;
                }
            }
            foreach ($categories as $index => $category) {
                if ($category["carouse"] == 1) {
                    ?>
                    <div class="carousel-item
                         <?php
                    if ($index == min($indexCarouse)) {
                        echo "active";
                    }
                    ?>
                    ">
                        <img class="d-block img-fluid"
                             data-src="holder.js/900x300?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide"
                             alt="Second slide"
                             src="../Admin/Public/Storage/<?= $category["thumbnail"] ?>">
                    </div>
                    <?php
                }

            }
            ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>