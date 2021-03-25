<?php include('include/config.php'); ?>
<html>
 <head>
 <link rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script type="text/javascript" defer>
function toggleMajors() {
    if ($("#majors").val() === "Accounting") {$("#acct").show();}
    else if ($("#majors").val() != "Accounting") {$("#acct").hide();}
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
		<option disabled selected>-- Select Major --</option>
                <option value="Accounting">Accounting</option>
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
 		<option value="Social Work">Social Work</option>
                <option value="Sociology">Sociology</option>
                <option value="Spanish">Spanish</option>
                <option value="Studio Art">Studio Art</option>
                <option value="Theater">Theater</option>
                <option value="Writing">Writing</option>
        <input type="submit" name="submit" value="Submit" onclick="toggleMajors()">
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
</div>
</table>
 </body>
</html>
