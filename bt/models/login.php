<?php 
	include_once("models/connection.php");
	class Login{
		
		var $connLogin;
		function __construct(){
			
			$object=new Connection();
			$this->connLogin=$object->conn;
		}

		function find($id){
			$query="SELECT * FROM quanli WHERE maQuanLi ='".$id."' ";
			$result=$this->connLogin->query($query)->fetch_assoc();
			return $result;
		}
	}
 ?>