<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="CSS/registration.css">
</head>
<body>
<?php
if(!empty($_POST['submit'])){

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$dob= strval($_POST['dob_d']) . "-" . strval($_POST['dob_m']) . "-" . strval($_POST['dob_y']);
//$dob = date('d-m-Y', strtotime($dob_str));

//Database Connection
$conn = new mysqli('localhost','root','','test');
 if($conn->connect_error){
  die('Connection failed :' .$conn->connect_error);
 }else {
  $stmt = $conn->prepare("insert into registration (firstname,lastname,gender,email,password,dob) 
  values(?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("ssssss",$firstname,$lastname,$gender,$email,$password,$dob);
  $stmt->execute();
    echo "registration succesful....";
    echo "FirstName - " . $firstname . " LastName - " . $lastname . "email - " . $email . "password - " . $password . "gender -" . $gender .  "dob - " . $dob;
    
    $stmt->close();
    $conn->close();
    header("index.php");
 }
}
?>



<form action="index.php" method="post" class="box">
 <div>
  <h1>REGISTRATION</h1>
   <p><b>
      <input id="First" type="text" name="firstname" size="30" placeholder="First Name" required></b></p>
   
   
   <p><b>
    <input id="Last" type="text" name="lastname" size="30" placeholder="Last Name" required></b></p>
   
   <p><b><input id="email" type="Email" name="email" placeholder="Email" size="30" required></b></p>
   
   <p><b><input id="pass" type="password" name="password" size="20"  placeholder="Password" required></b></p>
   
   <b>
    <label style="color: white; font-size:20px ">Male</label><input id="gender" type="radio" name="gender" value="male" required >
     <label style="color: white; font-size:20px ">Female</label><input id="" type="radio" name="gender" value="female" required>
     <label style="color: white; font-size:20px ">Others</label><input id="" type="radio" name="gender" value="others" required>
<p><b></b>
<input  type="name" name="dob_d" size="05" placeholder="Date" required>
<select class="select" size="1" name="dob_m" required>
  
  <option>Month</option>
  <option value="01">January</option>
  <option value="02">February</option>
  <option value="03">March</option> 
  <option value="04">April</option>
  <option value="05">May</option>
  <option value="06">June</option>
  <option value="07">July</option>
  <option value="08">August</option>
  <option value="09">September</option>
  <option value="10">October</option>
  <option value="11">November</option>
  <option value="12">December</option> 
</select>
<input type="text" name="dob_y" size="10" placeholder="Year" required></p>
 <p><input type="submit" name="submit"></p>
</div>
</form>
</body>
</html>