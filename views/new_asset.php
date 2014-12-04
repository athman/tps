<?php
    include("includes/nav.php");
    include("includes/classUserRoles.php");
    include("includes/classSystemRoles.php");

    $userFunction=new userFunctions();
    $systemFunction=new systemFunctions();
   

    $staffArray=array();
    

    //get list of roles and their ids
    $query="SELECT FirstName, Surname, StaffId, RoleId
            FROM Staff";
    $result=$systemFunction->getData($query);

    if($result === false){
        echo "Error getting client list";
    }
    else{
        while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC))
            {
                //get name of role
                $query="SELECT Name
                        FROM Roles
                        WHERE RoleId=".$row['RoleId'];
            
                $res=$systemFunction->getData($query);
                $record= sqlsrv_fetch_array( $res, SQLSRV_FETCH_ASSOC);
                

                //store name and Id in associative array
                $staffArray[$row['StaffId']]=$row['FirstName']." ".$row['Surname']." (".$record['Name'].")";
            }
    }
    
    //check if post variable has stuff(form is filled)
    if(isset($_POST['asset_name'])        &&
       isset($_POST['asset_type'])           &&
       isset($_POST['date_of_purchase'])      &&
       isset($_POST['date_of_registration'])         &&
       isset($_POST['asset_description']) &&
       isset($_POST['assigned_to'])
      ){
        //var_dump($_POST);
        //form inputs
        $assetName=$_POST['asset_name'];
        $assetType=$_POST['asset_type'];
        $pDate=$_POST['date_of_purchase'];
        $rDate=$_POST['date_of_registration'];
        $desc=$_POST['asset_description'];
        $assigned=$_POST['assigned_to'];
        
        
        
        //add details to assets table
         $result=$userFunction->addAsset($assetName, $assetType, $pDate, $assigned, $rDate, $desc);
        if($result == "success"){
            $msgClass="alert-success";
            $msg="Asset ".$assetName." registered successfully!";
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
                    <form accept-charset="UTF-8" action="new_asset.php" class="form-signin" style="max-width: 330px; display: block; margin: auto;"                                         enctype="multipart/form-data" id="new_task" method="post">
                        
                         <?php
                                //display the error/success message
                                if(isset($msgClass) && isset($msg)){
                                        echo '<div class="alert '.$msgClass.'">
                                        <a href="#" class="close" data-dismiss="alert">&times</a>
                                       '.$msg.'
                                    </div>'; 
                                }
                        ?>
                        
                        <div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden"                                value="X/ebtXac2ncy15haszff6iLyXjp7jDqWR+Rp51TgC0s=" /></div>
                        <h2>New Asset</h2>
                        <input class="form-control" id="asset_name" name="asset_name" placeholder="asset name" required="required" type="text" />
                        
                        <input class="form-control" id="asset_type" name="asset_type" placeholder="asset type" required="required" type="text" />
                        
                        <div class="input-group date">
                            <input type="text" class="form-control" name="date_of_purchase" id="date_of_purchase" required placeholder="date of purchase">                                   <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                        </div>
                        
                        <div class="input-group date">
                            <input type="text" class="form-control" name="date_of_registration" required id="date_of_registration" placeholder="registration-date"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                        </div>
                        
                       
                        
                        <textarea class="form-control" id="asset_description" name="asset_description" placeholder="asset description" required="required"></textarea>
                        
                        <b>Assigned To:</b> <select class="selectpicker show-tick" name="assigned_to" title='Choose a staff member to assign..' data-live-search="true" data-width="290px" required;>
                                        <?php
                            foreach($staffArray as $key=>$value){
                                echo '<option id="staff_id" value="'.$key.'">'.$value.'</option>';
                                
                            }   
                        ?>   
                                    </select>
                        
                        <input class="btn btn-lg btn-primary btn-block" name="commit" type="submit" value="Register Assset" />
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