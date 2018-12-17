<?php
	
	require 'C:\xampp\htdocs\tanz\Game Store\php\DBConnection.php';

	if(isset($_POST['submit'])){

		$uname 		= trim($_POST['username']);
		$password 	= trim($_POST['password']);

		if($uname == "" || $password == ""){
			
			header('location: ../index.php?error=null_found');
		}else{
            $con = getConnection();
            $password = md5($password);
			$sql = "select * from LOGIN_CREDENTIALS where USERNAME='".$uname."' and PASSWORD='".$password."'";
			$result = mysqli_query($con, $sql);
			$data = mysqli_fetch_assoc($result);
			mysqli_close($conn);
			if($uname == $data['USERNAME'] && $password == $data['PASSWORD'] && $data['USER_STATUS'] == "ACTIVE"){
				
				setcookie('username', $uname, time()+3600, '/');
				setcookie('password', $password, time()+3600, '/');

                if($data['USER_TYPE'] == "Gamer")
                {
                    header('location: ../gamerHome.php');
                }
                else if($data['USER_TYPE'] == "Moderator")
                {
                    header('location: ../moderatorHome.php');
                }
                else if($data['USER_TYPE'] == "Developer")
                {
                    header('location: ../developerHome.php');
                }
			}else{
				header('location: ../index.php?error=invalid_user');
			}
		}

	}else{
		echo "invalid request!";
	}

?>