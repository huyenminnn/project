<?php 
	include_once "models/connection.php";
	class NhanVienQuay{
		var $conn_nvq;
		function __construct(){
			$object=new Connection();
			$this->conn_nvq=$object->conn;
		}

		function list(){
			$query="SELECT * FROM nhanvienquay ";
			$result=$this->conn_nvq->query($query);
			$list_nvq=array(); //mang nhan vien
			while ($row=$result->fetch_assoc()) {
				$list_nvq[]=$row;
			}
			return $list_nvq;
		}

		// thong tin nhan vien quay
		function store($nvq){
			$query ="INSERT INTO `nhanvienquay`(`maNhanVien`,`Ten`,`Ngay sinh`,`Gioi tinh`,`So dien thoai`,`Email`,`Dia chi`,`Chuc vu`,`Password`)
			VALUES ('".$nvq['maNhanVien']."','".$nvq['ten']."','".$nvq['ngaySinh']."','".$nvq['gioiTinh']."','".$nvq['sdt']."','".$nvq['email']."','".$nvq['diaChi']."','".$nvq['chucVu']."','".$nvq['password']."')";
			$result=$this->conn_nvq->query ($query);
			return $result;

		}
		
		function find($maNhanVien){
			
			$query ="SELECT * FROM `nhanvienquay` WHERE `maNhanVien`='".$maNhanVien."'";
			$result=$this->conn_nvq->query($query)->fetch_assoc();
			return $result;

		}

		function find_name($ten){
			
			$query ="SELECT * FROM `nhanvienquay` WHERE `Ten`='".$ten."'";
			$result=$this->conn_nvq->query($query)->fetch_assoc();
			return $result;
		}
		//check id trung
		function find_id($id){
			echo $id;
			$query = "SELECT * FROM nhanvienquay WHERE maNhanVien='".$id."'";
			$result=$this->conn_nvq->query($query);
			$list_nvq=array();
			while ($row=$result->fetch_assoc()) {
				$list_nvq[]=$row;
			}
			if ($list_nvq==null) {
				$result=0;
			}else $result=1;
			
			return $result;
		}
		function update($nvq,$maNhanVien){
			
			$query ="UPDATE `nhanvienquay` SET `Ten`='".$nvq['ten']."',`Ngay sinh`='".$nvq['ngaySinh']."',`Gioi tinh`='".$nvq['gioiTinh']."',`So dien thoai`='".$nvq['sdt']."',`Email`='".$nvq['email']."',`Dia chi`='".$nvq['diaChi']."',`Chuc vu`='".$nvq['chucVu']."',`Password`='".$nvq['password']."'WHERE `maNhanVien`= '".$maNhanVien."'";
		
			$result=$this->conn_nvq->query ($query);
			return $result;
		}

		function delete($maNhanVien){
			$query="DELETE FROM nhanvienquay WHERE maNhanVien='".$maNhanVien."'";
			$result=$this->conn_nvq->query($query);
			return true;
		}
	}

 ?>