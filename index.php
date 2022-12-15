<?php
$pagg = 1;
include "inc.php";
/*
$lang : get form  inc.php  = arabic || english;
$plang : get form  inc.php for  php file name  = arabic || "";
$clang : get form  inc.php for column name  =  _arabic || "" ;
*/
function getElementsByClassName($dom, $ClassName, $tagName = null, $attr = "class", $match = false)
{
    if ($tagName) {
        $Elements = $dom->getElementsByTagName($tagName);
    } else {
        $Elements = $dom->getElementsByTagName("*");
    }
    $Matched = array();
    for ($i = 0; $i < $Elements->length; $i++) {
        if ($Elements[$i]->getAttribute($attr)) {
            //echo $Elements[$i]->getAttribute($attr);
            if (strpos($Elements[$i]->getAttribute($attr), $ClassName) !== false && !$match || $Elements[$i]->getAttribute($attr) == $ClassName) {
                $Matched[] = $Elements[$i];
            }
        }
    }
    return $Matched;
}
if (isv("do")) {
    $link = "http://sherktk.com/alraai2/";
    $grep = new DoMDocument();
    @$grep->loadHTMLFile($link);
    //echo $grep->saveHTML();
    $variable = getElementsByClassName($grep, "shop-block-one", "div");
    foreach ($variable as $key => $value) {
        $t = $value->getElementsByTagName("a")[0]->textContent;
        $t = trim($t);
        $img = $value->getElementsByTagName("img")[0]->getAttribute("src");
        $img = str_replace("images/", "", $img);
        $p1 = $core->getData("products", "where id=28")[0];
        $p = $core->getData("products", "where name ='$t'");
        if (!$p) {
            $core->SqlIn("products", [
                "name" => $t,
                "name_arabic" => $t,
                "image" => $img,
                "level" => 28,
                "active" => 1,
                "special" => 1,
                "order" => 0,
                "description" => $p1["description"],
                "description_arabic" => $p1["description_arabic"],
            ]);
            echo $t . " " . $img . "</br>";
        } else {
            //echo $t . " " . $img . "</br>";
            // if ($p[0]["level"]) {
            //     $core->UpDate("products", ["level" => 0], "", "where name='$t'");
            // }
        }
    }
    die;
}

?>


<section class="about-style2-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-style2_image_box wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner">
                        <img src="images/about.jpg" alt="">
                    </div>
                    <div class="experience-box">



                        <div class="our-experience-years">
                            <div class="year-outline">
                                <h2><?= getValue('experience_count') ?></h2>
                            </div>
                            <p><?= plang('سنوات <span> من الخبرة </ span>', 'Years <span>Experience</span>') ?></p>
                        </div>


                        <div class="right">
                            <span class="icon-icon-6"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="about-style2_text_box">
                    <div class="sec-title style2">
                        <div class="sub-title clr2">
                            <span class="border-box"></span>
                            <h5 class="clr2"><?= getTitle("about" . $plang) ?></h5>
                        </div>
                        <h2><?= $alt ?></h2>
                    </div>
                    <div class="inner-content">
                        <div class="text">
                            <?= getValue('home_text', $lang) ?>


                            <div class="btn-box">
                                <a href="<?= $core->getPageUrl("about" . $plang) ?>" class="theme-btn btn-one"><?= plang('اقرا المزيد', 'Read More') ?></a>
                            </div>

                        </div>





                        <ul>
                            <li>
                                <div class="icon">
                                    <div class="inner">
                                        <span class="icon-41 clr2"></span>
                                    </div>
                                </div>
                                <div class="title">
                                    <h3><?= plang('منتجاتنا معتمدة <br> و مضمونة', 'Our products are certified <br> and guaranteed') ?></h3>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <div class="inner">
                                        <span class="icon-13 clr2"></span>
                                    </div>
                                </div>
                                <div class="title">
                                    <h3><?= plang('أفضل الخبراء <br> الصناعة المتقدمة', 'The best experts and<br>advanced industry') ?> </h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>





<section class="funfact-style-two centred">
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






