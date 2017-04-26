<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>HOME</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="stylesheet" href="booking/css/booking.css">
    <link rel="stylesheet" href="css/camera.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/script.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/camera.js"></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
    <script src="js/jquery.mobile.customized.min.js"></script>
    <!--<![endif]-->
    <script src="booking/js/booking.js"></script>
    <script>
        $(document).ready(function () {
            jQuery('#camera_wrap').camera({
                loader: false,
                pagination: false,
                minHeight: '444',
                thumbnails: false,
                height: '48.375%',
                caption: true,
                navigation: true,
                fx: 'mosaic'
            });
            /*carousel*/
            var owl = $("#owl");
            owl.owlCarousel({
                items: 2, //10 items above 1000px browser width
                itemsDesktop: [995, 2], //5 items between 1000px and 901px
                itemsDesktopSmall: [767, 2], // betweem 900px and 601px
                itemsTablet: [700, 2], //2 items between 600 and 0
                itemsMobile: [479, 1], // itemsMobile disabled - inherit from itemsTablet option
                navigation: true,
                pagination: false
            });
            $().UItoTop({easingType: 'easeOutQuart'});
        });
    </script>
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"
                 height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <link rel="stylesheet" media="screen" href="css/ie.css">
    <![endif]-->
</head>
<body class="page1" id="top">
<!--==============================header=================================-->
<header>
    <div class="container_12">
        <div class="grid_12">
            <div class="menu_block">
                <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                    <ul class="sf-menu">
                        <li class="current"><a href="index.php"><img src="images/logo.png" height="18"/>San Travels</a></li>
                        <li><a href="kierunki.php">NASZE KIERUNKI</a></li>
                        <li><a href="bilety.php">BILETY LOTNICZE</a></li>
                        <li><a href="kontakt.php">KONTAKT</a></li>
                        <li><a href="mojekonto.php">
                                <?php if ($_SESSION['login']) {
                                    echo 'User: ' . $_SESSION['login'];
                                } else {
                                    echo 'MOJE KONTO';
                                } ?></a></li>
                    </ul>
                </nav>
                <div class="clear"></div>
            </div>
        </div>

    </div>
</header>
<div class="slider_wrapper">
    <div id="camera_wrap" class="">
        <div data-src="images/slide.jpg">
            <div class="caption fadeIn">
                <h2>TURCJA</h2>
                <div class="price">
                    OD
                    <span style="color: orange;">89ZŁ</span>
                </div>
            </div>
        </div>
        <div data-src="images/slide1.jpg">
            <div class="caption fadeIn">
                <h2></h2>
                <div class="price">
                </div>
                <a href="bilety.php">REZERWUJ</a>
            </div>
        </div>
        <div data-src="images/slide2.jpg">
            <div class="caption fadeIn">
            </div>
        </div>
    </div>
</div>
<!--==============================Content=================================-->
<div class="content">
    <div class="ic">More Website Templates @ TemplateMonster.com - February 10, 2014!</div>
    <div class="container_12">
        <div class="grid_4">
            <div class="banner">
                <img src="images/ban_img1.jpg" alt="">
                <div class="label">
                    <div class="title">Barcelona</div>
                    <div class="price">OD<span>99zł</span></div>
                    <a href="bilety.php">WIĘCEJ</a>
                </div>
            </div>
        </div>
        <div class="grid_4">
            <div class="banner">
                <img src="images/ban_img2.jpg" alt="">
                <div class="label">
                    <div class="title">GOA</div>
                    <div class="price">FROM<span>1999zł</span></div>
                    <a href="bilety.php">WIĘCEJ</a>
                </div>
            </div>
        </div>
        <div class="grid_4">
            <div class="banner">
                <img src="images/ban_img3.jpg" alt="">
                <div class="label">
                    <div class="title">PARYŻ</div>
                    <div class="price">OD<span>79zł</span></div>
                    <a href="#">WIĘCEJ</a>
                </div>
            </div>
        </div>
        <div class="clear"></div>

        <div class="grid_6 prefix_1">
            <img src="images/page1_img1.png" alt="" class="img_inner fleft">
            <div class="clear cl1"></div>
            <p><b>TURCJA</b> oblewana jest wodami trzech mórz: Czarnego, Egejskiego i Śródziemnego.
                Jest gorącym krajem, gdzie sezon turystyczny zaczyna się w kwietniu i kończy w
                listopadzie. Zróżnicowana krajobrazowo Turcja jest rozległą, pasjonującą krainą położoną na styku dwóch
                kontynentów: Azji i Europy. Pofałdowana skalistymi Górami Taurus i pokryta zielonymi lasami raz za
                sprawą białych,
                piaszczystych plaż łagodnie łączy się z morzem, a raz gwałtownie do niego wpada.</p>
        </div>
        <div class="grid_4 prefix_1">
            <img src="images/turcja.jpg"/>
        </div>

        <div class="grid_3 prefix_1">
            <img src="images/egypt.jpg"/>
        </div>

        <div class="grid_7 prefix_1">
            <div class="clear cl1"></div>
            <p><b>EGIPT</b> - miejsce, gdzie pustynia łączy się z morzem - położony jest w północno-wschodniej
                Afryce oraz częściowo na Półwyspie Synaj. Od północy oblewany jest wodami Morza Śródziemnego,
                a od wschodu Morza Czerwonego. Kolebkę jednej z najstarszych cywilizacji świata można podziwiać
                udając się na wakacje do najpopularniejszych miejscowości turystycznych Egiptu, takich jak
                Hurghada i Sharm El Sheikh.
                Egipt jest miejscem, gdzie temperatura wody nigdy nie spada poniżej 20°C, a
                temperatura powietrza wynosi średnio 30°C, dlatego korzystając z szerokiego wachlarza
                ofert last minute na wycieczki, do Egiptu można wybrać się o każdej porze roku!</p>
        </div>
    </div>
</div>
<!--==============================footer=================================-->
<footer>
    <div class="container_12">
        <div class="grid_12">
            <div class="socials">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-google-plus"></a>
            </div>
            <div class="copy">
                San Travels 2017 | Designed by Ivan Shyrai, Bohdan Zubar, Piotr Piechota
            </div>
        </div>
    </div>
</footer>
</body>
</html>

