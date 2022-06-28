<div class="timeline cf">

    <div class="calendars cf flex">

        <div class="calendar one">
            <img src="media/img/calendars/2007.png" alt="website timeline calendar">
        </div>

        <div class="calendar two hidden">
            <img src="media/img/calendars/2010.png" alt="website timeline calendar">
        </div>

        <div class="calendar three hidden">
            <img src="media/img/calendars/2012.png" alt="website timeline calendar">
        </div>

        <div class="calendar four hidden">
            <img src="media/img/calendars/2007.png" alt="website timeline calendar">
        </div>

        <div class="calendar five hidden">
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
            <span class="button-text">Next</span>
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

        // $('.calendars .two').toggleClass('hidden');
        // $('.calendars .three').toggleClass('hidden');
        // $('.calendars .four').toggleClass('hidden');
        // $('.calendars .five').toggleClass('hidden');

        let currentCalendar = 1;
        // console.log(currentCalendar);


        $('.timeline .button-3').on('click', function() {

            if (currentCalendar == 1) {
                // Year 2007 to 2010
                console.log('In If 1')

                $('.calendars .one').toggleClass('hidden');
                $('.calendars .two').toggleClass('hidden fadeIn animated wow');
                currentCalendar = 2;

                $('.timeline .button-text').text('Next');
                
            } else if (currentCalendar == 2) {
                // Year 2010 to 2012
                console.log('In If 2')

                $('.calendars .two').toggleClass('hidden');
                $('.calendars .three').toggleClass('hidden fadeIn animated wow');
                currentCalendar = 3;

            } else if (currentCalendar == 3) {
                console.log('In If 3')

                $('.calendars .three').toggleClass('hidden');
                $('.calendars .four').toggleClass('hidden fadeIn animated wow');
                currentCalendar = 4;

            } else if (currentCalendar == 4) {
                console.log('In If 4')

                $('.calendars .four').toggleClass('hidden');
                $('.calendars .five').toggleClass('hidden fadeIn animated wow');
                currentCalendar = 5;


            } else if (currentCalendar == 5) {
                console.log('In If 5')

                $('.calendars .five').toggleClass('hidden');
                $('.calendars .one').toggleClass('hidden fadeIn animated wow');
                currentCalendar = 1;

                $('.timeline .button-text').text('Back');

            }
        });
    });
</script>