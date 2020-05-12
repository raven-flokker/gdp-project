<?php
	if (isset($_SESSION['auth'])) {

		if ($_SESSION['id'] == $_GET['id']) {
			function myAbsRu($link){
				$id = $_SESSION['id'];
				$query = "SELECT memb_id, abstracts_ru FROM members WHERE user_id='$id'";
				$result = mysqli_query($link, $query) or die(mysqli_error($link));
				for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) ;

				foreach ($data as $abs){
					echo $abs['abstracts_ru'].'<br />';

				}

			}
			function myArtsRu($link){
				$id = $_SESSION['id'];
				$query = "SELECT memb_id, article_ru FROM members WHERE user_id='$id'";
				$result = mysqli_query($link, $query) or die(mysqli_error($link));
				for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) ;

				foreach ($data as $abs){
					echo $abs['article_ru'].'<br />';

				}

			}
			/*Выводим форму с добавленем организации*/
			function getNewOrg($link){
				$query = "SELECT * FROM members";
				$result = mysqli_query($link, $query) or die(mysqli_error($link));

//Заполняем поля по новой при условии неудачной отправки

					if (isset($_POST['article_ru']) and isset($_POST['f_name_a_ru']) and isset($_POST['l_name_a_ru']) and isset($_POST['m_name_a_ru']) and isset($_POST['email_a_ru']) and isset($_POST['abstract_ru']) and isset($_POST['links_ru']) and isset($_POST['organization_ru'])) {
						$article_ru = $_POST['article_ru'];
						$f_name_a_ru = $_POST['f_name_a_ru'];
						$l_name_a_ru = $_POST['l_name_a_ru'];
						$m_name_a_ru = $_POST['m_name_a_ru'];
						$email_a_ru = $_POST['email_a_ru'];
						$abstract_ru = $_POST['abstract_ru'];
						$links_ru = $_POST['links_ru'];
						$organization_ru = implode(", ", $_POST['organization_ru']);


					} else {
						//При условии если поля пустые оставляем их пустыми. Так же для избезания ошибки
						$article_ru = '';
						$f_name_a_ru = '';
						$l_name_a_ru = '';
						$m_name_a_ru = '';
						$email_a_ru = '';
						$abstract_ru = '';
						$links_ru = '';
						$organization_ru = '';
					}


				ob_start();
				include 'elems/new_org.php';
		//		echo 'f';
			}

			/* Добавляем организацию в бд при условии что поля заполнены на русском и английском или только на английском*/
			function addOrg($link){
					if (isset($_POST['stend']) and isset($_POST['article_ru']) and isset($_POST['f_name_a_ru']) and isset($_POST['l_name_a_ru']) and isset($_POST['m_name_a_ru']) and isset($_POST['email_a_ru']) and isset($_POST['abstract_ru']) and isset($_POST['links_ru']) and isset($_POST['organization_ru'])) {
						$stand = mysqli_real_escape_string($link, $_POST['stend']);
						$article_ru = mysqli_real_escape_string($link, $_POST['article_ru']);
						$f_name_a_ru = mysqli_real_escape_string($link, implode(", ", $_POST['f_name_a_ru']));
						$l_name_a_ru = mysqli_real_escape_string($link, implode(", ", $_POST['l_name_a_ru']));
						$m_name_a_ru = mysqli_real_escape_string($link, implode(", ", $_POST['m_name_a_ru']));
						$email_a_ru = mysqli_real_escape_string($link, implode(", ", $_POST['email_a_ru']));
						$abstract_ru = mysqli_real_escape_string($link, $_POST['abstract_ru']);
						$links_ru = mysqli_real_escape_string($link, implode(", ", $_POST['links_ru']));
						$organization_ru = mysqli_real_escape_string($link, implode(", ", $_POST['organization_ru']));




						$query = "SELECT COUNT(*) as count FROM members WHERE article_ru='$article_ru'";
						$result = mysqli_query($link, $query) or die(mysqli_error($link));
						$isPage = mysqli_fetch_assoc($result)['count'];

						if ($isPage) {
							$_SESSION['message'] = [
								'text' => LANG_SUCCESS1,
								'statuse' => 'alert-danger'
							];
						} else {
							$user_id = $_SESSION['id'];
							if (isset($_SESSION['lang']) and $_SESSION['lang'] == 'ru'){
								$lang = 'ru';
							}else{
								$lang = 'en';
							}


							$query = "INSERT INTO members(user_id, stand, f_name_a_ru, l_name_a_ru, m_name_a_ru, article_ru, email_a_ru, abstracts_ru, links, org_user, lang) VALUES('$user_id', '$stand','$f_name_a_ru', '$l_name_a_ru', '$m_name_a_ru', '$article_ru',  '$email_a_ru',  '$abstract_ru', '$links_ru', '$organization_ru', '$lang')";
							mysqli_query($link, $query) or die(mysqli_error($link));
							$_SESSION['message'] = [
								'text' => LANG_SUCCESS,
								'statuse' => 'success'
							];
							header('Location: /members');
							die();
						}
					}

			}
			function getPage($link){

				$id = $_SESSION['id'];
				$query = "SELECT * FROM users WHERE id='$id'";
				$result = mysqli_query($link, $query) or die(mysqli_error($link));
				$page = mysqli_fetch_assoc($result);

				if ($page) {
					if (isset($_POST['login']) and isset($_POST['first_n']) and isset($_POST['last_n']) and isset($_POST['middle_n']) and isset($_POST['email']) and isset($_POST['phone']) and isset($_POST['country'])) {
						$login = $_POST['login'];
						$first_n = $_POST['first_n'];
						$last_n = $_POST['last_n'];
						$middle_n = $_POST['middle_n'];
						$email = $_POST['email'];
						$phone = $_POST['phone'];
						$country = $_POST['country'];
//						$pass = $_POST['password'];
//						$confirm = $_POST['confirm'];
					} else {
						$login = $page['login'];
						$first_n = $page['first_n'];
						$last_n = $page['last_n'];
						$middle_n = $page['middle_n'];
						$email = $page['email'];
						$phone = $page['phone'];
						$country = $page['country'];
//						$hash = $page['pass'];
//						$pass = password_verify($page['pass'],$hash);
//						$confirm = $page['confirm'];
					}


					ob_start();
					include 'elems/edit_lk.php';
//					$content = ob_get_clean();
				}
			}
			function editProfile($link)
			{
				if (isset($_POST['login']) and isset($_POST['first_n']) and isset($_POST['last_n']) and isset($_POST['middle_n']) and isset($_POST['email']) and isset($_POST['phone'])) {

					$login = mysqli_real_escape_string($link, $_POST['login']);
					$first_n = mysqli_real_escape_string($link, $_POST['first_n']);
					$last_n = mysqli_real_escape_string($link, $_POST['last_n']);
					$middle_n = mysqli_real_escape_string($link, $_POST['middle_n']);
					$email = mysqli_real_escape_string($link, $_POST['email']);
					$phone = mysqli_real_escape_string($link, $_POST['phone']);
					$country = mysqli_real_escape_string($link, $_POST['country']);

					if ($_SESSION['id'] == $_GET['id']) {
						$id = $_SESSION['id'];

						$query = "SELECT * FROM users WHERE id=$id";
						$result = mysqli_query($link, $query) or die(mysqli_error($link));
						$page = mysqli_fetch_assoc($result);

						if ($page['login'] !== $login) {
							$query = "SELECT COUNT(*) as count FROM users WHERE login='$login'";
							$result = mysqli_query($link, $query) or die(mysqli_error($link));
							$isPage = mysqli_fetch_assoc($result)['count'];

							if ($isPage == 1) {
								$_SESSION['message'] = [
									'text' => LANG_SUCCESS2,
									'statuse' => 'alert-danger'
								];//Логин занят
							}
						}

						$query = "UPDATE users SET first_n='$first_n', last_n='$last_n', middle_n='$middle_n', email='$email', phone='$phone', country='$country' WHERE id='$id'";
						mysqli_query($link, $query) or die(mysqli_error($link));

						$_SESSION['message'] = [
							'text' => LANG_USER . '{$page[\'login\']}' . LANG_USER1,
							'statuse' => 'alert-success'
						];//Пользователь успешно отредактирован

						header('Location: /profile?id='.$id);
						die();
					}
				}
			}
	?>
	<div class="container">
    <div class="row m-y-2">
        <div class="col-lg-8 push-lg-4">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#organ" data-toggle="tab" class="nav-link active"><?=LANG_NEWDOCLAD?></a>
                </li>
                <li class="nav-item">
		            <a href="" data-target="#edit" data-toggle="tab" class="nav-link"><?=LANG_EDIT_LK?></a>
	            </li>
	            <li class="nav-item">
		            <a href="" data-target="#abs" data-toggle="tab" class="nav-link"><?=LANG_MY_ABS?></a>
	            </li>
	            <li class="nav-item">
		            <a href="" data-target="#art" data-toggle="tab" class="nav-link"><?=LANG_MY_ART?></a>
	            </li>
            </ul>
            <div class="tab-content p-b-3">
                <div class="tab-pane active" id="organ">
                    <h4 class="m-y-2"><?=LANG_ADDDOCLAD?></h4>
					<?php
						getNewOrg($link);
						addOrg($link);
					?>
                </div>

                <div class="tab-pane" id="edit">
					<?php
						getPage($link);
						editProfile($link);
					?>
                </div>
				<div class="tab-pane" id="abs">
					<div class='media'>
						<div class='media-body'>
							<h5 class="mt-0 mb-1"><?=LANG_ABSTRACTS?></h5>
							<?php
								myAbsRu($link);
							?>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="art">
					<div class='media'>
						<div class='media-body'>
							<h5 class="mt-0 mb-1"><?=LANG_ARTICLES?></h5>
									<?php
										myArtsRu($link);
									?>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
<hr>
<?php
		}else{
			echo 'Test';
		}
	}else{
		echo '403';
	}