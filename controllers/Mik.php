<?php
$id = $_POST["Id"];
//print_r(array('id' =>$id));


$url = "https://soapforberedelse20171215032335.azurewebsites.net/Service1.svc?singleWsdl";
$client = new SoapClient($url, array( "trace" => 1 ));
$loadbil = $client->GetCarsById(array('id'=>$id));
//print_r($requXML = $client->__getLastResponse());
print_r($loadbil->GetCarsByIdResult);
//var_dump($loadbil);
//print_r($loadbil);