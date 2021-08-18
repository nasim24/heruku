
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Business_Blog a Blogging Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Business_Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<!--start-main-->
           <div class="header">
		        <div class="header-top">
			        <div class="container">
						<div class="logo">
							<a href="index.php"><h1>BUSINESS BLOG</h1></a>
						</div>
						<div class="search">
							<form>
								<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
								<input type="submit" value="">
							</form>
						</div>
						<div class="social">
							<ul>
								<li><a href="#" class="facebook"> </a></li>
								<li><a href="#" class="facebook twitter"> </a></li>
								<li><a href="#" class="facebook chrome"> </a></li>
								<li><a href="#" class="facebook in"> </a></li>
								<li><a href="#" class="facebook beh"> </a></li>
								<li><a href="#" class="facebook vem"> </a></li>
								<li><a href="#" class="facebook yout"> </a></li>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			
<!--head-bottom-->
<div class="head-bottom">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="db.php?page=home">Home</a></li>
            <li><a href="db.php?cat=Technology">Technologies</a></li>
            <li><a href="db.php?cat=Startup">Startup</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tech <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="tech.php">Action</a></li>
				 <li><a href="tech.php">Action</a></li>
				  <li><a href="tech.php">Action</a></li>
              </ul>
            </li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Culture <span class="caret"></span></a>
             <ul class="dropdown-menu">
                <li><a href="singlepage.php">Action</a></li>
				 <li><a href="singlepage.php">Action</a></li>
				  <li><a href="singlepage.php">Action</a></li>
              </ul>
            </li>		 
			   	<?php 
			   	if(isset($_SESSION['id']))
			   	{
			   		echo '				   
				   <li><a href="db.php?page=myprofile">My Profile</a></li>
				   <li><a href="db.php?logout">Log out</a></li>';
				}
				else
				{	
					echo '
				   <li><a href="signup.php">Register</a></li>
				   <li><a href="login.php">Login</a></li>';
				}

				?>
				   <li><a href="contact.php">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</div>
<!--head-bottom-->
</div>	
