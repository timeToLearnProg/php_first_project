<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Заполнить пропуск</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
<span class="fio">На смене контролер КПП: <?=@$_SESSION['FIO']?></span>
		<div class="main_menu">
			<a href="index.php">Вернутся на главную</a>
			<a href="listPass.php">Список пропусков</a>
		</div>



		<div id="wrap">
			<div>
				<div>
					<h2>Данные</h2>
					<form method="post">
						<fieldset>
							<legend>Введите ФИО</legend>
							<div class="col">
								<p>
									<label for="first_name">Введите имя</label>
									<input id="first_name" placeholder="Имя" type="text" name="name1" value="<?=@$name1;?>"><br>
									<span class="error"><?=@$errors['msg0']?></span>
								</p>
								<p>
									<label for="seckond_name">Введите фамилию</label>
									<input id="seckond_name" placeholder="Фамилия" type="text" name="name2" value="<?=@$name2?>"><br>
									<span class="error"><?=@$errors['msg1']?></span>
								</p>
								<p>
									<label for="last_name">Введите отчество</label>
									<input id="last_name" placeholder="Отчество" type="text" name="name3" value="<?=@$name3?>"><br>
									<span class="error"><?=@$errors['msg2']?></span>
								</p>
							</div>
						</fieldset>

						<fieldset>
							<legend>Описание документа</legend>
							<div class="col">
								<p>
									<label class="doc_name" for="document">Документ удостоверяющий личность: наименование</label>
									<input id="document" placeholder="Наименование докуента" type="text" name="doc" value="<?=@$doc_name?>"><br>
									<span class="error"><?=@$errors['msg3']?></span>
								</p>
								<p>
									<label class="doc_seriy" for="seriy_doc">Введите серию документа</label>
									<input id="seriy_doc" placeholder="Серия документа" type="text" name="doc_s" value="<?=@$ser_name?>"><br>
									<span class="error"><?=@$errors['msg4']?></span>
								</p>
								<p>
									<label class="doc_num" for="num_doc">Введите номер документа</label>
									<input id="num_doc" placeholder="Номер документа" type="text" name="doc_n" value="<?=@$num_doc?>"><br>
									<span class="error"><?=@$errors['msg5']?></span>
								</p>
								<p>
									<label for="org_doc">Когда и кем выдан</label>
									<input id="org_doc" placeholder="Когда и кем выдан" type="text" name="doc_org" value="<?=@$org_name?>"><br>
									<span class="error"><?=@$errors['msg6']?></span>
								</p>
							</div>
						</fieldset>

						<fieldset>
							<legend>Место работы</legend>
							<div class="col">
								<p>
									<label class="master" for="man_work">Место работы посетителя</label>
									<input id="man_work" placeholder="Место работы" type="text" name="work" value="<?=@$guest_work?>"><br>
									<span class="error"><?=@$errors['msg7']?></span>
								</p>
							</div>
						</fieldset>

						<fieldset>
							<legend>К кому пришел гость</legend>
							<div class="col">
								<p>
									<label class="master" for="m_man">Должность, Ф.И.О., подпись ответственного сотрудника АО "АВС" за посетителя</label>
									<input id="m_man" placeholder="Должность, Ф.И.О. ответственного" type="text" name="org" value="<?=@$org?>"><br>
									<span class="error"><?=@$errors['msg7']?></span>
								</p>
							</div>
						</fieldset>
						<button type="submit" name="but_ton">Сохранить пропуск</button>

						<!-- <p>
							<input id="button" type="submit" name="but_ton" value="Сохранить">
						</p> -->
					</form>
				</div>
			</div>
		</div>
	</body>
</html>