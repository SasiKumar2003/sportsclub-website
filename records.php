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
    <link rel="stylesheet" href="style5.css">
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
            <h1>ABOUT CEG SPORTS BOARD</h1>
            
        </div>
    </section>
    
    <section id="showcase">
    <img src="annauniv.jpeg">
    <br><br>

    <p1>Organisation and Constitution :<br><br>
        The Anna University Sports Board ensuring the smooth and efficient conduct of Zonal / Inter-Zonal tournaments involving all the institutions under Anna University, the Anna University Sports Board is constituted with the Vice-Chancellor as President. The members of the Board include Deans / Principals of Constituent and Affiliated Colleges, Faculty members, Physical Directors and Eminent Sports Persons, as per the norms approved by the Syndicate of the University.<br><br><br>
        Aims and Objectives :<br>
        To encourage sportsmanship and healthy competitions among the colleges involved.<br>
        To organize Zonal and Inter-Zonal tournaments in the recognized games and sports, towards selection of University Teams.<br>
        To raise the general standards of sports and games towards achievement in Inter-University / National / Inter-National tournaments.<br>
        To organize the National Sports Organisation programme for the total personality development of all students in order to serve the community towards its advancement.<br>
        To encourage such other activities which may be conducive to the aims and objectives of AUSB.<br><br>
        Sports Zones of the University :
        All the Institutions (Constituent / Govt. / Govt. Aided and Self-Financing) under Anna University are divided into Nineteen Zones, each zone involving around 25-30 colleges. Every zone has Zonal Sports Coordinator responsible for the sports activities of the zone.<br><br>
        Conduct of Sports & Games :
        The various Sports and Games are categorized under Nineteen Zone, and One-Zone basis, depending upon the expected participation and infrastructure requirements. The Zonal tournaments are followed by Inter-zonal tournaments.<br><br>
        University Teams :
        For Sports and Games under Nineteen-Zone basis, the Zonal tournaments are conducted in all the Nineteen Zones, followed by Inter-Zonal tournaments. The University Team Selection Committee will select the University team based on the performance of players in the Inter-Zone / One-zone / Two-Zone basis tournaments. The selected University teams will participate in coaching camps prior their participation in Inter-University tournaments.<br><br><br>
        <video autoplay muted controls>
            <source src="videoplayback.mp4" type="video/mp4">
            <source src="videoplayback.mp4" type="video/ogg">
          Your browser does not support the video tag.
          </video><br><br>
        Paralympic Sports Meet :
        To take care of the physically challenged students of Anna University who have interest in sports and games, special tournaments are organized once in a year, under one-zone basis, in athletics and other games, depending on the entries received.<br><br>
        Annual Sports Award Function :
        The Anna University Sports Board organizes the Annual Sports Award Function to honour the outstanding sportspersons of Anna University with special trophies for their achievements in Inter-University / National / Inter-National tournaments. The best performing colleges at Zonal level and Inter-Zonal level will be honored with Championship trophies during the Award function.<br><br>
        National Sports Organization :
        Anna University strives constantly in total personality development of all its students so that they can serve the community towards its advancement. In this direction, as part of Regulations 2005, all the undergraduate students should enroll on admission to one of the character development programmes, namely National Cadet Corps (N.C.C.), Youth Red Cross ( Y R C) National Social Service (N.S.S.) and National Sports Organization (N.S.O.) under the personality Character Development Programme. Over the years, we have found that these activities have brought discernible change in the attitude of students only towards their fellow but also towards values of life.<br><br>
        Activities of N.S.O. Students :
        The N.S.O programme is divided into two parts.<br><br>
        Regular Activities :
        (Regular Sports Classes are conducted in the evening on all working days between 5.00 p.m. to 6.15 p.m. A Comprehensive sports schedule is in practices, which includes fitness, training, coaching in Sports & Games. It is mandatory for all the NSO students to have atleast 80 hours of attendance to enroll themselves in the NSO camp which will be conducted at the end of the academic year.<br><br>
        Residential Camp :
        (The camp is conducted for all NSO students for about ten days, during which the students are made to undergo training in specific sports and games. Activities such as Yoga, First Aid, Swimming are also given due importance. Inter-group competition are also held during the camp to inculcate the spirit of Sportsmanship. The camp programme generally organized during 3rd and 4th week June. The coaches / Experts are deputed from Sports Authority of India / SDAT and reputed institutions.<br><br>
        Campus Sports Day :
        Campus intramural activities will commence from February 1st week every year. Students are divided into different houses. Activities including all major games will be organized in the evenings and on holidays. Track and field events will be conducted on the Sports Day which takes place usually during the month of March. Sports activities for staff will also be conducted on the Sports day.<br></p1>   
    </section>
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