<?php
$id = $_GET["id"];

$wsdl = "http://wcfsoapeksamen.azurewebsites.net/Service1.svc?wsdl";
$client = new SoapClient($wsdl);

$objekt = $client->VisObjekt(array('id'=>$id));

require_once '../vendor/autoload.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('../views');
$twig = new Twig_Environment($loader, array(
    // 'cache' => '/path/to/compilation_cache',
    'auto_reload' => true
));
$template = $twig->loadTemplate('updateobjekt.html.twig');
$parametersToTwig = array("objekt" => $objekt);
echo $template->render($parametersToTwig);