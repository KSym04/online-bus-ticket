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
 
 </ul><center>

<font color ="white">	


<center>

Destination: <br/> TO: <select>
  <option value="Batangas City">Batangas City</option>
  <option value="Lipa">Lipa City</option>
  <option value="Malvar">Malvar</option>
  <option value="Tanauan">Tanauan</option>
</select> 
<center>
 FROM: <select>
  <option value="Batangas City">Batangas City</option>
  <option value="Lipa">Lipa City</option>
  <option value="Malvar">Malvar</option>
  <option value="Tanauan">Tanauan</option>
</select> <br/><br/><br/>
<center>
<form method="POST" action="book.php">
How many seats to be reserved &nbsp <select>
  <option value="1" name="seat">1</option>
  <option value="2" name="seat">2</option>
  <option value="3" name="seat">3</option>
  <option value="4" name="seat">4</option>
  <option value="5" name="seat">5</option>
  <option value="6" name="seat">6</option>
  <option value="7" name="seat">7</option>
  <option value="8" name="seat">8</option>
  <option value="9" name="seat">9</option>
  <option value="10" name="seat">10</option>
  <input type="submit" name="submit1" value="Ok">
</select> 


</form>
<br/><br/><br/>
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:16px 14px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:16px 14px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-2dtr{font-size:28px;border-color:inherit;vertical-align:top}
</style>
<table class="tg">

  <tr>
    <th class="tg-2dtr"> <input class="single-checkbox" type="checkbox" name="reserved" value="1a">1a</th>
    <th class="tg-2dtr"><input class="single-checkbox" type="checkbox" name="reserved" value="1b">1b</th>
    <th class="tg-2dtr" colspan="2" rowspan="9"></th>
    <th class="tg-2dtr"><input class="single-checkbox" type="checkbox" name="reserved" value="1c">1c</th>
    <th class="tg-2dtr"><input class="single-checkbox" type="checkbox" name="reserved" value="1d">1d</th>
  </tr>
  <tr>
    <td class="tg-2dtr"><input class="single-checkbox" type="checkbox" name="reserved" value="2a">2a</td>
    <td class="tg-2dtr"><input class="single-checkbox" type="checkbox" name="reserved" value="2b">2b</td>
    <td class="tg-2dtr"><input class="single-checkbox" type="checkbox" name="reserved" value="2c">2c</td>
    <td class="tg-2dtr"><input class="single-checkbox" type="checkbox" name="reserved" value="2d">2d</td>
  </tr>
  <tr>
    <td class="tg-2dtr"><input class="single-checkbox" type="checkbox" name="reserved" value="3a">3a</td>
    <td class="tg-2dtr"><input class="single-checkbox" type="checkbox" name="reserved" value="3b">3b</td>
    <td class="tg-2dtr"><input class="single-checkbox" type="checkbox" name="reserved" value="3c">3c</td>
    <td class="tg-2dtr"><input class="single-checkbox" type="checkbox" name="reserved" value="3d">3d</td>
  </tr>
  <tr>
    <td class="tg-2dtr">4a</td>
    <td class="tg-2dtr">4b</td>
    <td class="tg-2dtr">4c</td>
    <td class="tg-2dtr">4d</td>
  </tr>
  <tr>
    <td class="tg-2dtr">5a</td>
    <td class="tg-2dtr">5b</td>
    <td class="tg-2dtr">5c</td>
    <td class="tg-2dtr">5d</td>
  </tr>
  <tr>
    <td class="tg-2dtr">6a</td>
    <td class="tg-2dtr">6b</td>
    <td class="tg-2dtr">6c</td>
    <td class="tg-2dtr">6d</td>
  </tr>
  <tr>
    <td class="tg-2dtr">7a</td>
    <td class="tg-2dtr">7b</td>
    <td class="tg-2dtr">7c</td>
    <td class="tg-2dtr">7d</td>
  </tr>
  <tr>
    <td class="tg-2dtr">8a</td>
    <td class="tg-2dtr">8b</td>
    <td class="tg-2dtr">8c</td>
    <td class="tg-2dtr">8d</td>
  </tr>
  <tr>
    <td class="tg-2dtr">9a</td>
    <td class="tg-2dtr">9b</td>
    <td class="tg-2dtr">9c</td>
    <td class="tg-2dtr">9d</td>
  </tr>
  <tr>
    <td class="tg-2dtr">10a</td>
    <td class="tg-2dtr">10b</td>
    <td class="tg-2dtr">10c</td>
    <td class="tg-2dtr">10d</td>
    <td class="tg-2dtr">10e</td>
    <td class="tg-2dtr">10f</td>
  </tr>
</table>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<footer>
  <center><font color="green">BY ROS players</center>
  <center><font color="green">Copyright © 2018 All rights reserved.  Legal  |  Privacy Policy</center>
</footer>