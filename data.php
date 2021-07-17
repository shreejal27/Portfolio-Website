<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','myportfolio');
if (mysqli_connect_errno()) {
    echo  mysqli_connect_error();
} else {
    //echo "connected";
}


// get the post records
$txtfirstName = $_POST['firstName'];
$txtlastName = $_POST['lastName'];
$txtemail = $_POST['email'];
$txtsubject = $_POST['subject'];
$txtmessage = $_POST['message'];

// database insert SQL code
$sql = "INSERT INTO personalinfo (firstName, lastName, email, subject, message) VALUES ('$txtfirstName', '$txtlastName', '$txtemail', '$txtsubject', '$txtmessage')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
    //return to contact form 
} else {
    echo mysqli_error($con);
}

?>