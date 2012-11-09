<?php
session_start();
?>
           <div id="sidebar">
                    <?php 
                    echo '<div align="left"><h3><a href= "#">';
                    if(isset($_SESSION['name'])){
                        echo $_SESSION['name'];
                    }
                    else
                        echo 'guest';
                    echo '</a></h2></div>';
					if($_SESSION['isAdmin']==true){
                    echo '<a href = "addPage.php"> (admin) Add Courses </a>';
                    }
                    echo ' <a href = "#">', $_SESSION['major'], '</a>';
                    ?>


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
