
<?php session_start(); ?><?php

$con = mysqli_connect("localhost","root","","myshop");

?>
<?php 
if (isset($_SESSION['login_status'])&&($_SESSION['login_status']=='valid')) {
  
}
else{
 header('Location:/myshop/login.php');
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>My Shop</title>
<link rel="stylesheet" href="styles/style.css" media="all"/>


<body bgcolor="#F2F2F2">

    <form method="post" action="insert_product.php" enctype="multipart/form-data">

        <table width="470" height="550" align="center"  bgcolor="" >

           
	   <tr align="center">
           <td colspan="2"><h1>INSERT PRODUCTS</h1></td>
	   </tr>

	   <tr>
		   <td align="right"><b>* Title</b></td>
		   <td><input type="text"  placeholder="Enter Product Title" name="product_title"  size="35"  style="margin-left:10px;"/></td>
	   </tr>

	   <tr>
	       <td align="right"><b>* Category</b></td>
		   <td>
		     <select name="product_cat"  style="margin-left:10px;">
		       <option>Select Category</option>
		      
			  <?php
			    
				$get_cats = "select * from categories";
				
				$run_cats = mysqli_query($con, $get_cats);
				
				while ($row_cats=mysqli_fetch_array($run_cats)){
				
				$cat_id = $row_cats['cat_id'];
				$cat_title = $row_cats['cat_title'];
				
			    echo "<option value='$cat_id'>$cat_title</option>"; 
			
				}
			?>
			  
		   </td>
	   </tr>

       <tr>
			<td align="right"><b>* Brand</b></td>
		    <td>
			
				<select name="product_brand"  style="margin-left:10px;">
		       <option>Select Brand</option>
			
			 <?php
			    
				$get_brands = "select * from brands";
				
				$run_brands = mysqli_query($con, $get_brands);
				
				while ($row_brands=mysqli_fetch_array($run_brands)){
				
				$brand_id = $row_brands['brand_id'];
				$brand_title = $row_brands['brand_title'];
				
			    echo "<option value='$brand_id'>$brand_title</option>";
				
				
				}
				
				?> 
			
			
			</td>
	   </tr>
    
	   <tr>
			<td align="right"><b>* Image-1</b></td>
		    <td><input type="file" name="product_img1" style="margin-left:10px;"/></td>
	   </tr>

	   <tr>
			<td align="right"><b> Image-2</b></td>
		    <td><input type="file" name="product_img2" style="margin-left:10px;"/></td>
	   </tr>

     <tr>
			<td align="right"><b> Image-3</b></td>
		    <td><input type="file" name="product_img3"  style="margin-left:10px;"/></td>
	   </tr>
	   <tr>
			<td align="right"><b>* Price</b></td>
		    <td><input type="text"  placeholder="Enter Product Price" name="product_price" size="35"  style="margin-left:10px;"/></td>
	   </tr>
	   
	   <tr>
			<td align="right"><b>Description</b></td>
		    <td><textarea input type="text" placeholder="Enter Product Description" name="product_desc" cols="27" rows="7"  style="margin-left:10px;"></textarea></td>
	   </tr>
	   
	   <tr align="center">
		    <td colspan="2"><input type="submit" name="insert_product" value="Insert Product"/></td>

	    </tr>

		<tr align="left">

		<td colspan="2" align="center" ><a href="http://localhost/myshop/index.php">Back</a></td>
		
			
			 
         </tr>
		
	  </table>
</form>	  
</body>
</html>

<?php
     
	 if(isset($_POST['insert_product'])){
		 
		 
		 $product_title=$_POST['product_title'];
		 $product_cat=$_POST['product_cat'];
		 $product_brand=$_POST['product_brand'];
		 $product_price=$_POST['product_price'];
		 $product_desc=$_POST['product_desc'];
		 $status ='on';  
		
		 
		 
		 $product_img1=$_FILES['product_img1']['name'];
		 $product_img2=$_FILES['product_img2']['name'];
		 $product_img3=$_FILES['product_img3']['name'];
	
          $temp_name1=$_FILES['product_img1']['tmp_name'];
          $temp_name2=$_FILES['product_img2']['tmp_name'];
          $temp_name3=$_FILES['product_img3']['tmp_name'];

		   
		  if($product_title=='' OR $product_cat=='' OR $product_brand=='' OR $product_img1=='' OR $product_price=='' OR $product_desc==''){
			  
			echo "<script>alert('You Must Be Fill Up * Signed Fields !')</script>";
			exit();
			  }
			
            else{
                 				

			 move_uploaded_file($temp_name1,"product_images/$product_img1");
			 Move_uploaded_file($temp_name2,"product_images/$product_img2");
			 Move_uploaded_file($temp_name3,"product_images/$product_img3");
			 
			$insert_product = "insert into products (cat_id,brand_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_desc,status) values 
			('$product_cat','$product_brand',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_desc','$status')";
		  
		     $run_product = mysqli_query($con, $insert_product);
		  
		     if($run_product){
				 
			    echo "<script>alert('Product inserted successfully!')</script>";
				 
			 }
				 
			}
		  
	 }


?>






