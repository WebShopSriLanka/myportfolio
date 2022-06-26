<?php
// This file is to hold the globally used variables (in PHP)
?>
<?php 
define('__ROOT__', dirname(dirname(dirname(__FILE__))));
    $path_incl = __ROOT__ . '/incl/global/';
    require_once $path_incl . '/incl-sessions.php';
    require_once $path_incl . '/incl-paths.php';

?>
<?php
$email = 'admin@website.com';

// Template blocks for email templates
if (isset($email_template_subject)) {
} else {
    $email_template_subject = "Email from ULC World";
}

$email_artwork_02 = '<img style="max-width: 640px;" src="https://ulcworld.com/img/artwork/ulc-email-design-02.jpg">';
$email_artwork_03 = '<img style="max-width: 640px;" src="https://ulcworld.com/img/artwork/ulc-email-design-03.jpg">';


$email_header_part_1 = '
        
        <div style="max-width: 640px; padding: 0px 20px; font-family: sans-serif; font-size: 15px;">

            <div style="padding: 6px 0px; font-family: sans-serif; font-size: 15px; text-align: center;">

                <p style="background-color: #fff; height: 60px; padding: 10px 2px; text-align: center;">&nbsp;         
                    <img src="https://www.ulcworld.com/img/brand/logo-ulc-world-student-visa-uk-migrate-sri-lanka.png" alt="ULC World Logo" style="width: 144px; height: 54px;"/>
                </p>
                '
    . $email_artwork_02 .
    '            

                <div style="max-width: 640px; margin-top: 16px; text-align: center; padding: 15px 0px; font-family: sans-serif; border: 1px solid #868686;">

                    <h2 style="font-family: sans-serif; font-weight: bold; margin: 0px 0px; font-size: 24px;">' . $email_template_subject . '</h2>
                </div>
                
            </div>
        </div>
    ';

$email_header_part_2 = '';

$email_footer_part_1 = '';

$email_footer_part_2 = '
        <div style="max-width: 640px; margin-top: 21px; padding: 0px 12px; background-color: #dce3f5; text-align: center;">
            &nbsp;
        <div style="margin: 0px 2px; margin-top: 0px; margin-bottom: 3px; padding: 10px 24px; text-align: center;">

        <div style="width: 100%; text-align: center; padding: 6px 0px">

            <a style="padding: 9px 10px;" href="https://ulcworld.com/app"> 
                <img src="https://www.ulcworld.com/img/icons/www-cursor.png" style="width: 40px; height: 40px;" alt="ULC World Facebook page" width="40" height="40" />
            </a> 

            <a style="padding: 9px 10px;" href="https://www.facebook.com/ulcworld">    
                <img style="width: 40px; height: 40px;" src="https://www.ulcworld.com/img/icons/facebook-black-circle.png" alt="ULC World Facebook page"/> 
            </a>

        </div>
        
        <div style="width: 100%; margin: 0 auto; padding: 18px 0px; text-decoration: none; color: #363636; cursor: pointer; margin-bottom: 10px; font-size: 14px; text-align:center">
                This email was sent because this <br/>email address is registered <br/>under a student account at <br/>www.ulcworld.com
        </div>

        <div style="width: 100%; ; text-align:center; font-size: 14px; ">
            <a style="background-color: white; padding: 10px 15px; text-decoration: none; color: #202020; cursor: pointer;" href="https://ulcworld.com/app">Unsubscribe from Emails</a>
            <div style="margin-top: 17px;">&nbsp;</div>
        </div>
        
        </div>

        </div>
    ';
// Email header part 2 will be for any future client requirements
$email_header = $email_header_part_1 . '' . $email_header_part_2;

?>
<?php
// Definitions for system
// User clearance level is based on session variables 
// Admin or manager or staff clearance level is based on 
// the manager access level 

?>
<?php

// To include essential and system-wide functions
// include_once __ROOT__ . '/incl/func/func-log-insert.php';
?>
<?php
// For testing - to mimick logged in user
// if (!isset($_SESSION['user_logged_in'])) {
// $_SESSION['user_logged_in'] = 1;
//     $_SESSION['user_clearance_level'] = 1;
//     // $_SESSION['user_role'] = "student";
//     $_SESSION['user_role'] = "manager";
//     $ssn_user_clearance = $_SESSION['user_clearance_level']; 

//     $_SESSION['user_id'] = 2;
//     $_SESSION['user_name'] = "Dev";
//     $_SESSION['user_first_name'] = "Dev";
//     $_SESSION['user_email'] = "email@testtemp.com";

//     $_SESSION['time_last_activity'] = time();
// echo '<br>Session user logged in ID: ' . $_SESSION['user_id']; 
// }

// TEMPORARY !!!
if (isset($_SESSION['user_logged_in'])) {
    if ($_SESSION['user_logged_in'] === 1) {
        $ssn_user_clearance = $_SESSION['user_clearance_level'];
        $user_clearance = $_SESSION['user_clearance_level'];
        $user_id = $_SESSION['user_id'];
        $user_role = $_SESSION['user_role'];

        $manager_approval_status = $_SESSION['user_approval_status'];

        $user_email = $_SESSION['user_email'];
        $user_first_name = $_SESSION['user_name'];
        $user_first_name = $_SESSION['user_first_name'];
        $user_last_name = $_SESSION['user_last_name'];
        $user_full_name = $user_first_name . ' ' . $user_last_name;
        $user_last_name_letter = substr($user_last_name, 0, 1);
        $user_full_name_brief = $user_first_name . ' ' . $user_last_name_letter . '.';

        $manager_email = $_SESSION['user_email'];
        $manager_first_name = $_SESSION['user_name'];
        $manager_first_name = $_SESSION['user_first_name'];
        $manager_last_name = $_SESSION['user_last_name'];
        $manager_full_name = $manager_first_name . ' ' . $manager_last_name;
        $manager_last_name_letter = substr($manager_last_name, 0, 1);
        $manager_full_name_brief = $manager_first_name . ' ' . $manager_last_name_letter . '.';
    }
}

// To round up the value to an integer and 
// then to the nearest multiple of 5
function roundUpToAny($n, $x = 5)
{
    return (ceil($n) % $x === 0) ? ceil($n) : round(($n + $x / 2) / $x) * $x;
}

// $_SESSION['user_logged_in'] = 1;
// $_SESSION['user_clearance_level'] = 1;
// $_SESSION['user_role'] = "student";
// $_SESSION['user_id'] = 1;

// $_SESSION['user_name'] = "Dev";
// $_SESSION['user_first_name'] = "Dev";
// $_SESSION['user_email'] = "email@testtemp.com";

// $_SESSION['time_last_activity'] = time();
?>
<?php
// To display PHP errors for system development and testing

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set("log_errors", 1);
error_reporting(E_ALL);
?>