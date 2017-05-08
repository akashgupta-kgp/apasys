<!DOCTYPE HTML>
<html>
<head>
</head>
<style>
.error {color: #FF0000;}
body {
   
    background-color:#f0f0f0;
    color: #8B0000;

}
.center {
    margin: auto;
    width: 40%;
    padding: 10px;
}
h1{
width:100%;
background-color:#f0f0f0;
text-align:center;
border-radius:10px 10px 0 0;
margin:-10px -40px;
padding:15px;
color:#483D8B;
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 7px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius:7px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}
.button1:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
input[type=text] {

width:45%;
padding:5px;
margin-top:8px;
border:1px solid #ccc;
padding-left:4px;
font-size:16px;
font-family:raleway;
border-radius:4px;
}
input[type=password]{
width:30%;
padding:5px;
margin-top:8px;
border:1px solid #ccc;
padding-left:4px;
font-size:16px;
font-family:raleway;
border-radius:4px;
}
input[type=number] {

width:10%;
padding:5px;
margin-top:8px;
border:1px solid #ccc;
padding-left:4px;
font-size:16px;
font-family:raleway;
border-radius:4px;
}
a:link {
    color: red;
}

/* visited link */
a:visited {
    color: green;
}

/* mouse over link */
a:hover {
    color: hotpink;
}

/* selected link */
a:active {
    color: blue;
}
</style>
<body>
 
<?php

/*if (!(isset($_SESSION['register']) && $_SESSION['register'] != '')){
	header ("Location: home.php");
}*/
// define variables and set to empty values
include 'connection_details.php';

	$db_handle = mysql_connect($server, $user_name, $pass_word);
	$db_found = mysql_select_db($database, $db_handle);

$sql1="SELECT * FROM Students";
$result1=mysql_query($sql1);
$num_rows1 = mysql_num_rows($result1);
$sql2="SELECT * FROM Admin";
$result2=mysql_query($sql2);
$row=mysql_fetch_assoc($result2);
$NumStud=$row["NumStud"];
$allocated=$row["allocated"];
if($NumStud<=$num_rows1 || $allocated==2)
{
	mysql_close($db_handle);
	//$_SESSION['register']="";
	header("Location:test.php");
}
$fnameErr = $uidErr = ""; $cgpaErr = $emailErr = $psw1Err = $psw2Err = "";
$fname = $uid = ""; $cgpa = $email = $psw1 = $psw2 = "";

if(isset($_POST["reset"]))
header("Location:signup.php");
if (isset($_POST["submit"])) {

   if (empty($_POST["fname"])) {
     $fnameErr = "Name is required";
   } else {
     $fname = test_input($_POST["fname"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z. ]*$/",$fname)) {
       $fnameErr = "Only letters and white space allowed";
     }
}

if (empty($_POST["uid"])) {
     $uidErr = "Id is required";
   } else {
     $uid = test_input($_POST["uid"]);
     // check if name only contains letters and whitespace
     if (!filter_var($uid, FILTER_VALIDATE_INT)) {
       $uidErr = "Invalid id";
     }
   }
if (empty($_POST["cgpa"])) {
     $cgpaErr = "Cgpa is required";
   } else {
     $cgpa = test_input($_POST["cgpa"]);
     // check if name only contains letters and whitespace
     if (!filter_var($cgpa, FILTER_VALIDATE_FLOAT) || $cgpa<0 || $cgpa>10) {
       $cgpaErr = "Invalid CGPA";
     }
   }
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format";
     }
   }
    
  if (empty($_POST["psw1"])) {
     $psw1Err = "Password is required";
   }
   else {
     $psw1 = test_input2($_POST["psw1"]);
     // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
     if (!preg_match("/^[a-zA-Z0-9_.@]*$/",$psw1)) {
       $psw1Err = "Invalid password";
     }
     if(strlen($psw1)<=6)
     {
       $psw1Err="Password too short";
     }
   }

   if (empty($_POST["psw2"])) {
     $psw2Err = "Password is required";
   } else {
     $psw2 = test_input2($_POST["psw2"]);
     if($psw2!=$psw1){
     $psw2Err= "Password did not match";
   }
}

if($fnameErr == "" && $uidErr == "" && $cgpaErr =="" && $emailErr =="" && $psw1Err == "" && $psw2Err == "")
{
	if ($db_found) {

$sql = "SELECT * FROM Students WHERE uid=$uid"; 
$result = mysql_query($sql);
$num_rows = mysql_num_rows($result);

if ($num_rows > 0)
{
session_start();
$_SESSION['fake'] = "1";
header("Location:register2.php");
}
else
{
$sql = "INSERT INTO Students (uid, fname, cgpa, email, passwd, numchoice,lockchoice,prof,subarea,uidprof)
VALUES ($uid,'$fname',$cgpa,'$email','$psw1',0,1,'','','')";
$result = mysql_query($sql);
if ($result) {
    session_start();
$_SESSION['signup'] = "1";
header("Location: register.php");


} else {
    echo "Error: You have not been registered";
}
}
mysql_close($db_handle);
}
}

}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
function test_input2($data) {
   //$data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
<br>
<h1>Registration form for Students</h1><br><br>
<div class="center">
<form id="frm1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
   Name: <input type="text" name="fname" maxlength="50" size="25" value="<?php echo $fname;?>" >
<span class="error"> <?php echo $fnameErr;?></span>
   <br><br>
   Unique id: <input type="text" name="uid" maxlength="9" placeholder="51051XXXX" value="<?php echo $uid;?>" >
<span class="error"> <?php echo $uidErr;?></span>
   <br><br>
   CGPA: <input type="number" name="cgpa" min="5" max="10" step=0.01 size="4" value="<?php echo $cgpa;?>" >
<span class="error"> <?php echo $cgpaErr;?></span>
   <br><br>
   E-mail id: <input type="text" name="email" size="25" maxlength="30" placeholder="username@example.com" value="<?php echo $email;?>" >
<span class="error"> <?php echo $emailErr;?></span>
   <br><br>
   Password: <input type="password" name="psw1" size="15" maxlength="15" value="<?php echo $psw1;?>">
<span class="error"> <?php echo $psw1Err;?></span>
   <br><br>
   Confirm Password: <input type="password" name="psw2" size="15" maxlength="15" value="<?php echo $psw2;?>">
<span class="error"> <?php echo $psw2Err;?></span>
   <br><br><br>
   <input class="button button1" type="submit" name="submit" value="<?php echo "Submit"?>">
   <input class="button button1" type="submit" name="reset" value="Reset">
</form>
<br>Already registered? 
<a href = "login.php">Log in here</a><br><br>
Go to<a href="test.php"> home page</a>
</div>
</body>
</html>

