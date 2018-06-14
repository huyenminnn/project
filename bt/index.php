<?php 
session_start();
// session_destroy();
if (isset($_SESSION['login'])) {
	if (isset($_GET['mod'])) {
		$mod=$_GET['mod'];
	}else{
		$mod='dashboard';
	}

	if (isset($_GET['act'])) {
		$act=$_GET['act'];
	}else{
		$act='index';
	}

	switch ($mod) {
		case 'dashboard':
			include_once('controllers/DashboardController.php');
			$dashboard=new DashboardController();
			switch ($act) {
				case 'index':
					$dashboard->index();
					break;
				default:
					echo "ERROR";
					break;
			}
			break;

		case 'foods':
			include_once("controllers/FoodController.php");
			$food=new FoodController();
			switch ($act) {
				case 'list':
					$food->list();
					break;
				case 'description':
					$food->description();
					break;
				case 'add':
					$food->add();
					break;
				case 'store':
				
					$food->store();
					break;
				case 'edit':
					$food->edit();
					break;
				case 'update':
					$food->update();
					break;
				case 'delete':
					$food->delete();
					break;
				default:
					echo "ERROR";
					break;
			}
			break;
	
		case 'admin':
			include_once "controllers/ProfileController.php";
			$admin=new ProfileController();
			switch ($act) {
				case 'profile':
					$admin->profile();
					break;
				case 'edit':
					$admin->edit();
					break;
				case 'update':
					$admin->update();
					break;
				default:
					echo "ERROR!";
					break;
			}
			break;
		case 'nvq':
			include_once "controllers/StaffNVQController.php";
			$nvq=new StaffNVQController();
			switch ($act) {
				case 'list':
					$nvq->list();
					break;
				case 'add':
					$nvq->add();
					break;
				case 'store':
					$nvq->store();
					break;
				case 'edit':
					$nvq->edit();
					break;
				case 'update':
					$nvq->update();
					break;
				case 'delete':
					$nvq->delete();
					break;
				
				default:
					echo "ERROR";
					break;
			}
			break;
		case 'pv':
			include_once "controllers/StaffPVController.php";
			$pv=new StaffPVController();
			switch ($act) {
				case 'list':
					$pv->list();
					break;
				case 'add':
					$pv->add();
					break;
				case 'store':
					$pv->store();
					break;
				case 'edit':
					$pv->edit();
					break;
				case 'update':
					$pv->update();
					break;
				case 'delete':
					$pv->delete();
					break;
				
				default:
					echo "ERROR";
					break;
			}
			break;

		case 'logout':
			include_once("controllers/LoginController.php");
			$logout=new LoginController();
			$logout->logout();
			break;

		default:
			echo "ERROR";
			break;
	}
}else{
	$mod='login';
	
	if (isset($_GET['act'])) {
		$act=$_GET['act'];
	}else{
		//dang nhap
		$act="login";
	}
	include_once('controllers/LoginController.php');
	$login=new LoginController();
	switch ($act) {
		case 'checkLogin':
			$login->checkLogin();
			break;
		default:
			$login->login();
			break;
	}
}
 ?>
