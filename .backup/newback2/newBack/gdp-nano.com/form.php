<div class="form">
    <form class="form-horizontal" role="form" action="" method="post">
    	<div class="form-group">
    		<label for="exampleInputEmail1"><?=LANG_EMAIL?></label>
    		<input type="email" class="form-control" value="<?=$email?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    	</div>
    	<div class="form-group">
    		<label for="exampleInputPassword1"><?=LANG_PASSWORD?></label>
    		<input type="password" class="form-control" id="exampleInputPassword1" name="password">
    	</div>
    <!--	<div class="form-group form-check">-->
    <!--		<input type="checkbox" class="form-check-input" id="exampleCheck1">-->
    <!--		<label class="form-check-label" for="exampleCheck1">Check me out</label>-->
    <!--	</div>-->
    	<button type="submit" class="btn btn-primary"><?=LANG_LOGIN?></button>
    </form>
</div>