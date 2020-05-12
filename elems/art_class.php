<?php
	class PDF extends tFPDF {

		function ChapterBody($abstract_ru) {
			global $title;
			$f_name_a_ru = $_POST['f_name_a_ru'];
			$l_name_a_ru = $_POST['l_name_a_ru'];
			$m_name_a_ru = $_POST['m_name_a_ru'];
			$result = '';
			foreach ($_POST['organization_ru'] as $k => $elem) {
				foreach ($elem as $key => $subElem) {
					$result .= $subElem;
				}
			}
			$organization_ru = explode(', ', $result);
			var_dump($organization_ru);
			var_dump($_POST);
			//$organization_ru = $_POST['organization_ru'];

			
//заголовок
			$this->SetXY(30, 15);
			$this->AddFont('Arial','','arial.ttf',true);
			$this->SetFont('Arial','',7);
			$this->SetTextColor(179,179,179);
			$this->Write(3, mb_strtoupper('| Всеросийская конференция с международным участием <<газоразрядная плазма и синтез наноструктур>>'));

			$this->Ln(8);

//Название статьи - тезисаб title одним словом
			// Calculate width of title and position
			$w = $this->GetStringWidth($title)+6;

			$this->AddFont('Arial','','arial.ttf',true);
			$this->SetFont('Arial','',12);

			$this->SetTextColor(0,0,0);

			$this->Write(5, mb_strtoupper($title));


			// Line break
			$this->Ln(8);


//Вывод имени, пока что проблема с выводом массива
			$this->AddFont('Arial','B','arialbd.ttf',true);
			$this->SetFont('Arial','B',9);

			$string = implode($f_name_a_ru);
			$w = $this->GetStringWidth($string)-4;

			//Горе цикл работает но не та как нужно
//			$result = [];
//			foreach ($f_name_a_ru as $k => $v) {
//				$this->Cell($w,5, preg_replace('~^(\S++)\s++(\S)\S++\s++(\S)\S++$~u', '$1 $2.$3.', $result[$k] = $v. ' '. $l_name_a_ru[$k]. ' '.$m_name_a_ru[$k]) . ', ',0,0,'L');
//			}
//			$organization_ru = $_POST['organization_ru'];
//			function implode_recur($separator, $arrayvar){
//				$output = "";
//				foreach ($arrayvar as $av) {
//					if (is_array($av)) {
//						$output .= implode_recur($separator, $av);
//					} else {
//						$output .= $separator . $av;
//					}
//					return $output;
//				}
//			}
//
//			$result = implode_recur(">>",$organization_ru);
//			var_dump($result);
			//$organization_ru = $_POST['organization_ru'];
			$result = '';
			foreach ($_POST['organization_ru'] as $ke => $elem) {
				foreach ($elem as $key => $subElem) {
					$result .= $subElem;
				}
			}
			//print_r($result);

			foreach ($f_name_a_ru as $k => $v) {

				//
				$this->Cell($w,5, preg_replace('~^(\S++)\s++(\S)\S++\s++(\S)\S++$~u', '$1 $2.$3.', $v. ' '. $l_name_a_ru[$k]. ' '.$m_name_a_ru[$k]) . ', ',0,0,'L');
			}

			$this->Ln(8);


//Вывод организаций
			$this->AddFont('Arial','I','ariali.ttf',true);
			$this->SetFont('Arial','I',8);

			$k = 1;
			foreach ($organization_ru as $elem) {
				$this->Cell(0,3,$k++.' '. $elem,0,1,'L');
			}
			$this->Ln(6);
//Вывод поля тезисов
			$this->AddFont('Arial','','arial.ttf',true);
			$this->SetFont('Arial','',9);

			$this->MultiCell(0 , 3, strip_tags($abstract_ru));

			$this->Ln(6);

//вывод литературы
			$links_ru = $_POST['links_ru'];
			$email_a_ru = $_POST['email_a_ru'];

			$this->AddFont('Arial','B','arialbd.ttf',true);
			$this->SetFont('Arial','B',9);
			$this->Cell(0,5,'Литература:', 0, 1, 'L');
			$this->AddFont('Arial','','arial.ttf',true);
			$this->SetFont('Arial','',9);
			$k=1;
			foreach ($links_ru as $elem) {
				$this->MultiCell(0 , 3,'['.$k++.'] '. $elem, 0);
				//$this->Cell(0,5,'['.$k++.'] '. $elem,0,1,'L');
			}

			$this->Ln(4);

			$this->AddFont('Arial','','arial.ttf',true);
			$this->SetFont('Arial','',8);
			foreach ($email_a_ru as $elem) {
				$this->Cell(0,3,'* '. $elem, 0, 1, 'L');
			}
		}

		function PrintChapter($num, $html) {
			$this->AddPage();

			$this->ChapterBody($html);
		}
	}