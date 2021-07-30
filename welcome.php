<?php
session_start();
include "db_conn.php";

if(isset($_POST['uname'])&& isset($_POST['pwd'])){
  function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $uname = validate($_POST['uname']);
  $pwd = validate($_POST['pwd']);

  if(empty($uname)){
    header("location: login.php?error=User name is required");
    exit();
  }else if(empty($pwd)){
    header("location: login.php?error=Password is required");
    exit();

  }else{
    $sql = "SELECT * FROM user_details WHERE username='$uname' AND password='$pwd'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) === 1){
      $row = mysqli_fetch_assoc($result);
      if($row['username'] === $uname && $row['password'] === $pwd){
        $_SESSION ['username'] = $row['username'];
        $_SESSION ['password'] = $row['password'];
        if(isset($_POST['rem'])){
          setrawcookie('username',$uname,time()+60*60*24);
          setrawcookie('password',$pwd,time()+60*60*24);
        }
        header("location: index.php");
        exit();
      }else{
        header("location: login.php?error=Incorrect username or password");
        exit();
      }
    }else{
      header("location: login.php?error=Incorrect username or password");
      exit();
    }

  }

}else{
  header("location: login.php?error=All inputs are required!");
  exit();
}
?>