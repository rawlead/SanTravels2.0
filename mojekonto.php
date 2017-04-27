<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Moje Konto</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <!--        <!--Import Google Icon Font-->
    <!--        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
    <!--        <!--Import materialize.css-->
    <!--        <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>-->
    <!--        <!--Let browser know website is optimized for mobile-->
    <!--        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>-->
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
<div class="content">
    <div class="container_12">
        <?php
        if ($_SESSION['login']) {

            echo '<br/><br/><a style="float: right;" href="logout.php"><button class="btnRegister">WYLOGUJ SIĘ</button></a>';
        } else {
            echo '
                <form name="FormLogin" method="post" action="testreg.php" >
            <table border="0" width="300" align="center" class="demo-table" style="width: 100%">
                <tr>
                    <td>Login</td>
                    <td><input type="text" class="demoInputBox" name="login"</td>
                </tr>
                <tr>
                    <td>Hasło</td>
                    <td><input type="text" class="demoInputBox" name="password"</td>
                </tr>

                <tr>
                    <td colspan=2>
                        <input type="checkbox" name="terms"> I accept Terms and Conditions
                <input type="submit" name="submit" value="Zaloguj" class="btnRegister"></td>
                </tr>
            </table>
        </form>

        <form name="frmRegistration" method="post" action="save_user.php">
            <table border="0" width="300" align="center" class="demo-table" style="width: 100%">
                <tr>
                    <td>Twój login</td>
                    <td><input type="text" class="demoInputBox" name="login"></td>
                </tr>
                <tr>
                    <td>Imię</td>
                    <td><input type="text" class="demoInputBox" name="name"></td>
                </tr>
                <tr>
                    <td>Nazwisko</td>
                    <td><input type="text" class="demoInputBox" name="last_name"></td>
                </tr>
                <tr>
                    <td>Hasło</td>
                    <td><input type="password" class="demoInputBox" name="password" value=""></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" class="demoInputBox" name="mail"></td>
                </tr>
                <tr>
                    <td>Data urodzenia:</td>
                    <td><input name="birthday" class="demoInputBox" type="date"></td>
                </tr>
                <tr>
                    <td>Kraj</td>
                    <td><input name="country" class="demoInputBox" type="text"></td>
                </tr>
                <tr>
                    <td>Miasto</td>
                    <td><input name="city" class="demoInputBox" type="text"></td>
                </tr>
                <tr>
                    <td>Adres</td>
                    <td><input name="address" class="demoInputBox" type="text"></td>
                </tr>
                <tr>
                    <td>Kod pocztowy</td>
                    <td><input name="post_code" class="demoInputBox" type="text"></td>
                </tr>
                <tr>
                    <td colspan=2>
                        <input type="checkbox" name="terms"> I accept Terms and Conditions <input type="submit" name="submit" value="Załóż konto" class="btnRegister"></td>
                </tr>
            </table>
        </form>
                ';

        }

        ?>

    </div>
</div>
<style type="text/css">
    .error-message {
        padding: 7px 10px;
        background: #fff1f2;
        border: #ffd5da 1px solid;
        color: #d6001c;
        border-radius: 4px;
    }

    .success-message {
        padding: 7px 10px;
        background: #cae0c4;
        border: #c3d0b5 1px solid;
        color: #027506;
        border-radius: 4px;
    }

    .demo-table {

        width: 30%;
        border-spacing: initial;
        margin: 2px 0px;
        word-break: break-word;
        table-layout: auto;
        line-height: 1.8em;
        color: #333;
        border-radius: 4px;
        padding: 20px 40px;
    }

    .demo-table td {
        padding: 15px 0px;
    }

    .demoInputBox {
        padding: 10px 30px;
        border: #a9a9a9 1px solid;
        border-radius: 4px;
    }

    .btnRegister {
        padding: 10px 30px;
        background-color: #3367b2;
        border: 0;
        color: #FFF;
        cursor: pointer;
        border-radius: 4px;
        margin-left: 10px;
    }
</style>
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