<!DOCTYPE html>
<html>
<head>
	<title>DNM Travels</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="CSS/homepage.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<style>
	html
	 {
	 	scroll-behavior: smooth;
	 }
   

	#section2 {
	}
	#section1{
     }
    #section3{
    }
    #section4{
	}
	#section5{
	}

	</style>
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
    //echo "registration succesful....";
    //echo "FirstName - " . $firstname . " LastName - " . $lastname . "email - " . $email . "password - " . $password . "gender -" . $gender .  "dob - " . $dob;

    $stmt->close();
    $conn->close();
    header("index.php");
 }
}
?>

<div id="section1">

        <ul class="nav justify-content-center" style="background-color: #4834d4;">
         <li class="nav-item">
            <a class="nav-link" style="color: #ecf0f1; font-size: 23px" href="#section1">Home</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" style="color: #ecf0f1; font-size: 23px" href="#section3">Categories</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" style="color: #ecf0f1; font-size: 23px" href="#section5">About Us</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" style="color: #ecf0f1; font-size: 23px" href="#section4" >Contact Us</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" style="color: #ecf0f1; font-size: 23px" href="login.php" >Login</a>
          </li>  
        </ul>    
		<!--<div class="search">
		 <form action="#">
		  <input type="text"
			placeholder="Search Places"
			name="search">
		   <button>
			<i class="search" style="font-size: 18px;">
			</i>
			search
		   </button>
		 </form>
	    </div>-->
</div>
<div class="main" id="image">
     <img src="images/front/dallake.png" class="img-fluid" alt="Dal lake">
	<a href="#section2">
		<button class="btn btn-outline-primary btn-lg" style="font-family:cursive;">EXPLORE</button>
	</a>
	<div class="container">
	  <p class="name"  >-DNM Travels-</p>
	  <p class="para" >"One's Destination Is Never A Place, But A New Way Of Seeing Things"</p>
	  <p class="para1" >-Henry Miller-</p>
   </div>
 </div>
</div><!--section1-->

<!--Second page-->
<div id="section3">
 <div id="section2">
  <div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6">
			<img src="images/categories/adventure.png" alt="Adventure" class="img-fluid img-thumbnail" >
			<a href="adventure.php">
			<button class="container btn-outline-primary" style="font-family:cursive; outline: none;">ADVENTURE</button>
		    </a>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6">
			<img src="images/categories/festival.png" alt="Festival" class="img-fluid img-thumbnail"  >
			<a href="festival.php">
			<button class="container btn-outline-primary" style="font-family:cursive; outline: none;">FESTIVAL</button>
		    </a>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6">
			<img src="images/categories/historic.png" alt="Historic " class="img-fluid img-thumbnail"  >
			<a href="historic.php">
			<button class="container btn-outline-primary" style="font-family:cursive; outline: none;">HISTORIC</button>
		    </a>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6">
			<img src="images/categories/magical.png" alt="Magical" class="img-fluid img-thumbnail"  >
			<a href="magical.php">
			<button class="container btn-outline-primary" style="font-family:cursive; outline: none; ">MAGICAL</button>
		    </a>
		</div>
  </div>
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6">
			<img src="images/categories/mystery.png" alt="Mystery" class="img-fluid img-thumbnail"   >
			<a href="mystery.php">
			<button class="container btn-outline-primary" style="font-family:cursive; outline: none;">MYSTERY</button>
		    </a>
		</div>
		<div class="col-lg-3 col-md-3  col-sm-6">
			<img src="images/categories/nature.png" alt="Nature" class="img-fluid img-thumbnail" >
			<a href="natural.php">
			<button class="container btn-outline-primary" style="font-family:cursive; outline: none;">NATURE</button>
		    </a>
		</div>
		<div class="col-lg-3 col-md-3  col-sm-6">
			<img src="images/categories/relaxing.png" alt="Relaxing" class="img-fluid img-thumbnail"  >
			<a href="relaxing.php">
			<button class="container btn-outline-primary" style="font-family:cursive; outline: none; ">RELAXING</button>
		    </a>
		</div>
		<div class="col-lg-3 col-md-3  col-sm-6">
			<img src="images/categories/spiritual.png" alt="Spiritual" class="img-fluid img-thumbnail"  >
			<a href="spiritual.php">
			<button class="container btn-outline-primary" style="font-family:cursive; outline: none;">SPIRITUAL</button>
		    </a>
		</div>
	</div>
 </div><!--section2-->
</div><br><br><!--section3-->
 <!--About us-->
 <div id="section5" class="main">
 	<h1>About Us</h1>
 	<h2>Travel is the main thing you purchase that makes you more extravagant. We at DNM Travels, swear by this and put stock in satisfying travel dreams that make you perpetually rich constantly. We have been moving excellent encounters for a considerable length of time through our cutting edge planned occasion bundles and other fundamental travel administrations. We rouse our clients to carry on with a rich life, brimming with extraordinary travel encounters.
Through our exceptionally curated occasion bundles, we need to take you on an adventure where you personally enjoy with the stunning magnificence of India and far off terrains.</h2>

 </div><!--Section5-->

<!--Contact-->
<div class="main" id="section4">
 <h1>Contact Us</h1>
<!--  <div class="container">
 -->   <div class="row">
 	<div class="col-lg-4  col-sm-12 img-fluid img-thumbnail"><h2>-Divyash Pal<br>-9516485971<br>divyashpal4515@gmail.com</h2></div>
 	<div class="col-lg-4 col-sm-12 img-fluid img-thumbnail "><h2>-Nishita Topno<br>-9407100518<br>topnonishita@gmail.com</h2></div>
 	<div class="col-lg-4 col-sm-12 img-fluid img-thumbnail"><h2>-Mohit Verma<br>-7692819258<br>mohit.verma0200@gmail.com</h2></div>
   </div> 
 </div>
</div><!--section4-->

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navlist");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>
</html>
