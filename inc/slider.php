<section class="main-slider style-two">
    <div class="banner-carousel owl-carousel">

        <?php

        $sliderpram = array();
        $sliders = $core->getslider($sliderpram);
        $ie = 0;
        foreach ($sliders as $slider) {  ?>

            <div class="slide">
                <img src="images/<?= $slider["image"] ?>" alt="Al Raai steel pipe trading & electrical supplies" />
                <div class="decrepation-sl">
                    <div class="container">
                        <div class="content alternate">
                            <h1 class=""><?= $slider["title" . $clang] ?></h1>
                            <p class="title">
                                <?= $slider["description" . $clang] ?>
                            </p>

                            <div class="btn-box">
                                <a href="<?= $core->getPageUrl("about" . $plang) ?>" class="theme-btn btn-one"><?= plang('اقرا المزيد', 'Read More') ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }  ?>




    </div>
</section>