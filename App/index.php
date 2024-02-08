<?php
define('_ROOTPATH_', __DIR__); //met le chemin à la racine

spl_autoload_register();

use src\Controllers\Controller;

$controller = new Controller();
$controller->route();