<?php
    include("includes/nav.php");
?>

    <!-- Page Content -->
    <div id="page-content-wrapper" style="margin: 0; padding: 0;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <form accept-charset="UTF-8" action="/tasks" class="form-signin" style="max-width: 330px; display: block; margin: auto;" enctype="multipart/form-data" id="new_task" method="post"><div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="X/ebtXac2ncy15haszff6iLyXjp7jDqWR+Rp51TgC0s=" /></div>
                        <h2>Create Asset</h2>
                        <input class="form-control" id="asset_name" name="asset_name" placeholder="asset name" required="required" type="text" />
                        
                        <input class="form-control" id="asset_type" name="asset_type" placeholder="asset type" required="required" type="text" />
                        
                        <div class="input-group date">
                            <input type="text" class="form-control" name="date_of_purchase" id="date_of_purchase" placeholder="date of purchase"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                        </div>
                        
                        <div class="input-group date">
                            <input type="text" class="form-control" name="date_of_registration" id="date_of_registration" placeholder="registration date"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                        </div>
                        
                        <input class="form-control" id="asset_model" name="asset_model" placeholder="asset_model" required="required" type="text" />
                        
                        <textarea class="form-control" id="asset_description" name="asset_description" placeholder="asset description" required="required"></textarea>
                        
                        <input class="form-control" id="assigned_to" name="assigned_to" placeholder="assigned_to" required="required" type="text" />
                        
                        <input class="btn btn-lg btn-primary btn-block" name="commit" type="submit" value="Create Task" />
                    </form>
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