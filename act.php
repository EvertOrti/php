<?php
/**
 * Created by PhpStorm.
 * User: evert.orti
 * Date: 18.01.2017
 * Time: 14:27
 */
// get act element value from url
$act= $http->get('act');
// define act file path according to the act element value
$fn = ACTS_DIR.str_replace('.','/', $act).'php';
//control act file
if(file_exists($fn) and is_file($fn) and is_readable($fn)) {
    require_once $fn;
} else {
      //use default act
    //define default act
    $fn = ACTS_DIR.DEFAULT'.php';
    //define new value for act element in url
    $http->set('act', )
}


?>