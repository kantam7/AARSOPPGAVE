<?php
// Change this to your connection info.
$DATABASE_HOST = '192.168.5.2';
$DATABASE_USER = 'admin';
$DATABASE_PASS = 'admin12345';
$DATABASE_NAME = 'footyplay_db';

// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if(isset($_POST['submit']))
{    
    $issueSubject = $_POST['issueSubject'];
    $issue = $_POST['issue'];

    $sql = "INSERT INTO reportIssue (issueSubject,issue)
    VALUES ('$issueSubject','$issue')";

    if (mysqli_query($con, $sql)) {
       echo "New record has been added successfully !";
    } else {
       echo "Error: " . $sql . ":-" . mysqli_error($con);
    }
    $con->close() ;
}

;
?>