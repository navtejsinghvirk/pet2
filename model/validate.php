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
//$f3->set(DEBUG, 3);


$errors = array();

function validColor($color)
{
    global $f3;
    return (in_array($color, $f3->get('colors')));
}

if (!validColor($color)) {
    $errors['color'] = "Please enter a valid color";
}

function validString($type)
{
    return (!empty($type) && ctype_alpha($type));
}

if (!validString($name)) {
    $errors['name'] = "Please enter a valid pet.";
}
$success = sizeof($errors) == 0;

if (empty($errors)) {
    $success = true;
} else {
    $success = false;
}
print_r($errors);
print_r($success);

foreach ($_POST as $key => $value) {
    echo "<tr>";
    echo "<td>";
    echo $key;
    echo "</td>";
    echo "<td>";
    echo $value;
    echo "</td>";
    echo "</tr>";
}