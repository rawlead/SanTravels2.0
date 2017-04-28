<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Moje Konto</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/script.js"></script>
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
                        <li><a href="kontakt.php">KONTAKT</a></li>
                        <li class="current"><a href="mojekonto.php">
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
<div class="container">
    <div class="row">
        <div class="col s12 m6">
<?php
             if ($_SESSION['login']) {

             echo '<br/><br/><a href="logout.php">
                <button class="btn right">WYLOGUJ SIĘ</button>
            </a>';
             } else {
             echo '
            <form name="FormLogin" method="post" action="testreg.php">
                <div class="input-field">
                    <input id="username" type="text" class="demoInputBox" name="login"/>
                    <label for="username">Login</label>
                </div>
                <div class="input-field">
                    <input id="password" type="password" class="demoInputBox" name="password"/>
                    <label for="password">Hasło</label>
                </div>
                <p>
                    <input id="terms_login" type="checkbox" name="terms"/>
                    <label for="terms_login">I accept Terms and Conditions</label>
                </p>
                <input type="submit" name="submit" value="Zaloguj" class="btn"/>
            </form>
        </div>
        <div class="col s12 m6 right">
            <form name="formRegistration" method="post" action="save_user.php">
                <div class="input-field">
                    <input id="username_register" type="text" class="demoInputBox" name="login">
                    <label for="username_register">Nowy Login</label>
                </div>
                <div class="input-field">
                    <input id="first_name_register" type="text" class="demoInputBox" name="name">
                    <label for="first_name_register">Imię<label/>
                </div>
                <div class="input-field">
                    <input id="last_name_register" type="text" class="demoInputBox" name="last_name">
                    <label for="last_name_register">Nazwisko</label>
                </div>
                <div class="input-field">
                    <input id="password_register" type="password" class="demoInputBox" name="password" value="">
                    <label for="password_register">Hasło</label>
                </div>
                <div class="input-field">
                    <input id="email_register" type="text" class="demoInputBox" name="mail">
                    <label for="email_register">Email<label/>
                </div>
                <p>
                    <label for="birthday_register">Data urodzenia:</label>
                    <input id="birthday_register" name="birthday" class="datepicker" type="date">
                <p>
                <div class="input-field">
                    <input id="country_register" name="country" class="demoInputBox" type="text">
                    <label for="country_register">Kraj</label>
                </div>
                <div class="input-field">
                    <input id="city_register" name="city" class="demoInputBox" type="text">
                    <label for="city_register">Miasto</label>
                </div>
                <div class="input-field">
                    <input id="address_register" name="address" class="demoInputBox" type="text">
                    <label for="address_register">Adres</label>
                </div>
                <div class="input-field">
                    <input id="postcode_register" name="post_code" class="demoInputBox" type="text">
                    <label for="postcode_register">Kod pocztowy</label>
                </div>
                <p>
                <input id="terms_register" type="checkbox" name="terms">
                    <label for="terms_register">Accept Terms and Conditions</label>


                </p>
                <input type="submit" name="submit" value="Załóż konto"
                       class="btn">
            </form>
        </div>
         ';

         }

?>

    </div>
</div>
<!---->
<!---->
<!--<style type="text/css">-->
<!--    .error-message {-->
<!--        padding: 7px 10px;-->
<!--        background: #fff1f2;-->
<!--        border: #ffd5da 1px solid;-->
<!--        color: #d6001c;-->
<!--        border-radius: 4px;-->
<!--    }-->
<!---->
<!--    .success-message {-->
<!--        padding: 7px 10px;-->
<!--        background: #cae0c4;-->
<!--        border: #c3d0b5 1px solid;-->
<!--        color: #027506;-->
<!--        border-radius: 4px;-->
<!--    }-->
<!---->
<!--    .demo-table {-->
<!---->
<!--        width: 30%;-->
<!--        border-spacing: initial;-->
<!--        margin: 2px 0px;-->
<!--        word-break: break-word;-->
<!--        table-layout: auto;-->
<!--        line-height: 1.8em;-->
<!--        color: #333;-->
<!--        border-radius: 4px;-->
<!--        padding: 20px 40px;-->
<!--    }-->
<!---->
<!--    .demo-table td {-->
<!--        padding: 15px 0px;-->
<!--    }-->
<!---->
<!--    .demoInputBox {-->
<!--        padding: 10px 30px;-->
<!--        border: #a9a9a9 1px solid;-->
<!--        border-radius: 4px;-->
<!--    }-->
<!---->
<!--    .btnRegister {-->
<!--        padding: 10px 30px;-->
<!--        background-color: #3367b2;-->
<!--        border: 0;-->
<!--        color: #FFF;-->
<!--        cursor: pointer;-->
<!--        border-radius: 4px;-->
<!--        margin-left: 10px;-->
<!--    }-->
<!--</style>-->
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
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>

<script>
    $(document).ready(function () {
        $('select').material_select();
    });
</script>
</body>
</html>