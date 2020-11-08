<?php
include 'contact_process.php';
$name = $_POST['name'];
$city= $_POST['city'];
$email= $_POST['email'];
$mobile= $_POST['mobile'];
$subject=$_POST['subject'];
$message=$_POST['message'];
//database connection
$conn= new mysqli("localhost:3306","sapphiretechaxex","Ranchi@1234","sapphire_Patient_enquiry");
if($conn->connect_error)
{
	die("connection failed :".$conn->connect_error);
}
else
{
	$stmt = $conn->prepare("INSERT INTO test (name, city, email,mobile,subject,message) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssiss", $name, $city, $email,$mobile,$subject,$message);
$stmt->execute();



echo "New records created successfully";

$stmt->close();
$conn->close();
}
?>