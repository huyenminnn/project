<?php 
	include_once 'models/login.php';
	class LoginController{
		var $model;
		function __construct(){
			$this->model=new Login();
		}

		function login(){
			require_once "views/login/login.php";
		}

		function checkLogin(){
			$id=$_POST['id'];
			$password=$_POST['password'];

			$result=$this->model->find($id);
			if ($result["maQuanLi"] == $id) {
				if ($result["Password"]==$password) {
					$_SESSION['login'] = true;
					$_SESSION['maQuanLi'] = $id;
					$_SESSION['ten']=$result['Ten'];
					$_SESSION['chucVu']=$result['Chuc vu'];
					$_SESSION['ngaySinh']=$result['Ngay sinh'];
					$_SESSION['diaChi']=$result['Dia chi'];
					$_SESSION['email']=$result['Email'];
					$_SESSION['gioiTinh']=$result['Gioi tinh'];
					header('Location: index.php?mod=dashboard&act=index');
					setcookie('msg','Login successful!',time()+2);
					
				}else{
					setcookie('msg','Incorrect password.',time()+2);
					header("Location:index.php");
				}
			}else{
				setcookie('msg','Incorrect ID.',time()+2);
				header("Location:index.php");
			}
		}

		function logout(){
			session_destroy();
			header("Location: index.php");
		}
	}
 ?>