<?php
    include("includes/nav.php");
?>

    <!-- Page Content -->
    <div id="page-content-wrapper" style="margin: 0; padding: 0;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <form accept-charset="UTF-8" action="#" class="form-signin" style="max-width: 330px; display: block; margin: auto;" enctype="multipart/form-data" id="new_task" method="post"><div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="X/ebtXac2ncy15haszff6iLyXjp7jDqWR+Rp51TgC0s=" /></div>
                        <h2>Admin</h2>
                        <input class="form-control" id="first_name" name="first_name" placeholder="first name" required="required" type="text" />
                        
                        <input class="form-control" id="surname" name="surname" placeholder="surname" required="required" type="text" />
                        
                        <div class="input-group date">
                            <input type="text" class="form-control" name="date_of_birth" id="date_of_birth" placeholder="date of birth"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                        </div>
                        
                        <input class="form-control" id="username" name="username" placeholder="username" required="required" type="text" />
                        
                        <input class="form-control" id="password" name="password" placeholder="password" required="required" type="password" />
                        
                        <b>Role:</b> <select name="role_id" id="role_id" class="selectpicker show-tick" title='Choose one of the following...' data-live-search="true" data-width="290px";>
                                        <option value="1">Driver</option>
                                        <option value="2">Clerk</option>
                                        <option value="3">Security</option>
                                        <option value="4">Crew</option>
                                        <option value="5">Porter</option>
                                    </select>
                        <input class="btn btn-lg btn-primary btn-block" name="commit" type="submit" value="Register Admin" />
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