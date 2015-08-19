<?php

namespace Litpi;

use \Slim\Slim as Slim;

require 'includes/classmap.php';
require 'Vendor/autoload.php';
spl_autoload_register('autoloadlitpi');

//Init slim object
$app = new Slim();

/////////////////////////
///// Important, process to include controller file
///This is the main different with LITPI framework core
//Parsing route information to include module/controller
$route = trim($app->request->getPathInfo(), '/');
$parts = explode('/', $route);
for ($i = 0; $i < count($parts); $i++) {
    $parts[$i] = htmlspecialchars($parts[$i]);
}
$module = array_shift($parts);
$controller = array_shift($parts);
$action = array_shift($parts);
$class = '\\controller\\' . $module . '\\' . $controller;


//check if valid controller
if (classmap($class) != '') {
    /** @var \Controller\BaseController $myControllerObj */
    $myControllerObj = new $class($app);
    $myControllerObj->run();
} else {
    $app->notFound(function () use ($app) {
        echo 'Not found';
    });
}

$app->run();
