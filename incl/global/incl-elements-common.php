
<?php 
    // Commonly used elements for forms

    $url_go_back = '?login';    // To set default value
    $el_form_back = '
    <div class="input-div">
        <div class="go-back-button button-subtle button-line-anim">
            <a href="' . $url_go_back . '">
                &#8701; Back
            </a>
            <span class="line-anim"></span>
        </div>
    </div>';


    // Buttons to go to next section or view of a complex lengthy form
    $el_form_next_1 = '
        <div class="input-div">
            <div class="form-section-button button-form-section-2" id="button-form-section-2">Next &#8702;</div>
        </div>';
        
    $el_form_next_2 = '
    <div class="input-div">
        <div class="form-section-button button-form-section-3" id="button-form-section-3">Next &#8702;</div>
    </div>';
        
    $el_form_next_3 = '
    <div class="input-div">
        <div class="form-section-button button-form-section-4" id="button-form-section-4">Next &#8702;</div>
    </div>';

    $el_form_pagination = '
        <div class="input-div">
            <div class="form-pagination">
                <div class="paginate-button one">1</div>
                <div class="paginate-button two">2</div>
                <div class="paginate-button three">3</div>
            </div>
        </div>';
?>