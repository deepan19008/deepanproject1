<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$host ="ec2-54-80-123-146.compute-1.amazonaws.com"
$port =" port = 5432"
$dbname ="dbname = ddsl9pla6h27mg"
$credentials =" user =fntsobzwoyzyaw  password =3624487efd8e4ca9c949f1ab99654ad1e4de854f41a14afd00f3ca82d808dc8c"
$con = pg_connect( "$host $port $dbname $credentials");

// get the post records
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (fldName, fldEmail, fldPhone, fldMessage) VALUES ('$txtName', '$txtEmail', '$txtPhone', '$txtMessage');";

// insert in database 
$rs = pg_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}else{
echo "Contact not Inserted";
}

?>
