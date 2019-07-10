<?php session_start(); ?><?php

$con = mysqli_connect("localhost","root","","myshop");
include("functions/functions.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>My Shop</title>
<link rel="stylesheet" href="style.css" media="all"/>

<body style="height:200px;width:500px;margin-left:430px;margin-top:100px;">
  									
<form id="contact_form" action="#" method="POST" enctype="multipart/form-data" >
	<div class="row">
		<label for="name">Your Name:</label><br />
		<input id="name" class="input" name="name" type="text" value="" size="30" /><br />
	</div>
	<div class="row">
		<label for="email">Your Email:</label><br />
		<input id="email" class="input" name="email" type="text" value="" size="30" /><br />
	</div>
	<div class="row">
		<label for="message">Your Message:</label><br />
		<textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
	</div>
	<input id="submit_button" type="submit" value="Send email" />
</form>
<div id="back" style="margin-top:10px;">						
	
	<tr align="left" style="margin-top:100px;" >

		<td colspan="2" align="center" ><a href="http://localhost/myshop/index.php" ><button style='float:left;padding:8px;'>Go Back</button></a></td>
			 
         </tr>
		</div>			
<body>

</html>		