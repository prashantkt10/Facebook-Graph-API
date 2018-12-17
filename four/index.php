<?php

$query=$_GET['query'];
$limit=$_GET['lmt'];
$address=$_GET['add'];
$maps_data=file_get_contents
('https://maps.googleapis.com/maps/api/geocode/json?address='.$address.'&sensor=true_or_false&key=AIzaSyCARtOntM70zb5ZFzjlnbhBhAIKnsrASgs');

$decoded_maps_data=json_decode($maps_data);
echo "<pre>";
// var_dump($decoded_maps_data);
$lat=$decoded_maps_data->results[0]->geometry->location->lat;
echo "<br>";
$lng=$decoded_maps_data->results[0]->geometry->location->lng;
// var_dump($decoded_maps_data["results"]);
// echo $decoded_maps_data['']["formatted_address"];
// var_dump($decoded_maps_data['results']['formatted_address']);


$cmd=<<<req
curl -X GET -G \
  'https://api.foursquare.com/v2/venues/explore' \
    -d client_id="UHGQGMLHNSMBJWEXOSL1H5DCC42HVCZZ4WDXJWJXCDAVUSLI" \
    -d client_secret="A3ST4CNC1SSGBWBJN4RARPQL5EBELD1WUZFPUQAWOZPCNLSA" \
    -d v="20170801" \
    -d ll="$lat,$lng" \
    -d query="$query" \
    -d limit=$limit
req;

echo "<pre>";
$result= `$cmd`;
var_dump(json_decode($result, true));