<!DOCTYPE html>
<html lang="en">
<head>
  <title>APASys</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #00CC00;
      color: #fff;
      padding: 70px 16px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #33CC66;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
    background-color:#008800;

      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
    .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 30px;
      margin-bottom: 5px;
      color: #f4511e;
  }

  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;	
      animation-duration: 1s;	
      -webkit-animation-duration: 1s;
      visibility: visible;			
  }
  @keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }	
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
<li><a href="#about">About</a></li>
<li><a href="#method">Method</a></li>
<li><a href="#dates">Important dates</a></li>
<li><a href="#register">Register</a></li>
<li><a href="#login">Login</a><li>
<li><a href="#list">Allocation list</a></li>
<li><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>APASys</h1> 
  <p>Academic Project Allocation System</p> 
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About APASys</h2><br>
      <p>APASys is web based software that can be used for project allocation purpose among the students 
of any department of an Institute.</p>
<p>It is an online software where all aspects of project allocation are combined in a single place.</p>
<p>In most of the institutions, students are allocated projects under the professors in groups in random fashion. This method possesses several disadvantages since student's as well as professor's choices are not taken care of in the allocation process.</p>
<p>In APASys, there will be two way counselling. The professors and the students both will fill up their respective choices and the final allocation is done accordingly.</p>
<p>With the help of this software, project can easily be allocated to each or group of students without the problem of 
delayed project allocation from the supervisor or conflict of topic between two individual or group of students.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-home logo"></span>
    </div>
  </div>
</div>

<div id="method" class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Allocation method</h2><br>
      <ul>
<p><li>Each professor's choice will be validated against the choice of the corresponding student. If that student's most preferred choice is not a project offered by that professor, then the system free up that particular choice of the professor and makes it available to all other students.</li></p>
<p><li>Students choices will be evaluated one by one based on their decreasing order of rank in the class.</li></p>
<p><li>For any particular student, their preferred list of choices will be evaluated one by one according to the decreasing priority.</li></p>
<p><li>For any choice, it will be checked if a corresponding "Professor-SubAreaOfWork" is available. If available, then the student will be assigned to that project. Otherwise his/her next choices will be checked and so on.</li></p>
<p><li>If a situation arises when no more choice are left of that student, then he/she will be assigned project randomly in any of the available opportunity under any professor.</li></p>
</ul>
    </div>
  </div>
</div>

<div id="dates" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Important dates</h2><br>
      <p>
<?php	include 'connection_details.php';

	$db_handle = mysql_connect($server, $user_name, $pass_word);
	$db_found = mysql_select_db($database, $db_handle);

$sql2="SELECT * FROM Admin";
$result2=mysql_query($sql2);
if($result2)
{
	$num_rows2=mysql_num_rows($result2);
		$row=mysql_fetch_assoc($result2);
		$date3=$row["date3"];
		$date4=$row["date4"];
		$date5=$row["date5"];
		$date6=$row["date6"];
		$date1=$row["date1"];
		$date2=$row["date2"];
}
?>
Date of opening of registration for students : <?php echo $date3;?><br><br>
Date of opening of registration for professors : <?php echo $date4;?><br><br>
Date of opening of choice filling for students : <?php echo $date5;?><br><br>
Date of opening of choice filling for professors : <?php echo $date6;?><br><br>
Date of closing of choice filling for students : <?php echo $date2;?><br><br>
Date of closing of choice filling for professors : <?php echo $date1;?><br><br>
</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-star-empty logo"></span>
    </div>
  </div>
</div>

<div id="register" class="container-fluid bg-grey">
 
  <div class="row">
   <div class="col-sm-4">
      <span class="glyphicon glyphicon-user logo"></span>
    </div>
    <div class="col-sm-8">
      <h2>Registration </h2><br>
<?php	include 'connection_details.php';

	$db_handle = mysql_connect($server, $user_name, $pass_word);
	$db_found = mysql_select_db($database, $db_handle);

$sql2="SELECT * FROM Admin";
$result2=mysql_query($sql2);
if($result2)
{
	$num_rows2=mysql_num_rows($result2);
	if($num_rows2<1)
	{
		//session_start();
		//$_SESSION["register3"]=1;
		echo '<a href="signup3.php">Registration form for admin</a>';
	}
}
else
{
		echo '<a href="signup3.php">Registration form for admin</a>';
}?>

