<?php
    include("includes/nav.php");
?>

    <!-- Page Content -->
    <div id="page-content-wrapper" style="margin: 0; padding: 0;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <form accept-charset="UTF-8" action="#" class="form-signin" style="max-width: 330px; display: block; margin: auto;" enctype="multipart/form-data" id="new_task" method="post"><div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="X/ebtXac2ncy15haszff6iLyXjp7jDqWR+Rp51TgC0s=" /></div>
                        <h2>New Expense</h2>
                        <input class="form-control" id="expense_name" name="expense_name" placeholder="expense name" required="required" type="text" />
                        
                        <input class="form-control" id="expense_type" name="expense_type" placeholder="expense_type" required="required" type="text" />
                        
                        <div class="input-group date">
                            <input type="text" class="form-control" name="expense_date" id="expense_date" placeholder="expense date"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                        </div>
                        
                        <input class="form-control" id="expense_price" name="expense_price" placeholder="Amount" required="required" type="text" />
                        
                        <b>Spender:</b> <select class="selectpicker show-tick" title='Choose one of the following...' data-live-search="true" data-width="262px";>
                                    <option value="1">Kamau Karaba</option>
                                    <option value="2">Karanja Mwangi</option>
                                    <option value="3"">Ivan Saleni</option>
                                </select>
                        <input class="btn btn-lg btn-primary btn-block" name="commit" type="submit" value="Record Expense" />
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