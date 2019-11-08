<?php

$server = new SoapServer(null,
array('uri'=> 'http://ws.geovanny.me/wather') // name space
);
$server->addFunction('getWeather');

$server->handle();
} catch (SOAPFault $exception) {
echo 'An exception occurred: ' . $exception;
}

function createXML ($weather, $precipitation, $umidity) {
$domtree = new DOMDocument ('1.0','UFT-8');
$xmlRoot = $domtree->createElement("xml");
$xmlRoot = $domtree->appendChild($xmlRoot);

$currentTrack = $domtree->createElement("weatherData");
$currentTrack = $xmlRoot->appendChild($currentTrack);

