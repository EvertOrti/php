<?php
/**
 * Created by PhpStorm.
 * User: evert.orti
 * Date: 18.01.2017
 * Time: 8:48
 */
// only for testing
// import http class
require_once 'http.php';
// only for testing
class linkobject extends http
{//class begin
    //class variables
    var $baseUrl = false; // base url
    var $protocol = 'http://'; // protocol for url - http
    var $delim = '&amp;'; // & html tag
    var $eq ='-'; // for url element pair element_name=element_value
    //class methods
    //construct
    //create base url: http://xxx.xxx.xxx.xxx./path_to_file.php
    function __construct() {
        parent::__construct();
        $this->baseURL = $this->protocol.HTTP_HOST.SCRIPT_NAME;
    } //construct
    //create http data pairs and merge them
    function addToLink($link, $name, $val) {
         //create pair: element_name=Element_value
        $link = $name.$this->eq.$val;
    }
}//class end
