<?php
/*
require_once "core/ajax_lib/Php.php";
$JsHttpRequest =& new JsHttpRequest("$config[site_encoding]");
*/
$_GET['nobody'] = 1;

$com_content['ajax'] = array(
    'index' => array(
        '', // g_ option require for view     [0]
        'ajax', // loc name (key)                [1]
        'index.php?n=ajax', // Link to                 [2]
        '', // main menu name/id ('' - not show)        [3]
        0 // show in context menu (1-yes,0-no)          [4]
    ),
    'checkemail' => array(
        '', 
        '', 
        'index.php?n=ajax&sub=checkemail',
        '',
        0
    ),
    'checklogin' => array(
        '', 
        '', 
        'index.php?n=ajax&sub=checklogin',
        '',
        0
    ),
    'getquote' => array(
        'g_view_profile', 
        '', 
        'index.php?n=ajax&sub=getquote',
        '',
        0
    ),
    'preview' => array(
        'g_view_profile', 
        '', 
        'index.php?n=ajax&sub=preview',
        '',
        0
    ),
    'userlist' => array(
        'g_view_profile', 
        '', 
        'index.php?n=ajax&sub=userlist',
        '',
        0
    ),
);
?>