<!DOCTYPE html>
<html>

<head>
<link rel="icon" href="images/HMS-Logo.jpg" type="image/jpg" sizes="16x16">
<title>HMS</title>
<!-- <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> -->
<script src="jquery-1.11.0.min.js"></script>

<script>
function updateFrame(src) {
	document.getElementById("hmsFrame").src = src;
}
function serviceRequest(value) {
	var openServiceFrame = 'services/'+value+'.php';
	updateFrame(openServiceFrame);	
}
$("#menu a").click(function(e) {
      e.preventDefault();
      var src = $(this).attr('href');
      $('#hmsFrame').fadeOut(1000,function(){
          $('#hmsFrame').attr('src',src ).load(function(){
              $(this).fadeIn(1000);    
          });
      });
 });
</script>

<style>
header {
    background-color:red;
    color:white;
    text-align:center;
    padding:20px;	 
}
footer {
    background-color:red;
    color:black;
    clear:both;
    text-align:center;
    padding:5px;	 	 
}
nav a {
	height:60px;
	width:100px;
	border-color: ButtonHighlight ButtonShadow ButtonShadow ButtonHighlight;
	display: inline-block; padding: 12px 24px;
	border-style: solid; border-width: 1px;
	background: ButtonFace; color: ButtonText;
	background-color:lightblue;
}
nav a:link, a:visited {
    text-decoration: none;
    cursor: arrow;
}
nav a:link:active, a:visited:active {
}
</style>
</head>

<body>

<header>
<table align="center">
<tr>
<td><img src="images/HMS-Logo.jpg" alt="HMS LOGO" width="100" height="60"></img></td>
<td><h1>Welcome to Hospital Management System</h1></td>
</tr>
</table>
</header>

<table width="100%" height="435px" border="0">
<tr>
<td width="10%" valign="top" bgcolor="green">
<nav id="menu">
<a href="menu/home.php" target="hmsFrame">Home</a>
<a href="menu/what-HMS.php" target="hmsFrame">What is HMS?</a>
<a href="menu/mission.php" target="hmsFrame">Our Mission</a>
<a href="menu/services.php" target="hmsFrame">Services</a>
<a href="menu/address.php" target="hmsFrame">Our Address</a>
<a href="menu/anubhav.php" target="hmsFrame">About the Developer</a>
</nav>
</td>
<td bgcolor="snow">
<iframe name="hmsFrame" id="hmsFrame" width="100%" height="510px" frameborder="0" src="images/hospital.jpeg"></iframe>
</td>
</tr>
</table>

<table width="100%" border="0">
<tr>
<td bgcolor="pink" align="center">News Update: </td>
<td bgcolor="oldlace" color="yellow" width="1200px"><marquee>10% discount for University of Windsor Students and faculty * Free eye checkup at University of Windsor-Toldo Building on 25 September, 2019. Register at Uwindsor official website immediately.</marquee></td>
</tr>
</table>

<footer>
Copyright &copy; Suraj S Nair; University of Windsor-2019
</footer>

</body>
</html>