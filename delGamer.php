<?php
    require 'C:\xampp\htdocs\tanz\Game Store\php\DBConnection.php';
    if(isset($_REQUEST['deleteGamer'])){
		
		$username = $_COOKIE['username'];

		$conn = getConnection();
		$sql = "DELETE FROM LOGIN_CREDENTIALS WHERE USERNAME = '".$username."'";
		if(mysqli_query($conn, $sql))
		{
            mysqli_close($conn);
            $conn = getConnection();
		    $sql = "DELETE FROM GAMERS WHERE USERNAME = '".$username."'";
		    if(mysqli_query($conn, $sql))
		    {
                mysqli_close($conn);
                header('location: ../index.php?error=delete_successfull');
		    }
		    else
		    {
                mysqli_close($conn);
                header('location: ../gamerUpdateProfile.php?error=delete_failed');
            
		    } 
		}
		else
		{
            mysqli_close($conn);
            header('location: ../gamerUpdateProfile.php?error=delete_failed');
            
		} 
    }
    else
    {
		header('location: ../gamerUpdateProfile.php?error=invalid_request');
	}
?>
