<?php
	if(isset($_GET['msg']))
	{
		$msg=$_GET['msg'];
	}


include 'header.php';

?>


<!DOCTYPE html>
<html>
<head> 
	<title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="bg-info">
	<div class="container">
	<div class="col-sm-6 well col-sm-offset-3 vert-offset-top-2">
		<p class="text-danger col-sm-offset-3"> <?php if(!empty($msg)) echo $msg; ?>  </p>
		<form class="form-group" action="db.php" method="POST">
			<div class="col-sm-12 col-sm-offset-3">
				<h1>Sign up Yourself</h1>				
			</div>
			
			<div class="col-sm-2 vert-offset-top-2">
				<label>Name</label>				
			</div>
			<div class="col-sm-10 form-group vert-offset-top-2">
				<input type="text" name="name" class="form-control">
			</div>	
			<div class="col-sm-2">
				<label>Email</label>				
			</div>
			<div class="col-sm-10 form-group">
				<input type="text" name="email" class="form-control">
			</div>	
			<div class="col-sm-2">
				<label>Password</label>				
			</div>
			<div class="col-sm-10 form-group">
				<input type="text" name="password" class="form-control">
			</div>	
			<div class="col-sm-2">
				<label>Contact</label>				
			</div>
			<div class="col-sm-10 form-group">
				<input type="text" name="contact" class="form-control">
			</div>	
			<div class="col-sm-3 vert-offset-top-2 col-sm-offset-4">
				<input type="submit" name="reg" value="signup" class="form-control btn btn-success">
			</div>		
			<div class="col-sm-12 vert-offset-top-2 col-sm-offset-3">
						<label>Have already an account ?</label> <a href="index.php">Login here</a> 
			</div>		
		</form>		
	</div>
</div>
</body>
</html>

<?php

include 'footer.php';
?>