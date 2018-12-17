<?php
    require 'C:\xampp\htdocs\tanz\Game Store\php\DBConnection.php';
    if(isset($_REQUEST['report'])){
        $username = $_COOKIE['username'];
        $arText = $_POST['arText'];
        $date = date("Y-m-d");

        setcookie('username', $username, time()+3600, '/');
        setcookie('password', $password, time()+3600, '/');
        
        if(empty($arText) == true || empty($username) == true)
        {
            header('location: ../gamerReportAbuse.php?error=Null_Submission!');
        }
        else
        {
			$conn = getConnection();
			$sql = "INSERT INTO abuse_reports VALUES ('".$username."', '".$arText."', '".$date."')";
			if(mysqli_query($conn, $sql)){
                header('location: ../gamerReportAbuse.php?error=Message_Sent_Successfully!');
			}else
			{
				header('location: ../gamerReportAbuse.php?error=Message_Sending_Failed!');
			}
        }
    }
?>