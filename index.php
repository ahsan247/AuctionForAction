<?php

require_once 'controller/homeController.php';
require_once 'controller/adController.php';

$controller = new homeController();

$controller->handleRequest();
$controller = new adController();

$controller->handleRequest();

?>


