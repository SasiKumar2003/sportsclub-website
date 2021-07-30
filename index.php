<?php
session_start();

if (!isset($_SESSION['username'])){
    header("location: login.php");
}
?>
<!DOCTYPE html>
<head>
    <title> CEG Sports - HOME </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header>
        <div class="container">
            <div id="brandinng">
                <h1> SPORTS CLUB OF <span class="highlight"> CEG </span> </h1>
            </div>
            <nav>
                <ul>
                     
                     <li class="dropdown">
                        <a href="javascript:void(0)" class="dropbtn"><p1 class="current">HISTORY</p1></a>
                        <div class="dropdown-content">
                            <a href="handball-history.php">Handball</a>
                            <a href="kabaddi-history.php">Kabaddi</a>
                        </div>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropbtn"><p1 class="current">RULES</p1></a>
                        <div class="dropdown-content">
                            <a href="handball-rules.php">Handball</a>
                            <a href="kabaddi-rules.php">Kabaddi</a>
                        </div>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropbtn"><p1 class="current">QUIZ</p1></a>
                            <div class="dropdown-content">
                                <a href="handball-quiz.php">Handball</a>
                                <a href="kabaddi-quiz.php">Kabaddi</a>
                            </div>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropbtn"><p1 class="current">TOP PLAYERS</p1></a>
                            <div class="dropdown-content">
                                    <a href="handball-top10.php">Handball</a>
                                    <a href="kabaddi-top10.php">Kabaddi</a>
                            </div>
                     <Li><a href="records.php"><p1 class="current">CEG sports Board</p1>  </a></Li> <br>
                </ul>
            </nav>
        </div>
    </header>

    <section id="showcase">
        <div class="container">
            <h1></h1>
        </div>
    </section>

    <section id="newsletter">
        <div class="container">
            <h1>Join our sportsclub</h1>
            <div id="hi">
            <form onsubmit="return joinClub()">
                <input type="text" id="email" placeholder="ENTER EMAIL-ID...">
                <button type="submit" class="button_1">JOIN</button>
            </form> 
        </div>       
        </div>
    </section> 

    <section id="showcase1">
    
    <section id="boxes">
        <div class="container">
            <div class="box">
                <p5>KABADDI</p5><br><br>
                <img src="kabaddi1.jpg">
                <p>kabaddi team of Anna University CEG campus is a strong offensive team.Mainly known for their raiding skills and quick decision making stratagic play.They are one of the strongest team in south zone.</p><br><br>
                <img src="annakabaddi1.jpg">
                <p>The basic rules of kabaddi were formalized in India in the early 20th century and published in 1923.<br> The game received international exposure when it was demonstrated by an Amravati-based sports organization at the 1936 Olympic Games in Berlin, and it was included as an event in the Indian Olympic Games held in Calcutta (now Kolkata) two years later.<br> Following its formation in 1950, the Kabaddi Federation of India organized national championships for men beginning in 1952 and for women beginning in 1955. In the late 20th century the popularity of organized kabaddi began to expand beyond India’s borders, in part through the efforts of the Amateur Kabaddi Federation of India, formed in 1972.<br> That same year kabaddi was designated the national game of Bangladesh. With the establishment in 1978 of the Asian Amateur Kabaddi Federation, a regional championship was organized, and national kabaddi teams began to compete in the Asian Games in 1990.</p>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <p5> HANDBALL </p5><br><br>
                <article><img src="Handball1.jpg"></article>
                <p>Handball team of Anna University CEG campus is a great team which is good in both attacking and defending.They are mainly known for their speed and lightning fast passing.They also have a great goal keeper.</p>
                <img src="annahandball.jpg">
                <P>Handball is said to be a combination of football, basketball and water polo.<br>There are two referees leading the game; goal line referee and court referee.<br>Unlike other sports, handball players are not restricted with number of faults.<br>There's also beach handball which is played on a smaller sand court and its popularity is increasing with more teams joining in.<br>The size of the ball differs in men's and women's handball. For children, the ball is even smaller and usually softer to avoid injuries.<br>The origins of the game are thought to date back to ancient Greece.<br>Handball is the second largest sport in Europe.<br>The goalkeeper is the only one allowed to be within the goal line. Players of opposing teams can't pass the line though the goalkeeper can move outside of it.<br>In a common American version, a player is allowed to move only one step before he pass the ball to another player.<br>A player can’t hold the ball for longer than 3 seconds and can’t move more than 3 steps holding it.</p>
            </div>
        </div></section>
    </section>

    <footer>
        <p2>Anna University sportsclub , copyright & copy 2021</p2>
        <form class="logout">
            <a href='logout.php'><input type="button" class="logout" value="logout"></a>
        </form>
        
        <ul>
            <li>
                <a href="handball-history.html">Handball history</a>
                <a href="kabaddi-history.html">Kabaddi history</a>
                <a href="handball-rules.html">Handball rules</a>
                <a href="kabaddi-rules.html">Kabaddi rules</a>
                <a href="handball-quiz.html">Handball quiz</a>
                <a href="kabaddi-quiz.html">Kabaddi quiz</a>
                <a href="handball-top10.html">Handball top 10 players</a>
                <a href="kabaddi-top10.html">Kabaddi top 10 players</a>
                <a href="records.html">CEG sports Board</a>
            </li>
        </ul>    
        
        <p3>Contact us : 1800 0652 0652</p3>
    </footer> 
    <script src="index.js"></script>
    
</body>
</html>