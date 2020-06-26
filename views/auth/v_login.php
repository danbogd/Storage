<form method="post">
	<div class="form-group">
		<label for="auth-login">Login</label>
		<input type="text" class="form-control" id="auth-login" name="login" style="width: 200px;> 
	</div>
	<div class="form-group">
		<label for="auth-password">Password</label>
		<input type="password" class="form-control" id="auth-password" name="password" style="width: 200px;> 
	</div>
	<div class="form-check">
		<input class="form-check-input" type="checkbox" id="login-remember" name="remember">
		<label class="form-check-label" for="login-remember">
			Remember auth to 1 month
		</label>
	</div>
	<hr>
	<button class="btn">Auth now</button>

	<? if($authErr): ?>
		<hr>
		<div class="alert alert-danger" >
			Ошибка ввода
		</div>
	<? endif; ?>

	
</form>

