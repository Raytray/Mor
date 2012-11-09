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
                    <h2 class="Title">Account</h2>
                    <div align="center">
                        <?php
                        session_start();
                        if($_SESSION['loggedIn']!=true){
                        ?>
                        <form action="signin.php" method="post"><br />
                            <b style="font-size:150%;">Account</b><br />
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
                        else{ ?>
                        <form action="logout.php" method="post"><br/>
                          <input type="submit" value="Log Out" />
                        </form><br />
                        <form action="newPass.php" method="post"><br/>
                            <b style="font-size:150%;">Change Password</b><br/>
                            Old: <input type="password" name="Old Password"/><br/>
                            New: <input type="password" name="New Password"/><br/>
                            Retype: <input type="password" name="retype-password"/><br />
                            <input type="submit" value="Change" />
                        </form>

<br /> <br />
                        <form action="delete.php" method="post"><br/>
                            <b style="font-size:150%;">Delete Account</b><br/>
                            Password: <input type="password" name="password" value="Are you sure?" /><br/>
                            <input type="submit" value="Delete Account" />
                        </form>

                        
                        <?php } ?>
                        <?php
                        session_start(); 
                        if(isset($_SESSION['message'])){
                            echo $_SESSION['message'];
                            unset($_SESSION['message']);
                        }
                        ?>
                    </div>
                </div>

            <?php include 'sidefooter.php'; ?>
    <!-- end #footer -->
        </div>
    </body>
</html>
