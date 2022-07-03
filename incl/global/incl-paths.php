<?php
// To set the project root directory in for most servers
// define('__ROOT__', dirname(dirname(dirname(__FILE__))));

// To set the path directory variables to be used in 
// including contents in webpages
$path_config = __ROOT__ . '/data';
$path_dbconfig = __ROOT__ . '/data/dbconfig.php';
$path_databinds = __ROOT__ . '/data/databind';
$path_queries = __ROOT__ . '/data/query';
$path_queries_uploads = __ROOT__ . '/data/query/upload';
$path_func = __ROOT__ . '/incl/func';
$path_ui = __ROOT__ . '/views/ui';
$path_ux = __ROOT__ . '/views/ux';

// Relative paths for images
$path_img = 'media/img';
$path_img_brand =  'media/img/brand';

// To set the path directory variables for headers, navs, etc.
$path_headers = __ROOT__ . '/views/headers/';
$path_navs = __ROOT__ . '/views/headers/';


// To set the path directory for the form ui
$path_forms = __ROOT__ . '/views/forms';
$path_fetch = __ROOT__ . '/views/fetch';

// To set the path directoty variables for the different app segment views 
// Example - To render components required for the login webpage
$path_login = __ROOT__ . '/views/ui/login';
$path_signup = __ROOT__ . '/views/ui/signup';
$path_login_recovery = __ROOT__ . '/views/ui/loginrecovery';
$path_email_verify = __ROOT__ . '/views/ui/emailverify';
$path_technical = __ROOT__ . '/views/ui/technical';
$path_visa_form = __ROOT__ . '/views/ui/visaform';
$path_upload_ims = __ROOT__ . '/views/ui/uploadims';


$path_portal_student = __ROOT__ . '/views/ui/portalstudent';
$path_progress = __ROOT__ . '/views/ui/studentprogress';
$path_progress_student = __ROOT__ . '/views/ui/studentprogress'; // ^ Same
$path_portal_profile_student = __ROOT__ . '/views/ui/studentprofile';

$path_portal_admin = __ROOT__ . '/views/ui/portaladmin';
// ^ For administrative portal view, i.e. for ULC staff members
$path_portal_manager = __ROOT__ . '/views/ui/manager';
// ^For manager segments, e.g. manager profile

$path_students = __ROOT__ . '/views/ui/studentims';
// ^ For administrative portal view, i.e. student IMS

$path_managers = __ROOT__ . '/views/ui/staffims';
// ^ For administrative portal view, i.e. admin IMS

$path_course = __ROOT__ . '/views/ui/course';
$path_university = __ROOT__ . '/views/ui/university';
// ^ For both student and administrative use, i.e. admin IMS

$path_course_selector = __ROOT__ . '/views/ui/courseselector';
$path_eligibility_checker = __ROOT__ . '/views/ui/eligibilitychecker';
$path_aboutus = __ROOT__ . '/views/ui/aboutus';
$path_policy = __ROOT__ . '/views/ui/policy';

$path_email_code = __ROOT__ . '/views/emails';  // For system-sent emails
$path_email_templates = __ROOT__ . '/views/ui/emailtemplates';  // For email template IMS

$path_logreports = __ROOT__ . '/views/ui/logreports';
// ^ For administrative portal view, i.e. log reports
$path_feedback = __ROOT__ . '/views/ui/feedback';

$path_uploads_students = __ROOT__ . '/uploads/';

// echo '<br>path_uploads_students_year: ' . $path_uploads_students_year;

$path_assigns = __ROOT__ . '/views/ui/assigns';  // For assigning students to managers

$path_data_reports =  __ROOT__ . '/views/ui/reports';  // For aggregate data reports 

// Access control is for page authorisation 
// and checking logged in user data 
// e.g. to access admin portal
$path_access_control = __ROOT__ . '/incl/global/accesscontrol';
$path_js_files = __ROOT__ . '/incl/js'; 
$path_redirects_js = __ROOT__ . '/incl/js/redirects'; 
$path_alerts_js = __ROOT__ . '/incl/js/alertmsgs'; 

$path_datatable_filters = __ROOT__ . '/views/ui/datatablefilter'; 

$path_ux_balloon = __ROOT__ . '/views/ux/balloon-anim.php';

$path_website = "https://ulcworld.com";
    // For testing and launch, for email image links, for email verification URL variables

$path_ga_tag =  __ROOT__ . '/incl/global/analytics/ga-tag.php';


// Path for UI and UX components
$path_button_show_ux_points = 'views/ux/button-show-ux-points.php';

?>
<?php
// To include essential and system-wide functions
// include_once __ROOT__ . '/incl/func/func-log-insert.php';
// include_once __ROOT__ . '/incl/func/func-emails-sent-insert.php';
?>
<?php 
    // For fashion brand logo images
    $logo_zara = $path_img_brand . '/logo-zara.png';
    $logo_hm = $path_img_brand . '/logo-hm.png';
    $logo_burberry = $path_img_brand . '/logo-burberry.png';
    $logo_levis = $path_img_brand . '/logo-levis.png';
    $logo_nike = $path_img_brand . '/logo-nike.png';
?>