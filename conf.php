<?php
/**
 * Created by PhpStorm.
 * User: evert.orti
 * Date: 19.01.2017
 * Time: 12:19
 */
// create and template object
// framework configuration
define('CLASSES_DIR', 'classes/');
define('TMPL_DIR', 'tmpl/');
define('STYLE_DIR', 'css/');
define('ACTS_DIR', 'acts/');
define('LIB_DIR', 'lib/');
define('DEFAULT_ACT', 'default');

//user Roles
define('ROLE_NONE', 0);
define('ROLE_ADMIN', 1);
define('ROLE_USER', 2);

// import database useful functions
require_once LIB_DIR.'utils.php';

require_once CLASSES_DIR.'template.php';
require_once CLASSES_DIR.'http.php';// import http class
require_once CLASSES_DIR.'linkobject.php';// import linkobject class
require_once CLASSES_DIR.'mysql.php';//import database class
require_once CLASSES_DIR.'session.php';

require_once 'db_conf.php';
//create output http 
$http = new linkobject();

//create database object
$db = new mysql(DBHOST, DBUSER, DBPASS , DBNAME);
$db->connect();
// create session object
$sess = new session($http, $db);

?>