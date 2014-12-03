<?php
require_once "classConnection.php";
class userManager{
    var $username;
    var $password;
    var sessionTime;
    
    //constructor
    function __construct(){
         
        $this->sessionTime=10;  //session time of 10 minutes
    }
    
    
    //log in
    function login($user, $pass){
        $connection=new connection($user, $pass);
        $loginStatus=$connection->connectToDatabase();
        
        //successful login
        if($loginStatus === true){
            echo "Loged in!";    
            $this->username=$connection->username;
            $this->password=$connection->password;
            $this->createSession();
        }       
        
        else
            die ($loginStatus);
        
    }
    
    
    
    //sign up
    function signup(){
        
        
    }
    
    
    
    
    //create session
    function createSession(){        
        # Initialize variables
		$_SESSION['password']=$this->password;
        $_SESSION['username']=$this->username;
		$_SESSION['timeout']=time();
    }
    
     //function to check if session is valid
    function isSessionValid(){
        if(isset($_SESSION['username'])){
           $time=$_SESSION['timeout'];  
            
            //check if time has expired
            if($time > (time()-(60 * $this->sessionTime))){
                
                $_SESSION['timeout']=time();
                return true;
            }
            else
                return false;
        }
        else
            return false;        
    }
    
    
    
    
    
    
}

?>