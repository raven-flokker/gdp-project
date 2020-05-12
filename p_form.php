<a href="profile?edit=<?=$_SESSION['id']?>" type="button" class="btn btn-outline-primary">редактировать лк</a>
<a href="profile?abs=<?=$_SESSION['id']?>" type="button" class="btn btn-outline-primary">Мои тезисы</a>
<a href="profile?article=<?=$_SESSION['id']?>" type="button" class="btn btn-outline-primary">Мои статьи</a>
<!--Подключение обработчика формы-->
<div class="form">

	<form class="form-horizontal" role="form" action='' method='POST'>
		<div class="form-group">
			<label for="exampleInputLogin1"><?=LANG_ARTICLE?></label>
			<input class="form-control" id = "exampleInputArticle1" type="text" placeholder="<?=LANG_ARTICLE?>" name='article'>
		</div>
		<div class="form-group">
			<label for="exampleInputName1"><?=LANG_AUTHOR?></label>
			<input class="form-control" id="exampleInputName1" type="text" placeholder="<?=LANG_AUTHOR?>" value="<?=$_SESSION['fio']?>" name='author'>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1"><?=LANG_ORGAN?></label>
			<input type="text" class="form-control" id="exampleInputOrganization1" aria-describedby="organizationHelp" name='organization[]'>

		</div>
		<div id="input0" class="form-group"></div>
		<div class="add" onclick="addInput()">+<?=LANG_MORE?></div>

		<div class="form-group">
			<label for="exampleInputPhone1"><?=LANG_ABSTRACTS?></label>
			<input type="text" class="form-control" id="exampleInputAbstracts1" name='abstracts'>
		</div>

		<div class="form-group">
			<label for="exampleInputOrganization1"><?=LANG_LINKS?></label>
			<input type="text" class="form-control" id="exampleInputLinks1" name='link'>

		</div>

		<button type="submit" class="btn btn-primary"><?=LANG_BUTTONORG?></button>
	</form>
</div>