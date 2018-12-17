<?php
    if(isset($_GET['game_id']))
    {
        require 'C:\xampp\htdocs\tanz\Game Store\php\DBConnection.php';
	    $game_id = $_GET['game_id'];
        $username = $_COOKIE['username'];

        if(empty($game_id) == true)
        {
            setcookie('username', $username, time()+3600, '/');
            echo "Null Submission!";
        }
        else
        {
            $conn = getConnection();
			$sql = "INSERT INTO PURCHASE_HISTORY values('".$username."','".$game_id."')";
            if(mysqli_query($conn, $sql))
            {
                mysqli_close($conn);
                setcookie('username', $username, time()+3600, '/');
                echo "Successfully Purchased!";
            }
            else
            {
                mysqli_close($conn);
                setcookie('username', $username, time()+3600, '/');
				echo "Failed to Purchase!";
			}
        }
    }
?>