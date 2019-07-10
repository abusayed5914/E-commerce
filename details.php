<?php session_start(); ?><?php
include("functions/functions.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>My Shop</title>
<link rel="stylesheet" href="styles/style.css" media="all"/>
</head>
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
				 
					<input type="text" name="user_title" placeholder="search product" />
					<input type="submit" name="search" value="search" />
				 
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
			 
			 
			 <div id="right_content">
			    
				<div id="headline">
				<div id="headline_content">
				<b>Welcome Guest to My Online Shop !</b>
				
				</div>
			 </div>
		 
		   <div id="product_box">
			
			<?php

			if(isset($_GET['pro_id'])){
				
			$product_id = $_GET['pro_id'];	
				
			
			$get_products = "select * from products where product_id='$product_id'";
				 
				 $run_products = mysqli_query($db, $get_products);
				 
				 while($row_products=mysqli_fetch_array($run_products)){
					 
					$pro_id = $row_products['product_id'];
					$pro_title = $row_products['product_title'];
					$pro_cat = $row_products['cat_id'];
					$pro_brand = $row_products['brand_id'];
					$pro_desc = $row_products['product_desc'];
					$pro_price = $row_products['product_price'];
					$pro_image1 = $row_products['product_img1'];
					$pro_image2 = $row_products['product_img2'];
					$pro_image3 = $row_products['product_img3'];
					
					 
					echo "
					<div id='single_product'>
					
					<h3>$pro_title</h3><br>
					
					<p><b>Price:TK $pro_price</b></p><br>
					
					<p><b> $pro_desc</p></p><br>
					
					<img src='admin_area/product_images/$pro_image1' width='220' height='200'/>
					<img src='admin_area/product_images/$pro_image2' width='220' height='200'/>
					<img src='admin_area/product_images/$pro_image3' width='220' height='200>
					

					
					<a href='details.php?pro_id=$pro_id' style='float:left;'></a>
					
					
				
					</div>	
					
					";	 
					
				 }	

			}
								
			?>
			  
		   </div>
		 
		 
		 
		 </div>
		 
		 <div id="footer">&copy; Abu Sayed</div>

		 </div>

</body>

</html>		