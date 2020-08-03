
<?php
#cURL is a library that lets you make http requests in PHP
#initializing cURL:
$curl=curl_init();
#set curl options:
curl_setopt($curl, CURLOPT_URL, 'http://api.geonames.org/weatherJSON?north=44.1&south=-9.9&east=-22.4&west=55.2&username=zarakhaliq');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
#run curl:
$json_result=curl_exec($curl);

#$r = json_decode($json_result, true);
#print_r($json_result);


$searchResult = [];
$searchResult['weatherObservations'] = [];

$temp = [];
$r = json_decode($json_result, true);

foreach ($r['weatherObservations'] as $entry) {

    $temp['lng'] = $entry['lng'];
    $temp['observation'] = $entry['observation'];
    $temp['ICAO']= $entry['ICAO'];
    $temp['clouds'] = $entry['clouds'];
    $temp['datetime'] = $entry['datetime'];
    $temp['temperature'] = $entry['temperature'];
    $temp['humidity'] = $entry['humidity'];
    $temp['stationName'] = $entry['stationName'];
    $temp['weatherCondition'] = $entry['weatherCondition'];
    $temp['windSpeed'] = $entry['windSpeed'];
    $temp['lat'] = $entry['lat'];

    array_push($searchResult['weatherObservations'], $temp);
}

header('Content-Type: application/json; charset=UTF-8');

//echo $searchResult;
echo json_encode($searchResult, JSON_UNESCAPED_UNICODE);








?>