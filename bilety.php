<?php
session_start();

//if (!empty($_GET['locale'])) {

$api_key = 'iv125947694098261287788477236656';

//    $locale = $_GET['locale'];
$locale_url = 'http://partners.api.skyscanner.net/apiservices/reference/v1.0/countries/pl-PL?apiKey=' . $api_key;
$locale_json = file_get_contents($locale_url);
$locale_array = json_decode($locale_json, TRUE);


//Retrieve the cheapest quotes from our cache prices.
//GET /browsequotes/v1.0/{country}/{currency}/{locale}/{originPlace}/{destinationPlace}/{outboundPartialDate}/{inboundPartialDate}
//$quotes_url = 'http://partners.api.skyscanner.net/apiservices/browsequotes/v1.0/PL/USD/pl-PL/PL/CN/2017-06-12?apiKey=' . $api_key;
$country = 'PL';
$currency = $_GET['currency'];
$locale = 'pl-PL';
$originPlace = $_GET['origin'];
$destinationPlace = $_GET['destination'];
$outboundPartialDate = $_GET['outboundPartialDate'];
$inboundPartialDate = '';
$passengers = $_GET['passengers'];

$quotes_url = 'http://partners.api.skyscanner.net/apiservices/browseroutes/v1.0/'
    . $country . '/' . $currency . '/' . $locale . '/' . $originPlace . '/' . $destinationPlace . '/' . $outboundPartialDate . '?apiKey=' . $api_key;
$quotes_json = file_get_contents($quotes_url);
$quotes_array = json_decode($quotes_json, true);

function find($quotes_array, $id)
{
    foreach ($quotes_array['Places'] as $place) {
        if ($place['PlaceId'] == $id) {
            return $place['CityName'] . ' (' . $place['IataCode'] . ')';
        }
    }
    return "Not Found";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bilety Lotnicze</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/script.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>

    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
                        <li class="current"><a href="bilety.php">BILETY LOTNICZE</a></li>
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
<!--==============================Content=================================-->

<!--countries-->
<div class="container">
    <br/><br/>
    <div class="row">
        <div class="col s5">
            <form action="">
                <!--                    origin-->
                <div class="row">
                    <div class="input-field col s12">
                        <select id="origin" name="origin">
                            <option value="" disabled selected>WYBIERZ KRAJ</option>
                            <?php
                            foreach ($locale_array['Countries'] as $country) {
                                $countryCode = $country['Code'];
                                $selected = function ($originPlace, $countryCode) {
                                    if ($originPlace == $countryCode)
                                        return 'selected';
                                    else
                                        return '';
                                };
                                echo '<option value=' . $country['Code'] . ' ' . $selected($originPlace, $countryCode) . '>' . $country["Name"] . '</option>';
                            }
                            ?>
                        </select>
                        <label>Z:</label>
                    </div>
                </div>
                <!--                destination-->
                <div class="row">
                    <div class="input-field col s12">
                        <select id="destination" name="destination">
                            <option value="" disabled selected>WYBIERZ KRAJ</option>
                            <?php
                            foreach ($locale_array['Countries'] as $country) {
                                $countryCode = $country['Code'];

                                $selected = function ($destinationPlace, $countryCode) {
                                    if ($destinationPlace == $countryCode)
                                        return 'selected';
                                    else
                                        return '';
                                };
                                echo '<option value=' . $country['Code'] . ' ' . $selected($destinationPlace, $countryCode) . '>' . $country["Name"] . '</option>';
                            }
                            ?>
                        </select>
                        <label>DO:</label>
                    </div>
                </div>
                <div class="row">
                    <!--     currency-->
                    <div class="col s2">
                        <p>
                            <input checked name="currency" type="radio" id="zloty" value="PLN"/>
                            <label for="zloty">zł</label>

                        <p>
                            <input name="currency" type="radio" id="dolar" value="USD"/>
                            <label for="dolar">$</label>
                        </p>
                        <p>
                            <input class="with-gap" name="currency" type="radio" id="euro" value="EUR"/>
                            <label for="euro">€</label>
                        </p>
                    </div>
                    <!--    passengers-->
                    <div class="input-field col s6 right">
                        <select id="passengers" name="passengers">
                            <option value="1" selected>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <label>Ilość osób</label>
                    </div>
                </div>
                <!--                date-->
                <div class="row">
                    <div class="col s8">
                        <label>WYBIERZ DATE</label>
                        <input type="date" name="outboundPartialDate" class="datepicker"
                               value="<?php
                               if ($outboundPartialDate != null) {
                                   echo $outboundPartialDate;
                               }
                               ?>">
                    </div>
                    <div class="col s4">
                        <br/>
                        <button class="btn waves-effect waves-green">SZUKAJ</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col s1"></div>


        <!--    search results-->
        <div class="col s6">
            <br/>
            <ul class="collection with-header">
                <!--                    <div>Alvin<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div>-->
                <?php
                if (empty($quotes_array['Quotes']) && (!is_null($quotes_array))) {
                    echo '<div>404 Nic nie znaleziono</div>';
                }
                $a = 0;
                foreach ($quotes_array["Quotes"] as $quote) {
                    if ($a == 5)
                        break;
//                        price
                    echo '<li class="collection-item"><div>Cena: ' . $quote['MinPrice'] * $passengers . ' ' . $currency . '<br/>';
//                        direct
                    $direct = $quote['Direct'] ? 'TAK' : 'NIE';
                    echo 'Bezpośredni: ' . $direct . ' <br/>';
//                        carrier name
                    $carrier_id = $quote['OutboundLeg']['CarrierIds'][0];

                    foreach ($quotes_array["Carriers"] as $carrier) {
                        if ($carrier['CarrierId'] == $carrier_id) {
                            echo 'Przewoźnik: ' . $carrier['Name'] . ' ';
                        }
                    }
                    echo '<a href="#!" class="secondary-content">WYBIERZ<i class="material-icons">send</i></a></div>';
                    $a += 1;
                }
                ?>
                </li>
            </ul>
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