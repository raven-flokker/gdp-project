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
function addInput() { //вот эта херня не нужная. оставил что б не забыть что к чему
	if (x < 10) {
		// var str = '<input type="hidden" id="input" name="org' + (x + 1) + '">';
		// document.getElementById('variants' + x).innerHTML = str;
		$('input[name*="organization_ru"]').each(function(index) {
			this.name = this.name + ('[' + index + 1 + '][]');
		});
	} else {
		alert('STOP it!');
	}
}

var y = 0;

function addInputs() {//вот эта херня не нужная. оставил что б не забыть что к чему
	if (y < 10) {
		var str = '<input type="text" class="form-control" id="exampleInputOrganization1" aria-describedby="organizationHelp" name="organization_en[]' + (y + 1) + '"><div id="input_en' + (y + 1) + '"></div>';
		document.getElementById('input_en' + y).innerHTML = str;
		y++;
	} else {
		alert('STOP it!');
	}
}

//Куча копипаста для того что б сделать те что можно было сделать в одну строку, но я не знаю как)
$(document)
	$("#org").hide() //Тут мы скрываем поле с id org
		$('#oss').hide() //Тут показываем поле с соответствующим id
	.ready(function () {
		//var links = $('.control-org')
			//.clone(true);
		$('#os')
			// При клике на id os выводим поля с id org и oss
			.click(function () {
				$('#org').show()
				$('#oss').show()
				// $(links)
				// 	.clone(true)
				// 	.appendTo('#org')
				// 	.fadeIn('slow')
				// 	.find("input[name*=organization_ru]")
				// 	.focus();
				if($('#org').length == 1) $(this).hide(); // Это для того что б убирало кнопку,после добавления необходимого поля
			});
	});
//дальше идет копипаст из скрытия кнопок и показа новых, id org отвечает за организации id os за авторов
		$("#orgs").hide()
			$('#osa').hide()
			.ready(function () {
				$('#oss')
					.click(function () {
						$('#orgs').show()
						$('#osa').show()
						if($('#org').length == 1) $(this).hide();
					});
			});
			$("#orga").hide()
				$('#osn').hide()
				.ready(function () {
					$('#osa')
						.click(function () {
							$('#orga').show()
							$('#osn').show()
							if($('#org').length == 1) $(this).hide();
						});
				});
				$("#orgn").hide()
					.ready(function () {
						$('#osn')
							.click(function () {
								$('#orgn').show()
								if($('#org').length == 1) $(this).hide();
							});
					});
				//новая группа
					$("#bord").hide()
						$('#gr_ss').hide()
						.ready(function () {
							$('#new_ss')
								.click(function () {
									$('#bord').show()
									$('#gr_ss').show()
									if($('#org').length == 1) $(this).hide();
								});
						});
						$("#new_org").hide()
						$('#new_oss').hide()
							.ready(function () {
								$('#new_os')
									.click(function () {
										$('#new_org').show()
										$('#new_oss').show()
										if($('#org').length == 1) $(this).hide();
									});
							});
						$("#new_orgs").hide()
						$('#new_osa').hide()
							.ready(function () {
								$('#new_oss')
									.click(function () {
										$('#new_orgs').show()
										$('#new_osa').show()
										if($('#org').length == 1) $(this).hide();
									});
							});
						$("#new_orga").hide()
						$('#new_osn').hide()
							.ready(function () {
								$('#new_osa')
									.click(function () {
										$('#new_orga').show()
										$('#new_osn').show()
										if($('#org').length == 1) $(this).hide();
									});
							});
						$("#new_orgn").hide()
							.ready(function () {
								$('#new_osn')
									.click(function () {
										$('#new_orgn').show()
										if($('#org').length == 1) $(this).hide();
									});
							});
							//новая группа 3
							$("#bord_").hide()
								$('#grs_ss').hide()
								.ready(function () {
									$('#gr_ss')
										.click(function () {
											$('#bord_').show()
											$('#grs_ss').show()
											if($('#org').length == 1) $(this).hide();
										});
								});
							$("#gr_org").hide()
							$('#gr_oss').hide()
								.ready(function () {
									$('#gr_os')
										.click(function () {
											$('#gr_org').show()
											$('#gr_oss').show()
											if($('#org').length == 1) $(this).hide();
										});
								});
							$("#gr_orgs").hide()
							$('#gr_osa').hide()
								.ready(function () {
									$('#gr_oss')
										.click(function () {
											$('#gr_orgs').show()
											$('#gr_osa').show()
											if($('#org').length == 1) $(this).hide();
										});
								});
							$("#gr_orga").hide()
							$('#gr_osn').hide()
								.ready(function () {
									$('#gr_osa')
										.click(function () {
											$('#gr_orga').show()
											$('#gr_osn').show()
											if($('#org').length == 1) $(this).hide();
										});
								});
							$("#gr_orgn").hide()
								.ready(function () {
									$('#gr_osn')
										.click(function () {
											$('#gr_orgn').show()
											if($('#org').length == 1) $(this).hide();
										});
								});
								//новая группа 4
								$("#bord_s").hide()
									$('#grss_ss').hide()
									.ready(function () {
										$('#grs_ss')
											.click(function () {
												$('#bord_s').show()
												$('#grss_ss').show()
												if($('#org').length == 1) $(this).hide();
											});
									});
								$("#grs_org").hide()
								$('#grs_oss').hide()
									.ready(function () {
										$('#grs_os')
											.click(function () {
												$('#grs_org').show()
												$('#grs_oss').show()
												if($('#org').length == 1) $(this).hide();
											});
									});
								$("#grs_orgs").hide()
								$('#grs_osa').hide()
									.ready(function () {
										$('#grs_oss')
											.click(function () {
												$('#grs_orgs').show()
												$('#grs_osa').show()
												if($('#org').length == 1) $(this).hide();
											});
									});
								$("#grs_orga").hide()
								$('#grs_osn').hide()
									.ready(function () {
										$('#grs_osa')
											.click(function () {
												$('#grs_orga').show()
												$('#grs_osn').show()
												if($('#org').length == 1) $(this).hide();
											});
									});
								$("#grs_orgn").hide()
									.ready(function () {
										$('#grs_osn')
											.click(function () {
												$('#grs_orgn').show()
												if($('#org').length == 1) $(this).hide();
											});
									});
									//новая группа 5
									$("#bord_ss").hide()
										.ready(function () {
											$('#grss_ss')
												.click(function () {
													$('#bord_ss').show()
													if($('#org').length == 1) $(this).hide();
												});
										});
									$("#grss_org").hide()
									$('#grss_oss').hide()
										.ready(function () {
											$('#grss_os')
												.click(function () {
													$('#grss_org').show()
													$('#grss_oss').show()
													if($('#org').length == 1) $(this).hide();
												});
										});
									$("#grss_orgs").hide()
									$('#grss_osa').hide()
										.ready(function () {
											$('#grss_oss')
												.click(function () {
													$('#grss_orgs').show()
													$('#grss_osa').show()
													if($('#org').length == 1) $(this).hide();
												});
										});
									$("#grss_orga").hide()
									$('#grss_osn').hide()
										.ready(function () {
											$('#grss_osa')
												.click(function () {
													$('#grss_orga').show()
													$('#grss_osn').show()
													if($('#org').length == 1) $(this).hide();
												});
										});
									$("#grss_orgn").hide()
										.ready(function () {
											$('#grss_osn')
												.click(function () {
													$('#grss_orgn').show()
													if($('#org').length == 1) $(this).hide();
												});
										});

