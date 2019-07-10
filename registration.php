<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="styles/style1.css" />
</head>
<body>

<div class="form" style="margin-top:60px;">
<h1>Registration Here</h1>
<?php 
include ('reg_val.php');
?>
 <form class="form-group" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >

    <div class="form-group form_custom col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-3">
      <label for="name">Name:</label>
      <input type="text" class="form-control input-lg"  placeholder="Enter name" name="name" value="<?php echo $name; ?>"/>
      
      <div class="error"> 
      <?php echo $nameerr; ?> 
      </div>
    </div>
 
    <div class="form-group form_custom col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-3"style="margin-top:5px;">
      <label for="email">Email:</label>
      <input type="text" class="form-control input-lg" placeholder="Enter email" name="email" value="<?php echo $email; ?>" />
      <div class="error"> 
      <?php echo $emailerr; ?> 
       </div>
    </div>

    <div class="form-group form_custom col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-3"style="margin-top:5px;">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control input-lg" placeholder="Enter password" name="t_password">

      <div class="error"> 
      <?php echo $t_passworderr; ?> 
       </div>
    </div>
  <div class="form-group form_custom col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-3"style="margin-top:5px;">
      <label for="pwd">Confirm Password:</label>
      <input type="password" class="form-control input-lg" placeholder="Enter password" name="t_c_password">

      <div class="error"> 
      <?php echo $t_c_passworderr; ?> 
       </div>
    </div>
 


 <div class="button col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-3">
    <button type="submit" class="btn btn-default" style="background:#4CAF50;padding:10px;color:black;font-size:18px;margin-top:10px;">Submit</button>
    </div>
  </form>
<p>If already registered then <a href='login.php'>Login Here</a></p>
	<tr align="left">

		<td colspan="2" align="center" ><a href="http://localhost/myshop/index.php"><button style='float:left;padding:8px;'>Go Back</button></a></td>
		
			
			 
         </tr>
</div>
</body>
</html>
