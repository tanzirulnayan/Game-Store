<?php
    require 'C:\xampp\htdocs\tanz\Game Store\php\DBConnection.php';
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        $email = $_POST['email'];
        $country = $_POST['country'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $creditCard = $_POST['creditCard'];
        $image = "";

        if(empty($username) == true || empty($name) == true || empty($password)|| empty($confirmPassword) == true || empty($email)|| empty($country) == true || empty($phone)|| empty($gender) == true || empty($dob)|| empty($creditCard))
        {
            echo "Null Submission!";
        }
        else
        {
            if($password == $confirmPassword){
                $dir = 'C:\xampp\htdocs\tanz\Game Store\resources/'.$_FILES['file']['name'];
                $image = $_FILES['file']['name'];
		        if(move_uploaded_file($_FILES['file']['tmp_name'], $dir)){
		        }else{
                    header('location: ../gamerSignUp.php?error=Error_Uploading_Photo!');
                }

                //encryption
                $password = md5($password);

				$conn = getConnection();
				$sql = "INSERT INTO LOGIN_CREDENTIALS values('".$username."','".$password."','Gamer','PENDING')";
				if(mysqli_query($conn, $sql)){
                    mysqli_close($conn);
                
                    $conn = getConnection();
				    $sql = "INSERT INTO GAMERS values('".$username."','".$name."','".$email."','".$country."','".$phone."','".$gender."','".$dob."','".$creditCard."','".$image."')";
				    if(mysqli_query($conn, $sql)){
                        header('location: ../gamerSignUp.php?error=success!');
				    }else{
					    header('location: ../gamerSignUp.php?error=failed_to_insert_into_GAMERS');
				    }
				    mysqli_close($conn);
				}else{
                    header('location: ../gamerSignUp.php?error=Try_a_different_username!_failed_to_insert_into_LOGIN_CREDENTIALS');
				}
			}else
			{
				echo "pass and repass error";
			}
        }
    }
    else
    {
        echo "Invalid Requiest!";
    }
?>