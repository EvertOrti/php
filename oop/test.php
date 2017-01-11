<?php
/**
 * Created by PhpStorm.
 * User: evert.orti
 * Date: 11.01.2017
 * Time: 14:47
 */
// require the object creating and using class
require_once('text.php');
// create an object
$sentence = new text();
//control object output
echo '<pre>';
print_r($sentence);
echo '</pre>';
// set text
$sentence->setText('Hello text object!');
//control object output
echo '<pre>';
print_r($sentence);
echo '</pre>';
//show object output
$sentence->show();
echo '<hr/>';
//create and object
$sentence2 = new text('Hello text by construct!');
//control object output
echo '<pre>';
print_r($sentence);
echo '</pre>';
//show object output
$sentence->show();
?>