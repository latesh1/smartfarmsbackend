<?php  

function login11()
{
    require_once "config.php";
    // username and password sent from form 
    //session_start();
    // Set session variables

    //header("location: index22.html");
    $myusername = mysqli_real_escape_string($conn, $_POST['username']);
    $mypassword = mysqli_real_escape_string($conn, $_POST['password']);

    //$phpVariable = $myusername;
    //$_SESSION["name"] = $myusername;
    $sql = "SELECT id  FROM logintable WHERE username = '$myusername' and password1 = '" . md5($mypassword) . "'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    //$active = $row['active'];
    $count = mysqli_num_rows($result);
    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {
       
        header("location: index.php");
    } else {
       echo "<script>alert(\"Your Login Name or Password is invalid\")</script>" ;
    }
}
if (array_key_exists('lo', $_POST)) {
    login11();
}
?>
?>
<!DOCTYPE html">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
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
<title>REGISTER</title>
<style>
body{
  background-image: url("23.jpg");
  background-color: #cccccc;
  height: 500px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
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
.mySlides {display:none;}
.forms{
 padding-top: 10%;
 padding-right: 30%;
 padding-bottom: 10%;
 padding-left: 20%;
border: 5px solid #000000;
text-align: center;
color: blue;
max-width:400px;
margin: auto;
background: linear-gradient(to right, #43c6ac, #f8ffae);
opacity:0.9;
}

.signupp{
  background-image: url("23.jpg");
  background-color: #cccccc;
  height: 500px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.ttbutton {
    background: linear-gradient(to right, #0f2027, #203a43, #2c5364); 
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
	border-radius: 12px;
}

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
<li><a href="products.html">Products</a></li>
<li><a href="schedule.html">EVENTS</a></li>
<li><a href="blog.html">Blog</a></li>
<li><a href="about.html">About</a></li>
<li><a class="active" href="registration.html">Registration</a></li>
</ul>
</nav>
</header>
</div>
<br/><br/><br/><br/><br/><br/>
<center>

<fieldset class="forms">
<legend><a href="smartfarm.html"><img src="logo.png"  width="250" height="60"></a></legend>
<div class="forms">
<form action="" method="post">
<p>NAME: <input type="text" placeholder="NAME" name="username" required /><br/></p>
<p>PASSWORD: <input type="text" placeholder="PASSWORD" name="password" /><br/></p>
<br/><input class="ttbutton" type="submit" name="lo" value="LOGIN" />
</form>

<form action="" method="post">
<br/><center>Delete Account<input type="submit" href="smartfarm.html" class="ttbutton" value="Delete account" />
</form>
<br/>
<form action="" method="post">
<center>Change Password <input type="submit" class="ttbutton" value="Update" />
</form>
</div>

</center>

</fieldset>







</body>
</html>
</body>