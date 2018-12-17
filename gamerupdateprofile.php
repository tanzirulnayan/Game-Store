<?php
    require 'C:\xampp\htdocs\tanz\Game Store\php\DBConnection.php';
    if(isset($_REQUEST['submit'])){
		
		$username = $_COOKIE['username'];
        $name = $_POST['name'];
	    $email = $_POST['email'];
        $phone = $_POST['phone'];
        $creditCard = $_POST['creditCard'];

		$conn = getConnection();
		$sql = "UPDATE GAMERS SET G_NAME = '".$name."', G_EMAIL = '".$email."', G_MOBILE = '".$phone."', G_CREDIT_CARD = ".$creditCard." WHERE USERNAME = '".$username."'";
		if(mysqli_query($conn, $sql))
		{
            mysqli_close($conn);
            header('location: ../gamerUpdateProfile.php?error=update_successfull');
		}
		else
		{
            mysqli_close($conn);
            header('location: ../gamerUpdateProfile.php?error=update_failed');
		}
    }
    else
    {
		header('location: ../gamerUpdateProfile.php?error=invalid_request');
	}
?>
