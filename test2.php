<?php
	if(isset($_GET['article'])){
		if (!empty($_POST['article_ru']) and !empty($_POST['f_name_a_ru']) and !empty($_POST['l_name_a_ru']) and !empty($_POST['m_name_a_ru']) and !empty($_POST['email_a_ru']) and !empty($_POST['abstract_ru']) and !empty($_POST['links_ru']) and !empty($_POST['organization_ru'])){


			require('fpdf/tfpdf.php');

			$article_ru = $_POST['article_ru'];
			$f_name_a_ru = $_POST['f_name_a_ru'];
			$l_name_a_ru = $_POST['l_name_a_ru'];
			$m_name_a_ru = $_POST['m_name_a_ru'];
			$email_a_ru = $_POST['email_a_ru'];
			$abstract_ru = $_POST['abstract_ru'];
			$links_ru = $_POST['links_ru'];
			$organization_ru = implode(", ", $_POST['organization_ru']);
			//$array  =array_merge($f_name_a_ru, $l_name_a_ru,$m_name_a_ru);
//print_r($array);

			class PDF extends tFPDF
			{
				function Header()
				{
					//$pdf = new tFPDF('P', 'pt', 'A5');
					//define('FPDF_FONTPATH',"../fpdf/font");
//			global $title;
//			$f_name_a_ru = $_POST['f_name_a_ru'];
//			$l_name_a_ru = $_POST['l_name_a_ru'];
//			$m_name_a_ru = $_POST['m_name_a_ru'];
//			$organization_ru = $_POST['organization_ru'];
//			// Arial bold 15
//			//$this->SetFont('Arial','B',7);
//			$this->SetXY(30, 15);
//			$this->AddFont('Arial','','arial.ttf',true);
//			$this->SetFont('Arial','',7);
//			$this->SetTextColor(179,179,179);
//			$this->Write(4, mb_strtoupper('| Всеросийская конференция с международным участием <<газоразрядная плазма и синтез наноструктур>>'));
//			//$this->Cell(60,10,'Всеросийская конференция с международным участием <<газоразрядная плазма и синтез наноструктур>>',0,20,'L');
////			$this->Cell(0,6,'<<газоразрядная плазма и синтез наноструктур>>',0,1,'L');
//			$this->Ln(8);
//
//
//			// Calculate width of title and position
//			$w = $this->GetStringWidth($title)+6;
//			//$this->SetX((200-$w)/2);
//			// Colors of frame, background and text
//			$this->AddFont('Arial','','arial.ttf',true);
//			$this->SetFont('Arial','',12);
//			//$this->SetTextProp("FOOTRNB1", 185, 287, -1, -1, 0, 0, 0,"Courier", "I", 9);
//			$this->SetTextColor(0,0,0);
//			// Thickness of frame (1 mm)
//			//$this->SetLineWidth(1);
//			// Title
//			$this->Write(5, mb_strtoupper($title));
//			//$this->Cell(0,7,$title,0,0,'L');
//			//$this->Cell($w,7,$title,0,1,'L',true);
//
//			// Line break
//			$this->Ln(8);
//			$arr = '';
//			foreach ($l_name_a_ru as $value) {
//				$arr .= '.'.$value;
//			}
//			$arrs = '';
//			foreach ($m_name_a_ru as $key => $value) {
//				$arrs = '.'.$value;
//			}
//			$array  = array_merge($f_name_a_ru);
//			//$string = '';
//
//			foreach ($array as $value) {
//				$this->Cell(0,10,$value . substr($arr, 1,-1) . $arrs,0,1,'L');
//			}
//			//$string = substr($string, 1); // удаляем ведущую ","
//			//$this->Cell(0,10,$string,0,0,'C');
//			//print_r($string);
//			$this->Ln(8);
//
//			$k = 1;
//
//			$this->AddFont('Arial','','arial.ttf',true);
//			$this->SetFont('Arial','',8);
//			foreach ($organization_ru as $elem){
//				$this->Cell(0,5,$k++.' '. $elem,0,1,'L');
//			}


//var_dump($organization_ru);

				}

				function Footer()
				{
//			$links_ru = $_POST['links_ru'];
//			$email_a_ru = $_POST['email_a_ru'];
//
//			$this->AddFont('Arial','','arial.ttf',true);
//			$this->SetFont('Arial','',9);
//			$this->Cell(0,5,'Литература:',0,1,'L');
//			$this->AddFont('Arial','','arial.ttf',true);
//			$this->SetFont('Arial','',9);
//			$k=1;
//			foreach ($links_ru as $elem){
//				$this->Cell(0,5,'['.$k++.'] '. $elem,0,1,'L');
//			}
//
//			$this->Ln(8);
//
//			$this->AddFont('Arial','','arial.ttf',true);
//			$this->SetFont('Arial','',8);
//			foreach ($email_a_ru as $elem){
//				$this->Cell(0,5,'* '. $elem,0,1,'L');
//			}

					// Page number
					//$this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
				}

//		function ChapterTitle($num, $label)
//		{
//			// Arial 12
////			$this->SetFont('Arial','',12);
//			$this->AddFont('Arial','','arial.ttf',true);
//			$this->SetFont('Arial','',14);
//			// Background color
//			$this->SetFillColor(200,220,255);
//			// Title
//			$this->Cell(0,6,"Chapter $num : $label",0,1,'L',true);
//			// Line break
//			$this->Ln(4);
//		}

				function ChapterBody($abstract_ru)
				{
					global $title;
					$f_name_a_ru = $_POST['f_name_a_ru'];
					$l_name_a_ru = $_POST['l_name_a_ru'];
					$m_name_a_ru = $_POST['m_name_a_ru'];
					$organization_ru = $_POST['organization_ru'];
					// Arial bold 15
					//$this->SetFont('Arial','B',7);
					$this->SetXY(30, 15);
					$this->AddFont('Arial','','arial.php',true);
					$this->SetFont('Arial','',7);
					$this->SetTextColor(179,179,179);
					$this->Write(4, mb_strtoupper('| Всеросийская конференция с международным участием <<газоразрядная плазма и синтез наноструктур>>'));
					//$this->Cell(60,10,'Всеросийская конференция с международным участием <<газоразрядная плазма и синтез наноструктур>>',0,20,'L');
//			$this->Cell(0,6,'<<газоразрядная плазма и синтез наноструктур>>',0,1,'L');
					$this->Ln(8);


					// Calculate width of title and position
					$w = $this->GetStringWidth($title)+6;
					//$this->SetX((200-$w)/2);
					// Colors of frame, background and text
					$this->AddFont('Arial','','arial.php',true);
					$this->SetFont('Arial','',12);
					//$this->SetTextProp("FOOTRNB1", 185, 287, -1, -1, 0, 0, 0,"Courier", "I", 9);
					$this->SetTextColor(0,0,0);
					// Thickness of frame (1 mm)
					//$this->SetLineWidth(1);
					// Title
					$this->Write(5, mb_strtoupper($title));
					//$this->Cell(0,7,$title,0,0,'L');
					//$this->Cell($w,7,$title,0,1,'L',true);

					// Line break
					$this->Ln(8);
					//var_dump($l_name_a_ru);

					$this->AddFont('Arial','','arial.php',true);
					$this->SetFont('Arial','',9);
					$arr = '';
					foreach ($l_name_a_ru as $key => $value) {
						$arr .= '.'.mb_substr($value,0 ,1);
					}

//var_dump($l_name_a_ru);
					$arrs = '';
					foreach ($m_name_a_ru as $key => $value) {
						$arrs .= '.'.mb_substr($value,0 ,1);
					}
					//$array  = array_merge($f_name_a_ru, $l_name_a_ru, $m_name_a_ru);
					//$string = '';
					$string = implode($f_name_a_ru);
					$w = $this->GetStringWidth($string)-7;
					foreach ($f_name_a_ru as $key => $value) {
						$this->Cell($w,5,$value . $arr. $arrs.', ',0,0,'L');
					}
//var_dump($string);
					//var_dump($m_name_a_ru);
					//$string = substr($string, 1); // удаляем ведущую ","
					//$this->Cell(0,10,$string,0,0,'C');
					//print_r($string);
					$this->Ln(4);

					$k = 1;

					$this->AddFont('Arial','','arial.ttf',true);
					$this->SetFont('Arial','',8);
					foreach ($organization_ru as $elem){
						$this->Cell(0,5,$k++.' '. $elem,0,1,'L');
					}
					$this->Ln(4);
//			$this->SetLeftMargin(30);
//			$this->SetTopMargin(10);
//			$this->SetRightMargin(15);
					$this->AddFont('Arial','','arial.ttf',true);
					$this->SetFont('Arial','',9);
					// Read text file
					//$txt = file_get_contents($file);
					// Times 12
					//$this->SetFont('Times','',12);
					// Output justified text
					$this->MultiCell(0,5,strip_tags($abstract_ru));
					// Line break
					$this->Ln(6);
					// Mention in italics
					//$this->SetFont('','I');
//			$this->Cell(0,5,'(end of excerpt)');

					$links_ru = $_POST['links_ru'];
					$email_a_ru = $_POST['email_a_ru'];

					$this->AddFont('Arial','','arial.ttf',true);
					$this->SetFont('Arial','',9);
					$this->Cell(0,5,'Литература:',0,1,'L');
					$this->AddFont('Arial','','arial.ttf',true);
					$this->SetFont('Arial','',9);
					$k=1;
					foreach ($links_ru as $elem){
						$this->MultiCell(0,5,'['.$k++.'] '. $elem,0,'L');
						//$this->Cell(0,5,'['.$k++.'] '. $elem,0,1,'L');
					}

					$this->Ln(8);

					$this->AddFont('Arial','','arial.ttf',true);
					$this->SetFont('Arial','',8);
					foreach ($email_a_ru as $elem){
						$this->Cell(0,5,'* '. $elem,0,1,'L');
					}
				}

				function PrintChapter($num, $html)
				{
					$this->AddPage();
					//$this->ChapterTitle($num,$title);
					$this->ChapterBody($html);
				}
			}

			$pdf = new PDF('P','mm','A5');
			//define('FPDF_FONTPATH',"../fpdf/font/unitfont");

			$pdf->SetLeftMargin(30);
			$pdf->SetTopMargin(10);
			$pdf->SetRightMargin(15);
			$pdf->AddFont('Arial','','arial.ttf',true);
			$pdf->SetFont('Arial','',14);
			$title = $article_ru;

			$pdf->SetTitle($title, true);
			$pdf->SetAuthor('Jules Verne');
			$pdf->PrintChapter(1,$abstract_ru);
			//$pdf->Footer();
			if($pdf->PageNo()>1){
				echo 'Ой йой, кажется текста слишком много, сократите поле тезисы';
			}else{
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
				$pdf->Output();
			}
		}else{
			echo 'Кажется вы заполнили не все поля';
		}

	}else{
		header( "HTTP/1.1 404 Not Found" );
		exit();
	}
