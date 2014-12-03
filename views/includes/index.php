<?php

require_once "classUserRoles.php";
$user=new userFunctions();
$user->addAsset("Chair", "Furniture", "02-12-2014", "3", "02-11-2013","ffcfcgf");


require_once "classConnection.php";
$userF=new connection("Athman","password");
$userF->connectToDatabase();


/*$query="INSERT INTO Clients 
                     (FirstName, 
                      Surname, 
                      PhoneNumber, 
                      IdNumber, 
                      RegistrationDate)
          VALUES ('Brian','Onyando','0725946968','28457228','10-10-2014')";*/

$query="SELECT * 
        FROM Assets";

$result = $userF->query($query);
if( $result === false)
{
     echo "Error in query preparation/execution.\n";
     die( print_r( sqlsrv_errors(), true));
}

//Retrieve each row as an associative array and display the results.
while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC))
{
      echo $row['AssetName'].", ".$row['AssetType'].", ".$row['AssetDescription']."</br>";
}

/*$query = "SELECT CONVERT(varchar(32), SUSER_SNAME())";
$result = $conn->query($query);

/* Retrieve and display the results of the query. 
$row = sqlsrv_fetch_array($result);
echo "User login: ".$row[0]."</br>";*/

?>