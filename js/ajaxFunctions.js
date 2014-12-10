$(document).ready(function() 
{
    //Delete  ticket
    $('.delete_ticket').click(function(){
        
        $parent=$(this).parents("tr:first");
        var id=$parent.find(".ticket_id").text();
        //alert(id);
        $.ajax({
                type: "POST",
                url: "utilities/delete.php",
                data: "action=delete_ticket&id="+id,
                cache: false,
                success: function(data){
                    if(data=='success'){
                       $parent.fadeOut(100); 
                    }
                    else
                        alert("Cannot delete clientId "+id+".\nIt may be referenced by another record or user does not have delete permissions");
                    
                }
        });
            
        return false;
    });
    
    
    //Delete  expense
    $('.delete_expense').click(function(){
        
        $parent=$(this).parents("tr:first");
        var id=$parent.find(".ticket_id").text();
        //alert(id);
        $.ajax({
                type: "POST",
                url: "utilities/delete.php",
                data: "action=delete_expense&id="+id,
                cache: false,
                success: function(data){
                    if(data=='success'){
                       $parent.fadeOut(100); 
                    }
                    else
                        alert("Cannot delete clientId "+id+".\nIt may be referenced by another record or user does not have delete permissions");
                    
                }
        });
            
        return false;
    });

    
    //Delete  asset
    $('.delete_asset').click(function(){
        
        $parent=$(this).parents("tr:first");
        var id=$parent.find(".ticket_id").text();
        //alert(id);
        $.ajax({
                type: "POST",
                url: "utilities/delete.php",
                data: "action=delete_asset&id="+id,
                cache: false,
                success: function(data){
                    if(data=='success'){
                       $parent.fadeOut(100); 
                    }
                    else
                        alert("Cannot delete clientId "+id+".\nIt may be referenced by another record or user does not have delete permissions");
                    
                }
        });
            
        return false;
    });

    
    //Delete  staff
    $('.delete_staff').click(function(){
        
        $parent=$(this).parents("tr:first");
        var id=$parent.find(".ticket_id").text();
        //alert(id);
        $.ajax({
                type: "POST",
                url: "utilities/delete.php",
                data: "action=delete_staff&id="+id,
                cache: false,
                success: function(data){
                    if(data=='success'){
                       $parent.fadeOut(100); 
                    }
                    else
                         alert("Cannot delete clientId "+id+".\nIt may be referenced by another record or user does not have delete permissions");
                    
                }
        });
            
        return false;
    });

    
    //Delete  client
    $('.delete_client').click(function(){
        
        $parent=$(this).parents("tr:first");
        var id=$parent.find(".ticket_id").text();
        //alert(id);
        $.ajax({
                type: "POST",
                url: "utilities/delete.php",
                data: "action=delete_client&id="+id,
                cache: false,
                success: function(data){
                    if(data=='success'){
                       $parent.fadeOut(100); 
                    }
                    else
                        alert("Cannot delete clientId "+id+".\nIt may be referenced by another record or user does not have delete permissions");
                    
                }
        });
            
        return false;
    });

    
    //Delete  route
    $('.delete_route').click(function(){
        
        $parent=$(this).parents("tr:first");
        var id=$parent.find(".ticket_id").text();
        //alert(id);
        $.ajax({
                type: "POST",
                url: "utilities/delete.php",
                data: "action=delete_route&id="+id,
                cache: false,
                success: function(data){
                    if(data=='success'){
                       $parent.fadeOut(100); 
                    }
                    else
                         alert("Cannot delete clientId "+id+".\nIt may be referenced by another record or user does not have delete permissions");
                    
                }
        });
            
        return false;
    });

    
    //Delete  role
    $('.delete_role').click(function(){
        
        $parent=$(this).parents("tr:first");
        var id=$parent.find(".ticket_id").text();
        //alert(id);
        $.ajax({
                type: "POST",
                url: "utilities/delete.php",
                data: "action=delete_role&id="+id,
                cache: false,
                success: function(data){
                    if(data=='success'){
                       $parent.fadeOut(100); 
                    }
                    else
                        alert("Cannot delete clientId "+id+".\nIt may be referenced by another record or user does not have delete permissions");
                    
                }
        });
            
        return false;
    });
	
	
	  //login
    $('#btn-login').click(function(){
        
     	var username=$.trim($("#username").val());
        var password=$.trim($("#password").val());
		if(username.length>0 && password.length>0){
			  var dataString = 'action=login&username='+username+'&password='+password;
			 $("#login-alert").text();
					   $("#login-alert").css('visibility','visible');
			 $.ajax({
                type: "POST",
                url: "utilities/usermanager.php",
                data: "action=login&username="+username+"&password="+password,
                cache: false,
                success: function(data){
					
					//login success
                   if(data=='SUCCESS_LOGIN'){
					    
					   $("#login-alert").css('color','green');
					   $("#login-alert").text('Login successful, '+username+'. Redirecting...');
					   $("#login-alert").css('visibility','visible');
					   window.location.href = "index.php";
				   }
					else{
						$("#login-alert").css('color','red');
					   $("#login-alert").text('Login failed. Confirm username or password.');
					   $("#login-alert").css('visibility','visible');
						
						
					}
                    
                }
        });
			
		}
		
		else{
			alert ("fill up the places");	
		}
       
       		
            
        return false;
    });

});