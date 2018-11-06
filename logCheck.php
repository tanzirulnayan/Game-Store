<?php
    $uType = "";
    $uType = $_POST['uType'];
    if($uType == "Gamer")
    {
        header('location: gamerHome.html');
    }
    else if($uType == "Moderator")
    {
        header('location: moderatorHome.html');
    }
    else if($uType == "Game Dev Company")
    {
        header('location: devHome.html');
    }
    else
    {
        header('location: index.html');
        echo "Invalid Selection";
    }
?>