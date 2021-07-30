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
                    <li1 class="current"> <a href="index.php"><p2> HOME </p2></a> <br><br></li1>
                </ul>
            </nav>
        </div>
    </header>

    <section id="newsletter">
        <div class="container">
            <h1>RULES OF KABADDI</h1>
        </div>
    </section>

    <section id="showcase">
    <div class="new">
        <img src="kabaddinew.jpg">
        <p>1) Team: 
            Minimum 10 players & Maximum 12 players
            But 7 players play the match in the ground and the remaining are substitutes who can replace the players on the ground at any time necessary.<br>
            <br>
            2) Duration:
            
            
            Match consists of two halves each as long as 20 min with interval of 5 min.
            The last raider of each half of the match gets to complete the raid even after completion of the time.
            <br><br>
            
            3) Score:
            1 point for each member made out.
            2 additional points if all the members are made out.
            <br><br>
            4) Time out:
            Each team has chance to take 2 'Time Outs' of 30 seconds in each half.
            It is called by captain, coach or any member with the permission of the referee.
            The team must stay on ground, if violated, a technical point is given to opponents.
            <br><br>
            5) Substitution:
            
            5 reserved players can be substituted.
            If any player is suspended, no substitutions are allowed for that particular player. Team plays with less number of players.
            Substitution is not allowed for out players.
            It is done during time outs or interval.
            <br><br>
            6) Bonus points:
            It is active when there are minimum of 6 players in the court.
            1 point is awarded to the raider if he crosses the bonus line.If the raider gets caught, the opponent team will also be awarded 1 point.
            There is no revival for bonus point.
            The raider will not be awarded bonus point if he crossed the line after a touvh or struggle.
            <br><br>
            7) Result:
            The team with better score wins.
            
            <br><br><br>
            TECHNICAL OFFICIALS:<br><br>
            
            The officials shall be 1 referee,2 umpires, 1 scorer and 2 assistant scorers.
            The judgement of the umpires is final but the referee can give his decision if there is disagreement between 2 umpires.
            <br>
            1)Warning cards:
            
            Green card: It is a warning sign. If green card is given twice to a player or coach or manager twice, the next card shall be directly yellow card
            Yellow card:That member is temporarily suspended for 2 min. If yellow card is giventwice to a player or coach or manager twice, the next card shall be                                 directly red card.
            Red card:Suspension from match or debarred from tournament. </p>
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