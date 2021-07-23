<?php
    if(isset($_POST['add_user'])){
        $user_name = $_POST['user_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];    
        $user_role = $_POST['user_role']; 
        //$password = password_hash($password,PASSWORD_BCRYPT,array('cost'=>10));
        
        $query = "INSERT INTO users(user_name, email, password, user_role) VALUES ('$user_name','$email','$password','$user_role')";
        $result = mysqli_query($connect,$query);
        if(!$result){
            die('Query fail'.mysqli_error($connect));
        }else{
            echo 'You have successfully inserted';
        }
    }
?>
 <div class="container">
     <div class="row">
        <div class="col-sm-8">
            <form action="" method="post" enctype="multipart/form-data">
                 <div class="form-group">
                      <label for="" class="control-label col-sm-3">User Name</label>
                        <div class="col-sm-9">
                            <input type="text" id="" class="form-control" name="user_name"><br>
                        </div>
                    </div>

                    <div class="form-group">
                       <label for="" class="control-label col-sm-3">Email</label>
                       <div class="col-sm-9">
                           <input type="email" id="" class="form-control" name="email"><br>
                       </div> 
                    </div>
                    
                    <div class="form-group">
                       <label for="" class="control-label col-sm-3">Password</label>
                       <div class="col-lg-9">
                           <input type="password" id="" class="form-control" name="password"><br>
                       </div>
                    </div>

                    <div class="form-group">
                       <label for="" class="control-label col-sm-3">Role</label>
                       <div class="col-sm-9">
                          <select name="user_role" id="" class="form-control">
                             <option value="subscriber">---Select User Role</option>
                              <option value="admin">Admin</option>
                              <option value="subscriber">Subscriber</option>
                          </select><br>
                       </div>
                    </div>
                    
                    <div class="form-group">
                       <div class="col-sm-9 col-sm-offset-3">
                           <input type="submit" value="Add User" class="btn btn-danger" name="add_user">
                       </div>
                </div>
            </form>
        </div>
    </div>
 </div>