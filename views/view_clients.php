<?php
    include("includes/nav.php");
    require_once "includes/classSystemRoles.php";
    $systemFunctions=new systemFunctions();
    
    //select all ticket entries
    $query="SELECT *
            FROM Clients";

    $result=$systemFunctions->getData($query);
?>

    <!-- Page Content -->
    <div id="page-content-wrapper" style="margin: 0; padding: 0;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-stripped table-hover">
                        <caption><h3>Clients</h3></caption>
                        <thead>
                            <th>
                                <td>CLIENT ID</td>
                                <td>FIRSTNAME</td>
                                <td>SURNAME</td>
                                <td>PHONE</td>
                                <td>ID NUMBER</td>
                                <td>REGISTRATION DATE</td>
                                <td></td>
                            </th>
                        </thead>
                        <tbody>
                            <?php
                            

                            //dynamically populate table
                            while($row=sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
                                                                  
                                
                                echo "<tr>
                                    <td></td>
                                    <td class='ticket_id'>".$row['ClientId']."</td>
                                    <td>".$row['FirstName']."</td>
                                    <td>".$row['Surname']."</td>
                                    <td>".$row['PhoneNumber']."</td>
                                    <td>".$row['IdNumber']."</td>
                                    <td>".$row['RegistrationDate']->format('d-m-Y')."</td>
                                    <td><span class='delete_client' style='text-align:center; cursor: pointer; font-weight: bold; color:#FF0033'>X</span></td>
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