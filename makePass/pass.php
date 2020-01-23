
<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
include_once('function/functions.php');
include_once('model/function_db.php');
// назначение переменной гет параметра
$id = $_GET['id'];
$id = (int)$id;
// echo $id . "rere -";
// устанавливаем элемент 'back' для возвращения на эту страницу после авторизации
$_SESSION['back'] = 'pass.php' . '?id=' . $id;
$db = connect_db();
//присваеваем переменной результат подключенной функции по авторизации
$auth = is_auth_db();
$comments = enter_guest($db, $id);
// $errors = [];
$errors = validate_guest($id, $comments);
//показываем ссылку для авторизации если пользователь не авторизован
if (!$auth){
	$msg133 = 'login.php';
	$vLog = 'Авторизоваться';
	$hhr = "<a href=\"$msg133\">$vLog</a>";
	// $type = 'hidden';
}
// если пользователь авторизован то показываем ссылку для редактирования
elseif(empty($errors)){
	// $msg132 = 'creat_pass.php' . '?id=' . $id;
	$msg132 = 'create_pass.php';
	$vEdit = 'Сформировать PDF';
	// $teg = 'input';
	// $red = "<button  type=\"submit\" value=\"$vEdit\"> </button>";
	// $red = "<input  type=\"submit\" value=\"$vEdit\"> </input>";
	$red = "<button type=\"submit\" name=\"but_ton\">Сформировать PDF</button>";
}
if(empty($errors)){
	//выводим содержание статьи
	foreach ($comments as $key) {
		$dtrN = $key['dt_visit'];
		$dtrE = $key['dt_departure'];
		$atN = $key['surname'];
		$atNm = $key['middle_name'];
		$cta = $key['name_g'];
		$rta = $key['responsible'];
		$numberPass = $key['id_guest'];
		$nameDoc = $key['document'];
		$sDoc = $key['series_doc'];
		$numberDoc = $key['number_doc'];
		$makeDoc = $key['issued_doc'];
		$g_work = $key['work'];

		$dFP = explode(" ", $dtrN);
		$dFPass = explode( "-", $dFP[0]);
	}



	// echo "<br>";
	// echo $dFPass[0]  . "<br>";
	// echo $dFPass[1]  . "<br>";
	// echo $dFPass[2]  . "<br>";


}
// include('view/view_all.php');
include('view/v_pass.php');