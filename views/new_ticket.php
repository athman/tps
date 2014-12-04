<?php
    include("includes/nav.php");
    include("includes/classSystemRoles.php");
    include("includes/classUserRoles.php");

    $systemFunction=new systemFunctions();
    $userFunction=new userFunctions();

    $clientsArray=array();
    $routesArray=array();
    

    //get list of clients and their ids
    $query="SELECT ClientId, FirstName, Surname
            FROM Clients";
    $result=$systemFunction->getData($query);

    if($result === false){
        echo "Error getting client list";
    }
    else{
        while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC))
            {
           
                //create single string to hold name
                $name=$row['FirstName']." ".$row['Surname'];
                //store name and Id in associative array
                $clientsArray[$row['ClientId']]=$name;
            }
    }

    

    //get list of routes and their ids
    $query="SELECT RouteId, Name
            FROM TravelRoutes";
    $result=$systemFunction->getData($query);

    if($result === false){
        echo "Error getting Routes list";
    }
    else{
        while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC))
            {
                //store name and Id in associative array
                $routesArray[$row['RouteId']]=$row['Name'];
            }

    }

    
    //check if post variable has stuff(form is filled)
    if(isset($_POST['client_id'])        &&
       isset($_POST['booking_date'])           &&
       isset($_POST['travel_date'])      &&
       isset($_POST['route_id']) &&
       isset($_POST['service-type'])
      ){
       // var_dump($_POST);
        
        //form inputs
        $clientId=$_POST['client_id'];
        $bookDate=$_POST['booking_date'];
        $travelDate=$_POST['travel_date'];
        $routeId=$_POST['route_id'];
        $serviceType=$_POST['service-type'];
        
        
        //add details to tickets table
        $result=$userFunction->buyTicket($clientId, $bookDate, $travelDate, $routeId, $serviceType);
        if($result == "success"){
            $msgClass="alert-success";
            $msg="Ticket purchase for ".$clientsArray[$clientId]." successfull!";
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
                    <form accept-charset="UTF-8" action="new_ticket.php" class="form-signin" style="max-width: 330px; display: block; margin: auto;" enctype="multipart/form-data" id="new_task" method="post">
                        
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
                        <h2>New Ticket</h2>
                        
                        <b>Client:</b> <select name="client_id" class="selectpicker show-tick" title='Choose one of the following...'  data-live-search="true" data-width="280px" required>
                        <?php
                            foreach($clientsArray as $key=>$value){
                                echo '<option id="client_id" value="'. $key.'">'.$value.'</option>';
                                
                            }   
                        ?>                    
                                            
                        </select>
                        
                        <div class="input-group date">
                            <input type="text" class="form-control" name="booking_date" id="booking_date" placeholder="booking date" required><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                        </div>
                        
                        <div class="input-group date">
                            <input type="text" class="form-control" name="travel_date" id="travel_date" placeholder="travel date" required><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                        </div>
                        
                        <b>Route:</b> <select name="route_id" class="selectpicker show-tick" title='Choose one of the following...' data-live-search="true" data-width="280px" required>                         
                        
                        <?php
                            foreach($routesArray as $key=>$value){
                                echo '<option id="route_id" value="'.$key.'">'.$value.'</option>';
                                
                            }   
                        ?>   
                                 </select>
                        <b>Service:</b> <select class="selectpicker show-tick" name="service-type" title='Choose one of the following...' data-live-search="false" data-width="262px";>
                                    <option value="PASSENGER">PASSENGER</option>
                                    <option value="COURIER">COURIER</option>
                                    
                                </select>
                        
                        <input class="btn btn-lg btn-primary btn-block" name="commit" type="submit" value="Book Ticket" />
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