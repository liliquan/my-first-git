<?php 
	namespace Core;
	use \PDO;
	class Dao{
		private static $dao = null;
		private $pdo;
		private $error;

		private function __construct(){
		
			global $config;
			$type = $config['type'];
			$host = $config[$type]['host'];
			$port = $config[$type]['port'];
			$user = $config[$type]['user'];
			$pass = $config[$type]['pass'];
			$dbname = $config[$type]['dbname'];
			$charset = $config[$type]['charset'];

			$this->pdo = new PDO("{$type}:host={$host};port={$port};charset={$charset};dbname={$dbname}",$user,$pass);

		}

		private function __clone(){

			
		}

		// 获取单例对象的静态方法
		public static function getInstance(){
			// 判断对象是否是第一次创建 如果是第一次创建,new 对象赋值给静态属性
			if(!self::$dao instanceof self){

				self::$dao = new self;
			}
			// 如果不是第一次创建,返回静态属性
			return self::$dao;

		}

		// 定义方法  查询所有数据

		function db_getAll($sql,$data=""){
			// var_dump($data);
			try{
				//预处理
				$stmt = $this->pdo->prepare($sql);
				//如果预处理成功，则绑定数据
				if($stmt->execute($data)){
					return $stmt->fetchAll(PDO::FETCH_ASSOC);
				}

			}catch(PDOException $e){
				//保存错误信息
				self::$error = $e->getMessage();
				return false;
			}

		}

		//获取一列
		function db_getFirstField($sql,$data){

			try{
				//预处理
				
				$stmt = $this->pdo->prepare($sql);
				//如果预处理成功，则绑定数据
				if($stmt->execute($data)){
					$arr = $stmt->fetch(PDO::FETCH_NUM);
					return $arr[0];
				}

			}catch(PDOException $e){
				//保存错误信息
				self::$error = $e->getMessage();
				return false;
			}

		}


		function db_exec($sql,$data){

			try{
				return $this->pdo->exec($sql);
				
			}catch(PDOException $e){
				self::$error = $e->getMessage();
				return false;
			}
			
		}


		function db_lastInsertId(){

			return $this->pdo->lastInsertId();
			
		}

		function db_getRow($sql,$data){
			try{
				$stmt = $this->pdo->prepare($sql);
				if($stmt->execute($data)){
					return $stmt->fetch(PDO::FETCH_ASSOC);
				}	
			}catch(PDOException $e){
				self::$error = $e->getMessage();
				return false;
			}
		}


	}



 ?>