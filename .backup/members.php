<?php
				//Ищем в бд и выводим
//					$query = "SELECT * FROM organization, links, authors JOIN members ON members.memb_id=organization.memb_id";
	$query = "SELECT * FROM members";
					$result = mysqli_query($link, $query) or die(mysqli_error($link));
					for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) ;


		echo '<table class="table table-bordered table">
							 <thead>
							    <tr>
							        <th scope="col">id</th>
							      <th scope="col">'.LANG_FNAME.'</th>
							      <th scope="col">'.LANG_LNAME.'</th>
							      <th scope="col">'.LANG_MNAME.'</th>
							      <th scope="col">'.LANG_TITLEDOC.'</th>
							      
							    </tr>
							  </thead>
							';
		foreach ($data as $user) {
			if ($user['allowed'] == 1){
				echo "<tbody>
							<tr>
							      <th scope=\"row\">{$user['memb_id']}</th>
							      <td>{$user['f_name_a_ru']}</td>
							      <td>{$user['l_name_a_ru']}</td>
							      <td>{$user['m_name_a_ru']}</td>
							      <td>{$user['article_ru']}</td>
							     
	
							    </tr>";
			}

		}


									echo '</tbody>
						</table>';

		/*
		 * echo '<table class="table table-bordered table">
							 <thead>
							    <tr>
							        <th scope="col">id</th>
							      <th scope="col">Фамилия</th>
							      <th scope="col">Имя</th>
							      <th scope="col">Отчество</th>
							      <th scope="col">Email</th>
							      <th scope="col">Название Доклада</th>
							      <th scope="col">Тезисы</th>
							      <th scope="col">Организация</th>
							      <th scope="col">links</th>
							    </tr>
							  </thead>
							';
		foreach ($data as $user) {
			if ($user['allowed'] == 1){
				echo "<tbody>
							<tr>
							      <th scope=\"row\">{$user['memb_id']}</th>
							      <td>{$user['f_name_a_ru']}</td>
							      <td>{$user['l_name_a_ru']}</td>
							      <td>{$user['m_name_a_ru']}</td>
							      <td>{$user['email_a_ru']}</td>
							      <td>{$user['article_ru']}</td>
							      <td>{$user['abstracts_ru']}</td>
							      <td>{$user['org_user']}</td>
							      <td>{$user['links']}</td>

							    </tr>";
			}
		 */