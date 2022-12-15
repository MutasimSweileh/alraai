<?php if (isset($_POST["subscribe"])) {
    $text =  $_POST["name"] . "<br>" . $_POST["email"];
    require("class.phpmailer.php");
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Host = "mail.sherktk.net";

    $mail->SMTPAuth = true;
    //$mail->SMTPSecure = "ssl";
    $mail->Port = 587;
    $mail->Username = "mail@sherktk.net";
    $mail->Password = "JCrS%^)qc!eH";

    $mail->From = "mail@sherktk.net";

    $mail->FromName = $name;
    $info_media["code"] = "email";
    $contents = $core->getinfo_media($info_media);
    $emaills = $contents[0]["link"];
    $mail->AddAddress($emaills);
    //$mail->AddReplyTo("mail@mail.com");
    $mail->IsHTML(true);
    $mail->Subject = "Subscribe";
    $mail->Body = $text;

    //$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

    $core->addemail(array("email" => $_POST["email"]));
    if ($mail->Send()) {
?>

        <script type="text/javascript">
            alert("Thank you !!");
        </script>

    <?php
    } else { ?>
        <script type="text/javascript">
            alert("<?= trim(htmlspecialchars_decode(str_replace("</p>", " ", str_replace("<p>", " ", $mail->ErrorInfo)))) ?>");
        </script>
<?php  }
} ?>
<!-- End Partner Area -->
<footer class="main-footer">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <div class="column col-md-4 col-xs-12">
                    <div class="footer-widget logo-widget">
                        <div class="logo">
                            <a href="<?= $core->getPageUrl("index" . $plang) ?>"><img src="images/logo.png" alt="" /></a>
                        </div>


                        <div class="widget-content">
                            <ul class="social-icon-one">
                                <li>
                                    <a target="_blank" href="<?= getValue('facebook') ?>"><span class="fab fa-facebook-f"></span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="<?= getValue('twitter') ?>"><span class="fab fa-twitter"></span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="<?= getValue('instagram') ?>"><span class="fab fa-instagram"></span></a>
                                </li>
                                <li>
                                    <a target="_blank" href="<?= getValue('linkedin') ?>"><span class="fab fa-linkedin"></span></a>
                                </li>
                            </ul>
                        </div>


                    </div>


                    <div class="footer-bottom toptop">
                        <div class="footer-title">
                            <h2><?= plang('Newletter', 'النشرة الإخبارية', 1) ?></h2>
                        </div>
                        <!--Title Column-->
                        <div class="title-column">
                            <div class="text"><?= plang('Subscribe To Get latest updates.', 'اشترك للحصول على آخر التحديثات.', 1) ?></div>
                        </div>
                        <!--Subscribe Column-->
                        <div class="subscribe-column">
                            <div class="subscribe-form">
                                <form method="post" action="<?= $core->getPageUrl("index" . $plang) ?>">
                                    <div class="form-group">
                                        <input type="email" name="email" value="" placeholder="<?= plang("Your E-mail Address...", "عنوان بريدك  الإلكتروني...", 1) ?>" required="" />
                                        <button type="submit" name="subscribe" value="subscribe" class="theme-btn"><?= plang('Subscribe', 'اشتراك', 1) ?>
                                            <span class="fal fa-arrow-<?= plang("left", "right") ?>"></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>


                <!--Column-->
                <div class="column col-md-4 col-xs-12">
                    <div class="footer-widget links-widget">
                        <div class="footer-title">
                            <h2><?= plang('وصلة سريعة', 'Quick link') ?></h2>
                        </div>

                        <ul class="links">
                            <li><a href="<?= $core->getPageUrl("index" . $plang) ?>">- <?= getTitle("index" . $plang) ?></a></li>
                            <li><a href="<?= $core->getPageUrl(" about" . $plang) ?>" title="">-
                                    <?= getTitle("about" . $plang) ?>
                                </a></li>
                            <li><a href="<?= $core->getPageUrl("products" . $plang) ?>" title="">-
                                    <?= getTitle("products" . $plang) ?>
                                </a></li>
                            <li><a href="<?= $core->getPageUrl("order" . $plang) ?>" title="">-
                                    <?= getTitle("order" . $plang) ?>
                                </a></li>
                            <li><a href="<?= $core->getPageUrl("gallery" . $plang) ?>" title="">-
                                    <?= getTitle("gallery" . $plang) ?>
                                </a></li>
                            <li><a href="<?= $core->getPageUrl("news" . $plang) ?>" title="">-
                                    <?= getTitle("news" . $plang) ?>
                                </a></li>
                            <li><a href="<?= $core->getPageUrl("partners" . $plang) ?>" title="">-
                                    <?= getTitle("partners" . $plang) ?>
                                </a></li>
                            <li><a href="<?= $core->getPageUrl("contact" . $plang) ?>" title="">-
                                    <?= getTitle("contact" . $plang) ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>




                <div class="column col-md-4 col-sm-6 col-xs-12">
                    <div class="footer-widget material-widget">
                        <div class="footer-title">
                            <h2>
                                <?= plang('معلومات التواصل', 'Contact Details') ?>
                            </h2>
                        </div>

                        <div class="widget-content">
                            <ul class="list-style-two">
                                <li>
                                    <span class="icon fal fa-map-marker-check"></span>
                                    <p><?= plang('Address', 'العنوان', 1) ?></p>
                                    <?= getValue('footer_adress', $lang) ?>
                                </li>

                                <li>
                                    <span class="icon icon-48"></span>
                                    <p><?= plang('Phone', 'رقم الهاتف', 1) ?></p>
                                    <?= getValue('header_phone') ?>
                                </li>

                                <li>
                                    <span class="icon fal fa-envelope-open-text"></span>
                                    <p><?= plang('Mail', 'البريد', 1) ?></p>
                                    <?= getValue('email') ?>
                                </li>

                                <li>
                                    <span class="icon icon-46"></span>
                                    <p><?= plang('Hours', 'ساعات العمل', 1) ?></p>
                                    <?= getValue('open_time', $lang) ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="auto-container">
            <div class="copyright">Copyright © 2022 Erasoft All rights
                reserved.</div>
        </div>
    </div>
