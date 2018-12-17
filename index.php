<?php
    if(isset($_GET['error']))
    {
        echo $_GET['error'];
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body class="indexBody">
    <table width=100% border="0px solid" class="indextable">
        <tr>
            <td width="25%">
                <img src="resources/gameStoreLogo.png" height="58px" width="234px"/>
            </td>
            <td width="25%"></td>
            <td width="25%"></td>
            <td width="25%" align="right"></td>
        </tr>
    </table width=100% border="0px solid" class="indextable">
    <br/>
    <br/>
    <br/>
    <br/>
    <form method="post" action="php/logCheck.php" class="indextable">
        <fieldset>
            <legend>Log In</legend>
            <table border="0" class="indextable">
                <tr>
                    <td>Username: </td>
                    <td><input name="username" type="text" value="" placeholder="Type Username"/></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input name="password" type="password" value="" placeholder="Type Password"/></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Log In"/></td>
                </tr>
            </table>
        </fieldset>
    </form>
    <br/><br/>
    <b class="indexboldtext">New to Game Store?</b>
    <br/>
    <a href="gamerSignUp.php">
        <b class="indexboldtext">Sign Up as Gamer</b>
    </a>
    <br/>
    <a href="Register_Form.html">
        <b class="indexboldtext">Sign Up as Game Developer</b>
    </a>
    <br/>
    <a href="reg.php">
        <b class="indexboldtext">Sign Up as Moderator</b>
    </a>
</body>
</html>