<?php 

include_once "connect.php";

// Routes 

$template__path = 'include/templates/';

$functions__path = 'include/functions/';

$css__path = 'layout/css/';

$js__path = 'layout/js/';

// Functions

// Page title function
function page_title(){
    global $pageTitle;
    
    if(!empty($pageTitle)){
        return $pageTitle;
    }else{
        $pageTitle = 'Default';
        return $pageTitle;
    }
}

// Including common files
include $template__path . 'header.php';

if(!isset($navbar)){
    include $template__path . 'navbar.php';
}