<?php
/* Smarty version 3.1.30, created on 2018-04-09 20:31:07
  from "D:\class\two_class\czxyframe\App\home\View\test\upload.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acb5d0b42aa99_94757170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25470e3834e56f74b4dd22cca05fdffb64771148' => 
    array (
      0 => 'D:\\class\\two_class\\czxyframe\\App\\home\\View\\test\\upload.html',
      1 => 1523276998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5acb5d0b42aa99_94757170 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="index.php?p=Home&c=Test&a=saveUpladFile" method="post" enctype="multipart/form-data">

		用户名: <input type="text" name="uname" id="uname"><br>
		用户头像 <input type="file" name="head_img" id="head_img"><br>
		<input type="submit" value="保存">

	</form>
</body>
</html><?php }
}
