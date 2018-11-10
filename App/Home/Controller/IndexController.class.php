<?php 
	//增加命名空间
	namespace Home\Controller;
	use \Core\HomeController;
	//新建类
	class IndexController extends HomeController{
		//创建index方法
		/*
		 * 默认的访问方法
		 */
		function index(){
			$frameName = "czxyframe框架";
			// 加载视图，显示界面
			include_once APP.PLAY."/View/".CONTROLLER."/index.html";
		}


		function textSucces(){
			$this->succes("Home","User","getAllUser","操作成功!");
		}

		function textError(){
			$this->error("Home","User","getAllUser","操作失败!");
		}

	}





 ?>