<?php
    if(isset($_POST['submit']))
    {
        header('location: gamerUpdateProfile.html');
    }
    else
    {
        echo "Error!";
    }
?>