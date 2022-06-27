<div class="timeline cf">

    <div class="calendars cf flex">

        <div class="calendar one">
            <img src="media/img/calendars/2007.png" alt="website timeline calendar">
        </div>
        <div class="calendar two">
            <img src="media/img/calendars/2010.png" alt="website timeline calendar">
        </div>
        <div class="calendar three">
            <img src="media/img/calendars/2012.png" alt="website timeline calendar">
        </div>
        <div class="calendar four">
            <img src="media/img/calendars/2007.png" alt="website timeline calendar">
        </div>
        <div class="calendar five">
            <img src="media/img/calendars/2012.png" alt="website timeline calendar">
        </div>
    </div>
    <!-- calendars -->


    <div class="disclaimer">
        <div class="spcd"></div>
        <div class="text fnts">Calendar 3D mockup acquired through Ariel.</div>
    </div>

    <div class="capsa100 tac cf flex flex-center">
        <div class="button button-3">
            NEXT
        </div>
        <div class="arrow-image cf">
            <img src="media/img/icons/arrow-right-1.png">
        </div>
    </div>


</div>
<!-- timeline -->


<script>
    $(document).ready(function() {
        $('.timeline .button-3').on('mouseover', function() {
            // $('.timeline .arrow-image img').addClass('show fadeIn anim-fast wow slide-bottom');
            // $('.timeline .button-3').css('color', '#0ea825');
        })
        $('.timeline .button-3').on('mouseleave', function() {
            // $('.timeline .arrow-image img').removeClass('show fadeIn anim-fast wow');
        })




        // $('.calendars .two').css('opacity', '0');
        // $('.calendars .three').css('opacity', '0');
        // $('.calendars .four').css('opacity', '0');
        // $('.calendars five').css('opacity', '0');

        $('.calendars .two').css('display', 'none');
        $('.calendars .three').css('display', 'none');
        $('.calendars .four').css('display', 'none');
        $('.calendars .five').css('display', 'none');


        var currentCalendar = 1;
        console.log(currentCalendar);

        if (currentCalendar === 1) {
            $('.timeline .button-3').on('click', function() {
                $('.calendars .one').css('display', 'none');
                $('.calendars .two').css('display', 'block');
                currentCalendar = 2;
                console.log(currentCalendar);
            });
        }

        if (currentCalendar === 2) {
            $('.timeline .button-3').on('click', function() {
                $('.calendars .two').css('display', 'none');
                $('.calendars .three').css('display', 'block');
                currentCalendar = 3;
                console.log(currentCalendar);
            });
        }

        if (currentCalendar === 3) {
            $('.timeline .button-3').on('click', function() {
                $('.calendars .three').css('display', 'none');
                $('.calendars .four').css('display', 'block');
                currentCalendar = 4;
                console.log(currentCalendar);
            });
        }

        if (currentCalendar === 4) {
            $('.timeline .button-3').on('click', function() {
                $('.calendars .four').css('display', 'none');
                $('.calendars .five').css('display', 'block');
                currentCalendar = 5;
            });
        }

        if (currentCalendar === 5) {
            $('.timeline .button-3').on('click', function() {
                $('.calendars .five').css('display', 'none');
                $('.calendars .one').css('display', 'block');
                currentCalendar = 1;
            });
        }
    });
</script>