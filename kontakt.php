<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kontakt</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico"/>
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/script.js"></script>
    <script src="js/TMForm.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script>
        $(document).ready(function () {
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
<body>
<!--==============================header=================================-->
<header>
    <div class="container_12">
        <div class="grid_12">
            <div class="menu_block">
                <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                    <ul class="sf-menu">
                        <li><a href="index.php"><img src="images/logo.png" height="18"/>San Travels</a></li>
                        <li><a href="kierunki.php">NASZE KIERUNKI</a></li>
                        <li><a href="bilety.php">BILETY LOTNICZE</a></li>
                        <li class="current"><a href="kontakt.php">KONTAKT</a></li>
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
<!--==============================Content=================================-->
<div class="content">
    <div class="container_12">
        <div class="grid_5">
            <h4>Telefoniczne Centrum Rezerwacji</h4>
            <address>
                <dl>

                    <dd><span>poniedziałek - piątek</span> 08:00 - 22:00</dd>
                    <dd><span>sobota - niedziela</span> 09:00 - 20:00</dd>
                    <dd><span>numer telefonu: </span> 555 555 555</dd>
                    <dd>E-mail: <a href="#" class="col1">sansupport@społeczna.pl</a></dd>
                </dl>
            </address>
            <h4>Znajdź biuro SAN Travels</h4>
            <p>Nasze doradcy czekają na Ciebie w biurach w Warszawie
            Centrala SAN<br/>
            SAN Poland Sp. z.o.o.<br/>
            ul.Łucka 11, Warszawa, Polska, 00-111
            </p>
        </div>
        <div class="grid_6 prefix_1">
            <h4>Dział Obsługi Klienta</h4>
            <p>

                    poniedziałek - piątek 08:00 - 21:00<br/>
                sobota - niedziela 10:00 - 18:00<br/>
                numer telefonu: 777-777-777</p>

            <address>
                <dl>
                    <dt>
                        Łucka 11, Warszawa 00-231
                    </dt>
                    <dd><span>poniedziałek - piątek</span> 08:00 - 21:00</dd>
                    <dd><span>sobota - niedziela</span> 09:00 - 18:00</dd>
                    <dd><span>numer telefonu: </span> 555-355-553</dd>
                    <dd>E-mail: <a href="#" class="col1">san@społeczna.pl</a></dd>
                </dl>
            </address>
            <div class="map">

                <div class="clear"></div>
                <figure class="">
                    <iframe class="actAsDiv" style="width:100%;height:300px;" frameborder="0" scrolling="no"
                            marginheight="0" marginwidth="0"
                            src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;q=%C5%81ucka%2011%2C%20Warszawa%2C%20Polska&amp;aq=0&amp;ie=UTF8&amp;t=m&amp;z=12&amp;iwloc=A&amp;output=embed"></iframe>
                </figure>

            </div>
        </div>
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