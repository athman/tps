<?php
require_once "../includes/classSystemRoles.php";
$systemRoles=new systemFunctions();

$action=$_POST['action'];
switch($action){
    
    //delete ticket
    case "delete_ticket":

        $id=$_POST['id'];
        $query="DELETE FROM Tickets 
                WHERE TicketId =".$id;
        echo $systemRoles->executeQuery($query);
        break;
    
    //delete expense
    case "delete_expense":

        $id=$_POST['id'];
        $query="DELETE FROM Expenses 
                WHERE ExpenseId =".$id;
        echo $systemRoles->executeQuery($query);
        break;
    
    //delete route
    case "delete_route":

        $id=$_POST['id'];
        $query="DELETE FROM TravelRoutes 
                WHERE RouteId =".$id;
        echo $systemRoles->executeQuery($query);
        break;
    
    //delete client
    case "delete_client":

        $id=$_POST['id'];
        $query="DELETE FROM Clients 
                WHERE ClientId =".$id;
        echo $systemRoles->executeQuery($query);
        break;
    
    //delete role
    case "delete_role":

        $id=$_POST['id'];
        $query="DELETE FROM Roles 
                WHERE RoleId =".$id;
        echo $systemRoles->executeQuery($query);
        break;
    
     //delete staff
    case "delete_staff":

        $id=$_POST['id'];
        $query="DELETE FROM Staff 
                WHERE StaffId =".$id;
        echo $systemRoles->executeQuery($query);
        break;
    
      //delete asset
    case "delete_asset":

        $id=$_POST['id'];
        $query="DELETE FROM Assets 
                WHERE AssetId =".$id;
        echo $systemRoles->executeQuery($query);
        break;
    
    
    
    

}

?>