<?php
	//$array  =array_merge($f_name_a_ru, $l_name_a_ru,$m_name_a_ru);
	$array = ['author1', 'автор2'];
	$string = '';
	foreach ($array as $key => $value) {
		echo ','. $value[5];
	}
	$string = substr($string, 1); // удаляем ведущую ","
	//$this->Cell(0,10,$string,0,0,'C');
	print_r($string);