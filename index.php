<?php
    require_once "model/database.php";

    session_save_path("sess");
    session_start();

    //ini_set('display_errors', 'Off');

    $errors=array();

    $view="";

    if(!isset($_SESSION['state'])){
        $_SESSION['state']='login';
    }

    switch($_SESSION['state']){
        case "login":
        $view="login.php";
        	break;

    }

    require_once "view/$view";
?>