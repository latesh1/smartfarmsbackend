<?php

function register()
{
    //jQuery Plugin
   
    require_once "config.php";
    $username = stripslashes($_REQUEST['Name']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($conn, $username);
    $email    = stripslashes($_REQUEST['Email']);
    $email    = mysqli_real_escape_string($conn, $email);
    $message = stripslashes($_REQUEST['Message']);
    $message = mysqli_real_escape_string($conn, $message);
   
    // Check if username is empty

    $query    = "INSERT into `contacttable` (name1, email,message1)
            VALUES ('$username', '$email','$message')";
    $result   = mysqli_query($conn, $query);
    if ($result) {
        // 86400 = 1 day
        echo "<script>alert(\"your response is recorded\")</script>";
        //                header("location: index.php");
    } else {
        echo "Something went wrong... cannot redirect!";
        echo "$message";
        echo "$username";
        echo "$email";
    }
    mysqli_close($conn);
}
if (array_key_exists('rege', $_POST)) {
    register();
}

?>
<html>
<head>
<title>SMARTFARM</title>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="style.css">


<script type="text/javascript">
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
function closed()
{
alert("Registration Closed");
}
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}
</script>
<style>


/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .side, .before,.te {font-size: 11px}
}
.breezem{
div 
{
    width: 100px;
    height: 50px;
    background-color: red;
    font-weight: bold;
    position: relative;
    -webkit-animation: mymove 5s infinite; /* Safari 4.0 - 8.0 */
    animation: mymove 5s infinite;

#div1 {animation-timing-function: linear;}

}}
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: brown;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}
.containercssbox
{
	text-align: center;
	color: black;
    max-width:500px;
    margin: auto;
    border: 3px solid #6101c1;
.p{
color: ##c7dbf9;
}

	<!-- background-color: #000000; -->
}
.textboxhead
{
max-width:500px;
 }

.buttoncss{
background-color: #ffffff;
max-width:100px;
color: black;
}

.sliderbuttoncss{
background-color: #000000;
color: white;
max-width:100px;
}
.columncss
{
column-count: 3;
}
.imgcss{
	color:white;
    background: url(header.jpg);
    /* padding: 45px; */
	background-repeat: no-repeat;
	border: 3px solid #ffffff;
    background-size: auto;
	background-position: center;
}
.boxes{
padding: 45px;


width:150;
height:200;
}
.mapimg{
width: 800px;
height: 400px;
border: black;
}
.foot{
    max-width: 1200px;
    margin: auto;
    color: #fff;
	padding-bottom: 0px;
}

.foot_left{
    max-width: 1200px;
    margin: 0 0 0;
    float: left;
}

.socialmedia{
    display: inline-block;
    margin: 0 20px 0;
}

.socialmedia p{
    font-size: 13px;
    text-align: center;
    margin: 2px 0 0;
}

