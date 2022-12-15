<?php
$pagg = 7;
include "inc.php";
?>
<section class="portfolio-section-two">
    <div class="auto-container">
        <div class="row isotope-block">

            <?php
            $variable = $core->getData("partners", ["active" => 1]);
            foreach ($variable as $k => $v) { ?>
                <div class="col-md-4 col-sm-6 col-lg-3 mb-3">
                    <div class="feature-block">
                        <div class="feature-block-one wow fadeInLeft" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block clearfix">
                                <figure class="image-box p_relative d_block">
                                    <img src="images/<?= $v["image"] ?>" alt="<?= $v["name" . $clang] ?>" />
                                </figure>
                                <div class="content-box p_relative d_block">
                                    <h3><a href=""><?= $v["name" . $clang] ?></a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <? } ?>
        </div>
    </div>
</section>

<?php
include "inc/footer.php";
?>