<!-- JQUERY -->
<script src="{$base_url}public/plugins/jquery/1.10.2/jquery.min.js"></script>
<!-- JQUERY UI-->
<script src="{$base_url}public/plugins/jqueryui/1.11.2/jquery-ui.js"></script>
<!-- BOOTSTRAP -->
<script src="{$base_url}public/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="{$base_url}public/plugins/bootsnav-master/js/bootsnav.js"></script>

<!-- SLICK-MASTER -->
<script src="{$base_url}public/plugins/slick-master/slick/slick.min.js"></script>
<!-- NIVO SLIDER-->
<script src="{$base_url}public/plugins/nivoslider/jquery.nivo.slider.js"></script>
<!-- FLEXSLIDER -->
<script src="{$base_url}public/plugins/woothemes/jquery.flexslider-min.js"></script>
<script> var base_url = "{$base_url}";</script>
<script>

// Can also be used with $(document).ready()
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide"
        });
    });
</script>


<!-- SCRIPT GENERAL -->
<script src="{$base_url}public/web/js/process.js"></script>
<script src="{$base_url}public/web/js/script.js"></script>

<!-- YOXVIEW -->
<script type="text/javascript" src="{$base_url}public/plugins/yoxview/yoxview-init.js"></script>
<script>
     LoadScript(yoxviewPath + "yoxview-nojquery.js");
</script>

<script src="{$base_url}public/plugins/datepicker/jquery-ui-timepicker-addon.min.js"></script>


<script type="text/javascript">
        $('.datepicker').datetimepicker({
            dateFormat: 'yy-mm-dd',
            timeFormat: 'HH:mm:ss',
            stepHour: 1,
            stepMinute: 1,
            stepSecond: 1,
            changeMonth: true,
            changeYear: true,
            showTimepicker:false,
            yearRange: '2010:2030'
         });
    
</script>





</body>
</html>