<?php include('include/config.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>Checklist</title>
<link href="css/style.css" rel="stylesheet">
</head>

<style>

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
    if ($("#majors").val() === "infoSys") {$("#infoSys").show();}
    else if ($("#majors").val() != "infoSys") {$("#infoSys").hide();}
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


<div>
        <label for="majors">Select the major you want to view: </label>
        <select name="majors" id="majors">
                <option value="acct">Accounting</option>
                <option value="AmericanStudies">American Studies</option>
                <option value="Anthropology">Anthropology</option>
                <option value="AppliedPhysics">Applied Physics</option>
                <option value="ArtHistory">Art History</option>
                <option value="Biochemistry">Biochemistry</option>
                <option value="Biology">Biology</option>
                <option value="Chemistry">Chemistry</option>
                <option value="ClassicalStudies">Classical Studies</option>
                <option value="Comm">Communication Studies</option>
                <option value="CompEngr">Computer Engineering</option>
                <option value="CompSci">Computer Science</option>
                <option value="Crime">Criminology</option>
                <option value="Cyber">Cybersecurity</option>
                <option value="Econ">Economics</option>
                <option value="Elec">Electrical Engineering</option>
                <option value="Engl">English</option>
                <option value="Environment">Environmental Studies</option>
                <option value="Finance">Finance</option>
                <option value="French">French</option>
                <option value="German">German</option>
                <option value="Hist">History</option>
                <option value="InfoSci">Information Science</option>
                <option value="InfoSys">Information Systems</option>
                <option value="Idst">Interdisciplinary Studies</option>
                <option value="Management">Management</option>
                <option value="Marketing">Marketing</option>
                <option value="Math">Mathematics</option>
                <option value="MathComp">Mathematics-Computational and Applied</option>
                <option value="Music">Music</option>
                <option value="Neuro">Neuroscience</option>
                <option value="Philosophy">Philosophy</option>
                <option value="PoliSci">Political Science</option>
                <option value="Psychology">Psychology</option>
                <option value="Social Work">Social Work</option>
                <option value="Sociology">Sociology</option>
                <option value="Spanish">Spanish</option>
                <option value="Studio Art">Studio Art</option>
                <option value="Theater">Theater</option>
                <option value="Writing">Writing</option>
        </select>
        <br>
</div>

<div id="acct"><br>
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
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check_list[]' [".$row['ID']."]'></td></tr>";
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
<button name="submit"  id="sumbit" type="button">Submit</button>

<p>Total credits in this major: </p>
<span id="result"></span>
<?php
if(!empty($_POST['check_list'])) {
    foreach($_POST['check_list'] as $check) {
            echo $check;
    }
}
?>

</body>
</html>

