<?php 

include_once "connect.php";

// Routes 

$template__path = 'include/templates/';

$css__path = 'layout/css/';

$js__path = 'layout/js/';

$views__path = '../views/';


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

// Dump function
function dd($target_var){

    echo "<pre>";
        print_r($target_var);
    echo "</pre>";
    die();
}

// Including common files
include $template__path . 'header.php';

if(!isset($navbar)){
    include $template__path . 'navbar.php';
}