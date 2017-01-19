<?php

/**
 * Created by PhpStorm.
 * User: evert.orti
 * Date: 19.01.2017
 * Time: 12:32
 */
class mysql
{ //class begin
    //class variables
        var $conn = false; //connection to database server
        var $host = false; //database server name /ip
        var $user = false; //database server user
        var $pass = false; //database server user password
        var $dbname = false; //database server user database
        // class methods
        //construct
        function__construct($h, $u,$p,$dn) {
            $this->host = $h;
            $this->user = $u;
            $this->pass = $p;
            $this->dbname = $dn;
}//construct
        //connect to database server and use database
        function connect (){
            $this->conn = mysqli_connect($this->host, $this->user,$this->pass,$this->dbname);
            if($this->conn) {
                echo 'Probleem andmebaasi ühendamisega<br>';
                exit;
            }
        }//connect

}//class end
?>