<?php
/**
 * Created by PhpStorm.
 * User: evert.orti
 * Date: 18.01.2017
 * Time: 8:48
 */
// only for testing
// import http class
// useful function for this class
function fixUrl($val){
    return urlencode($val);
}// fixUrl
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
    //merge is realised by &$ink
    function addToLink(&$link, $name, $val) {
        if ($link != '') {
            $link .= $this->delim;
        } //create pair: element_name=Element_value
        $link = fixUrl($name).$this->eq.fixUrl($val);
        echo $link;
        function getLink($add = array()) {
            $link ='';
            foreach ($add as $name => $val) {
                $this->addToLink($link, $name, $val);
            }

        }
    }
}//class end
