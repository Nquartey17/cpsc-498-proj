<?php
$conn = mysqli_connect("aws-cnust.cofzpvijmwpq.us-east-1.rds.amazonaws.com","admin","NKQ6219!","majors", 3306 );
if ($conn-> connect_error) {
        die("Connection failed:". $conn-> connect_error);
} 

?>

