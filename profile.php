<?php

$uid= $_SESSION['id'];
$role= $_SESSION['r'];
$sql="select * from user where id='$uid' ";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
$name=$row['name'];
$email=$row['email'];
$contact=$row['contact'];	
$image=$row['image'];
if($role=='user')
{
  include 'userheader.php';
}
else
{
  include 'adminheader.php';
}
?>
    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-11">
                        <h4>Your Profile</h4>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <form action="db.php" method="POST">
                              <div class="form-group row">
                                <label for="username" class="col-4 col-form-label">Name*</label> 
                                <div class="col-8">
                                  <p><?php echo $name;?></p>                                 
                                </div>
                              </div>
                             
                             
                              <div class="form-group row">
                                <label for="email" class="col-4 col-form-label">Email*</label> 
                                <div class="col-8">
                                 <p><?php echo $email;?></p>
                                </div>
                              </div>
                             
                           
                              <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Mobile</label> 
                                <div class="col-8">
                                 <p><?php echo $contact;?></p>
                                </div>
                              </div>
                          
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                 <input type="submit" value="Edit" name="edit" class="btn btn-primary">                           
                                 <a href="db.php?logout" class="btn btn-danger">logout</a>
                                 </div>
                              </div>
                            </form>
                    </div>

                    <div class="col-sm-3">
                      <img src="<?php echo $image;?> " width="120px" height="120px" class="img-thumbnail">                   
                    <form action="" method="POST" enctype="multipart/form-data">
                      <input type="file" name="image">
                      <input type="submit" name="upload" value="updatePicutre">
                    </form>
                  </div>

                </div>
                
            </div>
        </div>
    </div>
  </div>
</div>


</body>
</html>