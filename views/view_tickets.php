<?php
    include("includes/nav.php");
    require_once "includes/classSystemRoles.php";
    $systemFunctions=new systemFunctions();
    
    //select all ticket entries
    $query="SELECT *
            FROM Tickets";

    $result=$systemFunctions->getData($query);
?>

    <!-- Page Content -->
    <div id="page-content-wrapper" style="margin: 0; padding: 0;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-stripped table-hover">
                        <caption><h3>Tickets</h3></caption>
                        <thead>
                            <th>
                                <td>TICKET ID</td>
                                <td>PASSENGER NAME</td>
                                
                                <td>ROUTE</td>
                                <td>BOOKING DATE</td>
                                <td>TRAVEL DATE</td>
                                <td>PRICE</td>
                                <td></td>
                            </th>
                        </thead>
                        <tbody>
                            <?php
                            

                            //dynamically populate table
                            while($row=sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
                                   //get passenger name
                                    $queryGetName="SELECT FirstName, Surname
                                            FROM Clients
                                            WHERE ClientId=".$row['ClientId'];
                                   $queryGetRoute="SELECT Name
                                            FROM TravelRoutes
                                            WHERE RouteId=".$row['RouteId'];
                                    
                                
                                    $resultName=sqlsrv_fetch_array($systemFunctions->getData($queryGetName),SQLSRV_FETCH_ASSOC);
                                    $resultRoute=sqlsrv_fetch_array($systemFunctions->getData($queryGetRoute),SQLSRV_FETCH_ASSOC);
                                
                                echo "<tr>
                                    <td></td>
                                    <td class='ticket_id'>".$row['TicketId']."</td>
                                    <td>".$resultName['FirstName']." ".$resultName['Surname']."</td>
                                    <td>".$resultRoute['Name']."</td>
                                    
                                    <td>".$row['BookingDate']->format('d-m-Y')."</td>
                                    <td>".$row['TravelDate']->format('d-m-Y')."</td>
                                    <td>KES ".$row['AmountPaid']."</td>
                                    <td><span class='delete_ticket' style='text-align:center; cursor: pointer; font-weight: bold; color:#FF0033'>X</span></td>
                                </tr>";
                                

                            }



                            ?>
                                                       </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php
    include("includes/footer.php");
?>