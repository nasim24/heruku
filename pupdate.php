<?php 
    $role= $_SESSION['r'];
    $sql="select * from user where id='$uid'";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result);
		$name=$row['name'];
		$email=$row['email'];
		$contact=$row['contact'];

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
                    <div class="col-md-12">
                        <h4>Your Profile</h4>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="db.php?p_update=<?php echo $uid;?>" method="POST">
                              <div class="form-group row">
                                <label  class="col-4 col-form-label">Name*</label> 
                                <div class="col-8">
                                <input type="text" name="name" value="<?php echo $name;?>" class="form-control">
                                </div>
                              </div>
                             
                             
                              <div class="form-group row">
                                <label for="email" class="col-4 col-form-label">Email*</label> 
                                <div class="col-8">
                              <input type="text" name="email" value="<?php echo $email;?>" class="form-control">
                                </div>
                              </div>
                             
                           
                              <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Mobile</label> 
                                <div class="col-8">
                             <input type="text" name="contact" value="<?php echo $contact;?>" class="form-control">
                                </div>
                              </div>
                          
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                 <input type="submit" name="p_update" value="Update" class="btn btn-primary">                             
                                 </div>
                              </div>
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