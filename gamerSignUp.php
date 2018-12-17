<?php
    if(isset($_GET['error']))
    {
        echo $_GET['error'];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <script src="javaScript/gamerSignUp.js"></script>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body class="gamerBody">
    <table class="gamerSignUpMenuBar">
        <tr>
            <td width="25%">
                <img src="resources/gameStoreLogo.png" height="58px" width="234px"/>
            </td>
            <td width="25%"></td>
            <td width="25%"></td>
            <td width="25%" align="right">
                <a href="index.php">
                    <b style="color:white">Home</b>
                </a>
            </td>
        </tr>
    </table>
    <form class="gamerForm" method="post" action="php/gamerSignUpCheck.php" enctype="multipart/form-data">
            <fieldset>
                <legend>Sign Up</legend>
                <table class="GamerSignUpTable">
                    <tr>
                        <td>Username: </td>
                        <td><input type="text" id="userName" name="username" placeholder="Type Username" onblur="userNameCheck()"/></td>
                    </tr>
                    <tr>
                        <td>Name: </td>
                        <td><input type="text" id="name" name="name" placeholder="Type Name" onblur="nameCheck()"/></td>
                    </tr>
                    <tr>
                        <td>Password: </td>
                        <td><input type="password" id="password" name="password" placeholder="Type Password" onblur="passwordCheck()"/></td>
                    </tr>
                    <tr>
                        <td>Confirm Password: </td>
                        <td><input type="password" id="confirmPassword" name="confirmPassword" placeholder="Type Password Again" onblur="confirmPasswordCheck()"/></td>
                    </tr>
                    <tr>
                        <td>Email: </td>
                        <td><input type="text" id="email" name="email" placeholder="Type Email Address"  onblur="emailCheck()"/></td>
                    </tr>
                    <tr>
                        <td>Country: </td>
                        <td>
                            <select id="country" name="country" onblur="countryCheck()">
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Canada">Canada</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Germany">Germany</option>
                                <option value="India">India</option>
                                <option value="UK">UK</option>
                                <option value="USA">USA</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Phone Number: </td>
                        <td><input type="text" id="phone" name="phone" placeholder="Type Phone Number"  onblur="phoneCheck()"/></td>
                    </tr>
                    <tr>
                        <td>Gender: </td>
                        <td>
                            <input type="radio" id="male" name="gender" value="Male"/>Male
                            <input type="radio" id="female" name="gender" value="Female"/>Female
                            <input type="radio" id="other" name="gender" value="Other"/>Other
                        </td>
                    </tr>
                    <tr>
                        <td>Date of Birth: </td>
                        <td><input type="date" name="dob" id="dob" onblur="dobCheck()"/></td>
                    </tr>
                    <tr>
                        <td>Credit Card Number: </td>
                        <td><input type="number" name="creditCard" id="creditCard" placeholder="Type Credit Card Number" onblur="creditCardCheck()"/></td>
                    </tr>
                    <tr>
                        <td>Image: </td>
                        <td><input type="file" name="file" id="file" onblur="fileCheck()"/></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="Submit" name="submit" id="gamerSignUpButton" value="Sign Up"/></td>
                    </tr>
                </table>
            </fieldset>
        </form>
</body>
</html>