<?php
$uid=$_SESSION['id'];
$sql = "select * from blog where isverify='0'";
$res=mysqli_query($conn,$sql);

include 'adminheader.php';
?>

    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4>All Blog</h4>
                        <hr>
                    </div>

                </div>
                <form action="db.php" method="POST">                 
                  <input type="submit" class="btn btn-danger" name="blog_delete" value="Delete">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col"><input type="checkbox"></th>
                                <th scope="col">Blog Heading</th>
                                <th scope="col">Blog Category</th>
                                <th scope="col">Blog image</th>
                                <th scope="col">Blog description</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <?php
                            foreach($res as $row)
                            {
                            $uid=$row['bid'];
                            $h=$row['bh'];
                            $c=$row['bc'];  
                            $image=$row['bimg'];
                            $d=$row['bd']; 
                            ?>
                            <tbody>
                              <tr>
                                <td><input type="checkbox" name="c[]" value="<?php echo $uid;?>"></td>
                                <td><?php echo $h;?></td>                                
                                <td><?php echo $c;?></td>
                                <td><img src="<?php echo $image;?>" class="img-thumbnail" height="50" width="50"></td>
                                <td><?php echo $d;?></td>
                                <td><a href="db.php?blogedit=<?php echo $uid?>" class="btn btn-primary">Edit</a>
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