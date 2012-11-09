<!DOCTYPE html><!-- Using HTML5 -->

<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=us-ascii" />
        <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
        <!-- Using external style sheet -->
        <title>Looking for another Major or possible Minors?</title>
        <!-- Includes the external Javascript -->
        <script src="Scripts/slideImg.js" type="text/javascript" >
        </script>
    </head>
    <!-- Loads the slideshow script -->
    <body onLoad="switchImage('slideImg')">
        <div id="wrapper">
            <div id="header">
                <div id="logo">
                    <h1><a href="index.php">mor <span style="font-size:16px;"> Discover related minors and plan your schedule!</span></a></h1>
                </div>
            </div>
            <ul id="menu">
                <li class="current_page_item"><a href="index.php">Home</a></li>
                <li><a href="#">Start Planning</a>
                <ul>
                    <li class="last"><a href="select.php">Discover</a></li>
                    <li class="last"><a href="#">Plan</a></li>
                </ul>
                </li>
                <li><a href="links.php">Useful Links</a></li>
                <li><a href="login.php">Login</a></li>
                <li class="last"><a href="about.php">About</a></li>
            </ul>
            <div id="page"> 
                <div id="content" class="post">
                    <h2 class="title">News</h2>
                    <p class="entry">This website is designed to help answer the question "How many more classes do I need to do another major/minor? What major/minor would be the simplist to complete?" Currently this site allows this by allowing the user to select a major, and from there determine what other majors/minors overlap with their current major the most.</p>
                    <p class="entry">The website is still in development, please contact us if you there are any problems questions or concerns!</p>
                </div>

               <?php include 'sidefooter.php'; ?>
        </div>
    </body>
    <!-- end #footer -->
</html>

