<?php

/**
 * Created by PhpStorm.
 * User: evert.orti
 * Date: 18.01.2017
 * Time: 8:56
 */
function fixHtml($val) {
    return htmlentities($val);
}//fixHTML
class http
{// http begin
    // class variables
    var $server = array();// server data
    var $vars = array();// http data
    var $cookie = array();// cookie data
    // class methods
    // construct
    // object creation and initializing by init() and initConst() methods
    function __construct(){
        $this->init();
        $this->initConst();
    }// __construct
    // initialize class variables
    function init(){
        $this->server = $_SERVER; // server real data
        $this->cookie = $_COOKIE; // cookie real data
        $this->vars = array_merge($_GET, $_POST, $_FILES); // http real data
    }// init
    // initialize class constants
    function initConst(){
        $vars = array('REMOTE_ADDR', 'PHP_SELF', 'SCRIPT_NAME', 'HTTP_HOST');
        foreach($vars as $var){
            if(!defined($var) and isset($this->server[$var])){
                define($var, $this->server[$var]);
            }
        }
    }// initConst
    // set up data for http object - pairs element_name => element value
    function set($name, $val){
        $this->vars[$name] = $val;
    }// set
    // get element_value according to the element_name
    function get($name, $fix = true) {
            if(isset($this->vars[$name])) {
                if($fix) {
                    return fixHTML($this->vars[$name]);
                }
                return $this->vars[$name];
            }
        return false;
}//get
}// http end
?>