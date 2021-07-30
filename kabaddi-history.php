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
                    <li1 class="current"> <a href="index.php"><p2> HOME </p2></a> <br><br></li1>
                </ul>
            </nav>
        </div>
    </header>

    <section id="newsletter">
        <div class="container">
            <h1>HISTORY OF KABADDI</h1>
        </div>
    </section>
    <section id="showcase">

    <div class="new">
        <h1>KABADDI</h1>
        <img src="kabaddi2.jfif">
        
        <p>Kabaddi is a sport of strength and strategy. Kabaddi was born from the soil of a state at the tip of India,i.e Tamil Nadu. It is very popular in the village of India. It is a sport consisting of two teams.Each team has 7 members with high agility.Their main aim is to score as many points as possible before the time runs out.In order to win points the raider must go to the court of the opposition team and touch a player of the opposition team and come back successfully without being caught or obstructed by the members of the opposite team.As long as the raider stays in the court of the opponents team he/she must hold their breath and chant "Kabaddi" without any halt.<br>

            In international version of kabaddi, the dimensions of the court is 10m x 13m in case of men and for women it is 8m x 12m.The duration of each half of the game is about 20 min and a half time break of 5 min.<br>
            <br>
            The raider is declared out :<br>
            If he/she crosses the boundary line.<br>
            couldn't hold the breath till return to their court.<br>
            a part of their body touches the lobby.<br><br>It is excused if they managed to touch member of the opponent team.<br> 
            As the time passes and if a team manages to out every member of the opponent team then they are awarded 2 points for 'All Out' and the match continues once again  from the beginning with all 7 players in each team. At the end of the game, after the time of 40 min elapses, the team with most points is declared the WINNER. </p><br><br>
    </div>

    <div class="new">
        <h1>HISTORY</h1>
        <img  src="kabaddi4.jpg">

        <p>Modern kabaddi is a synthesis of the game played in various forms under different names. Kabaddi received international exposure during the 1936 Berlin Olympics, Hanuman Vyayam Prasarak Mandal, Amaravati, Maharashtra. The game was introduced in the Indian Olympic Games at Calcutta in 1938.<br>

            In 1950 the All India Kabaddi Federation came into existence and compiled standard rules. The Amateur Kabaddi Federation of India (AKFI) was founded in 1973. After formation of the Amateur Kabaddi Federation of India, the first men's nationals were held in Tamil Nadu (Madras) (renamed Chennai), while the women's were in AKFI has given new shape to the rules.<br><br>
            
            The Asian Kabaddi Federation (AKF) was founded under the chairmanship of kabaddi.<br><br>
            
            In 1979, a return test between Bangladesh and India was held at different places of India including Mumbai, Hyderabad, and Punjab. The Asian Kabaddi Championship was arranged in 1980 and India emerged as champion and Bangladesh runner-up. Bangladesh became runner-up again in 1985 in the Asian Kabaddi Championship held in Jaipur, India. The other teams in the tournament were Nepal, Malaysia and Japan. The game was included for the first time in the Asian Games in Beijing in 1990. India, China, Japan, Malaysia, Sri Lanka, Pakistan, and Bangladesh took part. India won the gold medal and has also won gold at the following six Asian Games in Hiroshima in 1994, Bangkok in 1998, Busan in 2002, Doha in 2006 and Guangzhou in 2010.<br>
            
            An attempt to popularise kabaddi in Great Britain was carried out by Channel 4, who commissioned a programme dedicated to the sport. The programme, kabaddi in the early 1990s, however, failed to capture viewer attention despite fixtures such as West Bengal Police versus the Punjab. Kabaddi was axed in 1992. Alt-rock band The Cooper Temple Clause formed a kabbadi team in 2001 and were, at one stage, ranked seventh in the British domestic standings.<br>
            
            In the 1998 Asian games held at Bangkok (Thailand), the Indian kabaddi team clinched the gold medal. The chief coach of the team was former kabaddi player and coach Flt. Lt. S P Singh.<br><br>
            
            In a major upset, seven-time gold medalist India suffered their first-ever loss in 28 years at the 2018 Asian Games to South Korea in the men's Kabaddi group A game. In the semi-final, Iran sent the seven-time Asiad champions packing with a 27–18 win. India, who took home the bronze for reaching the semi-finals, did not play in the final since the introduction of the Games in the Asiad in 1990 at Beijing.</p>
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