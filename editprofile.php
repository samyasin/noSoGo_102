<?php 
require_once 'includes/header.php';
require_once 'includes/user.php';

if(isset($_POST['submit'])){
    $userModel = new user();
    if($_FILES['profile_image']['error'] === 0){
        $userModel->profilePic = $_FILES['profile_image']['name'];
        move_uploaded_file($_FILES['profile_image']['tmp_name'],'images/profile_images/'.$_FILES['profile_image']['name'] );
    }else{
        $userModel->profilePic = $userSet['image_pic'];
    }
    $userModel->email    = $_POST['email'];
    $userModel->username = $_POST['username'];
    $userModel->job      = $_POST['job'];
    $userModel->gender   = $_POST['gender'];
    $userModel->address  = $_POST['address'];
    $result = $userModel->update($_SESSION['user_id']);
    if($result){
        echo "success";
    }else{
        echo "failure";
    }
}

?>
<div id="content">
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="data-container">
           <div class="container-fluid">
            
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                      <div class="panel-heading panel-heading-gray">Edit your Information</div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" action="editprofile.php" method="post" enctype="multipart/form-data">                       
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">User Name: </label>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="text" class="form-control" placeholder="username" name="username" value="<?php echo $userSet['username']; ?>">
                                        </div>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-sm-2 control-label">Email: </label>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input type="text" class="form-control" placeholder="email" name="email" value="<?php echo $userSet['email']; ?>">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Profile Pic: </label>                               
                                    <div class="col-sm-10">                                        
                                        <div class="input-group ">  
                                            <span class="input-group-addon"><i class="fa fa-picture-o"></i></span>
                                            <div class="wrap2">
                                                <input type="file" name="profile_image"></div>
                                        </div>
                                    </div>                                  
                                </div>
                                 
                                 <div class="form-group">
                                    <label class="col-sm-2 control-label">Job: </label>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-list-alt"></i></span>
                                            <input type="text" class="form-control" placeholder="job" name="job" value="<?php echo $userSet['job']; ?>">
                                        </div>
                                    </div>
                                </div>
                               
                                 <div class="form-group">
                                    <label class="col-sm-2 control-label">Gender: </label>
                                    <div class="col-sm-10">
                                       <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-male"></i></span>
                                        <select name="gender" class="selectpicker"  data-size="2">
                                            <option
                                            <?php echo $userSet['gender'] == "male" ? "selected='selected'":"";?>    
                                                value="male">Male</option>
                                            <option
                                            <?php echo $userSet['gender'] == "female" ? "selected='selected'":"";?>        
                                                value="female">Female</option>
                                            
                                        </select>
                                       </div></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Address: </label>
                                    <div class="col-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                                            <input type="text" class="form-control" placeholder="address" name="address" value="<?php echo $userSet['address'];?>">
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button type="submit" class="btn btn-primary" name="submit">update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
             
            </div>
        </div>

            </div></div></div>
</div>
<script src="js/vendor.min.js"></script>
<script src="js/scripts.min.js"></script>
</body>
</html>