<?php


	if(isset($_GET['article'])){
		
		if (!empty($_POST['article_ru']) and !empty($_POST['f_name_a_ru']) and !empty($_POST['l_name_a_ru']) and !empty($_POST['m_name_a_ru']) and !empty($_POST['email_a_ru']) and !empty($_POST['abstract_ru']) and !empty($_POST['links_ru']) and !empty($_POST['organization_ru'])){

define('FPDF_FONTPATH',"fpdf/font");
			require ('fpdf/tfpdf.php');
// define('FPDF_FONTPATH',"fpdf/font/unifont");
			
$article_ru = $_POST['article_ru'];
			$f_name_a_ru = $_POST['f_name_a_ru'];
			$l_name_a_ru = $_POST['l_name_a_ru'];
			$m_name_a_ru = $_POST['m_name_a_ru'];
			$email_a_ru = $_POST['email_a_ru'];
			$abstract_ru = $_POST['abstract_ru'];
			$links_ru = $_POST['links_ru'];
			$result = '';
			foreach ($_POST['organization_ru'] as $k => $elem) {
				foreach ($elem as $key => $subElem) {
					$result .= $subElem;
				}
			}
			$organization_ru = explode(' ', $result);
			//$organization_ru = implode(", ", $_POST['organization_ru']);


			include 'elems/art_class.php';

			$pdf = new PDF('P','mm','A5');
// define('FPDF_FONTPATH',"../fpdf/font/unifont");

			$pdf->SetLeftMargin(30);
			$pdf->SetTopMargin(10);
			$pdf->SetRightMargin(15);
			// $pdf->AddFont('Arial','','arial.ttf',true);
			// $pdf->SetFont('Arial','',14);
			$title = $article_ru;

			$pdf->SetTitle($title, true);
			$pdf->SetAuthor('Jules Verne');
			$pdf->PrintChapter(1,$abstract_ru);
			//$pdf->Footer();
			if($pdf->PageNo()>1){
				echo 'Ой йой, кажется текста слишком много, сократите поле тезисы';
			}else{
				function SqlPost(){
					if (isset($_POST['stend']) and isset($_POST['article_ru']) and isset($_POST['f_name_a_ru']) and isset($_POST['l_name_a_ru']) and isset($_POST['m_name_a_ru']) and isset($_POST['email_a_ru']) and isset($_POST['abstract_ru']) and isset($_POST['links_ru']) and isset($_POST['organization_ru'])) {
						include "inc/db.php";
						$stand = mysqli_real_escape_string($link, $_POST['stend']);
						$article_ru = mysqli_real_escape_string($link, $_POST['article_ru']);
						$f_name_a_ru = mysqli_real_escape_string($link, implode(", ", $_POST['f_name_a_ru']));
						$l_name_a_ru = mysqli_real_escape_string($link, implode(", ", $_POST['l_name_a_ru']));
						$m_name_a_ru = mysqli_real_escape_string($link, implode(", ", $_POST['m_name_a_ru']));
						$email_a_ru = mysqli_real_escape_string($link, implode(", ", $_POST['email_a_ru']));
						$abstract_ru = mysqli_real_escape_string($link, $_POST['abstract_ru']);
						$links_ru = mysqli_real_escape_string($link, implode(", ", $_POST['links_ru']));
						$organization_ru = mysqli_real_escape_string($link, implode(", ", $_POST['organization_ru']));


						$user_id = $_SESSION['id'];
						if (isset($_SESSION['lang']) and $_SESSION['lang'] == 'ru'){
							$lang = 'ru';
						}else{
							$lang = 'en';
						}


						$query = "INSERT INTO members(user_id, stand, f_name_a_ru, l_name_a_ru, m_name_a_ru, article_ru, email_a_ru, abstracts_ru, links, org_user, lang) VALUES('$user_id', '$stand','$f_name_a_ru', '$l_name_a_ru', '$m_name_a_ru', '$article_ru',  '$email_a_ru',  '$abstract_ru', '$links_ru', '$organization_ru', '$lang')";
						mysqli_query($link, $query) or die(mysqli_error($link));

					}
				}
				//SqlPost();
				$pdf->Output();
			}
		}else{
			echo 'Кажется вы заполнили не все поля';

var_dump($_POST);
		}

	}else{
		echo 'not';
	}