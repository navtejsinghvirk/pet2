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
//start session
session_start();


//define a default route
$f3->route('GET /',
    function() {
        $template= new Template();
        echo $template->render('views/home.html');
    });

$f3->route('GET /show/@animal', function($f3,$params){
    switch ($params['animal']){
        case 'cat';
            echo "<img src='/328/pet2/images/cat.jpg'>"; break;
        case 'dog';
            echo "<img src='/328/pet2/images/dog.png'>"; break;
        default:
          //  $f3->error(404);
            echo "no";
            }});

$f3-> route('GET /order',function($f3,$params){

          $f3-> set('animal',$params['animal']);
           $_SESSION['animal'] = $f3-> get('animal');
           $template = new Template();
           echo $template->render('views/form1.html');

});

$f3-> route('POST /order2',function($f3,$params){
    $f3-> set('color',$params['color']);
    $_SESSION['color'] = $f3-> get('color');
    $template = new Template();
   echo $template->render('/views/form2.html');

});

$f3-> route('POST /result',function($f3,$params){
    $_SESSION['animal'] = $f3-> get('animal');;
    $_SESSION['color'] = $f3-> get('color');;
    $template = new Template();
    echo $template->render('/views/result.html');
});
//run fat free
$f3->run();
?>