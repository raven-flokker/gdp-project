<?php
	include "../inc/db.php";

	if (!empty($_SESSION['auth']) and $_SESSION['status'] == 'Admin') {
		function showMembTable($link)
		{
			//Ищем страницу в бд и выводим ее
			$query = "SELECT * FROM members";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) ;


			$content = '<table class="table table-bordered table">
 <thead>
    <tr>
    	<th scope="col">id</th>
    	<th scope="col">Форма участия</th>
		<th scope="col">Фамилия</th>
		<th scope="col">Имя</th>
		<th scope="col">Отчество</th>
		<th scope="col">Email</th>
		<th scope="col">Название статьи</th>
		<th scope="col">Тезисы</th>
		<th scope="col">Организация</th>
		<th scope="col">links</th>
		<th scope="col">Язык статьи</th>
		<th scope="col">Edit</th>
		<th scope="col">Удалить</th>
		<th scope="col">Allowed</th>
    </tr>
  </thead>
';
			foreach ($data as $memb) {
				if ($memb['allowed'] == 0){
					$allow = '+';
				}else{
					$allow = '-';
				}
				$content .= "<tbody>
<tr>
      <th scope=\"row\"><a href=\"edit_user.php?id={$memb['user_id']}\">{$memb['memb_id']}</a></th>
      <td>{$memb['stand']}</td>
      <td>{$memb['f_name_a_ru']}</td>
      <td>{$memb['l_name_a_ru']}</td>
      <td>{$memb['m_name_a_ru']}</td>
      <td>{$memb['email_a_ru']}</td>
      <td>{$memb['article_ru']}</td>
      <td>{$memb['abstracts_ru']}</td>
      <td>{$memb['org_user']}</td>
      <td>{$memb['links']}</td>
      <td>{$memb['lang']}</td>
      
      <td><a href=\"editmemb.php?id={$memb['memb_id']}\">Edit</a></td>
      <td><a href=\"?membdel={$memb['memb_id']}\">Delete</a></td>
      <td><a href=\"?allowed={$memb['memb_id']}\">{$allow}</a></td>
    </tr>";
			}
			$content .= '</tbody>
</table>';

			$title = 'Admin Page all Members';

			include 'elems/layouts.php';//инклюдим макет страницы
		}

		function deleteMembTable($link)
		{
			if (isset($_GET['membdel'])) {
				$id = $_GET['membdel'];
				$query = "DELETE FROM members WHERE memb_id=$id";
				$result = mysqli_query($link, $query) or die(mysqli_error($link));

				$_SESSION['message'] = [
					'text' => "Member deleted success!",
					'statuse' => 'alert-success'
				];

				header('Location: /admin/members.php');
				die();
			}
		}
		function allowedMembTable($link)
		{
			if (isset($_GET['allowed'])) {
				$id = $_GET['allowed'];
				$query = "SELECT allowed FROM members WHERE memb_id='$id'";
				$result = mysqli_query($link, $query) or die(mysqli_error($link));
				$allowed = mysqli_fetch_assoc($result);

				if ($allowed['allowed'] == 0){
					$allow = 1;
				}else{
					$allow = 0;
				}
				$id = $_GET['allowed'];
				$query = "UPDATE members SET allowed='$allow' WHERE memb_id=$id";
				$result = mysqli_query($link, $query) or die(mysqli_error($link));

				$_SESSION['message'] = [
					'text' => "Member allowed success!",
					'statuse' => 'alert-success'
				];

				header('Location: /admin/members.php');
				exit();
			}
		}


		allowedMembTable($link);
		deleteMembTable($link);

		showMembTable($link);

	}else{
		header("Location: ../login");exit;
	}