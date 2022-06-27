<?php
// Welcome UI with buttons
?>
<!-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script> -->

<div class="outer">
    <div class="welcome-landscape landscape flex flex-center cf">

        <div class="col design-col flex flex-top cf">

            <div class="unit-group col-title">
                <h2 class="fntl heading">
                    <span class="title-part">Thinking</span> 
                    <span class="title-part">Research</span>
                    <span class="title-part">Plan & Design</span>
                </h2>
            </div>
            <!-- unit-group -->


            <div class="unit-group">
                <div class="unit line-man">
                    <img src="media/img/artwork/line-man-thinking.png" alt="">
                </div>
            </div>
            <!-- unit-group -->


            <!-- <div class="unit-group">
                <div class="unit unit20 gif">
                    <div class=""> -->
            <!-- <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_vnikrcia.json" background="transparent" speed="1" style="width: 360px; height: 360px;" autoplay></lottie-player> -->
            <!-- </div>
                </div>-->
            <!-- unit-group -->




            <div class="unit-group">
                <div class="unit logo logo-wide photoshop-logo slide-bottom">
                    <img src="media/img/logos/photoshop-logo.png" alt="Photoshop">
                </div>
            </div>
            <!-- unit-group -->


            <div class="unit-group">
                <div class="unit logo figma-logo slide-bottom-2">
                    <img src="media/img/logos/figma-logo.png" alt="Figma">
                </div>
            </div>
            <!-- unit-group -->


            <div class="unit-group">

                <div class="unit logo logo-wide data-mining-logo slide-bottom-3">
                    <img src="media/img/logos/data-mining-orange-voyant-logo.png" alt="data mining">
                </div>

                <div class="unit logo logo-extra-wide google-ga-logo slide-bottom">
                    <img src="media/img/logos/google-analyytics-console-logo.png" alt="">
                </div>
            </div>
            <!-- unit-group -->

        </div>
        <!-- design-col -->





        <div class="col code-col cf">

            <div class="unit-group col-title">
                <h2 class="fntl heading">
                <span class="title-part">UI & UX</span> 
                <span class="title-part">Code & Test</span> 
                <span class="title-part">Host & Improve</span> 
                </h2>
            </div>
            <!-- unit-group -->

            <div class="unit-group">
                <div class="unit line-man">
                    <img src="media/img/artwork/line-man-coding.png" alt="">
                </div>
            </div>
            <!-- unit-group -->


            <div class="unit-group">


                <div class="unit logo vscode-logo slide-bottom">
                    <img src="media/img/logos/vscode-logo.png" alt="">
                </div>

                <div class="unit logo html-logo slide-bottom">
                    <img src="media/img/logos/html-css-logo.png" alt="">
                </div>

                <div class="unit logo js-logo slide-bottom-2">
                    <img src="media/img/logos/js-jquery-logo.png" alt="">
                </div>

                <div class="unit logo php-logo slide-bottom">
                    <img src="media/img/logos/php8-logo.png" alt="">
                </div>

                <div class="unit logo sql-logo slide-bottom-2">
                    <img src="media/img/logos/sql-mysql-logo.png" alt="">
                </div>

                <div class="unit logo react-logo slide-bottom">
                    <img src="media/img/logos/react-logo.png" alt="">
                </div>

                <div class="unit logo nodejs-logo slide-bottom-2">
                    <img src="media/img/logos/nodejs-logo.png" alt="">
                </div>
            </div>
            <!-- unit-group -->





        </div>
        <!-- code-col -->

        <!-- <div class="unit ground-line hidden">
            <div class=""></div>
        </div> -->





    </div>
    <!-- welcome-landscape -->
</div>


<script>
    $(document).ready(function() {

        $('.landscape .logo').on('mouseover', function() {
            $(this).toggleClass('animation-paused-logo');
        })
        $('.landscape .logo').on('mouseleave', function() {
            $(this).toggleClass('animation-paused-logo');
        })
    });
</script>