<!DOCTYPE html>
<?php
require_once "classUserManager.php";
$usermanager=new userManager();

//Session doesnt exist
if($usermanager->isSessionValid() == false){
  header('Location: login.php');
die();
}


?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-datepicker.css" rel="stylesheet">
    <link href="../css/bootstrap-select.min.css" rel="stylesheet">
    <!--<link href="../css/custom_forms.css" rel="stylesheet">-->

    <!-- Custom CSS -->
    <link href="../css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="index.php">
                        Fleet Company
                    </a>
                </li>
				<li>
                    <a href="new_client.php">Add Client</a>
                </li>
				<li>
                    <a href="new_route.php">Add Travel Route</a>
                </li>
                <li>
                    <a href="new_ticket.php">Sell Ticket</a>
                </li>
				<li>
                    <a href="new_role.php">Add Job Role</a>
                </li>
				<li>
                    <a href="new_staff.php">Add Staff</a>
                </li>
				<li>
                    <a href="new_asset.php">Add Asset</a>
                </li>
				
                <li>
                    <a href="new_expense.php">Record an Expense</a>
                </li>
                
                
                <li>
                    <a href="view_tickets.php">View Tickets</a>
                </li>
                <li>
                    <a href="view_expenses.php">View Expenses</a>
                </li>
                <li>
                    <a href="view_assets.php">View Assets</a>
                </li>
                <li>
                    <a href="view_staff.php">View Staff</a>
                </li>
                <li>
                    <a href="view_clients.php">View Clients</a>
                </li>
                <li>
                    <a href="view_routes.php">View Travel Routes</a>
                </li>
                <li>
                    <a href="view_roles.php">View Roles</a>
                </li>
				<li>
                    <a href="logout.php">Logout <span style="font-size: 10px">[<?php echo $_SESSION["username"]; ?>]</span></a>
                </li>
            </ul>
            
            
        </div>
        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle" style="margin: 0;" >>></a>
        <!-- /#sidebar-wrapper -->