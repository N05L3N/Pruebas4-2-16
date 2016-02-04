<!-- Asignaciones -->
    <link rel="stylesheet" href="colorbox.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
    <script src="jquery.colorbox.js"></script>
        <script>
            $(document).ready(function(){
                //Examples of how to assign the Colorbox event to elements
                $(".group1").colorbox({rel:'group1'});
                $(".group2").colorbox({rel:'group2', transition:"fade"});
                $(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
                $(".group4").colorbox({rel:'group4', slideshow:true});
                $(".ajax").colorbox();
                $(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
                $(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
                $(".iframe").colorbox({iframe:true, width:"85%", height:"95%"});
                $(".inline").colorbox({inline:true, width:"50%"});
                $(".callbacks").colorbox({
                    onOpen:function(){ alert('onOpen: colorbox is about to open'); },
                    onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
                    onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
                    onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
                    onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
                });

                $('.non-retina').colorbox({rel:'group5', transition:'none'})
                $('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
                
                //Example of preserving a JavaScript event for inline calls.
                $("#click").click(function(){ 
                    $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
                    return false;
                });
            });
        </script>
        <link href="signin.css" rel="stylesheet">
        <link href="theme.css" rel="stylesheet">

<!-- Calendario -->
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