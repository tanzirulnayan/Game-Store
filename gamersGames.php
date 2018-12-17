<?php
    require 'C:\xampp\htdocs\tanz\Game Store\php\DBConnection.php';
    if(isset($_GET['error']))
    {
        echo $_GET['error'];
    }

    $username = $_COOKIE['username'];
    $password = $_COOKIE['password'];
    $gName = "";
	$gPrice = "";
	$gDesc = "";
    $gOS = "";
    $gCPU = "";
    $gGPU = "";
    $gNet = "";
    $gLogo = "";
    $gSS = "";
    
	$con = getConnection();
	$sql = "SELECT * FROM GAMES WHERE GAME_ID IN (SELECT GAME_ID FROM PURCHASE_HISTORY WHERE USERNAME = '".$username."');";
	$result = mysqli_query($con, $sql);
    
    setcookie('username', $username, time()+3600, '/');
    setcookie('password', $password, time()+3600, '/');
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Games</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body style="background:indigo">
    <table class="gamerSignUpMenuBar">
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
    <br/><br/>
    <table width = 60% border="0px solid" align="center" class="gamergames">
    <?php
        while($row = mysqli_fetch_assoc($result))
        {
            $gName = $row['GAME_NAME'];
            $gPrice = $row['GAME_PRICE'];
            $gDesc = $row['GAME_DESCRIPTION'];
            $gLogo = 'resources/'.$row['GAME_LOGO'];
    ?>

    <tr height="200px" >
        <td width="50%">
            <img src="<?php echo $gLogo; ?>" height="200px" width="200px"/>
        </td>
        <td>
            <b><?php echo $gName; ?></b><br/>
            <i><?php echo $gDesc; ?></i>
        </td>
    </tr>
    <?php
        }
    ?>
    </table>
</body>
</html>