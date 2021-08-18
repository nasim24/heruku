<?php

if(isset($_GET['msg2']))
{
	$msg2=$_GET['msg2'];
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
		<p class="text-danger col-sm-offset-3"> <?php if(!empty($msg2)) echo $msg2; ?>  </p>
		<form class="form-group" action="db.php" method="POST">
			<div class="col-sm-12 col-sm-offset-3">
				<h2>Member Login</h2>				
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
			
			<div class="col-sm-3 vert-offset-top-2 col-sm-offset-4">
				<input type="submit" name="log" value="Login" class="form-control btn btn-success">
			</div>	
			<div class="col-sm-12 vert-offset-top-2 col-sm-offset-3">
				<label>Don't have an account?</label><a href="signup.php"> Create one</a> 
			</div>			
		</form>
		
	</div>
</div>

</body>
</html>
<?php

include 'footer.php';
?>