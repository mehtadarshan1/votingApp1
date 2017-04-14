<?php
    require_once "model/database.php";

    session_save_path("sess");
    session_start();

    ini_set('display_errors', 'Off');

    $errors=array();

    $view="";

    if(!isset($_SESSION['state'])){
        $_SESSION['state']='login';
    }
    $dbconn = dbConnect();

    switch($_SESSION['state']){

        case "login":
        	$view="login.php";

        	if(empty($_REQUEST['submit']) || $_REQUEST['submit']!="login" ){
				break;
			}

			$user=$_REQUEST['user'];
			$password=$_REQUEST['password'];

			// validate and set errors
			if(empty($user)){
				$errors[]='user is required';
			}
			if(empty($password)){
				$errors[]='password is required';
			}

			if(!empty($errors))break;

			//db querry
			$result = userAuthentication($dbconn,$user,$password);

			$errors[]='somethingwentRon';
			if($user==$result[0]['username'] && $password==$result[0]['passwd'] ){
				$_SESSION['username'] = $user;
        		$_SESSION['state']='vote';
				$view = "votepage.php";
			}

        	break;

        case "vote":
			$view = "votepage.php";

        	break;
    }

    require_once "view/$view";

    function view_errors($errors){
        $s="";
        foreach($errors as $key=>$value){
            $s .= "<br/> $value";
        }
        return $s;
    }
?>