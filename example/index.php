<?php
// includes ClassLoader implementation from the framework
require_once '../vendor/autoload.php';


// enabled to stop at any error
//linxphp\common\ErrorHandler::register();

use Pixelatom\Router;

// optional and required section arguments detection
Router::register('GET', '/users/?/*', function($action,$id=''){
    echo $action;
});

// optional path argument detection
Router::register('GET', '/posts/*+', function($path=''){
    echo $path;
});

// required path argument detection
Router::register('GET', '/pages/?+', function($path){
    echo $path;
});


Router::route();