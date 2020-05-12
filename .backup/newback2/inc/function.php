<?php
/*
 * Сорян за малое количество комментов. Если что не понятно, знаешь куда обратится.
 */
	function content($link){


		$uri = trim(preg_replace('#(\?.*)?#', '', $_SERVER['REQUEST_URI']), '/');
		include 'info.php';
		//reg

		if ($uri == 'registration'){
			include 'registration.php';
		}
//login

		if ($uri == 'login'){
			include 'login.php';
		}
		//logout
		if ($uri == 'logout'){
			// include 'logout.php';
			header('Location: /logout.php');
				die();
		}
//Profile_user
		if (isset($_GET['id'])){
			include 'profile.php';
		}
		if ($uri == 'admin'){
//			include 'engine/admin/index.php';
			echo 'Not found';
		}
		if ($uri == 'members'){
			//Ищем страницу в бд и выводим ее
			$query = "SELECT * FROM members JOIN organization ON organization.memb_id=members.memb_id";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) ;



			echo '<table class="table table-bordered table-dark">
 <thead>
    <tr>
    	<th scope="col">id</th>
      <th scope="col">Название статьи</th>
      <th scope="col">Автор</th>
      <th scope="col">Тезисы</th>
      <th scope="col">Организация</th>
      <th scope="col">links</th>
    </tr>
  </thead>
';
			foreach ($data as $user) {
				echo "<tbody>
<tr>
      <th scope=\"row\">{$user['user_id']}</th>
      <td>{$user['author']}</td>
      <td>{$user['article']}</td>
      <td>{$user['abstracts']}</td>
      <td>{$user['org_user']}</td>
      <td>{$user['link']}</td>

    </tr>";
			}
			echo '</tbody>
</table>';
		}
// 		if (!isset($_SESSION['lang'])){
// //			$language = $_SESSION['lang'] = 'ru';
// 		$_SESSION['lang'] = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
// 			echo '';
// 		}else{
// 			if (isset($_GET['ru'])){
// 				$_SESSION['lang'] = 'ru';
// 				header('Location: /');
// 				die();
// 			}elseif (isset($_GET['en'])){
// 				$_SESSION['lang'] = 'en';
// 				header('Location: /');
// 				die();
// 			}
// 		}
	}