<!DOCTYPE html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<html>
<head>
<style>


body {
    background-color: #2B60DE;
}


ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #e3e3d8;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
.active {
    background-color:   #778899;
}
#logo { float: left; }

#nav
 {
   no-repeat scroll top left;   
     width:100%;
     height:66px;
      box-shadow: 0px 1px 10px #5E5E5E;
      position:fixed;
      top:0px;
    }
 
 
 
 * {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

.mySlides {
    display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor:pointer;
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}



* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

.mySlides {
    display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor:pointer;
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
 
 p {
    color:green;
    font-family: verdana;
    font-size: 20px;
}
a:link, a:visited {
    background-color: #198d49;
    color: white;
    padding: 12px 7px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


a:hover, a:active {
    background-color: #198d49;
}
 
</style>
</head>

<body>
<ul>

  
  <img src="bats_logo.png"  alt="HTML5 Icon" style="width:230px;height:128px" id="logo" /> 
  <center><font size=22 px><br/> BATS ONLINE TICKET </center></font>
   <li><a class="active" href="home.php">Home | </a></li>
   <li><a href="book.php">Book a ticket | </a></li>
  <li><a href="cancel.php">Cancel | </a></li>
  <li><a href="logout.html">Login</a></li>
 
 </ul>
<center>

</ul>
<form method="POST" action="register.php">
<p>Fill in to Register Account</p><br/><br/>
<p>Username:</p> <input type="text" name="username"><br/>
<p>Password:</p> <input type="password" name="password"><br/>
<input type="hidden" value="user" name="user">

<p>Email:</p> <input type="text" name="email"><br/>
<input type="submit" name="submit" value="Register Account">
</form>


<?php

if(isset($_POST['submit'])){
mysql_connect("localhost","root","");
mysql_select_db("online_bus");

$username=$_POST['username'];
$password=$_POST['password'];
$account_type=$_POST['user'];
$email=$_POST['email'];

$is_query_successful=mysql_query("INSERT INTO `account` VALUES('','$username','$password','$account_type','$email')");

if($is_query_successful){
	echo "Account added!";
}

else {
	echo "Error!";
}
}

?>



<br/><br/><a href="login.php">Click Here to Login</a>
</center></html>
