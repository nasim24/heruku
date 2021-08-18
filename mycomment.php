<?php
$uid=$_SESSION['id'];
$sql = "select user.name,blog.bimg,blog.bh,comments.cid,comments.comment,comments.date from((comments INNER JOIN user ON comments.uid=user.id) INNER JOIN blog ON comments.bid=blog.bid) where comments.uid='$uid'";
$res=mysqli_query($conn,$sql);

include 'userheader.php';
?>

    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4>My Comments</h4>
                        <hr>
                    </div>

                </div>
                <form action="db.php" method="POST">                 
                  <input type="submit" class="btn btn-danger" name="comment_delete" value="Delete">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col"><input type="checkbox"></th>                               
                                <th scope="col">Name</th>
                                <th scope="col">Blog Image</th>
                                <th scope="col">Blog Heading</th>
                                <th scope="col">Blog Comments</th>
                                <th scope="col">Blog Comments Date</th>                                
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <?php
                            foreach($res as $row)
                            {
                                $name=$row['name'];
                                $heading=$row['bh'];
                                $image=$row['bimg'];
                                $comment=$row['comment'];
                                $date=$row['date'];
                                $cid=$row['cid']; 
                            ?>
                            <tbody>
                              <tr>
                                <td><input type="checkbox" name="c[]" value="<?php echo $cid;?>"></td>
                                <td><?php echo $name;?></td>
                                <td><img src="<?php echo $image;?>" class="img-thumbnail" height="50" width="50"></td>
                                <td><?php echo $heading;?></td>
                                <td><?php echo $comment;?></td>
                                <td><?php echo $date;?></td>
                                <td><a href="db.php?commentEdit=<?php echo $cid;?>" class="btn btn-primary">Edit</a></td>
                              </tr>
                            </tbody>
                          <?php }?>
                          </table>
                    </div>

                </div>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>


</body>
</html>