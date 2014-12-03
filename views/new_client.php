<?php

    //includes
    include("includes/nav.php");   
    include("includes/classUserRoles.php");

    $userFunction=new userFunctions();
    
    //check if post variable has stuff(form is filled)
    if(isset($_POST['first_name'])        &&
       isset($_POST['surname'])           &&
       isset($_POST['phone_number'])      &&
       isset($_POST['id_number'])         &&
       isset($_POST['registration_date']) 
      ){
        
        //form inputs
        $firstname=$_POST['first_name'];
        $surname=$_POST['surname'];
        $phone=$_POST['phone_number'];
        $idNumber=$_POST['id_number'];
        $regDate=$_POST['registration_date'];  
        
        
        //add details to clients table
        $result=$userFunction->addClient($firstname, $surname, $phone, $idNumber, $regDate);
        if($result == "success"){
            $msgClass="alert-success";
            $msg="Client registered successfully!";
        }
        
        else{
            $msgClass="alert-error";
            $msg="Could not register client now!";

        }
        
       }

?>

    <!-- Page Content -->
    <div id="page-content-wrapper" style="margin: 0; padding: 0;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <form accept-charset="UTF-8" action="new_client.php" class="form-signin" style="max-width: 330px; display: block; margin: auto;"                            enctype="multipart/form-data" id="new_task" method="post">
                        
                        <?php
                                //display the error/success message
                                if(isset($msgClass) && isset($msg)){
                                        echo '<div class="alert '.$msgClass.'">
                                        <a href="#" class="close" data-dismiss="alert">&times</a>
                                       '.$msg.'
                                    </div>'; 
                                }
                        
                        ?>
                        
                        
                        <div style="display:block"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden"                               value="X/ebtXac2ncy15haszff6iLyXjp7jDqWR+Rp51TgC0s=" /></div>
                        <h2>New Client</h2>
                        <input class="form-control" id="first_name" name="first_name" placeholder="first name" required="required" type="text" />
                        
                        <input class="form-control" id="surname" name="surname" placeholder="surname" required="required" type="text" />
                        
                        <input class="form-control" id="phone_number" name="phone_number" placeholder="phone number" required="required" type="text" />
                        
                        <input class="form-control" id="id_number" name="id_number" placeholder="id number" required="required" type="text" />
                        
                        <div class="input-group date">
                            <input type="text" class="form-control" name="registration_date" id="registration_date" placeholder="registration date"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                        </div>
                        
                        <input class="btn btn-lg btn-primary btn-block" name="commit" type="submit" value="Register Client" />
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