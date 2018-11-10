<?php 
	namespace Core;
	
	class BaseController{

		public $smarty;

		function __construct(){

			require_once VENDOR."Smarty/Smarty.class.php";
			$this->smarty = new \Smarty;
			// 模板位置
			$this->smarty->template_dir = APP.PLAY."/View/".CONTROLLER."/";
			// 设置模板编译的路径
			$this->smarty->compile_dir = APP.PLAY."/View_c";
			// 配置模板是否进行缓存
			$this->smarty->caching = false;
			// 配置缓存目录
			$this->smarty->cache_dir = APP.PLAY."/Cache";

			$this->smarty->left_delimiter = "<{";
			$this->smarty->right_delimiter = "}>";

		}

		public function succes($p,$c,$a,$msg,$n=3){

			$url = "index.php?p={$p}&c={$c}&a={$a}";
			// header("refresh:{$n};url={$url}");
			// echo $msg;

			include_once APP.PLAY."/View/Public/success.html";
			exit;

		}


		public function error($p,$c,$a,$msg,$n=3){

			$url = "index.php?p={$p}&c={$c}&a={$a}";
			// header("refresh:{$n};url={$url}");
			// echo $msg;
			
			include_once APP.PLAY."/View/Public/error.html";
			exit;

		}


		public function assign($name,$value){

			$this->smarty->assign($name,$value);

		}

		public function display($name){

			$this->smarty->display($name);

		}

	}


 ?>