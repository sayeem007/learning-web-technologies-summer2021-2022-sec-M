<?php 

    $host = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "DbWeb";

    function getConnection(){
        global $host;
        global $dbname;
        global $dbpass;
        global $dbuser;
        $conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
        return $conn;
        die("connected");
    }
?>
