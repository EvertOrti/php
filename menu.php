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
// main menu content query
$sql = 'SELECT content_id, title FROM content WHERE'.
    'parent_id="0" AND show_in_menu="1"';
// get menu data from database
$sql = $sql.' ORDER BY sort ASC';
$res = $db->getArray($sql);
// create menu items from query result
if ($res != false) {
    foreach ($res as $page){
        //add content to menu item
        $item->set('name', $page['title']);
        $link = $http->getLink(array['page_id'=>$page['content_id']]);
        $item->set('link',$link);
        //add item to menu
        $menu->add('items', $item->parse());
    }
}
$tmpl->set('menu', $menu->parse());
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