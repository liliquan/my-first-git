<?php 
	
	namespace Admin\Controller;
	use \Core\AdminController;
	class UserController extends AdminController{

		public function doLogin(){

			$uname = $_POST['uname'];
			$pwd = $_POST['pwd'];
			$Code = $_POST['validateCode'];

			$userModel = new \Model\UserModel;
			$userArr = $userModel->getUserInfoByName($uname);
			
			if(!$userArr){
				$this->error("admin","index","index","您输入的用户名不存在",3);
				exit;
			}

			if($userArr['passwd']!=md5($pwd)){
				$this->error("admin","index","index","您输入的密码不正确",3);
				exit;
			}
			$this->display(APP.PLAY."/View/Public/main.html");
		}

	}


 ?>