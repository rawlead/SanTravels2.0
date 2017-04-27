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
$quotes_array =  json_decode($quotes_json, true);

function find($quotes_array, $id)
{
    foreach ($quotes_array['Places'] as $place) {
        if ($place['PlaceId'] == $id) {
            return $place['CityName'] . ' (' . $place['IataCode'] . ')';
        }
    }
    return "Not Found";
}
