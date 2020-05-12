<?php
/*
 * Сорян за малое количество комментов. Если что не понятно, знаешь куда обратится.
 */
	function content($link){


		$uri = trim(preg_replace('#(\?.*)?#', '', $_SERVER['REQUEST_URI']), '/');
		include 'info.php';
		//reg
if (empty($uri)){
		$uri = '/';

	}

		if (isset($_GET['admin'])){
			header('Location: admin'); ;
		}

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
//		if (isset($_GET['id'])){
//			include 'profile.php';
//		}

		if(isset($_GET['id'])){
			include 'inc/edit.php';
		}
		
		if($uri == '/' or $uri == 'information'){
           include_once 'template/information.php';
        }

        if($uri == 'organ'){
        	include_once 'template/organ.php';
        }

		if ($uri == 'admin'){
//			include 'engine/admin/index.php';
			echo 'Not found';
		}
		if ($uri == 'members'){
		    if (isset($_SESSION['auth'])) {
			    include "members.php";
		    }else{
					echo "<a href='/login'>".LANG_LOGIN."</a>";
				}
		    
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

        //var_dump($uri);
	}


//	function getNewOrg($link){
//		ob_start();
//		include 'elems/new_org.php';
////		echo 'f';
//	}