<?php

/**
 * Created by PhpStorm.
 * User: evert.orti
 * Date: 11.01.2017
 * Time: 14:23
 */
class text
{ //text class begin
    // class variables = instance variables
    var $str = '';
    
    // methods
    // set text function
    function setText($s) {
        $this->str = $s;
    }
    function show() {
        echo $this->str.'<br/>';  
    }
}// text class end
?>