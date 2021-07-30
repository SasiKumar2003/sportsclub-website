<?php
session_start();

if (!isset($_SESSION['username'])){
    header("location: login.php");
}
?>
<!DOCTYPE html>
<head>
    <title> CEG Sports - QUIZ:handball </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="style3.css">
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
            <h1>HANDBALL - TOP10 PLAYERS</h1>
        </div>
    </section>
    <div class="new">
        <center><table class="table">
            <tr>
                <th>NUMBER</th>
                <th>FIRST-NAME</th>
                <th>LAST-NAME</th>
                <th>CLUB</th>
            </tr>

            <tr>
                <td>1</td>
                <td>Mikkel</td>
                <td>Hansen</td>
                <td>PSG handball</td>
            </tr>

            <tr>
                <td>2</td>
                <td>Hans</td>
                <td>Lindberg</td>
                <td>Fuchse Berlin</td>
            </tr>

            <tr>
                <td>3</td>
                <td>Luc</td>
                <td>Abalo</td>
                <td>PSG handball</td>
            </tr>

            <tr>
                <td>4</td>
                <td>Michaël</td>
                <td>Guigou</td>
                <td>Mont pellier</td>
            </tr>

            <tr>
                <td>5</td>
                <td>Niklas</td>
                <td>Jacobsen</td>
                <td>THW Kiel</td>
            </tr>

            <tr>
                <td>6</td>
                <td>Aleix</td>
                <td>Gómez</td>
                <td>FC Barcelona</td>
            </tr>

            <tr>
                <td>7</td>
                <td>Aitor</td>
                <td>Ariño</td>
                <td>FC Barcelona</td>
            </tr>

            <tr>
                <td>8</td>
                <td>Raúl</td>
                <td>Entrerríos</td>
                <td>FC Barcelona</td>
            </tr>

            <tr>
                <td>9</td>
                <td>Guðjón</td>
                <td>Sigurðsson</td>
                <td>PSG handball</td>
            </tr>

            <tr>
                <td>10</td>
                <td>Luka</td>
                <td>Karabatić</td>
                <td>PSG Handball</td>
            </tr>


        </table></center>
    </div>



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