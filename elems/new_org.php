<script>
	function redirectOutput(form) {
		var w = window.open('about:blank','Popup_Window','width=700,height=700,menubar=yes,toolbar=no,location=no,status=no');
		form.target = 'Popup_Window';
		return true;
	}

</script>


	<div>
		<!--	                        rus-->

			<form class="form-horizontal" role="form" action='article.php?article=<?=$_SESSION['login']?>' onSubmit="redirectOutput(this)" method='POST'>
				<div class="row">
					<div class="col">
						<div class="form-group">
							<label for="selectForm"><?=LANG_FORM?></label>
						<select class="custom-select" name="stend">
							<option name="stend" selected><?=LANG_STAND1?></option>
							<option name="stend"><?=LANG_STAND2?></option>
							<option name="stend"><?=LANG_STAND3?></option>
<!--							<option value="3">Заочно</option>-->
						</select>
						</div>
					<div class="form-group">
						<label for="exampleInputArticle1"><?=LANG_DOCLAD?></label>
						<input class="form-control" id = "exampleInputArticle1" type="text" placeholder="<?=LANG_DOCLAD?>" value="<?=$article_ru?>" name='article_ru'>
					</div>
					<div class="bord-form">
<!--						<div id="variants">-->
							<div class="form-group control-group">
								<label for="InputFirstName[]"><?=LANG_FNAME?> <?=LANG_AUTHOR?></label>
								<input class="form-control" id="InputFirstName[]" type="text" placeholder="<?=LANG_FNAME?> <?=LANG_AUTHOR?>" value="<?=$f_name_a_ru?>" name='f_name_a_ru[]'>
								<!--<a class="del_variant">X</a>-->
							</div>
							<div class="form-group control-group">
								<label for="InputLastName1"><?=LANG_LNAME?> <?=LANG_AUTHOR?></label>
								<input class="form-control" id="InputLastName1" type="text" placeholder="<?=LANG_LNAME?> <?=LANG_AUTHOR?>" value="<?=$l_name_a_ru?>" name='l_name_a_ru[]'>
							</div>
							<div class="form-group control-group">
								<label for="exampleInputName1"><?=LANG_MNAME?> <?=LANG_AUTHOR?></label>
								<input class="form-control" id="exampleInputName1" type="text" placeholder="<?=LANG_MNAME?> <?=LANG_AUTHOR?>" value="<?=$m_name_a_ru?>" name='m_name_a_ru[]'>
							</div>
<!--						</div>-->
						<div class="form-group control-group">
							<label for="exampleInputPhone1">Email <?=LANG_AUTHOR?></label>
							<input type="email" class="form-control" id="exampleInputEmail11" value="<?=$email_a_ru?>" name='email_a_ru[]'>
						</div>

						<input type="hidden" name="bar0[]">
						<div id="test" class="form-group control-org control-group">
							<label for="exampleInputEmail1"><?=LANG_ORGAN?> <?=LANG_AUTHOR?></label>
