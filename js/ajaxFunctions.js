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
                        alert("Cannot delete ticketId "+id+".\nIt may be referenced by another record");
                    
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
                        alert("Cannot delete expenseId "+id+".\nIt may be referenced by another record");
                    
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
                       alert("Cannot delete assetId "+id+".\nIt may be referenced by another record");
                    
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
                        alert("Cannot delete staffId "+id+".\nIt may be referenced by another record");
                    
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
                        alert("Cannot delete clientId "+id+".\nIt may be referenced by another record");
                    
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
                        alert("Cannot delete routeId "+id+".\nIt may be referenced by another record");
                    
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
                       alert("Cannot delete roleId "+id+".\nIt may be referenced by another record");
                    
                }
        });
            
        return false;
    });

});