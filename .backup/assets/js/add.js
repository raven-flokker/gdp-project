var x = 0;
// <div class="form-group">
// 	<label for="exampleInputName1">Имя автора 1</label>
// <input class="form-control" id="exampleInputName1" type="text" placeholder="<?=LANG_AUTHOR?>" value="<?=$f_name_a_ru?>" name='f_name_a_ru'>
// 	</div>
// 	<div class="form-group">
// 	<label for="exampleInputName1">Фамилия автора 1</label>
// <input class="form-control" id="exampleInputName1" type="text" placeholder="<?=LANG_AUTHOR?>" value="<?=$l_name_a_ru?>" name='l_name_a_ru'>
// 	</div>
// 	<div class="form-group">
// 	<label for="exampleInputName1">Отчество автора 1</label>
// <input class="form-control" id="exampleInputName1" type="text" placeholder="<?=LANG_AUTHOR?>" value="<?=$m_name_a_ru?>" name='m_name_a_ru'>
// 	</div>
function addAuthor() {
	if (x < 10) {
		var str = '<label for="InputFirstName' + (x + 2) + '">Имя автора ' + (x + 2) + '</label><input type="text" class="form-control" id="InputFirstName' + (x + 2) + '" name="f_name_a_ru' + (x + 2) + '"><div id="input' + (x + 1) + '"></div>' +
			'<label for="InputLasttName' + (x + 2) + '">Фамилия автора ' + (x + 2) + '</label><input type="text" class="form-control" id="InputLastName'  + (x + 2) +  '" name="l_name_a_ru' + (x + 2) + '"><div id="input' + (x + 1) + '"></div>';
		document.getElementById('input' + x).innerHTML = str;
		x++;
	} else {
		alert('STOP it!');
	}
}

var y = 0;

function addInput() {
	if (y < 10) {
		var str = '<input type="text" class="form-control" id="exampleInputOrganization1" aria-describedby="organizationHelp" name="organization_en[]' + (y + 1) + '"><div id="input_en' + (y + 1) + '"></div>';
		document.getElementById('input_en' + y).innerHTML = str;
		y++;
	} else {
		alert('STOP it!');
	}
}
$(document)
	.ready(function () {
		var links = $('.control-org')
			.clone(true);
		$('#os')
			.click(function () {

				$(links)
					.clone(true)
					.appendTo('#org')
					.fadeIn('slow')
					.find("input[name*=organization_ru]")
					.focus();
				if($('.control-org').length == 5) $(this).hide();
			});
	});
$(document)
$("#os1").hide()
	.ready(function () {
		var variant = $('.control-group')
			.clone(true);

		$('#ss')
			.click(function () {
				$("#os1").show();
				//$("#variants").after('<div id="org1" class="control-groupt" ></div><span id="os1" class="control-groupt" >+ Еще</span>');
				//$("#variant").append('<div id="org1" class="control-groupt" ></div><span id="os1" class="control-groupt" >+ Еще</span>');
				$(variant)
					.clone(true)
					.appendTo('#variants')
					.fadeIn('slow')
					.find("input[name*=f_name_a_ru]")
					.find("input[name*=l_name_a_ru]")
					.find("input[name*=m_name_a_ru]")
					.find("input[name*=email_a_ru]")
					.find("input[name*=organization_ru]")



					//.find("div[id*=org]")
					//.replace("div[id*=org1]")
					//.replace("div[id*=org]")
					//.find("span[id*=os]")
					// .add('<div id="org1" class="control-groupt" ></div>')
					// .add('<span id="os1" class="control-groupt" >+ Еще</span>')

					.focus();

				if($('.control-group').length == 5) $(this).hide();

			});



		// $(document)
		// 	.on('click', 'a.del_variant', function () {
		// 		$(this)
		// 			.parents(".control-group")
		// 			.remove();
		// 		if($('.control-group').length < 5) $('#ss').show();
		// 	});
	});

$(document)
	.ready(function () {
		var links = $('.control-org')
			.clone(true);
		$('#os1')
			.click(function () {

				$(links)
					.clone(true)
					.appendTo('#variants')
					.fadeIn('slow')
					.find("input[name*=organization_ru]")
					.focus();
				if($('.control-org').length == 5) $(this).hide();
			});
	});

$(document)
	.ready(function () {
		var links = $('.control-groups')
			.clone(true);
		$('#ls')
			.click(function () {

				$(links)
					.clone(true)
					.appendTo('#links')
					.fadeIn('slow')
					.find("input[name*=links_ru]")
					.focus();
				if($('.control-groups').length == 5) $(this).hide();
			});
	});