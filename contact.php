<?php
session_start();

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'garments-management';


$db_connection = mysqli_connect($hostname,$username,$password,$dbname);
// Check connection


$name = $_POST['fname'];
$email = $_POST['email'];
$phone_no = $_POST['phone_no'];
$message = $_POST['message'];


$insert_query = "INSERT INTO contact (name, email, phone_no, message) VALUES ('$name ', '$email', '$phone_no', '$message')";
$result = mysqli_query($db_connection,$insert_query);
 // $_SESSION['success'] ="data send successful";
 //header("location:contact_page.php#content");
//echo "Anik";
//$result = mysqli_query($con, $query);
      if(!empty($result))
  	echo "$name added...";
                    
        header( "Loction: /contact_page.php");
        exit(0);
                    
?> 

