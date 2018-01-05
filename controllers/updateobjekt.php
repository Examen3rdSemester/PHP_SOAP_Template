<?php
$id = $_REQUEST["Id"];
$ChangeString = $_REQUEST["ChangeString"];
$ChangeString1 = $_REQUEST["ChangeString1"];
$ChangeDouble = $_REQUEST["ChangeDouble"];
$ChangeInteger = $_REQUEST["ChangeInteger"];
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

$paramsy = array(
    'id' => array($id),
    'temp' => array($mitobjekt)
);
$params = array(
    'id' => $id
);
print_r($params);
print_r($paramsy);

$client ->RedigerObjekt(array($paramsy));
