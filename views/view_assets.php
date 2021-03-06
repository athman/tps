<?php
    include("includes/nav.php");
    require_once "includes/classSystemRoles.php";
    $systemFunctions=new systemFunctions();
    
    //select all ticket entries
    $query="SELECT *
            FROM Assets";

    $result=$systemFunctions->getData($query);
?>

    <!-- Page Content -->
    <div id="page-content-wrapper" style="margin: 0; padding: 0;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-stripped table-hover">
                        <caption><h3>Assets</h3></caption>
                        <thead>
                            <th>
                                <td>ASSET ID</td>
                                <td>ASSET NAME</td>
                                <td>ASSET TYPE</td>
                                <td>PURCHASE DATE</td>
                                <td>REGISTRATION DATE</td>
                                <td>ASSIGNEE</td>
                                <td>DESCRIPTION</td>
                                <td></td>
                            </th>
                        </thead>
                        <tbody>
                            <?php
                            

                            //dynamically populate table
                            while($row=sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
                                   //get passenger name
                                    $queryGetName="SELECT FirstName, Surname
                                            FROM Staff
                                            WHERE StaffId = ".$row['AssignedTo'];

                                    $resultName=sqlsrv_fetch_array($systemFunctions->getData($queryGetName),SQLSRV_FETCH_ASSOC);
                                
                                echo "<tr>
                                    <td></td>
                                    <td class='ticket_id'>".$row['AssetId']."</td>
                                    <td>".$row['AssetName']."</td>
                                    <td>".$row['AssetType']."</td>
                                    <td>".$row['DateOfPurchase']->format('d-m-Y')."</td>
                                    <td>".$row['RegistrationDate']->format('d-m-Y')."</td>
                                    <td>".$resultName['FirstName']." ".$resultName['Surname']."</td>
                                    <td>".$row['AssetDescription']."</td>
                                    <td><span class='delete_asset' style='text-align:center; cursor: pointer; font-weight: bold; color:#FF0033'>X</span></td>
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