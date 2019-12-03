<?php
    include 'config.php';
    include 'utils/mysql.class.php';
    include 'utils/makeLink.class.php';

    session_start();
	
    if (!isset($_SESSION['email']) && !isset($_GET['module'])) { // NOT LOGGED IN - forward to login_log_in.php control
        $_GET['module'] = 'login';
        $_GET['action'] = 'log_in';
    }

    // nustatome pasirinktą modulį
    $module = '';
    if(isset($_GET['module'])) {
        $module = mysql::escape($_GET['module']);
    }

    // jeigu pasirinktas elementas (sutartis, automobilis ir kt.), nustatome elemento id
    $id = '';
    if(isset($_GET['id'])) {
        $id = mysql::escape($_GET['id']);
    }

    // nustatome, kokia funkcija kviečiama
    $action = '';
    if(isset($_GET['action'])) {
        $action = mysql::escape($_GET['action']);
    }
        
    // nustatome, kurį valdiklį įtraukti šablone main.tpl.php
    $actionFile = "";
    if(!empty($module) && !empty($action)) {
        $actionFile = "controls/{$module}/{$module}_{$action}.php";
    } else {
        $actionFile = "templates/homePage.tpl.php";
    }

    // įtraukiame pagrindinį šabloną
    include 'templates/main.tpl.php';
?>