<?php

include 'header.php';


?>
<!-- banner -->
<div class="banner">
	<div class="container">
		<h2>Contrary to popular belief, Lorem Ipsum simply</h2>
		<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
		<a href="#">READ ARTICLE</a>
	</div>
</div>
<!-- technology -->
<div class="technology">
	<div class="container">		
		<div class="col-md-9 technology-left">
		<div class="">
			<?php
			$conn=mysqli_connect("localhost","root","","crud");
			#$sql="select * from blog where isverify ='0'";
			$sql="select blog.bid,blog.bh,blog.bc,blog.bimg,blog.bd,blog.date,blog.ccount,blog.views,user.name from blog INNER JOIN user ON blog.uid=user.id where blog.bc='$cat'";

			$res=mysqli_query($conn,$sql);
		foreach($res as $row)
			{
				$bid=$row['bid'];
				$bh=$row['bh'];
				$bc=$row['bc'];
				$bimg=$row['bimg'];
				$bd=$row['bd'];
				$d=substr($bd, 0,100);
				$date=$row['date'];
				$name=$row['name'];
				$ccount=$row['ccount'];
				$views=$row['views'];
				
			?>
			
			<div class="soci">
				<ul>
					<li><a href="#" class="facebook-1"> </a></li>
					<li><a href="#" class="facebook-1 twitter"> </a></li>
					<li><a href="#" class="facebook-1 chrome"> </a></li>
					<li><a href="#"><i class="glyphicon glyphicon-envelope"> </i></a></li>
					<li><a href="#"><i class="glyphicon glyphicon-print"> </i></a></li>
					<li><a href="#"><i class="glyphicon glyphicon-plus"> </i></a></li>
				</ul>
			</div>
			 <div class="tc-ch">
				
					<div class="tch-img">
						<a href="db.php?readmore=<?php echo $bid;?>"><img src="<?php echo $bimg;?>" class="img-responsive" alt=""/></a>
					</div>
					<a class="blog blue" href="db.php?readmore=<?php echo $bid;?>"><?php echo $bc;?></a>
					<h3><a href="db.php?readmore=<?php echo $bid;?>"><?php echo $bh;?></a></h3>
						<p><?php echo $d;?></p>
						
					
						<div class="blog-poast-info">
							<ul>
								<li><i class="glyphicon glyphicon-user"> </i><a class="admin" href="#"><?php echo $name;?> </a></li>
								<li><i class="glyphicon glyphicon-calendar"> </i><?php echo $date;?></li>
								<li><i class="glyphicon glyphicon-comment"> </i><a class="p-blog" href="#">Comments <?php echo $ccount;?> </a></li>
								<li><i class="glyphicon glyphicon-heart"> </i><a class="admin" href="#">5 favourites </a></li>
								<li><i class="glyphicon glyphicon-eye-open"> </i>Views <?php echo $views;?></li>
							</ul>
						</div>
			</div>
		
			<div class="clearfix">
			</div>
			<?php } ?>
			</div>
			<!-- technology-top -->
			
			
		</div>
		<!-- technology-right -->
		<div class="col-md-3 technology-right">
				<div class="blo-top">
					<div class="tech-btm">
					<img src="images/banner1.jpg" class="img-responsive" alt=""/>
					</div>
				</div>
				<div class="blo-top">
					<div class="tech-btm">
					<h4>Sign up to our newsletter</h4>
					<p>Pellentesque dui, non felis. Maecenas male</p>
						<div class="name">
							<form>
								<input type="text" placeholder="Email" required="">
							</form>
						</div>	
						<div class="button">
							<form>
								<input type="submit" value="Subscribe">
							</form>
						</div>
							<div class="clearfix"> </div>
					</div>
				</div>
				<div class="blo-top1">
					<div class="tech-btm">
					<h4>Top stories of the week </h4>
						<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="singlepage.php"><img src="images/6.jpg" class="img-responsive" alt=""/></a>
							</div>
							<div class="blog-grid-right">
								
								<h5><a href="singlepage.php">Pellentesque dui, non felis. Maecenas male</a> </h5>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="singlepage.php"><img src="images/7.jpg" class="img-responsive" alt=""/></a>
							</div>
							<div class="blog-grid-right">
								
								<h5><a href="singlepage.php">Pellentesque dui, non felis. Maecenas male</a> </h5>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="singlepage.php"><img src="images/11.jpg" class="img-responsive" alt=""/></a>
							</div>
							<div class="blog-grid-right">
								
								<h5><a href="singlepage.php">Pellentesque dui, non felis. Maecenas male</a> </h5>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="singlepage.php"><img src="images/9.jpg" class="img-responsive" alt=""/></a>
							</div>
							<div class="blog-grid-right">
								
								<h5><a href="singlepage.php">Pellentesque dui, non felis. Maecenas male</a> </h5>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="singlepage.php"><img src="images/10.jpg" class="img-responsive" alt=""/></a>
							</div>
							<div class="blog-grid-right">
								
								<h5><a href="singlepage.php">Pellentesque dui, non felis. Maecenas male</a> </h5>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			
		</div>
		<div class="clearfix"></div>
		<!-- technology-right -->
	</div>
</div>
<!-- technology -->
<?php

include 'footer.php';

?>