<form method="post" action="">
	<div class="form-group row">
		<label for="inputLogin1" class="col-sm-2 col-form-label">Login:</label>
		<div class="col-sm-10">
			<input name="login" value="<?= $login ?>" class="form-control form-control-sm" type="text" placeholder="Login">
		</div>
	</div>
	<div class="form-group row">
		<label for="inputFirst_n1" class="col-sm-2 col-form-label">Фамилия:</label>
		<div class="col-sm-10">
			<input name="first_n" value="<?= $first_n ?>" placeholder="first_n" class="form-control form-control-sm" type="text" >
		</div>
	</div>
	<div class="form-group row">
		<label for="inputLast_n1" class="col-sm-2 col-form-label">Имяя:</label>
		<div class="col-sm-10">
			<input name="last_n" value="<?= $last_n ?>" placeholder="last_n" class="form-control form-control-sm" type="text" >
		</div>
	</div>
	<div class="form-group row">
		<label for="inputLast_n1" class="col-sm-2 col-form-label">Отчество:</label>
		<div class="col-sm-10">
			<input name="middle_n" value="<?= $middle_n ?>" placeholder="middle_n" class="form-control form-control-sm" type="text" >
		</div>
	</div>
	<div class="form-group row">
		<label for="inputEmail1" class="col-sm-2 col-form-label">email:</label>
		<div class="col-sm-10">
			<input name="email" value="<?= $email ?>" placeholder="email" class="form-control form-control-sm" type="email" >
		</div>
	</div>
	<div class="form-group row">
		<label for="inputPhone1" class="col-sm-2 col-form-label">Телефон:</label>
		<div class="col-sm-10">
			<input name="phone" value="<?= $phone ?>" placeholder="phone" class="form-control form-control-sm" type="tel" >
		</div>
	</div>
	<div class="form-group row">
		<label for="inputCountry1" class="col-sm-2 col-form-label">Страна:</label>
		<div class="col-sm-10">
			<input name="country" value="<?= $country ?>" placeholder="country" class="form-control form-control-sm" type="text" >
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-10">
			<button type="submit" class="btn btn-primary">Сохранить</button>
		</div>
	</div>
</form>