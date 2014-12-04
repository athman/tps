<!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap-datepicker.js"></script>
    <script src="../js/bootstrap-select.min.js"></script>
    <script src="../js/ajaxFunctions.js"></script>

    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        
        
        // Firing bootstrap datepicker
        $('.input-group.date').datepicker({
            format: "dd-mm-yy",
            todayHighlight: true
        });
        
        // Firing bootstrap select
        $('.selectpicker').selectpicker();
        
         $('.selectpicker').selectpicker({
            style: 'btn-info',
            size: 10
        });
    </script>
    
   
});

</body>

</html>
