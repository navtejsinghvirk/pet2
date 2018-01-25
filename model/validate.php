<?php
/**
 * Created by PhpStorm.
 * User: jpapp
 * Date: 1/25/2018
 * Time: 3:05 PM
 */

//error reporting
error_reporting(E_ALL);
ini_set("display_errors", 1);

//f3 error debugging
$f3->set(DEBUG, 3);

function validColor($color)
{
    global $f3;
    global $errors;
    if (in_array($color, $f3->get('colors'))) {
        return true;
    } else {
        return false;
    }
    if(!validColor($color)){
        $errors['color'] = "Please enter a valid color.";
    }

}

function validString($word)
{
    if (!empty($word) && ctype_alpha($word)) {
        return true;
    }

    if(!validString($word)){
        $errors['word'] = "Please enter a valid pet.";
    }
}

$errors = [];

if(empty($errors)){
    $success = true;
}else{
    $success = false;
}