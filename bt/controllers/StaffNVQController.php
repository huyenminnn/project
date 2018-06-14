<?php 

	include_once('models/staff_NVQ.php');
	class StaffNVQController{
		var $list;

		function __construct(){
			$this->list=new NhanVienQuay();
		}

		function list(){
			$list_nvq=$this->list->list();
			require_once("views/staffNVQ/list.php");

		}

		function delete(){
			$id=$_GET['id'];
			$nvq=$this->list->delete($id);
			if($nvq==1){
				setcookie('msg_s','Delete successful!',time()+2);
				header("Location:?mod=nvq&act=list");
			}
		}

		function add(){
			require_once "views/staffNVQ/add.php";
		}

		function store(){
			$id=$_POST['maNhanVien'];
			$list_id=$this->list->find_id($id);

			if (!$list_id) {
					$info=$_POST;
					$store=$this->list->store($info);

					if ($store==1) {
						setcookie('msg_s','Successful!',time()+2);
						header("Location:?mod=nvq&act=list");
					}else{
						setcookie('msg_f','Unsuccessful!',time()+2);
						header("Location:?mod=nvq&act=list");
					}
				}else{
					setcookie('msg_f','ID already exists!',time()+2);
					header("Location: ?mod=nvq&act=add");
				}
			}

		function edit(){
			$id=$_GET['id'];
			$edit_nvq=$this->list->find($id);
			require_once("views/staffNVQ/edit.php");
		}

		function update(){
			
			//du lieu edit
			$info=$_POST;

			$id=$_GET['id'];
			$update=$this->list->update($info,$id);
		
			if(!$update){
				setcookie('msg_s','Successful!',time()+1);
			}else{
				setcookie('msg_f','Unsuccessful!',time()+1);
				}
			header("Location: ?mod=nvq&act=list");
		}
	}

 ?>