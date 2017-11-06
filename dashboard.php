<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/
 
require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<style>
h1 {
    color:  	white;
    font-family: verdana;
    font-style: italic;
    font-size: 300%;
      text-align: center;
}

body, html {
    height: 100%;
}

/* The hero image */
.hero-image {
    /* The image used */
    background-image: url("12.jpg");

    /* Set a specific height */
    height: 55%;

    /* Position and center the image to scale nicely on all screens */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}

/* Place text in the middle of the image */
.hero-text {
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
}

</style>
</head>
<body background="33.jpg">
<div class="form">
<p style="color:red;" align="right">Welcome to Dashboard.</p>
<h1>Ramgarhia Public School,Shahkot</h1>
</div>

 <div class="hero-image">
  <div class="hero-text">
    <h1>Where Education Matters</h1>
    <p>Since 2004</p>
    
  </div>
  </div>
<br>
<div style="text-align:center;">
    <input type=button onClick="location.href='index.php'" value='Home'>
    <input type=button onClick="location.href='insert.php'" value='Insert New Record'>
    <input type=button onClick="location.href='view.php'" value='View Records'><br><br>
    <input type=button onClick="location.href='logout.php'" value='Logout'>
</div>



</body>
</html>
