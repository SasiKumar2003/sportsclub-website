<?php
session_start();

if (!isset($_SESSION['username'])){
    header("location: login.php");
}
?>
<!DOCTYPE html>
<head>
    <title> CEG Sports - RULES:kabaddi </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <header>
        <div class="container">
            <div id="brandinng">
                <h1> SPORTS CLUB OF <span class="highlight"> CEG </span> </h1>
            </div>
            <nav>
                <ul>
                    <li1 class="current"> <a href="index.php"><p2> HOME</p2> </a> <br><br></li1>
                </ul>
            </nav>
        </div>
    </header>

    <section id="newsletter">
        <div class="container">
            <h1>RULES OF HANDBALL</h1>
        </div>
    </section>

    <section id="showcase">
    <div class="new">
        <img src="handball4.jpg">
        <p>A match consists of two periods of 30 minutes each.<br><br>
            Each team consists of 7 players; a goalkeeper and 6 outfield players.<br><br>
            Outfield players can touch the ball with any part of their body that is above the knee.<br><br>
            Once a player receives possession, they can pass, hold possession or shoot.<br><br>
            If a player holds possession, they can dribble or take three steps for up to three seconds without dribbling.<br><br>
            Only the goalkeeper is allowed to come into contact with the floor of the goal area.<br><br>
            Goalkeepers are allowed out of the goal area but must not retain possession if they are outside the goal area.<br><br>
            To win in handball you must score more than your opponent.<br>
            If the handball game is drawn then there must be a winner; then periods of overtime with a maximum of 2 5 minute periods are played. If the scores are still level, a shoot-out is used to determine the result of the game.
        </p>
    </div></section>
    
    <footer>
        <p2>Anna University sportsclub , copyright & copy 2021</p2><br><br>
        <ul> 
            <li>
                 <a href="handball-history.php"><p4>Handball history</p4></a>
                 <a href="kabaddi-history.php"><p4>Kabaddi history</p4></a>
                 <a href="handball-rules.php"><p4>Handball rules</p4></a>
                 <a href="kabaddi-rules.php"><p4>Kabaddi rules</p4></a>
                 <a href="handball-quiz.php"><p4>Handball quiz</p4></a>
                 <a href="kabaddi-quiz.php"><p4>Kabaddi quiz</p4></a>
                 <a href="handball-top10.php"><p4>Handball top 10 players</p4></a>
                 <a href="kabaddi-top10.php"><p4>Kabaddi top 10 players</p4></a>
                 <a href="records.php"><p4>CEG sports Board</p4></a>
            </li>
         </ul>
         <p3>Contact us : 1800 0652 0652</p3>
    </footer>
</body>
</html>