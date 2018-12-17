<?php
    if(isset($_GET['error']))
    {
        echo $_GET['error'];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
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
                <a href="gamersGames.php">
                    <b style="color:white">My Games</b>
                </a>
                <b style="color:rgb(62, 4, 104)">.    .</b>
                <a href="gamerProfile.php">
                    <b style="color:white">Profile</b>
                </a>
                <b style="color:rgb(62, 4, 104)">.    .</b>
                <a href="php/gamerLogout.php">
                    <b style="color:white">Log Out</b>
                </a>
            </td>
        </tr>
    </table>
    <br/>
    <br/>
    <table width="100%" border="0px solid" align="center" class="gamerHomeTable">
        <tr>
            <td align="center" colspan="3">
                <img src="resources/ad3.jpg"  height="320" width="1280"/>
            </td>
        </tr>
        <tr height="200px">
            <td colspan="3" align="center">
                <b>Featured Games</b>
            </td>
        </tr>
        </tr>
        <tr height="200px">
            <td>
                <img src="resources/cod.png" height="200px" width="200px"/>
            </td>
            <td>
                <b>Call of Duty: Black Ops |||</b>
            </td>
            <td>
                <a href="cod.php">
                    <b style="color:white">View Details</b>
                </a>
            </td>
        </tr>
        <tr height="200px">
            <td>
                <img src="resources/pubg.png" height="100px" width="200px"/>
            </td>
            <td>
                <b>Player Unknowns Battlegrounds [PUBG]</b>
            </td>
            <td>
                <a href="pubg.php">
                    <b style="color:white">View Details</b>
                </a>
            </td>
        </tr>
        <tr height="200px">
            <td>
                <img src="resources/coc.png" height="100px" width="200px"/>
            </td>
            <td>
                <b>Clash of Clans</b>
            </td>
            <td>
                <a href="coc.php">
                    <b style="color:white">View Details</b>
                </a>
            </td>
        </tr>
        <tr height="200px">
            <td align="center" colspan="3">
                <a href="gamerReportAbuse.php">
                    <b style="color:white">Report Abuse</b>
                </a>
            </td>
        </tr>
    </table>
</body>
</html>