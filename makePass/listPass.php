<?php
error_reporting(E_ALL ^ E_NOTICE);
	session_start();
	include_once('function/functions.php');
	include_once('model/function_db.php');
	// include('view/v_listPass.php');
	// error_reporting(E_ALL ^ E_NOTICE);
	unset($_SESSION['don']);
	$db = connect_db();
	$comments = enter_listnews($db);

	$auth = is_auth_db();


	//include('view/view_all.php');
	if($auth){
		$addPass = " <a href=\" addPass.php \"> Оформить новый пропуск </a> ";
	}
	else{
		$addLogin = "<a href=\"login.php\">Авторизоваться</a> ";
		// $addRegister = " <a href=\"register.php\">register</a>";
	}

	include('view/v_listPass.php');

	foreach($comments as $one){
			$ot = $one['surname'];
			$od = $one['id_guest'];
		$addNamePass = "<div><h3><a href=\"pass.php?id=$od\">$ot</a></h3></div>";
		echo $addNamePass;
	}
