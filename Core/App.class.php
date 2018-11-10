<?php 

	//z这个类是框架运行的基础文件
	//1）检测是否统一了入口 （是否通过index来进行访问）
	if(!defined("QQW")){
		//跳转到入口页面
		header("location:../index.php");
	}


	//2）初始化操作（配置、网页的设置....）
	class App{

		public static function run(){

			// echo __CLASS__."->->->".__METHOD__."<br>";
			//设置网页编码
			self::initCharset();
			//初始化目录的常量
			self::initDir();
			// 定义加载配置的初始化方法
			self::initConfig();
			//初始化错误信息的设置
			self::initError();
			//初始化url地址
			self::initURL();

			//自动加载文件
			self::initAutoload();

			//初始化分发方法
			self::initDispatch();
		}


		/*
		 *  静态方法，用于初始化网页的编码
		 */
		public static function initCharset(){
			//使用header()
			header("Content-type:text/html;character=UTF-8");
		}

		/*
		 *  initDir() 用来初始化 路径的常量
		 */
		public static function initDir(){
			// var_dump(__DIR__);
			$loc = strrpos(__DIR__,"\\");
			$dir = substr(__DIR__,0,$loc+1);
			$str = str_replace("\\", "/", $dir);

			define("ROOT",$str);
			define("APP",        ROOT."App/");
			define("CONFIG",     ROOT."Config/");
			define("CORE",       ROOT."CORE/");
			define("PUBLICDIR",     ROOT."Public/");
			define("UPLOAD",     ROOT."Upload/");
			define("VENDOR",     ROOT."Vendor/");
			// var_dump(APP);
		}

		// 处理错误信息
		public static function initError(){
			@ini_set("display_errors",1);
			@ini_set("error_reporting","E_ALL");
		}


		public static function initURL(){
			$p = isset($_REQUEST['p']) ? $_REQUEST['p'] : "Home";
			$c = isset($_REQUEST['c']) ? $_REQUEST['c'] : "Index";
			$a = isset($_REQUEST['a']) ? $_REQUEST['a'] : "index";

			define("PLAY",$p);
			define("CONTROLLER",$c);
			define("ACTION",$a);
			// var_dump($p,$a,$c);
		}

		public static function initDispatch(){
			$cName = CONTROLLER."Controller";
			$a = ACTION;
			// $controller_path = APP.PLAY."/Controller/".$cName.".class.php";
			// if(file_exists($controller_path)){
			// 	require_once $controller_path;
			// var_dump($cName);
				$cName = "\\".PLAY."\\"."Controller\\".$cName;
			// var_dump($cName);
				$controllerObj = new $cName;
				$controllerObj->$a();
			// }else{
			// 	die("系统错误,您需要的控制器{$controller_path}不存在");
			// }
		}

		// 定义加载配置的初始化方法
		private static function initConfig(){
			global $config;
			$config = include_once CONFIG."Config.php";
			// var_dump($config);
		} 



		private static function initAutoload(){
			// 自动加载控制类
			spl_autoload_register(array('self','loadController'));
			// 自动加载模型类
			spl_autoload_register(array('self','loadModel'));
			// 自动加载核心类
			spl_autoload_register(array('self','loadCoreClass'));
			// 自动加载扩展类
			spl_autoload_register(array('self','loadVendorClass'));

		}

		private static function loadController($class_name){

			$class_name = basename($class_name);
			//模型类的文件路径
			$path = APP.PLAY."/Controller/".$class_name.".class.php";

			//判断文件是否存在
			if(file_exists($path)){
				require_once $path;
			}


		}

		/*
		 * 加载模型类  App/Model
		 */
		private static function loadModel($class_name){

			// var_dump($class_name);  // Model\UserModel 
			//此时应该去 /App/Model/UserModel.class.php
			$class_name = basename($class_name);

			//模型类的文件路径
			$path = APP."Model/".$class_name.".class.php";

			//判断文件是否存在
			if(file_exists($path)){
				// require_once "/App/Model/UserModel.class.php";
				require_once $path;
			}

		}

		/*
		 * 加载核心类文件  /Core
		 */
		private static function loadCoreClass($class_name){

			$class_name = basename($class_name);
			//模型类的文件路径
			$path = CORE.$class_name.".class.php";

			//判断文件是否存在
			if(file_exists($path)){
				require_once $path;
			}

		}

		private static function loadVendorClass($class_name){

			$class_name = basename($class_name);
			//模型类的文件路径
			$path = VENDOR.$class_name.".class.php";

			//判断文件是否存在
			if(file_exists($path)){
				require_once $path;
			}


		}

	}



 ?>