.socialmedia img{
    padding: 2px;
    width: 28px;
    height: auto;
    margin: 2px 0 0;
}
/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}
.prev{
  left:0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

.mySlides {display:none;}
</style>
</head>
<body>
<image class="log" src="logo.png"></image>
<div class="wapper">
<nav id="mainav" class="fl_right">
<ul class="clear">
<li class="active"><a href="smartfarm.html">Home</a></li>
<li class="active"><a href="gallery.html">Gallery</a></li>
<li class="active"><a href="services.html">Services</a></li>
<ul>
<li class="active"><a href="events.html">products</a></li>
<li><a href="products.html">EVENTS</a>
<li><a href="blog.html">Blog</a></li>
<li><a href="about.html">About</a></li>
<li><a class="active" href="registration.html">Registration</a></li>
</ul>
</nav>
</header>
</div>

<div  class="imgcss">
<b><p style="font-size: 80px;" align="center" highlight4>Welcome!
<span style="font-size: 40px; " align="center" ><br>to SmartFarms</span></p></b><br/>
<p align="justify" style="font-size: 30px; font-family:Bahnschrift" >"SmartFarm actively pursues its mission of supporting healthy and productive lifestyles for the community while teaching, enhancing, and connecting residents and youth to fresh produce and education about urban gardening.
Programs include multiple workshop venues and hands-on gardening opportunities for young people, as well as community garden plots for nearby residents."
</p>
<br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div style="column-count:4">
<div class="boxes" style="background-color: #fc6d00" "border: 3px solid #fc6d00">
<h3> CALLING FOR ALL FARMING!</h3>
<h3>
At SmartFarm we offer fun educational experiences for all your students.
</h3>
</div>
<br/>
<div class="boxes" style="background-color:  #9f00fc" "border: 3px solid  #9f00fc">
<h3> OPPORTUNITIES FOR YOUTH!</h3>
<h3>
Youth of our community can dig in dirt and watch things grow.
</h3>
</div>
<br/>
<div class="boxes" style="background-color: green" "border: 3px solid green ">
<h3>COMMUNITY GARDEN PLOTS</h3>
<h3>
Our easy-to-garden planter boxes are available for lease to community residents.
</h3>
</div>
<br/>
<div class="boxes" style="background-color:#163993" "border: 3px solid #163993">
<h3>OUR EVENT SPACE</h3>
<h3>
Your guests will enjoy the natural and urban surroundings.
</h3>
</div>
</div>
</div>




<section>




<div class="top">
<div class="breezem" >
<center>
<div id="div1"><h1>UPCOMING</h1>
<h2>CAMPS AND EVENTS!!!!</h2></div></div></center>

</b>
<div class="columncss">
<div class="containercssbox">


    <img src="01.jpg" alt="New York" style="width:100%" >

    <p><b>Photography Series</b></p>
    <p >August 16th & 17th,2018</p>
    <p>
	<span>₹500</span>
	<span>per visitor</span>
	</p>
    <button class="buttoncss" onclick="closed()">Registration Closed</button>
    </div>




	<br/>
    <div class="containercssbox">
    <img src="02.jpg" alt="Paris" style="width:100%" >
    <p><b>Garden Class</b></p>
    <p>July 22nd,2018</p>
    <p class="">
	<span>₹1000</span>
	<span>per visitor</span>
	</p>
    <button onclick="login.html"><a href="login.html">Registration Now</a></button>
    </div>


	<br/>
    <div class="containercssbox">
    <img src="03.jpg" alt="San Francisco" style="width:100%" >
    <p><b>3-Day Summer Farm Camp </b></p>
    <p class="w3-opacity">June 19th,20th,21th</p>
    <p>
	<span>₹500</span>
	<span>per visitor</span>
	</p>
    <button onclick="login.html"><a href="login.html">Registration Now</a></button>
    </div>




	<br/>
	<div class="containercssbox">
	<img src="04.jpg" alt="New York" style="width:100%">
    <p><b>3-Day Summer Farm Camp</b></p>
    <p class="">August 15th ,16th& 17th</p>
	<p>
	<span class="">₹1000</span>
	<span class="">per visitor</span></p>
    <button class="buttoncss" onclick="closed()">Registration Closed</button>
    </div>



	<br/>
    <div class="containercssbox">
    <img src="05.jpg" alt="Paris" style="width:100%" class="w3-hover-opacity">
    <p><b>Photography Series</b></p>
    <p class="">August 16th & 17th,2018</p>
    <p>	<span >₹1000</span>
	<span >per visitor</span>
	</p>
    <button class="buttoncss" onclick="closed()"> Registration Closed</button>
    </div>



	<br/>
    <div class="containercssbox">
    <img src="02.jpg" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
	<p><b>Garden Class </b></p>
    <p>June 26th,2018</p>
    <p>
	<span class="amount text-left">₹500</span>
	<span class="price-text">per visitor</span>
	</p>
    <button class="" onclick="login.html"><a href="login.html">Registration Now</a></button>
    </div>

    </div>
	</div>


<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>


 <section class="clienttest">
 <div class="back">
<h2 class="section_header">
<center>
<b>Clients Testimonials</b>

</center><div class="tr">
<center>
<blockquote class="with_quote">
<p>“We are SO thrilled with the patio… thank you for making such a beautiful space. A couple of days ago one of the residents that ‘can’t’ stand up in the bathroom was standing up ALONE at the planter with the hand rail.”</p>
<h5 ><b>                   --Raymond J. Jensen</b></h5>
<p><b>Client</b></p>
</blockquote>

<blockquote class="with_quote">
<p>“When I contemplated creating an organic garden for one of our properties my first stop was SmartFarm. It’s one thing to hire someone to select and install plants and grow them.”</p>
<h5><b>--Mary M. Robinson</b></h5>
<p class="small-text highlight3"><b>Client</b></p>
</blockquote>

<blockquote class="with_quote">
<p>“I have worked with SmartFarms for the past couple years and not only do they provide awesome produce and knowledgeable Garden Tech’s, they provide a beautiful environment that helps me.”</p>
<h5><b>--Steven S. Shelton</b></h5>
<p class="small-text highlight3"><b>Client</b></p>
</blockquote>
</center>



</h2>
</div
</div>
</div>
</section>

	<!-- The Contact Section -->
    <div class="top">
        <div class="w3-container w3-content w3-padding-64" style="max-width:1000px" id="contact">
          <h2 class="w3-wide w3-center" ><b>CONTACT US</b></h2>
          <a href="https://www.google.com/maps/place/Nr.+Sah+Jeevan+Hall,+Vasai-Rangaon+Rd,+Paltodi+Wadi,+Zalodi+Wadi,+Vasai+West,+Vasai,+Maharashtra+401201/@19.362106,72.7741979,14.71z/data=!4m5!3m4!1s0x3be7ac323ab072d9:0xb5aa6ad6b71d3928!8m2!3d19.3576048!4d72.7903145">
          <image align="center" height="400" width="800" src="maps.jpg" ></image>
          </a>
      
          <div class="w3-row w3-padding-32">
            <div class="w3-col m6 w3-large w3-margin-bottom">
              <i class="fa fa-map-marker" style="width:30px"></i> Vasai, IN<br>
              <i class="fa fa-phone" style="width:30px"></i> Phone: +91 1515151515<br>
              <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
            </div>
            <div class="w3-col m6">
              <form action=""  method="post">
                <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                  <div class="w3-half">
                    <input class="w3-input w3-border" type="text" placeholder="Name"  name="Name">
                  </div>
                  <div class="w3-half">
                    <input class="w3-input w3-border" type="text" placeholder="Email"  name="Email">
                  </div>
                </div>
                <input class="w3-input w3-border" type="text" placeholder="Message"  name="Message">
                <button class="w3-button w3-black w3-section w3-right" type="submit" name ="rege">SEND</button>
              </form>
            </div>
          </div>
        </div>
        </div>	  
	  
	  
	  </center>
   
  </div>
</div>
</div>
<!--footer-->
<footer ><center>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<div style="background-color:black;color:linear-gradient(to right, #7f7fd5, #86a8e7, #91eae4);;padding:30px">
    <div class="foot">
        <div class="socialmedia">
            <p><H1>STAY CONNECTED</H1></p><br/><br/><center>
            <a href="http://linkedin.com"><img src="linkedin.jpeg"></a>
            <a href="http://facebook.com"><img src="fb.png"></a>
            <a href="http://instagram.com"><img src="insta.jpeg"></a>
            <a href="http://twitter.com"><img src="twitter.png"></a>
        </div>
        <BR/>
		<BR/>
		<BR/>
		<BR/>
          <BR/>
              © All rights reserved</center>
        
    </div>
</div>
</footer>
</body>
</html>