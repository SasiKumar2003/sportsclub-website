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
    <link rel="stylesheet" href="style6.css">
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
            <h1>QUIZ - HANDBALL</h1>
        </div>
    </section>

    <div class="home-box custom-box">
        <h3>Instructions:</h3>
        <p>Total number of questions : <span class="total-questions">5</span></p>
        <button type="button" class="btn" onclick="startQuiz()"><p11>START QUIZ</p11></button>
    </div>

    <div class="quiz-box custom-box hide">
        <div class="question-number">
            
        </div>
        
        <div class="question-text">
            
        </div>

        <div class="option-container">
           
        </div>

        <div class="next-question-btn">
            <button type="button" class="btn" onclick="Next()"><p11>NEXT</p11></button>

        </div>

        <div class="answer-indicator">

        </div>
    </div>

    <div class="result-box custom-box hide">
        <h1>Quiz Result</h1>
        <table>
            <tr>
                <td>Total Questions</td>
                <td><span class="total-questions"></span></td>
            </tr>

            <tr>
                <td>Attempted</td>
                <td><span class="total-attempted"></span></td>
            </tr>

            <tr>
                <td>Correct</td>
                <td><span class="total-correct"></span></td>
            </tr>


            <tr>
                <td>Wrong</td>
                <td><span class="total-wrong"></span></td>
            </tr>

            <tr>
                <td>Percentage</td>
                <td><span class="percentage"></span></td>
            </tr>

            <tr>
                <td>Your Total Score</td>
                <td><span class="total-score"></span></td>
            </tr>

        </table>
        <button type="button" class="btn" onclick="tryAgainQuiz()"><p11>Try Again</p11></button>
        <button type="button" class="btn" onclick="goToHome()"><p11> Go To Home</p11> </button>
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

    <script src="quiz.js"></script>
    <script src="app.js"></script>
</body>
</html>