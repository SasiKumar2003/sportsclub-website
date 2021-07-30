<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
	$uname = isset($_POST['uname']) ? $_POST['uname'] : '';
    $email = isset($_POST['email'])? $_POST['email'] :'';
	$pwd = isset($_POST['pwd']) ? $_POST['pwd'] : '';
	$pass = isset($_POST['pwd1']) ? $_POST['pwd1'] : '';

	$link = mysqli_connect("localhost", "root", "", "projectite");
	// Check connection
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}

	if (!empty($uname) && !empty($pwd) && !empty($pass)){
        $sql = mysqli_query($link, "SELECT username FROM user_details WHERE username = '$uname'");
        if(mysqli_num_rows($sql) > 0){
            header("Location: signup.php?error=$uname - This username is already in use!");
        }else{
            if(strlen($uname) > 12){
                header("Location: signup.php?error=Username should not exceed 12 characters!");
            }else{
                if(strlen($pwd) <= 6 || strlen($pwd) >= 20){
                    header("Location: signup.php?error=Password must be 6-20 letters!");
                }else{
                    if($pwd != $pass){
                        header("Location: signup.php?error=Please re-enter the same password!");
                    }
                    $sql2 = mysqli_query($link, "INSERT INTO user_details (Username,password,email) VALUES ('$uname', '$pwd','$email')");
                    if($sql2){
                        $sql3 = mysqli_query($link, "SELECT * FROM user_details WHERE Username = '$uname'");
                        if(mysqli_num_rows($sql3) > 0){
                            $row = mysqli_fetch_assoc($sql3);
                            $_SESSION['username']=$row['username'];
                            header("Location:index.php");
                        }
                    }else{
                        header("Location: signup.php?error=Something went wrong!");
                    }
                }
            }
        }
        
    }else{
        header("Location: signup.php?error=All inputs are required!");
        }
}

?>