
<?php include('include/config.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>Checklist</title>
<link href="css/style.css" rel="stylesheet">
</head>

<style>
html {
  height: 100%;
}
body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  background: rgb(255,255,255);
  background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(203,252,255,1) 100%);

}

table { 
  border-collapse: collapse; 
}

tr:nth-of-type(odd) { 
  background: #eee; 
}
tr:nth-of-type(even) { 
  background: #fff; 
}

th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: center; 
}

img {
max-width: 100%;
height: auto;
}

.header {
  background: #133c8b;
  height: auto;
  max-width: 100%;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  width: 100%;
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
  text-align: center;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

 table, th, td {
border: 1px solid black;
}

table {
border-collapse: collapse;
}

td {
text-align: center;
}

div.b {
  font-size: 125%;
}

select {
  height: 35px;
}

.myButton {
	box-shadow:inset 0px 1px 0px 0px #fff6af;
	background:linear-gradient(to bottom, #ffec64 5%, #ffab23 100%);
	background-color:#ffec64;
	border-radius:6px;
	border:1px solid #ffaa22;
	display:inline-block;
	cursor:pointer;
	color:#333333;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #ffee66;
}
.myButton:hover {
	background:linear-gradient(to bottom, #ffab23 5%, #ffec64 100%);
	background-color:#ffab23;
}
.myButton:active {
	position:relative;
	top:1px;
}


</style>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script type="text/javascript" defer>

$(document).ready(function () {
    toggleMajors();
    $("#majors").change(function () {
     toggleMajors();
   });
});

function toggleMajors() {
    if ($("#majors").val() === "Blank") {$("#blank").show();}
    else if ($("#majors").val() != "Blank") {$("#blank").hide();}
    if ($("#majors").val() === "acct") {$("#acct").show();}
    else if ($("#majors").val() != "acct") {$("#acct").hide();}
    if ($("#majors").val() === "amst") {$("#amst").show();}
    else if ($("#majors").val() != "amst") {$("#amst").hide();}
    if ($("#majors").val() === "anth") {$("#anth").show();}
    else if ($("#majors").val() != "anth") {$("#anth").hide();}
    if ($("#majors").val() === "aphys") {$("#aphys").show();}
    else if ($("#majors").val() != "aphys") {$("#aphys").hide();}
    if ($("#majors").val() === "arthist") {$("#arthist").show();}
    else if ($("#majors").val() != "arthist") {$("#arthist").hide();}
    if ($("#majors").val() === "biochem") {$("#biochem").show();}
    else if ($("#majors").val() != "biochem") {$("#biochem").hide();}
    if ($("#majors").val() === "bio") {$("#bio").show();}
    else if ($("#majors").val() != "bio") {$("#bio").hide();}
    if ($("#majors").val() === "chem") {$("#chem").show();}
    else if ($("#majors").val() != "chem") {$("#chem").hide();}
    if ($("#majors").val() === "clst") {$("#clst").show();}
    else if ($("#majors").val() != "clst") {$("#clst").hide();}
    if ($("#majors").val() === "comm") {$("#comm").show();}
    else if ($("#majors").val() != "comm") {$("#comm").hide();}
    if ($("#majors").val() === "compengr") {$("#compengr").show();}
    else if ($("#majors").val() != "compengr") {$("#compengr").hide();}
    if ($("#majors").val() === "compsci") {$("#compsci").show();}
    else if ($("#majors").val() != "compsci") {$("#compsci").hide();}
    if ($("#majors").val() === "crime") {$("#crime").show();}
    else if ($("#majors").val() != "crime") {$("#crime").hide();}
    if ($("#majors").val() === "cyber") {$("#cyber").show();}
    else if ($("#majors").val() != "cyber") {$("#cyber").hide();}
    if ($("#majors").val() === "econ") {$("#econ").show();}
    else if ($("#majors").val() != "econ") {$("#econ").hide();}
    if ($("#majors").val() === "elec") {$("#elec").show();}
    else if ($("#majors").val() != "elec") {$("#elec").hide();}
    if ($("#majors").val() === "engl") {$("#engl").show();}
    else if ($("#majors").val() != "engl") {$("#engl").hide();}
    if ($("#majors").val() === "enviro") {$("#enviro").show();}
    else if ($("#majors").val() != "enviro") {$("#enviro").hide();}
    if ($("#majors").val() === "finance") {$("#finance").show();}
    else if ($("#majors").val() != "finance") {$("#finance").hide();}
    if ($("#majors").val() === "french") {$("#french").show();}
    else if ($("#majors").val() != "french") {$("#french").hide();}
    if ($("#majors").val() === "german") {$("#german").show();}
    else if ($("#majors").val() != "german") {$("#german").hide();}
    if ($("#majors").val() === "hist") {$("#hist").show();}
    else if ($("#majors").val() != "hist") {$("#hist").hide();}
    if ($("#majors").val() === "infosci") {$("#infosci").show();}
    else if ($("#majors").val() != "infosci") {$("#infosci").hide();}
    if ($("#majors").val() === "idst") {$("#idst").show();}
    else if ($("#majors").val() != "idst") {$("#idst").hide();}
    if ($("#majors").val() === "management") {$("#management").show();}
    else if ($("#majors").val() != "management") {$("#management").hide();}
    if ($("#majors").val() === "marketing") {$("#marketing").show();}
    else if ($("#majors").val() != "marketing") {$("#marketing").hide();}
    if ($("#majors").val() === "math") {$("#math").show();}
    else if ($("#majors").val() != "math") {$("#math").hide();}
    if ($("#majors").val() === "mathcomp") {$("#mathcomp").show();}
    else if ($("#majors").val() != "mathcomp") {$("#mathcomp").hide();}
    if ($("#majors").val() === "music") {$("#music").show();}
    else if ($("#majors").val() != "music") {$("#music").hide();}
    if ($("#majors").val() === "neuro") {$("#neuro").show();}
    else if ($("#majors").val() != "neuro") {$("#neuro").hide();}
    if ($("#majors").val() === "phil") {$("#phil").show();}
    else if ($("#majors").val() != "phil") {$("#phil").hide();}
    if ($("#majors").val() === "polisci") {$("#polisci").show();}
    else if ($("#majors").val() != "polisci") {$("#polisci").hide();}
    if ($("#majors").val() === "psych") {$("#psych").show();}
    else if ($("#majors").val() != "psych") {$("#psych").hide();}
    if ($("#majors").val() === "social") {$("#social").show();}
    else if ($("#majors").val() != "social") {$("#social").hide();}
    if ($("#majors").val() === "socl") {$("#socl").show();}
    else if ($("#majors").val() != "socl") {$("#socl").hide();}
    if ($("#majors").val() === "spanish") {$("#spanish").show();}
    else if ($("#majors").val() != "spanish") {$("#spanish").hide();}
    if ($("#majors").val() === "studioart") {$("#studioart").show();}
    else if ($("#majors").val() != "studioart") {$("#studioart").hide();}
    if ($("#majors").val() === "theater1") {$("#theater1").show();}
    else if ($("#majors").val() != "theater1") {$("#theater1").hide();}
    if ($("#majors").val() === "writing") {$("#writing").show();}
    else if ($("#majors").val() != "writing") {$("#writing").hide();}
}

</script>

<link rel="stylesheet">

<div class="header">
<header>
<img src="https://i.imgur.com/T2Xm082.jpg" alt="">
</header>
</div>


<body>
  <div class="topnav">
  <a href="index.html">Home</a>
  <a href="finalgradecalc.html">Final Grade Calculator</a>
  <a href="gpacalc.html">GPA Calculator</a>
  <a href="index.php">Courses for majors</a>
  <a href="checklist.php">Checklist</a>
  <a href="resources.html">Resources</a>
  <a href="help.html">Help</a>
  </div>

<h1>Course Checklist</h1>

<div class="b">
	<p>In this section, you can select the courses you've completed to see how many credits 
	you have under a specific major</p>
	<p>Select the major you want to view: </p>
        <label for="majors"></label>
        <select name="majors" id="majors">
		<option value="Blank">-- Select Major --</option>
                <option value="acct">Accounting</option>
                <option value="amst">American Studies</option>
                <option value="anth">Anthropology</option>
                <option value="aphys">Applied Physics</option>
                <option value="arthist">Art History</option>
                <option value="biochem">Biochemistry</option>
                <option value="bio">Biology (Cellular, Molecular and Physiological)</option>
                <option value="chem">Chemistry</option>
                <option value="clst">Classical Studies</option>
                <option value="comm">Communication Studies</option>
                <option value="compengr">Computer Engineering</option>
                <option value="compsci">Computer Science</option>
                <option value="crime">Criminology</option>
                <option value="cyber">Cybersecurity</option>
                <option value="econ">Economics</option>
                <option value="elec">Electrical Engineering</option>
                <option value="engl">English</option>
                <option value="enviro">Environmental Studies</option>
                <option value="finance">Finance</option>
                <option value="french">French</option>
                <option value="german">German</option>
                <option value="hist">History</option>
                <option value="infosci">Information Science</option>
                <option value="idst">Interdisciplinary Studies</option>
                <option value="management">Management</option>
                <option value="marketing">Marketing</option>
                <option value="math">Mathematics</option>
                <option value="mathcomp">Mathematics-Computational and Applied</option>
                <option value="music">Music (Creative Studies concentration)</option>
                <option value="neuro">Neuroscience</option>
                <option value="phil">Philosophy (Arts concentration)</option>
                <option value="polisci">Political Science</option>
                <option value="psych">Psychology (Arts concentration)</option>
                <option value="social">Social Work</option>
                <option value="socl">Sociology</option>
                <option value="spanish">Spanish</option>
                <option value="studioart">Studio Art</option>
                <option value="theater1">Theater (Acting concentration)</option>
                <option value="writing">Writing</option>
</select>
</div><br>

<div id="acct"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
	  <th>Completed</th>
         </tr>
<?php 

$major = "accounting";
$sql = "SELECT majorname, credits from $major";
$result = $conn-> query($sql);

if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
$conn-> close();


?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit">

<?php
$sum = 0;
if (isset($_POST['submit'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>


<div id="amst"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from americanstudies";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
	}
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit1">

<?php
$sum = 0;
if (isset($_POST['submit1'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>

<div id="anth"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from anthropology";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit2">

<?php
$sum = 0;
if (isset($_POST['submit2'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>

<div id="aphys"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from appliedphysics";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit3">

<?php
$sum = 0;
if (isset($_POST['submit3'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>

<div id="arthist"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from arthistory";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit4">

<?php
$sum = 0;
if (isset($_POST['submit4'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>

<div id="biochem"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from biochem";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit5">

<?php
$sum = 0;
if (isset($_POST['submit5'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>

<div id="bio"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from biology";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit6">

<?php
$sum = 0;
if (isset($_POST['submit6'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>

<div id="chem"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from chemistry";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit7">

<?php
$sum = 0;
if (isset($_POST['submit7'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>

<div id="clst"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from classicalstudies";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit8">

<?php
$sum = 0;
if (isset($_POST['submit8'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>

<div id="comm"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from communications";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit9">

<?php
$sum = 0;
if (isset($_POST['submit9'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>


<div id="compengr"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from compengr";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit10">

<?php
$sum = 0;
if (isset($_POST['submit10'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>

<div id="compsci"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from compsci";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit11">

<?php
$sum = 0;
if (isset($_POST['submit11'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>

<div id="crime"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from criminology";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit12">

<?php
$sum = 0;
if (isset($_POST['submit12'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>


<div id="cyber"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from cybersecurity";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit13">

<?php
$sum = 0;
if (isset($_POST['submit13'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>


<div id="econ"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from econ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit14">

<?php
$sum = 0;
if (isset($_POST['submit14'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>

<div id="elec"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from electricalengr";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit15">

<?php
$sum = 0;
if (isset($_POST['submit15'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>

<div id="engl"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from english";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit16">

<?php
$sum = 0;
if (isset($_POST['submit16'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>

<div id="enviro"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from envrstudies";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit17">

<?php
$sum = 0;
if (isset($_POST['submit17'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>


<div id="finance"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from finance";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit18">

<?php
$sum = 0;
if (isset($_POST['submit18'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>

<div id="french"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from french";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit19">

<?php
$sum = 0;
if (isset($_POST['submit19'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>

<div id="german"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from german";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit20">

<?php
$sum = 0;
if (isset($_POST['submit20'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>

<div id="hist"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from history";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit21">

<?php
$sum = 0;
if (isset($_POST['submit21'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>

<div id="infosci"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from infosci";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit22">

<?php
$sum = 0;
if (isset($_POST['submit22'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>

<div id="idst"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from idstudies";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit23">

<?php
$sum = 0;
if (isset($_POST['submit23'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>

<div id="management"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from management";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit24">

<?php
$sum = 0;
if (isset($_POST['submit24'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>

<div id="marketing"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from marketing";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit25">

<?php
$sum = 0;
if (isset($_POST['submit25'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>

<div id="math"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from math";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit26">

<?php
$sum = 0;
if (isset($_POST['submit26'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>

<div id="mathcomp"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from mathcomp";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit27">

<?php
$sum = 0;
if (isset($_POST['submit27'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>

<div id="music"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from music";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit28">

<?php
$sum = 0;
if (isset($_POST['submit28'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>

<div id="neuro"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from neuroscience";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit29">

<?php
$sum = 0;
if (isset($_POST['submit29'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>

<div id="phil"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from philosophy1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit30">

<?php
$sum = 0;
if (isset($_POST['submit30'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>

<div id="polisci"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from polisci";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit31">

<?php
$sum = 0;
if (isset($_POST['submit31'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>

<div id="psych"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from psych";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit32">

<?php
$sum = 0;
if (isset($_POST['submit32'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>

<div id="social"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from socialwork";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit33">

<?php
$sum = 0;
if (isset($_POST['submit33'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>

<div id="socl"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from sociology";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit34">

<?php
$sum = 0;
if (isset($_POST['submit34'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>

<div id="spanish"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from spanish";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit36">

<?php
$sum = 0;
if (isset($_POST['submit36'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>

<div id="studioart"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from studioart";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit37">

<?php
$sum = 0;
if (isset($_POST['submit37'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>

<div id="theater1"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from theater1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit38">

<?php
$sum = 0;
if (isset($_POST['submit38'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>

<div id="writing"><br>
<form method="post" action="">
        <table>
         <tr>
          <th>Name</th>
          <th>Credits</th>
          <th>Completed</th>
         </tr>
<?php 

$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if (!$conn) {
        die("Connection failed:". mysqli_connect_error());
} 

$sql = "SELECT majorname, prereqs, credits, passfail from writing";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' value= " . $row["credits"] . " [".$row['ID']."]'></td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
<input type="submit" class="myButton" value="Submit" name="submit39">

<?php
$sum = 0;
if (isset($_POST['submit39'])) {
    $sum = array_sum($_POST['check_list']);
    echo "<br>Total credits in this major: ".$sum;
}
?>
</form>
</div>

<span id="result"></span>

</body>
</html>

