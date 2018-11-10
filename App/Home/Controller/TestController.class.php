<?php 

	namespace Home\Controller;
	use \Core\HomeController;

	class TestController extends HomeController{


		function getCaptcha(){


			\Captcha::en_captcha(4,20,108,35);


		}

		// 上传类
		function testUpload(){
			$this->display("upload.html");
		}
		// 保存到文件夹
		
		function saveUpladFile(){

			//接收文件上传数据
			$file = $_FILES['head_img'];
			// var_dump($file);
			//保存图片到指定的目录
			global $config;

			//使用配置文件赋值
			$img['dir'] = $config['upload']['upload_dir'];
			$img['water'] = $config['upload']['water_img'];

			//实例化文件上传对象
			$upload = new \Uploader;
		    //上传函数的优化
		    //如果上传成功，uploadFile函数直接返回文件名
		    //如果上传失败，uploadFile函数返回false;
		    $fname = $upload->uploadImageAndWater($file,$img,$config['upload']['allow_suffix'],1);

			if($fname!=false){

				echo "文件上传成功!,文件保存在:".$fname;
			}else{
				echo "文件上传失败！";
			}

		}

		//文件文件图像处理类
		function testWaterImage(){

				//定义一个数组，保存两个路径
				$img['image'] = PUBLICDIR."img3.jpg";
				$img['water'] = PUBLICDIR."logo.png";

				$imgObj = new \Image;
				$imgObj->waterImage($img,"topRight");

		}

		//测试分页
		function testPage(){

			//获取分页类
			//计算总记录数
			$houseModel = new \Model\HouseModel;

			$arr = $houseModel->page();

			// var_dump($arr);
			$this->assign("qqw",$arr);
			$this->display("User_list.html");

			//根据总记录数，开始计算分页

		}

	}


 ?>