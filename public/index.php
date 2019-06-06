<?php

ini_set('max_execution_time',0);

require_once  dirname(__DIR__).'/vendor/autoload.php';

use App\kernel;

//funcion propia de PHP
session_start();

$kernel = new kernel(); 

$kernel->init();