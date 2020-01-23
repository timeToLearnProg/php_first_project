<title>Login</title>
<!-- <link rel="shortcut icon" href="../favicon.ico"> -->
<link rel="stylesheet" href="css/style.css">

<div class="main_menu">
	<a href="index.php">Вернутся на главную страницу</a>
</div>

<hr>

<p>
	<span class="error"><?=@$_SESSION['error']?></span>
	<span class="error"><?=@$_SESSION['error1']?></span>
</p>

<form method="POST">


	<p>
	       <label for="newsName">Логин</label>
	       <input type="text" name="login" id="newsName" value="<?=@$log;?>"><br>


	<p>
		<label class="text" for="Password_one">Пароль</label>
		<input type="password" name="password" id="Password_one" value="<?=@$pass;?>"><br>

	</p>
	 <br>
	<p>
		<label class="checkbox" for="Password_to_one">Запомнить меня</label>
		<input type="checkbox" name="remember" id="Password_to_one" value="on"><br>

	</p>

	<!-- Логин <br>
	<input type="text" name="login"><br><br>
	Пароль <br>
	<input type="password" name="password"> <br>
	<input type="checkbox" name="remember" value="on">Запомнить меня <br><br> -->
	<!-- <input type="submit" value="Войти"> -->
	<button type="submit" name="but_ton">Войти</button>
</form>