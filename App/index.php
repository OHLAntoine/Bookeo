<?php
spl_autoload_register();

use src\Controllers\Controller;

$controller = new Controller();
$controller->route();

require_once './templates/header.php';
require_once './templates/home.php';
require_once './templates/footer.php';