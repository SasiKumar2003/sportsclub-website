<?php
session_start();

if (!isset($_SESSION['username'])){
    header("location: login.php");
}
?>
<!DOCTYPE html>
<head>
    <title> CEG Sports - HISTORY:kabaddi </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="style4.css">
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
            <h1>HISTORY OF HANDBALL</h1>
        </div>
    </section>
    <section id="showcase">

    <div class="new">
        <h1>HANDBALL</h1>
        <img src="handball5.jpg">
        <p>Handball (also known as team handball, European handball or Olympic handball) is a team sport in which two teams of seven players each (six outcourt players and a goalkeeper) pass a ball using their hands with the aim of throwing it into the goal of the other team. A standard match consists of two periods of 30 minutes, and the team that scores more goals wins.<br><br>

            Modern handball is played on a court of 40 by 20 metres (131 by 66 ft), with a goal in the middle of each end. The goals are surrounded by a 6-meter (20 ft) zone where only the defending goalkeeper is allowed; goals must be scored by throwing the ball from outside the zone or while "diving" into it. The sport is usually played indoors, but outdoor variants exist in the forms of field handball, Czech handball (which were more common in the past) and beach handball. The game is fast and high-scoring: professional teams now typically score between 20 and 35 goals each, though lower scores were not uncommon until a few decades ago. Players may score hat tricks. Body contact is permitted for the defenders trying to stop the attackers from approaching the goal. No protective equipment is mandated, but players may wear soft protective bands, pads and mouth guards.<br><br>

        </p>
    </div>

    <div class="new">
        <h1>HISTORY</h1>
        <img  src="handball6.jpg">
        <p>The game was codified at the end of the 19th century in Denmark. The modern set of rules was published on 29 October 1917 in Berlin, which is seen as the date of birth of the sport, and had several revisions since. The first official handball match was played in the same year in Germany.[1] The first international games were played under these rules for men in 1925 and for women in 1930. Men's handball was first played at the 1936 Summer Olympics in Berlin as outdoors, and the next time at the 1972 Summer Olympics in Munich as indoors, and has been an Olympic sport since. Women's team handball was added at the 1976 Summer Olympics.<br>
            The International Handball Federation was formed in 1946 and, as of 2016, has 197 member federations.The sport is most popular in Europe, and European countries have won all medals but one in the men's world championships since 1938. In the women's world championships, only two non-European countries have won the title: South Korea and Brazil. The game also enjoys popularity in East Asia, North Africa and parts of South America.<br><br>
            The first record of ball games with the hand is from 2000 B.C. in Egypt. Their priests of the temple of Osiris in Thebes were depicted on the tombs striking the ball with the hand. Such iconographic evidence is also found in America where ball games formed an integral part of Pre-Hispanic culture. Over 700 ball court sites have been identified from Arizona to Nicaragua. Many having sculptures, bas-reliefs and painted vessels. Showing people engaged in hand-played balls. The oldest are dated as far back as 1500 B.C., and interestingly in only one area is there play involving a wall that depicts the land of the Chichimeca people of the Mexican plateau. A one-wall game is still played in the States around Zacateca, where there are over 400 courts with most of the dimensions 12m x 6m - almost 40' x 20'.<br>Meanwhile, back in Europe the Greek writer Homer refers to a handball game invented by Anagalla, a princess of Sparta, and describes the action in a picturesque, if not very informative way, "O'er the green mead the sporting virgins play, their shining veils unbound along the skies, tossed and retossed, the ball incessant flies." In Ireland a good server of the ball is said to have a great toss!
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