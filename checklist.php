<?php include('include/config.php'); ?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet">
<a href="index.html">Back to Home</a>
</head>
<body>
<h1>Course Checklist</h1>

<div>
        <label for="majors">Select the major you want to view: </label>
        <select name="majors" id="majors">
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
                <option value="Sociology">Sociology</option>
                <option value="Spanish">Spanish</option>
                <option value="Studio Art">Studio Art</option>
                <option value="Theater">Theater</option>
                <option value="Writing">Writing</option>
        </select>
        <br>
</div>

<div><br>
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
                echo "<tr><td>". $row["majorname"] ."</td><td>". $row["credits"] ."</td><td><input type='checkbox' name='check'[".$row['ID']."]'></td></tr>";
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
<button name="submit"  id="submit" type="button">Submit</button>

<p>Total credits in this major: </p>
<span id="result"></span>
</body>
</html>

