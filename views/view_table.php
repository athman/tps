<?php
require_once "includes/classSystemRoles.php";
$systemFunctions=new systemFunctions();

$query="SELECT *
        FROM Tickets";

$result=$systemFunctions->getData($query);

while($row=sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
    echo $row['TicketId']." ".$row['ClientId']." ".$row['AmountPaid']." ".$row['RouteId']."  ".$row['BookingDate']->format('d-m-Y')." </br>";
    
}


?>