<?php
    require 'C:\xampp\htdocs\tanz\Game Store\php\DBConnection.php';
    if(isset($_GET['error']))
    {
        echo $_GET['error'];
    }

    $username = $_COOKIE['username'];
    $password = $_COOKIE['password'];
    $name = "";
	$price = "";
	$desc = "";
    $os = "";
    $cpu = "";
    $ram = "";
    $hdd = "";
    $gpu = "";
    $net = "";
    
	$con = getConnection();
	$sql = "select * from GAMES where GAME_id = 3;";
	$result = mysqli_query($con, $sql);
	$data = mysqli_fetch_assoc($result);
	mysqli_close($con);
    
    setcookie('username', $username, time()+3600, '/');
    setcookie('password', $password, time()+3600, '/');

    $name = $data['GAME_NAME'];
	$price = $data['GAME_PRICE'];
	$desc = $data['GAME_DESCRIPTION'];
    $os = $data['GAME_REQ_OS'];
    $cpu = $data['GAME_REQ_CPU'];
    $ram = $data['GAME_REQ_RAM'];
    $hdd = $data['GAME_REQ_HDD'];
    $gpu = $data['GAME_REQ_GPU'];
    $net = $data['GAME_REQ_NETWORK'];
    $logo = 'resources/'.$data['GAME_LOGO'];
    $ss = 'resources/'.$data['GAME_SS'];

    $conn = getConnection();
	$query = "select * from FORUM_COMMENTS where GAME_id = 3;";
	$resultset = mysqli_query($conn, $query);
	mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Game Description</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body style="background:indigo" align="center">
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
                <a href="gamersGames.php">
                    <b style="color:white">My Games</b>
                </a>
                <b style="color:rgb(62, 4, 104)">.    .</b>
                <a href="gamerProfile.php">
                    <b style="color:white">Profile</b>
                </a>
                <b style="color:rgb(62, 4, 104)">.    .</b>
                <a href="PHP/gamerLogout.php">
                    <b style="color:white">Log Out</b>
                </a>
            </td>
        </tr>
    </table>
    <br/>
    <br/>
    <table width="100%" border="0px solid" align="center" style="color:white; background:indigo; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-size: 120%">
        <tr>
            <td align="center" colspan="4">
                
            </td>
        </tr>
        <tr height="200px" align="center">
            <td width="25%"></td>
            <td width="25%">
                <img src="<?php echo $logo; ?>" height="200px" width="200px"/>
            </td>
            <td width="25%" align="left">
                <b style="color:white"><?php echo $name; ?></b><br/>
                <b style="color:white">Price: $<?php echo $price; ?></b><br/>
                <form name="prc">
                    <input type="button" id="prcb" name="prcb" value="Purchase Game" onclick="purchase()"/>
                </form>
            </td>
            <td width="25%"></td>
        </tr>
        <tr>
            <td></td>
            <td height="150px" colspan="2">
            <?php echo $desc; ?>
            </td>
            <td></td>
        </tr>
        <tr height="400px">
            <td></td>
            <td>
                <b>System Requirements:</b><br/>
                OS: <?php echo $os; ?><br/>
                CPU: <?php echo $cpu; ?><br/>
                RAM: <?php echo $ram; ?><br/>
                HDD: <?php echo $hdd; ?><br/>
                GPU: <?php echo $gpu; ?><br/>
                Network: <?php echo $net; ?><br/>
                Screenshot: <br/>
                <img src="<?php echo $ss; ?>" height="353px" width="700px"/>
                <br/>
            </td>
            <td></td>
            <td align="left">
                <b style="color:white">Rate this game:</b><br/>
                <form>
                    <input type="radio" name="rate" value="bad">Bad<br/>
                    <input type="radio" name="rate" value="moderate">Moderate<br/>
                    <input type="radio" name="rate" value="good">Good<br/>
                    <input type="radio" name="rate" value="excellent">Excellent<br/>
                </form>
            </td>
        </tr>

        <?php
        while($resultdata = mysqli_fetch_assoc($resultset))
        {
            $uName = $resultdata['USERNAME'];
            $comment = $resultdata['COMMENT'];

            $connection = getConnection();
	        $sqlquery = "select * from GAMERS where USERNAME = '".$uName."';";
	        $rsltset = mysqli_query($connection, $sqlquery);
	        $rsltdata = mysqli_fetch_assoc($rsltset);
            mysqli_close($connection);
            $uImage = 'resources/'.$rsltdata['G_IMAGE'];

    ?>

    <tr height="100px" >
        <td>
            
        </td>
        <td>
            <img src="<?php echo $uImage; ?>" height="100px" width="100px"/><br/>
            <b><?php echo $uName; ?></b><br/>
            <i><?php echo $comment; ?></i>
        </td>
    </tr>
    <?php
        }
    ?>

        <tr height="100px">
            <td></td>
            <td>
                <b style="color:white">Forum:</b><br/>
                Write a comment<br/>
                <form name="cmnt">
                    <input type="text" id="comment" name="comment" placeholder="type comment here"/><br/>
                    <input type="button" id="sendbutton" value="Send" onclick="sendMessage()"/><br/><br/><br/>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>

<script>
function sendMessage()
{
	var response = "";
	var form = document.forms["cmnt"];
	var comment = form['comment'].value;
    var game_id = 3;
	
	var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function()
    {
        if(this.readyState == 4 && this.status == 200)
        {
            response = this.responseText;
	        alert(response);
        }
    };
  ajax.open("GET", "php/comment_cod.php?comment="+comment+"&game_id="+game_id, true);
  ajax.send();
}

function purchase()
{
	var response = "";
    var game_id = 3;
	var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function()
    {
        if(this.readyState == 4 && this.status == 200)
        {
            response = this.responseText;
	        alert(response);
        }
    };
  ajax.open("GET", "php/game_purchase.php?game_id="+game_id, true);
  ajax.send();
}
</script>