<?php 

	//return一个 存有配合信息的数组
	return array(
	//    key    value
		'type'=>"mysql",

		'mysql'=>array(
			'host'=>'localhost',//数据服务器主机名（IP、域名）,localhost 
			'port'=>3306,//Web端口默认为 80  MySQL服务器的默认端口 3306
			'user'=>'root',//数据库用户名
			'pass'=>'abc142560',//数据密码
			'dbname'=>'czxyframe',//数据库名称
			'charset'=>'utf8',//数据库的默认编码
			'prefix'=>'fra_'//数据库的默认编码
		),

		'upload'=>array(
				//设置文件上传允许的后缀
				'allow_suffix'=>['jpg','jpeg','gif','png','bmp'],
				'upload_dir'=>UPLOAD,
				'water_img'=>PUBLICDIR.'logo.png'
		)

	);


 ?>