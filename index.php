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
        $template= new Template();
        echo $template->render('views/home.html');
    }
);
$f3->route('GET /show/@animal', function($f3,$params){
    switch ($params['animal']){
        case 'cat';
            echo "<img src='/328/pet2/images/cat.jpg'>"; break;
        case 'dog';
            echo "<img src='/328/pet2/images/dog.png'>"; break;
        default:
          //  $f3->error(404);
            echo "no";
            }
});


//run fat free
$f3->run();
?>