<!--Projects Section-->
<section class="projects-section">
    <div class="auto-container">
        <div class="small-title-box">
            <h3><?= plang('تسوق حسب الاقسام', 'Shop By Category') ?></h3>
            <div class="bar"></div>
        </div>

        <div class="row">
            <!--Project Block-->


            <?php
            $products = $core->getproducts(array());
            if ($products)
                for ($i = 0; $i < count($products); $i++) {
                    if ($products[$i]["level"])
                        continue;
                    $link = $core->getPageUrl(array($products[$i]['id'], $products[$i]['name' . $clang]), "products" . $plang);

            ?>
                <div class="project-block col-md-3 col-sm-6 col-6">
                    <div class="inner-box">
                        <a href="<?= $link ?>">
                            <div class="image">
                                <img src="images/<?= $products[$i]["image"] ?>" alt="<?= $products[$i]["name" . $clang] ?>" />
                                <div class="overlay-box">
                                    <div class="content">
                                        <h3 style="    color: #fff;"><?= $products[$i]["name" . $clang] ?></h3>
                                        <div class="text"><?= plang('اقرا المزيد', 'Read More') ?> <i class="fal fa-arrow-<?= plang("right", "left", 1) ?>"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>
<!--End Projects Section-->

<!-- shop-section -->
<section class="shop-section home-6 style-six p_relative">
    <div class="auto-container">
        <div class="tabs-box">
            <div class="small-title-box">
                <h3><?= plang('متجات متميزة', 'Special Porducts') ?></h3>
                <div class="bar"></div>
            </div>
            <div class="prod-carousel owl-carousel owl-theme owl-dots-none cutsom-nav">



                <?php
                $products = $core->getproducts(array("special" => 1));
                if ($products)
                    for ($i = 0; $i < count($products); $i++) {
                        if (!$products[$i]["level"])
                            continue;
                        $link = $core->getPageUrl(array($products[$i]['id'], $products[$i]['name' . $clang]), "products" . $plang);

                ?>
                    <div class="single-column">
                        <div class="shop-block-one">
                            <a href="<?= $link ?>">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <? if ($products[$i]['new']) { ?>
                                            <span class="new"><?= plang('جديد', 'New') ?></span>
                                        <? } else if ($products[$i]['sale']) { ?>
                                            <span class="hot"><?= plang('تخفيض', 'Sale') ?></span>
                                        <? } ?>
                                        <figure class="image"><img src="images/<?= $products[$i]["image"] ?>" alt="<?= $products[$i]["name" . $clang] ?>" />
                                        </figure>
                                    </div>
                                    <div class="lower-content">
                                        <h6><?= $products[$i]["name" . $clang] ?>
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php  }   ?>

            </div>
        </div>
    </div>
</section>
<!-- shop-section end -->

<!-- feature-section -->
<section class="feature-section">
    <div class="auto-container p_relative">
        <div class="small-title-box">
            <h3><?= getTitle("partners" . $plang) ?></h3>
            <div class="bar"></div>
        </div>

        <div class="owl-carousel prands-slider custom-nav">

            <?php $variable = $core->getData("partners", ["active" => 1]);
            foreach ($variable as $k => $v) { ?>
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
            <?php } ?>
        </div>
    </div>
</section>
<!-- feature-section end -->


<!-- news-section -->
<section class="news-section p_relative">
    <div class="auto-container">
        <div class="small-title-box">
            <h3><?= getTitle("news" . $plang) ?></h3>
            <div class="bar"></div>
        </div>

        <div class="owl-carousel three-item-carousel custom-nav">

            <?php
            $products = $core->getevents(array("special" => 1));
            if ($products)
                for ($i = 0; $i < count($products); $i++) {
                    if ($products[$i]["level"])
                        continue;
                    $date = getDateTime($products[$i]["date"], $lang);
                    $ds =  trim(strip_tags($products[$i]["description" . $clang]));
                    $ds =  limit_str($ds, 10);
            ?>
                <div class="news-block">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box p_relative d_block">
                            <figure class="image-box">
                                <a href="news<?= $plang ?>.php?id=<?= $products[$i]["id"] ?>"><img src="images/<?= $products[$i]["image"] ?>" alt="" /></a>
                            </figure>
                            <div class="lower-content p_relative d_block">
                                <h3><a href="news<?= $plang ?>.php?id=<?= $products[$i]["id"] ?>"> <?= $products[$i]["name" . $clang] ?></a></h3>
                                <ul class="post-info clearfix">
                                    <li><i class="icon-42"></i><?= $date[0] ?>, <?= $date[1] ?> <?= $date[2] ?>
                                    </li>
                                </ul>
                                <p><?= $ds ?></p>
                                <div class="link">
                                    <a href="news<?= $plang ?>.php?id=<?= $products[$i]["id"] ?>"><?= plang('اقرا المزيد', 'Read More') ?><i class="icon-7"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php  } ?>
        </div>
    </div>
</section>
<?php
include "inc/footer.php";
?>