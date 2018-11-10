<?php 
	namespace Core;

	class Model{

		private $dao;

		function __construct(){
			$this->dao = Dao::getInstance();
		}

		function getAll($sql,$data){


			// $sql = "select * from {$this->getTableName()}";

			return $this->dao->db_getAll($sql,$data);

		}

		/*
        * 查询一行数据
		*/
		function getRow($sql,$data){

			//执行查询
			return $this->dao->db_getRow($sql,$data);
			//返回结果
		}


		/*
        * 查询一行数据
		*/
		function exec($sql,$data){

			//执行查询
			return $this->dao->db_exec($sql,$data);

			//返回结果
		}


		/*
		* 定义静态方法，拼接表名
		*/
		function getTableName(){

			//$config;
			global $config;
			//拼接表名
			return $config['mysql']['prefix'].$this->table;

		}

		/*
		 * 增加获取一列的方法
		 */
		function getFirstFeild($sql,$data){

			//获取第一列
			return $this->dao->db_getFirstField($sql,$data);

		}

		/*
		 * 
		 */

		
	}


 ?>