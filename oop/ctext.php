<?php

/**
 * Created by PhpStorm.
 * User: evert.orti
 * Date: 11.01.2017
 * Time: 15:14
 */
//allow to use text class in ctext class
require_once('text.php');
class ctext extends text
{ //ctext begin
    var $color = false;
    //methods
    function setColor($c) {
        $this->color = $c;
    } //setColor
    //show color text
    function show()
    {
        if($this->color === false){
        parent::show(); // use parent class show function
        } else {
            echo '<font color="'.$this->color.'">'.$this->str.'</font><br/>';
        }
    }
} //ctext end

?>