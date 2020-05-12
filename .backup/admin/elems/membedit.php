
<style type="text/css">
	#ss, #ls, #os, .del_variant{
		cursor: pointer;
	}
	.control-group:nth-child(1) .del_variant{
		display: none;
	}
	.control-groups:nth-child(1) .del_variant1{
		display: none;
	}
	.control-org:nth-child(1) .del_variant2{
		display: none;
	}
</style>

	<div>
		<!--	                        rus-->

			<form class="form-horizontal" role="form" action='' method='POST'>
				<div class="row">
					<div class="col">
						<div class="form-group">
							<label for="selectForm">Форма участия</label>
							<select class="custom-select" name="stend">
								<option name="stend" selected>Выступление с устным докладом</option>
								<option name="stend">Стенд</option>
								<option name="stend">Дистанционное выступление (онлайн)</option>
								<!--							<option value="3">Заочно</option>-->
							</select>
						</div>
					<div class="form-group">
						<label for="exampleInputArticle1">Название доклада</label>
						<input class="form-control" id = "exampleInputArticle1" type="text" placeholder="" value="<?=$article_ru?>" name='article_ru'>
					</div>
					<div class="bord-form">
<!--						<div id="variants">-->
							<div class="form-group control-group">
								<label for="InputFirstName[]">Имя автора</label>
								<input class="form-control" id="InputFirstName[]" type="text" placeholder="" value="<?=$f_name_a_ru?>" name='f_name_a_ru[]'>
								<!--<a class="del_variant">X</a>-->
							</div>
							<div class="form-group control-group">
								<label for="InputLastName1">Фамилия автора</label>
								<input class="form-control" id="InputLastName1" type="text" placeholder="" value="<?=$l_name_a_ru?>" name='l_name_a_ru[]'>
							</div>
							<div class="form-group control-group">
								<label for="exampleInputName1">Отчество автора</label>
								<input class="form-control" id="exampleInputName1" type="text" placeholder="" value="<?=$m_name_a_ru?>" name='m_name_a_ru[]'>
							</div>
<!--						</div>-->
						<div class="form-group">
							<label for="exampleInputPhone1">Email автора</label>
							<input type="email" class="form-control" id="exampleInputEmail11" value="<?=$email_a_ru?>" name='email_a_ru'>
						</div>


						<div class="form-group control-org">
							<label for="exampleInputEmail1">Организация автора</label>
							<input type="text" class="form-control" id="exampleInputOrganization1" aria-describedby="organizationHelp" value="<?=$organization_ru?>" name='organization_ru[]'>

						</div>
						<div id="org"></div>
						<span id="os">+ Добавить Организацию</span>

					</div>
						<div id="variants"></div>
						<span id="ss">+ Добавить Автора</span>
<!--						<div id="input0" class="form-group"></div>-->
<!--						<div class="add" onclick="addAuthor()">+ Добавить Автора</div>-->

						<div class="form-group">
							<label for="exampleInputAbstracts1">Тезисы</label>
							<textarea class="form-control" name="abstract_ru" id="exampleInputAbstracts1" cols="30" rows="10"></textarea>
<!--							<input type="text" class="form-control" id="exampleInputAbstracts1"  name='abstract_ru'>-->
						</div>
						<div id="links">
							<div class="form-group control-groups">
								<label for="InputLinks[]">Ссылки</label>
								<input type="text" class="form-control" id="InputLinks[]" value="<?=$links_ru?>" name='links_ru[]'>
							</div><!--<a class="del_variant">X</a>-->

						</div>
						<span id="ls">+ Добавить ссылку</span><br>
<!--						<div id="input0"></div>-->
<!--						<div class="add" onclick="addInput()">+ Добавить ссылку</div>-->

						<button type="submit" class="btn btn-primary">Сохранить доклад</button>
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