<?php
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
						      <th scope=\"row\">{$user['memb_id']}</th>
						      <td>{$user['author']}</td>
						      <td>{$user['article']}</td>
						      <td>{$user['abstracts']}</td>
						      <td>{$user['org_user']}</td>
						      <td>{$user['link']}</td>

						    </tr>";
									}
									echo '</tbody>
						</table>';