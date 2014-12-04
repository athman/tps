<?php
require_once "classConnection.php";
class systemFunctions{
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
    
     
    function getData($sql){
        return $this->conn->query($sql);
    }
    
    
    //function to add new route
    function newRoute($name,$distance,$cargoPrice,$passengerPrice){
        $query= "INSERT INTO TravelRoutes(Name,Distance,CargoPrice,OfferedService,PassengerPrice)
				 VALUES ('$name','$distance','$cargoPrice','PASSENGER','$passengerPrice')";
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