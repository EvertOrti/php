<?php
/**
 * Created by PhpStorm.
 * User: evert.orti
 * Date: 18.01.2017
 * Time: 15:13
 */
$page_id = $http->get('page_id'); //get page_id from url

//get page content from database according to page_id
$sql = 'SELECT * FROM content WHERE content_id="'.$page_id.'"';
//query to databvase
$res = $db->getArray($sql);
//if query is with result
/*if($res !== FALSE)*/ {
    //control result test output
   $page = $res[0];
    $http->set('page_id', $page['content_id']);
    $tmpl->set('content', $page['content']);
}

?>