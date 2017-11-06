<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/

include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<style>
h1 {
    color:  	white;
    font-family: verdana;
    font-style: italic;
    font-size: 300%;
      text-align: center;
}

p1 {
    color: white;
    font-family: verdana;
    font-size: 150%;
    font-style: italic;
      text-align: center
      ;
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
<body background="787.jpg">
<div class="form">
<p style="color:red;" align="right">Welcome <?php echo $_SESSION['username']; ?>!</p>
<h1>Ramgarhia Public School,Shahkot</h1>
</div>

 <div class="hero-image">
  <div class="hero-text">
    <h1>Where Education Matters</h1>
    <p>Since 2004</p>
    
  </div>
</div> 
<p1 style="text-align: 'center'; font: '16pt'; courier; color: 'blue'">

Ramgarhia Public School shahkot was the third collaborative venture between Takshila Educational Society and Delhi Public School Society. There are four premier institutes functioning under Takshila Educational Society – DPS Patna, DPS Pune, DPS Ludhiana and DPS Coimbatore. Delhi Public School Society is one of the largest chains of K-12 schools in the world with over 150 schools in India and foreign shores. The first DPS, DPS Mathura Road was established in 1947 and since then the society has been adding world-class educational institutions all over India and abroad.</p1><br><br>
<div style="text-align:center;">
    <input type=button onClick="location.href='dashboard.php'" value='click here to visit dashboard'><br><br>
    <input type=button onClick="location.href='logout.php'" value='Logout'>
</div>
</body>
</html>
