<?php
    include("includes/nav.php");
    
    include("includes/classUserRoles.php");
    include("includes/classSystemRoles.php");

    $userFunction=new userFunctions();
    $systemFunction=new systemFunctions();
   

    $staffArray=array();
    

    //get list of staff and their ids
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
    if(isset($_POST['expense_name'])        &&
       isset($_POST['expense_type'])           &&
       isset($_POST['expense_price'])      &&
       isset($_POST['expense_date'])         &&
       isset($_POST['expense_spender'])
      ){
        //var_dump($_POST);
        //form inputs
        $Name=$_POST['expense_name'];
        $Type=$_POST['expense_type'];
        $price=$_POST['expense_price'];
        $date=$_POST['expense_date'];
        $spender=$_POST['expense_spender'];
               
        
        
        //add details to assets table
         $result=$userFunction->addExpense($Name, $Type, $date, $price, $spender);
        if($result == "success"){
            $msgClass="alert-success";
            $msg="Expense registered successfully!";
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
                        <h2>New Expense</h2>
                        
                        
                        <b>Type:</b> <select class="selectpicker show-tick" name="expense_type" title='Choose one of the following...' data-live-search="false" data-width="262px";>
                        <option id="expense_id" value="Vehicles">Vehicles</option>
                        <option id="expense_id" value="Furniture">Furniture</option>
                        <option id="expense_id" value="Stationery">Stationery</option>
                        <option id="expense_id" value="Fuel">Fuel</option>
                        <option id="expense_id" value="Spare Parts">Spare Parts</option>
                        <option id="expense_id" value="Computers">Computers</option>
                        <option id="expense_id" value="Phones">Phones</option>
                        <option id="expense_id" value="Miscellaneous">Miscellaneous</option>
                                </select> 
                        <input class="form-control" id="expense_name" name="expense_name" placeholder="expense name" required="required" type="text" />
                        
                        <div class="input-group date">
                            <input type="text" class="form-control" name="expense_date" required id="expense_date" placeholder="expense date"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                        </div>
                        
                        <input class="form-control" id="expense_price" name="expense_price" placeholder="Amount" required="required" max="10000000" type="number" />
                        
                        <b>Spender:</b> <select class="selectpicker show-tick" name="expense_spender" title='Choose one of the following...' data-live-search="true" data-width="262px";>
                                    <?php
                                        foreach($staffArray as $key=>$value){
                                        echo '<option id="expense_id" value="'.$key.'">'.$value.'</option>';
                            }   
                        ?>  
                                </select>
                        
                                                      
                        <input class="btn btn-lg btn-primary btn-block" name="commit" type="submit" value="Record Expense" />
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