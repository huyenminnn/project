<?php 

	include_once('models/foods.php');
	class FoodController{
		var $list;

		function __construct(){
			$this->list=new Food();
		}

		function list(){
			$list_food=$this->list->list();
			require_once("views/foods/list.php");

		}
		function description(){
			$id=$_GET['id'];
			$food=$this->list->find($id);
			require_once "views/foods/description.php";
		}

		function delete(){
			$id=$_GET['id'];
			$del=$this->list->delete($id);
			if($del==1){
				setcookie('msg_s','Delete successful!',time()+2);
				header("Location:?mod=foods&act=list ");
			}
		}
		function add(){
			require_once "views/foods/add.php";
		}

		function store(){
			if (isset($_POST['submit'])) {
			
			$id=$_POST['maMonAn'];
			$list_id=$this->list->find_id($id);//lấy ra hết các hàng trong cơ sơ dữ liệu

			if (!$list_id) {
				
				$file_name=$_FILES['hinhAnh']['name'];

				$file_path=$_FILES['hinhAnh']['tmp_name'];
				$new_path="public/images/".$file_name;

				$uploaded_file=move_uploaded_file($file_path,$new_path);
				

				
					$info=$_POST;
					$info['hinhAnh']= $new_path;
					$add_food=$this->list->store($info);
					
					if ($add_food==1) {
						setcookie('msg_s','Add food successful!',time()+2);
						header("Location:?mod=foods&act=list ");
					}else{
						setcookie('msg_f','Add food unsuccessful!',time()+2);
						header("Location:?mod=foods&act=list");
					}
				}else{
					
					setcookie('msg_f','IdFood already exists',time()+2);
					header("Location: ?mod=foods&act=add");
				}
			}
}
		function edit(){
			$id=$_GET['id'];
			
			$edit_food=$this->list->find($id);
			require_once("views/foods/edit.php");
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
			$update_food=$this->list->update($info,$id);  //info la mang thong tin
		
			if(!$update_food){
				setcookie('msg_s','Successful',time()+2);
			}else{
				setcookie('msg_f','Unsuccessful',time()+2);

				}
			header("Location: ?mod=foods&act=list");
		}
	}
 ?>