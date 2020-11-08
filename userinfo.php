
<?php
include 'contact_process.php';
$con=mysqli_connect("localhost:3306","sapphiretechaxex","Ranchi@1234");

if($con)
{
	echo "connection successful";
}
else
{
	echo "no connection";
}
mysqli_select_db($con,'sapphire_Patient_enquiry');
$name = $_POST['name'];
$city= $_POST['city'];
$email= $_POST['email'];
$mobile= $_POST['mobile'];
$subject=$_POST['subject'];
$message=$_POST['message'];


$query="insert into user (name,city,email,mobile,subject,message) values('$name','$city','$email','$mobile','$subject','$message')";
mysqli_query($con,$query);
header('location:index.html');
?>