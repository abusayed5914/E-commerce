<?php session_start(); ?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="styles/style1.css" />
</head>
<body>


	<div class="form" style="margin-top:120px;">
	<h1>Login Here</h1>
	  <?php 
include ('login_val.php');
?>
    <form class="form-group" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
 
 
    <div class="col-sm-6 col-sm-offset-3 reg">
      <label for="email"><font color="black">Email:</font></label>
      <input type="text" class="form-control input-lg" placeholder="Enter email" name="email" value="<?php echo $email; ?>" />
      <div class="error"  style="color:red;"> 
      <?php echo $emailerr; ?> 

       </div>
    </div>

    <div class="col-sm-6 col-sm-offset-3 reg" style="margin-top:5px;">
      <label for="pwd"><font color="black"> Password:</font></label>
      <input type="password" class="form-control input-lg" placeholder="Enter password" name="t_password">

      <div class="error" style="color:red;"> 
      <?php echo $t_passworderr; ?> 
       </div>

       <div class="error"> <?php echo $loginErr; ?> </div>

    </div>
  
 


	 <div class="button col-sm-6 col-sm-offset-3 " style="margin-top:5px; ">
		<button type="submit" class="btn btn-success" style="background:#4CAF50;padding:10px;color:black;font-size:18px;">Login</button>
		</div>
	  </form>
		<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
		
		<tr align="left" >

		<td colspan="2" align="center" ><a href="http://localhost/myshop/index.php" ><button style='float:left;padding:8px;'>Go Back</button></a></td>
		
			
			 
         </tr>
	
	
	</div>
	
</body>
</html>
