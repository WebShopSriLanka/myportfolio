<?php 
    // This is to set the page redirects that are site-wide and commonly needed 
    // Kindly note that this is a PHP file that outputs JS code
?>
<?php 
    echo '
        <script>
        setTimeout(function() {
    ';    

    if($redirect_url == 'admin') {
        // Redirect to admin (app) panel 
        echo 'window.location.replace("?app&staff")';        
    }

    echo '
        }, 50);
        </script>
    ';                    
?>

