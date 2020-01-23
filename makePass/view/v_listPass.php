<title>listNews</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<span class="fio">На смене контролер КПП: <?=@$_SESSION['FIO']?></span>
		<div class="main_menu">
			<a href="index.php"> Вернуться на главную страницу </a>
			<?=@$addPass?>
			<?=@$addLogin?>
			<!-- <?//=@$addRegister?> -->
		</div>

		<div class="addNamePass">
			<?=$addNamePass?>
			<!-- <pre>
				<?//=@print_r($addNamePass);?>
			</pre> -->
		</div>
<!-- короткая форма записи
убираем -php- и фигурные скобки ставим вместо них двоеточия делаем разрыв
по коду умещая его в сторку и между кодом пишем верстку html
<?//if(empty($news)):?>
<div>Новостей нет</div>
<?//else:?>
<div>Новости есть</div>
<?//endif;?>

пример

<div class="comments">
<?//foreach($comments as $one):?>
	<div class="item">
		<strong><?//=$one['title']?></strong>
		<span><?//=$one['id_article']?></span>
	</div>
	<hr>
<?//endforeach;?>
</div>
<a href="add.php">Написать</a>

-->