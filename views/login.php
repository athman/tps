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


    <!-- Page Content -->
    <div id="page-content-wrapper" style="margin: 0; padding: 0;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="text-align: center; color: #428bca;">Welcome to Fleet Company</h1>
                        <p style="text-align: center; font-weight: bold;">This program enables you to manage your Fleet business. Login using your MS SQL User credantials on the form and start using the program</p>
					
					<form accept-charset="UTF-8" action="#" class="form-signin" style="max-width: 330px; display: block; margin: 100px auto;" enctype="multipart/form-data" id="new_task" method="post">
						
						<p id="login-alert" style="visibility: hidden; text-align: center;">njnnnkn</p>
						
						<div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="X/ebtXac2ncy15haszff6iLyXjp7jDqWR+Rp51TgC0s=" /></div>
                        <h2 style="text-align: center">Sign In</h2>
                        <input class="form-control" id="username" name="username" placeholder="username" required="required" type="text" />
                        
                        <input class="form-control" id="password" name="password" placeholder="password" required="required" type="password" />
                        <div class="checkbox">
                            <label>
                              <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        
                        <input class="btn btn-lg btn-primary btn-block" id="btn-login" name="commit" type="submit" value="Login" />
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