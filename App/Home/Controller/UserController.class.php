<?php 

    //想把user表中数据读取出来，并且显示
    //1）建立一个UserController,专门处理User表相关的业务逻辑
    //2）建立一个UserModel 类，专门用来连接数据库，并且获取数据
    //3）建立User控制器对应的视图文件
	// index.php?p=home&c=user&a=getAllUser

	//定义命名空间  Home\Controller空间
	namespace Home\Controller;
	use \Core\HomeController;

	class UserController extends HomeController{

		function getAllUser(){

			//调用模型类，获取数据
			//1)引入模型类文件
			//2)实例化 UserModel类的对象
			// echo __CLASS__."--->".__METHOD__;
			// require_once APP."Model/UserModel.class.php";
			
			$userModel = new \Model\UserModel;
			//此处要调用模型类的方法，获取所有的用户信息
			$dataArr = $userModel->findAll();
			
			//加载视图文件，显示数据
			// include_once APP.PLAY."/View/".CONTROLLER."/User_list.html";

			$this->assign("qqw",$dataArr);

			$this->display("User_list.html");
		}	


	}


 ?>
