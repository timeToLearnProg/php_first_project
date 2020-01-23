

	<span style="font:bold 18px Arial; color:#bc0001; text-align:center;"><h3>Зарегистрируйтесь</h3></span>

	<form method="POST">

		<p>
	       <label for="newsName">Name:</label>
	       <input type="text" name="name" id="newsName" value="<?=@$name;?>"><br>
	       <span class="error"><?=@$errors[msg1]?></span>
	   </p>
	   <br><br>
		<p>
			<label class="text" for="Password_one">Password:</label>
			<input type="text" name="password" id="Password_one" value="<?=@$pass;?>"><br>
			<span class="error"><?=@$errors[msg]?></span>
		</p>
		<p>
			<label class="text" for="Password_to_one">Password replay:</label>
			<input type="text" name="password_too" id="Password_to_one" value="<?=@$pass_to;?>"><br>
			<span class="error"><?=@$errors[msg2]?></span>
		</p>

		<input type="submit" value="Зарегистрироваться">
	</form>
