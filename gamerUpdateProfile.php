<?php
    require 'C:\xampp\htdocs\tanz\Game Store\php\DBConnection.php';
    if(isset($_GET['error']))
    {
        echo $_GET['error'];
    }

    $username = $_COOKIE['username'];
    $password = $_COOKIE['password'];
    $name = "";
	$email = "";
	$country = "";
    $phone = "";
    $gender = "";
    $dob = "";
    $creditCard = 0;
    
	$con = getConnection();
	$sql = "select * from GAMERS where USERNAME='".$username."';";
	$result = mysqli_query($con, $sql);
	$data = mysqli_fetch_assoc($result);
	mysqli_close($con);
    
    setcookie('username', $username, time()+3600, '/');
    setcookie('password', $password, time()+3600, '/');

	$username = $data['USERNAME'];
	$name = $data['G_NAME'];
    $email = $data['G_EMAIL'];
    $country = $data['G_COUNTRY'];
    $phone = $data['G_MOBILE'];
    $gender = $data['G_GENDER'];
    $dob = $data['G_DOB'];
    $creditCard = $data['G_CREDIT_CARD'];
    $image = 'resources/'.$data['G_IMAGE'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
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
                <a href="gamersGames.php">
                    <b style="color:white">My Games</b>
                </a>
                <b style="color:rgb(62, 4, 104)">.    .</b>
                <a href="gamerHome.php">
                    <b style="color:white">Home</b>
                </a>
                <b style="color:rgb(62, 4, 104)">.    .</b>
                <a href="gamerUpdateProfile.php">
                    <b style="color:white">Update Profile</b>
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

    <form method="post" action="php/gamerupdateprofile.php">
    <table width = 60% border="0px solid" align="center" class="gamerprofiletable">
        <tr>
            <td width="33%">Username:</td>
            <td width="33%"><?php echo $username; ?></td>
            <td rowspan="8">
                <img src="<?php echo $image; ?>" height="200px" width="200px"/>
            </td>
        </tr>
        <tr>
            <td>Name:</td>
            <td>
            <input name="name" type="text" value="<?php echo $name; ?>"/>
            </td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input name="email" type="text" value="<?php echo $email; ?>"/></td>
        </tr>
        <tr>
            <td>Country:</td>
            <td><?php echo $country; ?></td>
        </tr>
        <tr>
            <td>Phone Number:</td>
            <td><input name="phone" type="text" value="<?php echo $phone; ?>"/></td>
        </tr>
        <tr>
            <td>Credit Card Number:</td>
            <td><input name="creditCard" type="text" value="<?php echo $creditCard; ?>"/></td>
        </tr>
        <tr>
            <td></td>
            <td><input name="submit" type="submit" value="Update"/></td>
        </tr>
    </table>
    </form>

    <form method="post" action="php/delGamer.php">
        <input type="submit" name="deleteGamer" value="Delete Account"/>
    </form>
</body>
</html>