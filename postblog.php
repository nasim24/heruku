<?php    
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
                        <h4>Post Blog</h4>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="db.php" method="POST">
                              <div class="form-group row">
                                <label  class="col-4 col-form-label">Heading</label> 
                                <div class="col-8">
                                <input type="text" name="heading" value="" class="form-control">
                                </div>
                              </div>
                             
                             
                              <div class="form-group row">
                                <label for="email" class="col-4 col-form-label ">Category</label> 
                                <div class="col-8">
                                <select name="category" class="form-control">
                                  <option>--Choose Category--</option>
                                  <option value="Technology">Technology</option>
                                  <option value="Startup">Startup</option>
                                </select>
                                </div>
                              </div>
                             
                           
                              <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Image</label> 
                                <div class="col-4">
                                  
                                  <input type="file" name="image" class="form-control"><br>
                                 
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Blog Description</label> 
                                <div class="col-8">
                             
                             <textarea rows="3" cols="70" name="description"></textarea>
                                </div>
                              </div>
                          
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                <input type="submit" name="postinsert" value="post blog">
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