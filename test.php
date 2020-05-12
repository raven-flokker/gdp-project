<?php
	include_once 'vendor/autoload.php';
	require('fpdf/tfpdf.php');
$test = 'huy';
	$parsedTree = '\documentclass[12pt]{article}

%---------------------------------------------------------------------
% PACOTES PADRÕES (Não remover)
\usepackage{sbc-template}
\usepackage{graphicx,url}
\usepackage[brazil]{babel}   
\usepackage[utf8]{inputenc}  
\usepackage{verbatim}
\usepackage{listings}
\usepackage{indentfirst}

% PACOTES PESSOAIS (Insira abaixo seus pacotes utilizados)





%---------------------------------------------------------------------
\sloppy

% TÍTULO DO ARTIGO
\title{Título do artigo: Modelo da revista Henri Poincaré}

% AUTORES
\author{Primeiro Autor (UFRN)\inst{1}, Segundo A. da Silva (UFRN)\inst{2}}

% E-MAILS
\address{emailautor1@gmail.com \inst{2}emailautor2@hotmail.com;
}

%---------------------------------------------------------------------
\begin{document} 
\maketitle

\begin{resumo}
  Este documento descreve o estilo a ser usado na confecção dos trabalhos da Revista Henri Poincaré, do PET MATEMÁTICA da Universidade Federal do Rio Grande do Norte (UFRN). O documento tem como base os padrões de artigos da SBC. É obrigatória a escrita do resumo. O autor do artigo deve tomar cuidado para que o resumo não ultrapasse 200 palavras.\\ \\
  \textbf{Palavras-chave}: palavra1, palavra2, palavra3.
\end{resumo}

%---------------------------------------------------------------------
\section{Introdução}
O artigo completo deve estar no formato apresentado neste artigo. Toda a formatação é baseada no “template” disponível no site da Sociedade Brasileira de Computação (SBC) que é utilizado nas conferencias organizadas pela SBC. O formato da folha deve ser A4 com coluna simples, 3 cm de margem superior, 2.5 cm de margem inferior e 3.0 cm de margens laterais, sem cabeçalhos ou rodapés. 


\section{What is Lorem Ipsum?} \label{sec:firstpage}

\textbf{Lorem Ipsum} is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

\subsection{Where does it come from?}
Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.

Where can I get some? There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.


\section{Considerações Finais}

Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.


%---------------------------------------------------------------------
\begin{thebibliography}{00}
\bibitem{1}  {\sc Nayfeh,  A.H.} -
 {\it Peturbation Methods.}, John Wiley and Sons, 1976, New York.

\bibitem{2}  {\sc Poincaré, H.} -
{\it New Methods of celestialmechanics}, Vol. I-III,NASA TTF-450,1967.

\bibitem{3}  {\sc Bauer,H.F.} - {\it  Nonlinear Response of elastic Plates to Pulse Excitations}, J. Appl.Mech., 35, 47-52, 1968.
\end{thebibliography}

%---------------------------------------------------------------------
%\bibliographystyle{sbc}
%\bibliography{sbc-template}

\end{document}';

	$script = 'test.tex';
//	$parsedTree = [
//		'documentclass'	=> '[12pt]{article}',
//		'\title' => '{'.$test.'Título do artigo: Modelo da revista Henri Poincaré}'
//	];
//	var_dump(parse($input));
//	$parser = new PhpLatex_Parser();
//$parsedTree = $this->parse($input);
// render parsed LaTeX code to HTML
	$htmlRenderer = new PhpLatex_Renderer_Html();
	$html = $htmlRenderer->render($parsedTree);
//echo $html;
// render parsed LaTeX code to sanitized LaTeX code
	//$latex = PhpLatex_Renderer_Abstract::toLatex($script);

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
//var_dump($latex);
//echo $latex;
$fpdf = new tFPDF('P', 'pt', 'A5');
// подключаем шрифты
//	define('FPDF_FONTPATH',"../fpdf/font");
//	// добавляем шрифт ариал
////	$fpdf->AddFont('Arial','B','arial.php',true);
////	$fpdf->SetFont('Arial','B',20);
//	$fpdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
//	$fpdf->SetFont('DejaVu','',14);
//	$fpdf->SetTextColor(50,60,100);
	define('tFPDF_FONTPATH',"../fpdf/font");

	$fpdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
	$fpdf->SetFont('DejaVu','',14);
	$fpdf->SetTitle($article_ru);
	class FPDF extends tFPDF
	{

		function Header() {
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

			define('FPDF_FONTPATH',"../fpdf/font");
			global $title;
			$this->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
			$this->SetFont('DejaVu','',14);
			$this->SetXY(40, 10);
			$this->Cell(0,10,$article_ru,0,0,'C', 0);
		}
		function Footer()
		{
			$this->SetXY(100,-15);
			$this->SetFont('Arial','I',10);
			$this->Write (5, 'This is a footer');
		}
	}
	$fpdf=new FPDF();
	$fpdf->AddPage();
	$fpdf->Output('example2.pdf','I');

//set up a page
//	$fpdf->AddPage('P');
//	$fpdf->SetDisplayMode('real','default');
////display the title with a border around it
////	$fpdf->SetXY(50,20);
////	$fpdf->SetDrawColor(50,60,100);
//	//$fpdf->Cell(100,10,'FPDF Tutorial',1,0,'C',0);
////Set x and y position for the main text, reduce font size and write content
//	$fpdf->SetXY (10,50);
//	$fpdf->SetFontSize(10);
////	$text = iconv('utf-8', 'windows-1251', "ааааааа");
//	$fpdf->SetTitle($article_ru);
//	$fpdf->SetAuthor(implode(', ', $f_name_a_ru) . implode(', ', $l_name_a_ru) . implode(', ', $m_name_a_ru));
//
//	$fpdf->Write(0, $abstract_ru);
////Output the document
//	$fpdf->Output('example1.pdf','I');