</footer>

<!--Scroll to top-->
<div class="scroll-to-top">
    <div>
        <div class="scroll-top-inner">
            <div class="scroll-bar-text"><i class="fal fa-long-arrow-up"></i></div>
        </div>
    </div>
</div>
<!-- Scroll to top end -->
</div>




<div class="all-ioc">
    <div class="show-icons">
        <div class="ico-img"></div>
        <div class="sonar-wave"></div>
        <div class="sonar-wave2"></div>
    </div>



    <div class="whats-icon" data-target="html">
        <a href="https://api.whatsapp.com/send?phone=<?= getValue("whatsapp") ?>"><span class="icon fab fa-whatsapp"></span>
        </a>
    </div>



    <div class="messenger-icon" data-target="html">
        <a href="<?= getValue("messenger") ?>"><span class="icon fab fa-facebook-messenger"></span>
        </a>
    </div>


    <div class="phone-icon" data-target="html">
        <a href="tel:+<?= getValue('header_phone') ?>"><span class="icon fal fa-phone"></span>
        </a>
    </div>



</div>




<!-- jequery plugins -->
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/validation.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/scrollbar.js"></script>
<script src="js/isotope.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/parallax-scroll.js"></script>

<!-- main-js -->
<script src="js/script.js"></script>
<script src="js/venobox.min.js"></script>
<script>
    jQuery(document).ready(function($) {

        $('.venobox,.image-popup-vertical-fit,[data-fancybox]').venobox({
            bgcolor: '',
            framewidth: '500px', // default: ''
            spinner: 'cube-grid', // default: ''
            frameheight: '400px', // default: ''
            overlayColor: 'rgba(6, 12, 34, 0.85)',
            closeBackground: '',
            closeColor: '#fff',
            titleattr: 'data-title',
            share: ['facebook', 'twitter', 'download'] // default: []
        });
    });
</script>
</body>

</html>