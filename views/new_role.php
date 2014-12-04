<?php
    include("includes/nav.php");
    include("includes/classUserRoles.php");

    $userFunction=new userFunctions();
    
    //check if post variable has stuff(form is filled)
    if(isset($_POST['role_name'])        &&
       isset($_POST['role_salary'])  
      ){
    
        //form inputs
        $name=$_POST['role_name'];
        $salary=$_POST['role_salary'];  
        
        
        //add details to clients table
        $result=$userFunction->addRole($name, $salary);
        if($result == "success"){
            $msgClass="alert-success";
            $msg="Role ".$name." added successfully!";
        }
        
        else{
            $msgClass="alert-danger";
            $msg="Could not register client now!";

        }
        
       }
?>

    <!-- Page Content -->
    <div id="page-content-wrapper" style="margin: 0; padding: 0;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <form accept-charset="UTF-8" action="#" class="form-signin" style="max-width: 330px; display: block; margin: auto;" enctype="multipart/form-data" id="new_task" method="post">
                        
                         <?php
                                //display the error/success message
                                if(isset($msgClass) && isset($msg)){
                                        echo '<div class="alert '.$msgClass.'">
                                        <a href="#" class="close" data-dismiss="alert">&times</a>
                                       '.$msg.'
                                    </div>'; 
                                }
                        
                        ?>  
                        
                        <div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="X/ebtXac2ncy15haszff6iLyXjp7jDqWR+Rp51TgC0s=" /></div>
                        <h2>New Role</h2>
                        <input class="form-control" id="role_name" name="role_name" placeholder="role name" required="required" type="text" />
                        
                        <input class="form-control" id="role_salary" name="role_salary" step="500" placeholder="role salary" required="required" type="number" />
                        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Create Role" />
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php
    include("includes/footer.php");
?>