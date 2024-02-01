<?php
include './src/config/config.php';
require_once(CLASSES . '/Router.php');
require_once(CLASSES . '/Controller.php');
require_once(CLASSES . '/Kernel.php');

$kernel = new Kernel;
$kernel->bootstrap();
