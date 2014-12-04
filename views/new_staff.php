<?php
    include("includes/nav.php");
    include("includes/classSystemRoles.php");
    include("includes/classUserRoles.php");

    $systemFunction=new systemFunctions();
    $userFunction=new userFunctions();

    $rolesArray=array();
    

    //get list of roles and their ids
    $query="SELECT RoleId, Name
            FROM Roles";
    $result=$systemFunction->getData($query);

    if($result === false){
        echo "Error getting client list";
    }
    else{
        while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC))
            {
           
                //store name and Id in associative array
                $rolesArray[$row['RoleId']]=$row['Name'];
            }
    }


    //check if post variable has stuff(form is filled)
    if(isset($_POST['first_name'])        &&
       isset($_POST['surname'])           &&
       isset($_POST['phone_number'])      &&
       isset($_POST['id_number'])         &&
       isset($_POST['date_of_birth'])      &&
       isset($_POST['role-name'])
       
      ){
        //var_dump($_POST);
        
        //form inputs
        $firstName=$_POST['first_name'];
        $surname=$_POST['surname'];
        $phone=$_POST['phone_number'];
        $id=$_POST['id_number'];
        $dateOfBirth=$_POST['date_of_birth'];
        $roleId=$_POST['role-name'];
        
        
        //add details to staff table
        $result=$userFunction->addStaff($firstName, $surname, $phone, $id, $dateOfBirth, $roleId);
        if($result == "success"){
            $msgClass="alert-success";
            $msg="New ".$rolesArray[$roleId]." staff created successfully!";
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
                        <h2>New Staff</h2>
                        <input class="form-control" id="first_name" name="first_name" placeholder="first name" required="required" type="text" />
                        
                        <input class="form-control" id="surname" name="surname" placeholder="surname" required="required" type="text" />
                        
                        <input class="form-control" id="phone_number" name="phone_number" placeholder="phone number" required="required" type="text" />
                        
                        <input class="form-control" id="id_number" name="id_number" placeholder="id number"  max="99999999" required="required" type="number" />
                        
                        <div class="input-group date">
                            <input type="text" class="form-control" name="date_of_birth" id="date_of_birth" placeholder="date of birth" required><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                        </div>
                        
                        <b>Role:</b> <select class="selectpicker show-tick" name="role-name" title='Choose one of the following...' data-live-search="true" data-width="290px";>
                                        <?php
                            foreach($rolesArray as $key=>$value){
                                echo '<option id="role_id" value="'.$key.'">'.$value.'</option>';
                                
                            }   
                        ?>   
                                    </select>
                        <input class="btn btn-lg btn-primary btn-block" name="commit" type="submit" value="Register Staff" />
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