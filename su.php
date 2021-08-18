<?php
$sql="select * from user where role='user' AND suspend='1' ";
$res=mysqli_query($conn,$sql);

include 'adminheader.php';

?>

    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4>SUSPEND USERS</h4>
                        <hr>
                    </div>

                </div>
                <form action="db.php" method="POST">
                  <input type="submit" class="btn btn-success" name="unsuspend" value="unsuspend">
                  <input type="submit" class="btn btn-danger" name="delete" value="Delete">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col"><input type="checkbox"></th>
                                <th scope="col">Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Email</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <?php
                            foreach($res as $row)
                            {
                            $uid=$row['id'];
                            $n=$row['name'];
                            $e=$row['email'];
                            $c=$row['contact'];
                            $img=$row['image']; 
                            ?>
                            <tbody>
                              <tr>
                                <td><input type="checkbox" name="c[]" value="<?php echo $uid;?>"></td>
                                <td><?php echo $n;?></td>
                                <td><img src="<?php echo $img;?>" class="img-thumbnail" height="50" width="50"></td>
                                <td><?php echo $e;?></td>
                                <td><?php echo $c;?></td>
                                <td><a href="db.php?suedit2=<?php echo $uid;?>" class="btn btn-primary">Edit</a></td>
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