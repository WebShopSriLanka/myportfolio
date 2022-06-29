<?php
// This is for the "Hi" greeting and 
// one of the first screens to hit the viewer
?>

<div class="greeting-welcome cf">
    <div class="greeting-inner flex-center cf">


        <div class="greeting-salutation">
            <div class="text fntvvl">
                <span class="letter-1">H</span>
                <span class="letter-2 fnts">i</span>
            </div>
        </div>
        <!-- greeting -->

        <div class="bubbles">

            <!-- Start-int-int class modifiers were dropped -->

            <div class="bubbles-inner">

                <!-- Skillsets -->
                <div class="bubbles-skillsets">

                    <div class="unit unit-1 start-40-40">UX</div>
                    <div class="unit unit-1 start-60-60">UI</div>
                    <div class="unit unit-3 start-80-80">SEO</div>

                    <div class="unit unit-2 unit-word-large start-20-20">Web<br>sites</div>
                    
                    <div class="unit unit-2 unit-word-large clientstories start-20-20"><span class="inner-text">Client<br> Stories</span></div>

                </div>


                <!-- Languages -->
                <div class="bubbles-languages">
                    <div class="unit unit-lang unit-5 js">JS</div>
                    <div class="unit unit-lang unit-5 php">PHP</div>
                    <div class="unit unit-lang unit-5 jQuery">jQuery</div>
                    <div class="unit unit-lang unit-5 react">React</div>
                    <div class="unit unit-lang unit-5 node">Node</div>

                    <div class="unit unit-lang unit-7 html">HTML5</div>
                    <div class="unit unit-lang unit-7 css">CSS3</div>

                    <div class="unit unit-lang unit-6 sql">SQL</div>
                </div>


            </div>
        </div>
        <!-- bubbles -->


    </div>
</div>
<!-- greeting welcome -->


<script>
    $(document).ready(function() {

        // To center inner text
        $('.bubbles .unit').addClass(' flex-center');

        $('.bubbles .start-40-40').addClass('slide-bottom');
        $('.bubbles .start-60-60').addClass('slide-bottom-2');
        $('.bubbles .start-80-80').addClass('slide-bottom-3');

        $('.bubbles .start-40-40').addClass('bubble-anim-left-to-right');
        $('.bubbles .start-60-60').addClass('slide-bottom-2');
        $('.bubbles .start-80-80').addClass('slide-bottom-3');

    });
</script>