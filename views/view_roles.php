<?php
    include("includes/nav.php");
    require_once "includes/classSystemRoles.php";
    $systemFunctions=new systemFunctions();
    
    //select all ticket entries
    $query="SELECT *
            FROM Roles";

    $result=$systemFunctions->getData($query);
?>

    <!-- Page Content -->
    <div id="page-content-wrapper" style="margin: 0; padding: 0;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-stripped table-hover">
                        <caption><h3>Job Roles</h3></caption>
                        <thead>
                            <th>
                                <td>ROLE ID</td>
                                <td>NAME</td>
                                <td>BASIC SALARY</td>
                                <td></td>
                            </th>
                        </thead>
                        <tbody>
                            <?php
                            
                    while($row=sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
                                echo "<tr>
                                    <td></td>
                                    <td class='ticket_id'>".$row['RoleId']."</td>
                                    <td>".$row['Name']."</td>
                                    <td>KES ".$row['Salary']."</td>
                                    <td><span class='delete_role' style='text-align:center; cursor: pointer; font-weight: bold; color:#FF0033'>X</span></td>
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