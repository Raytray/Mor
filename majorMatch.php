<?php

class major
{
  public $name;
  public $courseID = array();
  public $courseName = array();
}
$myMajor = $_GET["myMajor"];
$majors = array();

mysql_connect('mysql6.000webhost.com', 'a6519930_user', 'ecommerce2012')
or die ("Could not connect to mysql because ".mysql_error());
mysql_select_db('a6519930_base')
or die("Could not select database because ".mysql_error());

$result = mysql_query("SELECT * from courses");
while($row = mysql_fetch_array($result)){
  $found = false;
  $majorList = explode(", ", $row['majors']);
  foreach($majorList as $i){
    if($i == $myMajor) {
      $found=true;
      break;
    }
  }
    if($found){

        foreach($majorList as $i){
            if($i!=$myMajor){
                if(!array_key_exists($i, $majors)){//if major isnt in the array, add it.
                    $temp = new major();
                    $temp -> name = $i;
                    $majors[$i]=$temp;
                }
                $majors[$i] -> courseID[]=$row['id'];
                $majors[$i] -> courseName[]=$row['name'];
            }
        }
    }
}

foreach($majors as &$i){
$blah = $i->name;
    echo "<h3> $blah </h3>
      <table border='1'>
      <tr>
      <th>Course ID</th>
      <th>Course Name</th>
      </tr>";
for($j = 0; $j < sizeof($i -> courseName); $j++)
{
echo "<tr>";
echo "<td>" . $i -> courseID[$j] . "</td>";
echo "<td>" . $i -> courseName[$j] . "</td>";
echo "</tr>";
}
echo "</table>";	
echo "<br />";
}


?>
