<?php
$wsdl = "http://wcfsoapeksamen.azurewebsites.net/Service1.svc?wsdl";
$client = new SoapClient($wsdl);
$loadlist = $client->VisListen();
$alleobjekter = $loadlist->VisListenResult->ChangeClassName;
//print_r($alleobjekter);
//var_dump($arr);
//print_r($arr);
//foreach ($alleobjekter->VisListenResult->ChangeClassName as $obj){
//    echo $obj->ChangeString;
//    echo $obj->ChangeString1;
//    echo $obj->ChangeDouble;
//    echo $obj->ChangeInteger;
//}


require_once '../vendor/autoload.php';

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../views');
$twig = new Twig_Environment($loader,array('auto_reload'=> true));

$template = $twig->loadTemplate('alleobjekter.html.twig');


$parametersToTwig = array("alleobjekter"=>$alleobjekter);
echo $template->render($parametersToTwig);