<?php
/* Smarty version 3.1.30, created on 2018-04-08 11:49:42
  from "D:\class\two_class\czxyframe\App\Home\View\User\User_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac991565ddb41_59824303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24d9c43983023e7d3d85d66c0d01d7e4e9d8c786' => 
    array (
      0 => 'D:\\class\\two_class\\czxyframe\\App\\Home\\View\\User\\User_list.html',
      1 => 1523159376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac991565ddb41_59824303 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>图书管理系统</title>
	<style>
		table {
			font-size: 16px;
			color: #666;
			width: 1200px;
			margin: 0px auto;
			text-align: center;
			border-collapse: collapse;
		}

		th,td {
			border: 1px solid #999;
		}

		tr:nth-child(even) {
			background-color: #FFFFCC;
		}
	</style>
</head>
<body>
	<!-- {$qqw} -->
	<!-- <a href="addbook.html">添加图书</a>  -->
	<hr>
	<table>
		<caption><h2>图书管理系统</h2></caption>
		<tr>
			<th>编号</th>
			<th>书名</th>
			<th>作者</th>
			<th>发布日期</th>
		</tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['qqw']->value, 'v', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_type'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['add_time'];?>
</td>
		</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	
	</table>
</body>
</html><?php }
}
