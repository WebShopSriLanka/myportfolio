<?php
// This file stores the database variables and entities 
// including database and table names, connections
// echo '<br>dbconfig included';
?>

 <?php
    // To control including one dbconfig per page and to control requests
    $dbconfig_included = 1;

    $database = 'swapcloth_db';

    // Database table variables
    $tb_brands = 'tb_brands';
    $tb_customers = 'tb_customers';
    $tb_products = 'tb_products';
    $tb_sellers = 'tb_sellers';   
    $tb_staff = 'tb_staff';   
    
    ?>


<?php

// if (isset($start_db_conn) && $start_db_conn === 'yes') {
    $host = "localhost";
    $database = "swapcloth_db";
    $msuser = "root";
    $mspassword = "";

    if (strpos($_SERVER['HTTP_HOST'], 'ulcworld.com') !== false) {        
        $database = "swapcloth_db";
        $msuser = "swapcloth_db_root";
        $mspassword = "swapcloth_db_db_123!@efy";
    }
    


    // Create database connection
    $conn = new mysqli($host, $msuser, $mspassword, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        // echo "<br>Connected successfully";
    }


        $stop_running = 0;

if($stop_running == 1) {        
            exit();    
}


// Dev and testing purposes
$test_var = '';

?>