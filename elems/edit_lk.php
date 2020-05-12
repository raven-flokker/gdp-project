<h4 class="m-y-2">Edit Profile</h4>
<form role="form" action='' method='POST'>
	<div class="form-group row">
		<label class="col-lg-3 col-form-label form-control-label"><?=LANG_LOGINE?></label>
		<div class="col-lg-9">
			<input class="form-control" id = "exampleInputLogin1" type="text" value="<?=$login?>" placeholder="<?=LANG_LOGINE?>" name='login'>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-lg-3 col-form-label form-control-label"><?=LANG_FNAME?></label>
		<div class="col-lg-9">
			<input class="form-control" type="text" value="<?=$first_n?>" placeholder="<?=LANG_FNAME?>" name="first_n">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-lg-3 col-form-label form-control-label"><?=LANG_LNAME?></label>
		<div class="col-lg-9">
			<input class="form-control" type="text" value="<?=$last_n?>" placeholder="<?=LANG_LNAME?>" name="last_n">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-lg-3 col-form-label form-control-label"><?=LANG_MNAME?></label>
		<div class="col-lg-9">
			<input class="form-control" type="text" value="<?=$middle_n?>" placeholder="<?=LANG_MNAME?>" name='middle_n'>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-lg-3 col-form-label form-control-label"><?=LANG_EMAIL?></label>
		<div class="col-lg-9">
			<input class="form-control" type="email" value="<?=$email?>" placeholder="name@example.com" name='email'>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-lg-3 col-form-label form-control-label"><?=LANG_COUNTRY?></label>
		<div class="col-lg-9">
			<input class="form-control" type="text" value="<?=$country?>" placeholder="<?=LANG_COUNTRY?>" name="country">
		</div>
	</div>

	<div class="form-group row">
		<label class="col-lg-3 col-form-label form-control-label"><?=LANG_PHONEN?></label>
		<div class="col-lg-9">
			<input class="form-control" type="text" value="<?=$phone?>" name="phone">
		</div>
	</div>

<!--	<div class="form-group row">-->
<!--		<label class="col-lg-3 col-form-label form-control-label">Password</label>-->
<!--		<div class="col-lg-9">-->
<!--			<input class="form-control" type="password" value="--><?//=$pass?><!--" name="password">-->
<!--			<small id="phoneHelp" class="form-text text-muted">Введите пароль указанный при регистрации или введите новый</small>-->
<!--		</div>-->
<!--	</div>-->
<!--	<div class="form-group row">-->
<!--		<label class="col-lg-3 col-form-label form-control-label">Confirm password</label>-->
<!--		<div class="col-lg-9">-->
<!--			<input class="form-control" type="password" value="--><?//=$confirm?><!--" name="confirm">-->
<!--			<small id="phoneHelp" class="form-text text-muted">Подтвердите пароль</small>-->
<!--		</div>-->
<!--	</div>-->
	<div class="form-group row">
		<label class="col-lg-3 col-form-label form-control-label"></label>
		<div class="col-lg-9">
			<input type="reset" class="btn btn-secondary" value="Cancel">
			<input type="submit" class="btn btn-primary" value="<?=LANG_SAVE?>">
		</div>
	</div>
</form>