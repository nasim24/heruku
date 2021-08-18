<?php 
$sql="select * from comments where cid='$cid'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
$cmt=$row['comment'];
$role=$_SESSION['r'];
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
                        <h4>Edit Comment</h4>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="db.php?commentUpdate=<?php echo $cid;?>" method="POST" enctype="multipart/form-data">
                              <div class="form-group row">
                                <label  class="col-4 col-form-label">Comment</label> 
                                <div class="col-8">
                                <input type="text" name="cmt" value="<?php echo $cmt;?>" class="form-control">
                                <input type="submit" name="commentUpdate" value="update" class="btn btn-primary vert-offset-top-1">
                                </div> 
                              </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>                    