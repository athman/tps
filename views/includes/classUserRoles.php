<?php
require_once "classConnection.php";
class userFunctions{
    var $conn;
    
    //constructor
    function __construct(){
        $connection=new connection("Brayo","password");
        $loginStatus=$connection->connectToDatabase();
        
        //successful login
        if($loginStatus === true){   
            $this->conn=$connection;
        }       
        
        else
            die ($loginStatus);
        
    }
    
    
    /*                  BEGIN USER FUNCTIONS                  */
    
     //function to add new client
    function addClient($fname, $sname, $phone, $idNo, $regDate){
       
       // $date=new DateTime($regDate);
        
        $query="INSERT INTO Clients 
                     (FirstName, 
                      Surname, 
                      PhoneNumber, 
                      IdNumber, 
                      RegistrationDate)
                      VALUES ('".$fname."','".$sname."','".$phone."','".$idNo."',convert(datetime,'".$regDate."',5))";
        
       return $this->executeQuery($query);       
        
    }
    
    
    
     //function to add new asset
    function addAsset($name, $type, $purDate, $assigned, $regDate, $desc){
       
       // $date=new DateTime($regDate);
        
        $query="INSERT INTO Assets
                     (AssetName, 
                      AssetType, 
                      DateOfPurchase, 
                      AssignedTo, 
                      RegistrationDate,
                      AssetDescription)
                      VALUES   
                      ('".$name."','".$type."',convert(datetime,'".$purDate."',5),
                       '".$assigned."',convert(datetime,'".$regDate."',5),'".$desc."')";
        
        return $this->executeQuery($query);
                
    }
    
    
    
    //function to buy new ticket
    function buyTicket($clientId, $bookingDate, $travelDate, $routeId, $serviceType){
       $column="";
        $price=0;
        switch($serviceType){
            
           case "PASSENGER":
            $column="PassengerPrice";
            break;
            
          case "COURIER":
            $column="CargoPrice";
            break;
            
            default:
            $column="NOT SET";    
            
        }
        
        //get the price of the chosen route and service
        $query="SELECT ".$column."
                FROM TravelRoutes
                WHERE RouteId=".$routeId;
        $result=$this->conn->query($query);
        if($row=sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC)){
            $price=$row[$column];
        }
    
        
        //insert ticket purchase to tickets table
         $query="INSERT INTO Tickets
                     (ClientId, 
                      BookingDate, 
                      TravelDate, 
                      RouteId, 
                      AmountPaid,
                      TicketCost)
                      VALUES   
                      ('".$clientId."',convert(datetime,'".$bookingDate."',5),
                       convert(datetime,'".$travelDate."',5),'".$routeId."','".$price."','".$price."')";
        
        return $this->executeQuery($query);        
    }
    
    
    
    //function to add new role
    function addRole($name, $salary){
        
        $query="INSERT INTO Roles
                     (Name, 
                      Salary)
                      VALUES   
                      ('".$name."','".$salary."')";
        
        return $this->executeQuery($query);
                
    }
    
    
    //function to add new staff member
    function addStaff($firstName, $surname, $phone, $id, $dateOfBirth, $roleId){
        $query="INSERT INTO Staff
                     (FirstName, 
                      Surname, 
                      PhoneNumber, 
                      IdNumber, 
                      DateOfBirth,
                      RoleId)
                      VALUES   
                      ('".$firstName."','".$surname."','".$phone."','".$id."',
                      convert(datetime,'".$dateOfBirth."',5),".$roleId.")";
        
        return $this->executeQuery($query);        
        
        
        
    }
    
    
    //function to add an expense
    function addExpense($name, $type, $date, $amount, $spenderId){
        $query="INSERT INTO Expenses
                     (ExpenseName, 
                      ExpenseType, 
                      Date, 
                      Price, 
                      StaffId)
                      VALUES   
                      ('".$name."','".$type."',convert(datetime,'".$date."',5),
                        ".$amount.",".$spenderId.")";
        
        return $this->executeQuery($query);        
        
    }
    
    
    //function to execute queries
    function executeQuery($query){
        $result=$this->conn->query($query);
        
        //failed query
        if( $result == "false" )
        {
             if( ($errors = sqlsrv_errors() ) != null)
              {
                    $errorMsg=$errors[0]['message'];                    
                    return  $errorMsg;     
              }
        }    
        
        //successfull connection
        else{
             return "success";
        }
        
    }
    
    
    
}
?>