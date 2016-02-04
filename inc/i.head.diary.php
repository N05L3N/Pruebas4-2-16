<!-- Paginación -->
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>

    <script type="text/javascript">
    
    $(document).ready(function(){
        
    //Display Loading Image
    function Display_Load()
    {
        $("#loading").fadeIn(900,0);
        $("#loading").html("<img src='bigLoader.gif' />");
    }
    //Hide Loading Image
    function Hide_Load()
    {
        $("#loading").fadeOut('slow');
    };
    

   //Default Starting Page Results
   
    $("#pagination li:first").css({'color' : '#FF0084'}).css({'border' : 'none'});
    
    Display_Load();
    
    $("#content").load("pagination_data.php?page=1", Hide_Load());



    //Pagination Click
    $("#pagination li").click(function(){
            
        Display_Load();
        
        //CSS Styles
        $("#pagination li")
        .css({'border' : 'solid #dddddd 1px'})
        .css({'color' : '#0063DC'});
        
        $(this)
        .css({'color' : '#FF0084'})
        .css({'border' : 'none'});

        //Loading Data
        var pageNum = this.id;
        
        $("#content").load("pagination_data.php?page=" + pageNum, Hide_Load());
    });
    
    
});
    </script>
<!--    
<link rel="stylesheet" href="main.css" />    
-->
        <link href="signin.css" rel="stylesheet">
        <link href="theme.css" rel="stylesheet">
<!-- /Paginación -->






<!-- Calendario 506 -->
<link rel="stylesheet" href="css/jquery-ui.css">
<script src="js/jquery-ui.js"></script>
<script type="text/javascript">

    $(function(){
        $( "#datepicker" ).datepicker({ 
            maxDate: '+0d', 
            buttonImage: 'img/icons/calendar.png',
            showOn: 'both',
            buttonImageOnly: true
        });
    });
    
</script>
<!-- Calendario -->        
<!-- Asignaciones -->