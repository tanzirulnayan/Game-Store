<?php
    if(isset($_GET['comment']) && isset($_GET['game_id']))
    {
        require 'C:\xampp\htdocs\tanz\Game Store\php\DBConnection.php';
	    $comment = $_GET['comment'];
	    $game_id = $_GET['game_id'];
        $username = $_COOKIE['username'];

        if(empty($comment) == true || empty($game_id) == true || empty($username))
        {
            setcookie('username', $username, time()+3600, '/');
            echo "Null Submission!";
        }
        else
        {
            $conn = getConnection();
			$sql = "INSERT INTO FORUM_COMMENTS values('".$game_id."','".$comment."','".$username."')";
            if(mysqli_query($conn, $sql))
            {
                mysqli_close($conn);
                setcookie('username', $username, time()+3600, '/');
                echo "Successfully Sent! Refresh the page.";
            }
            else
            {
                mysqli_close($conn);
                setcookie('username', $username, time()+3600, '/');
				echo "Failed to send!";
			}
        }
    }
?>