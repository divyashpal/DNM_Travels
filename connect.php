<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];

//Database Connection
$conn = new mysqli('localhost','root,'','test');
 if($conn->connect_error){
 	die('Connection failed :' .$conn->connect_error);
 }else {
 	$stmt = $conn->prepare("insert into registration (firstname,lastname,gender,email,password,dob) 
 	values(?, ?, ?, ?, ?, ?)");
 	$stmt->bind_param("sssssi",$firstname,$lastname,$gender,$email,$password,$dob);
 	$stmt->execute();
    echo "registration succesfull....";
    $stmt->close();
    $conn->close();
 }
?>