<?php
/* Smarty version 3.1.30, created on 2018-04-10 21:16:03
  from "D:\class\two_class\czxyframe\App\Home\View\Test\User_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5accb9131820e2_13371748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5967bdbab4cd38160e2464dade2dd3e972faebe4' => 
    array (
      0 => 'D:\\class\\two_class\\czxyframe\\App\\Home\\View\\Test\\User_list.html',
      1 => 1523364557,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5accb9131820e2_13371748 (Smarty_Internal_Template $_smarty_tpl) {
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
		<!-- <?php echo var_dump($_smarty_tpl->tpl_vars['qqw']->value);?>
 -->

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['qqw']->value['data'], 'v1', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['v1']->value) {
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['v1']->value['id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v1']->value['username'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v1']->value['user_type'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v1']->value['add_time'];?>
</td>
		</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</table>
	<br>
	<br>
	<hr>
	<?php echo $_smarty_tpl->tpl_vars['qqw']->value['pageStr'];?>

</body>
</html><?php }
}
