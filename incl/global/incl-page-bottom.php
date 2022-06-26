<?php
// This file is to include the contents at the 
// bottom section of (almost) every webpage
// to allow them to be loaded after the top view 
// E.g. meta data and css links
?>





<?php
// UI Kit used for some css and js interactive components    
?>
<script src="incl/js/jquery.datatables.min.js"></script>
<script src="incl/js/script.js"></script>
<script src="incl/js/wow.min.js"></script>


<script>
    new WOW().init();
</script>




<?php
// To increase the font size of the entire page
?>
<script>
    $(document).ready(function() {
        $('#font-size-increase').on('click', function() {
            if ($(this).hasClass('font-size-normal')) {
                $(this).removeClass('font-size-normal');
                $(this).addClass('font-size-large');
                $('body').addClass('fntd');
            } else if ($(this).hasClass('font-size-large')) {
                $(this).removeClass('font-size-large');
                $(this).addClass('font-size-normal');
                $('body').removeClass('fntd');
            }
        });
    });
</script>


