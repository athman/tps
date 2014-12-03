<?php

session_start();
class connection{
    var $username;
    var $password;
    var $server;
    var $connectionInfo;
    var $database;
    var $conn;
    
    
    function __construct($user, $pass){
        $this->username=$user;
        $this->password=$pass;
        $this->server= "(local)";
        $this->database="FleetCompany";
        $this->connectionInfo = array( "UID"=>$user,
						          "PWD"=>$pass,
						          "Database"=>$this->database);
        
    }
    
    //Function to connect to database
    function connectTodatabase(){
      $conn = sqlsrv_connect( $this->server, $this->connectionInfo);
        //failed connection
        if( $conn === false )
        {
             if( ($errors = sqlsrv_errors() ) != null)
              {
                    $errorMsg=$errors[0]['message'];                    
                    return $errorMsg;
              }
        }    
        
        //successfull connection
        else{
             $this->conn=$conn;  
             return true;
        }
    }
    
    
    //Function to query
    function query($query){
        $result = sqlsrv_query( $this->conn, $query);
        if( $result === false )
        {
            if( ($errors = sqlsrv_errors() ) != null)
              {
                 $errorMsg="message: ".$errors[0][ 'message']."</br>";
                    echo $errorMsg;
              }

        }
         else{
            return $result; 
         }
        
    }
 
    
    
}


?>