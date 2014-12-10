<?php
require_once "../includes/classUserManager.php";
$usermanager=new userManager();
	if(isset($_POST['action'])){
		$action=$_POST['action'];
		switch($action){
			case 'login':
			
				if(isset($_POST['username']) && isset($_POST['password'])){
					$username=$_POST['username'];
					$password=$_POST['password'];
					$usermanager->login($username, $password);			
			
				}//end if
			
			else
				echo "MISSING_CREDENTIAL(S)";
		}//end switch
	}//end outer if
?>