<?php
/**
 * Created by PhpStorm.
 * User: Navtej
 * Date: 1/18/2018
 * Time: 4:05 PM
 */

//require the autolaod file
require_once ('vendor/autoload.php');

//create an instance of the base class
$f3 = Base::instance();

//Set debug level
$f3->set('DEBUG',3);

//define a default route
$f3->route('GET /',
    function() {
        $view = new View;
        echo $view->rendor
        ('views/home.html');
    }
);



//run fat free
$f3->run();
?>