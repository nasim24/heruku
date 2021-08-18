	<?php
	
	$conn=mysqli_connect("localhost","root","","crud");
	session_start();
	if(isset($_POST['reg']))
	{
		$n=$_POST['name'];
		$e=$_POST['email'];
		$p=$_POST['password'];
		$c=$_POST['contact'];	

		if(!empty($n) && !empty($e) && !empty($p) && !empty($c))
		{
			$sql= "select * from user where email='$e'";
			$res=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($res);

			$email=$row['email'];
			 
			if($email==$e)
			{
				header("location:http://localhost/crud/signup.php?msg='Already registed please try other'");
			}
			else
			{
				$sql="insert into user (name,email,password,contact) values('$n','$e','$p','$c')";
				$result=mysqli_query($conn,$sql);
				if($result==TRUE)
				{
					header("location: http://localhost/crud/signup.php?msg='Record inserted'");
				}
				else
				{
					header("location: http://localhost/crud/signup.php?msg='Error something wrong'");
				}
			}

		}	
		else
		{
			header("location:http://localhost/crud/signup.php?msg='Field are mendatory it should not be empty'");
		}		
	}

	elseif(isset($_POST['log']))
	{
		$e=$_POST['email'];
		$p=$_POST['password'];

		
		if(!empty($e) && !empty($p))
		{
			$sql="select * from user where email='$e'";
			$res=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($res);
			$email=$row['email'];
			if($email==$e)
				{
					$sql="select * from user where password='$p' and email='$e'";
					$result=mysqli_query($conn,$sql);
					$row=mysqli_fetch_array($result);
					$pass=$row['password'];
					$uid=$row['id'];
					$role=$row['role'];
					$is_verified=$row['isverify'];
					$_SESSION['id']=$uid;
					$_SESSION['r']=$role;
						if($pass==$p)
						{
							if($is_verified=='1')
							{
                                 require 'profile.php';
							}
							else
							{
                                header("location:http://localhost/crud/index.php?msg2='Account Not Verified by admin please wait'");
							}
							
						}
						else
						{
							header("location:http://localhost/crud/index.php?msg2='wrong password!!'");
						}
				}
				else
				{
					header("location:http://localhost/crud/index.php?msg2='wrong username!!'");
				} 
		}
	
	}

	elseif(isset($_POST['edit']))
	{

		$uid=$_SESSION['id'];
		require 'pupdate.php';

	}

	elseif(isset($_GET['suedit2']))
	{

		$uid=$_GET['suedit2'];
		require 'suedit.php';

	}

	elseif(isset($_GET['nvedit']))
	{

		$uid=$_GET['nvedit'];
		require 'nvuedit.php';

	}

	elseif(isset($_POST['p_update']))
	{
		$id=$_GET['p_update'];
		$n=$_POST['name'];
		$e=$_POST['email'];
		$c=$_POST['contact'];

		$sql="UPDATE user SET name='$n',email='$e',contact='$c' where id='$id'";
		$res=mysqli_query($conn,$sql);
		
		require 'profile.php';
	}
	
	elseif(isset($_POST['update']))
	{
		$id=$_GET['update'];
		$n=$_POST['name'];
		$e=$_POST['email'];
		$c=$_POST['contact'];		
		$sql="UPDATE user SET name='$n',email='$e',contact='$c' where id='$id'";
		$res=mysqli_query($conn,$sql);
		
		require 'vu.php';
	}

	elseif(isset($_POST['suupdate']))
	{
		$id=$_GET['suupdate'];
		$n=$_POST['name'];
		$e=$_POST['email'];
		$c=$_POST['contact'];

		$sql="UPDATE user SET name='$n',email='$e',contact='$c' where id='$id'";
		$res=mysqli_query($conn,$sql);
		
		require 'su.php';
	}

	elseif(isset($_POST['nvuupdate']))
	{
		$id=$_GET['nvuupdate'];
		$n=$_POST['name'];
		$e=$_POST['email'];
		$c=$_POST['contact'];

		$sql="UPDATE user SET name='$n',email='$e',contact='$c' where id='$id'";
		$res=mysqli_query($conn,$sql);
		
		require 'nvu.php';
	}

	


	elseif(isset($_POST['upload']))
	{
		$uid=$_SESSION['id'];
		$img="img/".basename($_FILES['image']['name']);
		$imageFileType=strtolower(pathinfo($img,PATHINFO_EXTENSION));
		if($imageFileType !="jpg" && $imageFileType !="png" && $imageFileType !="jpeg" && $imageFileType !="gif" && $imageFileType !="svg")
		{
			echo "sorry, only jpg jpeg png and gif files are allowed";
		}
		else
		{
			if(move_uploaded_file($_FILES['image']['tmp_name'],$img))
			{
				$sql = "UPDATE user SET image='$img' where id='$uid'";
				$res=mysqli_query($conn,$sql);

			}
			else
			{
				echo "sorry there was an error while uploading your file";
			}
		}
		require 'profile.php';
	}	

	elseif(isset($_GET['logout']))
	{
		session_unset();
		session_destroy();
		require 'index.php';
	}

	elseif(isset($_GET['page']))
	{
		$page=$_GET['page'];
		if($page=='myprofile')
		{
			require 'profile.php';
		}
		if($page=='vu')
		{
			require 'vu.php';
		}
		if($page=='nvu')
		{
			require 'nvu.php';
		}
		if($page=='su')
		{
			require 'su.php';
		}
		if($page=='blogpost')
		{
			require 'postblog.php';
		}
		if($page=='allpost')
		{
			require 'allpost.php';
		}
		if($page=='allcomment')
		{
			require 'allcomments.php';
		}
		if($page=='home')
		{
			require 'index.php';
		}
		
	}

