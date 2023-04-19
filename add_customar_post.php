<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'garments-management';


$db_connection = mysqli_connect($hostname,$username,$password,$dbname);
// Check connection


$name = $_POST['fname'];
$contact_number = $_POST['contact_number'];
$address = $_POST['address'];
$doctors_name = $_POST['company_name'];
$doctors_address = $_POST['company_address'];

$insert_query = "INSERT INTO customers (NAME, CONTACT_NUMBER, ADDRESS, COMPANY_NAME, COMPANY_ADDRESS) VALUES('$name', '$contact_number', '$address', '$doctors_name', '$doctors_address')";
$result = mysqli_query($db_connection,$insert_query);
 // $_SESSION['send'] ="Customer Add successful!";
 // header("location:add_new_customer.php");
 //echo "Done!";
 if(!empty($result))
 echo "$name added...";
else
 echo "Failed to add $name!";

?>
