<?php
	session_start();
	if(isset($_SESSION['uname'])){
		header("location: index.php");
	}
?>
<!DOCTYPE html>
<html>
<head> 
       <title> </title>
       <title> CEG Sports - HOME </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="style7.css">
</head>
<body>

<header>
            <div id="brandinng">
                <h1> SPORTS CLUB OF <span class="highlight"> CEG </span> </h1>
            </div>
</header>
  <form action="welcome1.php" method="post">
  
   <table align="center">
     <tr> 
       <th colspan="2"> <h2 align="center"> Signup </h2> </th>
     </tr>
     <tr>
         <td >
            <?php if(isset($_GET['error'])){?>
			<div style="display:block;" class="error-txt"><?php echo $_GET['error']; ?></div>
            <?php } ?>
        </td>
     </tr>    
     <tr>
        <td>UserName : </td>
        <td><input type="text" name="uname"> </td>
      </tr>
      <tr>
        <td>Email id : </td>
        <td><input type="email" name="email"> </td>
      </tr>
      <tr>
      <tr>
        <td>Password : </td>
        <td><input type="text" name="pwd"> </td>
      </tr>
      <tr>
      <td>Re-type Password : </td>
        <td><input type="password" name="pwd1"> </td>
      </tr>
      <tr>
        <td align="right" colspan="2"> <input type="submit" name="login" value="Login" class="button"></td>
      </tr>
      <tr>
        <td colspan="4"><p5>have an account already ?click here to </p5><a href="login.php">Login</a></td>
      </tr>
    </table>
  </form>

  <footer>
        <p2>Anna University sportsclub , copyright & copy 2021</p2>

        <p3>Contact us : 1800 0652 0652</p3>
    </footer> 
</body>
</html>