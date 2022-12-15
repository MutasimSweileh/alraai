<?php
$pagg = 7;
include "inc.php";
?>
<section class="portfolio-section-two projects-section">
    <div class="auto-container">
        <div class="row isotope-block">

            <?php
            $prodpram = array();
            $products2 = $core->getmGallery($prodpram);
            if ($products2 != null)
                for ($ii = 0; $ii < count($products2); $ii++) {
            ?>
                <div class="col-md-4 col-sm-6 col-lg-3">
                    <div class="project-block ">
                        <div class="inner-box">
                            <a href="images/<?= $products2[$ii]['image'] ?>" data-fancybox="gallery-outet">
                                <div class="image">
                                    <img src="images/<?= $products2[$ii]["image"] ?>" alt="<?= $products2[$ii]["name" . $clang] ?>" />
                                    <div class="overlay-box">
                                        <div class="content">
                                            <!-- <h3 style="    color: #fff;"><?= $products[$i]["name" . $clang] ?></h3>
                                            <div class="text"><?= plang('اقرا المزيد', 'Read More') ?> <i class="fal fa-arrow-<?= plang("right", "left", 1) ?>"></i>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- <div class="proj-box position-relative w-100">
                        <div class="proj-thumb overflow-hidden w-100"><a href="images/<?= $products2[$ii]['image'] ?>" data-fancybox="gallery-outet" title="<?= $products2[$ii]['name' . $clang] ?>"><img class="img-fluid w-100" src="images/<?= $products2[$ii]['image'] ?>" alt="1"></a></div>
                    </div> -->
                </div>
            <? } ?>
        </div>
    </div>
</section>

<?php
include "inc/footer.php";
?>