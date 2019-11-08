<?php

if (isset($_POST['date'])) {

$date = $_POST['date'];
define ();
try {
$client = new SoapClient (null,//null, we dontsend none WSDL
array('location' => WS_URL, //
'uri' =>'', // namespace
'trace' => 1 // nothing
)
);

$res = $client->getWeather($date);
$doc = new DOMDocument();
$doc->loadXML($res);
echo $doc->saveXML();

catch (SOAPFault $exception) { // eroare:(
echo 'An exception occurred: '.$exception->faultstring;
}
}