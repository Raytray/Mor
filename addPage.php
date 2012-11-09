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
        <script src="Scripts/login.js" type="text/javascript"></script>
    </head>
    <!-- Loads the slideshow script -->
    <body onLoad="switchImage('slideImg'); imagerollover()">
        <div id="wrapper">
            <div id="header">
                <div id="logo">
                    <h1><a href="index.php">mor <span style="font-size:16px;"> Discover related minors and plan your schedule!</span></a></h1>
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
                <li class="current_page_item"><a href="login.php">Login</a></li>
                <li class="last"><a href="about.php">About</a></li>
            </ul>
            <div id="page"> 
                <div id="content" class="post">
                    <h2 class="Title">Login</h2>
                    <div align="center">

                        <form action="add.php" method="post"><br />
                            <b style="font-size:150%;">Add Course</b><br />
                            Course Short Name and 4 digit number: <input type="text" name="courseshortname" value="CS2110" /><br />
			    Course Long Name: <input type="text" name="courselongname" value="Software Development Methods" /><br />
			    Course's Associated Majors: <input type="text" name="majors" value="Computer Science, Computer Engineering, Electrical Engineering, Systems Engineering" /><br />
                            <input type="submit" value="Submit"/>
                            <br /><br />
                        </form>

                    </div>
                </div>

            <?php include 'sidefooter.php'; ?>
        </div>
    </body>
    <!-- end #footer -->
</html>
