<?php
    include("includes/nav.php");
?>

    <!-- Page Content -->
    <div id="page-content-wrapper" style="margin: 0; padding: 0;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <form accept-charset="UTF-8" action="#" class="form-signin" style="max-width: 330px; display: block; margin: auto;" enctype="multipart/form-data" id="new_task" method="post"><div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="X/ebtXac2ncy15haszff6iLyXjp7jDqWR+Rp51TgC0s=" /></div>
                        <h2>New Client</h2>
                        <input class="form-control" id="first_name" name="first_name" placeholder="first name" required="required" type="text" />
                        
                        <input class="form-control" id="surname" name="surname" placeholder="surname" required="required" type="text" />
                        
                        <input class="form-control" id="phone_number" name="phone_number" placeholder="phone number" required="required" type="text" />
                        
                        <input class="form-control" id="id_number" name="id_number" placeholder="id number" required="required" type="text" />
                        
                        <div class="input-group date">
                            <input type="text" class="form-control" name="registration_date" id="registration_date" placeholder="registration date"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                        </div>
                        
                        <input class="btn btn-lg btn-primary btn-block" name="commit" type="submit" value="Register Client" />
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