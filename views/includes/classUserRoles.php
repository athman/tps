<?php
require_once "classConnection.php";
class userFunctions{
    var $conn;
    
    //constructor
    function __construct(){
        $connection=new connection("Athman","password");
        $loginStatus=$connection->connectToDatabase();
        
        //successful login
        if($loginStatus === true){   
            $this->conn=$connection;
        }       
        
        else
            die ($loginStatus);
        
    }
    
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
        
        echo $this->executeQuery($query);
                
    }
    
    
    
    //function to execute queries
    function executeQuery($query){
        $result=$this->conn->query($query);
        
        //failed query
        if( $result === false )
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