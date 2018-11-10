<?php 
	namespace Model;
	use \Core\Model;
	class UserModel extends Model{
		protected $table = 'user';

		function findAll($data=[]){

			return $this->getAll($data);
		}

		function getUserInfoByName($uname){

			$sql = "select * from ".$this->getTableName()." where username = :name";
			$data[":name"] = $uname;
			$arr = $this->getRow($sql,$data);

			return $arr;
		}
	}



 ?>