<!--							<input type="hidden" id="input" name="org">-->
							<input type="text" class="form-control" id="exampleInputOrganization12" aria-describedby="organizationHelp" value="<?=$organization_ru?>" name='organization_ru[0][]'>

						</div>
						<div id="org"  >
							<label for="exampleInputEmail1"><?=LANG_ORGAN?> <?=LANG_AUTHOR?></label>
							<!--							<input type="hidden" id="input" name="org">-->
							<input type="text" class="form-control" id="exampleInputOrganization12" aria-describedby="organizationHelp" value="<?=$organization_ru?>" name='organization_ru[0][]'>
						</div>
							<div id="orgs"  >
								<label for="exampleInputEmail1"><?=LANG_ORGAN?> <?=LANG_AUTHOR?></label>
								<!--							<input type="hidden" id="input" name="org">-->
								<input type="text" class="form-control" id="exampleInputOrganization12" aria-describedby="organizationHelp" value="<?=$organization_ru?>" name='organization_ru[0][]'>
							</div>
								<div id="orga"  >
									<label for="exampleInputEmail1"><?=LANG_ORGAN?> <?=LANG_AUTHOR?></label>
									<!--							<input type="hidden" id="input" name="org">-->
									<input type="text" class="form-control" id="exampleInputOrganization12" aria-describedby="organizationHelp" value="<?=$organization_ru?>" name='organization_ru[0][]'>
								</div>
									<div id="orgn"  >
										<label for="exampleInputEmail1"><?=LANG_ORGAN?> <?=LANG_AUTHOR?></label>
										<!--							<input type="hidden" id="input" name="org">-->
										<input type="text" class="form-control" id="exampleInputOrganization12" aria-describedby="organizationHelp" value="<?=$organization_ru?>" name='organization_ru[0][]'>
									</div>
						<span id="os" class="org">+ <?=LANG_NEWORG?></span>
							<span id="oss" class="org">+ <?=LANG_NEWORG?></span>
								<span id="osa" class="org">+ <?=LANG_NEWORG?></span>
									<span id="osn" class="org">+ <?=LANG_NEWORG?></span>
					</div>
						<div id="variants" class="info">
							<?php include 'elems/call/two.php'?>
						</div>

						<span id="new_ss" class="org">+ <?=LANG_NEWUTHOR?></span>
						<span id="gr_ss" class="org">+ <?=LANG_NEWUTHOR?></span>
						<span id="grs_ss" class="org">+ <?=LANG_NEWUTHOR?></span>
						<span id="grss_ss" class="org">+ <?=LANG_NEWUTHOR?></span>
<!--		Старые кнопки				-->
<!--						<span id="os1">+ --><?//=LANG_NEWORG?><!--</span><br>-->
<!--						<span id="ss" >+ --><?//=LANG_NEWUTHOR?><!--</span>-->
						<!--		Старые кнопки				-->
<!--						<div id="input0" class="control-grouph"></div>-->
<!--						<span class="add" onclick="addInput()">+ --><?//=LANG_NEWORG?><!--</span>-->


<!--						<div id="input0" class="form-group"></div>-->
<!--						<div class="add" onclick="addAuthor()">+ Добавить Автора</div>-->

						<div class="form-group">
							<label for="exampleInputAbstracts1"><?=LANG_ABSTRACTS?></label>
							<textarea class="form-control" name="abstract_ru" id="exampleInputAbstracts1" cols="30" rows="10"></textarea>
<!--							<input type="text" class="form-control" id="exampleInputAbstracts1"  name='abstract_ru'>-->
						</div>
						<div id="links">
							<div class="form-group control-groups">
								<label for="InputLinks[]"><?=LANG_LINKS?></label>
								<input type="text" class="form-control" id="InputLinks[]" value="<?=$links_ru?>" name='links_ru[]'>
							</div><!--<a class="del_variant">X</a>-->

						</div>
						<span id="ls">+ <?=LANG_NEWLINKS?></span><br>
<!--						<div id="input0"></div>-->
<!--						<div class="add" onclick="addInput()">+ Добавить ссылку</div>-->
						<p><a href="test.php" target="_blank">Ссылка откроется в новом окне</a></p>
<!--						<input type="button" class="btn btn-primary" value="Предварительный просмотр" onclick="window.open('test2.php?article=')">-->
						<button type="submit" class="btn btn-primary" target="_blank">Предварительный просмотр</button>
<!--						<button type="submit" class="btn btn-primary">--><?//=LANG_SAVEDOCLAD?><!--</button>-->
				</div>

				</div>
			</form>


<!--		<div id="variants">-->
<!--			<div class="control-group" >-->
<!--				<label class="control-label">Username</label>-->
<!--				<div class="controls">-->
<!--					<input type="text" placeholder="Username" name="name[]"> <a class="del_variant">X</a>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div><span id="ss">Добавить вариант</span>-->

	<!--/row-->
</div>