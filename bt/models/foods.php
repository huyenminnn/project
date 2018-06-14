<?php 
	include_once "models/connection.php";
	class Food{
		var $conn_food;
		function __construct(){
			$object=new Connection();
			$this->conn_food=$object->conn;
		}

		function list(){
			$query="SELECT * FROM monan ";
			$result=$this->conn_food->query($query);
			$list_food=array();
			while ($row=$result->fetch_assoc()) {
				$list_food[]=$row;
			}
			return $list_food;
		}

		// mang thong tin
		function store($food){
			$array = array();
			$array[0] = $food["maMonAn"];
			$array[1] = $food["ten"];
			$array[2] = $food["hinhAnh"];
			$array[3] = $food["donGia"];
			$array[4] = $food["moTa"];
			$array[5] = $food["loai"];
			

			$query = "INSERT INTO `monan` (`maMonAn`,`Ten`,`Hinhanh`,`Dongia`,`Mota`,`Loai`) VALUES ('".$array[0]."','".$array[1]."','".$array[2]."','".$array[3]."','".$array[4]."','".$array[5]."')";
			echo $query;
			
			$result=$this->conn_food->query($query);
			return $result;

		}
		//tim theo maMonAn
		function find($maMonAn){
			
			$query ="SELECT * FROM `monan` WHERE `maMonAn`='".$maMonAn."'";
			$result=$this->conn_food->query($query)->fetch_assoc();
			return $result;
		}

		

		//danh sach id
		function find_id($id){
			$query = "SELECT maMonAn FROM monan WHERE maMonAn='".$id."'";
			$result=$this->conn_food->query($query);
			$list_food=array();
			while ($row=$result->fetch_assoc()) {
				$list_food[]=$row;
			}
			if ($list_food==null) {
				$result=0;
			}else $result=1;
			
			return $result;
		}

		function update($food,$maMonAn){
			
			$query ="UPDATE `monan` SET `Ten`='".$food['ten']."',`Hinhanh`='".$food['hinhAnh']."',`DonGia`='".$food['donGia']."',`Mota`='".$food['moTa']."',`Loai`='".$food['loai']."' WHERE `maMonAn`= '".$maMonAn."'";
		
			$result=$this->conn_food->query ($query);
			return $result;
		}

		function delete($maMonAn){
			$query="DELETE FROM monan WHERE maMOnAn='".$maMonAn."'";
			$result=$this->conn_food->query($query);
			return true;
		}
	}

 ?>