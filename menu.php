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
echo '<pre>';
print_r($menu);
print_r($item);
echo '</pre>';















?>