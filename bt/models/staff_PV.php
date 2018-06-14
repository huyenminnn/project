<?php 
	include_once "models/connection.php";
	class PhucVu{
		var $conn_pv;
		function __construct(){
			$object=new Connection();
			$this->conn_pv=$object->conn;
		}

		function list(){
			$query="SELECT * FROM phucvu ";
			$result=$this->conn_pv->query($query);
			$list_pv=array(); //mang nhan vien
			while ($row=$result->fetch_assoc()) {
				$list_pv[]=$row;
			}
			return $list_pv;
		}

		// thong tin phuc vu
		function store($pv){
			$query ="INSERT INTO `phucvu`(`maNhanVien`,`Ten`,`Ngay sinh`,`Gioi tinh`,`So dien thoai`,`Email`,`Dia chi`,`Chuc vu`,`Password`)
			VALUES ('".$pv['maNhanVien']."','".$pv['ten']."','".$pv['ngaySinh']."','".$pv['gioiTinh']."','".$pv['sdt']."','".$pv['email']."','".$pv['diaChi']."','".$pv['chucVu']."','".$pv['password']."')";
			
			$result=$this->conn_pv->query ($query);
			return $result;

		}
		
		function find($maNhanVien){
			
			$query ="SELECT * FROM `phucvu` WHERE `maNhanVien`='".$maNhanVien."'";
			$result=$this->conn_pv->query($query)->fetch_assoc();
			return $result;

		}

		function find_ten($ten){
			
			$query ="SELECT * FROM `phucvu` WHERE `Ten`='".$ten."'";
			$result=$this->conn_pv->query($query)->fetch_assoc();
			return $result;
		}

		//check id trung khi add
		function find_id($id){
			
			$query = "SELECT maNhanVien FROM phucvu WHERE maNhanVien='".$id."'";
			$result=$this->conn_pv->query($query);
			$list_pv=array();
			while ($row=$result->fetch_assoc()) {
				$list_pv[]=$row;
			}
			if ($list_pv==null) {
				$result=0;
			}else $result=1;
			
			return $result;
		}

		function update($pv,$maNhanVien){
			
			$query ="UPDATE `phucvu` SET `Ten`='".$pv['ten']."',`Ngay sinh`='".$pv['ngaySinh']."',`Gioi tinh`='".$pv['gioiTinh']."',`So dien thoai`='".$pv['sdt']."',`Email`='".$pv['email']."',`Dia chi`='".$pv['diaChi']."',`Chuc vu`='".$pv['chucVu']."',`Password`='".$pv['password']."'WHERE `maNhanVien`= '".$maNhanVien."'";
		
			$result=$this->conn_pv->query ($query);
			return $result;
		}

		function delete($maNhanVien){
			$query="DELETE FROM phucvu WHERE maNhanVien='".$maNhanVien."'";
			$result=$this->conn_pv->query($query);
			return true;
		}
	}

 ?>