<?php	include 'connection_details.php';

	$db_handle = mysql_connect($server, $user_name, $pass_word);
	$db_found = mysql_select_db($database, $db_handle);

$sql2="SELECT * FROM Admin";
$result2=mysql_query($sql2);
if($result2)
{
	$num_rows2=mysql_num_rows($result2);
	$row=mysql_fetch_assoc($result2);
	$sql1="SELECT * FROM Students";
	$result1=mysql_query($sql1);
	$num_rows1 = mysql_num_rows($result1);
	$NumStud=$row["NumStud"];
	$allocated=$row["allocated"];
	if($NumStud>$num_rows1 && $allocated==1)
	{
		//session_start();
		//$_SESSION["register"]=1;
		echo '<a href="signup.php">Registration form for students</a>';
		//header("Location:signup.php");
	}
}
else $NumStud=0;?>
   <p><?php if($NumStud==0) echo 'Registration process of students has not yet started'; else if($NumStud==$num_rows1 || $allocated==2) echo 'Registration of students is completed.';?> </p>
  
<?php	include 'connection_details.php';

	$db_handle = mysql_connect($server, $user_name, $pass_word);
	$db_found = mysql_select_db($database, $db_handle);
$sql2="SELECT * FROM Admin";
$result2=mysql_query($sql2);
if($result2)
{
	$num_rows2=mysql_num_rows($result2);
	$row=mysql_fetch_assoc($result2);
	$sql1="SELECT * FROM Teachers";
	$result1=mysql_query($sql1);
	$num_rows1 = mysql_num_rows($result1);
	$NumProf=$row["NumProf"];
	$allocated=$row["allocated"];
	if($NumProf>$num_rows1 && $allocated==1)
	{
		//session_start();
		//$_SESSION["register"]=1;
		echo '<a href="signup2.php">Registration form for professors</a>';
	}
}
else $NumProf=0;?>
<p><?php if($NumProf==0) echo 'Registration process of professors has not yet started'; else if($NumProf==$num_rows1 || $allocated==2) echo 'Registration of Professors is completed.';?> </p>
</div>

  </div>
</div>
       

<div id="login" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Login</h2><br>
      <p><a href="login.php">Login form</a></p>
<?php	include 'connection_details.php';

	$db_handle = mysql_connect($server, $user_name, $pass_word);
	$db_found = mysql_select_db($database, $db_handle);
$sql2="SELECT * FROM Admin";
$result2=mysql_query($sql2);
if($result2)
{
	$row=mysql_fetch_assoc($result2);
	$startstud=$row["startstud"];
	$startprof=$row["startprof"];
	$lockstud=$row["lockchoice1"];
	$lockprof=$row["lockchoice2"];
}
else
{
 $startstud=1;
 $startprof=1;
}?>
<p><?php if($startstud==1) echo 'Choice filling of students has not yet started'; else if($startstud==2 && $lockstud==1) echo 'Choice filling of students has begun.'; else if($lockstud==2) echo 'Choice filling of students has ended.'; ?> </p>

<p><?php if($startprof==1) echo 'Choice filling of professors has not yet started'; else if($startprof==2 && $lockprof==1) echo 'Choice filling of professors has begun.'; else if($lockprof==2) echo 'Choice filling of professors has ended.'; ?> </p>


    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-log-in logo"></span>
    </div>
  </div>
</div>

<div id="list" class="container-fluid">
  <div class="row">
  <div class="col-sm-4">
      <span class="glyphicon glyphicon-download-alt logo"></span>
    </div>
    <div class="col-sm-8">
      <h2>Allocation list</h2><br>
<?php
if($allocated==2)
echo "Allocation List generated. <a href='allocationlist.php'><br><br>Click here</a> to view";
else echo "Not generated yet";
mysql_close($db_handle); 
?>
    </div>
  
  </div>
</div>
    

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p><span class="glyphicon glyphicon-map-marker"></span> IIEST Shibpur, Howrah (W.B.)</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91-8820405430, +91-8961947758</p>
      <p><span class="glyphicon glyphicon-envelope"></span> akashguptacse18@gmail.com</p>	   
    </div>
  </div>
</div>

<div id="googleMap" style="height:400px;width:100%;"></div>

<!-- Add Google Maps -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter = new google.maps.LatLng(22.5561, 88.3057);

function initialize() {
var mapProp = {
  center:myCenter,
  zoom:12,
  scrollwheel:false,
  draggable:false,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Developed by ...</p>	
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){
   
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>

