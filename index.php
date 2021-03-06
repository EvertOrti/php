<?php
// index.php
/**
 * Created by PhpStorm.
 * User: anna.karutina
 * Date: 12.01.2017
 * Time: 12:58
 */
// import conf. file
require_once 'conf.php';

// and use it
// create an template object,
// set up the file name for template
// load template file content
$tmpl = new template('main');
// add pairs of temlate element names and real values
$tmpl->set('style', STYLE_DIR.'main'.'.css');
$tmpl->set('header', 'minu lehe pealkiri');


// create and output menu
// import menu file
require_once 'menu.php'; // in this file is menu creation
$tmpl->set('menu', $menu->parse());
$tmpl->set('nav_bar', 'minu navigatsioon');
$tmpl->set('lang_bar', 'minu keeleriba');
//$tmpl->set('content', 'minu sisu');
$tmpl->set('content', $http->get('content'));
// output template content set up with real values
echo $tmpl->parse();


require_once 'act.php';


$sql = 'SELECT NOW();';
$res = $db->getArray($sql);
//control query
//create connection in database server

echo '<pre>';
print_r($res);
echo '</pre>';

//query time control
echo '<pre>';
print_r($db->history);
echo '</pre>';

$db->showHistory();

//control session output
echo '<pre>';
print_r($sess);
echo '</pre>';

$sess->clearSessions();
?>