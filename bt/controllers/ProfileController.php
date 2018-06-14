<?php include_once('models/admin.php');
	class ProfileController{
		var $list;

		function __construct(){
			$this->list=new Admin();
		}
		
		function edit(){
			$id=$_GET['id'];
			
			$edit_admin=$this->list->find($id);
			require_once("views/admin/edit.php");
		}

		function update(){
			
			//update du lieu o edit
			$file_name=$_FILES['hinhAnh']['name'];

			$file_path=$_FILES['hinhAnh']['tmp_name'];
			$new_path="public/images/".$file_name;

			$uploaded_file=move_uploaded_file($file_path,$new_path);
			$info=$_POST;

			$info['hinhAnh']= $new_path;
			$id=$_GET['id'];

			$update_admin=$this->list->update($info,$id);  //info la mang thong tin
		
			if(!$update_admin){
				setcookie('msg_s','Successful',time()+2);
			}else{
				setcookie('msg_f','Unsuccessful',time()+2);

				}
			header("Location: ?mod=admin&act=profile");
		}
		function profile(){
			

			$ad=$this->list->find($_SESSION['maQuanLi']);
			
			require_once "views/admin/profile.php";
		}
	}
 ?>