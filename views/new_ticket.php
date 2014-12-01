<?php
    include("includes/nav.php");
?>

    <!-- Page Content -->
    <div id="page-content-wrapper" style="margin: 0; padding: 0;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <form accept-charset="UTF-8" action="#" class="form-signin" style="max-width: 330px; display: block; margin: auto;" enctype="multipart/form-data" id="new_task" method="post"><div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="X/ebtXac2ncy15haszff6iLyXjp7jDqWR+Rp51TgC0s=" /></div>
                        <h2>New Ticket</h2>
                        
                        <b>Client:</b> <select class="selectpicker show-tick" title='Choose one of the following...' data-live-search="true" data-width="280px";>
                                        <option name="client_id" id="client_id" value="1">Doreen Wandia</option>
                                        <option name="client_id" id="client_id" value="2">Morris Iriga</option>
                                        <option name="client_id" id="client_id" value="3">Peter Kitonga</option>
                                        <option name="client_id" id="client_id" value="4">James Waiyaki</option>
                                        <option name="client_id" id="client_id" value="5">Karim Mbwana</option>
                                    </select>
                        
                        <div class="input-group date">
                            <input type="text" class="form-control" name="booking_date" id="booking_date" placeholder="booking date"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                        </div>
                        
                        <div class="input-group date">
                            <input type="text" class="form-control" name="travel_date" id="travel_date" placeholder="travel date"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                        </div>
                        
                        <b>Route:</b> <select class="selectpicker show-tick" title='Choose one of the following...' data-live-search="true" data-width="280px";>
                                        <option name="route_id" id="route_id" value="1">Nairobi - Mombasa</option>
                                        <option name="route_id" id="route_id" value="2">Mombasa - Nairobi</option>
                                        <option name="route_id" id="route_id" value="3">Nairobi - Kampala</option>
                                        <option name="route_id" id="route_id" value="4">Kampala - Nairobi</option>
                                        <option name="route_id" id="route_id" value="5">Nairobi - Dar-es-Salaam</option>
                                        <option name="route_id" id="route_id" value="6">Dar-es-Salaam - Nairobi</option>
                                    </select>
                        
                        <input class="btn btn-lg btn-primary btn-block" name="commit" type="submit" value="Book Ticket" />
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