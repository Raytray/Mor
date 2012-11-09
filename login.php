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
                    <h1><a href="index.html">mor <span style="font-size:16px;"> Discover related minors and plan your schedule!</span></a></h1>
                </div>
            </div>
            <ul id="menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Start Planning</a>
                <ul>
                    <li class="last"><a href="select.html">Discover</a></li>
                    <li class="last"><a href="#">Plan</a></li>
                </ul>
                </li>
                <li><a href="links.html">Useful Links</a></li>
                <li class="current_page_item"><a href="login.html">Login</a></li>
                <li class="last"><a href="about.html">About</a></li>
            </ul>
            <div id="page"> 
                <div id="content" class="post">
                    <h2 class="Title">Login</h2>
                    <div align="center">
                        <?php
                        if($_SESSION['loggedIn']!=true){
                        ?>
                        <form action="signin.php" method="post"><br />
                            <b style="font-size:150%;">Log in</b><br />
                            Email: <input type="email" name="email"/><br />
                            Password: <input type="password" name="password"/><br />
                            <input type="submit" value="Log in"/>
                            <br /><br />

                            Don't have an account?

                        </form>
                        <form action="register.php" method="post"><br/>
                            <b style="font-size:150%;">Register</b><br/>
                            Email: <input type="email" name="email"/><br/>
                            Password: <input type="password" name="password"/><br/>
                            Retype password: <input type="password" name="retype-password"/><br />
                            <input type="submit" value="Register" />
                        </form>
                        <?php
                        }
                        else
                        echo "<button type = 'button'>Log Out</button>";
                        ?>
                    </div>
                </div>

                <div id="sidebar">
                    <ul>
                        <li>
                        <div id="search" >
                            <input type="text" placeholder="search..." name="s" id="search-text"/>
                            <input type="submit" id="search-submit" value="GO"/>
                        </div>
                        </li>
                        <li>
                        <h2>Popular Majors</h2>
                        <ol>
                            <li><a href="#">B.S. Computer Science</a></li>
                            <li><a href="#">B.A. Music</a></li>
                            <li><a href="#">B.A. Economics</a></li>
                            <li><a href="#">B.S. Biology</a></li>
                            <li><a href="#">B.S. Mechanical Engineering</a></li>
                            <li><a href="#">B.A. Art History</a></li>
                        </ol>
                        </li>
                        <li>
                        <h2>Popular Minors</h2>
                        <ol>
                            <li><a href="#">Engineering Business</a></li>
                            <li><a href="#">Economics</a></li>
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">History</a></li>
                            <li><a href="#">Chinese</a></li>
                            <li><a href="#">Computer Science</a></li>
                        </ol>
                        </li>
                    </ul>
                    <img id="slideImg" src="Images/01.jpg" width="275" height="165" alt="Slide show" />

                </div>
            </div>
            <div id="footer">
                <p>This is a website created by Richard Li and Raymond Tang for CS 4753 ECommerce</p>
                <p>Copyright (c) 2012. All rights reserved.</p>
            </div>
        </div>
    </body>
    <!-- end #footer -->
</html>
