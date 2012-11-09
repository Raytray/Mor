<!DOCTYPE html><!-- Using HTML5 -->

<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=us-ascii" />
        <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
        <!-- Using external style sheet -->
        <title>Looking for another Major or possible Minors?</title>
        <!-- Includes the external Javascript -->
        <script src="Scripts/slideImg.js" type="text/javascript"></script>
        <script src="Scripts/about.js" type="text/javascript"></script>
    </head>
    <!-- Loads the slideshow script -->
    <body onLoad="switchImage('slideImg'); imagerollover()">
        <div id="wrapper">
            <div id="header">
                <div id="logo">
                    <h1><a href="index.html">mor <span style="font-size:16px;"> Discover related minors and plan your schedule!</span></a></h1>
                </div>
            </div>
            <ul id="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Start Planning</a>
                <ul>
                    <li class="last"><a href="select.php">Discover</a></li>
                    <li class="last"><a href="#">Plan</a></li>
                </ul>
                </li>
                <li><a href="links.php">Useful Links</a></li>
                <li><a href="login.php">Login</a></li>
                <li class="last current_page_item"><a href="about.php">About</a></li>
            </ul>
            <div id="page"> 
                <div id="content" class="post">
                    <h2 class="Title">About</h2>
                    <div align="center">
                        <h3 class="Richard">Richard</h3>
                        <img src="Images/Richard1.jpg" id="RichardImage" data-over="Images/Richard2.jpg" data-out="Images/Richard1.jpg" alt="Richard"/>
                        <p>Richard is the Ultimate Badass, and just some guy. At the same time.</p>
                        <h3 class="Raymond">Raymond</h3>
                        <img src="Images/Raymond1.jpg" id="RaymondImage" data-over="Images/Raymond2.jpg" data-out="Images/Raymond1.jpg" alt="Raymond" />
                        <p>Raymond plays Ultimate, and is just some guy. Usually at the same time.</p>
                    </div>
                </div>
			<?php include 'sidefooter.php'; ?>
                
        </div>
    </body>
    <!-- end #footer -->
</html>
