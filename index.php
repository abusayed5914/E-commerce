<?php session_start(); ?><?php

$con = mysqli_connect("localhost","root","","myshop");
include("functions/functions.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>My Shop</title>
<link rel="stylesheet" href="styles/style.css" media="all"/>

<body>

	<div class="main_wrapper">

	     <div class="header_wrapper">
		
		    <img id="banner" src="images/1.jpg" style="float:right;height:180px;width:1000px;margin-left:2px"/>
		 
		 </div>

	     <div id="navbar">
		 
		       <ul id="menu">
			   <li><a href="index.php">HOME</a></li>
			   <li><a href="all_product.php">ALL PRODUCTS</a></li>
	
			   <li><a href="admin_area/insert_product.php">INSERT PRODUCT</a></li>
			   <li><a href="contact.php">CONTACT</a></li>
			   <?php 

				if (isset($_SESSION['login_status'])&&($_SESSION['login_status']=='valid')) {
?>
	
				 <li><a href="logout.php">LOGOUT</a></li>

				<?php
					
				}
				else
				{?>
					<li><a href="registration.php">REGISTRATION</a></li>
			   <li><a href="login.php">LOGIN</a></li>
			 
				<?php }
			   ?>
			    
               
         
			   
			   
		      </ul>
			  
			  <div id="form">
			     <form method="get" action="results.php" enctype="multipart/form-data">
				 
					<input type="text" name="user_title" placeholder="search product"/>
					<input type="submit" name="search" value="search"/>
				 
				 </form>
				 </div>
			
			 
			  
			  
		 </div>
	
	     <div class="content_wrapper">
		     
			 <div id="left_sidebar">
			     
				<div id="sidebar_title">Categories</div>
				
			   <ul id="cats">
			   
			   <?php getCat(); ?>
			  
	         	</ul>
				
				<div id="sidebar_title">Brands</div>
			 
			   <ul id="cats">
			   
			     <?php getBrands(); ?>

			  </ul>
			 </div>
			 </div>
			 
			 
			 <div id="right_content">
			    
				<div id="headline">
				<div id="headline_content">
				<b>Welcome Guest to My Online Shop !</b>
				
				</div>
			 </div>
		 
		   <div id="product_box">
			
			<?php 
			
			getPro();
			getCatPro();
			getBrandPro();
			
			?>
			  
		   </div>
		 
		 
		 
		 </div>
		 
		 <div id="footer">&copy; Abu Sayed</div>

		 </div>


</body>

</html>