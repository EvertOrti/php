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
define('DEFAULT_ACT', 'default');


require_once CLASSES_DIR.'template.php';
require_once CLASSES_DIR.'http.php';// import http class
require_once CLASSES_DIR.'linkobject.php';// import linkobject class
$http = new linkobject();

?>