<!DOCTYPE html><!-- Using HTML5 -->

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=us-ascii" />
    <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
    <!-- Using external style sheet -->
    <title>Looking for another Major or possible Minors?</title>
    <!-- Includes the external Javascript -->
    <!--   <script src="Scripts/slideImg.js" type="text/javascript"></script> -->
    <script src="Scripts/about.js" type="text/javascript"></script>
    <script src="Scripts/login.js" type="text/javascript"></script>
    <!--    <script src="Scripts/select.js" type="text/javascript"></script> -->
    <script src="Scripts/select2.js" type="text/javascript"></script>
    <script type="text/javascript">
      function toggleview(element1) {

      element1 = document.getElementById(element1);

      if (element1.style.display == 'block' || element1.style.display == '')
      element1.style.display = 'none';
      else
      element1.style.display = 'block';

      return;
      }
    </script>
  </head>
  <!-- Loads the slideshow script -->
<?php
session_start();
if($_SESSION['major']!=true){
?>
  <body>
<?php
}
else{
$blah = "<body onLoad=" . "'" . "findMajor(";
$blah2 = '"' . $_SESSION['major'] . '"';
$blah3 = ")" . "'" . ">";
$blah4 = $blah . $blah2 . $blah3;
echo $blah4;
}
?>
    <div id="wrapper">
      <div id="header">
	<div id="logo">
	  <h1><a href="index.php">mor <span style="font-size:16px;"> Discover related minors and plan your schedule!</span></a></h1>
	</div>
      </div>
      <ul id="menu">
	<li><a href="index.php">Home</a></li>
	<li class="current_page_item"><a href="#">Start Planning</a>
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
	  <h2 class="Title">Course Browser</h2>

	  <form>
	    <select name="Major" onchange="findMajor(this.value)">
	      <option value="default" selected="selected">Please select a major</option>
	      <option value="Aerospace Engineering">Aerospace Engineering</option>
	      <option value="Computer Science">Computer Science</option>
	      <option value="Computer Engineering">Computer Engineering</option>
	      <option value="Electrical Engineering">Electrical Engineering</option>
	      <option value="Mechanical Engineering">Mechanical Engineering</option>
	    </select>
	  </form>
	  <div align="center">
	    <hr />
	    <div id="stuffToReplaceWithAJAX"><b>Once you have chosen a course above, the space below will be populated with majors sorted by the number of overlapping courses in relation to the major you have selected.</b></div>

	    <!-- Javascript hard coded select. Deprecated.
		 <select name="Major" onchange="changeMajor(this.value)">
		   <option value="default" selected="selected">Please select a major</option>
		   <option value="BS Computer Science">B.S. Computer Science</option>
		   <option value="BS Computer Engineering">Computer Engineering</option>
		   <option value="BS Electrical Engineering">Electrical Engineering</option>
		 </select>

		 <div class="title">
		   <table id="Majors">
		     <tbody>
		       <tr><td colspan="3"><h3>Overlapping Courses</h3></td>
		       <tr><td>Course Number</td><td>Course Name</td><td>Major</td></tr>
		     </tbody>
		   </table>
		 </div>
		 -->
	  </div>
	</div>

	<?php include "sidefooter.php"; ?> 
      </div>
    </div>
  </body>
  <!-- end #footer -->
</html>
