<?php 
	include_once "models/connection.php";
	class Admin{
		var $conn_admin;
		function __construct(){
			$object=new Connection();
			$this->conn_admin=$object->conn;
		}
		
		function find($maQuanLi){
			
			$query ="SELECT * FROM `quanli` WHERE `maQuanLi`='".$maQuanLi."'";
			$result=$this->conn_admin->query($query)->fetch_assoc();
			return $result;
		}

		function update($admin,$maQuanLi){
			
			$query ="UPDATE `quanli` SET `Ten`='".$admin['ten']."',`Chuc Vu`='".$admin['chucVu']."',`Password`='".$admin['password']."',`Ngay sinh`='".$admin['ngaySinh']."',`Dia chi`='".$admin['diaChi']."',`Email`='".$admin['email']."',`Gioi tinh`='".$admin['gioiTinh']."',`Hinh anh` = '".$admin['hinhAnh']."' WHERE `maQuanLi`= '".$maQuanLi."'";
		
			$result=$this->conn_admin->query ($query);
			return $result;
		}

		
	}

 ?>