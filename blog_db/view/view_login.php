

	<p>
		<span class="error"><?=@$_SESSION['error']?></span>
		<span class="error"><?=@$_SESSION['error1']?></span>
	</p>
	<form method="POST">
		<p>
		       <label for="newsName">Логин:</label>
		       <input type="text" name="login" id="newsName" value="<?=@$log;?>"><br>
		<p>
			<label class="text" for="Password_one">Пароль:</label>
			<input type="password" name="password" id="Password_one" value="<?=@$pass;?>"><br>
		</p>
		 <br>
		<p>
			<label class="checkbox" for="Password_to_one">Запомнить меня</label>
			<input type="checkbox" name="remember" id="Password_to_one" value="on"><br>
		</p>

		<input type="submit" value="Войти">
	</form>

