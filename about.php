<?
$pagg = 2;
include  "inc.php";
?>



<!-- About Us Area -->
<section class="about_us_area row2 mt-3">
    <div class="container">
        <div class=" about_row2">

            <div class="subtittle">
                <h2><?= $pageTitle ?></h2>
            </div>
            <div class="who_we_area col2-md-12 col2-sm-12 text che-have">
                <p></p>
                <p><?= getValue("about", $lang) ?></p>

            </div>







        </div>
    </div>
</section>


<section class="funfact-style-two centred mt-0 pt-0">
    <div class="auto-container">
        <div class="inner-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-6 counter-block">
                    <div class="counter-block-two">
                        <div class="inner-box">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="<?= getValue('experience_count') ?>">0</span>
                            </div>
                            <p><?= plang('سنوات من الخبرة', 'Years of <br> experience') ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 counter-block">
                    <div class="counter-block-two">
                        <div class="inner-box">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="<?= getValue("clients") ?>">0</span>
                            </div>
                            <p><?= plang('العملاء الراضون', 'Satisfied <br> customers') ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 counter-block">
                    <div class="counter-block-two">
                        <div class="inner-box">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="<?= getValue('products') ?>">0</span>
                            </div>
                            <p><?= getTitle("products" . $plang) ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 counter-block">
                    <div class="counter-block-two">
                        <div class="inner-box">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="<?= getValue('Certificates') ?>">0</span>
                            </div>
                            <p><?= plang('شهادات', 'Certificates') ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "inc/footer.php" ?>