<?php
// database connection code
if(isset($_POST['txtUsername']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','footyplay_db');

// get the post records

$txtName = $_POST['txtUsername'];
$txtEmail = $_POST['txtPassword'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `fldUsername`, `fldPassword`) VALUES ('1', '$txtUsername', '$txtPassword')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";

}
?>