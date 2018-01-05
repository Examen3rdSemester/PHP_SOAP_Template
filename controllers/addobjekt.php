<?php
//
$ChangeString = $_POST["ChangeString"];
$ChangeString1 = $_POST["ChangeString1"];
$ChangeDouble = $_POST["ChangeDouble"];
$ChangeInteger = $_POST["ChangeInteger"];
$wsdl = "http://wcfsoapeksamen.azurewebsites.net/Service1.svc?wsdl";

$client = new SoapClient($wsdl);

class ChangeClassName {
    function __construct($ChangeString,$ChangeString1,$ChangeDouble,$ChangeInteger)
    {
        $this->ChangeString = $ChangeString;
        $this->ChangeString1 = $ChangeString1;
        $this->ChangeInteger = $ChangeInteger;
        $this->ChangeDouble = $ChangeDouble;

    }
}
$mitobjekt = new ChangeClassName($ChangeString,$ChangeString1, $ChangeDouble, $ChangeInteger);

$params = array(
    "temp" => $mitobjekt
);
print_r($params);

$client -> __SoapCall('IndsætObjekt', array($params));
header("location:javascript://history.go(-1)");

