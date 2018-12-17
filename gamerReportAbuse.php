<?php
    if(isset($_GET['error']))
    {
        echo $_GET['error'];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Report Abuse</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body style="background:indigo" align="center">
    <table width=100% border="0px solid" class="gamerSignUpMenuBar">
        <tr>
            <td width="25%">
                <img src="resources/gameStoreLogo.png" height="58px" width="234px"/>
            </td>
            <td width="25%"></td>
            <td width="25%"></td>
            <td width="25%" align="right">
                <a href="gamerHome.php">
                    <b style="color:white">Home</b>
                </a>
                <b style="color:rgb(62, 4, 104)">.    .</b>
                <a href="gamersGames.php">
                    <b style="color:white">My Games</b>
                </a>
                <b style="color:rgb(62, 4, 104)">.    .</b>
                <a href="gamerProfile.php">
                    <b style="color:white">Profile</b>
                </a>
                <b style="color:rgb(62, 4, 104)">.    .</b>
                <a href="gamerLogout.php">
                    <b style="color:white">Log Out</b>
                </a>
            </td>
        </tr>
    </table>
    <br/>
    <br/>
    <table width="100%" border="0px solid" align="center" class="reportabuseform">
        <tr>
            <td align="center" colspan="3">
                <form method="post" action="php/gamerAbuseReport.php">
                    <input name="arText" type="text" size="50" placeholder="type report here"/>
                    <br/>
                    <input type="submit" value="Send" name="report"/>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>