$i = 1;
//Тут идет код, с помощью котороко мы клонировали форму с классом bord-form и заносили ее в div с id variants.
$(document)
$("#os1").hide() // Поле с id os1 отвечает за кнопку добавить организацию

	.ready(function () {
		var variant = $('.control-group')//клонирует поле с классом control-group
			.clone(true);

		$('#ss') //ид кнопки нового автора
			.click(function () {
				//это никак не использовалось, для теста добавлял поля но что-то пошло не так, оставил може пригодится
				$("#os1").show()
					$('<input>').attr({
						type: 'hidden',
						id: 'foo',
						name: 'bar' + $i++ + '[]'
					}).appendTo('#variants');
				$('<div/>', {
					id: 'new' + $i + '',
					"class": 'some-class',
					title: 'now this div has a title!'
				}).appendTo('#variants');
				//это никак не использовалось, для теста добавлял поля но что-то пошло не так, оставил може пригодится КОНЕЦ


				//$("#variants").after('<div id="org1" class="control-groupt" ></div><span id="os1" class="control-groupt" >+ Еще</span>');
				//$("#variant").append('<div id="org1" class="control-groupt" ></div><span id="os1" class="control-groupt" >+ Еще</span>');

				//при клике на кнопку нового автора, клонируем поля и заносим в div с id variants
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
					//.add('<input type="hidden" id="input" name="org' + (x + 1) + '">')
					// .add('<span id="os1" class="control-groupt" >+ Еще</span>')

					.focus();


				if($('.control-group').length == 5) $(this).hide();// это нужно что б кнопка исчезала но мы это реализовали как-то по другому, пусть будет
				$i++;
			});

		// $(document)
		// 	.on('click', 'a.del_variant', function () {
		// 		$(this)
		// 			.parents(".control-group")
		// 			.remove();
		// 		if($('.control-group').length < 5) $('#ss').show();
		// 	});
	});
// $('<input>').attr({
// 	type: 'hidden',
// 	id: 'foo',
// 	name: 'bar'
// }).appendTo('#variants');
$(document)// Тут при клике мы добавляем организации в форму с автором
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

$(document)// Это для ссылок + новая ссылка, все также за счет клонирования поля
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