elseif(isset($_POST['verify']))
{
	
	$uid=$_POST['c'];	
	foreach($uid as $row)
	{
		$sql="UPDATE user SET isverify='1' where id='$row'";
		$res=mysqli_query($conn,$sql);	
			
	}

	require 'nvu.php';
}

elseif(isset($_POST['delete']))
{
	
	$uid=$_POST['c'];		
	foreach($uid as $row)
	{	
		$sql = "DELETE from user where id='$row'";		
		$res=mysqli_query($conn,$sql);
		$role=$_SESSION['r'];
	}	
		
		require 'vu.php';

}

elseif(isset($_POST['suspend']))
{
	$uid=$_POST['c'];

	foreach($uid as $row)
	{	
		$sql = "UPDATE user SET suspend='1' where id='$row'";		
		$res=mysqli_query($conn,$sql);
		
	}
	require 'vu.php';

}

elseif(isset($_POST['unsuspend']))
{
	$uid=$_POST['c'];

	foreach($uid as $row)
	{	
		$sql = "UPDATE user SET suspend='0' where id='$row'";		
		$res=mysqli_query($conn,$sql);
		
	}
	require 'vu.php';

}
elseif(isset($_GET['edit2']))
{
	$uid=$_GET['edit2'];
	require 'edit.php';
}


elseif(isset($_GET['postblog']))
{
	require 'postblog.php';

}

elseif(isset($_POST['postinsert']))
{

	$uid=$_SESSION['id'];
	$h=$_POST['heading'];
	$c=$_POST['category'];
	$image=$_POST['image'];
	$description=$_POST['description'];

	$sql="insert into blog (bh,bc,bimg,bd,uid) values('$h','$c','$image','$description','$uid')";
	$result=mysqli_query($conn,$sql);
	require 'profile.php';
	
}

elseif(isset($_GET['myblog']))
{
	

	require 'myblog.php';
}

#delete user blog
elseif(isset($_POST['blog_delete']))
{
	
	$uid=$_POST['c'];		
	foreach($uid as $row)
	{	
		$sql = "DELETE from blog where bid='$row'";		
		$res=mysqli_query($conn,$sql);
		$role=$_SESSION['r'];
	}	
		
		require 'profile.php';

}

#blog edit
elseif(isset($_GET['blogedit']))
{
	$uid=$_GET['blogedit'];
	require 'blogedit.php';
}

elseif(isset($_POST['updateblog']))
{
		$uid=$_GET['updateblog'];
		$bh=$_POST['heading'];		
		$bc=$_POST['category'];		
		$desc=$_POST['description'];
		$img="img/".basename($_FILES['image']['name']);
		$imageType=strtolower(pathinfo($img,PATHINFO_EXTENSION));
		if($imageType !='jpg' && $imageType !='png' && $imageType !='jpeg')
		{
			echo "only jpg,jpeg,png file are allowed";
		}
		else
		{
			if(move_uploaded_file($_FILES['image']['tmp_name'],$img))
			{
				$sql="UPDATE blog SET bh='$bh',bc='$bc',bimg='$img',bd='$desc' where bid='$uid'";
				$res=mysqli_query($conn,$sql);
			}
			else
			{
				echo "Error : Data not insert";
			}
}

		
		require 'myblog.php';

}

elseif(isset($_GET['readmore']))
{
	$bid=$_GET['readmore'];
	require 'singlepage.php';
}

elseif(isset($_POST['comment']))
{
	$bid=$_GET['cmt'];	
	$comment=$_POST['comment'];
	$uid=$_SESSION['id'];
	$role=$_SESSION['r'];
	$sql="insert into comments (comment,uid,bid) values('$comment','$uid','$bid')";
	$res=mysqli_query($conn,$sql);

	//comment count query
	$sql2="select * from blog where bid='$bid'";
	$res2=mysqli_query($conn,$sql2);
	$row2=mysqli_fetch_array($res2);
	$ccount=$row2['ccount'];
	$x=1;
	$c=$ccount+$x;
	$sql3="UPDATE blog SET ccount='$c' where bid='$bid'";
	$res3=mysqli_query($conn,$sql3);
	if($role=='user')
	{
		require 'singlepage.php';
	}
	else
	{
		require 'singlepage.php';
	}

}
elseif(isset($_GET['mycomment']))
{
	require 'mycomment.php';
}


elseif(isset($_GET['userhome']))
{
	require 'index.php';
}

elseif(isset($_POST['comment_delete']))
{
	
	$cid=$_POST['c'];		
	foreach($cid as $row)
	{	
		$sql = "DELETE from comments where cid='$row'";		
		$res=mysqli_query($conn,$sql);
		$role=$_SESSION['r'];
	}	
		
		require 'profile.php';

}

elseif(isset($_GET['commentEdit']))
{
	$cid=$_GET['commentEdit'];
	require 'commentEdit.php';

}


elseif(isset($_POST['commentUpdate']))
{
	$cid=$_GET['commentUpdate'];
	$cmt=$_POST['cmt'];
	$role=$_SESSION['r'];
	$sql="UPDATE comments SET comment='$cmt' where cid='$cid' ";
	$res=mysqli_query($conn,$sql);
	if($role=='user')
	{
		require 'profile.php';
	}
	else
	{
		require 'profile.php';
	}
}

elseif(isset($_GET['cat']))
{
		$cat=$_GET['cat'];
		require 'category.php';	
}

?>