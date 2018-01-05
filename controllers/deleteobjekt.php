<?php
$id = $_GET["id"];


$wsdl = "http://wcfsoapeksamen.azurewebsites.net/Service1.svc?wsdl";

$client = new SoapClient($wsdl);
$client->SletObjekt(array('id'=> $id));

header("Location: http://localhost:8000/PHP_template_SOAP/controllers/alleobjekter.php");