<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<title>pass</title>
		<!-- <link rel="shortcut icon" href="../favicon.ico"> -->
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<span class="fio">На смене контролер КПП: <?=@$_SESSION['FIO']?></span>
		<div class="main_menu">
			<!-- <a href="<?//=@$msg133?>"><?//=@$vLog?></a> -->
			<?=@$hhr?>
			<a href="index.php">Выход</a>
			<a href="listPass.php">Список пропусков</a>
			<a href="addPass.php">Оформить новый пропуск</a>
		</div>

		<hr>
		<div id="wrap">
			<div class="col1">
				<form class="onePass" action="<?=@$msg132?>" method="post">

					<span class="error"><?=@$errors['msg12']?></span>

					<fieldset>
						<legend>Пропуск</legend>
						<p>
							<label for="number">Номер пропуска</label>
							<input name="number" value="<?=@$numberPass . '/' . $dFPass[0]?>"></input>
						</p>
						<p>
							<label for="date">Дата посещения</label>
							<input name="date" value="<?=@$dFPass[2] . '.' . $dFPass[1] . '.' . $dFPass[0]?>"></input>
						</p>

						<p>
							<label for="time">Время прибытия</label>
							<input name="time" value="<?=@$dFP[1]?>"></input>
						</p>

						<p>
							<label for="time_out">Время убытия</label>
							<input name="time_out" value="<?=@$dFP[1]?>"></input><span class="attantion">  Измените время убытия</span>
						</p>
					</fieldset>

					<fieldset>
						<legend>Посетитель</legend>
						<p>
							<label for="name2">Фамилия посетителя</label>
							<input name="name2" value="<?=@$cta?>"></input>
						</p>
						<p>
							<label for="name1">Имя посетителя</label>
							<input name="name1" value="<?=@$atN?>"></input>
						</p>
						<p>
							<label for="middle_name">Отчество посетителя</label>
							<input name="middle_name" value="<?=@$atNm?>"></input>
						</p>
						<p>
							<label for="goust">К кому пришёл посетитель</label>
							<input name="goust" value="<?=@$rta?>"></input>
						</p>
					</fieldset>
					<fieldset>
						<legend>Документ</legend>
						<p>
							<label for="nameDoc">Наименование документа</label>
							<input name="nameDoc" value="<?=@$nameDoc?>"></input>
						</p>
						<p>
							<label for="seriaDoc">Серия документа</label>
							<input name="seriaDoc" value="<?=@$sDoc?>"></input>
						</p>
						<p>
							<label for="numberDoc">Номер документа</label>
							<input name="numberDoc" value="<?=@$numberDoc?>"></input>
						</p>
						<p>
							<label for="makeDoc">Документ выдан</label>
							<input name="makeDoc" value="<?=@$makeDoc?>"></input>
						</p>
					</fieldset>

					<fieldset>
						<legend>Место работы</legend>
						<p>
							<label for="ma_work">Место работы посетителя</label>
							<input name="ma_work" value="<?=@$g_work?>"> </input>
						</p>
					</fieldset>

					<fieldset>
						<legend>Контролёр на смене</legend>
						<p>
							<label for="contr">ф.И.О. Контролера</label>
							<input name="contr" value="<?=@$_SESSION['FIO']?>"></input>
						</p>
					</fieldset>

					<?=@$red?>
				</form>
			</div>
		</div>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js"></script>
			<script type="text/javascript">
				$('button').click(function () {
				    $.post('create_pass.php', $('form').serialize(), function () {
				        $('div#wrap div').fadeOut( function () {
				            $(this).empty().html("<h2>Thank you!</h2><p>Thank you for your order. Please <a href='Pass/PDF/<?=@$cta?>_<?=@$dFPass[2] . '.' . $dFPass[1] . '.' . $dFPass[0]?>_pass.pdf'>download your pass</a>. </p>").fadeIn();
				        });
				    });
				    return false;
				});
			</script>

<!--  -->
	</body>
</html>
