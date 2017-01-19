<?php
/**
 * Created by PhpStorm.
 * User: evert.orti
 * Date: 18.01.2017
 * Time: 10:34
 */
// menu.php - create page menu
// create menu template objects
//for menu and menu items
$menu= new template('menu.menu'); //file menu driectory file menu.html menu/menu.html
$item = new template('menu.item');
// add pairs of temlate element names and real values
$item->set('name','Esimene leht');
$link = $http->getLink(array('act'=>'first'));
$item->set('link', $link);
//echo '<pre>';
//print_r($item);
//echo '</pre>';
//echo $item->parse();

//add menu
$menu->set('items',$item->parse());
//2nd page
$item->set('name','Teine leht');
$link = $http->getLink(array('act'=>'second'));
$item->set('link', $link);

$menu->add('items', $item->parse()); //add another  item














?>