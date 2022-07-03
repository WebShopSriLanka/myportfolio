<?php
// To present my UX and UI design thinking 
// standards, and processes

// Included segments: 
// User Empathy 
// User Accessibility
// Standards and Consistency - W3C, BEM, OO-CSS
// Typography 
// Technicals, Security and Speed
// Writeups and Language
// Comments and Docs
// Photoshop and Figma (layers etc)
// Device, Browser, and Mode Testing 
// Addon Compatibility 
// Room Lighting and Brightness 
// Copyrights, Attribution and Legality 
?>

<div class="ux-way cf">
    <div class="capsa50-100 ux-way-inner cf">

        <div class="title title-circle flex-center cf">
            <h2 class="heading fntl">
                <span class="slide-top">My</span>
                <span class="fntvl fadeIn anim-s2 anim-vfast">UX</span>
                <span class="slide-bottom-slow">Workflow</span>
            </h2>
        </div>

        <br>
        <div class="spcb"></div>

        <div class="subtitle">

            Included segments:
            User Empathy
            User Accessibility
            Standards and Consistency - W3C, BEM, OO-CSS
            <div class="spca"></div>
            Typography
            Technicals, Security and Speed
            Writeups and Language
            Comments and Docs
            <div class="spca"></div>
            Project Structure
            Photoshop and Figma (layers etc)
            Device, Browser, and Mode Testing
            Addon Compatibility
            Room Lighting and Brightness
            Copyrights, Attribution and Legality
        </div>


        <br>
        <div class="spcc"></div>

        <div class="ux-way-sections cf">


            <section class="ux-way-section comments cf">
                <div class="section-title cf">
                    <div class="digit">A</div>
                    <h3 class="heading-3 fntml">// Comments and Docs</h3>
                    <!-- <img src="media/img/wordings/comments.png" alt="title artwork"> -->
                </div>

                <!-- <div class="title-circle-anim hidden">
                    <div class="unit one"></div>
                    <div class="unit two"></div>
                    <div class="unit three"></div>
                </div> -->


                <div class="section-image cf">
                    <div class="col3 image">
                        <figure class="image-w100">
                            <img src="media/img/codescreens/code-comment.png" alt="">
                            <figcaption>Comments using concise PHP tags in included HTML files</figcaption>
                        </figure>
                    </div>
                </div>
                <!-- section-image -->

                <div class="section-content cf">

                    <div class="col1 unit cf">
                        <div class="subtitle cf">
                            <div class="digit">1</div>
                            <div class="subtitle-text">Comment in code for developers</div>

                        </div>

                        <div class="points cf">
                            <?php
                            include $path_button_show_ux_points;
                            ?>
                            <ol class="points-list cf">
                                <li>Don't be afraid to write comments!</li>
                                <li>Brief comments in code that give insights for developers</li>
                                <li>Tell why you decided on this function or code</li>
                                <li>Show where more details can be found</li>
                            </ol>
                        </div>

                    </div>
                    <!-- unit -->

                    <div class="col1 unit cf">
                        <div class="subtitle cf">
                            <div class="digit">2</div>
                            <div class="subtitle-text">Living and breathing project documentation</div>

                        </div>

                        <div class="points cf">
                            <?php
                            include $path_button_show_ux_points;
                            ?>
                            <ol class="points-list cf">
                                <li>This is the first subpoint</li>
                                <li>Here is another subpoint</li>
                                <li>What's this, a third subpoint?</li>
                            </ol>
                        </div>

                    </div>
                    <!-- unit -->
                </div>

            </section>








            <section class="ux-way-section graphics cf">
                <div class="section-title">
                    <h3 class="heading-3 fntml">// Graphic Artwork Files</h3>
                </div>


                <div class="section-content">

                    <div class="col1 unit">

                        <div class="subtitle cf">
                            <div class="digit">1</div>
                            <div class="subtitle-text">
                                Layers in Photoshop and Figma
                            </div>

                        </div>
                        <div class="points cf">
                            <ol class="points-list cf">
                                <li>Proper naming</li>
                                <li>Only one language where possible</li>
                                <li>Less than 32 characters</li>
                            </ol>
                        </div>

                    </div>
                    <!-- unit -->


                    <div class="col1 unit">
                        <div class="subtitle">
                            2. Special layer with explanations
                        </div>
                        <ol class="points">
                            <li>Create a hidden special layer with text</li>
                            <li>This is for future graphic designes, printers, or the clients</li>
                            <li>Explain in point form what this artwork is for</li>
                            <li>Explain what each layer group is for</li>
                        </ol>
                    </div>
                    <!-- unit -->



                </div>

            </section>




            <section class="ux-way-section cf">

            </section>
        </div>
        <!-- ux-way-sections -->

    </div>
</div>
<!-- ux-way -->


<script>
    $(document).ready(function() {
        $('.show-points-button').on('click', function() {
            // $(this).next('.points-list').toggleClass('fntm');
            // $(this).next('.points-list').css('font-size', '2em');
            // $(this).next('.points-list').css('font-size', '2em');
            $(this).next('.points-list').toggleClass('points-list-show');
            $(this).next('.points-list').toggleClass('fadeInDown animated');

            setTimeout(() => {}, 1000);
        });
    });
</script>