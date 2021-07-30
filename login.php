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
  <form action="welcome.php" method="post">
   <table align="center">
     <tr> 
       <th colspan="2"> <h2 align="center"> Login </h2> </th>
     </tr>
     <tr colspan="8">
       <td>
        <?php if(isset($_GET['error'])) {?>
          <div class="error"><?php echo $_GET['error']; ?></div>

        <?php } ?>
       </td>
     </tr>
     <tr>
        <td>UserName : </td>
        <td><input type="text" name="uname" id="uname"> </td>
      </tr>
      <tr>
        <td>Password : </td>
        <td><input type="password" name="pwd" id="pwd"> </td>
      </tr>
      <tr>
          <td>remember me:<input type="checkbox" name="rem" ></td>
          <td></td>  
      </tr>

      <tr>
        <td align="right" colspan="2"> <input type="submit" name="login" value="Login" class="button"></td>
      </tr>
      <tr>
        <td colspan="4"><p5>Don't Have an account ?click here to </p5><a href="signup.php">Signup</a></td>
      </tr>
    </table>
  </form>

  <footer>
        <p2>Anna University sportsclub , copyright & copy 2021</p2>

        <p3>Contact us : 1800 0652 0652</p3>
    </footer> 
<?php
if(isset($_COOKIE['username'])){
  $uname = $_COOKIE['username'];
  $pwd = $_COOKIE['password'];


?>
<script>
  document.getElementById('uname').value = "<?php echo "$uname";?>";
  document.getElementById('pwd').value = "<?php echo "$pwd";?>";
</script>
<?php
}
?>
</body>
</html>