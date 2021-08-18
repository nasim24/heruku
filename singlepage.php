<?php

include 'header.php';

$sql="select * from blog where bid='$bid'";

$res=mysqli_query($conn,$sql);
foreach($res as $row)
{
$bh=$row['bh'];
$bc=$row['bc'];
$bimg=$row['bimg'];
$bd=$row['bd'];
$views=$row['views'];
$y=1;
$v=$views+$y;
$sql="UPDATE blog SET views='$v' where bid='$bid'";
$res=mysqli_query($conn,$sql);
?>


<!-- banner -->
<div class="banner1">
	
</div>
<!-- technology -->	
<div class="technology-1">
	<div class="container">
		<div class="col-md-9 technology-left">
			<div class="business">
				<div class=" blog-grid2">
					<img src="<?php echo $bimg;?>" class="img-responsive" alt="">
					<div class="blog-text">
						<h5><?php echo $bh;?></h5>
						<p> <?php echo $bd;?></p>				
					</div>

				</div>
				<?php } ?>
				<div class="comment-top">
						<h2>Comment</h2>
						<?php 
						$sql="select user.name,user.image,comments.comment,blog.bh,blog.bc,blog.bimg,blog.bd,blog.date,blog.bid,blog.uid from ((comments INNER JOIN user ON comments.uid=user.id) INNER JOIN blog ON comments.bid=blog.bid) where blog.bid='$bid'";
						$res=mysqli_query($conn,$sql);
						foreach($res as $row)
						{	
							$name=$row['name'];
							$image=$row['image'];
							$cmt=$row['comment'];
							$date=$row['date'];
							
						?>

						<div class="">
						  <a href="#">
							<img src="<?php echo $image;?>" alt="" width="60" height="50">
						  </a>
						</div>
						<div class="media-body">
						  <h4 class="media-heading"><?php echo $name;?></h4>
						  <p><?php echo $cmt;?></p>	
						  <p><?php echo $date;?></p>					  
						</div>
				<?php }?>
				</div>
				<div class="comment">
					<h3>Leave a Comment</h3>
					<div class=" comment-bottom">
						<form action="db.php?cmt=<?php echo $bid;?>" method="POST">							
							<textarea placeholder="Message" name="comment" required="" class="text-danger"></textarea>
							<input type="submit" value="Send">
						</form>
					</div>
				</div>
			</div>	
		</div>
		<!-- technology-right -->
		
		<div class="clearfix"></div>
		<!-- technology-right -->
	</div>
</div>
<!-- technology -->
<?php

include 'footer.php';

?>