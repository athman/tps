<!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap-datepicker.js"></script>

    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        
        $('.datepicker').datepicker();
        
        $('.input-group.date').datepicker({
            format: "dd-mm-yy",
            todayHighlight: true
        });
    </script>
    
   
});

</body>

</html>
