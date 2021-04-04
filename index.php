<?php include('include/config.php'); ?>
<html>
 <head>
 <link rel="stylesheet">
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
}

</script>
 <a href="index.html">Back to Home</a>
  <title>Courses for Majors</title>
  <style type="text/css">
  </style>
 </head>
 <body>
<h1>Courses for Majors</h1>
<div>
        <label for="majors">Select the major you want to view: </label>
        <select name="majors" id="majors">
		<option value="Blank">-- Select Major --</option>
                <option value="acct">Accounting</option>
                <option value="amst">American Studies</option>
                <option value="anth">Anthropology</option>
                <option value="aphys">Applied Physics</option>
                <option value="arthist">Art History</option>
                <option value="biochem">Biochemistry</option>
                <option value="bio">Biology</option>
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
                <option value="infoSys">Information Systems</option>
                <option value="idst">Interdisciplinary Studies</option>
                <option value="management">Management</option>
                <option value="marketing">Marketing</option>
                <option value="math">Mathematics</option>
                <option value="mathmomp">Mathematics-Computational and Applied</option>
                <option value="music">Music</option>
                <option value="neuro">Neuroscience</option>
                <option value="phil">Philosophy</option>
                <option value="polisci">Political Science</option>
                <option value="psych">Psychology</option>
                <option value="scoial">Social Work</option>
                <option value="socl">Sociology</option>
                <option value="spanish">Spanish</option>
                <option value="studioart">Studio Art</option>
                <option value="theater">Theater</option>
                <option value="writing">Writing</option>
</select>
</div><br>

<div id="acct"><br>
	<table>
	 <tr>
	  <th>Name</th>
	  <th>Prerequites/Restrictions</th>
	  <th>Credits</th>
	  <th>Pass/Fail</th>
	 </tr>
<?php 

$sql = "SELECT majorname, prereqs, credits, passfail from accounting";
$result = $conn-> query($sql);

if ($result-> num_rows > 0) {
	while ($row = $result-> fetch_assoc()) {
		echo "<tr><td>". $row["majorname"] ."</td><td>". $row["prereqs"] ."</td><td>". $row["credits"] ."</td><td>". $row["passfail"] ."</td></tr>";
	}
	echo "</table>";
}
else {
	echo "0 result";
}

$conn-> close();
?> 
</table>
</div>


<div id="amst"><br>
        <table>
         <tr>
          <th>Name</th>
          <th>Prerequites/Restrictions</th>
          <th>Credits</th>
          <th>Pass/Fail</th>
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
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["prereqs"] ."</td><td>". $row["credits"] ."</td><td>". $row["passfail"] ."</td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
</div>

<div id="anth"><br>
        <table>
         <tr>
          <th>Name</th>
          <th>Prerequites/Restrictions</th>
          <th>Credits</th>
          <th>Pass/Fail</th>
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
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["prereqs"] ."</td><td>". $row["credits"] ."</td><td>". $row["passfail"] ."</td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
</div>

<div id="aphys"><br>
        <table>
         <tr>
          <th>Name</th>
          <th>Prerequites/Restrictions</th>
          <th>Credits</th>
          <th>Pass/Fail</th>
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
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["prereqs"] ."</td><td>". $row["credits"] ."</td><td>". $row["passfail"] ."</td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
</div>

<div id="arthist"><br>
        <table>
         <tr>
          <th>Name</th>
          <th>Prerequites/Restrictions</th>
          <th>Credits</th>
          <th>Pass/Fail</th>
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
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["prereqs"] ."</td><td>". $row["credits"] ."</td><td>". $row["passfail"] ."</td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
</div>

<div id="biochem"><br>
        <table>
         <tr>
          <th>Name</th>
          <th>Prerequites/Restrictions</th>
          <th>Credits</th>
          <th>Pass/Fail</th>
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
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["prereqs"] ."</td><td>". $row["credits"] ."</td><td>". $row["passfail"] ."</td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
</div>

<div id="bio"><br>
        <table>
         <tr>
          <th>Name</th>
          <th>Prerequites/Restrictions</th>
          <th>Credits</th>
          <th>Pass/Fail</th>
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
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["prereqs"] ."</td><td>". $row["credits"] ."</td><td>". $row["passfail"] ."</td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
</div>

<div id="chem"><br>
        <table>
         <tr>
          <th>Name</th>
          <th>Prerequites/Restrictions</th>
          <th>Credits</th>
          <th>Pass/Fail</th>
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
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["prereqs"] ."</td><td>". $row["credits"] ."</td><td>". $row["passfail"] ."</td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
</div>

<div id="clst"><br>
        <table>
         <tr>
          <th>Name</th>
          <th>Prerequites/Restrictions</th>
          <th>Credits</th>
          <th>Pass/Fail</th>
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
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["prereqs"] ."</td><td>". $row["credits"] ."</td><td>". $row["passfail"] ."</td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
</div>

<div id="comm"><br>
        <table>
         <tr>
          <th>Name</th>
          <th>Prerequites/Restrictions</th>
          <th>Credits</th>
          <th>Pass/Fail</th>
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
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["prereqs"] ."</td><td>". $row["credits"] ."</td><td>". $row["passfail"] ."</td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
</div>

<div id="compengr"><br>
        <table>
         <tr>
          <th>Name</th>
          <th>Prerequites/Restrictions</th>
          <th>Credits</th>
          <th>Pass/Fail</th>
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
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["prereqs"] ."</td><td>". $row["credits"] ."</td><td>". $row["passfail"] ."</td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
</div>

<div id="compsci"><br>
        <table>
         <tr>
          <th>Name</th>
          <th>Prerequites/Restrictions</th>
          <th>Credits</th>
          <th>Pass/Fail</th>
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
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["prereqs"] ."</td><td>". $row["credits"] ."</td><td>". $row["passfail"] ."</td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
</div>

<div id="crime"><br>
        <table>
         <tr>
          <th>Name</th>
          <th>Prerequites/Restrictions</th>
          <th>Credits</th>
          <th>Pass/Fail</th>
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
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["prereqs"] ."</td><td>". $row["credits"] ."</td><td>". $row["passfail"] ."</td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
</div>

<div id="cyber"><br>
        <table>
         <tr>
          <th>Name</th>
          <th>Prerequites/Restrictions</th>
          <th>Credits</th>
          <th>Pass/Fail</th>
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
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["prereqs"] ."</td><td>". $row["credits"] ."</td><td>". $row["passfail"] ."</td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
</div>

<div id="econ"><br>
        <table>
         <tr>
          <th>Name</th>
          <th>Prerequites/Restrictions</th>
          <th>Credits</th>
          <th>Pass/Fail</th>
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
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["prereqs"] ."</td><td>". $row["credits"] ."</td><td>". $row["passfail"] ."</td></tr>";
        }
        echo "</table>";
}
else {
        echo "0 result";
}
mysqli_close($conn);
?> 
</table>
</div>

 </body>
</html>
