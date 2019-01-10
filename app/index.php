<?php
//definir as constantes
define('DIR', dirname(__DIR__) . DIRECTORY_SEPARATOR); //usado quando é necessário chamar uma pasta/arquivo do servidor
define('URL', '//' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['SCRIPT_NAME'])); //usado quando é necessário chamar uma URL

//composer autoload
require DIR . 'vendor/autoload.php';

use Henri\core\Application;

$app = new Application();
