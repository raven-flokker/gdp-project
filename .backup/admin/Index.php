<?php
	include "../inc/db.php";
	//var_dump($_SESSION);
	if (!empty($_SESSION['auth']) and $_SESSION['status'] == 'Admin'){

	function showUserTable($link)
		{
			//Ищем пользователя в бд и выводим его
			$query = "SELECT * FROM users";
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) ;



			$content = '<table class="table table-bordered table">
 <thead>
    <tr>
    	<th scope="col">id</th>
      <th scope="col">Login</th>
      <th scope="col">Фамилия</th>
      <th scope="col">Имя</th>
      <th scope="col">Отчество</th>
      <th scope="col">Email</th>
      <th scope="col">Телефон</th>
      <th scope="col">Страна</th>
      <th scope="col">Дата регистрации</th>
      <th scope="col">Статус</th>
      <th scope="col">edit</th>
      <th scope="col">delete</th>
      <th scope="col">Сменить статус</th>
    </tr>
  </thead>
';
			foreach ($data as $user) {
				if ($user['status'] == 0){
					$stat = 'User';
					$status = 'Сделать админом';
				}else{
					$stat = 'Admin';
					$status = 'Сделать юзером';
				}
				$content .= "<tbody>
<tr>
      <th scope=\"row\">{$user['id']}</th>
      <td>{$user['login']}</td>
      <td>{$user['first_n']}</td>
      <td>{$user['last_n']}</td>
      <td>{$user['middle_n']}</td>
      <td>{$user['email']}</td>
      <td>{$user['phone']}</td>
      <td>{$user['country']}</td>
      <td>{$user['date']}</td>
      <td>{$stat}</td>
      <td><a href=\"edit_user.php?id={$user['id']}\">Edit</a></td>
      <td><a href=\"?delete={$user['id']}\">Delete</a></td>
      <td><a href=\"?status={$user['id']}\">{$status}</a></td>
    </tr>";
			}
			$content .= '</tbody>
</table>';

			$title = 'Admin Page';

			include 'elems/layouts.php';//инклюдим макет страницы
		}

		function deleteUserTable($link)
		{
			if (isset($_GET['delete'])) {
				$id = $_GET['delete'];
				$query = "DELETE FROM users WHERE id=$id";
				$result = mysqli_query($link, $query) or die(mysqli_error($link));

				$_SESSION['message'] = [
					'text' => "Page deleted success!",
					'statuse' => 'alert-success'
				];
				var_dump($_SESSION['message']);
				header('Location: /admin/'); die();
			}
		}
		function statusUserTable($link)
		{
			if (isset($_GET['status'])) {
				$id = $_GET['status'];
				$query = "SELECT status FROM users WHERE id='$id'";
				$result = mysqli_query($link, $query) or die(mysqli_error($link));
				$stat = mysqli_fetch_assoc($result);

				if ($stat['status'] == 0){
					$edit = 1;
				}else{
					$edit = 0;
				}

				$query = "UPDATE users SET status='$edit' WHERE id=$id";
				$result = mysqli_query($link, $query) or die(mysqli_error($link));

				$_SESSION['message'] = [
					'text' => "User edit success!",
					'statuse' => 'alert-success'
				];
				var_dump($_SESSION['message']);
				header('Location: /admin/'); die();
			}
		}

		deleteUserTable($link);

		showUserTable($link);
		statusUserTable($link);
	}else{
		header("Location: ../login");exit;
	}