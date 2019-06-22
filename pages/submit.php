<?php 
	include "connection.php";
?>
<?php
$db_name = 'icfai';
$name = $_POST['first_name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$dob = $_POST['dob'];
$branch = $_POST['branch'];
$gender = $_POST['gender'];
$course = $_POST['course'];

mysql_select_db($db_name);
$query= mysql_query("INSERT INTO 'student' (name,email,contact,dob,branch,gender,course) VALUES ('$name','$branch','$contact','$dob','$branch','$gender','$course')");
$result = mysql_query($query, $con);
if (!$result){
	die('could not enter data:'.mysql_error());
}
else {
	echo "data enter successfully ";
}



?>