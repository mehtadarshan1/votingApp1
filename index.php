<?php
    require_once "model/database.php";

    session_save_path("sess");
    session_start();

    //ini_set('display_errors', 'On');

    $errors=array();
    $view="";

    if(!isset($_SESSION['state'])){
        $_SESSION['state']='login';
    }

    if(isset($_REQUEST['logout'])){
        unset($_SESSION);
        session_destroy();
        $_SESSION['state']='login';
  
    }

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

            $db=new dbConnect();

            $result = $db->userLogin($user, $password);
		
			if($result){
				$_SESSION['username'] = $user;
        		$_SESSION['state']='vote';
                
                //set up votes
                $voteCount = $db->getVoteCount();
                $_SESSION['extend']=$voteCount['extend'];
                $_SESSION['dontextend']=$voteCount['dontextend'];
				$view = "votepage.php";
			}else{
                $errors[]='Invalid username or password';
            }

        	break;

        case "vote":
			$view = "votepage.php";
            $_SESSION['update']='';

            $db=new dbConnect();
            if(empty($_REQUEST['submit']) || $_REQUEST['submit']!="vote" ){
                break;
            }

            if(empty($_REQUEST['my_choice'])){
                $errors[]='please choose an option';
            }

            if(!empty($errors))break;


            $result= $db->vote($_SESSION['username'], $_REQUEST['my_choice']);
            //update votes
            $voteCount = $db->getVoteCount();
            $_SESSION['extend']=$voteCount['extend'];
            $_SESSION['dontextend']=$voteCount['dontextend'];
            $_SESSION['update']='UPDATED';

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