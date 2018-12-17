<?php
    $DBservername = "localhost";
    $DBusername = "root";
    $DBpassword = "";
    $DBname = "gamestore";
    
    function getConnection()
    {
        $conn = mysqli_connect($GLOBALS['DBservername'] , $GLOBALS['DBusername'], $GLOBALS['DBpassword'], $GLOBALS['DBname']);
        return $conn;
    }
?>